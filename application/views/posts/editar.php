<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Gestión Ambiental Administración</title>
      <link rel="stylesheet" href="<?php echo (base_url()); ?>assets/admin/css/foundation.css" />
      <script src="<?php echo (base_url()); ?>assets/admin/js/modernizr.js"></script>
      <style type="text/css">
         #pnl-azul{
         background-color: #C7DCFF;
         }
         #pnl-amarillo{
         background-color: #FFFABF;
         }
         #pnl-verde{
         background-color: #D7FFC7;
         }
         #-left{
         height: 400px;
         overflow: scroll;
         overflow-x: hidden;
         }
         #-left h4{
            background-color: white;


         }
         #posts{

         }
      </style>
   </head>
   <body>
      <div class="fixed">
         <nav class="top-bar" data-topbar>
            <ul class="title-area">
               <li class="name">
                  <h1><a href="<?php echo(base_url()); ?>index.php/admin">Administración</a></h1>
               </li>
               <section class="top-bar-section">
                  <!-- Right Nav Section -->
                  <ul class="right">
                     <li class="has-dropdown">
                        <a href="#">Configuración</a>
                        <ul class="dropdown">
                           <li><a href="<?php echo (base_url());?>">Ver página</a></li>
                           <li><a href="#">Usuarios</a></li>
                           <li><a href="<?php echo(base_url()); ?>/index.php/admin/cerrar">Salir</a></li>
                        </ul>
                     </li>
                  </ul>
                  <ul class="left">
                     <li><a href="<?php echo(base_url()); ?>index.php/posts/nuevo">Noticia +</a></li>
                     <li><a href="#">Entradas</a></li>
                     <li><a href="#">Comentarios +/-</a></li>
                     <li><a href="#">Eventos</a></li>
                  </ul>
               </section>
            </ul>
         </nav>
      </div>
          <div class="row">
            <div id="-left" class="large-3 medium-4 columns">
              <h5>Todas mis noticias (<?php echo (count($posts));?>)</h5>
             <ul id="posts" class="side-nav"> 
              <?php
              foreach ($posts as $fila) { ?>
               <li><a href="<?php echo(base_url()); ?>index.php/posts/editar/<?php echo ($fila->postId); ?>"><?php echo ($fila->titulo);?></a></li>
              <?php } ?>
             </ul>
            </div>
                <div class="large-9 medium-8 columns">
                 <?php echo form_open("posts/editar", 'data-abide');?>
                <div class="titulo">
                  <label for="titulo"><h3>Título (Nueva entrada)</h3></label>
                  <?php echo form_input(array('name' => 'titulo', 'id' => 'titulo', 'cols' => '10'),$contenido['titulo'], 'required placeholder' ); ?>
                   <small class="error">Ups! olvidaste el título ;)</small>
                </div>
                 <div class="categoria">
                  <?php echo form_dropdown('categoria', $categorias, $contenido['categoria'], 'required data-invalid' ); ?>
                  <small class="error">Selecciona una categoría</small>
                 </div>
                 
                 <div class="texto">
                    <?php echo form_textarea(array('name' => 'name1','id' => 'editor1', 'rows' => '10', 'cols' => '10'), $contenido['cuerpo'])?>
                     <small class="error">No puedes hacer una noticia si no escribes su contenido</small>
                 </div> 
                 
                 <?php echo form_submit('enviar', 'Publicar',  'class = "button [tiny small large]"'); ?>
                 <?php echo form_close(); ?>
               </div>
            </div>
          </div>
      </div>
      <script src="<?php echo (base_url()); ?>assets/admin/js/jquery.js"></script>
      <script src="<?php echo (base_url()); ?>assets/admin/js/foundation.min.js"></script>
      <script src="<?php echo (base_url()); ?>assets/admin/editor/ckeditor.js"></script>
      <script>
         $(document).foundation();
          CKEDITOR.replace('editor1');
         
      </script>
      <script type="text/javascript">
         $( document ).ready(function() {
              $("#editor1").attr('required', 'required');
         });
      </script>
   </body>
</html>
