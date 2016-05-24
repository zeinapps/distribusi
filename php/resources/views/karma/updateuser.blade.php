@extends('karma.auth.master')
@section('content')
<!--<div class="alert alert-block alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4>Notice:</h4>
    <p>This form make's use of the custom made powerwizard plugin..</p>
</div>        -->
<div id="login-box">
    <div class="login-box-inner clearfix">

        @include('karma.error')
        
        <div class="powerwizard-content">
            <form id="form-signup" action="/updateuser" method="post">
                <div class="powerwizard-step">
                    <h2>Update Profil</h2>
                    <p>Lengkapi Data Anda</p>
                    <div class="spacer-40"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-1">Nomor HP: <span class="asterisk">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" placeholder="HP" name="hp" id="fcid-1"/>
                        </div>
                    </div>
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Nomor KTP: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" name="ktp" placeholder="KTP" id="fcid-4"/>
                        </div>
                    </div>
                    
                 
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Tempat Lahir: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" name="tempat_lahir" placeholder="Tempat Lahir" id="fcid-4"/>
                        </div>
                    </div>
                    
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Tanggal Lahir: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <div class="input-group date" id="datepicker-form-2" data-date="2000-01-01" data-date-format="yyyy-mm-dd" style="width:180px">
                                <input class="form-control" size="16" name="tanggal_lahir" placeholder="Tanggal Lahir"  type="text">
                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                            </div>
                        </div>
                    </div>
                         
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Provinsi: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <select class="form-control" name="id_prov" id="id_prov">
                            </select>
                        </div>
                    </div>  
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Kabupaten: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <select class="form-control" name="id_kab" id="id_kab">
                            </select>
                        </div>
                    </div>  
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Kecamatan: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <select class="form-control" name="id_kec" id="id_kec">
                            </select>
                        </div>
                    </div>  
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Kelurahan: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <select class="form-control" name="id_kel" id="id_kel">
                            </select>
                        </div>
                    </div>  
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Alamat: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <textarea class="form-control required" name="alamat" placeholder="Alamat" id="fcid-4" ></textarea>
                        </div>
                    </div>          
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Kode Pos: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" name="kode_pos" placeholder="Kode Pos" id="fcid-4"/>
                        </div>
                    </div>  
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Password: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="form-control required" type="password" name="password" placeholder="Password" id="fcid-4"/>
                        </div>
                    </div>
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fcid-4">Ketik Ulang Password: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="form-control required" type="password" name="password_confirmation" placeholder="Password" id="fcid-4"/>
                        </div>
                    </div>
                    
                    <input class="form-control required" value="{{ $data['id'] }}" type="hidden" name="id" placeholder="id" id="fcid-4"/>
                    
                    <div class="spacer-20"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-default pull-right">Daftar</button>
                        </div>
                    </div>
                    
                </div>
                
            </form>
            
        </div>
    </div>
</div>
<footer id="login-footer">
    <strong>Copyright © 2013 creativemilk.net</strong>
    <div class="spacer-5"></div>
    <small>Lorem ipsum dolor sit amet, islum consectetur adipiscing elit. All rights reserved.</small>
</footer>
</div><!-- End #container --> 

<script>
    var host = '<?php echo $data['host']; ?>';
    getPropinsi();
    function getPropinsi() {
        $(document).ready(function () {
            var param = '';
            $.ajax({
                type: "GET",
                url: host+"api/provinsi?" + param,
                success: function (response) {
                    getKabupaten(response.data[0].id_prov);
                    $.each(response.data, function(k, v) {
                            $("#id_prov").append('<option value="'+v.id_prov+'">'+v.nama_prov+'</option>');
                    });
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
                    getKecamatan(response.data[0].id_kab);
                    
                    $("#id_kab").empty();
                    $.each(response.data, function(k, v) {
                            $("#id_kab").append('<option value="'+v.id_kab+'">'+v.nama_kab+'</option>');
                    });
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
                    getKelurahan(response.data[0].id_kec);
                    $("#id_kec").empty();
                    $.each(response.data, function(k, v) {
                            $("#id_kec").append('<option value="'+v.id_kec+'">'+v.nama_kec+'</option>');
                    });
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
@stop