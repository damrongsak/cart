<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function csv_file_to_mysql_table($source_file, $target_table, $max_line_length = 10000) {
    $ci = & get_instance();
    $ci->load->database();
    
    if (($handle = fopen("$source_file", "r")) !== FALSE) {
        $columns = fgetcsv($handle, $max_line_length, ",");
        foreach ($columns as &$column) {
            $column = str_replace(".", "", $column);
        }
        $insert_query_prefix = "INSERT INTO $target_table (" . join(",", $columns) . ")\nVALUES";
        while (($data = fgetcsv($handle, $max_line_length, ",")) !== FALSE) {
            while (count($data) < count($columns))
                array_push($data, NULL);
            $query .= "$insert_query_prefix (" . join(",", quote_all_array($data)) . ");\n";
            $ci->db->query($query);
        }
        fclose($handle);
    }
    return $query;
}

function quote_all_array($values) {
    foreach ($values as $key => $value)
        if (is_array($value))
            $values[$key] = quote_all_array($value);
        else
            $values[$key] = quote_all($value);
    return $values;
}

function quote_all($value) {
    if (is_null($value))
        return "NULL";

    $value = "'" . mysql_real_escape_string($value) . "'";
    return $value;
}

?>
