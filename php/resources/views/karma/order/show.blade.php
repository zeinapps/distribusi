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
                    <label>Tanggal</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->tgl }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Total harga</label>
                </div>
                <div class="col-sm-6">
                    {{ $data->nilai }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Bukti Bayar</label>
                </div>
                <div class="col-sm-6">
                    <a href="{{ $data->upload_url }}">Lihat Bukti Bayar</a>
                </div>
            </div>
            <div class="spacer-25"></div>

            <div class="spacer-30"><label>Detail Order:</label></div>
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
                    @foreach ($data->detail as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->barang_id}}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga }}</td>

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