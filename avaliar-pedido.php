<?php include('include/header.php'); ?>

<main class="container">
    <h1 class="display-1">Avaliar pedido</h1>
    <div class="row">
        <div class="col-md-6">
            <p>Você está avaliando seu pedido de nº <strong>123130</strong>.
            Veja as informações do pedido ao lado e nos diga se sua experiência foi
            positiva ou negativa e por quê.</p>
            <p>Você também pode enviar um vídeo do
            Youtube mostrando o unboxing do produto ou um review do serviço.</p>

            <h2>Avaliação do pedido</h2>
            <form action="">
                <div class="card card-block">
                    <p>Como foi sua experiência?</p>
                    <label class="c-input c-radio">
                      <input id="radio1" name="radio" type="radio" checked>
                      <span class="c-indicator"></span>
                      Positiva
                    </label>
                    <label class="c-input c-radio">
                      <input id="radio2" name="radio" type="radio">
                      <span class="c-indicator"></span>
                      Negativa
                    </label>
                </div>

                <fieldset class="form-group">
                  <label for="exampleTextarea">Por que?</label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </fieldset>

                <fieldset class="form-group">
                    <label for="">Endereço do vídeo <small>(do Youtube)</small></label>
                    <input type="text" class="form-control">
                </fieldset>

                <button class="btn btn-primary pull-right">Enviar avaliação</button>
            </form>
        </div>

        <div class="col-md-offset-1 col-md-5">
            <h2>Informações do pedido</h2>

            <div class="card">
                <img class="card-img-top" src="http://placehold.it/480x220" alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Nome do produto:</strong> Cras justo odio</li>
                    <li class="list-group-item"><strong>Marca:</strong> Dapibus ac facilisis in</li>
                    <li class="list-group-item"><strong>Modelo:</strong> Vestibulum at eros</li>
                    <li class="list-group-item"><strong>Descrição do produto:</strong>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    A, nobis quo velit minima! Debitis at odit sunt, nisi
                    facere quos, ad eos cupiditate voluptatum nulla rerum
                    quis sed tempora aperiam!</li>
                  </ul>
            </div>
<!--
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Período:</strong> 12/11/2015, das 18:00 às 23:00</li>
                    <li class="list-group-item"><strong>Local:</strong> Vestibulum at eros</li>
                    <li class="list-group-item"><strong>Descrição do serviço:</strong>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    A, nobis quo velit minima! Debitis at odit sunt, nisi
                    facere quos, ad eos cupiditate voluptatum nulla rerum
                    quis sed tempora aperiam!</li>
                  </ul>
            </div> -->
        </div>
    </div>

</main>

<?php include('include/footer.php'); ?>