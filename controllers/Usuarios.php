<?php
    class UsuariosController{

        public function __construct(){
            require_once "models/UsuariosModel.php";
        }

        public function index(){

            $usuarios = new Usuarios_model();
            $data["usuarios"] = $usuarios->get_usuarios();

            require_once "views/usuarios.php";
        }

		public function indexregistro(){
			
			$usuarios = new Usuarios_model();
			$data["usuarios"] = $usuarios->get_usuarios();
			
			require_once "index.html";	
		}

        public function nuevo(){
			
			$data["titulo"] = "Usuarios";
			require_once "views/usuarios_nuevo.php";
		}
		
		public function guarda()
		{
            /* el campo id tiene autoincremento en la base de datos = $id = $_POST['id']; */
            $name = $_POST['nombre'];
            $last_name = $_POST['apellido'];
            $email = $_POST['email'];
            $user_name = $_POST['usuario'];
            $password = $_POST['contrasena'];
			
			$usuarios = new Usuarios_model();
			$usuarios->insertar($name,$last_name,$email,$user_name,$password);
			$this->indexregistro();
		}

        public function verifica(){

			$usuario = $_POST['usuario'];
			$contrasena = $_POST['contrasena'];
			

			$usuarios = new Usuarios_model();
			$usuarios->ingresa($usuario,$contrasena);
		}
		
		public function modificar($id){
			
			$usuarios = new Usuarios_model();
			
			$data["id"] = $id;
			$data["usuarios"] = $usuarios->get_usuario($id);
			require_once "views/usuarios_modifica.php";
		}
		
		public function actualizar()
		{
			$id = $_POST['id'];
            $name = $_POST['nombre'];
            $last_name = $_POST['apellido'];
            $email = $_POST['email'];

			$usuarios = new Usuarios_model();
			$usuarios->modificar($id,$name,$last_name,$email);
			$this->index();
		}
		
		public function eliminar($id){
			
			$usuarios = new Usuarios_model();
			$usuarios->eliminar($id);
			$this->index();
		}

    }
?>