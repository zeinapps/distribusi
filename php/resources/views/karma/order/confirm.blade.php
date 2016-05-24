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
                <form method="POST" action="/order">
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Bank</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="bank" class="form-control" value=""/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Nomer Rekening</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="nomer_rekening" class="form-control" value=""/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Nama Pemilik</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="nama_pemilik" class="form-control" value=""/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Jumlah Biaya</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="jumlah" class="form-control" value=""/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                    <div class="row">
                        <div class="col-sm-3"> 
                        <button type="submit" class="btn btn-primary">Confirm</button>
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