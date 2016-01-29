<?php include('include/header.php'); ?>

<main class="container">
  <h1 class="display-1">Trabalhe Conosco</h1>

  <div class="row">
    <div class="col-md-6">
      <p class="lead">Envie seu currículo pra gente. Adoramos pessoas motivadas.</p>

      <form action="">
        <div class="row">
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="">Nome</label>
              <input type="text" class="form-control">
            </fieldset>
          </div>
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control">
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="">Telefone</label>
              <input type="text" class="form-control">
            </fieldset>
          </div>
          <div class="col-md-6">
            <fieldset class="form-group">
              <label for="exampleInputFile">Currículo</label>
              <input type="file" class="form-control-file" id="exampleInputFile">
              <small class="text-muted">Envie arquivos em formato .PDF de até 2MB.</small>
            </fieldset>
          </div>
        </div>

        <fieldset class="form-group">
          <label for="exampleTextarea">Mensagem</label>
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </fieldset>

        <button class="btn btn-primary pull-right" type="submit">Enviar</button>
      </form>

    </div>
</main>

<?php include('include/footer.php'); ?>