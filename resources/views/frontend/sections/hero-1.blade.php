<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
<link rel="stylesheet" href="https://enviawhats.com/assets/css/input-whats-home.css">
<!-- tp-slider-area-start -->
<div class="tp-hero__area tp-hero__bg p-relative" data-background="{{ asset('assets/frontend/img/hero/hero-bg.png') }}">
   <div class="scroll-down smooth d-none d-xl-block">
      <a href="#feature-area">
         <div class="scroll-dots d-flex justify-content-center flex-column align-items-center">
            <span class="rotate-text">{{ __('Scrool Down') }}</span>
            <span class="circle-1"></span>
            <span class="circle-2"></span>
            <span class="circle-3"></span>
            <button class="scroll-mouse"><i class="fal fa-mouse"></i></button>
         </div>
      </a>
   </div>
   <div class="tp-hero__social d-none d-xl-flex">
      @if(!empty(get_option('primary_data',true)->socials->twitter))
      <a class="p-relative" href="{{ get_option('primary_data',true)->socials->twitter }}"><i class="fab fa-twitter"></i>
         <div class="social-icon">
            <span><i class="fab fa-twitter"></i> {{ __('twitter') }}</span>
         </div>
      </a>
      @endif
      @if(!empty(get_option('primary_data',true)->socials->facebook))
      <a class="p-relative" href="{{ get_option('primary_data',true)->socials->facebook }}"><i class="fab fa-facebook-f"></i>
         <div class="social-icon facebook">
            <span><i class="fab fa-facebook-f"></i> {{ __('facebook') }}</span>
         </div>
      </a>
      @endif
      @if(!empty(get_option('primary_data',true)->socials->instagram))
      <a class="p-relative" href="{{ get_option('primary_data',true)->socials->instagram }}"><i class="fab fa-instagram"></i>
         <div class="social-icon instagram">
            <span><i class="fab fa-instagram"></i> {{ __('instagram') }}</span>
         </div>
      </a>
      @endif
      @if(!empty(get_option('primary_data',true)->socials->linkedin))
      <a class="p-relative" href="{{ get_option('primary_data',true)->socials->linkedin }}"><i class="fab fa-linkedin"></i>
         <div class="social-icon dribbble">
            <span><i class="fab fa-linkedin"></i> {{ __('linkedin') }}</span>
         </div>
      </a>
      @endif   
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-12 col-12">
            <div class="tp-hero__wrapper">
               <div class="tp-hero__content pb-40 text-center">
                  <h2 class="tp-hero__title wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".5s">{!! filterXss($heading) !!}</h2>
               </div>
               <!-- <div class="col-xl-4 col-10 pb-40" style="margin: 0 auto; display: flex;">
                  <input type="text" name="name" placeholder="Seu Whatsapp" maxlength="50" class="form-control">
                  <button type="submit" class="btn btn-primary submit-btn" style="margin-left: 10px;width: 170px;height: 60px;background: #00c88d;border: 0;">Enviar Teste</button>
               </div> -->
               <div class="tp-hero__thumb text-xl-block text-lg-center  p-relative">
                  <img class="wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".7s" src="{{ asset($home->hero_image ?? '') }}" alt="">
                  <div class="tp-hero__thumb-icon">

                     <span class="hero-icon-1 tp-pulse-border z-index d-none d-md-block wow tpfadeLeft" data-wow-duration=".7s" data-wow-delay=".9s"><img src="{{ asset($home->hero_left_image ?? '') }}" alt=""></span>

                     <span class="hero-icon-2 tp-pulse-border z-index d-none d-md-block wow tpfadeRight" data-wow-duration=".7s" data-wow-delay="1s"><img src="{{ asset($home->hero_right_image ?? '') }}" alt=""></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section id="section-3-54857" class=" ct-section">
                      <div class="ct-section-inner-wrap">
                          <div id="code_block-4-54857" class="ct-code-block">
                              <form action="" id="formsteps">
                                  <div class="stepsbullets">
                                      <div class="bar"></div>
                                      <div class="step one active"></div>
                                      <div class="step two"></div>
                                      <div class="step three"></div>
                                      <div class="step four"></div>
                                  </div>
                                  <section class="sectionstep whatsapp active">
                                      <fieldset class="fieldsetsteps" style="background: transparent;">
                                          <dl>
                                              <dt>Seu whatsapp</dt>
                                              <dd>
                                                  <div class="iti iti--allow-dropdown">
                                                      <div class="iti__flag-container">
                                                          <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="Brasil: +55" aria-activedescendant="iti-0__item-br-preferred">
                                                              <div class="iti__flag iti__br"></div>
                                                              <div class="iti__arrow"></div>
                                                          </div>
                                                          <ul class="iti__country-list iti__hide" id="iti-0__country-listbox" role="listbox" aria-label="List of countries">
                                                              <li class="iti__country iti__preferred iti__active" tabindex="-1" id="iti-0__item-br-preferred" role="option" data-dial-code="55" data-country-code="br" aria-selected="true">
                                                                  <div class="iti__flag-box">
                                                                      <div class="iti__flag iti__br"></div>
                                                                  </div>
                                                                  <span class="iti__country-name">Brasil</span><span class="iti__dial-code">+55</span>
                                                              </li>
                                                          </ul>
                                                      </div>
                                                      <input type="text" id="countrynumber" name="countrynumber" data-initialcountry="br" placeholder="EX: 11991715662" maxlength="11" autocomplete="off" data-intl-tel-input-id="0" style="width: 100%;border: 1px solid #ccc;line-height: 1;box-sizing: border-box;">
                                                  </div>
                                                  <button id='testegratisid' onclick=" enviateste()" type="submit" class="btn btn-primary submit-btn btn-mobile" style="margin-top: 10px !important;color: #fff;margin: 0;padding: 0 10px;width: 100%;height: 75px;background: #00c88d;border: 0;font-weight: bold;font-size: 16px;text-transform: uppercase;">Enviar Teste Grátis</button>
                                              </dd>
                                          </dl>
                                      </fieldset>
                                  </section>
                                  <input type="hidden" name="gclid" id="gclid">
                                  <input type="hidden" name="utm_source" id="utm_source">
                                  <input type="hidden" name="utm_medium" id="utm_medium">
                                  <input type="hidden" name="utm_campaign" id="utm_campaign">
                                  <input type="hidden" name="utm_term" id="utm_term">
                                  <input type="hidden" name="utm_content" id="utm_content">
                                  
                              </form>            
                          </div>
                      </div>
                  </section>
      <!-- tp-slider-area-end -->