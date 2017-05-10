<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pages_model extends CI_Model {

        function __construct()
        {
            //model parent call
            parent::__construct();

        }


        function getData(){

            $query = $this->db->get('first_table');

            if($query->num_rows() > 0){

                return $query -> result();
            }
            else
            {
                show_error('database is empty!');
            }
        }
    }
?>