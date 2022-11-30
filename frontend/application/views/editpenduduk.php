<?php
echo form_open('http://localhost/frontend/penduduk/edit/');
?>
<table border='1'>
  <tr>
    <td>Nim</td>
    <td><?php echo form_input('nik', $penduduk['nik'], "readonly"); ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo form_input('nama', $penduduk['nama']); ?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><?php echo form_input('tmpt_lahir', $penduduk['tmpt_lahir']); ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><?php echo form_input('tgl_lahir', $penduduk['tgl_lahir']); ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo form_input('jns_kelamin', $penduduk['jns_kelamin']); ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo form_input('alamat', $penduduk['alamat']); ?></td>
  </tr>
  <tr>
    <td>Rt</td>
    <td><?php echo form_input('rt', $penduduk['rt']); ?></td>
  </tr>
  <tr>
    <td>Rw</td>
    <td><?php echo form_input('rw', $penduduk['rw'], 'readonly'); ?></td>
  </tr>
  <tr>
    <td>Kelurahan</td>
    <td><?php echo form_input('kelurahan', $penduduk['kelurahan'], 'readonly'); ?></td>
  </tr>
  <tr>
    <td>Kecamatan</td>
    <td><?php echo form_input('kecamatan', $penduduk['kecamatan'], 'readonly'); ?></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td><?php echo form_input('agama', $penduduk['agama']); ?></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><?php echo form_input('status', $penduduk['status']); ?></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td><?php echo form_input('pekerjaan', $penduduk['pekerjaan']); ?></td>
  </tr>
  <tr>
    <td>Kewarganegaraan</td>
    <td><?php echo form_input('kewarganegaraan', $penduduk['kewarganegaraan'], 'readonly'); ?></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo form_submit('submit', 'Update'); ?>
      <?php echo anchor('http://localhost/frontend/penduduk', 'Kembali'); ?>
    </td>
  </tr>
</table>
<?php
echo form_close();
?>