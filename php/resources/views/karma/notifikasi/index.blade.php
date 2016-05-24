@extends('karma.master')
@section('content')


    <!-- ********************************************
         * HEADER SEC:                              *
         *                                          *   
         * the part which contains the page title,  *
         * buttons and dropdowns.                   *
         ******************************************** -->

    @include('karma.notifikasi.header')
    <!-- ********************************************
         * WINDOW:                                  *
         *                                          *
         * the part which contains the main content *
         ******************************************** -->

    <div class="window">             
        <div class="tab-content">
            <div class="inner-padding">
                <h2>Member Baru</h2>
                <table class="table" id="tablesorting-1">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th >Nama</th>
                            <th >HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member  as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->hp }}</td>
                                
                            </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="pager form-horizontal">
                                <button class="btn first"><i class="fa fa-step-backward"></i></button>
                                <button class="btn prev"><i class="fa fa-arrow-left"></i></button>
                                <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
                                <button class="btn next"><i class="fa fa-arrow-right"></i></button>
                                <button class="btn last"><i class="fa fa-step-forward"></i></button>
                                <select class="pagesize input-xs" title="Select page size">
                                    <option selected="selected" value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                <select class="pagenum input-xs" title="Select page number"></select>
                            </td>
                        </tr>
                    </tfoot>
                </table>                      


            </div>
            <div class="spacer-30"></div>
            
            <div class="inner-padding">
                <h2>Pemberitahuan</h2>
                <table class="table" id="tablesorting-2">
                    <thead>
                        <tr>
                            <th >Notifikasi</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notif as $item)
                            <tr>
                                <td>{{ $item->notifikasi }}</td>
                                <td class="">
                                    <a href="/notifikasi/edit/{{ $item->id }}" class="btn btn-sm btn-warning">tandai sudah dibaca</a> 
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                   
                </table>                      


            </div><!-- End .tab-content --> 
            <div class="spacer-30"></div>
            <div class="spacer-30"></div>
            
            
        </div><!-- End .window --> 

        <!-- ********************************************
             * fOOTER MAIN:                             *
             *                                          *
             * the part which contains things like      * 
             * chat, buttons, copyright and             *
             * dropup menu(s).                          *
             ******************************************** -->

    @stop