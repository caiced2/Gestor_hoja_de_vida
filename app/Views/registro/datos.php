<div class="container">
<?php
    echo form_open('/home/guardardatos');
    if(isset($users)){
        $primer_nombre=$users[0]['primer_nombre'];
        $segundo_nombre=$users[0]['segundo_nombre'];
        $primer_apellido=$users[0]['primer_apellido'];
        $segundo_apellido=$users[0]['segundo_apellido'];
        $lugar_nacimiento=$users[0]['lugar_nacimiento'];
        $fecha_nacimiento=$users[0]['fecha_nacimiento'];
        $cedula=$users[0]['cedula'];
        $direccion=$users[0]['direccion'];
        $telefono1=$users[0]['telefono1'];
        $telefono2=$users[0]['telefono2'];
        $sexo=$users[0]['sexo'];
        $edad=$users[0]['edad'];
    }else{
        $primer_nombre="";
        $segundo_nombre="";
        $primer_apellido="";
        $segundo_apellido="";
        $lugar_nacimiento="";
        $fecha_nacimiento="";
        $cedula="";
        $direccion="";
        $telefono1="";
        $telefono2="";
        $sexo="";
        $edad="";
    }
    ?>
    <div class="form-group"></div>
    <?php
    echo form_label('Nombres','nombres');
    echo form_input(array('name'=>'primer_nombre','placeholder'=>'Primer Nombre','class'=>'form-control','value'=>$primer_nombre,'required'));
    echo form_input(array('name'=>'segundo_nombre','placeholder'=>'Segundo Nombre','class'=>'form-control','value'=>$segundo_nombre));
    echo form_label('Apellidos','apellidos');
    echo form_input(array('name'=>'primer_apellido','placeholder'=>'Primer Apellido','class'=>'form-control','value'=>$primer_apellido,'required'=>TRUE));
    echo form_input(array('name'=>'segundo_apellido','placeholder'=>'Segundo Apellido','class'=>'form-control','value'=>$segundo_apellido));
    echo form_label('Lugar de Nacimiento','lugar_nacimiento');
    echo form_input(array('name'=>'lugar_nacimiento','placeholder'=>'Lugar de Nacimiento','class'=>'form-control','value'=>$lugar_nacimiento,'required'));
    echo form_label('Fecha de Nacimiento (Inferior a 01-01-2002)','fecha_nacimiento');
    echo form_input(array('name'=>'fecha_nacimiento','placeholder'=>'01-01-2002','class'=>'form-control','value'=>$fecha_nacimiento,'type'=>'date','required','max'=>'2002-01-01'));
    echo form_label('Edad','edad');
    echo form_input(array('name'=>'edad','placeholder'=>'18','class'=>'form-control','value'=>$edad,'type'=>'number','min'=>'18','max'=>'100','required'));
    echo form_label('Numero de Cedula','cedula');
    echo form_input(array('name'=>'cedula','placeholder'=>'Numero de Cedula','class'=>'form-control','value'=>$cedula,'required'));
    echo form_label('Numeros de Telefono','telefono1');
    echo form_input(array('name'=>'telefono1','placeholder'=>'Numero de Telefono1','class'=>'form-control','value'=>$telefono1,'required'));
    echo form_input(array('name'=>'telefono2','placeholder'=>'Numero de Telefono2','class'=>'form-control','value'=>$telefono2,'required'));
    echo form_label('Sexo','sexo');
    $sexoOp=[
        'hombre'=>'Hombre',
        'mujer'=>'Mujer'
    ];
    echo form_dropdown('shirts',$sexoOp)."<br>";
    echo form_submit('guardar','Guardar','class = "btn btn-primary"');
    ?>
    <a href="<?php echo base_url()?>/index.php/home/registro"
            class="btn btn-warning" role="button">Cancelar</a>
    <?php
    if(isset($users)){
        echo form_hidden('id_datos',$users[0]['id_datos']);
    }
    
    ?>
    </div>
    <?php
    echo form_close();

    ?>
    </div>