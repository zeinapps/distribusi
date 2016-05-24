@extends('karma.auth.master')
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
            <div class="spacer-40"></div>	
            <form id="form-login" action="/login" method="post">  
                <div class="row">  
                    <div class="col-lg-12">	
                        <label for="fc-id-1">Username:</label>
                    </div>
                </div>                                          
                <div class="row">  
                    <div class="col-lg-12">	
                        <input name="email" class="form-control" type="text" placeholder="Enter your emailaddress" id="fc-id-1" tabindex="1" />
                    </div>
                </div>
                <div class="spacer-10"></div>
                <div class="row">  
                    <div class="col-lg-12">	
                        <label for="fc-id-2">Password:</label>
                        <a href="#" id="showpassword-trigger" class="underline">Show password</a>
                    </div>
                </div>	
                <div class="row">  
                    <div class="col-lg-12">	
                        <input name="password" class="form-control" type="password" placeholder="Capslock sensitive" id="fc-id-2" tabindex="2" />
                    </div>
                </div>	
                <div class="spacer-40"></div>   
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-block btn-primary" tabindex="6">Login</button>
                    </div>
                </div>
                <div class="spacer-10"></div>   
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/login/google" class="btn btn-block btn-danger" tabindex="6">Login dengan Google</a>
                    </div>
                </div>
                <!--<div class="spacer-10"></div>-->	
<!--                <div class="row">
                    <div class="col-lg-12">
                        <div class="pull-left">
                            <label><input type="checkbox" tabindex="3"/><span></span> Remember?</label>
                        </div>
                        <div class="pull-right">
                            <a href="forgot.html" class="underline">Forgot password</a>
                        </div>
                    </div>
                </div>                    -->

                <div class="spacer-40"></div>                    
                <div class="or-line"><span>OR</span></div>                    
                <div class="spacer-40"></div>                    
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/registrasi" class="btn btn-block btn-success" tabindex="6">Mendaftar, GRATIS!</a>
                    </div>
                </div>  
                             
            </form>

        </div>
    </div>
</div>

@stop