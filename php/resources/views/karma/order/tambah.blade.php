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

        <div class="inner-padding">
            @include('karma.error')
            <form method="POST" action="/order/tmp">
                
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Barang</label>
                    </div>
                    <div class="col-sm-6">
                        <select name="barang_id" class="form-control input-sm">
                            @foreach ($data as $item)
                                <option value="{{ $item->id }}" >{{ $item->nama }} => Rp{{ $item->harga }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>jumlah</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="jumlah" class="form-control"/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"> 
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/order/create" class="btn btn-warning">Batal</a>
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