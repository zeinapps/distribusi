@extends('karma.toko.master')
@section('content')

<div class="center_content">
    
    <div class="center_title_bar">{{ $data->nama }}</div>
    <div class="prod_box_big">
        @include('karma.error')
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
            <div class="product_img_big"> 
                
                    <img width="120px" height="120px" src="{{ $data->image_url ? $data->image_url : URL::asset('images/default.png') }}" alt="" border="0" />
<!--                <div class="thumbs"> 
                    <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]">
                        <img src="{{ URL::asset('images/thumb1.gif') }}" alt="" border="0" />
                    </a>
                    <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]">
                        <img src="{{ URL::asset('images/thumb1.gif') }}" alt="" border="0" />
                    </a> 
                    <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]">
                        <img src="{{ URL::asset('images/thumb1.gif') }}" alt="" border="0" />
                    </a> 
                </div>-->
            </div>
            <div class="details_big_box">
                <div class="product_title_big">{{ $data->nama }}</div>
<!--                <div class="specifications"> Disponibilitate: <span class="blue">In stoc</span><br />
                    Garantie: <span class="blue">24 luni</span><br />
                    Tip transport: <span class="blue">Mic</span><br />
                    Pretul include <span class="blue">TVA</span><br />
                </div>-->
                <div class="prod_price_big"> <span class="price">{{ $data->harga }}</span></div>
                <form method="Post" action="/toko/{{ $toko }}/order">
                    <input type="hidden" name="barang_id" value="{{ $data->id }}" />
                    Jumlah <input type="text" name="jumlah"/>
                    <input type="submit" class="addtocart" value="Beli"/>
                </form>
                
                <!--<a href="#" class="compare">compare</a>--> 
            </div>
        </div>
        <div class="bottom_prod_box_big"></div>
    </div>
<!--    <div class="center_title_bar">Similar products</div>
    <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
            <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
            <div class="product_img"><a href="details.html"><img src="{{ URL::asset('images/laptop.gif') }}" alt="" border="0" /></a></div>
            <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/cart.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/favs.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/favorites.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
    </div>
    <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
            <div class="product_title"><a href="details.html">Iphone Apple</a></div>
            <div class="product_img"><a href="details.html"><img src="{{ URL::asset('images/p4.gif') }}" alt="" border="0" /></a></div>
            <div class="prod_price"><span class="price">270$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/cart.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/favs.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/favorites.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
    </div>
    <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
            <div class="product_title"><a href="details.html">Samsung Webcam</a></div>
            <div class="product_img"><a href="details.html"><img src="{{ URL::asset('images/p5.gif') }}" alt="" border="0" /></a></div>
            <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/cart.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/favs.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="{{ URL::asset('images/favorites.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
    </div>-->
</div>

@stop