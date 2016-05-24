@extends('karma.master')
@section('content')


    <!-- ********************************************
         * HEADER SEC:                              *
         *                                          *   
         * the part which contains the page title,  *
         * buttons and dropdowns.                   *
         ******************************************** -->

    @include('karma.order.header')
    <!-- ********************************************
         * WINDOW:                                  *
         *                                          *
         * the part which contains the main content *
         ******************************************** -->

    <div class="window">             
        <div class="tab-content">
            
            <div class="inner-padding"><h2>Keranjang Belanja</h2><br><br>
                @include('karma.error')
                    <a href="/toko/{{ $toko }}" class="btn btn-primary">Tambah Barang</a>
               
                <table class="table" id="tablesorting-1">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >barang_id</th>
                            <th >Nama</th>
                            <th >jumlah</th>
                            <th >harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->barang_id}}</td>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->harga }}</td>
                                <td><a href="/ordertmp/{{ $item->id }}/delete" class="btn btn-info btn-mini">Batal</a> </td>
                                
                            </tr>   
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="pager form-horizontal">
                                <button class="btn first"><i class="fa fa-step-backward"></i></button>
                                <button class="btn prev"><i class="fa fa-arrow-left"></i></button>
                                <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
                                <button class="btn next"><i class="fa fa-arrow-right"></i></button>
                                <button class="btn last"><i class="fa fa-step-forward"></i></button>
                                <select class="pagesize input-xs" title="Select page size">
                                    <option selected="selected" value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                <select class="pagenum input-xs" title="Select page number"></select>
                            </td>
                        </tr>
                    </tfoot>
                </table>
<!--                <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-4">Bukti Bayar <span class="asterisk">*</span></label>
                        </div> 
                        <div class="col-lg-8">
                            <input class="input-file uniform_on" name="file" id="f-file" type="file">
                            <a id="btnUpload" class="btn btn-primary">Upload</a>
                            
                        </div>
                        <div class="controls">
                            <img id="id-img" src="/assets/images/gallery/img-1.jpg" width="150px"/>
                        </div>
                    </div>-->
                <div class="spacer-10"></div>
                
                    <!--<input value="" name="bukti_bayar"  class="input-xlarge disabled" id="id-gambar" type="hidden" >-->
                    <a href="/orderconfirm" class="btn btn-primary">Order Cash</a>
                           <div class="spacer-10"></div>
                <form method="POST" action="/orderpoin">
                    <button type="submit" class="btn btn-primary">Order Poin</button>
                    <a href="/order/tmp/batal" class="btn btn-warning">Batal</a>
                </form>
                
                
                

            </div><!-- End .tab-content --> 
            <div class="spacer-30"></div>
        </div><!-- End .window --> 

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