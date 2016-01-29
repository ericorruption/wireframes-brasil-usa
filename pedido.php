<?php include('include/header.php'); ?>

<main class="container">
  <h1 class="display-1">Faça seu pedido</h1>

  <div class="row">
    <div class="col-md-8">
      <p class="lead">É fácil fazer seu pedido no Portal Brasil USA.<br/> Precisamos
      apenas de algumas informações.</p>

      <div class="card card-block">
        <p>Produto ou serviço?</p>
        <label class="c-input c-radio">
          <input id="radio1" name="radio" type="radio" checked>
          <span class="c-indicator"></span>
          Produto
        </label>
        <label class="c-input c-radio">
          <input id="radio2" name="radio" type="radio">
          <span class="c-indicator"></span>
          Serviço
        </label>
      </div>

      <form class="js-togglable-form" id="product-form" action="">
        <div class="row">
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="">Nome do produto</label>
              <input type="text" class="form-control">
            </fieldset>
          </div>
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="">Marca</label>
              <input type="text" class="form-control">
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="">Modelo</label>
              <input type="text" class="form-control">
            </fieldset>
          </div>
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="">Imagem do produto</label>
              <label class="file">
                <input type="file" id="file">
                <span class="file-custom"></span>
              </label>
            </fieldset>
          </div>
        </div>

        <fieldset class="form-group">
          <label for="exampleTextarea">Descrição do produto</label>
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </fieldset>

        <button class="btn btn-primary btn-lg pull-right" type="submit">Fazer Pedido</button>
      </form>

      <form class="js-togglable-form sr-only" action="" id="service-form">
        <div class="card card-block">
          <p>Período</p>
          <div class="row">
            <div class="col-md-4">
              <fieldset class="form-group">
                <label for="">Data</label>
                <input type="text" class="form-control">
              </fieldset>
            </div>
            <div class="col-md-4">
              <fieldset class="form-group">
                <label for="">Hora de início</label>
                <input type="text" class="form-control">
              </fieldset>
            </div>
            <div class="col-md-4">
              <fieldset class="form-group">
                <label for="">Hora final</label>
                <input type="text" class="form-control">
              </fieldset>
            </div>
          </div>

          <label class="c-input c-checkbox">
            <input type="checkbox">
            <span class="c-indicator"></span>
            O dia inteiro
          </label>

          <label class="c-input c-checkbox">
            <input type="checkbox">
            <span class="c-indicator"></span>
            Mais de um dia
          </label>
        </div>

        <fieldset class="form-group">
          <label for="">Local</label>
          <input type="text" class="form-control">
        </fieldset>

        <fieldset class="form-group">
          <label for="exampleTextarea">Descrição do serviço</label>
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </fieldset>

        <button class="btn btn-primary btn-lg pull-right" type="submit">Fazer Pedido</button>
      </form>

    </div>
    <div class="col-md-4">
      <div class="card card-block">
        <p>Já fez seu pedido? Acompanhe o andamento fazendo login abaixo!</p>
        <a href="#" class="btn btn-primary">Acompanhar meu pedido</a>
      </div>
    </div>
</main>

<?php include('include/footer.php'); ?>