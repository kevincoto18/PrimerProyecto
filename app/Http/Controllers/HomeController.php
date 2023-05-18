<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() //return all clients for test
    {
        //'SELECT * FROM client WHERE Name_Client = "Pepsi"'
        $clients = DB::select('SELECT * FROM client');

        foreach($clients as $client)
        {
            $client->branches = DB::select('SELECT NameBranch FROM branch WHERE ClientID = ?', [$client->ClientID]);
        }
        return view('home',compact('clients'));
    }

   public function adduser(Request $request)
   {
    $nombreCliente = $request->input('nombreCliente');
    $branchnames = $request->input('sedes');

    $inserted = DB::insert('INSERT INTO client (Name_Client) VALUES (?)', [$nombreCliente]);
    if ($inserted) {
        $clientId = DB::getPdo()->lastInsertId();
        foreach ($branchnames as $branchName) {
            DB::insert('INSERT INTO branch (NameBranch, ClientID) VALUES (?, ?)', [$branchName, $clientId]);
        }
    
        // Resto del código de respuesta o redirección en caso de éxito
    } else {
        // Código de respuesta o redirección en caso de error
    }
    // Realizar las acciones necesarias con los datos recibidos, como la inserción en la base de datos

    if ($inserted) {
        // Si se realizó correctamente la inserción, devolver una respuesta JSON con un mensaje de éxito
        return response()->json(['success' => true, 'message' => 'Cliente agregado correctamente']);
    } else {
        // Si hubo un error al realizar la inserción, devolver una respuesta JSON con un mensaje de error
        return response()->json(['success' => false, 'message' => 'Error al agregar el cliente. Por favor, inténtalo de nuevo.']);
    }
   }
}