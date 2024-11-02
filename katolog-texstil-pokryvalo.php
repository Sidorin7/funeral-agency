<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
  <script src="https://lidrekon.ru/slep/js/uhpv-hover-full.min.js"></script>
  <link rel="icon" href="images/favicon/favicon-32x32.png" type="image/x-icon">
  <?php
      include('favicon.php')
  ?>


  <!-- <link rel="stylesheet" href="css/reset.css" /> -->
  <link rel="stylesheet" href="/css/katolog-venki.css">

  <!-- <link rel="stylesheet" href="css/katolog.css" /> -->
  <link rel="stylesheet" href="css/style.css" />
  <title>Покрывала</title>
</head>

<body>
  <div class="wrapper">
    <div class="overlay"></div>
    <header class="header">
      <?php
      include('nav.php')
        ?>
    </header>
    <div class="main__katolog katolog">
      <div class="container">
        <div class="header__main--center">
          <div class="heading__title heading">
            <div class="katolog__heading">
              <h1 class="katolog__heading-title">
                Покрывала
              </h1>
            </div>
          </div>
        </div>
        <div class="katolog__inner">
          <div class="123" id="products"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php
  include('footer.php')
    ?>
</body>
<script type="module" src="./components/Product-pokrvla/Product.js"></script>

<script src="js/main.js"></script>

</html>