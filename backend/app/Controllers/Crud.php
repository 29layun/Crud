<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index(){
        $Crud = new CrudModel();
        $datos = $Crud->listartareas();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('listado', $data);
    }
    public function crear(){
        $datos = [
            "tarea" =>$_POST['tarea'],
            "estado" =>$_POST['estado']
        ];
        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos);
        if ($respuesta > 0) {
            return redirect()->to(base_url())->with('mensaje','1');
        }else {
            return redirect()->to(base_url())->with('mensaje','0');
        }
    }
    public function actualizar(){
        
        $datos = [
            "tarea" =>$_POST['tarea']
            ];
        $id = $_POST['id'];
            
    
        $Crud = new CrudModel();
    
        $respuesta = $Crud->actualizar($datos,$id);
        if ($respuesta) {
            return redirect()->to(base_url())->with('mensaje','2');
        }else {
            return redirect()->to(base_url())->with('mensaje','3');
        }  
    }
    public function terminar(){
        $estado = 'Finalizado';
        $datos = [
            "estado" =>$estado
            ];
        $id = $_POST['id'];
            
    
        $Crud = new CrudModel();
    
        $respuesta = $Crud->actualizar($datos,$id);
        if ($respuesta) {
            return redirect()->to(base_url())->with('mensaje','6');
        }else {
            return redirect()->to(base_url())->with('mensaje','7');
        }  
    } 
    public function obtener($id){
        $data = ["id"=>$id];
        $Crud = new CrudModel();
        $respuesta = $Crud->obtener($data);

        $datos = ["datos" => $respuesta];
        return view('actualizar', $datos);
    }
    public function eliminar($id){
        $Crud = new CrudModel();
        $data = ["id"=>$id];

        $respuesta = $Crud->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url())->with('mensaje','4');
        }else {
            return redirect()->to(base_url())->with('mensaje','5');
        }
        
    }
    

}
