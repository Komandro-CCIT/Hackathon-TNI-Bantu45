<div class="col-md-12">
  <h2>Detail Bantuan</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Kode Satuan</td>
        <td>Nama Satuan</td>
        <td>Deskripsi Personel</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($beritabantuandetail->result() as $value) { ?>
      <tr>
        <td><?php echo $value->kd_smkl ?></td>
        <td><?php echo $value->ur_smkl ?></td>
        <td><?php echo $value->personel ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <!--<a href="../downloaddata.php">Download</a>-->
</div>
