@extends('adminlte::page')


@section('content_header')
<h1 class="m-0 text-dark">Clientes </h1>
<div class="Botones">
    <button type="button" class="btn btn-outline-secondary" id="btnAdd">Agregar Cliente</button>
    <button type="button" class="btn btn-outline-secondary" id="btnEdit">Editar Cliente</button>
    <button type="button" class="btn btn-outline-secondary" id="btnDelete">Eliminar Cliente</button>
</div>
<hr>
<br>
<style>
.Botones {
    justify-content: center;
    margin-top: 15px;
    margin-left: 5px;
}

#btnAdd:hover {
    background-color: #198754;
    /* Color cuando pases el cursor encima */
}

#btnEdit:hover {
    background-color: #ffc107;
    color: black;
    /* Color cuando pases el cursor encima */
}

#btnDelete:hover {
    background-color: #dc3545;
    /* Color cuando pases el cursor encima */
}
</style>
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