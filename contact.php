<?php include'inc/<body>.php'; ?>
  <!-- START HEADER -->
    <?php include'inc/nav.php'; ?>
  <!-- END HEADER -->
  
  <!-- SUB BANNER -->
  <div class="sub-banner">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <h4 class="title-bread">Contact.&nbsp;<span class="sub-title-lighter">/ stay in touch with us.</span></h4>
        </div>
        <div class="w-col w-col-6 col-right">
          <div class="breadcrumbs">Unikue&nbsp;/&nbsp;Contact</div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SUB BANNER -->




    <!-- START SECTION 1 -->

  <section class="w-section section" id="divContact">
    <div class="w-container">
      <div class="top-title">
        <div class="divider"></div>
        <div class="title-txt">
          <h5>Nuestra sede principal en&nbsp;<span class="sub-title-lighter">/&nbsp;BOGOTÁ</span></h5>
        </div>
        <div class="divider"></div>
      </div>
    </div>
  </section>
 
 
  
  <!-- START SECTION 1 -->
  <section class="w-section section" id="contactBogota">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-8">
          <div>
            <div>
                <form id="email-form" name="email-form" method="POST" data-name="Email Form">
                    <input class="w-input text-field" id="name" type="text" placeholder="Ingresa tu nombre" name="name" data-name="Name" required>
                    <input class="w-input text-field" id="email" type="email" name="email" placeholder="Ingresa tu dirección email" data-name="Email" required>
                    <input class="w-input text-field" id="subject" type="text" name="subject" placeholder="Asunto" data-name="Subject">
                    <textarea class="w-input text-area" id="text-area" name="message" required placeholder="Escribe tu mensaje..." data-name="Text Area"></textarea>
                  <div class="div-spc">
                    <button class="w-button button no-margin" type="submit">Enviar Mensaje</button>
                  </div>
                </form>
              <div id="result"></div>
            </div>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div>
            <div class="w-widget w-widget-map" data-widget-latlng="4.6941493,-74.0492127,17z" data-widget-style="roadmap" data-widget-zoom="12"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION 1 -->


  
  <!-- FOOTER --> 
  <?php include'inc/footer.php'; ?>
  <!-- END FOOTER -->
  

  <?php include'inc/<:body>.php'; ?>
  
  