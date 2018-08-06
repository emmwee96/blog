<?php
class User_model extends CI_Model{
 
 
function register($data){
  $this->db->insert('user',$data);
}

function login_user($data) {
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email', $data['user_email']);
  $this->db->where('user_password', $data['user_password']);
  $query = $this->db->get();
  return $query->row_array();
}

function user_view($user_id){
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->where('user_id', $user_id);
    $query = $this->db->get();
    return $query->result_array();
   }

function user_profile_update($user_id){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user_id', $user_id);
    $query = $this->db->get();
    return $query->result_array();
}

function update($data, $user_id){
  $this->db->where('user_id', $user_id);
  $this->db->update('user', $data);
  // die($this->db->last_query());
}


}




// function email_check($email){
 
//   $this->db->select('*');
//   $this->db->from('user');
//   $this->db->where('user_email',$email);
//   $query=$this->db->get();
 
//   if($query->num_rows()>0){
//     return false;
//   }else{
//     return true;
//   }
 
// }
 
 

 
 
?>