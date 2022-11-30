<?php
echo form_open_multipart('http://localhost/frontend/penduduk/create');
?>
<table border='1'>
  <tr>
    <td>Nik</td>
    <td><?php echo form_input('nik'); ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo form_input('nama'); ?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><?php echo form_input('tmpt_lahir'); ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><?php echo form_input('tgl_lahir'); ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo form_input('jns_kelamin'); ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo form_input('alamat'); ?></td>
  </tr>
  <tr>
    <td>Rt</td>
    <td><?php echo form_input('rt'); ?></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td><?php echo form_input('agama'); ?></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><?php echo form_input('status'); ?></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td><?php echo form_input('pekerjaan'); ?></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo form_submit('submit','Simpan'); ?>
      <?php echo anchor('http://localhost/frontend/penduduk','Kembali'); ?>
    </td>
  </tr>
</table>
<?php
echo form_close();
?>