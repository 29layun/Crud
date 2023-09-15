<?php namespace App\Models;

    use CodeIgniter\Model;
    class CrudModel extends Model{
        public function listartareas(){
            $tareas = $this->db->query("SELECT * FROM t_tareas");
            return $tareas->getResult();
        }
        public function insertar($datos){
            $tareas = $this->db->table("t_tareas");
            $tareas->insert($datos);
            return $this->db->insertID();
        }
        public function obtener($data){
            $tareas= $this->db->table('t_tareas');
            $tareas->where($data); 
            return $tareas->get()->getResultObject();
        }
        public function actualizar($data, $id){
            $tareas= $this->db->table('t_tareas');
            $tareas->set($data);
            $tareas->where('id',$id); 
            return $tareas->update();
        }
        public function terminar($data, $id){
            $tareas= $this->db->table('t_tareas');
            $tareas->set($data);
            $tareas->where('id',$id); 
            return $tareas->update();
        }
        public function eliminar($data){
            $tareas= $this->db->table('t_tareas');
            $tareas->where($data); 
            return $tareas->delete();
        }
    }