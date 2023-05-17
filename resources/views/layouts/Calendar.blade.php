@extends('adminlte::page')

@section('content_header')
<h1 class="m-0 text-dark">Calendario</h1>

@stop
@section('css')
<link rel="stylesheet" href="{{ asset('../../css/calendar.css') }}">
@endsection
@section('scss')
<link rel="stylesheet" href="{{ asset('../../sass/calendar.scss') }}">
@endsection



@section('content')
<?php  $fecha_actual = date('d-m-Y')?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Hoy es: <?php echo $fecha_actual; ?></h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <iframe
            src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FCosta_Rica&showPrint=0&showDate=0&showNav=0&showTabs=0&showCalendars=0&showTz=0&showTitle=0&src=a2V2aW5hcnR1cm8wNjE4LmNyQGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZXMuY3IjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%237986CB&color=%23E67C73&color=%230B8043"
            style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <!-- /.card-body -->
</div>

@stop