<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
  <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
  <script src="https://lidrekon.ru/slep/js/uhpv-hover-full.min.js"></script>
  <link rel="stylesheet" href="css/reset.css" />


  <link rel="stylesheet" href="css/katolog.css" />

  <link rel="stylesheet" href="css/style.css" />
  <title>Document</title>
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
                Католог товаров
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

                  <h4><a href="">Венки</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-korzin.php">
                <div class="product-tumb">
                  <img src="/images/korzina.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="#">Корзины</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-grob.php">
                <div class="product-tumb">
                  <img src="/images/grob.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="">Гробы</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-texstil.php">
                <div class="product-tumb">
                  <img src="/images/texstil.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="">Текстиль</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-krest.php">
                <div class="product-tumb">
                  <img src="/images/krest.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="">Кресты</a></h4>
                </div>
              </a>
            </div>
            <div class="product-card">
              <a class='product-link' href="/katolog-accessories.php">
                <div class="product-tumb">
                  <img src="/images/accessories.jpg" alt="">
                </div>
                <div class="product-details">

                  <h4><a href="#">Аксессуары</a></h4>
                </div>
              </a>
            </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="js/main.js"></script>

</html>