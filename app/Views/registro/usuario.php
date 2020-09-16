<div class="container">
<?php
    echo form_open('/home/guarda');
    if(isset($users)){
        $nombre=$users[0]['nombre'];
        $email=$users[0]['email'];
        $clave=$users[0]['clave'];
        $usuario=$users[0]['usuario'];
        $palabraclave=$users[0]['palabraclave'];
    }else{
        $nombre="";
        $email="";
        $clave="";
        $usuario="";
        $palabraclave="";
    }
    ?>
    <div class="form-group"></div>
    <?php
    echo form_label('Nombre','nombre');
    echo form_input(array('name'=>'nombre','placeholder'=>'Nombre','class'=>'form-control','value'=>$nombre));
    echo form_label('Email','email');
    echo form_input(array('name'=>'email','placeholder'=>'Email','class'=>'form-control','value'=>$email));
    echo form_label('Nombre de Usuario','usuario');
    echo form_input(array('name'=>'usuario','placeholder'=>'Nombre de Usuario','class'=>'form-control','value'=>$usuario));
    echo form_label('Contraseña','clave');
    echo form_password(array('name'=>'clave','placeholder'=>'Contraseña','class'=>'form-control','value'=>$clave));
    echo form_label('Palabra Clave','palabraclave');
    echo form_input(array('name'=>'palabraclave','placeholder'=>'Palabra Clave','class'=>'form-control','value'=>$palabraclave));
    echo form_submit('guardar','Guardar','class = "btn btn-primary"');
    ?>
    <a href="<?php echo base_url()?>/index.php/home/"
            class="btn btn-warning" role="button">Cancelar</a>
    <?php
    if(isset($users)){
        echo form_hidden('idusuario',$users[0]['idusuario']);
    }
    
    ?>
    </div>
    <?php
    echo form_close();

    ?>
    </div>