<?php 
include "cabecera.php";
?> 

<div class="banner">
        <div class="banner-overlay"></div>
        <div class="inside-container top-bar">
          <div class="row">
            <div class="col-md-4 top-bar-left order-2 order-md-12">
              <i class="fas fa-envelope-open-text"></i> 
              <a href="mailto:info@webdomus.net">info@webdomus.net</a>
            </div>    
            <div class="col-md-4 logo order-1 order-md-12">
              <img class="logo-img" src="img/logo1.png" alt="">
            </div> 
                   
          </div>      
        </div>
        <div class="col-12">
            <h2 class="section-title">viva Bolivia</h2>
            <p class="section-title-desc">instituto tecnologico viva Bolivia</p>
        </div>
      </div>

   <div class="trainer-section">
   <div class="row sections-detail">
        <h2 class="section-title" >Ingreso de Usuario</h2>

        <form action="procesar.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>


            <div class="inside-container join-us-section">
            <div class="row">
          <div class="col-12">
            <a href="cambio.php" class="join-us-btn">Join us now</a>
            <p>.</p>
            <p>.</p>
          </div>
        </div>
        </div>
            
         </form>

          
        </div>

   </div>
  
   
