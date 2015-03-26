<?php
Class User extends CI_Model {

  public function __construct() {
    parent:: __construct();
    $this->load->database();
  }
  
  function login($username, $password) {
    $this -> db -> select('id, username, password');
    $this -> db -> from('users');
    $this -> db -> where('username', $username);
    $this -> db -> where('password', MD5($password));
    $this -> db -> limit(1);

    $query = $this -> db -> get();
    if($query -> num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }
  
  function register($username, $fullname, $email, $gender, $password) {
     $data = array(
      'username' => $username,
      'name' => $fullname,
      'email' => $email,
      'password' => MD5($password),
      'gender' => $gender,
    );
    return $this->db->insert('users', $data);exit;
  }

  public function checkUsername($username) {
    $this -> db -> select('id, username');
    $this -> db -> from('users');
    $this -> db -> where('username', $username);
    $this -> db -> limit(1);

    $query = $this -> db -> get();
      return $query -> num_rows();
    
  }

}
?>