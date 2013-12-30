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
         #formulario{
            background-color: lightgray;
            padding: 20px;
         }
         #formulario label, input{
            font-size: 30px;
         }
      </style>
   </head>
   <body>
      <div class="fixed">
         <nav class="top-bar" data-topbar>

         </nav>
      </div>
         <div class="row">
             <div class="large-12 columns"><br />
                  <h2>Inicio de sesión</h2>
                 <?php echo form_open("login/entrar", 'id="formulario" style="width: 500px; font-size=100px"');?>
                 <?php echo form_label("Usuario");?>
                 <?php echo form_input('usuario', '', 'required'); ?>
                 <?php echo form_label("Contraseña");?>
                 <?php echo form_password('password', '', 'required'); ?>
                 <?php echo form_submit('enviar', 'Entrar',  'class = "button [tiny small large]"'); ?>
                 <?php echo form_close(); ?>
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
             
         });
      </script>
   </body>
</html>
