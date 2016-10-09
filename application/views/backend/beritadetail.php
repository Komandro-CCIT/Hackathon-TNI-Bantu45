
<?php
// 5962 MAX JAWA BARAT
$kd_smkl = $_SESSION['kd_smkl'];
$url1="http://hackathon.mabesad.mil.id/api/v1/personel?_format=json&kd_smkl=$kd_smkl";

$token = json_decode($_SESSION['token']);
				$header1 =  array();
				$header1[] ='Content-Type: application/x-www-form-urlencoded';
				$header1[] ='Authorization: '.'Bearer '.$token->token;
				$ch1 = curl_init();
				curl_setopt($ch1, CURLOPT_URL, $url1);
				//curl_setopt($ch, CURLOPT_PROXY, $proxy);
				//curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
				curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
				curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE);
				$result1 = curl_exec($ch1)or die(curl_error($ch1));
				curl_close($ch1);
				$data2 = json_decode($result1);
?>

<?php foreach ($beritadetail->result() as $value) { ?>
    <h2><?php echo $value->nama_bantuan?></h2>
    <p><i>By Admin, <?php echo format_hari_tanggal($value->tgl)?></i></p>
    <p><?php echo $value->deskripsi_bencana?></p>
    <h4>Denah Lokasi</h4>
    <div id="map" style="width: 100%; height: 300px;"></div>
		<p><?php echo $value->lokasi_bencana ?></p>

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
      </script>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Kirim Personel
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Daftar Personel</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url()?>member/belakang/proseskirimbantuan" method="post">
          <input type="hidden" name="id_bantuan" id="id_bantuan" value="<?php echo $value->id_bantuan?>">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <td>Pilih</td>
              <td>No Personel</td>
              <td>Nama</td>
              <td>Pangkat</td>
            </tr>
          </thead>
          <tbody>
	<?php
				foreach ($data2->personel as $value1) {
				?>
          <tr>
            <td>
                  <input type="checkbox" name="personel[]" id="personel[]"
                  value="<?php echo "No Personel : ".$value1->nopers.", Nama : ".$value1->nm_pers.", Pangkat : ".$value1->ur_pkt."<br>"?>">
              </td>
              <td><?php echo $value1->nopers ?></td>
              <td><?php echo $value1->nm_pers ?></td>
              <td><?php echo $value1->ur_pkt ?></td>
            </tr>


<?php } ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim Personel</button>
      </form>
      </div>
    </div>
  </div>
</div>
  <?php
}
?>
