@extends('adminlte::page')

@section('plugins.Sweetalert2',true)
@section('content_header')
<h1 class="m-0 text-dark">Sucursales </h1>



@stop

@section('content')

<div class="select-wrapper">
    <select class="custom-select" id="client-select">
        <option selected>Seleccione un cliente</option>
        @foreach($clients as $client)
        <option value="{{$client->ClientID}}">{{$client->Name_Client}}</option>
        @endforeach
    </select>
</div>

<hr>
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agregar Sucursales</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <input placeholder="Nombre Sucursal" type="text" name="text" class="input">
        <div class="Botones">
            <button type="button" class="btn btn-outline-secondary" id="btnAdd">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-building-fill-add" viewBox="0 0.30 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z" />
                    <path
                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.493 4.493 0 0 0 12.5 8a4.493 4.493 0 0 0-3.59 1.787A.498.498 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.476 4.476 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1V1Zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
                </svg> Agregar Sucursal
            </button>
        </div>
    </div>
</div>
<!-- /.card-body -->
</div>



<style>
.card {
    transition: box-shadow 0.3s ease;
}

.card:hover {
    box-shadow: 8px 8px 57px #dadbdc,
        -8px -8px 57px #ffffff;

}

.card-body {
    display: flex;
    align-items: center;
}

.input {
    width: 100%;
    max-width: 220px;
    height: 45px;
    padding: 12px;
    border-radius: 12px;
    border: 1.5px solid lightgrey;
    outline: none;
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    box-shadow: 0px 0px 20px -18px;
}

.input:hover {
    border: 2px solid lightgrey;
    box-shadow: 0px 0px 20px -17px;
}

.input:active {
    transform: scale(0.95);
}

.Botones {
    margin-left: 10px;
}

#btnAdd:hover {
    background-color: #198754;
    /* Color cuando pases el cursor encima */
}

.select-wrapper {
    position: relative;
    display: inline-block;
}

.custom-select {
    appearance: none;
    background-color: #ffffff;
    border: 1px solid #ced4da;
    border-radius: 4px;
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    width: 100%;
    max-width: none;
    cursor: pointer;
}

.custom-select:focus {
    outline: invert;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
</style>
@stop

@section('js')
<script>

</script>
@stop