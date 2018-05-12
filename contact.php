<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include 'header.php'; ?>
    </head>
    <body>
    <?php include 'top_layout.php' ?>;    

   <script>
    function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
    center: new google.maps.LatLng(47.174144, 27.572085), zoom: 15
   };
    var map = new google.maps.Map(mapCanvas, mapOptions);
   }
   </script>
        <section id="contact">
  <div class="container">
    <div class="well well-sm">
      <svg height="30" width="200">
      <text x="0" y="15" fill="red">Contact us!</text>
      </svg>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
              <div id="map" style="width:600px;height:400px;"></div>
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ15hcwkNYHvf_hWDIB76q1ciIgoi0NrM&callback=myMap"></script>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
        
    </body>
</html>
