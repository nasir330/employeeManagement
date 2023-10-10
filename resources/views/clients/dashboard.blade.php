@extends('layouts.header')
@section('title','Dashboard')

@section('content')
 <!-- box item start -->
 @include('includes.menu.client_box_menu')
                    <!-- box item end -->
<!-- dashboard body content start -->
<div class="row clearfix row-deck">

    <!-- current overview start -->
    @include('templates.sales_overview.current_overview')
    <!-- current overview end -->
    <!-- statistics start -->
    @include('templates.sales_overview.overview_statistics')
    <!-- statistics end -->
</div>
<!-- dashboard body content end -->
</div>
</div>
@endsection