@extends('karma.master')
@section('content')


    <!-- ********************************************
         * HEADER SEC:                              *
         *                                          *   
         * the part which contains the page title,  *
         * buttons and dropdowns.                   *
         ******************************************** -->

   @include('karma.barang.header')
    <!-- ********************************************
         * WINDOW:                                  *
         *                                          *
         * the part which contains the main content *
         ******************************************** -->

    <div class="window">             
        <div class="tab-content">
            
            <div class="inner-padding">
                @include('karma.error')
                <form method="POST" action="/barang/edit/{{ $data['id'] }}">
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
                        <label>Kategori</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="kategori" class="form-control input-sm">
                            @foreach ($data['kategoriall'] as $item)
                                <option {{ ($data['kategori'] == $item->k_id ? "selected":"") }} value="{{ $item->k_id }}" >{{ $item->k_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Satuan</label>
                    </div>
                    <div class="col-sm-6">
                        <input value="{{ $data['satuan'] }}" type="text" name="satuan" class="form-control"/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Harga</label>
                    </div>
                    <div class="col-sm-6">
                        <input value="{{ $data['harga'] }}" type="text" name="harga" class="form-control"/>
                    </div>
                    <div class="spacer-25"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>PF</label>
                    </div>
                    <div class="col-sm-6">
                        <input value="{{ $data['pf'] }}" type="text" name="pf" class="form-control"/>
                    </div>
                    <div class="spacer-25"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>PV</label>
                    </div>
                    <div class="col-sm-6">
                        <input value="{{ $data['pv'] }}" type="text" name="pv" class="form-control"/>
                    </div>
                    <div class="spacer-25"></div>
                </div>
                 <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Gambar</label>
                    </div>
                    <div class="col-sm-6">
                        <input class="input-file uniform_on" name="file" id="f-file" type="file">
                        <a id="btnUpload" class="btn btn-primary">Upload</a>
                        <input value="" name="image_url"  class="input-xlarge disabled" id="id-gambar" type="hidden" >
                        <div class="controls">
                            <img id="id-img" src="{{ $data['image_url']?$data['image_url']:'/assets/images/gallery/img-1.jpg' }}" width="150px"/>
                        </div>
                    </div>
                    <div class="spacer-25"></div>
                </div>
                    <div class="row">
                        <div class="col-sm-3"> 
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/barang" class="btn btn-warning">Batal</a>
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