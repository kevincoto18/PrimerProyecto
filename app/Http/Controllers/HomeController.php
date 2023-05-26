<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

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

   public function addclient(Request $request)
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
    }
    if ($inserted) {
        // Si se realizó correctamente la inserción, devolver una respuesta JSON con un mensaje de éxito
        return response()->json(['success' => true, 'message' => 'Cliente agregado correctamente']);
    } else {
        // Si hubo un error al realizar la inserción, devolver una respuesta JSON con un mensaje de error
        return response()->json(['success' => false, 'message' => 'Error al agregar el cliente. Por favor, inténtalo de nuevo.']);
    }
   }

   public function DeleteClient(Request $request)
   {
       $clientID = $request->input('clientID');
   
       if ($clientID) {
           try {
               // Eliminar las sedes del cliente en la tabla branch
               $branches = DB::table('branch')->where('ClientID', $clientID)->delete();
   
               // Verificar si se eliminaron las sedes correctamente
               if ($branches !== false || $branches === 0) {
                   // Eliminar al cliente en la tabla client
                   $clientDeleted = DB::table('client')->where('ClientID', $clientID)->delete();
   
                   // Verificar si se eliminó el cliente correctamente
                   if ($clientDeleted) {
                       return response()->json(['success' => true, 'message' => 'Cliente eliminado correctamente']);
                   } else {
                       return response()->json(['success' => false, 'message' => 'Error al eliminar el cliente']);
                   }
               } else {
                   return response()->json(['success' => false, 'message' => 'Error al eliminar las sedes del cliente']);
               }
           } catch (\Throwable $th) {
               return response()->json(['success' => false, 'message' => $th->getMessage()]);
           }
       } else {
           return response()->json(['success' => false, 'message' => 'ID de cliente no proporcionado']);
       }
   }
}   