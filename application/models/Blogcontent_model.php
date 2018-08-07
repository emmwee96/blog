<?php
class Blogcontent_model extends CI_Model{
 
 
        function newblog($data){//insert blog data to post database
        $this->db->insert('post',$data);
        }

        function blogupdate($user_id){//allow user to update their blog
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('user_id', $user_id);
            $query = $this->db->get();
            return $query->result_array();
        }

        function viewblogpost($data){//allow user to view their post 

            $this->db->select('*');
            $this->db->from('post');
            $query = $this->db->get();
            return $query;
        }

        function getpost($user_id){//get user blog post when login
            $this->db->select('*');
            $this->db->from('post');
            $this->db->where('user_id', $user_id); 
            $query = $this->db->get();
 
            if ($query->num_rows() > 0)
            {
            return $query; // just return $query
            }
     }

        function getallpost(){
            $this->db->select('*');
            $this->db->from('post');
            $query = $this->db->get();

            if ($query->num_rows() > 0)
            {
            return $query; // just return $query
            }           
        }

        function view_blogger_name($user_id){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->join('post','user_id = user_user_name');
            $query = $this->db->get();

            return $query;
        }        
}
?>