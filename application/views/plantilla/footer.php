<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   </div>
  </div>
</div>
  <!--  End Modal -->
  <footer class="footer" data-background-color="black">
    
      
      
      <div class ="row">
          <hr>
          <div class ="col-xs-4 col-sm-4 col-md-4">
          <h3 class ="shadow p-2 mb-2  rounded text-danger">CONSULTAS</h3>
               
               
               <div class ="col-xs-10 col-sm-10 col-md-12 col-offset-xs-1 col-offset-sm-1 col-offet-md-1 ">
                   
                    <a href="#" class ="text-primary shadow"><strong>Registrarse</strong></a> <br>
                     <a href="#" class="text-primary shadow  "><strong>Preguntas frecuentes</strong></a><br>
                    
               </div>
               
               
                
             
          </div>
          <div class ="col-xs-4 col-sm-4 col-md-4">
              <h3 class ="shadow p-2 mb-2  rounded text-danger"><a href="http://www.unne.edu.ar/">UNNE</a></h3>
             <hr>
              <p class ="text-black shadow">	
                <strong>Ciudad de Corrientes - Corrientes, Argentina.</strong>
              </p>
              <hr>
          </div>
          <div class ="col-xs-4 col-sm-4 col-md-4 text-right">
              <h3 class ="shadow p-2   rounded">
                <a href="#" class ="text-danger">Contactenos</a></h3><hr>
              <p >
                  <i class="rounded bg-primary" style="font-size:15px"></i>
                  <strong class ="lead">Email: victor2283@gmail.com </strong>
              </p>
              
          </div>
          
      
      <hr>
      <div class ="col-12 ">
          <h6 class ="text-center text-primary">Copyright <i class ="text-danger">&copy;<script type="text/javascript">document.write(new Date().getFullYear())</script></i>- Todos los derechos reservados <a href="index">Tecno Ventas S.R.L</a></h6>
      </div> 
           
          
  
  
  
  
  </footer>
  <!--   Core JS Files   -->

  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

  </script>
<script src="assets/js/popper.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>












</body>
</html>