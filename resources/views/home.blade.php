@extends('adminlte::page')

@section('plugins.Sweetalert2',true)
@section('content_header')
<h1 class="m-0 text-dark">Clientes </h1>
<div class="Botones">

    <button type="button" class="btn btn-outline-secondary" id="btnAdd"> <svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 2 16 16">
            <path
                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            <path
                d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
        </svg> Agregar Cliente</button>
    <!-- <button type="button" class="btn btn-outline-secondary" id="btnEdit">Editar Cliente</button>
    <button type="button" class="btn btn-outline-secondary" id="btnDelete">Eliminar Cliente</button> -->
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


            <div class="btn-group">

            </div>

            <button type="button" class="btn btn-outline-danger btn-sm btnDelete"
                data-client-id="{{ $client->ClientID }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path
                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                </svg> Eliminar</button>
            <button type="button" class="btn btn-outline-warning  btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path
                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg> Editar</button>
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
<style>
.card {
    transition: box-shadow 0.3s ease;
}

.card:hover {
    box-shadow: 8px 8px 57px #dadbdc,
        -8px -8px 57px #ffffff;

}


.btnDelete:hover {
    animation: shake3856 0.3s linear infinite both;
}

@keyframes shake3856 {
    0% {
        -webkit-transform: translate(0);
        transform: translate(0);
    }

    20% {
        -webkit-transform: translate(-2px, 2px);
        transform: translate(-2px, 2px);
    }

    40% {
        -webkit-transform: translate(-2px, -2px);
        transform: translate(-2px, -2px);
    }

    60% {
        -webkit-transform: translate(2px, 2px);
        transform: translate(2px, 2px);
    }

    80% {
        -webkit-transform: translate(2px, -2px);
        transform: translate(2px, -2px);
    }

    100% {
        -webkit-transform: translate(0);
        transform: translate(0);
    }
}
</style>

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar este cliente?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
const btnAdd = document.querySelector("#btnAdd");
btnAdd.addEventListener("click", popupAdd)
const btnDelete = document.querySelector(".btnDelete");
const btnDeleteList = document.querySelectorAll(".btnDelete");
btnDeleteList.forEach(btnDelete => {
    btnDelete.addEventListener('click', popupDelete);
});
btnEdit.addEventListener('click', (event) => {
    event.preventDefault(); // Evita que el enlace redireccione a otra página
    const clientID = event.target.parentNode.parentNode.querySelector(".btn-tool").value;
    alert("El ID del cliente es: " + clientID);
});



function popupAdd() {
    Swal.mixin({
        input: 'text',
        confirmButtonText: 'Next →',
        showCancelButton: true,
        progressSteps: ['1', '2', '3']
    }).queue([{
            title: '¿Como se llama el Cliente?',
            text: 'Ingrese el nombre del cliente / empresa'
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

            fetch('{{ route("addclient") }}', {
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

function popupDelete(event) {
    event.preventDefault();
    const currentButton = event.currentTarget;
    const clientID = currentButton.dataset.clientId;
    const clientName = currentButton.parentNode.parentNode.querySelector('.card-title').textContent;

    // Almacenar el cliente ID y nombre en variables globales para usarlas dentro del modal
    window.currentClientID = clientID;
    window.currentClientName = clientName;

    // Mostrar el modal de confirmación
    $('#confirmDeleteModal').modal('show');
}

document.getElementById('confirmDeleteButton').addEventListener('click', deleteClient);

function popupDelete(event) {
    event.preventDefault();
    const currentButton = event.currentTarget;
    const clientID = currentButton.dataset.clientId;
    const clientName = currentButton.parentNode.parentNode.querySelector('.card-title').textContent;

    // Almacenar el cliente ID y nombre en variables globales para usarlas dentro del modal
    window.currentClientID = clientID;
    window.currentClientName = clientName;

    // Mostrar el modal de confirmación
    $('#confirmDeleteModal').modal('show');

    // Agregar evento de clic al botón de confirmación dentro del modal
    document.getElementById('confirmDeleteButton').addEventListener('click', deleteClient);
}

function deleteClient() {
    const clientID = window.currentClientID;
    const clientName = window.currentClientName;

    // Create JSon and Route
    fetch('{{ route("DeleteClient") }}', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                clientID: clientID,
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            Swal.fire('Eliminado', 'El cliente se eliminó correctamente', 'success');
            setTimeout(() => {
                location.reload();
            }, 1000);
        })
        .catch(error => {
            console.error(error);
            Swal.fire('Error', 'Hubo un problema al eliminar el cliente', 'error');
        });

    // Cerrar el modal de confirmación
    $('#confirmDeleteModal').modal('hide');
}
</script>
@stop