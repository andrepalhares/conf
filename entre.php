<?php
	include 'includes/header.php';
	include 'includes/menu.php';
?>
<!-- da pra fazer com dois menus, um com verde no ente o outro com verde no registre-se -->
    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Entre</h2>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container" >

          <div class="col-md-12 col-lg-10 mb-5">

            <form action="#" class="p-5 bg-white">
              <h2 class="mb-4 text-black">Entre</h2>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email2">Email</label>
                  <input type="email" id="email2" class="form-control rounded-0">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="senha">Senha</label>
                  <input type="password" id="senha" class="form-control rounded-0">
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-normal" for="remember">
                  <input type="checkbox" id="remember">
                  Lembrar dados
                </label>
                </div>
              </div>

              <div class="row form-group mb-2">
                <div class="col-md-12">
                   Esqueceu a senha? <a href="#">clique aqui</a></p>
                </label>
                </div>
              </div>
  
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Entrar" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          
      </div>
    </div>

   

<?php
	include 'includes/footer.php';
	include 'includes/js.php';
?>