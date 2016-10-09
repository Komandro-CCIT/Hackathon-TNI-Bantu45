        <div class="col-md-12">
            <div class="heading text-center">
                <h2>Berita</h2>
            </div>

            <!--<p class="lead">
              Berita ini adalah berita terbaru dimana untuk mengetahui
            </p>-->

            <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

            <div class="row">

              <?php foreach ($berita->result() as $value) { ?>
                <div class="col-md-4">
              <!--<div class="box-image-text blog">-->
                  <!--<div class="top">
                      <div class="image">
                          <img src="<?php echo base_url()?>assets/frontend/images/LOGO4.png" width="100px" height="100px" alt="" class="img-responsive">
                      </div>
                  </div>-->
                      <h4><a href="<?php echo base_url()?>beritadetail/<?php echo $value->id_bantuan?>"><?php echo $value->nama_bantuan?></a></h4>
                      <p class="author-category"><i>By <a href="#">Admin</a>
                      <?php echo format_hari_tanggal1($value->tgl)?></i></p>
                      <p class="read-more"><a href="<?php echo base_url()?>member/beritadetail/<?php echo $value->id_bantuan?>" class="btn btn-template-main">Baca Selanjutnya</a>
                      </p>
              <!--</div>-->
                      <!-- /.box-image-text -->

                  </div>
                  <?php } ?>

            </div>
            <!-- /.row -->

            <!-- *** BLOG HOMEPAGE END *** -->
        <ul class="pagination pagination-sm">
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
       </ul>
        </div>
