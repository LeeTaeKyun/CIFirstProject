<?php
    class Pages extends CI_Controller {

        function index(){

            $this->load->model('pages_model');

            $data['result'] = $this->pages_model->getData();
            $data['page_title'] = "CI Pages page";

            $this->load->view('Pages_view', $data);
        }

    }
?>