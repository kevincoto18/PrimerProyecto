@extends('adminlte::page')


@section('content_header')
<h1 class="m-0 text-dark">Clientes</h1>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Coca Cola SA</h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        Aqui va un boton para redirigir a la lista de tareas
        <button type="button" class="btn btn-outline-primary">Contenedor de Tareas</button>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Maxi Pali</h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        Aqui va un boton para redirigir a la lista de tareas
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@stop