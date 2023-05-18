@extends('adminlte::page')

@section('plugins.Sweetalert2',true)
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


@foreach($clients as $client)
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $client->Name_Client}}</h3>

        <div class="card-tools">
            <!-- Collapse Button -->

            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if(count($client->branches) > 0)
        <p>Sedes</p>
        @foreach($client -> branches as $branch)

        <button type="button" class="btn btn-outline-secondary" id="">{{ $branch->NameBranch}}</button>
        @endforeach
        @else
        <p>No hay sedes disponibles</p>
        @endif
    </div>
    <!-- /.card-body -->
</div>
@endforeach

@stop

@section('js')
<script>
const btnAdd = document.querySelector("#btnAdd");

btnAdd.addEventListener("click", popup)

function popup() {
    Swal.mixin({
        input: 'text',
        confirmButtonText: 'Next →',
        showCancelButton: true,
        progressSteps: ['1', '2', '3']
    }).queue([{
            title: '¿Como se llama el Cliente?',
            text: 'Ingrese el nombre del cliente'
        },
        {
            title: '¿Cuantas sedes interviene?',
            text: 'Ingrese la cantidad de sedes'
        },
        {
            title: '¿Localidad o nombre de sedes?',
            text: 'Ingrese los nombres de las sedes (separados por coma)'
        }
    ]).then((result) => {
        if (result.value) {
            const answers = result.value;
            const clientName = answers[0];
            const numBranches = parseInt(answers[1]);
            const branchNames = answers[2].split(',');

            if (!clientName) {
                Swal.fire('Error', 'El nombre del cliente no puede estar vacío', 'error');
                return;
            }

            if (isNaN(numBranches) || numBranches <= 0) {
                Swal.fire('Error', 'La cantidad de sedes debe ser un número válido mayor que cero', 'error');
                return;
            }

            if (branchNames.length !== numBranches) {
                Swal.fire('Error', 'La cantidad de nombres de sedes no coincide con la cantidad especificada',
                    'error');
                return;
            }

            for (let i = 0; i < branchNames.length; i++) {
                const branchName = branchNames[i].trim();
                if (!branchName) {
                    Swal.fire('Error', 'El nombre de la sede no puede estar vacío', 'error');
                    return;
                }
                branchNames[i] = branchName;
            }

            fetch('{{ route("adduser") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        nombreCliente: clientName,
                        sedes: branchNames
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    Swal.fire('Éxito', 'El cliente se agregó correctamente', 'success');
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                })
                .catch(error => {
                    console.error(error);
                    Swal.fire('Error', 'Hubo un problema al agregar el cliente', 'error');
                });
        }
    });

}
</script>
@stop