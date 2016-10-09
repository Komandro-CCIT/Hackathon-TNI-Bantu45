<section class="bar background-white no-mb">
    <div class="container">

        <div class="col-md-12">
            <div class="heading text-center">
                <h2>Berita Detail</h2>
            </div>

            <!--<p class="lead">
              Berita ini adalah berita terbaru dimana untuk mengetahui
            </p>-->

            <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

            <div class="row">
<?php foreach ($beritadetail->result() as $value) { ?>
    <h2><?php echo $value->nama_bantuan?></h2>
    <p><i>By Admin, <?php echo format_hari_tanggal($value->tgl)?></i></p>
    <p><?php echo $value->deskripsi_bencana?></p>
    <h4>Denah Lokasi</h4>
<div id="map" style="width: 100%; height: 300px;"></div>

<p><?php echo $value->lokasi_bencana ?></p>
<!--<script type="text/javascript">

var myCenter=new google.maps.LatLng(<?php //echo $value->langt ?>, <?php //echo $value->longt ?>);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("map"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>-->

  <script type="text/javascript">
    var locations = [
      ['<?php echo $value->lokasi_bencana ?>', <?php echo $value->langt ?>, <?php echo $value->longt ?>, 4]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(<?php echo $value->langt ?>, <?php echo $value->longt ?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        animation:google.maps.Animation.BOUNCE
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script><br>


    <?php
  }
  ?>


  </div>
  </div>

  </div>
  <!-- /.container -->
  </section>
