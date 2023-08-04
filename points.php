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
  <link rel="stylesheet" href="css/points.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
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
                    Пункты приема заказов
                  </h1>
                </div>
              </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>