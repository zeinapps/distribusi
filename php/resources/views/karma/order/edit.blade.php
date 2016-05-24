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
 
    @stop