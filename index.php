<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Eliminar - Actualizar Registro con Ventana Modal en PHP :: WebDeveloper Urian Viera</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/cargando.css">
  <link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
  <style> 
        table tr th{
            background:rgba(0, 0, 0, .6);
            color: azure;
        }
        tbody tr{
          font-size: 12px !important;

        }
        h3{
            color:crimson; 
            margin-top: 100px;
        }
        a:hover{
            cursor: pointer;
            color: #333 !important;
        }
      </style>
</head>
<body>
  
<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php"> 
          <img src="img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Web Developer Urian Viera <span>&#160;</span></h5>
    </div>
</nav>



<div class="container mt-5 p-5">

<?php
include('config.php');

$sqlCliente   = ("SELECT * FROM clientes ORDER BY id DESC ");
$queryCliente = mysqli_query($con, $sqlCliente);
$cantidad     = mysqli_num_rows($queryCliente);
?>


  <h4 class="text-center">
    Como Eliminar & Actualizar Registro con Ventana Modal en PHP
  </h4>
  <hr>


<div class="row text-center" style="background-color: #cecece">
  <div class="col-md-6"> 
    <strong>Registrar Nuevo Cliente</strong>
  </div>
  <div class="col-md-6"> 
    <strong>Lista de Clientes <span style="color: crimson">  ( <?php echo $cantidad; ?> )</span> </strong>
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">

        <div class="col-sm-5">
        <!--- Formulario para registrar Cliente --->
        <?php include('registrarCliente.php');  ?>

        </div>  

         

          <div class="col-sm-7">
              <div class="row">
                <div class="col-md-12 p-2">


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while ($dataCliente = mysqli_fetch_array($queryCliente)) { ?>
                          <tr>
                            <td><?php echo $dataCliente['nombre']; ?></td>
                            <td><?php echo $dataCliente['correo']; ?></td>
                            <td><?php echo $dataCliente['celular']; ?></td>
                            
                          <td> 
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataCliente['id']; ?>">
                                  Eliminar
                              </button>
                            
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataCliente['id']; ?>">
                                  Modificar
                              </button>
                          </td>
                          </tr>
                     

                            <!--Ventana Modal para Actualizar--->
                            <?php  include('ModalEditar.php'); ?>

                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php include('ModalEliminar.php'); ?>


                        <?php } ?>
                
                    </table>
                </div>


              </div>
          </div>
          </div>
      </div>
  </div>
</div>



</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);



    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="index.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });


});
</script>

</body>
</html>