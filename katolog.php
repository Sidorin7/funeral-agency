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


  <link rel="stylesheet" href="css/katolog.css" />

  <link rel="stylesheet" href="css/style.css" />
  <title>Каталог</title>
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
                Каталог товаров
              </h1>
            </div>
          </div>
        </div>
        <div class="katolog__inner">
          <div class="katolog__content">
            <div class="product-card">
              <a class='product-link' href="/katolog-venki.php">
                <div class="product-tumb">
                  <img src="/images/venok.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="/katolog-venki.php">Венки</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-korzin.php">
                <div class="product-tumb">
                  <img src="/images/korzina.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="/katolog-korzin.php">Корзины</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-grob.php">
                <div class="product-tumb">
                  <img src="/images/grob.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="/katolog-grob.php">Гробы</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-texstil.php">
                <div class="product-tumb">
                  <img src="/images/texstil.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="/images/texstil.jpg">Текстиль</a></h4>
                </div>
              </a>
            </div>
            <!-- <div class="product-card">
              <a class='product-link' href="/katolog-krest.php2">
                <div class="product-tumb">
                  <img src="/images/krest.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="/images/krest.jpg">Кресты</a></h4>
                </div>
              </a>
            </div> -->
            <!-- <div class="product-card">
              <a class='product-link' href="/katolog-accessories.php">
                <div class="product-tumb">
                  <img src="/images/accessories.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="/katolog-accessories.php">Аксессуары</a></h4>
                </div>
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php
  include('footer.php')
    ?>
</body>

<script src="js/main.js"></script>

</html>