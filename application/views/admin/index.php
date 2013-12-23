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
         position: fixed;
         margin-top: -1px;
         padding-top: 5px;
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
         <div class="panel">
            <h3>Bienvenido al panel administrativo</h3>
            <p>Es sencillo administrar esta página</p>
         </div>
      </div>
      <div class="row">
      <div class="row">
         <div class="small-6 large-4 columns">
            <div id="pnl-azul" class="panel">
               <h3> Agregue noticias o edite una</h3>
               <p>Escriba una nueva entrada seleccionando la opción <strong>"Entrada +"</strong> en la barra de menú que ve arriba. Puede también accesar desde <a href="./nueva_entrada.php">aquí</a></p>
            </div>
         </div>
         <div class="small-2 large-4 columns">
            <div id="pnl-amarillo" class="panel">
               <h3>Realice un evento</h3>
               <p>Puede configurar un evento para que sea compartido en redes sociales y publicado en la web. Accese a  sus eventos desde la barra de menú arriba</p>
            </div>
         </div>
         <div class="small-4 large-4 columns">
            <div id="pnl-verde" class="panel">
               <h3>Elimine comentarios</h3>
               <p>Puede eliminar comentarios no deseados, para accesar vaya al menú del panel en la opción Comentarios +/- y seleccione aquellos comentarios inapropiados</p>
            </div>
         </div>
         </div
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
             
         });
      </script>
   </body>
</html>
