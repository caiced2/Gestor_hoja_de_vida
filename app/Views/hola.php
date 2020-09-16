<?php  $db = \Config\Database::connect();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="<?php echo base_url()?>/index.php/home/formulario"
            class="btn btn-info" role="button">Nuevo</a>
        </div>
        <div class="row">

        
            <table class="table">
                <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">nombre de usuario</th>
                <th scope="col">acciones</th>
                </tr>
        
<?php

/*
foreach($users as $user){
    echo "<tr scope='row'>";
    echo "<td>".$user['Id']."</td>";
    echo "<td>".$user['nombre']."</td>";
    echo "<td>".$user['apellido']."</td>";
    echo "<td>".$user['edad']."</td>";
    echo "<td>";
    ?>
    <a href="<?php echo base_url()?>/index.php/home/editar/<?php echo $user['Id'] ?>" 
    class="btn btn-warning" role="button">'<i class="fa fa-pencil-square-o"></i>'</a>
    <a href="<?php echo base_url()?>/index.php/home/borrar/<?php echo $user['Id'] ?>" 
    class="btn btn-danger" role="button">'<i class="fa fa-trash"></i>'</a>
    <?php
    echo "</td>";
    echo "</tr>";

}
*/
?>
<? if($users): ?>
            <?php foreach ($users as $user): ?>
            <?= "<tr  scope='row' >";?>
            <?= "<td>".$user['idusuario']."</td>";?>
            <?= "<td>".$user['nombre']."</td>";?>
            <?= "<td>".$user['email']."</td>";?>
            <?= "<td>".$user['usuario']."</td>";?>
            <td>
            <a href="<?php echo base_url(); ?>/index.php/home/editar/<?php echo $user['idusuario']; ?>" class="btn btn-warning" role="button" ><i class="fa fa-pencil-square-o"></i></a>
            <a href="<?php echo base_url(); ?>/index.php/home/borrar/<?php echo $user['idusuario']; ?>" class="btn btn-danger" role="button" ><i class="fa fa-trash"></i></a>
            </td>
            <?php endforeach; ?>
        <? endif; ?>
            </table>
            
        </div>
    </div>


</body>
</html>

