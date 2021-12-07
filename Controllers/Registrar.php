<?php 
require_once("Models/LoginModel.php");
	class Registrar extends Controllers{
		
		public $login;
		public function __construct()
		{
			parent::__construct();
			session_start();
			$this->login = new LoginModel();
		}

		public function registrar()
		{
			$data['page_tag'] = "Registrar - Tienda Virtual";
			$data['page_title'] = "Registrar Virtual";
			$data['page_name'] = "Registrar";
			$data['page_functions_js'] = "functions_registrar.js";
			$this->views->getView($this,"registrar",$data);
		}

		public function registro(){
			error_reporting(0);
			if($_POST){
				if(empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) 
				|| empty($_POST['txtTelefono']) || empty($_POST['txtEmail']))
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$idUsuario = intval($_POST['idUsuario']);
					$strIdentificacion = strClean($_POST['txtIdentificacion']);
					$strNombre = ucwords(strClean($_POST['txtNombre']));
					$strApellido = ucwords(strClean($_POST['txtApellido']));
					$intTelefono = intval(strClean($_POST['txtTelefono']));
					$strEmail = strtolower(strClean($_POST['txtEmail']));
					$strNit = strClean($_POST['txtNit']);
					$strNomFiscal = strClean($_POST['txtNombreFiscal']);
					$strDirFiscal = strClean($_POST['txtDirFiscal']);
					$intTipoId = RCLIENTES;
					$request_user = "";
					if($idUsuario == 0)
					{
						$option = 1;
						$strPassword =  empty($_POST['txtPassword']) ? passGenerator() : $_POST['txtPassword'];
						$strPasswordEncript = hash("SHA256",$strPassword);
							
						$request_user = $this->model->insertCliente($strIdentificacion,
																				$strNombre, 
																				$strApellido, 
																				$intTelefono, 
																				$strEmail,
																				$strPasswordEncript,
																				$intTipoId, 
																				$strNit,
																				$strNomFiscal,
																				$strDirFiscal );
						
					}
	
					if($request_user > 0 )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
							$nombreUsuario = $strNombre.' '.$strApellido;
							$dataUsuario = array('nombreUsuario' => $nombreUsuario,
												 'email' => $strEmail,
												 'password' => $strPassword,
												 'asunto' => 'Bienvenido a tu tienda en línea');
							$_SESSION['idUser'] = $request_user;
						    $_SESSION['login'] = true;
						    $this->login->sessionLogin($request_user);
							sendEmail($dataUsuario,'email_bienvenida');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else if($request_user == 'exist'){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la identificación ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
 ?>