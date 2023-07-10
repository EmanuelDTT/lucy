<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeloPerso extends Model
{
    protected $table="USERS";
    protected $primarykey="id";
    protected $allowedFields = ["name", "email"];

        /* En esta función, llamaos todo lo que se encuentra en la tabla "Persona"
        retornando el resultado en el controlador*/
    public function obtener()
    {
        $persona = $this->db->query("SELECT * FROM Persona");
        return $persona->getResult();
    }

    /* en esta función tomamos los datos para que los datos sean ingresados en la base de datos
     */
    public function insertar($datos)
    {

        $persona = $this->db->table('Persona');
        $persona->insert($datos);

        return $this->db->insertID();
    }
    /* con esta funcion tomamos los datos ya existentes en la DB los usamos para mostrarlos
    en la vista al administrador, los redireccionamos como registros y el controlador usara 
    los datos para mostrarlos en una tabla*/
    public function mostrar($datos)
    {
        $registro = $this->db->table('Persona');
        $registro->where($datos);
        return $registro->get()->getResultArray();
    }

    /*aca llamamos el id del usuario y ubicarlo para asi rediccionar esa información en el controlador
    luego coon el modelo "actualizar" que es el siguiente a este, mostrar los datos en inputs*/
    public function ObtenerNombre($data)
    {
        $persona = $this->db->table('Persona');
        $persona->where($data);
        return $persona->get()->getResultArray();
    }
    /* aca tomamos los datos en base a la ID y los mostramos en los inputs, para luego 
    poder editarlo y hacer una update en la DB*/
    public function actualizar($data, $idNombre)
    {
        $persona = $this->db->table('Persona');
        $persona->set($data);
        $persona->where('Id_Persona', $idNombre);
        return $persona->update();
    }

    /* en esta funci´´on ubicamos al usuario mediante su ID, luego asignamos la data en una variable
    mediante el comando delete  */
    public function eliminar($data)
    {

        $eliminar = $this->db->table('Persona');
        $eliminar->where($data);
        return $eliminar->delete();
    }


    
     public function buscar($data,$tablename,$where ){
       

     }
   
    /* aca usamos una validación en tiempo real con ajax para verificar si el Email ya esta registrado
    se llama el email y validamos en ajax si este ya existe*/
    public function valida($email){
        $registro = $this->db->table('Persona');
        $registro->where('Email',$email);
        return $registro->get()->getResultArray();
    }
}
