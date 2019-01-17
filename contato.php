<?php
	include 'includes/header.php';
	include 'includes/menu.php';
?>

    <div class="unit-5 overlay" style="background-image: url('images/contact_01.png');">
      <div class="container text-center">
        <h2 class="mb-0">Contato</h2>
		<!-- ** Usar quando a página for subpágina. Ex: Apresentação -> -->
        <p class="mb-0 unit-6"><a href="index.html">Início</a> <span class="sep">></span> <span>Contato</span></p>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
		  <?php
			if(isset($_POST['Enviar'])) {
			?>
				<div class="alert alert-success" role="alert">
					Sua mensagem foi enviada com sucesso!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php
			}
		  ?>
            
          
            <form method="post" action="" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nome</label>
                  <input type="text" id="fullname" class="form-control" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">E-mail</label>
                  <input type="email" id="email" class="form-control" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Assunto</label>
                  <input type="text" id="subject" class="form-control" required>
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mensagem</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Entre em Contato!</h3>
              <p class="mb-0 font-weight-bold"><img src="https://www.institutoconfucio.ufmg.br/wp-content/uploads/tag.png"> Endereço</p>
              <p class="mb-4">Av. Antônio Carlos, 6627 – Pampulha – Belo Horizonte, CEP: 31270-901
			  <br>Faculdade de Letras (FALE) sala 3063</p>
			  
			  <p class="mb-0 font-weight-bold"><img src="http://icons.iconarchive.com/icons/icons8/ios7/128/Time-And-Date-Timer-icon.png" width="17px"> Horário de funcionamento</p>
              <p class="mb-4">de 9h às 11h e das 13h às 16h</p>

              <p class="mb-0 font-weight-bold"><img src="https://iconsplace.com/wp-content/uploads/_icons/000000/256/png/phone-icon-256.png" width="17px"> Telefone</p>
              <p class="mb-4">(31) 3409-3259</p>

              <p class="mb-0 font-weight-bold"><img src="https://image.flaticon.com/icons/png/128/34/34400.png" width="17px"> E-mail</p>
              <p class="mb-0"><a href="mailto:icufmg@dri.ufmg.br">icufmg@dri.ufmg.br</a></p>
				
				
				
            </div>
          </div>
        </div>
      </div>
    </div>

   


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Endereço e site das unidades em que o Instituto oferece aulas</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapse1" 
				role="button" aria-expanded="false" aria-controls="collapse1">
				UFMG – Campus Pampulha<span class="icon"></span></a>
              </h3>
              <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p><b>Endereço:</b> Avenida Presidente Antônio Carlos, 6627 – 
				  Pampulha, Belo Horizonte – MG - CEP: 31270-901 – 
				  Centro de Atividades Didáticas 1 e 2 (CADs 1 e 2).</p>
				  <p><b>Link site: </b><a href="https://ufmg.br/">https://ufmg.br/</a></p>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapse2" 
				role="button" aria-expanded="false" aria-controls="collapse2">
				UFMG – Faculdade de Direito<span class="icon"></span></a>
              </h3>
              <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p><b>Endereço:</b> Avenida João Pinheiro, 100 – 
				  Centro, Belo Horizonte – MG, CEP: 30130-180.</p>
				  <p><b>Link site: </b><a href="https://ufmg.br/">https://ufmg.br/</a></p>
                </div>
              </div>
            </div>
			
			<div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapse3" 
				role="button" aria-expanded="false" aria-controls="collapse3">
				UFMG - COLTEC<span class="icon"></span></a>
              </h3>
              <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p><b>Endereço:</b> Avenida Presidente Antônio Carlos, 6627 – Pampulha, 
				  Belo Horizonte – MG - CEP: 31270-901.</p>
				  <p><b>Link site: </b><a href="http://www.coltec.ufmg.br/coltec-ufmg/">http://www.coltec.ufmg.br/coltec-ufmg/</a></p>
                </div>
              </div>
            </div>
			
			<div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapse4" 
				role="button" aria-expanded="false" aria-controls="collapse4">
				UFMG – CEFET<span class="icon"></span></a>
              </h3>
              <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p><b>Endereço Campus 1:</b> Avenida Amazonas, 5253, Nova Suíssa, 
				  Belo Horizonte – MG - CEP: 30421-169.</p>
				  <p><b>Endereço Campus 2:</b> Avenida Amazonas, 7675 - Nova Gameleira, 
				  Belo Horizonte – MG - CEP: 30510-000.</p>
				  <p><b>Link site: </b><a href="http://www.cefetmg.br/">http://www.cefetmg.br/</a></p>
                </div>
              </div>
            </div>
			
			<div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapse5" 
				role="button" aria-expanded="false" aria-controls="collapse5">
				UFMG – Instituto de Ciências Agrárias (ICA) / Montes Claros<span class="icon"></span></a>
              </h3>
              <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p><b>Endereço:</b> Avenida Universitária, 1000 – Bloco C – Bairro Universitário,
				  Montes Claros – MG – CEP: 39404-547.</p>
				  <p><b>Link site: </b><a href="https://www.ica.ufmg.br/">https://www.ica.ufmg.br/</a></p>
                </div>
              </div>
            </div>
			
			<div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapse6" 
				role="button" aria-expanded="false" aria-controls="collapse6">
				Universidade Estadual de Montes Claros (Unimontes) / Montes Claros<span class="icon"></span></a>
              </h3>
              <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p><b>Endereço:</b> Avenida Dr. Ruy Braga, S/N, Prédio 02, sala 80 – 
				  Vila Mauriceia, Montes Claros – MG – CEP: 39401-089.</p>
				  <p><b>Link site: </b><a href="http://www.unimontes.br/">http://www.unimontes.br/</a></p>
                </div>
              </div>
            </div>

		    </div>
          </div>
        </div>
      
      </div>
    </div>

<?php
	include 'includes/footer.php';
	include 'includes/js.php';
?>