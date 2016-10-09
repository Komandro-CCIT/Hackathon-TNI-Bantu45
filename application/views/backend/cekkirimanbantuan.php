<div class="col-md-12">
    <div class="heading text-center">
        <h2>Kiriman Bantuan</h2>
    </div>

<?php foreach ($beritabantuan->result() as $value) { ?>
  <div class="col-md-4">
  <!--<div class="box-image-text blog">-->
    <!--<div class="top">
        <div class="image">
            <img src="<?php echo base_url()?>assets/frontend/images/LOGO4.png" width="100px" height="100px" alt="" class="img-responsive">
        </div>
    </div>-->
        <h4><?php echo $value->nama_bantuan?></h4>
        <p class="author-category"><i>By <a href="#">Admin</a>
        <?php echo format_hari_tanggal1($value->tgl)?></i></p>
        <p class="read-more"><a href="<?php echo base_url()?>member/beritakirimanbantuandetail/<?php echo $value->id_bantuan?>"
           class="btn btn-template-main">Lihat Selengkapnya</a>
        </p>
  <!--</div>-->
        <!-- /.box-image-text -->

    </div>
    <?php } ?>

  </div>
  <!-- /.row -->

<!--<ul class="pagination pagination-sm">
<li><a href="#">«</a>
</li>
<li><a href="#">1</a>
</li>
<li><a href="#">2</a>
</li>
<li><a href="#">3</a>
</li>
<li><a href="#">4</a>
</li>
<li><a href="#">5</a>
</li>
<li><a href="#">»</a>
</li>
</ul>-->
</div>
