@extends('karma.master')
@section('content')


<!-- ********************************************
     * HEADER SEC:                              *
     *                                          *   
     * the part which contains the page title,  *
     * buttons and dropdowns.                   *
     ******************************************** -->
@include('karma.anggota.header')
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
                    <label>Nama</label>
                </div>
                <div class="col-sm-6">
                    {{ $data['nama'] }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Alamat</label>
                </div>
                <div class="col-sm-6">
                    {{ $data['alamat'] }}
                </div>
            </div>
            
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Email</label>
                </div>
                <div class="col-sm-6">
                    {{ $data['email'] }}
                </div>
            </div>
            
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Hp</label>
                </div>
                <div class="col-sm-6">
                    {{ $data['hp'] }}
                </div>
            </div>
            
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Status</label>
                </div>
                <div class="col-sm-6">
                    {{ $data['is_verify']? 'Aktif' : 'Non Aktif' }}
                </div>
            </div>
            <div class="row"> 
                <div class="col-sm-3"> 
                    <label>Lokasi</label>
                </div>
                <div class="col-sm-8">
                    <div class="gmap3-flex" id="gmap3-anggota"></div>
                </div>
            </div>
            <div class="spacer-25"></div>
            <div class="row">
                        <div class="col-sm-3"> 
                        <a href="/anggota" class="btn btn-primary">Kembali</a>
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
<script>
    
    
$("#gmap3-anggota").gmap3({
  map:{
    options:{
      center:[0.2789713,117.4188624],
      zoom: 5
    },
   
  }, 
  marker:{
    values:[
       
      {
          latLng:[<?php echo $data['lat']; ?>,<?php echo $data['long']; ?>],
          address:"66000 Perpignan, France", 
          data:"<?php echo 'Nama: '.$data['nama'].'<br>Alamat: '. $data['alamat']; ?>", 
          options:{
               icon : "http://maps.google.com/mapfiles/ms/icons/red-dot.png" 
          }
      },
          
    ],
    options:{
      draggable: false
    },
    events:{
      
      mouseover: function(marker, event, context){
        var map = $(this).gmap3("get"),
          infowindow = $(this).gmap3({get:{name:"infowindow"}});
        if (infowindow){
          infowindow.open(map, marker);
          infowindow.setContent(context.data);
        } else {
          $(this).gmap3({
            infowindow:{
              anchor:marker, 
              options:{content: context.data}
            }
          });
        }
      },
      mouseout: function(){
        var infowindow = $(this).gmap3({get:{name:"infowindow"}});
        if (infowindow){
          infowindow.close();
        }
      }
    }
  }
});

</script>
@stop