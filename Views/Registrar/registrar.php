<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dereck Tello">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/uploads/logo.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" href="<?= media();?>/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/styles.css">
    
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <!-- <div class="logo">
        <h1><?= $data['page_title']; ?></h1>
      </div> -->
      
      <div class="login-box rounded-3xl" style="height: 650px; width: 700px;">
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
            <form class="login-form" name="formRegister" id="formRegister" action="">
              <!-- <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3> -->
              <h3 class="login-head "><img  class="login-logo-img" src="<?= media(); ?>/images/logosinfondo.png" alt="Iniciar Sesión"></h3>
              <input type="hidden" id="idUsuario" name="idUsuario" value="">
              <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="txtIdentificacion">Identificación <span class="required">*</span></label>
                  <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="txtNombre">Nombres <span class="required">*</span></label>
                  <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="txtApellido">Apellidos <span class="required">*</span></label>
                  <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" required="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="txtTelefono">Teléfono <span class="required">*</span></label>
                  <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" required="" onkeypress="return controlTag(event);">
                </div>
                <div class="form-group col-md-4">
                  <label for="txtEmail">Email <span class="required">*</span></label>
                  <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="txtPassword">Password <span class="required">*</span></label>
                  <input type="password" class="form-control" id="txtPassword" name="txtPassword" >
                </div>
              </div>
              <hr>
              <p class="text-primary">Datos Fiscales.</p>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Identificación Tributaria (RUC)</label>
                  <input class="form-control" type="text" id="txtNit" name="txtNit" >
                </div>
                <div class="form-group col-md-6">
                  <label>Nombre fiscal de Empresa </label>
                  <input class="form-control" type="text" id="txtNombreFiscal" name="txtNombreFiscal" >
                </div>

                <div class="form-group col-md-12">
                  <label>Dirección fiscal de Empresa </label>
                  <input class="form-control" type="text" id="txtDirFiscal" name="txtDirFiscal">
                </div>
                
              </div>
             <div class="form-row">
                
             </div>
              <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Registrar</span></button>&nbsp;&nbsp;&nbsp;
              </div>
            </form>
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