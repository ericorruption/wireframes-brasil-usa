<?php include('include/header.php'); ?>

<main class="container">
  <br/>
  <div class="row">
    <div class="col-md-3">
      <h1 class="h2">Login</h1>

      <form>
        <fieldset class="form-group">
          <!-- <label for="exampleInputEmail1">Email</label> -->
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          <!-- <small class="text-muted">We'll never share your email with anyone else.</small> -->
        </fieldset>
        <fieldset class="form-group">
          <!-- <label for="exampleInputPassword1">Senha</label> -->
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </fieldset>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>

      <br/>
      <a href="#">Esqueci minha senha</a>
      <br/>
      <br/>

    </div>
    <div class="col-md-offset-1 col-md-5">
      <h1 class="h2">Cadastro</h1>
      <form action="">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 form-control-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 form-control-label">Senha</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 form-control-label">CEP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 form-control-label">Endereço</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 form-control-label">Cidade</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 form-control-label">UF</label>
          <div class="col-sm-10">
            <select class="c-select" id="exampleSelect2">
              <option selected="selected">RS</option>
              <option>SC</option>
              <option>SP</option>
              <option>RJ</option>
              <option>RN</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 form-control-label">Telefone</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>

<?php include('include/footer.php'); ?>