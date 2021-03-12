<section id="main-project" styles="position:relative" class="g-block">
   <div class="wrapper">
      <div class="main-project-list">
         <div class="main-project-list-item" id="project1">
            <div class="title-section title-section_project">
               <h2 class="font-super-gigant">Свежие кейсы </h2>
            </div>
            <div class="main-project-list-item__content">
               <a class="main-project-list-item__link" href="/project/sovushki/"></a>

               <div class="main-project-list-item__tag">Сайт</div>
               <div class="main-project-list-item__title">Совушки</div>
               <!-- <div class="main-project-list-item__client">Партнер-строй</div> -->
               <div class="main-project-list-item__description">Как мы сделали сайт нового ЖК для крупного застройщика без рендеров и с плохой историей места застройки</div>
               <div class="main-project-list-item__button"><a href="#" class="button">Смотреть<img src="<?php echo get_template_directory_uri() ?>/img/svg/button-arrow.svg" alt=""></a></div>
            </div>
         </div>
         <div class="main-project-list-item" id="project2">
            <div class="main-project-list-item__content">
               <a class="main-project-list-item__link" href="/project/sreda/"></a>
               <div class="main-project-list-item__tag">Сайт</div>
               <div class="main-project-list-item__title">ЖК «Среда»</div>
               <div class="main-project-list-item__client">Партнер-строй</div>
               <div class="main-project-list-item__description">ЖК «Среда» — проект крупного девелопера в Тюмени
                  Партнер-Строй,
                  который специализируется на экологичных проектах с малоэтажной застройкой.</div>
               <div class="main-project-list-item__button"><a href="#" class="button">Смотреть<img src="<?php echo get_template_directory_uri() ?>/img/svg/button-arrow.svg" alt=""></a></div>
            </div>

         </div>
         <div class="main-project-list-item" id="project3">
            <div class="main-project-list-item__content">
               <a class="main-project-list-item__link" href="/project/strana-development/"></a>
               <div class="main-project-list-item__tag">Контент-маркетинг</div>
               <div class="main-project-list-item__title">Страна девелопмент</div>
               <!-- <div class="main-project-list-item__client">Партнер-строй</div> -->
               <div class="main-project-list-item__description">Ежемесячно обрабатываем около 50 обращений и получаем 10 лидов и 25 заявок на сайте с переходов из постов в соцсетях.</div>
               <div class="main-project-list-item__button"><a href="#" class="button">Смотреть<img src="<?php echo get_template_directory_uri() ?>/img/svg/button-arrow.svg" alt=""></a></div>
            </div>

         </div>
         <div class="main-project-list-item" id="project4">
            <div class="main-project-list-item__content">
               <a class="main-project-list-item__link" href="/project/zhk-rezidencziya-anapolis/"></a>
               <div class="main-project-list-item__tag">Продвижение</div>
               <div class="main-project-list-item__title">ЖК «Резиденция Анаполис»</div>
               <!-- <div class="main-project-list-item__client">Партнер-строй</div> -->
               <div class="main-project-list-item__description">Резиденция Анаполис — это ключевой проект компании «Перспектива», управляющей крупнейшими земельными активами на Черноморском побережье Краснодарского края.</div>
               <div class="main-project-list-item__button"><a href="#" class="button">Смотреть<img src="<?php echo get_template_directory_uri() ?>/img/svg/button-arrow.svg" alt=""></a></div>
            </div>

         </div>
      </div>
   </div>
   <div class="main-project-container">
      <div class="main-project-container__set" style="background-color: #A2B65D">

         <div class="main-project-container__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/prj1.png" alt="" width="100%" height="100%">
         </div>
         <div class="main-project-container__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/sreda.png" alt="" width="100%" height="100%">
         </div>
         <div class="main-project-container__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/strana.png" alt="" width="100%" height="100%">
         </div>
         <div class="main-project-container__img">
            <img src="<?php echo get_template_directory_uri() ?>/img/anapolis.png" alt="" width="100%" height="100%">
         </div>

      </div>

   </div>
</section>
<section id="main-project-mobile" class="main-project-mobile g-block">
   <div class="wrapper">
      <div class="main-project-mobile-list">
         <div class="title-section title-section_project">
            <h2 class="font-super-gigant">Свежие кейсы </h2>
         </div>

         <?php while (have_rows('mobile-main-project', 'option')) : the_row();

            // переменные
            $img = get_sub_field('img');
            $tag = get_sub_field('tag');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $link = get_sub_field('link');
         ?>
         <div class="main-project-mobile-list-item">
            <a class="main-project-mobile-list-item__link" href="<?php echo $link ?>"></a>
            <div class="main-project-mobile-list-item__img">
               <img src="<?php echo $img ?>" alt="">
            </div>
            <div class="main-project-mobile-list-item__tag"><?php echo $tag ?></div>
            <div class="main-project-mobile-list-item__title"><?php echo $title?></div>
            <div class="main-project-mobile-list-item__description"><?php echo $description?></div>
            <div class="main-project-mobile-list-item__button"><a href="<?php echo $link ?>" class="button">Смотреть<img src="<?php echo get_template_directory_uri() ?>/img/svg/button-arrow.svg" alt=""></a></div>
         </div>

         <?php endwhile; ?>
      </div>
   </div>

</section>