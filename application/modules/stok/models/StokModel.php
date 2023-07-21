<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StokModel extends CI_Model
{
  private $_table = 'stok';
  private $_tableView = '';

  public function rules()
  {
    return array(
      [
        'field' => 'stok',
        'label' => 'Stok',
        'rules' => 'required|trim'
      ]

    );
  }

  public function getActive()
  {
    return $this->db->order_by('id', 'desc')->limit('1')->get($this->_table)->row();
  }

  public function save()
  {
    $response = array('status' => false, 'data' => 'No operation.');

    try {
      $temp = $this->getActive();

      if (count($temp) == 0) {
        $response = $this->create();
      } else {
        $response = $this->update();
      };
    } catch (\Throwable $th) {
      $response = array('status' => false, 'data' => 'Failed to save your data.');
    };

    return $response;
  }

  public function create()
  {
    $response = array('status' => false, 'data' => 'No operation.');

    try {
      $post = $this->input->post();

      $this->stok = $post['stok'];
      $this->db->insert($this->_table, $this);

      $response = array('status' => true, 'data' => 'Data has been saved.');
    } catch (\Throwable $th) {
      $response = array('status' => false, 'data' => 'Failed to save your data.');
    };

    return $response;
  }

  public function update()
  {
    $response = array('status' => false, 'data' => 'No operation.');
    $temp = $this->getActive();

    try {
      $post = $this->input->post();

      $this->stok = $post['stok'];
      $this->db->update($this->_table, $this, ['id' => $temp->id]);

      $response = array('status' => true, 'data' => 'Data has been saved.');
    } catch (\Throwable $th) {
      $response = array('status' => false, 'data' => 'Failed to save your data.');
    };

    return $response;
  }
}
