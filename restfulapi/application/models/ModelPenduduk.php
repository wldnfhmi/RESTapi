<?php
class ModelPenduduk extends CI_Model
{
  public function get_penduduk()
  {
    $query = $this->db->get('penduduk');
    return $query->result();
  }

  public function get_penduduk_bynik($nik)
  {
    $this->db->where('nik', $nik);
    $query = $this->db->get('penduduk');
    return $query->row();
  }

  public function get_penduduk_bynama($nama)
  {
    $this->db->where('nama', $nama);
    $query = $this->db->get('penduduk');
    return $query->result();
  }

  public function get_penduduk_bykelahiran($tmpt_lahir)
  {
    $this->db->where('tmpt_lahir', $tmpt_lahir);
    $query = $this->db->get('penduduk');
    return $query->result();
  }

  public function get_penduduk_bygender($jns_kelamin)
  {
    $this->db->where('jns_kelamin', $jns_kelamin);
    $query = $this->db->get('penduduk');
    return $query->result();
  }

  public function get_penduduk_byrt($rt)
  {
    $this->db->where('rt', $rt);
    $query = $this->db->get('penduduk');
    return $query->result();
  }

  public function get_penduduk_byagama($agama)
  {
    $this->db->where('agama', $agama);
    $query = $this->db->get('penduduk');
    return $query->result();
  }

  public function post_penduduk($data)
  {
    return $this->db->insert('penduduk', $data);
  }

  public function put_penduduk($nik, $data)
  {
    $this->db->where('nik', $nik);
    return $this->db->update('penduduk', $data);
  }

  public function del_penduduk($nik)
  {
    return $this->db->delete('penduduk', ['nik' => $nik]);
  }
}