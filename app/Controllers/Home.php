<?php namespace App\Controllers;

use App\Models\DatosModel;
use App\Models\RegistroModel;
use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
	public function __construct()
	{
		helper('form');
	}	

	public function guarda(){
		$model = new RegistroModel($db);
		$request= \Config\Services::request();
		$data=array(
			'nombre'=>$request->getPostGet('nombre'),
			'email'=>$request->getPostGet('email'),
			'clave'=>$request->getPostGet('clave'),
			'usuario'=>$request->getPostGet('usuario'),
			'palabraclave'=>$request->getPostGet('palabraclave'),
			'idrol'=>'2'
		);
		if($request->getPostGet('idusuario')){
			$data['idusuario']=$request->getPostGet('idusuario');

		}
		if ($model->save($data)===false){
			var_dump($model->errors());
		}
		if($request->getPostGet('idusuario')){
		$users=$model->find([$request->getPostGet('idusuario')]);
		$users=array('users'=>$users);		 
     echo "<script>
                alert('Guardado');                
    </script>";
		$estructura=view('hola').view('header');
		return $estructura;	   
		}else{
		$users=$model->findAll();
		$users=array('users'=>$users);
		echo "<script>
		alert('No guardado');                
</script>";
		$estructura=view('registro/usuario').view('header');
		return $estructura;	
	 }
	}
	public function editar(){
		$model = new RegistroModel($db);
		$request= \Config\Services::request();
		if($request->getPostGet('idusuario')){
			$idusuario=$request->getPostGet('idusuario');
		}else{
			$idusuario=$request->uri->getSegment(3);
		}
		$users=$model->find([$idusuario]);
		$users=array('users'=>$users);
		$estructura=view('registro/usuario').view('header');
		return $estructura;	
	}
	public function borrar(){
		$model = new RegistroModel($db);
		$request= \Config\Services::request();
		if($request->getPostGet('idusuario')){
			$idusuario=$request->getPostGet('idusuario');
		}else{
			$idusuario=$request->uri->getSegment(3);
			}	
		$model->delete($idusuario);
		$users=$model->findAll();
		$users=array('users'=>$users);
		return view('hola',$users);
	}

	public function formulario(){
		//$users=array('users'=>$users);
		$estructura=view('registro/usuario').view('header');
		return $estructura;
	}
	public function registro(){
		$estructura=view('registro/datos').view('header');
		return $estructura;
	}
	public function index()
	{
		echo"Home";
		$model = new RegistroModel($db);
		$users=$model->paginate(10);
		$paginador=$model->pager;
		$users=array('users'=>$users,'paginador'=>$paginador);
		return view('hola',$users);
	}
	public function guardardatos(){
		$model = new DatosModel($db);
		$request= \Config\Services::request();
		$data=array(
			'primer_nombre'=>$request->getPostGet('primer_nombre'),
			'segundo_nombre'=>$request->getPostGet('segundo_nombre'),
			'primer_apellido'=>$request->getPostGet('primer_apellido'),
			'lugar_nacimiento'=>$request->getPostGet('lugar_nacimiento'),
			'fecha_nacimiento'=>$request->getPostGet('fecha_nacimiento'),
			'cedula'=>$request->getPostGet('cedula'),
			'direccion'=>$request->getPostGet('direccion'),
			'cedula'=>$request->getPostGet('cedula'),
			'telefono1'=>$request->getPostGet('telefono1'),
			'telefono2'=>$request->getPostGet('telefono2'),
			'sexo'=>$request->getPostGet('sexo'),	
			'edad'=>$request->getPostGet('edad'),			
		);
		if($request->getPostGet('id_datos')){
			$data['id_datos']=$request->getPostGet('id_datos');

		}
		if ($model->save($data)===false){
			var_dump($model->errors());
		}
		if($request->getPostGet('id_datos')){
		$users=$model->find([$request->getPostGet('id_datos')]);
		$users=array('users'=>$users);		 
     echo "<script>
                alert('Guardado');                
    </script>";
		$estructura=view('hola').view('header');
		return $estructura;	   
		}else{
		$users=$model->findAll();
		$users=array('users'=>$users);
		echo "<script>
		alert('No guardado');                
</script>";
	$estructura=view('registro/datos').view('header');
	return $estructura;
	 }
	}
	
	
}
