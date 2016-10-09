<section>
            <div class="container">
                <div class="row">
            <div class="heading text-center">
  <h1>About</h1>
            </div>
            <p class="lead">
              Website ini mengarah kepada bidang dukungan dalam supply persenjataan tni,
               dan prajurit tni yang akan berlatih. Aplikasi kami juga memberikan informasi
                tentang dimana tempat yang akan digunakan untuk berlatih, dan mendukung
                 suply makanan, obat obatan yang di perlukan yang akan di kirim. Website
                  ini juga bisa digunakan untuk memberikan sumbangan terhadap korban bencana
                  alam, karena tni biasanya sering menyelenggarakan amal bantuan
              terhadap bencana alam, berupa tenaga atau makanan, pakaian, dan obat obatan.
            </p>
      </div>
</div>
</section>

<section>
  <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
            <div class="heading text-center">
  <h1>Tujuan</h1>
            </div>
            <p class="lead">
            Tujuan website ini adalah untuk mempermudah, mengetahui berapa jumlah
            prajurit yang turun dalam membantu penanganan bencana alam, mengetahui
            berapa jumlah bantuan logistik yang di berikan kepada korban bencana alam,
            mengetahui lokasi bencana alam tersebut dengan menggunakan
            <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
            </p>
      </div>
</div>
</div>
</section>

<section class="bar background-white no-mb">
    <div class="container">

        <div class="col-md-12">
            <div class="heading text-center">
                <h2>Berita Terbaru</h2>
            </div>

            <!--<p class="lead">
              Berita ini adalah berita terbaru dimana untuk mengetahui
            </p>-->

            <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

            <div class="row">

              <?php foreach ($beritaterbaru->result() as $value) { ?>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?php echo base_url()?>assets/frontend/images/LOGO4.png" width="220px" height="50px" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="<?php echo base_url()?>beritadetail/<?php echo $value->id_bantuan?>" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Baca Selanjutnya</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="<?php echo base_url()?>beritadetail/<?php echo $value->id_bantuan?>"><?php echo $value->nama_bantuan?></a></h4>
                            <p class="author-category">By <a href="#">Admin</a> </p>
                            <p><?php echo format_hari_tanggal1($value->tgl)?></>
                            <p class="read-more"><a href="<?php echo base_url()?>beritadetail/<?php echo $value->id_bantuan?>" class="btn btn-template-main">Baca Selanjutnya</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text -->

                </div>
                <?php } ?>

            <!--    <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?php echo base_url()?>assets/frontend/img/portfolio-3.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">Fashion now</a></h4>
                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                            </p>
                            <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text

                </div>

              <!--  <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?php echo base_url()?>assets/frontend/img/portfolio-5.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">What to do</a></h4>
                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                            </p>
                            <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text

                </div>

                <!--<div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="<?php echo base_url()?>assets/frontend/img/portfolio-6.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">5 ways to look awesome</a></h4>
                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                            </p>
                            <p class="intro">Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text -->

                <!--</div>-->

            </div>
            <!-- /.row -->

            <!-- *** BLOG HOMEPAGE END *** -->

            <a href="<?php echo base_url()?>berita" class="main-button">Lihat Semua Berita</a>
        </div>

    </div>
    <!-- /.container -->
</section>
