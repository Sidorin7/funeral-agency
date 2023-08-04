$(function () {
  $(".header__nav a").each(function () {
    var location = window.location.href;
    var link = this.href;
    if (location == link) {
      $(this).addClass("active");
    }
  });
});
setInterval(() => {
  if (
    $(window).scrollTop() > 0 &&
    $(".header__top").hasClass("header__top--open") === false
  ) {
    $(".burger").addClass("burger--follow");
  } else {
    $(".burger").removeClass("burger--follow");
  }
}, 0);
$(".burger, .overlay, header__nav a").on("click", function (e) {
  e.preventDefault();
  $(".header__top").toggleClass("header__top--open");
  $(".overlay").toggleClass("overlay--show");
})

const accordion = document.getElementsByClassName('container');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
  })
}
