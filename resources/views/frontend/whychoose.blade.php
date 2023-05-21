<!-- tp-choose-area-start -->
<div class="tp-choose__area pt-120 pb-90" data-background="{{ asset('assets/frontend/img/choose/choose-bg.png') }}" style="background-size: cover;">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="tp-choose__title-box">
               <h3 class="tp-section-title text-white text-center mb-20">{{ get_option('why-choose',true, true)->title ?? '' }}</h3>
               <h5 class="tp-choose__subtitle text-white text-center">{{ get_option('why-choose',true, true)->subtitle ?? '' }}</h5>
               <p class="tp-choose__subtitle text-white">O Envia Whats é a melhor maneira de enviar promoções aos clientes pelo Whatsapp. Pesquisas apontam que você tem um retorno 3 vezes maior e gera muito mais cliques através do envio de mensagens personalizadas e atrativas pelo Whatsapp.<br>
                  Impulsione as vendas com o envio personalizado de mensagens WhatsApp para toda sua lista de clientes e automatize as  ações.<br>
                  Nunca falhe nas vendas agendando as suas promoções e lançamentos de produtos e serviços com antecedência. <br>Planeje e programe as suas mensagens para a semana ou mês com antecedência. Visualize facilmente as mensagens antigas e futuras e permita que os contatos sejam comunicados no melhor momento possível.<br>
                  Melhore as suas promoções no WhatsApp com mensagens interativas e imagens, crie mensagens perfeitas e adicione listas, botões de resposta, mensagens de produto único e multi-produto, personalize as mensagens com o envio de imagens, vídeos e documentos.<br>
                  Monitore conversas e tome as melhores decisões com base em dados do nosso Painel e acompanhe o desempenho da sua campanha para identificar quaisquer bloqueios ou conversas não resolvidas para uma melhor análise.</p>
                  <br><p class="tp-tp-choose__subtitle text-white">Veja o que você pode fazer com nossa ferramenta: <br></p>
                <li class="text-white" style="list-style: disc;">Agendar o envio de ofertas de venda e promoções</li>
                <li class="text-white" style="list-style: disc;">Enviar boletins informativos</li>
                <li class="text-white" style="list-style: disc;">Atualizações de eventos & lembretes</li>
                <li class="text-white" style="list-style: disc;">Anúncios de produtos e serviços</li>
                <li class="text-white" style="list-style: disc;">Data de expiração de um serviço</li>
                <li class="text-white" style="list-style: disc;">Ofertas e cupons de tempo limitado</li>
                <li class="text-white" style="list-style: disc;">Lançamentos de produtos e serviços exclusivos</li>
               <br>
            </div>
            <div class="tp-choose__thumb-box d-flex justify-content-center">
               <div class="tp-choose__thumb-sm">
                  <a href="{{ url(get_option('why-choose',true, true)->left_button_link ?? '') }}"><img src="{{ asset(get_option('why-choose',true, true)->left_button_image ?? '') }}" alt="" style="border-radius: 10px;"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-choose-area-end -->

<!-- tp-counter-area-start -->
<div class="tp-counter__area">
   <div class="tp-counter__theme-bg"></div>
   <div class="tp-counter__grey-bg"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-4 col-lg-4">
            <div class="tp-counter__item d-flex">
               <div class="tp-counter__icon">
                  <img src="{{ asset(get_option('why-choose',true, true)->left_block_image ?? '') }}" alt="">
               </div>
               <div class="tp-counter__content">
                  <span><i class="counter">{{ get_option('why-choose',true, true)->left_block_value ?? '' }}</i></span>
                  <p>{{ get_option('why-choose',true, true)->left_block_title ?? '' }}</p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4">
            <div class="tp-counter__item d-flex">
               <div class="tp-counter__icon">
                  <img src="{{ asset(get_option('why-choose',true, true)->center_block_image ?? '') }}" alt="">
               </div>
               <div class="tp-counter__content">
                  <span><i class="counter">{{ get_option('why-choose',true, true)->center_block_value ?? '' }}</i></span>
                  <p>{{ get_option('why-choose',true, true)->center_block_title ?? '' }}</p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4">
            <div class="tp-counter__item d-flex">
               <div class="tp-counter__icon">
                  <img src="{{ asset(get_option('why-choose',true, true)->right_block_image ?? '') }}" alt="">
               </div>
               <div class="tp-counter__content">
                  <span><i class="counter">{{ get_option('why-choose',true, true)->right_block_value ?? '' }}</i></span>
                  <p>{{ get_option('why-choose',true, true)->right_block_title ?? '' }}</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- tp-counter-area-end -->