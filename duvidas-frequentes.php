<?php include('include/header.php'); ?>

<main class="container main-content">
  <h1 class="display-1">Dúvidas frequentes</h1>
  <div class="row">
    <div class="col-md-8">
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dolore, dignissimos placeat tempore, saepe voluptatem fuga cupiditate! Porro magnam obcaecati doloribus omnis fugit. Illo commodi earum tempore quod. Nemo, porro?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias quo deleniti, sequi atque similique dolorum quos maiores! Soluta voluptas architecto debitis at tenetur iste ipsam! Maiores laborum natus fugit molestias.</p>

      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card card-block">
          <div role="tab" id="headingOne">
            <h4 class="card-title">
              <span class="pull-right">+</span>
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Como é xxxx?
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="card-text collapse" role="tabpanel" aria-labelledby="headingOne">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
        <div class="card card-block">
          <div role="tab" id="headingTwo">
            <h4 class="card-title">
              <span class="pull-right">+</span>
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Quanto tempo demora a entrega?
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="card-text collapse" role="tabpanel" aria-labelledby="headingTwo">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
        <div class="card card-block">
          <div role="tab" id="headingThree">
            <h4 class="card-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Pergunta 3?
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="card-text collapse" role="tabpanel" aria-labelledby="headingThree">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include('include/footer.php'); ?>