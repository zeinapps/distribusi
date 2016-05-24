@extends('karma.master')
@section('content')


<!-- ********************************************
     * HEADER SEC:                              *
     *                                          *   
     * the part which contains the page title,  *
     * buttons and dropdowns.                   *
     ******************************************** -->

@include('karma.setting.header')
<!-- ********************************************
     * WINDOW:                                  *
     *                                          *
     * the part which contains the main content *
     ******************************************** -->

<div class="window">             
    <div class="tab-content">

        <div class="inner-padding">
            @include('karma.error')
            <form method="POST" action="/setting/edit/{{ $data['s_kd'] }}">
               
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Value</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="value" class="form-control" value="{{ $data['s_value'] }}"/>

                    </div>
                    <div class="spacer-25"></div>
                </div>
                <div class="row"> 
                    <div class="col-sm-3"> 
                        <label>Keterangan</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="keterangan" class="form-control" value="{{ $data['s_ket'] }}"/>

                    </div>
                    <div class="spacer-25"></div>
                </div>
                @if($is_diskon)
                    <div class="row"> 
                        <div class="col-sm-3"> 
                            <label>Tgl Expired</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group date" id="datepicker-form-2" data-date="{{ $data['expired'] }}" data-date-format="yyyy-mm-dd" style="width:180px">
                                <input class="form-control" size="16" name="expired" placeholder="Expired"  type="text" value="{{ $data['expired'] }}">
                                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                    </div>
                @endif
                
                <div class="row">
                    <div class="col-sm-3"> 
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/setting" class="btn btn-warning">Batal</a>
                    </div>
                </div>
            </form>
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
            
            $('#datepicker-1, #datepicker-2, #datepicker-3, #datepicker-4, #datepicker-form-1, #datepicker-form-2').datepicker({
		format: 'yyyy-mm-dd'
	});
            </script>
@stop