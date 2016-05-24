@extends('karma.master')
@section('content')


    <!-- ********************************************
         * HEADER SEC:                              *
         *                                          *   
         * the part which contains the page title,  *
         * buttons and dropdowns.                   *
         ******************************************** -->

    @include('karma.toko.header')
    <!-- ********************************************
         * WINDOW:                                  *
         *                                          *
         * the part which contains the main content *
         ******************************************** -->
                      
                <div class="window">
                                 
                    <div class="inner-padding">            
                        
                        <div class="row">
                        
							<!-- Start grid -->
                              
                            <section class="col-md-12">
                                @foreach ($data as $item)
                                
                                
                                
                                
                                
                                <!-- New widget -->
                                <div class="col-md-4">
                                    <div class="widget">
                                        <header>
                                            <h2><a href="/toko/{{ $toko }}/{{ $item->id }}">{{ $item->nama }}</a></h2>                                  
                                        </header>
                                        <div>

                                            <div class="inner-padding"> 
                                                <div style="text-align: center">
                                                    <a  href="/toko/{{ $toko }}/{{ $item->id }}"><img width="90px" height="90px" src="{{ $item->image_url ? $item->image_url : URL::asset('images/default.png') }}" alt="" border="0" /></a>
                                               
                                                <div class="spacer-20"></div> 
                                                <ul style="list-style:none; padding-left: 0;">
                                                    <li><strong>{{ $item->nama }} (Rp. <?php echo number_format($item->harga, 0,',','.')?>) </strong>  </li>
<!--                                                    <li><strong>Harga </strong> (Rp )</li>
                                                    <li><strong>Link </strong>(<a href="/toko/{{ $toko }}/{{ $item->id }}" class="prod_details">details</a>) </li>-->
                                                </ul>  
                                                </div>
                                            </div>
                                        </div>                               
                                    </div>
                                </div>
                                @endforeach
                                
                                <div class="col-md-12">
                                    {!! $pagination->render() !!}
                                </div>    
                          </section>
                          
                                                                          
                                                                 
                        </div><!-- End .row -->  
                        <div class="spacer-20"></div>
                              
                    </div><!-- End .inner-padding -->
                    <div class="spacer-10"></div> 
                </div><!-- End .window --> 
                
    @stop