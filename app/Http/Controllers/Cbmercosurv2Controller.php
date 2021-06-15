<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Cbmercosurv2;
use App\producto;

class Cbmercosurv2Controller extends Controller
{
    public  function index(){
        $productos = Cbmercosurv2::get();   // Devolverá todos los productos
        return view('productos.index')->with('productos', $productos);
    }

    public function show($Id){
        $producto = Cbmercosurv2::find($Id); // Devuelve el producto seleccionada por id.
        return view('productos.show')->with('producto', $producto);
    }

    public $timestamps = false;

    public function create()
    {
        //
        return view('productos.create');
    }

    public function store(Request $request)
    
    {
        //
        $this->validate($request,['nombre'=>'required', 'tipo'=>'required','precio'=>'required', 'descripcion'=>'required', 'idpais'=>'required', 'idpais2'=>'required']);
        producto::create($request->all());
        return redirect()->route('productos.index')->with('success','Registro creado satisfactoriamente');
    }
}
