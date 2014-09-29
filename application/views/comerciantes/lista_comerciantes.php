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

    <?php $this->load->view('complementos/menu_header'); ?>

    <div class="row">
      <div class="large-9 medium-9 columns">

        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">

                <?php if ($this->session->flashdata('mensaje')): ?>
                  <div data-alert class="alert-box success radius">
                    <?php echo $this->session->flashdata('mensaje'); ?>
                    <a href="#" class="close">&times;</a>
                  </div>
                <?php endif ?>


                <h4>Lista de comerciantes</h4>
                <?php echo anchor('comerciantes/crearComerciante', 'Crear Comerciante', 'id="link-crear"'); ?>
              </div>
              <table>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre y Apellido</th>
                  <th>Carnet</th>
                  <th>Caseta</th>
                  <th>Ver</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
                <?php for ($i=0; $i <count($allComer) ; $i++) { ?>
                <tr>
                  <td><?php echo $allComer[$i]['codigo_com']; ?></td>
                  <td><?php echo $allComer[$i]['nombres_com'].' '.$allComer[$i]['apellidos_com'] ?></td>
                  <td><?php echo $allComer[$i]['carnet_com']; ?></td>
                  <td><?php echo $allComer[$i]['numero_caseta_com']; ?></td>
                  <td><?php echo anchor('comerciantes/verComerciante/'.$allComer[$i]['id_com'], 'Ver', ''); ?></td>
                  <td><?php echo anchor('comerciantes/editarComerciante/'.$allComer[$i]['id_com'], 'Editar', ''); ?></td>
                  <td><a href="javascript:
                              if (confirm('Desea eliminar al comerciante?'))
                              {
                                parent.location='<?php echo site_url('comerciantes/eliminarComerciante/'.$allComer[$i]['id_com']); ?>';
                              };
                              ">Eliminar</a></td>
                </tr>
                <?php } ?>
              </table>
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

    <script src="<?php echo base_url(); ?>public/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url(); ?>public/js/foundation.min.js"></script>

    <script>
      $(document).foundation();
      $(document).on('close.fndtn.alert-box', function(event) {
        // console.info('An alert box has been closed!');
      });
    </script>
  </body>
</html>