<?php

class feeds extends CI_Controller {

    function feeds() {
        parent::__construct();

        $this->load->helper("url");
        $this->load->helper("form");
    }

    function index() {
        $data["title"] = "My Feeds Tile";
        //Load the shiny new rssparse
        $this->load->library('RSSParser', array('url' => 'http://www.blognone.com/atom.xml', 'life' => 0));
        //Get six items from the feed
        $data["rss"] = $this->rssparser->getFeed(200);


        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost:82/cart/index.php/feeds/page/';
        $config['total_rows'] = count($data["rss"]);
        $config['per_page'] = 10;
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
        

        $data["debug"] = count($data["rss"]);
        $this->load->view("it24hr/feeds_view", $data);
    }

}
?>
