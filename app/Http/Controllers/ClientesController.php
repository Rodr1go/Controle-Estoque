<?php 

 namespace CRUD\Http\Controllers;
 use Illuminate\Support\Facades\DB;
 //use CRUD\Cliente;
 //use Request;
 
class ClientesController extends Controller {
 	
    public function formCad(){
        return view ('cliente.form'); 
    }  
    
 	public function lista() {
 		
 	    $clientes = DB::select('select * from clientes');
 	    
 	    return 'clientes'; 	
 	}

 	
 }

 
