<section class="g-block main-partner">
  <div class="wrapper">
    <div class="row">
      <h2 class="font-super-gigant">Всегда рады поработать вместе</h2>
    </div>
    <div class="row">
      <div class="partner partner_main">
        <div class="partner-container">
          <!-- <div class="grid-sizer"></div> -->
          <?php while (have_rows('blok_nam_doveryayut', 'option')) : the_row();
            // переменные
            $logo = get_sub_field('logo');
            $href = get_sub_field('ssylka_na_sajt_klienta');
            $description = get_sub_field('tekst');
          ?>
            <div class="parnet-item">
              <a href="<?php echo $href ?>" target="_blank" class="parnet-item__logo">
                <img src="<?php echo $logo['url']; ?>" alt="">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 15.1667V22.1667C21 22.7855 20.7542 23.379 20.3166 23.8166C19.879 24.2542 19.2855 24.5 18.6667 24.5H5.83333C5.21449 24.5 4.621 24.2542 4.18342 23.8166C3.74583 23.379 3.5 22.7855 3.5 22.1667V9.33333C3.5 8.71449 3.74583 8.121 4.18342 7.68342C4.621 7.24583 5.21449 7 5.83333 7H12.8333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M17.5 3.5H24.5V10.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M12 16.8333L24.8333 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

              </a>
              <div class="parnet-item__text">
                <?php echo $description ?>
              </div>

            </div>


          <?php endwhile; ?>


        </div>

      </div>
    </div>
  </div>
</section>