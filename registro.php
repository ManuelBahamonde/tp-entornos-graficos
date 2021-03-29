<?php
  $titulo = 'Registro';

  include_once 'app/ValidadorRegistro.inc.php';
  
  if(isset($_POST['enviar'])){
      $validador = new ValidadorRegistro($_POST['nombre'],$_POST['email'],$_POST['clave1'],$_POST['clave2']);
  }  

  if ($validador-> registro_valido()) {
      echo "Todo correcto";
  }

  include_once 'plantillas/documento-declaracion.inc.php';
  include_once 'plantillas/navbar.inc.php';
?>



<div>
<h1 class="">Registro</h1>

<br>
<br>

<p></p>
<p class="d-flex">
<a href="index.php" class="btn btn-primary d-flex align-items-center"><span> Volver </span></a>

</p>
<ul class="ftco-social">
<li><a href="#"><span class="fa fa-twitter"></span></a></li>
<li><a href="#"><span class="fa fa-facebook"></span></a></li>
<li><a href="#"><span class="fa fa-instagram"></span></a></li>
<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-7 svg d-flex align-items-center">
<img src="images/bg_1.svg" class="img-fluid" alt="">
</div>
</div>
</div>
</section>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Instrucciones
                    </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p>
                        Para unirte al sistema de gestión introduce un nombre de usuario, <br> tu email y una contraseña.
                    </p>
                    <br>
                    <a href="#">¿Ya tienes una cuenta?</a>
                    <br>
                    <br>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
        <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Introduce tus datos
                    </h3>
                    <br> 
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">    <?php /* Es lo mismo que poner registro.php pero es mas adecuado ya que si se cambia el nombre de la pagina la direccion se cambiara automaticamente  */ ?>
                    <?php
                     if(isset($_POST['enviar'])) {

                        include_once 'plantillas/registro_validado_inc.php';

                     }else {
                         include_once 'plantillas/registro_vacio.inc.php';
                     }
                     ?>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br>
<br><br>
<br><br>
<br><br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>


<?php
  include_once 'plantillas/documento-cierre.inc.php';
?>