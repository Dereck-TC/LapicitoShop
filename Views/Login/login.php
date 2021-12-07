<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dereck Tellos">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/uploads/logo.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" href="<?= media();?>/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/styles.css">
    
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body class="hold-transition login-page">
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <!-- <div class="logo">
        <h1><?= $data['page_title']; ?></h1>
      </div> -->
      
      <div class="login-box rounded-3xl">
        <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
        
        <!-- <div class="relative sm:max-w-sm w-full"> -->
          <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
          <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
          <div class="card bg-white-400 shadow-lg  w-full h-full rounded-3xl  absolute  transform"></div>
          <!-- <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md"> -->
            <form class="login-form" name="formLogin" id="formLogin" action="">
              <!-- <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3> -->
              <h3 class="login-head "><img  class="login-logo-img" src="<?= media(); ?>/images/logosinfondo.png" alt="Iniciar Sesión"></h3>
              <div class="form-group">
                <label class="control-label">Email</label>
                <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Email" autofocus>
              </div>
              <div class="form-group">
                <label class="control-label">CONTRASEÑA</label>
                <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <div class="utility">
                  <p class="semibold-text mb-2"><a href="#" data-toggle="flip">¿Olvidaste tu contraseña?</a></p>
                  <p class="semibold-text mb-2"><a href="<?= base_url(); ?>/registrar" data-toggle="flep">Regístrate</a></p>
                </div>
              </div>
              <div id="alertLogin" class="text-center"></div>
              <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary btn-block rounded-3xl"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
              </div>
            </form>
            <form class="forget-form"  name="formRecetPass" id="formRecetPass" action="">
              <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>¿Olvidaste contraseña?</h3>
              <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="Email">
              </div>
              <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
              </div>
              <div class="form-group mt-3">
                <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
              </div>
            </form>
            <!--*******************************************************************-->
            
            <!--*******************************************************************-->
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>