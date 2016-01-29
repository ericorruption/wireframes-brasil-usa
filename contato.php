<?php include('include/header.php'); ?>

<main class="container">
  <h1 class="display-1">Contato</h1>

  <div class="row">
    <div class="col-md-5">
      <p class="lead">Dúvida? Reclamação? Sugestão? Elogio? Mande para nós através
  do formulário abaixo.</p>

      <form action="">
        <!-- <div class="row">
          <div class="col-md-6"> -->
            <fieldset class="form-group">
              <label for="">Nome</label>
              <input type="text" class="form-control">
            </fieldset>
     <!--      </div>
          <div class="col-md-6"> -->
            <fieldset class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control">
            </fieldset>
        <!--   </div>
        </div>
        <div class="row">
          <div class="col-md-6"> -->
            <fieldset class="form-group">
              <label for="">Telefone</label>
              <input type="text" class="form-control">
            </fieldset>
          <!-- </div>
          <div class="col-md-6"> -->
            <fieldset class="form-group">
              <label for="exampleTextarea">Mensagem</label>
              <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </fieldset>
          <!-- </div>
        </div>
 -->
       <!--  <fieldset class="form-group">
          <label for="exampleInputFile">Anexo</label>
          <input type="file" class="form-control-file" id="exampleInputFile">
          <small class="text-muted">Envie arquivos em formato .PDF de até 2MB.</small>
        </fieldset> -->

        <button class="btn btn-primary pull-right" type="submit">Enviar</button>
      </form>

    </div>

    <div class="col-md-6">
      <h2>Localização</h2>
      <p class="address">Rua Nomedetal, 29102<br/>
      Bairro Neighborhood x, Cidade City / UK</p>

      <div class="embed-responsive embed-responsive-16by9">
        <div class="embed-responsive-item" id="map-canvas"></div>
      </div>
    </div>
</main>

<script src="http://maps.google.com/maps/api/js?sensor=false&dummy=.js"></script>
<script>
  var map;
var panorama;
        var latlng = new google.maps.LatLng(49.241943,-122.889318);
        var myOptions = {
            zoom: 18,
            center: latlng,
            panControl: true,
            zoomControl: true,
            zoomControlOptions: {
                                  style: google.maps.ZoomControlStyle.SMALL
                                },
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
           };
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

</script>
<?php include('include/footer.php'); ?>