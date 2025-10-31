<?php
include 'temp/headr.php';
?>


<div class="container mt-4">
        <div class="main_slider">
          


            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-warning">Чем занимаемся?</h5>
         <p class="text-warning">Наша компания занимается разработкой инновационного проекта в области умных городов. 
            Мы создаем уникальную платформу, которая объединяет различные технологии для улучшения жизни горожан. 
            Наш проект включает в себя системы мониторинга окружающей среды, управления энергопотреблением, 
            обеспечения безопасности и комфорта горожан.</p>
      </div>
    </div>

     <div class="carousel-item ">
      <img src="img/2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-warning">Чем занимаемся?</h5>
         <p class="text-warning">Мы дорожим каждым нашим клиентом, поэтому высокое качество сервиса -
            приоритет для нас. Вы всегда можете задать интересующие вас вопросы
            в онлайн-режиме или по телефону и получить подробную консультацию.
         </p>
      </div>
    </div>

    <div class="carousel-item ">
      <img src="img/3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-warning">Чем занимаемся?</h5>
         <p class="text-warning">В своей деятельности наша компания руководствуется принципом:
            "Минимизировать негативное воздействие на окружающую среду", поэтому
            ответственное отношение к экологии - один из приоритетов компании.
         </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </div>
    </div>
<div class="container mt-4">
    <div class="slider d-flex justify-content-center p-4 align-items-center gap-4">
        <div class="left">
            <button class="btn btn-link">
                <img src="/img/в влево 1.png" alt="">
            </button>
        </div>
        <div class="slide slider-item active border border-black p-4 ">
            <h3>Повысить доверие</h3>
            <p>
                Мы работаем более чем 120 городами России и стран СНГ.
            </p>
        </div>
         <div class="slide slider-item active border border-black p-4">
            <h3>Сформировать имидж</h3>
            <p>
                Наша миссия - постоянно развиваться и повышать качество нашей продукции за счёт внедрения инновационных технологий.
        </div>
        <div class="slide slider-item border border-black p-4 ">
            <h3>Усилить бренд</h3>
            <p>
               Определите аудиторию, чтобы выбрать стиль, речевые и графические приемы и содержание страницы. К примеру, для инвесторов и геймдев-разработчиков нужна разная подача текста. Для интернет-магазина, который продает в розницу — одно содержание, а для того, который продает оптовым поставщикам — другое. 
            </p>
        </div>
         <div class="slide slider-item border border-black p-4">
            <h3>Привлечь сотрудников</h3>
            <p>
                Это актуально для сферы услуг, премиального сегмента товаров и B2B. Услуги нельзя потрогать, потому покупателю нужно больше информации об исполнителях для принятия решения.
            </p>
        </div>
        <div class="right">
            <button class="btn btn-link">
                <img src="/img/в право 1.png" alt="">
            </button>
        </div>
    </div>
</div>
<div class=" bg-dark p-4">
    <div class="container">
        <h2 class="text-warning text-center">С кем мы работаем?</h2>
        <p class="text-warning text-center">Эти компании с нами сотрудничуют.<p>
            <div class="d-flex justify-content-center align-items-center gap-4">
                <div>
                    <img src="img/сбер банк.png" width="300px">
                </div>
                <div>
                    <img src="/img/газпром.png" width="300px">
                </div>
                <div>
                    <img src="img/ржд.png" width="300px">
                </div>
            </div>
    </div>
</div>

<?php
include 'temp/footer.php';
?>