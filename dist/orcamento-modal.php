<div id="orcamentoModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="myModalLabel">Orçamento</h3></div><div class="modal-body"><div class="orcamento-modal"><div class="contact_form"><div class="alert alert-success hide" id="contactSuccess"><strong>Ok!</strong> Sua Mensagem foi enviada com sucesso.</div><div class="alert alert-danger hide" id="contactError"><strong>Ops Error!</strong> Houve um erro ao enviar a sua mensagem.</div><form id="contactForm" action="php/contact-form.php" method="POST"><div class="row"><div class="span3"><p class="form_info">Nome <span class="required">*</span></p><input type="text" value="" placeholder="Nome*" data-msg-required="Digite seu nome." maxlength="100" name="name" id="name" required pattern="[a-z\s]+$"></div><div class="span3"><p class="form_info">E-mail <span class="required">*</span></p><input type="email" value="" placeholder="E-mail*" data-msg-required="Digite seu e-mail." data-msg-email="Digite um e-mail válido." maxlength="100" name="email" id="email" required></div></div><div class="row"><div class="span3"><p class="form_info">Telefone <span class="required">*</span></p><input type="text" value="" placeholder="Telefone*" data-msg-required="Digite seu telefone." maxlength="100" name="telefone" id="telefone" required></div><div class="span3"><p class="form_info">Cidade/Bairro <span class="required">*</span></p><input type="text" value="" placeholder="Cidade/Bairro*" data-msg-required="Digite seu bairro e cidade." maxlength="100" name="cidade" id="cidade" required pattern="[a-z\s]+$"></div></div><div class="row"><div class="span3"><p class="form_info">Modelo <span class="required">*</span></p><input type="text" value="" placeholder="Modelo do portão*" data-msg-required="Digite um modelo ex. Portão Basculante" maxlength="100" name="modelo" id="modelo" required pattern="[a-z\s]+$"></div></div><div class="row"><div class="span5"><p class="form_info">Mensagem<span class="required">*</span></p><textarea placeholder="Mensagem" maxlength="5000" style="min-height: 85px" data-msg-required="Digite sua mensagem." rows="1" name="message" id="message" required></textarea></div></div><div class="clear"></div><input class="btn btn-primary btn-form" type="submit" value="Enviar E-mail" data-loading-text="Enviando..."><div class="clear pad45 hidden-desktop"></div></form></div></div></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">fechar</button></div></div>