<?php namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model{

    protected $table="datos_personales";
    protected $primaryKey="id_datos";

    protected $returnType ="array";
    protected $useSoftDeletes=false;

    protected $allowedFields = ['primer_nombre', 'segundo_nombre','primer_apellido',
    'segundo_apellido','lugar_nacimiento','fecha_nacimiento','cedula','direccion','telefono1'
    ,'telefono2','sexo','edad'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
       /* 'primer_nombre'=> 'alpha_numeric_space|min_length[3]',
        'primer_apellido'=>'alpha_numeric_space|min_length[3]',
        'lugar_nacimiento'=>'alpha_space|',
        'cedula'=> 'numeric|min_length[9]',
        'direccion'=> 'alpha_numeric_space|min_length[10]',
        'telefono1'=> 'numeric|min_length[7]',
        'telefono2'=> 'numeric|min_length[7]',
        */
        
    ];
    protected $validationMessages = [
       // 'cedula'=>['is_unique'=>'Lo sentimos. Su numero de cedula ya esta registrado']
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