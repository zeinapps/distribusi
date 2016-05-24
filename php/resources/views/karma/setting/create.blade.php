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
            @include('karma.error')
            <form method="POST" action="/setting">
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Nama</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control"/>

                    </div>
                    <div class="spacer-25"></div>
                </div>

                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Value</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="value" class="form-control"/>

                    </div>
                    <div class="spacer-25"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Keterangan</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="keterangan" class="form-control"/>

                    </div>
                    <div class="spacer-25"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"> 
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/setting" class="btn btn-warning">Batal</a>
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