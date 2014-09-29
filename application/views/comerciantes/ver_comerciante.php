<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/foundation.css" />
    <script src="<?php echo base_url(); ?>public/js/vendor/modernizr.js"></script>
    <style>
      .error-general{
        border:1px solid red;
        margin-bottom: 17px;
      }
      .error-general p{
        color: red !important;
        font-size: 11px;
        margin: 0 0 0 13px;
        padding: 0;

      }
    </style>
  </head>
  <body>

    <div class="row">
      <div class="large-12 columns">
        <h1>Sistema de control para la asociacion de comerciantes</h1>
      </div>
    </div>

    <?php $this->load->view('complementos/menu_header'); ?>

    <div class="row">
      <div class="large-9 medium-9 columns">

        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <?php echo anchor('comerciantes/listaComerciantes', 'Volver a la lista', 'id="lista-comerciantes"'); ?>
                <h4>Ver comerciante</h4>

              </div>

                <div class="row">
                  <div class="small-8">



                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Numero de caseta:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $numero; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Nombres:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $nombres; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Apellidos:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $apellidos; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Codigo:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $codigo; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Carnet:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $carnet; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Direccion:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $direccion; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Rubro:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $rubro; ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Observacion:</label>
                      </div>
                      <div class="small-8 columns">
                        <?php echo $observaciones; ?>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>




      </div>

      <div class="large-3 medium-3 columns">
        <hr>
        <h5>Anuncios</h5>
        <div class="panel">
          <h5>So many components, girl!</h5>
          <p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
          <a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
