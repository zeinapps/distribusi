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
                <form method="POST" action="/profil/edit/avatar">
                <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-4">Avatar <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="input-file uniform_on" name="image" id="f-file" type="file">
                            <a id="btnUpload" class="btn btn-primary">Upload</a>
                            <input value="{{ $data['avatar'] }}" name="avatar"  class="input-xlarge disabled" id="id-gambar" type="hidden" >
                            <div class="controls">
                            <img id="id-img" src="{{ $data['avatar'] ? $data['avatar'] : '/assets/images/gallery/img-1.jpg' }}" width="150px"/>
                        </div>
                        </div>
                        
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
    
    
    $(document).ready(function() {
        $("#btnUpload").click(function(){
            $('#id-img').attr("src", '/assets/images/animated_loading.gif');
            uploadAjax();
        });
        
    });
    
    function uploadAjax() {
        var formdata = new FormData();
        var file = $('#f-file')[0].files[0];
        formdata.append('file', file);

        $.ajax({url: '<?php echo $upload_url; ?>',
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