<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Penduduk extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->api="http://localhost/restfulapi/api/penduduk/";
    $this->load->library('Curl.php');
    $this->load->helper('url');
    $this->load->helper('form');
  }

  function index()
  {
    $data['penduduk'] = json_decode($this->curl->simple_get($this->api), true);
    $this->load->view('listpenduduk', $data);
  }

  function create()
  {
    if(isset($_POST['submit'])){
      $data = array(
        'nik' => $this->input->post('nik'),
        'nama' => $this->input->post('nama'),
        'tmpt_lahir' => $this->input->post('tmpt_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'jns_kelamin' => $this->input->post('jns_kelamin'),
        'alamat' => $this->input->post('alamat'),
        'rt' => $this->input->post('rt'),
        'rw' => '004',
        'kelurahan' => 'Klender',
        'kecamatan' => 'Duren Sawit',
        'agama' => $this->input->post('agama'),
        'status' => $this->input->post('status'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'kewarganegaraan' => 'WNI'        
      );
      $insert = $this->curl->simple_post($this->api . '/add', $data, array(CURLOPT_BUFFERSIZE => 10));
      redirect('http://localhost/frontend/penduduk');
    } else {
      $this->load->view('creatependuduk');
    }
  }

  function edit()
  {
    if(isset($_POST['submit'])){
      $nik = $this->input->post('nik');
      $data = array(
        'nama' => $this->input->post('nama'),
        'tmpt_lahir' => $this->input->post('tmpt_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'jns_kelamin' => $this->input->post('jns_kelamin'),
        'alamat' => $this->input->post('alamat'),
        'rt' => $this->input->post('rt'),
        'rw' => '004',
        'kelurahan' => 'Klender',
        'kecamatan' => 'Duren Sawit',
        'agama' => $this->input->post('agama'),
        'status' => $this->input->post('status'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'kewarganegaraan' => 'WNI'
      );
      $update = $this->curl->simple_put($this->api . '/update/' . $nik, $data, array(CURLOPT_BUFFERSIZE => 10));
      redirect('http://localhost/frontend/penduduk');
    } else {
      $nik = $this->uri->segment(3);
      $data['penduduk'] = json_decode($this->curl->simple_get($this->api . '/nik/' . $nik), true);
      $this->load->view('editpenduduk', $data);
    }
  }

  function delete($nik)
  {
    if(empty($nik)){
      redirect('http://localhost/frontend/penduduk');
    } else {
      $nik = $this->uri->segment(3);
      $data['penduduk'] = json_decode($this->curl->simple_delete($this->api . '/delete/' . $nik), true);
      redirect('http://localhost/frontend/penduduk');
    }
  }
}