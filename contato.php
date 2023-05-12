<?php include'header.php';?>
<section class="contato">
    <div class="container">
       <h2>Contato</h2>
        <div class="col-md-3 col-md-offset-2">
            <h3>Entre em contato !</h3>
            <p>Preecha o formulário e em breve entraremos em contato com você !</p>
            <h4>Telefone :</h4>
            <p class="contact">85 8716.0588</p><img src="img/whatsapp-logo.png" alt=""><img src="img/telephone.png" alt="">
            <h4>E-mail :</h4>
            <p class="contact">gerador.gera.com.br</p><img src="img/close-envelope.png" alt="">
        </div>
        <div class="col-md-6">
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
                                    else if (e.type == 'focus') {
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
</section>
<?php include'footer.php';?>