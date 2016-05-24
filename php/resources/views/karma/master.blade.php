<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8 no-js">      <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9 no-js">           <![endif]-->
<!--[if gt IE 9]>  <html class="no-js">                       <![endif]-->
<!--[if !IE]><!--> <html class="no-js">                       <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Natural Body Care</title>

        <!-- // IOS webapp icons // -->

        <meta name="apple-mobile-web-app-title" content="Natural Body Care">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-152x152.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/mobile/apple-touch-icon.png') }}" />
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicons/favicon.ico') }}" />

        <!-- // IOS webapp splash screens // -->

        <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
              href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-1536x2008.png') }}"/>
        <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
              href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-1496x2048.png') }}"/>     
        <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"
              href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-768x1004.png') }}"/>
        <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"
              href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-748x1024.png') }}') }}"/>
        <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" 
              href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-640x1096.png') }}') }}"/>    
        <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
              href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-640x920.png') }}"/>    
        <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"
              href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-320x460.png') }}"/>    

        <!-- // Windows 8 tile // -->

        <meta name="application-name" content="Natural Body Care">
        <meta name="msapplication-TileColor" content="#333333" />
        <meta name="msapplication-TileImage" content="images/mobile/windows8-icon.png') }}" />

        <!-- // Handheld devices misc // -->

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="HandheldFriendly" content="true"/>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 

        <!-- // Stylesheets // -->

        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/core/dist/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/select2/select2.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/datepicker/css/datepicker.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/fileupload/bootstrap-fileupload.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/typeahead/typeahead.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/colorpicker/css/colorpicker.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/timepicker/css/bootstrap-timepicker.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome/css/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-custom.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-extended.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/helpers.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/base.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/light-theme.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/mediaqueries.css') }}"/>

        <!-- // Helpers // -->

        <script src="{{ URL::asset('assets/js/plugins//modernizr.min.js') }}"></script> 
        <script src="{{ URL::asset('assets/js/plugins//mobiledevices.js') }}"></script>

        <!-- // jQuery core // -->

        <script src="{{ URL::asset('assets/js/libs/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/libs/jquery-ui-1.10.4.min.js') }}"></script>

        <!-- // Bootstrap // -->

        <script src="{{ URL::asset('assets/bootstrap/core/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/select2/select2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/bootboxjs/bootboxjs.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/holder/holder.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/typeahead/typeahead.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/fileupload/bootstrap-fileupload.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/inputmask/bootstrap-inputmask.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ URL::asset('assets/bootstrap/timepicker/js/bootstrap-timepicker.min.js') }}"></script>

        <!-- // Custom/premium plugins // -->

        <script src="{{ URL::asset('assets/js/plugins//responsivetables.1.0.min.js') }}"></script> 
        <script src="{{ URL::asset('assets/js/plugins//responsivehelper.1.0.min.js') }}"></script>  
        <script src="{{ URL::asset('assets/js/plugins//mainmenu.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//easyfiletree.1.0.min.js') }}"></script> 
        <script src="{{ URL::asset('assets/js/plugins//autosaveforms.1.0.min.js') }}"></script> 
        <script src="{{ URL::asset('assets/js/plugins//chainedinputs.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//checkboxtoggle.1.0.min.js') }}"></script> 
        <script src="{{ URL::asset('assets/js/plugins//bootstraptabsextend.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//lockscreen.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//autoexpand.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//notify.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//nanogress.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//powerwizard.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//simpleselect.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//tinycontextmenu.1.0.min.js') }}"></script>

        <!-- // Third-party plugins // -->

        <script src="{{ URL::asset('assets/js/plugins//tinyscrollbar.min.js') }}"></script>  
        <script src="{{ URL::asset('assets/js/plugins//jquery.knob.js') }}"></script> 
        <script src="{{ URL::asset('assets/js/plugins//prism.min.js') }}"></script>            
        <script src="{{ URL::asset('assets/js/plugins//h5f.min.js') }}"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script src="{{ URL::asset('assets/js/plugins//gmap3.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.tablesorter.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.tablesorter.widgets.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.tablesorter.pager.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('assets/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//hogan-2.0.0.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.nouislider.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.autosize-min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.pwstrength.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.mixitup.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//jquery.vticker.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/flot/excanvas.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//layout.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//masonry.pkgd.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//json2.js') }}"></script>

        <!-- // Custom //-->

        <script src="{{ URL::asset('assets/js/plugins//plugins.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//demo.js') }}"></script>
        <script src="{{ URL::asset('assets/js/plugins//main.js') }}"></script>    

    </head>
    <body> 
        <div id="container" class="clearfix">

            <!-- ******************************************** 
                 * SIDEBAR MAIN:                            *
                 *                                          *
                 * the part which contains the main         *
                 * navigation, logo, search and more...     *
                 ******************************************** -->

            <aside id="sidebar-main" class="sidebar">

                <div class="sidebar-logo">
                    <a href="/" id="logo-big"><h1>Natural Body Care</h1></a>
                </div><!-- End .sidebar-logo -->

                <!-- ********** -->
                <!-- NEW MODULE -->
                <!-- ********** -->

                <div class="sidebar-module"> 
                    <div class="sidebar-profile">
                        <a href="/profil/edit/avatar">
                        @if(Auth::user())
                            
                            @if(Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="" class="avatar"/>
                            @else
                                <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="" class="avatar"/>
                            @endif
                        @endif
                        </a>
                        <ul class="sidebar-profile-list" style="margin-top: 5px">
                            @if(Auth::user())
                                <li><h3>Hi, {{ Auth::user()->nama }}</h3></li>
                                <li><a href="/profil">Profil</a> | <a href="/profil/edit/password">Ganti Password</a> | <a href="/logout">Logout</a></li>
                            @else
                                
                            @endif
                            
                        </ul>
                    </div><!-- End .sidebar-profile -->
                </div><!-- End .sidebar-module --> 

                <div class="sidebar-line"><!-- A seperator line --></div>

                <div class="tab-content">
                    <div id="sidebar-tab-1" class="tab-pane active clearfix">

                        <!-- ********** -->
                        <!-- NEW MODULE -->
                        <!-- ********** -->

                        <div class="sidebar-module"> 
                            <nav class="sidebar-nav-v2">                         
                                <ul>
                                    @if(!Auth::user())
                                    <li>
                                        <a href="/login">Login</a>
                                    </li> 
                                    @else
                                    <li>
                                        <a href="/dashboard">Dashboard</a>
                                    </li> 
                                    @if(Auth::user()->member_tipe == 1)
                                    <li>
                                        <a href="#"><i class="fa fa-envelope-o"></i> Master <i class="fa fa-caret-left pull-right"></i></a>

                                        <!-- * sub menu * -->
                                        <ul>
                                            <li>
                                                <a href="/kategori">Kategori</a>
                                            </li>
                                            <li>
                                                <a href="/lokasi">Lokasi</a>
                                            </li>
                                            <li>
                                                <a href="/setting">Setting</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/barang">Barang</a>
                                    </li> 
                                    @endif
                                    @if(Auth::user()->member_tipe <=3 )
                                    <li>
                                        <a href="/anggota">Anggota</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->member_tipe == 2 )
                                    <li>
                                        <a href="/notifikasi">Notifikasi 
                                            @if(Session::get('jumlah_notif') > 0 )
                                                <span class="indicator-pill">{{ Session::get('jumlah_notif') }}</span>
                                            @endif
                                            @if(Session::get('jumlah_member') > 0 )
                                                <span class="indicator-dot">{{ Session::get('jumlah_member') }}</span>
                                            @endif
                                        </a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->member_tipe == 3 || Auth::user()->member_tipe == 2 )
                                    <li>
                                        <a href="/kodeafiliasi">Kode Afiliasi</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->member_tipe == 1)
                                    <li>
                                        <a href="/nonverify">Verifikasi Anggota</a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="/stok">Stok</a>
                                    </li>
                                    @if(Auth::user()->member_tipe ==1 )
                                    <li>
                                        <a href="/penawaran">Penawaran</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->member_tipe >= 3)
                                    <li>
                                        <a href="/ditawari">Upgrade Level</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->member_tipe <= 3)
                                    <li>
                                        <a href="/jual">Order Jual</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->member_tipe != 1)
                                    <li>
                                        <a href="/order">Order Beli</a>
                                    </li>
                                    @endif
                                    @if(Auth::user()->member_tipe != 1)
                                    <li>
                                        <a href="/point">Point</a>
                                    </li>
                                    @endif

                                    @endif


                                </ul>
                            </nav><!-- End .sidebar-nav-v1 --> 
                        </div><!-- End .sidebar-module -->                                     
                    </div>    
                </div><!-- End .tab-content -->

                <div class="sidebar-line"><!-- A seperator line --></div>


            </aside><!-- End aside --> 

            <div id="main" class="clearfix">

                <!-- ******************************************** 
                     * MAIN HEADER:                             *
                     *                                          *  
                     * the part which contains the breadcrumbs, *
                     * dropdown menus, toggle sidebar button    *
                     ******************************************** -->

                <header id="header-main">
                    <div class="header-main-top">
                        <div class="pull-left">

                            <!-- * This is the responsive logo * --> 

                            <a href="index.html" id="logo-small"><h4>Natural Body Care</h4></a>
                        </div>
                        <div class="pull-right">

                            <!-- * This is the trigger that will show/hide the menu * -->
                            <!-- * if the layout is in responsive mode              * -->

                            <a href="#" id="responsive-menu-trigger">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div><!-- End #header-main-top --> 
                    <!--                    <div class="header-main-bottom">
                                            <div class="pull-left">
                                                <ul class="breadcrumb">
                                                    <li><a href="#">Home</a></li>
                                                    <li><a href="#">Library</a></li>
                                                    <li class="active">Data</li>
                                                </ul> End .breadcrumb 
                                            </div> 
                                            <div class="pull-right">
                                                <p>Version 1.0.0</p>                        
                                            </div> 
                                        </div> End #header-main-bottom             -->
                </header><!-- End #header-main --> 
                <div id="content" class="clearfix">

                    <div id="content" class="clearfix">
                        @yield('content')

                        <footer id="footer-main" class="footer-sticky">
                            <div class="footer-main-inner">
                                <div class="pull-left">
                                    <p>Copyright © 2013 CreativeMilk</p>
                                </div> 
                                <div class="pull-right">
                                    <div class="dropup">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-calendar-o"></i>&nbsp; Calendar
                                        </a>                                  
                                        <div role="menu" class="dropdown-menu pull-right ext-dropdown-box">
                                            <div class="inner-padding">	
                                                <div class="csscalendar-mini">	
                                                    <table>
                                                        <caption>January 2012</caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Mon</th>
                                                                <th>Tue</th>
                                                                <th>Wed</th>
                                                                <th>Thu</th>
                                                                <th>fri</th>
                                                                <th>Sat</th>
                                                                <th>Sun</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="off"><a href="">26</a></td>
                                                                <td class="off"><a href="#">27</a></td>
                                                                <td class="off"><a href="#">28</a></td>
                                                                <td class="off"><a href="#">29</a></td>
                                                                <td class="off"><a href="#">30</a></td>
                                                                <td class="off"><a href="#">31</a></td>
                                                                <td><a href="#">1</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#">2</a></td>
                                                                <td><a href="#">3</a></td>
                                                                <td class="cal-app"><a href="#" class="tooltip-top" title="12:05 - Client X">4</a></td>
                                                                <td><a href="#">5</a></td>
                                                                <td><a href="#">6</a></td>
                                                                <td><a href="#">7</a></td>
                                                                <td><a href="#">8</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#">9</a></td>
                                                                <td><a href="#">10</a></td>
                                                                <td><a href="#">11</a></td>
                                                                <td><a href="#">12</a></td>
                                                                <td><a href="#">13</a></td>
                                                                <td><a href="#">14</a></td>
                                                                <td><a href="#">15</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#">16</a></td>
                                                                <td><a href="#">17</a></td>
                                                                <td><a href="#">18</a></td>
                                                                <td><a href="#">19</a></td>
                                                                <td class="cal-app"><a href="#" class="tooltip-top" title="16:15 - Launch website">20</a></td>
                                                                <td><a href="#">21</a></td>
                                                                <td><a href="#">22</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#">23</a></td>
                                                                <td><a href="#">24</a></td>
                                                                <td><a href="#">25</a></td>
                                                                <td><a href="#">26</a></td>
                                                                <td><a href="#">27</a></td>
                                                                <td class="active"><a href="#">28</a></td>
                                                                <td><a href="#">29</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="#">30</a></td>
                                                                <td><a href="#">31</a></td>
                                                                <td class="off"><a href="#">1</a></td>
                                                                <td class="off"><a href="#">2</a></td>
                                                                <td class="off"><a href="#">3</a></td>
                                                                <td class="off"><a href="#">4</a></td>
                                                                <td class="off"><a href="#">5</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- End .csscalendar-mini -->  
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
                </div><!-- End #main --> 
            </div><!-- End #container --> 

            <!--Modal -->
            <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Update 13.2.1 available</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row" style="margin-bottom:-20px">
                                <div class="col-xs-3">
                                    <i class="fa fa-download" style="font-size:120px;color:#ccc"></i>
                                </div>
                                <div class="col-xs-9">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet molestie justo at pulvinar. 
                                        In hac habitasse platea dictumst. Proin accumsan, tellus quis varius molestie, mi dolor facilisis risus, 
                                        quis tristique neque augue eget nunc. Curabitur turpis sapien, lacinia in lacinia nec,
                                    </p>
                                    <div class="spacer-20"></div>
                                    <h4>Whats new in version 13.2.1</h4>
                                    <div class="spacer-20"></div>
                                    <ul>
                                        <li>Suspendisse laoreet molestie justo at pulvinar.</li>
                                        <li>Proin accumsan, tellus quis varius molestie, mi dolor facilisis risus.</li>
                                        <li>In hac habitasse platea dictumst. Proin accumsan, tellus quis varius molestie dolum ipkut. Curabitur turpis sapien lorem.</li>
                                        <li>Curabitur turpis sapien, lacinia in lacinia necr.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet molestie justo.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary pull-right">Get it now</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lockscreen -->
            <div class="lockscreen" id="lockscreen-slider">
                <div class="lockscreen-overlay"></div>
                <div class="lockscreen-modal">
                    <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="" class="lockscreen-avatar"/>
                    <div class="lockscreen-placeholder"></div>
                </div>
            </div>   
    </body>
</html>