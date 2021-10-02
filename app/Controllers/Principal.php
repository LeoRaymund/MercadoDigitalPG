<?php namespace App\Controllers;
//ruta donde se encuentra el modelo
use App\Models\RegistroModel;
use App\Models\LoginModel;
use App\Models\ProductoModel;
class Principal extends BaseController
{
	//campo que representa el modelo
	private $registroModel;
	private $loginModel;

	public function __construct(){
		// contructor que inicializa el modelo 
		$this->registroModel = model('RegistroModel');
		$this->loginModel = model('LoginModel');
		
	}

	public function index(){
		$usuario =[
			'correo'=>'',
			'password'=>''
		];
		echo view('Login');
	}
	public function mostrarRegister(){
		return view('Register');
	}
	public function mostrarMenu(){
		echo view('Menu');
		
	}
	public function mostrarTecnologia(){

		return view('tecnologia');
		
	}
	public function mostrarDesktop(){

		return view('computadoraDesktop');
		
	}
	public function mostrarCarrito(){
		
		echo view('cart');
	}
	public function mostrarBorrar(){
		echo view('borrarcarrito');
	}
	
	
	//insertar registro a la base de datos 
public function insertar(){
	$nombre = $this->request->getPost('nombre');
	$apellidos = $this->request->getPost('apellidos');
	$correo = $this->request->getPost('correo');
	$password = $this->request->getPost('password');
	//funcion para encriptar contraseña 
	$pass_cifrado = password_hash($password, PASSWORD_DEFAULT);
	 //array asocaitiva recomendable 
$registro =[
	'nombre' =>$nombre,
	'apellidos' =>$apellidos,
	'correo' =>$correo,
	'password' =>$pass_cifrado
];
if($this->registroModel->insert($registro)){
	echo '<script>
				alert("Se registro Con EXITO!");
				history.go(-1);
				 </script>';
				 echo view(Insertar);
}else{
	echo '<script>
				alert("error");
				history.go(-1);
				 </script>';
}
}
//consultar en la base de datos si existe el usuario registrado 
public function mostrarlogin(){
	$datos=[
		'correo'=>$this->request->getPost('correo'),
		'password'=>$this->request->getPost('password')
	];
	$registro=$this->registroModel->findAll();
	foreach($registro as $usuario):
		if($datos['correo']==$usuario['correo']){
			if($datos['password']== $usuario['password']){
			return redirect()->to('http://192.168.64.2/MercadoDigital/public/Principal/mostrarMenu');
			}
			else{
				echo '<script>
				alert("Correo o password incorrecto VUELVE A INTENTAR");
				history.go(-1);
				 </script>'; 
			}
		}
		else{
			echo '<script>
			alert("Usuario no encontrado");
			history.go(-1);
			</script>';
		}
	endforeach;
}
}