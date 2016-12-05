<?php
Class Projects_model extends CI_Model
{
  function __construct() {
  parent::__construct();
  $this->load->database();
}
   function form_insert($data){

    $insertData = array(
      'project_name' => $data['project_name'],
      'screenshot' => $data['upload_data']['file_name'],
      'url' => $data['url']
    );

  // Inserting in Table(projects) 
  $this->db->insert('projects', $insertData);
}
}
?>