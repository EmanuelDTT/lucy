<?php 
    namespace App\Controllers;
    use App\Models\ModeloPerso;

    class UsuarioController extends BaseController{


/* estas son las vistas principales */
        public function inicio(){

             $tipoUsuario= session('tipoUsuario');
            

             if($tipoUsuario==null){
                echo view ('usuario/menus/Menu');
             }

            if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
                echo view ('usuario/menus/MenuAd');
            }
             if($tipoUsuario=='usuario'){   
                echo view ('usuario/menus/MenuUs');
            }

            echo view ('usuario/inicio');   
            echo view ('usuario/Footer');
            
        }


        public function formulario(){
            $tipoUsuario= session('tipoUsuario');
           

            if($tipoUsuario==null){
               echo view ('usuario/menus/Menu');
            }

           if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
               echo view ('usuario/menus/MenuAd');
           }
            if($tipoUsuario=='usuario'){   
               echo view ('usuario/menus/MenuUs');
           }
           
            $crud= new ModeloPerso();
            $datos= $crud->obtener();
            $mensaje= session('mensaje');
            $data=[
                 "datos" => $datos,
                 "mensaje"=>$mensaje
            ];

           
            echo view ('usuario/formulario', $data);
            echo view ('usuario/Footer');
    
        }
     
        public function Menu(){
            $data= ['titulo' => 'Menu'];
           
            echo view ('usuario/Menu');
            echo view ('usuario/inicio', $data);
            echo view ('usuario/Footer');
    
        }

        public function servicios(){
            
            $tipoUsuario= session('tipoUsuario');
            

             if($tipoUsuario==null){
                echo view ('usuario/menus/Menu');
             }

            if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
                echo view ('usuario/menus/MenuAd');
            }
             if($tipoUsuario=='usuario'){   
                echo view ('usuario/menus/MenuUs');
            }
            $data= ['titulo' => 'servicio'];
          
            echo view ('usuario/servicios', $data);
            echo view ('usuario/Footer');
    
        }

      public function acerca(){
        
        $tipoUsuario= session('tipoUsuario');
            

             if($tipoUsuario==null){
                echo view ('usuario/menus/Menu');
             }

            if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
                echo view ('usuario/menus/MenuAd');
            }
             if($tipoUsuario=='usuario'){   
                echo view ('usuario/menus/MenuUs');
            }
          
            echo view ('usuario/acerca');
            echo view ('usuario/Footer');
        }

   

        public function desarrollo(){
        
            $tipoUsuario= session('tipoUsuario');
             
    
                 if($tipoUsuario==null){
                    echo view ('usuario/menus/Menu');
                 }
    
                if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
                    echo view ('usuario/menus/MenuAd');
                }
                 if($tipoUsuario=='usuario'){   
                    echo view ('usuario/menus/MenuUs');
                }
              
                echo view ('usuario/desarrollo');
                echo view ('usuario/Footer');
            }
      
            public function error(){
                 
            $tipoUsuario= session('tipoUsuario');
           

            if($tipoUsuario==null){
               echo view ('usuario/menus/Menu');
            }

           if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
               echo view ('usuario/menus/MenuAd');
           }
            if($tipoUsuario=='usuario'){   
               echo view ('usuario/menus/MenuUs');
           }
                
            }


    public function contacto(){
        $tipoUsuario= session('tipoUsuario');
           

        if($tipoUsuario==null){
           echo view ('usuario/menus/Menu');
        }

       if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
           echo view ('usuario/menus/MenuAd');
       }
        if($tipoUsuario=='usuario'){   
           echo view ('usuario/menus/MenuUs');
       }
       echo view ('usuario/contacto/fmContacto');
       echo view ('usuario/Footer');

    }

    public function download(){
        $tipoUsuario= session('tipoUsuario');
           

        if($tipoUsuario==null){
           echo view ('usuario/menus/Menu');
        }

       if($tipoUsuario=='Admin' or $tipoUsuario=='admin'){
           echo view ('usuario/menus/MenuAd');
       }
        if($tipoUsuario=='usuario'){   
           echo view ('usuario/menus/MenuUs');
       }
       echo view ('usuario/download');
       echo view ('usuario/Footer');
    }

       
      
    }
