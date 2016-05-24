@extends('karma.invoice.master')
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
            <form id="form-signup" action="/invoice" method="post">
                <div class="powerwizard-step">
                    <h2>Lakukan Pembayaran</h2>
                    <p></p>
                    <div class="spacer-40"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-1">Nominal: <span class="asterisk">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" placeholder="Nominal" name="nominal" id="fcid-1"/>
                        </div>
                    </div>
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-4">Bank: <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" name="bank" placeholder="Bank" id="fcid-4"/>
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-4">Kd Sponsor : <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" name="kode_sponsor" placeholder="Kode Sponsor" id="fcid-4"/>
                        </div>
                    </div>
                    
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-4">Bukti Bayar <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="input-file uniform_on" name="image" id="f-file" type="file">
                            <a id="btnUpload" class="btn btn-primary">Upload</a>
                            <input value="" name="bukti_bayar"  class="input-xlarge disabled" id="id-gambar" type="hidden" >
                        </div>
                        <div class="controls">
                            <img id="id-img" src="/assets/images/gallery/img-1.jpg" width="150px"/>
                        </div>
                    </div>
                    
                    <input class="form-control required" value="{{ $data['id'] }}" type="hidden" name="user_id" placeholder="id" id="fcid-4"/>
                    
                    <div class="spacer-20"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-default pull-right">Bayar</button>
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
    
    
    $(document).ready(function() {
        $("#btnUpload").click(function(){
            $('#id-img').attr("src", '/assets/images/animated_loading.gif');
            uploadAjax();
        });
        
    });
    
    function uploadAjax() {
        var formdata = new FormData();
        var file = $('#f-file')[0].files[0];
        formdata.append('image', file);

        $.ajax({url: '<?php echo $data['upload_url']; ?>',
            data: formdata,
            processData: false,
            contentType: false,
            type: 'POST',
            beforeSend: function () {
                // add event or loading animation
            },
            success: function (ret) {
                $('#id-gambar').val(ret.data.link);
                $('#id-img').attr("src", ret.data.link);
            }
        });
        return false;
    }
    
    
</script>
@stop