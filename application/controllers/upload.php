<?php


class upload extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('projects_model');
  }

  function index()
  {
    $this->load->view('pages/upload_form', array('error' => ' ' ));
  }

  function do_upload()
  {
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '800';
    $config['max_width']  = '1024';
    $config['max_height']  = '800';

    $this->load->library('/upload', $config);
    

    if ( ! $this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());

      $this->load->view('pages/upload_form', $error);
    }
    else
    {
      $data = array(
      'upload_data' => $this->upload->data(),
      'project_name' => $this->input->post('project_name'),
      'url'=> $this->input->post('url')
      );

      // var_dump($data['upload_data']['file_name']);

      $this->load->view('pages/upload_success', $data);
      //Transfering Data to model
      $this->projects_model->form_insert($data);
      // Loading View
      // $this->load->view('/home');
      redirect('/home');

    }
  }


}
?>