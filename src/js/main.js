import { fadeSlide } from './lib/fadeslide.js';
import { customSelect } from './lib/customselect.js';

import Swiper from 'swiper';
import { Autoplay, Thumbs, Navigation } from 'swiper/modules';
import Masonry from 'masonry-layout';
import GLightbox from 'glightbox';

/* ------ Global ------ */
function isHex(getColorValue) {
  return /^#[0-9A-F]{6}[0-9a-f]{0,2}$/i.test(getColorValue);
}
/* ------ End Global ------ */

/* ------ Ana Sayfa ------ */

function changeElemBg(elem, colorCode) {
  const coloredBackgrund = document.querySelector(elem);
  coloredBackgrund.style.backgroundColor = colorCode;
}

const homeFade = document.getElementById('home_fade');

if (homeFade) {
  const bannerBg = '#home_banner .color_dark';
  homeFade.addEventListener('slideInit', (e) => {
    changeElemBg(bannerBg, e.detail.activeElem.dataset.bgcolor);
  });

  fadeSlide('home_fade', {
    autoplay: true,
    delay: 3000,
    loop: true,
  });

  homeFade.addEventListener('slideChange', (e) => {
    changeElemBg(bannerBg, e.detail.activeElem.dataset.bgcolor);
  });
}

const homeSelectionsFade = document.getElementById(
  'home_selections_fade'
);

if (homeSelectionsFade) {
  function changeImage(imageUrl) {
    const imgItem = document.querySelector('#home_selections_image');
    imgItem.src = imageUrl;
  }

  homeSelectionsFade.addEventListener('slideInit', (e) => {
    changeElemBg(
      '#home_selections .colored_bg',
      e.detail.activeElem.dataset.bgcolor
    );
    changeImage(e.detail.activeElem.dataset.url);
  });

  fadeSlide('home_selections_fade', {
    autoplay: true,
    delay: 3000,
    loop: true,
    pag: true,
    clickablePagination: true,
    nav: true,
  });

  const paginationItems =
    homeSelectionsFade.querySelectorAll('.pag-item');
  paginationItems.forEach((elem, i) => {
    elem.textContent = i < 9 ? `0${i + 1}` : i + 1;
  });

  homeSelectionsFade.addEventListener('slideChange', (e) => {
    changeElemBg(
      '#home_selections .colored_bg',
      e.detail.activeElem.dataset.bgcolor
    );
    changeImage(e.detail.activeElem.dataset.url);
  });
}

/* ------ End Ana Sayfa ------ */
/* ------ Ürünler ------ */

const bannerRibbon = document.querySelector('.banner_ribbon');
let bannerBg = bannerRibbon && bannerRibbon.dataset.bg;

if (bannerBg && isHex(bannerBg)) {
  bannerBg = bannerBg.indexOf('#') === 0 ? bannerBg : `#${bannerBg}`;
  bannerRibbon.style.backgroundColor = bannerBg;
  bannerRibbon
    .querySelectorAll('.before_ribbon, h1, .after_ribbon')
    .forEach((elem) => {
      elem.style.backgroundColor = bannerBg;
    });
}

const dynamicform = document.querySelector('.dynamic-form');
dynamicform && customSelect();
/* ------ End Ürünler ------ */
/* ------ Ürün Detay ------ */

const productDetail = document.getElementById('product_detail');

if (productDetail) {
  let themeDarkColor = productDetail.dataset.colorDark;
  let themeLightColor = productDetail.dataset.colorLight;

  const thumbGallery = new Swiper('.thumbs-swiper', {
    modules: [Autoplay, Navigation],
    direction: 'vertical',
    slidesPerView: 3,
    spaceBetween: 12,

    navigation: {
      nextEl: '.controller .nav_next',
      prevEl: '.controller .nav_prev',
    },
  });

  new Swiper('.prod-swiper', {
    modules: [Autoplay, Thumbs],
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
    thumbs: {
      swiper: thumbGallery,
    },
  });

  document.querySelectorAll('.apply_light').forEach((elem) => {
    elem.style.backgroundColor = themeLightColor;
  });
  document.querySelectorAll('.apply_dark').forEach((elem) => {
    if (elem.tagName === 'SVG' || elem.tagName === 'svg') {
      elem.style.fill = themeDarkColor;
    } else {
      elem.style.backgroundColor = themeDarkColor;
    }
  });
}

const otherProductsSwiper = document.querySelector(
  '.other-prods-swiper'
);

otherProductsSwiper &&
  new Swiper(otherProductsSwiper, {
    modules: [Navigation],
    slidesPerView: 4,
    spaceBetween: 24,
    slidesPerGroup: 4,
    navigation: {
      prevEl: '.other_products .prev',
      nextEl: '.other_products .next',
    },
  });

/* ------ End Ürün Detay ------ */
/* ------ Proje Detay ------ */

function generateMasonry(gridParent) {
  new Masonry(gridParent, {
    itemSelector: '.grid_item',
    columnWidth: '.grid-sizer',
    gutter: 24,
  });

  new GLightbox({});
}

const masonryGrid = document.querySelector('.masonry-grid');
if (masonryGrid) {
  generateMasonry(masonryGrid);
  window.addEventListener('resize', generateMasonry);
}

/* ------ End Proje Detay ------ */
