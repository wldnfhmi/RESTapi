<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH. "libraries/Format.php";
require APPPATH. "libraries/RestController.php";
use chriskacerguis\RestServer\RestController;

class GetPenduduk extends RestController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelPenduduk');
  }

  public function index_get()
  {
    $warga = new ModelPenduduk;
    $resultwarga = $warga->get_penduduk();
    $this->response($resultwarga, 200);
  }

  public function PendudukByNik_get($nik)
  {
    $warga = new ModelPenduduk;
    $resultwarga = $warga->get_penduduk_bynik($nik);
    if($resultwarga == true){
      $this->response(
        [
          'status' => true,
          'nik' => $nik,
          'data' => $resultwarga
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'nik' => $nik,
          'pesan' => 'Data '. $nik .' Tidak Ditemukan'
        ], RestController::HTTP_OK
      );
    }
  }

  public function PendudukByNama_get($nama)
  {
    $warga = new ModelPenduduk;
    $resultwarga = $warga->get_penduduk_bynama($nama);
    if($resultwarga == true){      
      $this->response(
        [
          'status' => true,
          'nama' => $nama,
          'data' => $resultwarga
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'nama' => $nama,
          'pesan' => 'Data '. $nama .' Tidak Ditemukan'
        ], RestController::HTTP_OK
      );
    }
  }

  public function PendudukByKelahiran_get($tmpt_lahir)
  {
    $warga = new ModelPenduduk;
    $resultwarga = $warga->get_penduduk_bykelahiran($tmpt_lahir);
    if($resultwarga == true){      
      $this->response(
        [
          'status' => true,
          'kelahiran' => $tmpt_lahir,
          'data' => $resultwarga
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'kelahira' => $tmpt_lahir,
          'pesan' => 'Data '. $tmpt_lahir .' Tidak Ditemukan'
        ], RestController::HTTP_OK
      );
    }
  }

  public function PendudukByGender_get($jns_kelamin)
  {
    $warga = new ModelPenduduk;
    $resultwarga = $warga->get_penduduk_bygender($jns_kelamin);
    if($resultwarga == true){      
      $this->response(
        [
          'status' => true,
          'kelahiran' => $jns_kelamin,
          'data' => $resultwarga
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'kelahira' => $jns_kelamin,
          'pesan' => 'Data '. $jns_kelamin .' Tidak Ditemukan'
        ], RestController::HTTP_OK
      );
    }
  }

  public function PendudukByRt_get($rt)
  {
    $warga = new ModelPenduduk;
    $resultwarga = $warga->get_penduduk_byrt($rt);
    if($resultwarga == true){      
      $this->response(
        [
          'status' => true,
          'kelahiran' => $rt,
          'data' => $resultwarga
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'kelahira' => $rt,
          'pesan' => 'Data '. $rt .' Tidak Ditemukan'
        ], RestController::HTTP_OK
      );
    }
  }

  public function PendudukByAgama_get($agama)
  {
    $warga = new ModelPenduduk;
    $resultwarga = $warga->get_penduduk_byagama($agama);
    if($resultwarga == true){      
      $this->response(
        [
          'status' => true,
          'kelahiran' => $agama,
          'data' => $resultwarga
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'kelahira' => $agama,
          'pesan' => 'Data '. $agama .' Tidak Ditemukan'
        ], RestController::HTTP_OK
      );
    }
  }

  public function AddPenduduk_post()
  {
    $warga = new ModelPenduduk;
    $data = [
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
    ];
    $addwarga = $warga->post_penduduk($data);
    if($addwarga > 0){
      $this->response(
        [
          'status' => true,
          'pesan' => 'Data Berhasil Ditambah'
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'pesan' => 'Data Gagal Ditambah'
        ], RestController::HTTP_BAD_REQUEST
      );
    }
  }

  public function UpdatePenduduk_put($nik)
  {
    $warga = new ModelPenduduk;
    $data = [
      'nama' => $this->put('nama'),
      'tmpt_lahir' => $this->put('tmpt_lahir'),
      'tgl_lahir' => $this->put('tgl_lahir'),
      'jns_kelamin' => $this->put('jns_kelamin'),
      'alamat' => $this->put('alamat'),
      'rt' => $this->put('rt'),
      'rw' => '004',
      'kelurahan' => 'Klender',
      'kecamatan' => 'Duren Sawit',
      'agama' => $this->put('agama'),
      'status' => $this->put('status'),
      'pekerjaan' => $this->put('pekerjaan'),
      'kewarganegaraan' => 'WNI'
    ];
    $putwarga = $warga->put_penduduk($nik, $data);
    if($putwarga > 0){
      $this->response(
        [
          'status' => true,
          'pesan' => 'Data Berhasil Diupdate'
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'pesan' => 'Data Gagal Diupdate'
        ], RestController::HTTP_BAD_REQUEST
      );
    }
  }

  public function DeletePenduduk_delete($nik)
  {
    $warga = new ModelPenduduk;
    $delwarga = $warga->del_penduduk($nik);
    if($delwarga > 0){
      $this->response(
        [
          'status' => true,
          'nik' => $nik,
          'pesan' => 'Data Berhasil Didelete'
        ], RestController::HTTP_OK
      );
    } else {
      $this->response(
        [
          'status' => false,
          'nik' => $nik,
          'pesan' => 'Data Gagal Didelete'
        ], RestController::HTTP_BAD_REQUEST
      );
    }
  }
}