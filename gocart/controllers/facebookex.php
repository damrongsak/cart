<?php

class FacebookEx extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $fb_config = array(
            'appId'  => '415522261813290',
            'secret' => '943716006e74d9b9283d4d5d8ab93204'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $data['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl();
        }

        $this->load->view('facebook_view',$data);
    }
}

?>
