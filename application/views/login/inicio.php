<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/foundation.css" />
    <script src="<?php echo base_url(); ?>public/js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="row">
      <div class="large-12 columns">
        <h1>Sistema de control para la asociacion de comerciantes</h1>
      </div>
    </div>

    <div class="row">
      <div class="large-9 columns">
        <h5>Ingrese sus datos de cuenta</h5>
        <!-- <div class="large-3 columns">
          izq
        </div> -->
        <div class="small-6 large-centered columns callout panel">

          <?php echo form_open('login/procesar', ''); ?>
          <?php
            echo validation_errors();
          ?>
            <div class="row">
              <div class="large-4 columns">
                <label for="right-label" class="right inline"><b>Usuario:</b></label>
              </div>
              <div class="large-8 columns">
                <input type="text" name="usuario">
              </div>
            </div>
            <div class="row">
              <div class="large-4 columns">
                <label for="right-label" class="right inline"><b>Password:</b></label>
              </div>
              <div class="large-8 columns">
                <input type="passwprd" name="password">
              </div>
            </div>
            <div class="row">
              <div class="large-6 large-centered columns">
                <label for="right-label" class="right inline">
                  <input class="round button" type="submit" value="Ingresar" >
                </label>
              </div>

            </div>
          <?php echo form_close(); ?>
        </div>
        <!-- <div class="large-3 columns">
          red
        </div> -->
      </div>
      <div class="large-3 columns panel">
        <h5>AYUDA</h5>
        <p>Si no puede ingresar a su cuenta contactece con el administrador del sistema info.devbolivia@gmail.com</p>
      </div>
    </div>


    <div class="row">


      <div class="large-12 medium-4 columns ">
        <div><hr></div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
