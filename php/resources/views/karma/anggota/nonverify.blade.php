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
                @include('karma.error')
                <a href="anggota/create" class="btn btn-primary">Tambah</a>
                <table class="table" id="tablesorting-1">
                    <thead>
                        <tr>
                            <th >Nama</th>
                            <th >Email</th>
                            <th >Alamat</th>
                            <th >Hp</th>
                            <th >Status</th>
                            <th class="filter-select">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->hp }}</td>
                                <td>{{ $item->is_verify?'Aktif':'NonAktif' }}</td>
                                <td class="">
                                    
                                    <a href="/verify/{{ $item->id }}" class="btn-less"><i class="fa fa-pencil"></i>Verify</a> 
                                    <!--<a href="#" class="btn-less"><i class="fa fa-trash-o"></i></a>-->  
                                    <!--<a href="#" class="btn-less"><i class="fa fa-file"></i></a>--> 
                                    <a href="/anggota/{{ $item->id }}" class="btn-less"><i class="fa fa-info-circle"></i></a> 
                                            
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7" class="pager form-horizontal">
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


            </div><!-- End .tab-content --> 
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