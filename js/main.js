const burger = () => {
  let menuBtn = document.getElementById("burger");
  let navigation = document.querySelector(".header__top");
  let overlay = document.querySelector(".overlay");
  let header = document.querySelector(".header__nav-link");
  let menuOpen = false;
  menuBtn.addEventListener("click", () => {
    if (!menuOpen) {
      navigation.classList.toggle("header__top--open");
      overlay.classList.toggle("overlay--show");
    }
  });
  document
    .querySelector(".burger, .overlay, .header__top a")
    .addEventListener("click", function (e) {
      e.preventDefault();
      overlay.classList.toggle("overlay--show");
      navigation.classList.toggle("header__top--open");
      header.classList.toggle("header__top--open");
    });
};
burger();

// const lazyImages = document.querySelectorAll(
//   "img[data-src], source[data-srcset]"
// );
// const windowHeight = document.documentElement.clientHeight;
// const loadMoreBlock= document.querySelector('._load-more')

// let lazyImagesPositions = [];
// if (lazyImages.length > 0) {
//   lazyImages.forEach((img) => {
//     if (img.dataset.src || img.dataset.srcset) {
//       lazyImagesPositions.push(img.getBoundingClientRect().top + pageYOffset);
//       lazyScrollCheck();
//     }
//   });
// }

// window.addEventListener("scroll", lazyScroll);

// function lazyScroll() {
//   if (
//     document.querySelectorAll("img[data-src], source[data-srcset]").length > 0
//   ) {
//     lazyScrollCheck();
//   }
//   if(!loadMoreBlock.classList.contains('_loading')) {
//     loadMore()
//   }
// }

// function lazyScrollCheck() {
//   let imgIndex = lazyImagesPositions.findIndex(
//     (item) => pageYOffset > item - windowHeight
//   );
//   if (imgIndex >= 0) {
//     if (lazyImages[imgIndex].dataset.src) {
//       lazyImages[imgIndex].src = lazyImages[imgIndex].dataset.src;
//       lazyImages[imgIndex].removeAttribute("data-src");
//     } else if (lazyImages[imgIndex].dataset.srcset) {
//       lazyImages[imgIndex].srcset = lazyImages[imgIndex].dataset.srcset;
//       lazyImages[imgIndex].removeAttribute("data-srcset");
//     }
//     delete lazyImagesPositions[imgIndex];
//   }
// }

// function loadMore() {
//   const loadMoreBlockPos = loadMoreBlock.getBoundingClientRect().top + pageYOffset;
//   const loadMoreBlockHeight = loadMoreBlock.offsetHeight;

//   if(pageYOffset > (loadMoreBlockPos + loadMoreBlockHeight) - windowHeight) {
//     getContent()
//   }
// }

// async function getContent() {
//   loadMoreBlock.classList.add('_loading');

//   let response = await fetch('./../components/Product-grobs/catalog.js',{
//     method: 'GET',
//   });
//   if (response.ok) {
//     let result = await response.json()
//     loadMoreBlock.insertAdjacentHTML('beforeend', result)
    
//   } else {
//     alert('Error')
//   }

// }

ymaps.ready(init);

function init() {
  var map = new ymaps.Map("map", {
    center: [53.2434, 34.363991], // lat, long
    zoom: 12,
    controls: ["zoomControl", "fullscreenControl"],
  });

  // Objects collection
  var collection = {
    type: "FeatureCollection",
    features: [
      {
        type: "Feature",
        id: 0,
        geometry: {
          type: "Point",
          coordinates: [53.252328, 34.330493],
        },
        properties: {
          balloonContent: `
               <div class="balloon">
                   <div class="balloon__address">ул. Красноармейская д. 105,Советский район, г. Брянск, (Центральное кладбище)
                   </div>
                   <div class="balloon__contacts">
                      <a href="tel:+78121234567">41-42-03, 41-54-03</a>
                  </div>
               </div>
           `,
        },
      },

      {
        type: "Feature",
        id: 1,
        geometry: {
          type: "Point",
          coordinates: [53.270415, 34.374951],
        },
        properties: {
          balloonContent: `
               <div class="balloon">
                   <div class="balloon__address">ул. Калинина д.268, тел.78-20-92 Советский район, г. Брянск
                   </div>
                   <div class="balloon__contacts">
                      <a href="tel:+782092">78-20-92</a>
                  </div>
               </div>
           `,
        },
      },
      {
        type: "Feature",
        id: 2,
        geometry: {
          type: "Point",
          coordinates: [53.233376, 34.367279],
        },
        properties: {
          balloonContent: `
               <div class="balloon">
                   <div class="balloon__address">ул. Калинина д. 59, тел. 74-26-41,Советский район, г. Брянск
                   </div>
                   <div class="balloon__contacts">
                      <a href="tel:+742641">74-26-41</a>
                  </div>
               </div>
           `,
        },
      },
      {
        type: "Feature",
        id: 3,
        geometry: {
          type: "Point",
          coordinates: [53.303694, 34.289108],
        },
        properties: {
          balloonContent: `
               <div class="balloon">
                   <div class="balloon__address">ул. Орловская д.26, тел. 57-75-06, Бежицкий район, г.Брянск, (кладбища по ул. Почтовой, ул. Деснянский Спуск (Чашин Курган) , п. Бежичи, п. Бордовичи, п. Антоновка, п. Чайковичи)
                   </div>
                   <div class="balloon__contacts">
                      <a href="tel:+577506">57-75-06</a>
                  </div>
               </div>
           `,
        },
      },
      {
        type: "Feature",
        id: 4,
        geometry: {
          type: "Point",
          coordinates: [53.199864, 34.389557],
        },
        properties: {
          balloonContent: `
               <div class="balloon">
                   <div class="balloon__address">ул. Волочаевская д.12, тел. 8-980-306-91-47, Фокинский район, г.Брянск (кладбища по ул. Волочаевской, кладбище на ст. Снежецкая)
                   </div>
                   <div class="balloon__contacts">
                      <a href="tel:+89803069147">8-980-306-91-47</a>
                  </div>
               </div>
           `,
        },
      },
      {
        type: "Feature",
        id: 5,
        geometry: {
          type: "Point",
          coordinates: [53.213332, 34.663463],
        },
        properties: {
          balloonContent: `
               <div class="balloon">
                   <div class="balloon__address">ул. Ленина, д.3А, тел. 8-980-319-06-03, п. Белые Берега, Фокинсктй район, г. Брянска (кладбище п. Белые Берега)
                   </div>
                   <div class="balloon__contacts">
                      <a href="tel:+89803190903">8-980-319-09-03</a>
                  </div>
               </div>
           `,
        },
      },
      {
        type: "Feature",
        id: 6,
        geometry: {
          type: "Point",
          coordinates: [53.213332, 34.663463],
        },
        properties: {
          balloonContent: `
               <div class="balloon">
                   <div class="balloon__address">ул. Абашева, тел. 8-980-319-09-03, Володарский район, г. Брянск (кладбища по ул. Абашева, ул. Профсоюзов, п. Большое Полпино, п. Радица-Крыловка)
                   </div>
                   <div class="balloon__contacts">
                      <a href="tel:+89803190903">8-980-319-09-03</a>
                  </div>
               </div>
           `,
        },
      },
    ],
  };

  // Object Manager
  objectManager = new ymaps.ObjectManager({ clusterize: true });
  objectManager.add(collection);

  map.geoObjects.add(objectManager);
}



// const imgObserver = new IntersectionObserver((entries, self) => {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       lazyLoad(entry.target);
//       self.unobserve(entry.target);
//     }
//   });
// });
// document.querySelectorAll('.lazy-picture').forEach((picture) => {
//   imgObserver.observe(picture);
// });

// const lazyLoad = (picture) => {
//   const img = picture.querySelector('img');
//   const sources = picture.querySelectorAll('source');

//   sources.forEach((source) => {
//     source.srcset = source.dataset.srcset;
//     source.removeAttribute('data-srcset');
//   });
//   img.src = img.dataset.src;
//   img.removeAttribute('data-src');
// }

// const options = {
//   root: document.querySelector(".container"),
//   rootMargin: "10px",
//   threshold: 0.5
// };
// const observer = new IntersectionObserver((elements) => {
//   elements.forEach((element) => console.log("element", element));
// }, options);
// const target = document.querySelector(".header");
// observer.observe(target);

// if ('IntersectionObserver' in window) {
//   // just to be safe, we check if the browser supports the observer API
//   const images = document.querySelectorAll('.product-tumb img')

//   let observer = new IntersectionObserver(
//     (entries, observer) => {
//       entries.forEach((entry) => {
//         if (!entry.isIntersecting) return
//         const image = entry.target
//         const newURL = image.getAttribute('data-src')
//         image.src = newURL
//         observer.unobserve(image)
//       })
//     },
//     {
//       threshold: [1],
//     },
//   )

//   images.forEach((image) => {
//     observer.observe(image)
//   })
// }

