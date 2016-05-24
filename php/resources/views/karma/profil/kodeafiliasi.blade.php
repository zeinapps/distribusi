@extends('karma.master')
@section('content')


<!-- ********************************************
     * HEADER SEC:                              *
     *                                          *   
     * the part which contains the page title,  *
     * buttons and dropdowns.                   *
     ******************************************** -->

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
                    <label>Kode Afiliasi Anda</label>
                </div>
                <div class="col-sm-6">
                    <h1>{{ $data['kode_sponsor'] }}</h1>
                </div>
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