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
                <h4>Crear nuevo comerciante</h4>

              </div>
              <?php echo form_open('comerciantes/procesarCrearComerciante'); ?>

                <div class="row">
                  <div class="small-12 large-8">
                    <?php if(validation_errors()){ ?>
                      <div class="row">
                        <div class="columns large-12">
                          <div class="error-general" style="">
                            <?php echo validation_errors(); ?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>


                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Numero de caseta:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="ncaseta" value="<?php echo set_value('ncaseta', ''); ?>" type="text" id="right-label" placeholder="Ingrese el numero de caseta">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Nombres:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="nombres" value="<?php echo set_value('nombres', ''); ?>" type="text" id="right-label" placeholder="Ingrese sus nombre">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Apellidos:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="apellidos" value="<?php echo set_value('apellidos', ''); ?>" type="text" id="right-label" placeholder="Ingrese sus apellidos">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Codigo:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="codigo" value="<?php echo set_value('codigo', ''); ?>" type="text" id="right-label" placeholder="Ingrese su codigo de afiliado">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Carnet:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="carnet" value="<?php echo set_value('carnet', ''); ?>" type="text" id="right-label" placeholder="Ingrese su carnet">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Direccion:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="direccion" value="<?php echo set_value('direccion', ''); ?>" type="text" id="right-label" placeholder="Ingrese la direccion">
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Rubro:</label>
                      </div>
                      <div class="small-8 columns">
                        <select name="rubro" id="rubro">
                          <option value="">Seleccion un rubro</option>
                          <option value="1">rubro 1</option>
                          <option value="2">rubro 2</option>
                          <option value="3">rubro 3</option>
                          <option value="4">rubro 4</option>
                          <option value="5">rubro 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Observacion:</label>
                      </div>
                      <div class="small-8 columns">
                        <textarea name="observacion"><?php echo set_value('observacion', ''); ?></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="small-4 columns">
                      </div>
                      <div class="small-8 columns">
                        <input type="submit" class="small round button" value="Crear comerciante">
                      </div>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>

            </div>
          </div>
        </div>




      </div>

      <div class="large-3 medium-3 columns">
        <hr>
			  <h4>Anuncios</h4>

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
