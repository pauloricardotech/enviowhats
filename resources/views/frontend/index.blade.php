@extends('frontend.layouts.main')
@section('content')
@include('frontend.layouts.header-1')
<!-- tp-offcanvus-area-start -->
<div class="body-overlay"></div>
<main>
      @include('frontend.sections.hero-1')

      @if($features_area == 'active')
       <!-- tp-feature-area-start -->
       <div id="feature-area" class="tp-feature__area pt-60 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="tp-feature__section-box text-center mb-70">
                     <h3 class="tp-section-title wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".3s">{{ $home->features->title ?? '' }}</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               @include('frontend.sections.features',['limit'=> 9])
            </div>
         </div>
      </div>
      <!-- tp-feature-area-end -->
      @endif

      <!-- tp-appliction-area-start -->
       @include('frontend.sections.top-area')
      <!-- tp-appliction-area-end -->


      <!-- tp-faq-area-end -->
      @include('frontend.sections.top-faq')
      <!-- tp-faq-area-end -->


      <!-- tp-Integration-area-start -->
      @include('frontend.sections.top-integration')
      <!-- tp-Integration-area-end -->
      @include('frontend.pricings')
      <!-- tp-testimonial-area-start -->
      @include('frontend.sections.feedback-1')
      <!-- tp-testimonial-area-end -->

      <!-- tp-choose-area-start -->
       @include('frontend.whychoose')
      <!-- tp-choose-area-end -->


      <!-- tp-support-area-start -->
      @include('frontend.sections.faq')
      <!-- tp-support-area-end -->

<script>
document.querySelector('form').addEventListener('submit', function(event) {
  // Impede o comportamento padrão de recarregar a página
  event.preventDefault();

  // Seu código adicional aqui...
});

   
</script>
<script>

function enviateste(){
   var valor = document.getElementById("countrynumber").value
   var myHeaders = new Headers();
myHeaders.append("Cookie", "enviawhats_session=eyJpdiI6Ii9RRUorTWl5bGhEempYRG1iQ1E4SXc9PSIsInZhbHVlIjoiT2FiTHp1aGtWRUdvdEVOR0dHbU8zb2xJN25HVjV5NHE4QmlUYW1yY2YvcDU0eUZXb3lkeUtKVEJRd1E2MzRkMkVYNFd6ZjBKandMak95Nk9MMTlwZ2VFS2krNzl0MWF3OGY0RDVUVU5WUGUwcHJMQ1M1ZGtYK2F5cXlvVUxVeDQiLCJtYWMiOiI2OGJjNjdkYWY1NDk0ZWUyNDRmY2E3MmQwMGNkNjVmOGQ5OWJhZTVlNGY4NDAyYjhjYWU1ZDg4NDRlMTEyODY1IiwidGFnIjoiIn0%3D");

var formdata = new FormData();
formdata.append("appkey", "917b6125-58ff-486c-925b-62b5434cd0d6");
formdata.append("authkey", "xFMhkcXRpmDqSVJofwDCJJMfv3JHmPuV7YWvO9qbT1rGxMMNAt");
formdata.append("to","55"+ valor);
formdata.append("message", "Olá, tudo bem? Você acaba de fazer o teste grátis, já pensou sua empresa enviando uma mensagem personalizada pra todos os seus clientes ou potenciais clientes?Assista nosso vídeo e saiba como funciona.");

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: formdata,
  redirect: 'follow'
};

fetch("https://enviawhats.com/api/create-message", requestOptions)
  .then(document.getElementsByClassName("iti iti--allow-dropdown")[0].innerHTML="<p class='text-center'>Uma mensagem de teste foi enviada para o Whatsapp informado</p>")
  .then(result => console.log(result))
  .catch(error => document.getElementsByClassName("iti iti--allow-dropdown")[0].innerHTML="<p class='text-center'>Houve um erro, verifique se o numero foi digitado corretamente</p>");
  document.getElementById("testegratisid").innerHTML="Enviado"
}






</script>


   </main>
@endsection
