<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Gentella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <center>
              <img src="./img/logo.png" alt="logo_instituto"  width="150px"/>
            </center>
            <!-- Para el inicio de sesion usamos un metodo POST y la accion donde se va a realizar -->
            <form method="POST" action="operaciones/iniciar_sesion.php" class="col-sm-6 col-md-12">
              <h1>Inicio de Sesión</h1>
              <div>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="" />
              </div> 
              <div>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <button type="submit">Iniciar Sesión</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h2><i class="fa fa-home"></i > Insituto de Educación Superior Tecnológico Público "Huanta"</h2>
                  <p>©2022 Bienvenido a la plataforma de Portafolio Docente, Inicie Sesion para acceder en modo Administrador</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>