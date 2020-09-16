<?php namespace App\Models;
use CodeIgniter\Model;

class RegistroModel extends Model{

    protected $table="usuarios";
    protected $primaryKey="idusuario";

    protected $returnType ="array";
    protected $useSoftDeletes=false;

    protected $allowedFields = ['nombre', 'email','clave','usuario','palabraclave','idrol'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'nombre'=> 'required|alpha_numeric_space|min_length[3]',
        'email'=>'required|valid_email|is_unique[usuarios.email]',
        'clave'=> 'required|alpha_numeric|min_length[7]',
        'usuario'=> 'required|alpha_numeric|min_length[5]'
        
    ];
    protected $validationMessages = [
        'email'=>[
            'is_unique'=>'Lo sentimos. Su email ya esta registrado',
            'valid_email'=>'Por favor ingrese un correo valido'],
        'usuario'=>['is_unique'=>'Lo sentimos. Su nombre de usuario ya esta registrado']
    ];
    protected $skipValidation     = false;

    /*protected $beforeInsert=['agregar'];
    protected $beforeUpdate=['agregar'];
    protected function agregar(array $data){
        $data['data']['nombre']=$data['data']['nombre']."algo";
        return $data;


    }*/
}

?>