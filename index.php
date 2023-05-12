<?php include'header.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/imagens/geramais-fotos-3.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/imagens/geramais-fotos-2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/imagens/geramais-fotos-1.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="quemsomos">
    <div class="container">
       <div class="row">
        <div class="col-md-6">
            <h2>Quem somos</h2>
            <p>A Gera + atua no segmento de locação de grupos geradores, contando com um portfólio diversificado de equipamentos que variam de 30kVA a 500kVA. Com foco na melhoria contínua de seus serviços, objetivando a máxima satisfação dos seus clientes a empresa é reconhecida por seu compromisso, agilidade e eficiência.</p>
        </div>
        <div class="col-md-6">
            <img src="img/imagens/geramais-fotos-7.png" width="100%" alt="">
        </div>
        </div>
    </div>
</section>
<hr class="hr">
<section class="valores">
    <div class="container">
       <div class="row">
        <div class="col-md-4">
           <div class="quadrados">
            <h2>Visão</h2>
            <p>Buscar atender todas as necessidades do cliente. Persistindo na melhoria contínua e fortificando sua transparência, rapidez, agilidade, comodidade e segurança. Indo de encontro com a satisfação total de seus parceiros, fornecedores e sociedade.</p>
            </div>
        </div>
        <div class="col-md-4">
           <div class="missao quadrados">
            <h2>Missão</h2>
            <p>Ser referência no segmento de locações de equipamentos e geração de energia eficiente. Procurando atender ao chamado, com os melhores serviços e uma equipe técnica altamente qualificada e prontificada para dar todo o suporte necessário. Fazendo reforço a confiança que nos foi depositada. </p>
            </div>
        </div>
        <div class="col-md-4">
           <div class="quadrados">
            <h2>Valores</h2>
            <ul>
                <li>Responsabilidade socioambiental</li>
                <li>Compromisso com os clientes</li>
                <li>Ética nos relacionamentos</li>
                <li>Melhoria contínua de seus funcionários</li>
                <li>Qualidade em tudo que faz</li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="numeros">
    <div class="container">
       <div class="row">
        <div class="col-md-4">
           <div class="row">
            <img src="img/clientes.png" alt="">
            </div>
            <div class="row justify-content-center">
            <p>Número de clientes</p>
            </div>
            <div class="row justify-content-center">
            <h2 class="timer count-title count-number" data-to="150" data-speed="1500"></h2>
            </div>
        </div>
        <div class="col-md-4"> 
           <div class="row">
            <img src="img/loca%C3%A7%C3%A3o.png" alt="">
            </div>
            <div class="row justify-content-center">
            <p>Número de alocações</p>
            </div>
            <div class="row  justify-content-center">
            <h2 class="timer count-title count-number" data-to="160" data-speed="1500"></h2>
            </div>
        </div>
        <div class="col-md-4">
           <div class="row">
            <img src="img/eventos.png" alt="">
            </div>
            <div class="row justify-content-center">
            <p>Número de eventos</p>
            </div>
            <div class="row justify-content-center">
            <h2 class="timer count-title count-number" data-to="90" data-speed="1500"></h2>
            </div>
        </div>
        </div>
    </div>
</section>
 
<section class="contato-index">
    <div class="container">
       <div class="row">
        <div class="col-md-6">
            <div class="box">
                <img src="img/atendimento-branco.png" width="100%" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <img src="img/24-horas-branco.png" width="100%" alt="">
            </div>
        </div>
        </div>
    </div>
</section>

<section id="orcamento" class="cadastro">
    <div class="container">
       <h2>Peça já seu orçamento</h2>
       <p>Ficaremos felizes em lhe atender !</p>
       <?php include'envio-form.php'; ?>
        <form action="<? $PHP_SELF; ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Nome" name="nome">
                    <input type="text" placeholder="E-mail" name="email">
                </div>
                <div class="col-md-6">
                    <select name="servico" id="">
                        <option value="" style="color:#bdbdbd;">Escolha um Serviço</option>
                        <option value="Alugar Gerador">Alugar Gerador</option>
                        <option value="Manutenção">Manutenção</option>
                    </select>
                    <input type="text" placeholder="Fone" name="numero">
                </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                <textarea name="mensagem" id="" placeholder="Mensagem"></textarea>
                </div>
            </div>
            <button class="btn" name="BTEnvia" value="enviar" type="submit">Enviar</button>
        </form>
    </div>
</section>

<!--<section class="formulario">
    <div class="container">
        <div class="col-md-6">
            <h2>Faça o seu orçamento !</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi voluptates nobis qui magni soluta odit incidunt in! Suscipit perferendis rem voluptates, laudantium voluptatem officiis repudiandae officia harum deleniti nisi eveniet?</p>
        </div>
        <div class="col-md-6">
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
                        <h2>Contato</h2>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                          <form id="contact-form" class="form" action="#" method="POST" role="form">
                              <div class="form-group">
                                  <label class="form-label" for="name">Nome completo</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo" tabindex="1" required>
                              </div>                            
                              <div class="form-group">
                                  <label class="form-label" for="subject">E-mail</label>
                                  <input type="text" class="form-control" id="subject" name="subject" placeholder="E-mail" tabindex="3">
                              </div>                            
                              <div class="form-group">
                                  <label class="form-label" for="email">DDD + Número pra contato:</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="DDD + Número pra contato" tabindex="2" required>
                              </div>                            
                              <div class="form-group">
                                  <label class="form-label" for="message">Descrição do evento</label>
                                  <textarea rows="2" cols="50" name="message" class="form-control" id="message" placeholder="Descrição do evento..." tabindex="4" required></textarea>                                 
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-start-order">Enviar</button>
                              </div>
                          </form>
                      </div>
                  </div>
                  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                  <script>
                    $(document).ready(function() {
                            // Test for placeholder support
                            $.support.placeholder = (function(){
                                var i = document.createElement('input');
                                return 'placeholder' in i;
                            })();

                            // Hide labels by default if placeholders are supported
                            if($.support.placeholder) {
                                $('.form-label').each(function(){
                                    $(this).addClass('js-hide-label');
                                });  

                                // Code for adding/removing classes here
                                $('.form-group').find('input, textarea').on('keyup blur focus', function(e){

                                    // Cache our selectors
                                    var $this = $(this),
                                        $parent = $this.parent().find("label");

                                    if (e.type == 'keyup') {
                                        if( $this.val() == '' ) {
                                            $parent.addClass('js-hide-label'); 
                                        } else {
                                            $parent.removeClass('js-hide-label');   
                                        }                     
                                    } 
                                    else if (e.type == 'blur') {
                                        if( $this.val() == '' ) {
                                            $parent.addClass('js-hide-label');
                                        } 
                                        else {
                                            $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                                        }
                                    } 
                                    else  if (e.type == 'focus') {
                                        if( $this.val() !== '' ) {
                                            $parent.removeClass('js-unhighlight-label');
                                        }
                                    }
                                });
                            } 
                        });
                  </script>
        </div>
    </div>
</section>-->
<?php include'footer.php'; ?>