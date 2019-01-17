<?php
	include 'includes/header.php';
	include 'includes/menu.php';
?>

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Registre-se</h2>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-10 mb-5">
          
            <form action="#" class="p-5 bg-white">
              <h2 class="mb-4 text-black">Registre-se</h2>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="nome">Nome</label>
                  <input type="text" id="nome" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="sobrenome">Sobrenome</label>
                  <input type="text" id="sobrenome" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="identidade">Identidade</label>
                  <input type="text" id="identidade" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="cpf">CPF</label>
                  <input type="number" id="cpf" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="tel1">Telefone Residencial</label>
                  <input type="email" id="tel1" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="tel2">Telefone Celular</label>
                  <input type="email" id="tel2" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="turma">Turma</label>
                  <input type="number" id="turma" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="nivel">Nível</label>
                  <select name="nivel" class="form-control rounded-0" required>
                        <option value="0" disabled selected>Selecione uma Opção</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="senha">Senha</label>
                  <input type="password" id="senha" class="form-control rounded-0" required>
                </div>
              </div>
              <div class="row form-group mb-5">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="senha2">Digite a senha novamente</label>
                  <input type="password" id="senha2" class="form-control rounded-0" required>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Cadastrar" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>


          
        </div>
      </div>
    </div>

   

<?php
	include 'includes/footer.php';
	include 'includes/js.php';
?>