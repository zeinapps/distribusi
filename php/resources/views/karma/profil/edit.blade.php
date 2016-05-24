@extends('karma.master')
@section('content')


    <!-- ********************************************
         * HEADER SEC:                              *
         *                                          *   
         * the part which contains the page title,  *
         * buttons and dropdowns.                   *
         ******************************************** -->

   @include('karma.profil.header')
    <!-- ********************************************
         * WINDOW:                                  *
         *                                          *
         * the part which contains the main content *
         ******************************************** -->

    <div class="window">             
        <div class="tab-content">
            
            <div class="inner-padding">
                @include('karma.error')
                <form method="POST" action="/profil/edit">
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Nama</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control" value="{{ $data['nama'] }}"/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Alamat</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="alamat" class="form-control" value="{{ $data['alamat'] }}"/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Propinsi</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" name="id_prov" id="id_prov">
                            </select>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Kabupaten</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" name="id_kab" id="id_kab">
                            </select>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Kecamatan</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" name="id_kec" id="id_kec">
                            </select>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Kelurahan</label>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" name="id_kel" id="id_kel">
                            </select>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Kode Pos</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="kode_pos" class="form-control" value="{{ $data['kode_pos'] }}"/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Tempat Lahir</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="tempat_lahir" class="form-control" value="{{ $data['tempat_lahir'] }}"/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Tgl Lahir</label>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group date" id="datepicker-form-2" data-date="{{ $data['tanggal_lahir'] }}" data-date-format="yyyy-mm-dd" style="width:180px">
                            <input class="form-control" size="16" name="tanggal_lahir" placeholder="Tanggal Lahir"  type="text" value="{{ $data['tanggal_lahir'] }}">
                            <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                        </div>
                        
                    </div>
                    <div class="spacer-10"></div>
                </div>
                
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>KTP</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="ktp" class="form-control" value="{{ $data['ktp'] }}"/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>HP</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="hp" class="form-control" value="{{ $data['hp'] }}"/>
                    </div>
                    <div class="spacer-25"></div>
                </div>
                    
                    <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Lokasi</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="lat" name="lat" class="form-control" value="{{ $data['lat'] }}"/>
                        <input type="text" id="long" name="long" class="form-control" value="{{ $data['long'] }}"/>
                    </div>
                        
                    <div class="spacer-10"></div>
                </div>
                  <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label></label>
                    </div>
                    <div class="col-sm-8">
                        <div class="gmap3-flex" id="gmap3-anggota"></div>
                    </div>
                    <div class="spacer-25"></div>
                </div>
                    <div class="row">
                        <div class="col-sm-3"> 
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/profil" class="btn btn-warning">Batal</a>
                    </div>
                    </div>
                </form>
            </div><!-- End .tab-content --> 
            <div class="spacer-30"></div>
        </div><!-- End .window --> 
         </div>
        <!-- ********************************************
             * fOOTER MAIN:                             *
             *                                          *
             * the part which contains things like      * 
             * chat, buttons, copyright and             *
             * dropup menu(s).                          *
             ******************************************** -->
 
<script>
    var host = '<?php echo $data['host']; ?>';
    var id_pr = '<?php echo  $data['id_prov']?>';
    var id_kb = '<?php echo  $data['id_kab']?>';
    var id_kc = '<?php echo  $data['id_kec']?>';
    var id_kl = '<?php echo  $data['id_kel']?>';
    
    var the_first = true;
    
    
    getPropinsi();
    function getPropinsi() {
        $(document).ready(function () {
            var param = '';
            $.ajax({
                type: "GET",
                url: host+"api/provinsi?" + param,
                success: function (response) {
                    if(the_first == false){
                        getKabupaten(response.data[0].id_prov);
                    }
                    
                    $.each(response.data, function(k, v) {
                            $("#id_prov").append('<option value="'+v.id_prov+'">'+v.nama_prov+'</option>');
                    });
                    
                    if(the_first == true){
                        $("#id_prov").val(id_pr);
                        getKabupaten(id_pr);
                    }
                    
                }
            });
        });
    }
    
    function getKabupaten(id_prov) {
        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: host+"api/kabupaten/" + id_prov,
                success: function (response) {
                    if(the_first == false){
                        getKecamatan(response.data[0].id_kab);
                    }
                    
                    
                    $("#id_kab").empty();
                    $.each(response.data, function(k, v) {
                            $("#id_kab").append('<option value="'+v.id_kab+'">'+v.nama_kab+'</option>');
                    });
                    if(the_first == true){
                        $("#id_kab").val(id_kb);
                        getKecamatan(id_kb);
                    }
                    
                }
            });
        });
    }
    
    function getKecamatan(id_kab) {
        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: host+"api/kecamatan/" + id_kab,
                success: function (response) {
                    if(the_first == false){
                        getKelurahan(response.data[0].id_kec);
                    }
                    
                    $("#id_kec").empty();
                    $.each(response.data, function(k, v) {
                            $("#id_kec").append('<option value="'+v.id_kec+'">'+v.nama_kec+'</option>');
                    });
                    if(the_first == true){
                        $("#id_kec").val(id_kc);
                        getKelurahan(id_kc);
                    }
                    
                }
            });
        });
    }
    
    function getKelurahan(id_kec) {
        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: host+"api/kelurahan/" + id_kec,
                success: function (response) {
                    $("#id_kel").empty();
                    $.each(response.data, function(k, v) {
                            $("#id_kel").append('<option value="'+v.id_kel+'">'+v.nama_kel+'</option>');
                    });
                    if(the_first == true){
                        $("#id_kel").val(id_kl);
                        the_first = false;
                    }
                     
                }
            });
        });
    }
    
    $("#id_prov").change(function(){
        getKabupaten( $(this).val());
    });
    
    $("#id_kab").change(function(){
        getKecamatan( $(this).val());
    });
    
    $("#id_kec").change(function(){
        getKelurahan( $(this).val());
    });
    

</script>
<script>
            
            $('#datepicker-1, #datepicker-2, #datepicker-3, #datepicker-4, #datepicker-form-1, #datepicker-form-2').datepicker({
		format: 'yyyy-mm-dd'
	});
            </script>
            
                <script>
    
    
$("#gmap3-anggota").gmap3({
  map:{
    options:{
      center:[0.2789713,117.4188624],
      zoom: 4
    },
   events: {
        click: function(map, event) {
            var lat = event.latLng.lat();
            var lng=event.latLng.lng();
            $('#lat').val( lat);
            $('#long').val( lng);
        }
    }
  }
});

</script>
    @stop