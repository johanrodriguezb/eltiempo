<?php
    class Usuarios_model{
        private $db;
        private  $vehiculos;

        public function __construct(){
            $this->db=Conectar::conexion();
            $this->usuarios=array();
        }

        public function get_usuarios(){
            $sql = "SELECT id, namee, last_name, email, user_name, passwoord, name_rol, name_status from users inner join rol on id_roll = id_rol inner join count_status on id_statusss = id_statuss where id_statusss = 5;";
            $resultado = $this->db->query($sql);
            while($row = $resultado->fetch_assoc())
            {
                $this->usuarios[] = $row;

            }
            return $this->usuarios;
        }

        public function insertar($name,$last_name,$email,$user_name,$password){
			
			$consulta= $this->db->query("SELECT * FROM users Where user_name = '$user_name'");
			$resultado = mysqli_fetch_array($consulta);
			$consulta=null;

			if(empty($name) || empty($last_name) || empty($email) || empty($user_name) || empty($password))
			{
				echo '<script>
                alert("Todos los campos son obligatorios"); 
                window.history.go(-1);
                </script>';
			}
			else
			{
                if ($resultado > 0) {
                    echo '<script>
                    alert("Usuario Ya Registrado");
                    window.history.go(-1);
                    </script>';
                }
                else{
                    $resultado = $this->db->query("INSERT INTO users (namee,last_name,email,user_name,passwoord,id_roll,id_statusss) VALUES ('$name','$last_name','$email','$user_name','$password',15,5)");
                    //echo "INSERT INTO users (namee,last_name,email,user_name,passwoord,id_roll,id_statusss) VALUES ('$name','$last_name','$email','$user_name','$pass_cifrada',2,1";
                    echo '<script>
                    alert("Registrado con exito");
                    window.history.go(-1);
                    </script>';
                    require_once "index.html";	
                }
			}
        }

        public function modificar($id,$name,$last_name,$email){
			
			$resultado = $this->db->query("UPDATE users SET namee ='$name', last_name = '$last_name', email = '$email' WHERE id = '$id'");			
			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("UPDATE users SET id_statusss = 15 WHERE id = '$id'");
			
		}
		
		public function get_usuario($id)
		{
			$sql = "SELECT id, namee, last_name, email, user_name, passwoord, name_rol, name_status from users inner join rol on id_roll = id_rol inner join count_status on id_statusss = id_statuss WHERE id = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}    
    }
?>