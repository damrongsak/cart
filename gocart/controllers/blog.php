<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blog
 *
 * @author damrongsak.s
 */
class blog extends CI_Controller {

    function blog() {
        parent::__construct();

        $this->load->helper("url");
        $this->load->helper("form");
    }

    function index() {
        $data["title"] = "My Blog Tile";

        $row_start = (int) $this->uri->segment(3);
        $this->db->order_by("title_id", "desc");
        $data["query"] = $this->db->get("gc_writer_new_title", 20, $row_start);


        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost:82/cart/index.php/blog/page/';
        $config['total_rows'] = $this->db->count_all('gc_writer_new_title');
        $config['per_page'] = 20;
        $config['uri_segment'] = 3;
        $config['num_links'] = 7;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active_page">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="first_last_page">';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $data["pages"] = $this->pagination->create_links();
        
        $data["debug"] = "";//nl2br(var_export($_SERVER,true));

        $this->load->view("it24hr/blog_view", $data);
    }

    function page() {
        $data["title"] = "My Blog Tile";

        $row_start = (int) $this->uri->segment(3);
        $this->db->order_by("title_id", "desc");
        $data["query"] = $this->db->get("gc_writer_new_title", 20, $row_start);


        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost:82/cart/index.php/blog/page/';
        $config['total_rows'] = $this->db->count_all('gc_writer_new_title');
        $config['per_page'] = 20;
        $config['uri_segment'] = 3;
        $config['num_links'] = 7;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active_page">';
        $config['cur_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="first_last_page">';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        $data["pages"] = $this->pagination->create_links();

        $this->load->view("it24hr/blog_view", $data);
    }

    function comments() {
        $data["title"] = "My Comment Tile";
        $this->db->where('title_id', $this->uri->segment(3));
        $data["query"] = $this->db->get("gc_comments");
        $this->load->view("it24hr/detail_view", $data);
    }

    function comment_insert() {
        $this->db->insert('gc_comments', $_POST);

        redirect('chonburi/comments/' . $_POST['entry_id']);
    }

}

?>
