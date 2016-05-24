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
                        
        @include('karma.error')
                        <div class="row">
                        
							<!-- Start grid -->
                              
                            <section class="col-md-12">
                             
                                
                                <!-- New widget -->
                             
                                    <div class="widget">
                                        <header>
                                            <h2>{{ $data->nama }}</h2>                                  
                                        </header>
                                        <div>

                                            <div class="inner-padding"> 
                                                <div class="col-md-4">
                                                    <img  src="{{ $data->image_url ? $data->image_url : URL::asset('images/default.png') }}" alt="" border="0" />
                                               </div>
                                                <div class="col-md-8">
                                                     <ul>
                                                    <li><strong>Barang:</strong> {{ $data->nama }} </li>
                                                    <li><strong>Harga:</strong> Rp <?php echo number_format($data->harga, 0,',','.')?></li>
                                                    <li><form method="Post" action="/toko/{{ $toko }}/order">
                    <input type="hidden" name="barang_id" value="{{ $data->id }}" />
                    Jumlah <input type="text" name="jumlah"/>
                    <input type="submit" class="addtocart" value="Beli"/>
                </form></li>
                                                </ul>  
                                                </div>
                                               
                                                
                                            </div>
                                        </div>                               
                                    </div>
                               
                          </section>
                                       
                        </div><!-- End .row -->  
                        <div class="spacer-20"></div>
                              
                    </div><!-- End .inner-padding -->
                    <div class="spacer-10"></div> 
                </div><!-- End .window --> 
                
@stop