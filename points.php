<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
  <script src="https://lidrekon.ru/slep/js/uhpv-hover-full.min.js"></script>
  <?php
      include('favicon.php')
  ?>

  <!-- <link rel="stylesheet" href="css/reset.css" /> -->
  <link rel="stylesheet" href="css/points.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Пункты приема заказов</title>
</head>

<body>
  <div class="wrapper">
  <div class="overlay"></div>
    <header class="header">
      <?php
      include('nav.php')
        ?>


      <div class="header__body">
        <div class="container">
          <div class="header__body-inner">
            <div class="header__main--center">
              <div class="heading__title heading">
                <div class="points__heading">
                  <h1 class="points__heading-title">
                    Пункты приема заказов.
                  </h1>
                </div>
              </div>
            </div>
            <div class="section-map__map">
            <div class="map" id="map"></div>
          </div>
          </div>
        </div>
      </div>
    </header>


  </div>
  <?php
  include('footer.php')
    ?>
</body>
<script
      src="https://api-maps.yandex.ru/2.1/?apikey=5e83e2d1-4f13-4dfa-b83d-9e8dbd765578
    &lang=ru_RU"
      type="text/javascript"></script>
<script src="js/main.js"></script>

</html>    