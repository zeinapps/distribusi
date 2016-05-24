@extends('karma.master')
@section('content')
<div id="content" class="clearfix">

    <!-- ********************************************
         * HEADER SEC:                              *
         *                                          *   
         * the part which contains the page title,  *
         * buttons and dropdowns.                   *
         ******************************************** -->

    <header id="header-sec"> 
        <div class="inner-padding"> 
            <div class="pull-left">
                <h2>Dashboard</h2>                 
            </div> 
        </div><!-- End .inner-padding -->    
    </header><!-- End #header-sec --> 
    
    <div class="window">   
            
        <div class="row ext-raster">
            <div class="col-lg-12">
                <div class="inner-padding">
                    
                    <div class="gmap3-flex" id="gmap3-anggota"></div>
                </div><!-- End .inner-padding --> 
            </div>
           
        </div>
        
    </div><!-- End .window -->
    <div class="window">             
        <div class="tab-content">

<!--            <div class="inner-padding">
                <img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png"/>Stockist<br>
                <img src="http://maps.google.com/mapfiles/ms/icons/purple-dot.png"/>Distributor<br>
                <img src="http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"/>Priority<br>
                <img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png"/>Member<br>
                
            </div> -->
<br>
        </div>
        <div class="spacer-30"></div>
    </div>

    <footer id="footer-main" class="footer-sticky">
        <div class="footer-main-inner">
            <div class="pull-left">
                <p>Copyright © 2013 CreativeMilk</p>
            </div> 
            <div class="pull-right">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-cogs"></i>
                </a>                            
                <div class="dropup" id="ext-dropdown-chat">
                    <a class="btn dropdown-toggle ext-dropdown-chat-btn" data-toggle="dropdown" href="#">
                        <span class="online-dot"></span>
                        Steven Watson
                        <i class="fa fa-comments chat-blink-icon"></i>
                    </a>                  
                    <div class="ext-dropdown-chat dropdown-menu pull-right">
                        <div class="ext-dropdown-chat-inner">
                            <div class="ext-dropdown-header">
                                <i class="fa fa-comments"></i>
                                <h5>Live chat</h5>
                                <a href="#" class="btn btn-default btn-sm ext-dropdown-chat-info-toggle">
                                    <i class="fa fa-info-circle"></i>
                                </a>                            
                            </div>
                            <div class="ext-dropdown-chat-window scrollbar-y">
                                <div class="ext-dropdown-chat-msg">
                                    <div class="seperator"><span>11/15/12</span></div>
                                </div>
                                <div class="ext-dropdown-chat-msg">
                                    <div class="ext-dropdown-chat-avatar">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt=""/>
                                    </div>
                                    <div class="ext-dropdown-chat-user">
                                        <strong>Martin:</strong>
                                        <span>17:23</span>
                                        <p>He, is anybody there...</p>
                                    </div>
                                </div>
                                <div class="ext-dropdown-chat-msg">
                                    <div class="seperator"><span>11/17/12</span></div>
                                </div>
                                <div class="ext-dropdown-chat-msg">
                                    <div class="ext-dropdown-chat-avatar">
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt=""/>
                                    </div>
                                    <div class="ext-dropdown-chat-user">
                                        <strong>Steven:</strong>
                                        <span>14:24</span>
                                        <p>It's going to be a long post, so I will split it into 2 parts...</p>
                                    </div>
                                </div>                                 
                                <div class="ext-dropdown-chat-msg">
                                    <div class="ext-dropdown-chat-avatar">
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt=""/>
                                    </div>
                                    <div class="ext-dropdown-chat-user">
                                        <strong>Steven:</strong>
                                        <span>13:44</span>
                                        <p>How long must the blog post be....</p>
                                    </div>
                                </div>  
                                <div class="ext-dropdown-chat-msg">
                                    <div class="ext-dropdown-chat-avatar">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt=""/>
                                    </div>
                                    <div class="ext-dropdown-chat-user">
                                        <strong>Martin:</strong>
                                        <span>13:31</span>
                                        <p>Great, I will wait, dont forget to add some photo's  <a href="#">here</a>...</p>
                                    </div>
                                </div>
                                <div class="ext-dropdown-chat-msg">
                                    <div class="ext-dropdown-chat-avatar">
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt=""/>
                                    </div>
                                    <div class="ext-dropdown-chat-user">
                                        <strong>Steven:</strong>
                                        <span>13:28</span>
                                        <p>Sure no problem, I am typing the blog as we speak...</p>
                                    </div>
                                </div>
                                <div class="ext-dropdown-chat-msg">
                                    <div class="ext-dropdown-chat-avatar">
                                        <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt=""/>
                                    </div>
                                    <div class="ext-dropdown-chat-user">
                                        <strong>Martin:</strong>
                                        <span>13:23</span>
                                        <p>He, can you write a new blog post, I want update the blog...</p>
                                    </div>
                                </div>
                                <div class="ext-dropdown-chat-msg">
                                    <div class="ext-dropdown-chat-avatar">
                                        <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt=""/>
                                    </div>
                                    <div class="ext-dropdown-chat-user">
                                        <strong>Steven:</strong>
                                        <span>13:28</span>
                                        <p>Sure no problem, I am typing the blog as we speak...</p>
                                    </div>
                                </div>                       
                            </div>
                            <div class="ext-dropdown-chat-editor">
                                <textarea name="" class="form-control" placeholder="Type your message here..."></textarea>
                            </div>
                            <div class="ext-dropdown-chat-info">
                                <h5>Welcome to the chat</h5>
                                <p>
                                    Vivamus nisl lectus, venenatis eu sagittis id, dignissim quis justo. Etiam viverra vestibulum libero, 
                                    vel vulputate risus pulvinar sit amet. Aenean a sollicitudin ante. Nam nec nisl eu nisl.
                                </p>
                                <div class="spacer-15"></div>
                                <p>
                                    Maecenas in diam tempus velit viverra ultrices non eu urna. Maecenas nibh ante, consectetur non faucibus at, 
                                    suscipit non est. Integer lobortis imperdiet mattis curabitur cursust.
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .dropup -->              
                <a href="#" class="btn" id="toggle-footer">
                    <i class="fa fa-chevron-down"></i>
                </a>
            </div> 
        </div><!-- End .footer-main-inner -->   
    </footer><!-- End #footer-main -->  
</div><!-- End #content -->  
@if(Auth::user()->member_tipe != 5)
    
<script>
    
    
$("#gmap3-anggota").gmap3({
  map:{
    options:{
      center:[0.2789713,117.4188624],
      zoom: 5
    },
   events: {
        click: function(map, event) {
            var lat = event.latLng.lat();
            var lng=event.latLng.lng();
            console.log(lat+', '+lng);
            
        }
    },
  }, 
  marker:{
    values:[
        <?php foreach ($data as $value) { ?>
      
      {
          latLng:[<?php echo $value->lat; ?>,<?php echo $value->long; ?>],
          address:"66000 Perpignan, France", 
          data:"<?php echo 'Nama: '.$value->nama.'<br>Alamat: '. $value->alamat; ?>", 
          options:{
               icon : "<?php echo $value->icon; ?>" 
          }
      },
      <?php } ?>
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
@else

@endif
@stop