<?php

// Desactivar toda notificación de error
error_reporting(0);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVENTOS</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
.myhead{
margin-top:0px;
margin-bottom:0px;
text-align:center;
}
</style>

</head>
<body >
    <div class="container">

         <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                            <div class="panel-body" style="background-color: #E2E2E2; margin-top:50px; border:solid 3px #0e0e0e;">
							  <h3 class="myhead">SALON DE EVENTOS</h3>
                                <form role="form" action="index.php" method="post">
                                    <hr />

                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Tu Usuario " name="username" required />
                                        </div>

									<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Tu Contraseña " name="password" required />
                                        </div>

                                     <button class="btn btn-primary" type= "submit" name="login">Ingresar</button>

                                    </form>
                            </div>

                        </div>


        </div>
    </div>

</body>
</html>
