@extends('karma.invoice.master')
@section('content')
<!--<div class="alert alert-block alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4>Notice:</h4>
    <p>This form make's use of the custom made powerwizard plugin..</p>
</div>        -->
<div id="login-box">
    <div class="login-box-inner clearfix">

        @include('karma.error')
        
        <div class="powerwizard-content">
            <form id="form-signup" action="/namatoko" method="post">
                <div class="powerwizard-step">
                    <h2>Lakukan Pembayaran</h2>
                    <p></p>
                    <div class="spacer-40"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-1">Nama Toko: <span class="asterisk">*</span></label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control required" type="text" placeholder="Nama Toko Anda" name="namatoko" id="fcid-1"/>
                        </div>
                    </div>
                   
                    <input class="form-control required" value="{{ $id_penawaran }}" type="hidden" name="id_penawaran" placeholder="id" id="fcid-4"/>
                    
                    <div class="spacer-20"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-default pull-right">Lanjutkan</button>
                        </div>
                    </div>
                    
                </div>
                
            </form>
            
        </div>
    </div>
</div>
<footer id="login-footer">
    <strong>Copyright © 2013 creativemilk.net</strong>
    <div class="spacer-5"></div>
    <small>Lorem ipsum dolor sit amet, islum consectetur adipiscing elit. All rights reserved.</small>
</footer>
</div><!-- End #container --> 
@stop