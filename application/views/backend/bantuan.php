
    <script type="text/javascript">
$(function() {
    $(".tambahberita").click(function() {
        var judul = $("#judul").val();
        var alamat = $("#alamat").val();
        var langt = $("#langt").val();
        var longt = $("#longt").val();
        var deskripsi = $("#deskripsi").val();
        //+'&langt='+langt+'&longt='+longt
       var dataString = 'judul='+ judul + '&alamat='+alamat +'&langt='+langt+'&longt='+longt+'&deskripsi='+deskripsi;
        if(judul =='')
        {
            swal("Gagal!", "Gagal Tambah Berita, Anda Belum Mengisi Judul!", "error");
        } else if(alamat == '') {
              swal("Gagal!", "Gagal Tambah Berita, Anda Belum Mengisi Alamat!", "error");
        /*} else if(langt == '') {
              swal("Gagal!", "Gagal Tambah Berita, Anda Belum Mengisi Langtitude!", "error");
        } else if(longt == '') {
              swal("Gagal!", "Gagal Tambah Berita, Anda Belum Mengisi Longtitude!", "error"); */
        } else if(deskripsi == '') {
              swal("Gagal!", "Gagal Tambah Berita, Anda Belum Mengisi Deskripsi!", "error");
        } else {
            $("#flash").show();
            $("#flash").fadeIn(500).html('<img src="<?php echo base_url()?>assets/frontend/images/ajax-loader.gif" align="absmiddle"><span class="loading">Proses Tambah Berita..</span>');
            $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>member/belakang/prosestambahberita",
                data: dataString,
                cache: false,
                success: function(html){
                    /*$("ol#update").prepend(html);
                    $("ol#update li:first").slideDown("slow");*/
                    document.getElementById('judul').value='';
                    /*document.getElementById('langt').value='';
                    document.getElementById('longt').value='';*/
                    document.getElementById('deskripsi').value='';
                    $("#flash").hide();
                        swal("Sukses!", "Berhasil Tambah Berita!", "success");
                }
            });
        }
        return false;
    });
});
</script>
<?php
// 5962 MAX JAWA BARAT
$url1="http://hackathon.mabesad.mil.id/api/v1/desa?_format=json&limit=50&propinsi=jawa+barat";


				$header1 =  array();
				$header1[] ='Content-Type: application/x-www-form-urlencoded';
				$header1[] ='Authorization: '.'Bearer '.json_decode($_SESSION['token'])->token;
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
<h2>Tambah Berita</h2>

      <div id="flash" style="position:absolute; margin-top:50px; background:rgba(255,255,255,0.8); width:100%; height:100%; display:none; z-index:9999;">
      </div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="judul" id="judul" placeholder="Judul Berita.." class="form-control">
  </div>
  <div class="form-group">
    <h4>Alamat</h4>
    <select name="alamat" id="alamat" class="form-control">

	<?php
				foreach ($data2->desa as $value) {
				?>
							<option value="<?php echo $value->kelurahan_desa.", ".$value->kecamatan.", ".$value->kabupaten_kota.", ".$value->propinsi  ?>">
              <?php echo $value->kelurahan_desa.",
							Kecematan : ".$value->kecamatan.", Kabupaten : ".$value->kabupaten_kota.", Propinsi : ".$value->propinsi  ?>
            </option>

			<?php } ?>
    </select>
  </div>
    <input type="hidden" class="form-control" id="langt" placeholder="Langtitude.." name="langt">
    <input type="hidden" class="form-control" id="longt" placeholder="Longtitude.." name="longt">
  <!--<div class="col-md-6">
    <input type="text" class="form-control" id="langt" placeholder="Langtitude.." name="langt">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" id="longt" placeholder="Longtitude.." name="longt">
  </div>
  <br><br>-->
  <div class="form-group">
    <textarea name="deskripsi" id="deskripsi" rows="7" class="form-control" placeholder="Deskripsi.."></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary tambahberita" name="simpan" id="simpan">Simpan</button>
    <input type="reset" class="btn btn-danger" value="Batal">
  </div>
</form>
