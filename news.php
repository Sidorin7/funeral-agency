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
  
  <link rel="stylesheet" href="css/news.scss" />
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
    <div class="main__news news">
      <div class="container">
        <div class="header__main--center">
          <div class="heading__title heading">
            <div class="news__heading">
              <h1 class="news__heading-title">
                Новости
              </h1>
            </div>
          </div>
        </div>
        <div class="news__inner">
          <div class="news__content">
              <div class="card card-2">
                <div class="card-img"></div>
                <a href="" class="card-link">
                  <div class="card-img-hovered"></div>
                </a>
                <div class="card-info">
                  <div class="card-about">
                    <a class="card-tag">Tech</a>
                    <div class="card-time">30/03/2023</div>
                  </div>
                  <h1 class="card-title">В исполнении Постановления Брянской городской администрации 1061-п от 29.03.2023 г. на территории городских кладбищ проводится месячник по благоустройству</h1>
                  <div class="card-creator">by <a href="">Tyler Platt</a></div>
                </div>
              </div>
              <div class="card card-2">
                <div class="card-img"></div>
                <a href="" class="card-link">
                  <div class="card-img-hovered"></div>
                </a>
                <div class="card-info">
                  <div class="card-about">
                    <a class="card-tag">Tech</a>
                    <div class="card-time">6/07/2018</div>
                  </div>
                  <h1 class="card-title">Samsung laptops is exploding again</h1>
                  <div class="card-creator">by <a href="">Tyler Platt</a></div>
                </div>
              </div>
              <div class="card card-3">
                <div class="card-img"></div>
                <a href="" class="card-link">
                  <div class="card-img-hovered"></div>
                </a>
                <div class="card-info">
                  <div class="card-about">
                    <a class="card-tag tag-deals">Deals</a>
                    <div class="card-time">5/27/2018</div>
                  </div>
                  <h1 class="card-title">Apple is having big Sale for the first time</h1>
                  <div class="card-creator">by <a href="">Timur Mirzoyev</a></div>
                </div>
              </div>
              <div class="card card-4">
                <div class="card-img"></div>
                <a href="" class="card-link">
                  <div class="card-img-hovered"></div>
                </a>
                <div class="card-info">
                  <div class="card-about">
                    <a class="card-tag tag-politics">Politics</a>
                    <div class="card-time">5/20/2018</div>
                  </div>
                  <h1 class="card-title">Net-Nutrality is coming to its end</h1>
                  <div class="card-creator">by <a href="">Gregoy Trem</a></div>
                </div>
              </div>
            
          </div>
        </div>
      </div>
    </div>
    d
    <?php
    include('footer.php')
      ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>

</html>