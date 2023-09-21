<?php

namespace App\Controllers;

use App\Models\ModeloPerso;

class CrudController extends BaseController

{






    //este metodo es para editar los dato y redireccionarlos a ba DB
    public function editar()
    {

        //los datos del array se mostraran en un input 
        //donde seran llamado mediante su ID, para luego editarlos y 
        //actualizarlos mediante la funcion "actualizar" que esta en el modelo
         $datos = [
            "Nombre" => $_POST['nombre'],
            "numero" => $_POST['numero'],
            "Email" => $_POST['email'],
            "Contra" => $_POST['Contra'],
            "tipoUsuario" => $_POST['tipo_usuario']
        ];
        $idNombre = $_POST['IdPersona'];
        $crud = new ModeloPerso();
        $respuesta = $crud->actualizar($datos, $idNombre);


        if ($respuesta) {
            return redirect()->to(base_url('/admin'))->with('mensaje', '2');
        } else {
            return redirect()->to(base_url('/actualizar'))->with('mensaje', '3 ');
        }
    }





    // estos metodos son los deINGRESO DE DATOS 
    public function admin()
    {


        $tipoUsuario = session('tipoUsuario');
        //Aqui validamos si el usuario ingresado es tipo Admin para darle permiso 
        //de entrar a la vista
        if ($tipoUsuario == 'admin' || $tipoUsuario == 'Admin') {

            echo view('usuario/menus/MenuAd');

            $crud = new ModeloPerso();
            // en este pedazo tomamos los datos mediante la funcion "obtener"
            // para mostrarlos en una tabla, con esto veremos los usuarios registrados
            $usuario = $crud->obtener();
            $listaUsuario = ["usuarios" => $usuario];
            echo view('usuario/admin', $listaUsuario);
           
        } else {
            echo view('usuario/menus/Menu');
            echo view('usuario/adm/error');
            echo view('usuario/Footer');
        }
    }



    /* Metodo de incio de datos */
    public function crear()
    {
            //aca un array donde se reciben los datos del formulario para registrar.
        $datos = [
            "Nombre" => $_POST['nombre'],
            "Numero" => $_POST['numero'],
            "Email" => $_POST['email'],
            "Contra" => $_POST['contra'],
            "tipoUsuario" => ("usuario")
        ];



        $crud = new ModeloPerso();
        // en la variable respuesta  almacenamos la insercion de los datos con la funcion del modelo
        $respuesta = $crud->insertar($datos);

        //aca se hace una redireccion condicionada
        if ($respuesta > 0) {
            return redirect()->to(base_url('/formulario'))->with('mensaje', '1');
        } else {
            return redirect()->to(base_url('/formulario'))->with('mensaje', '0');
        }
    }

    //este metodo es para validar en tiempo real si el email que ingrese el usuario ya esta registrado.
    public function validar()
    {
        $email = $_POST['email'];

        $crud = new ModeloPerso();
        $respuesta = $crud->valida($email);

        if (count($respuesta) > 0) {
            echo 1;
        } else {
            echo 0;
        }
    }






    /* Metodo de incio de sesion */
    public function ingresar()
    {   

        //aca tomamos los datos de la base de dato para verificar si estan.
        $usuario = $this->request->getPost('email');
        $contra = $this->request->getPost('contra');

        //se hace un condicional para ver si los datos existen
        if ($usuario == '' || $contra == '') {
            return redirect()->to(base_url('/formulario'))->with('mensaje', '0');
        } else {

            $crud = new ModeloPerso();
            $datosusuario = $crud->mostrar(['email' => $usuario]);
            //si los datos existen que haga el proceso de iniciar session
            if (count($datosusuario) > 0 && ($contra == $datosusuario[0]['contra'])) {

                $datos = [
                    'tipoUsuario' => $datosusuario[0]['tipoUsuario']
                ];

                $session = session();
                $session->set($datos);
                return redirect()->to(base_url('/'));
            } else {

                return redirect()->to(base_url('/formulario'))->with('mensaje', '0');
            }
        }
    }

    /*Metodo para actualizar, editar datos*/
    public function actualizar($ideNombre)
    {
        $tipoUsuario = session('tipoUsuario');
        //llamamos los datos mediante su id, dependiendo de su id, 
        // se muestra lo demas en los label para editarlos
        $data = ["id_Persona" =>   $ideNombre];
        $crud = new ModeloPerso();
        $respuesta = $crud->ObtenerNombre($data);

        $datos = ["datos" => $respuesta];
        if ($tipoUsuario == 'admin' or $tipoUsuario == 'Admin') {
            echo view('usuario/menus/MenuAd');
            echo view('usuario/adm/actualizar', $datos);
        } else {


            echo view('usuario/adm/error');
        }
    }

    /*en esta funcion para eliminar el usuario, se busca suu usuario mediante ID
    mediante la funcion eliminar en el modelo, ejecutamos y eliminamos*/
    public function eliminar($ideNombre)
    {

        $crud = new ModeloPerso();
        $data = ["id_Persona" => $ideNombre];

        $respuesta = $crud->eliminar($data);

        if ($respuesta > 0) {
            return redirect()->to(base_url('/admin'))->with('mensaje', '4');
        } else {
            return redirect()->to(base_url('/admin'))->with('mensaje', '5');
        }
    }

    public function buscar($datos)
    {
        
    
        
    }


    /* Metodo de incio de cerrar sesión */
    public function cerrar()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/formulario'));
    }
}
