<?php include('include/header.php'); ?>
<main class="container">
  <h1 class="display-1">Histórico de pedidos</h1>
  <p class="lead">Olá, <strong>Nome</strong>. Veja abaixo o status de seus
  pedidos em andamento e avalie seus pedidos completos.</p>

  <!-- <div class="card card-block">
    <p class="lead text-center"><strong>Você não fez nenhum pedido ainda.</strong><br> Faça seu pedido agora mesmo!</p>
    <a href="#" class="btn btn-primary btn-lg center-block btn--cta">Fazer meu pedido</a>
  </div> -->
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Data</th>
          <th>Status</th>
          <th>Última resposta</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><a href="#">112312</a></th>
          <td>19/12/2015</td>
          <td>Enviado</td>
          <td></td>
        </tr>
        <tr>
          <th><a href="#">212398</a></th>
          <td>16/12/2015</td>
          <td>Em análise</td>
          <td></td>
        </tr>
        <tr>
          <th><a href="#">39120</a></th>
          <td>09/11/2015</td>
          <td>Orçado</td>
          <td>Orçado em R$ 1200. Acesse o <a href="#">link para pagamento no paypal</a>.</td>
        </tr>
        <tr>
          <th><a href="#">112312</a></th>
          <td>19/10/2015</td>
          <td>Aprovado</td>
          <td>Em trânsito.</td>
        </tr>
        <tr>
          <th><a href="#">212398</a></th>
          <td>16/08/2015</td>
          <td><i class="fa fa-close"></i> Cancelado</td>
          <td></td>
        </tr>
        <tr>
          <th><a href="#">39120</a></th>
          <td>09/05/2015</td>
          <td><i class="fa fa-check"></i> Finalizado</td>
          <td><a href="#">Faça a avaliação deste pedido</a></td>
        </tr>
        <tr>
          <th><a href="#">39120</a></th>
          <td>23/04/2015</td>
          <td>Avaliado</td>
          <td><a href="#">Veja ou altere sua avaliação</a></td>
        </tr>
      </tbody>
    </table>
  </div>

</main>
<?php include('include/footer.php'); ?>