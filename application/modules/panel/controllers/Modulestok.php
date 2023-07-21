<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/AppBackend.php');

class ModuleStok extends AppBackend
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('../../stok/models/StokModel');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data = array(
      'app' => $this->app(),
      'main_js' => $this->load_main_js('moduleStok'),
      'card_title' => 'Module › Stok',
      'data' => $this->StokModel->getActive()
    );
    $this->template->set('title', 'Module Stok | ' . $data['app']->app_name, TRUE);
    $this->template->load_view('moduleStok/index', $data, TRUE);
    $this->template->render();
  }

  public function ajax_save()
  {
    $this->handle_ajax_request();
    $this->form_validation->set_rules($this->StokModel->rules());

    if ($this->form_validation->run() === true) {
      echo json_encode($this->StokModel->save());
    } else {
      $errors = validation_errors('<div>- ', '</div>');
      echo json_encode(array('status' => false, 'data' => $errors));
    };
  }
}
