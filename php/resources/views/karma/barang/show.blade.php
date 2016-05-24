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
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>ID</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->id }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Nama</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->nama }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Kategori</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->k_nama }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Satuan</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->satuan }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Harga</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->harga }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>PF</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->pf }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>PV</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->pv }}
                </div>
            </div>
            
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Gambar</label>
                </div>
                <div class="col-sm-6">
                    <img id="id-img" src="{{ $data->image_url }}" width="150px"/>
                </div>
            </div>
            <div class="spacer-25"></div>
            <div class="row">
                        <div class="col-sm-3"> 
                        <a href="/barang" class="btn btn-primary">Kembali</a>
                        <a href="/barang/edit/{{ $data->id }}" class="btn btn-success">Ubah</a>
                    </div>
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