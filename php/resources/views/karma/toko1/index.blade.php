@extends('karma.toko.master')
@section('content')
<div class="center_content">
    <div class="center_title_bar">Latest Products</div>
    @foreach ($data as $item)
    <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
            <div class="product_title"><a href="/toko/{{ $toko }}/{{ $item->id }}">{{ $item->nama }}</a></div>
            <div class="product_img"><a href="/toko/{{ $toko }}/{{ $item->id }}"><img width="90px" height="90px" src="{{ $item->image_url ? $item->image_url : URL::asset('images/default.png') }}" alt="" border="0" /></a></div>
            <div class="prod_price"><span class="price">Rp{{ $item->harga }}</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="">
<!--                <img src="{{ URL::asset('images/cart.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]">
                <img src="{{ URL::asset('images/favs.gif') }}" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]">
                <img src="{{ URL::asset('images/favorites.gif') }}" alt="" border="0" class="left_bt" /></a> -->
                <a href="/toko/{{ $toko }}/{{ $item->id }}" class="prod_details">details</a> 
        </div>
    </div>
    @endforeach
    
<!--    <div class="center_title_bar">Recommended Products</div>
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