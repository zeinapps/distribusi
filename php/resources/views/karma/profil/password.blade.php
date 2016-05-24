@extends('karma.master')
@section('content')


    <!-- ********************************************
         * HEADER SEC:                              *
         *                                          *   
         * the part which contains the page title,  *
         * buttons and dropdowns.                   *
         ******************************************** -->

   @include('karma.profil.header')
    <!-- ********************************************
         * WINDOW:                                  *
         *                                          *
         * the part which contains the main content *
         ******************************************** -->

    <div class="window">             
        <div class="tab-content">
            
            <div class="inner-padding">
                @include('karma.error')
                <form method="POST" action="/profil/edit/password">
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Password Lama</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" name="password_lama" class="form-control" value=""/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Password Baru</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" name="password" class="form-control" value=""/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                <div class="row"> 
                    
                    <div class="col-sm-3"> 
                        <label>Konfirmasi Password</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" name="password_confirmation" class="form-control" value=""/>
                    </div>
                    <div class="spacer-10"></div>
                </div>
                    <div class="row">
                        <div class="col-sm-3"> 
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/profil" class="btn btn-warning">Batal</a>
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