<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;

class Libros extends Controller{

    public function index() {
        return view('libros/listar');

        $libro = new Libro();
        $datos['libros'] = $libro->orderBy('id','ASC')->findAll();

        $datos['cabecera'] = view('templete/cabecera');
        $datos['pie'] = view ('templete/piepagina');

        return view('libros/listar',$datos); 
    }

}