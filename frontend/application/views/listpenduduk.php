<div style="padding-bottom: 10px; padding-top: 10px;" align="center">
  <a href="http://localhost/frontend/penduduk/create">Tambah Data</a>
</div>
<table border="1" align="center">
  <tr>
    <th colspan='10'>DATA PENDUDUK RW 04<br>KEL. KLENDER, KEC. DUREN SAWIT<br>TAHUN 2022</th>
  </tr>
  <tr>
    <th>NIK</th>
    <th>NAMA</th>
    <th>TEMPAT, TANGGAL LAHIR</th>
    <th>JENIS KELAMIN</th>
    <th>ALAMAT</th>
    <th>RT</th>
    <th>AGAMA</th>
    <th>STATUS</th>
    <th>PEKERJAAN</th>
    <th>OPSI</th>
  </tr>
  <?php
  foreach ($penduduk as $p) {
    $nik = $p['nik'];
    $nama = $p['nama'];
    $tmpt_lahir = $p['tmpt_lahir'];
    $tgl_lahir = $p['tgl_lahir'];
    $jns_kelamin = $p['jns_kelamin'];
    $alamat = $p['alamat'];
    $rt = $p['rt'];
    $rw = $p['rw'];
    $kelurahan = $p['kelurahan'];
    $kecamatan = $p['kecamatan'];
    $agama = $p['agama'];
    $status = $p['status'];
    $pekerjaan = $p['pekerjaan'];
    $kewarganegaraan = $p['kewarganegaraan'];

    echo " <tr align='center'>
 <td>$nik</td>
 <td>$nama</td>
 <td>$tmpt_lahir, $tgl_lahir</td>
 <td>$jns_kelamin</td>
 <td>$alamat</td>
 <td>$rt</td>
 <td>$agama</td>
 <td>$status</td>
 <td>$pekerjaan</td>
 <td>" . anchor('http://localhost/frontend/penduduk/edit/' . $nik, 'EDIT') . "
 " . anchor('http://localhost/frontend/penduduk/delete/' . $nik, 'Delete') . "
 </td>
 </tr> ";
  }
  ?>
</table>