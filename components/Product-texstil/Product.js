import { catalog } from './catalog.js'
const contentInsertion = document.querySelector('#products')
let counter = 6
function products(count = 6) {
	let htmlCatalog = ''

	catalog
		.slice(0, count)
		.forEach(({ id, descr, article, title, price, imgJpg, imgWebp }) => {
			htmlCatalog += `
          <div  class="product-card">
          <div class="product-tumb">
              <picture>
              <source
                srcset=${imgWebp}
                type="image/webp">
              <img
              loading="lazy"
              src=${imgJpg}
              alt=${title}>
                    
            </picture>
          </div>
          <div class="product-details">
            <span class="product-catagory">${article}
            </span>
            <h4><a href="">${title}</a></h4>
            <p>${descr}</p>
            <div class="product-bottom-details">
              <div class="product-price">${price} ₽</div>
              <div class="product-links">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href=""><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>
        </div>
          `
		})

	const html = `
          <div class="katolog__content">
              ${htmlCatalog}
          </div>
      `

	contentInsertion.innerHTML = html
}

products()
function createProduct() {
	counter += 3
	products(counter)
}
function scrollCheckPosition() {
	const height = document.body.offsetHeight
	const screenHeight = window.innerHeight
	const scrolled = window.scrollY
	const parog = height - screenHeight / 4
	const position = scrolled + screenHeight

	if (position >= parog) {
		createProduct()
	}
}
;(() => {
	window.addEventListener('scroll', scrollCheckPosition)
})()
