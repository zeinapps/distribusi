@extends('karma.master')
@section('content')


<!-- ********************************************
     * HEADER SEC:                              *
     *                                          *   
     * the part which contains the page title,  *
     * buttons and dropdowns.                   *
     ******************************************** -->
@include('karma.setting.header')
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
                    {{ $data['s_kd'] }}
                </div>
            </div>
           
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Value</label>
                </div>
                <div class="col-sm-6">
                    {{ $data['s_value'] }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Keterangan</label>
                </div>
                <div class="col-sm-6">
                    {{ $data['s_ket'] }}
                </div>
            </div>
            <div class="spacer-25"></div>
            <div class="row">
                        <div class="col-sm-3"> 
                        <a href="/setting" class="btn btn-primary">Kembali</a>
                        <a href="/setting/edit/{{ $data['s_kd'] }}" class="btn btn-success">Ubah</a>
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