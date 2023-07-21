<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/AppBackend.php');

class ModuleSyarat extends AppBackend
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('../../syarat/models/SyaratModel');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data = array(
      'app' => $this->app(),
      'main_js' => $this->load_main_js('moduleSyarat'),
      'card_title' => 'Module › Syarat',
      'data' => $this->SyaratModel->getActive()
    );
    $this->template->set('title', 'Module Syarat | ' . $data['app']->app_name, TRUE);
    $this->template->load_view('moduleSyarat/index', $data, TRUE);
    $this->template->render();
  }

  public function ajax_save()
  {
    $this->handle_ajax_request();
    $this->form_validation->set_rules($this->SyaratModel->rules());

    if ($this->form_validation->run() === true) {
      echo json_encode($this->SyaratModel->save());
    } else {
      $errors = validation_errors('<div>- ', '</div>');
      echo json_encode(array('status' => false, 'data' => $errors));
    };
  }
}
