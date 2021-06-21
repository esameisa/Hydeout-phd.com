'use strict';


// failsafe in case this is not supported in some browser;
function getPrevPath() {
  if (history) {
    if (history.state && history.state.path && !history.state.path.startsWith('/menu')) {
      return history.state.path;
    }
  }
  return null;
}

function animateMenus(menus) {
  menus.each(function (index, menu){
    var $menu = $(menu);
    $menu.addClass('is-active').animate({
      height: '100%'
    }, 600, function () {
      $menu.find('.menu > li').each(function (i, el) {
        var iHolder = i * 350;
        setTimeout(function () {
          $(el).animate({
            opacity: 1,
            left: 15
          }, 150, function() {console.log('done with:', el)});
        }, 0 + iHolder);
      });
    });
  });
}

var hideOut = {
  title: 'Hyde Out',
  cacheDom: function () {
    this.$body = $('body');
    this.$menu = $('.page--menu');
    this.$nav = $('.navbar');
  },
  init: function () {
    this.mapInitialized = false;
    this.aboutInitialized = false;
    this.exploreInitialized = false;
    this.eatDrinkInitialized = false;
    this.cacheDom();
    this.initPageJs();
    this.injectingSVGs();
    this.closeMenuWithEsc();
    this.toggleStores();
    this.swapEventDetails();
    this.animateEventGalleryThumbs();
    this.toggleMapPins();
  },
  animatePages: function (selector) {
    selector = selector.join(' ') + '';
    $(selector).hierarchicalDisplay();
    $(selector).on('shown.zmd.hierarchicalDisplay', function () {
      if (!($(this).is('.in'))) {
        $(this).addClass('in');
      }
    });
  },
  toggleMapPins: function () {
    $('.pins-title__list .pins-title__item').on('click', function () {
      var pinId = $(this).attr('data-pin');
      $('.pins-title__list .pins-title__item').removeClass('active');
      $('.pins__item').removeClass('current');
      $(this).addClass('active');
      $('[data-pins="' + pinId + '"]').addClass('current');
    });
  },
  changeLogoLocaton: function (page) {
    switch (page) {
      case 'play':
      case 'picnic':
      case 'pet':
      case 'shop':
      case 'entertain':
      case 'exercise':
      case 'food-park':
      case 'promenade':
        $('.navbar').addClass('navbar--left-logo');
        break;
      default:
        if ($('.navbar').hasClass('navbar--left-logo')) {
          $('.navbar').removeClass('navbar--left-logo');
        }
    }
  },
  animateEventGalleryThumbs: function () {
    $('#aniimated-thumbnials').lightGallery({
      thumbnail: true,
      animateThumb: false,
      showThumbByDefault: false
    });
    $('#video-gallery').lightGallery({
      youtubePlayerParams: {
        modestbranding: 1,
        showinfo: 0,
        rel: 0,
        controls: 0
      },
      loadYoutubeThumbnail: true,
      youtubeThumbSize: 'default',
      loadVimeoThumbnail: true,
      vimeoThumbSize: 'thumbnail_medium'
    });
  },
  swapEventDetails: function () {
    $(document).ready(function () {
      $('.event .event__content').addClass('is-active');
      $('.event .event-details').removeClass('is-active');
    });
    //to be rewritten
    if (!($('.event').is('.pastEvent')) || $('.event').is('.pastEvent')) {
      $(document).ready(function () {
        if (!($('.event .event__content').is('.is-active'))) {
          $('.event .event__content').addClass('is-active');
        }
      });
      $('.event .event__action').on('click', function (e) {
        if ($(this).attr('href') === '#') {
          e.preventDefault();
        }
        $('.event-details').slideDown('slow').addClass('is-active');
        $('.event .event__content').fadeOut('slow').removeClass('is-active');
      });

      $('.event-details .event-details__action').on('click', function (e) {
        e.preventDefault();
        $('.event-details').slideUp('slow').removeClass('is-active');
        $('.event .event__content').fadeIn('slow').addClass('is-active');
      });
    }
  },
  toggleStores: function () {
    $(document).ready(function () {
      if (!($('#store-1').is('current'))) {
        $('#store-1').addClass('current');
        $('[data-store="store-1"]').addClass('current');
      }
    });
    $('.store__list .store__item').on('click', function () {
      var storeId = $(this).attr('data-store');
      $('.store__list .store__item').removeClass('current');
      $('.store-data').removeClass('current');
      $(this).addClass('current');
      $('#' + storeId).addClass('current');
    });
  },
  closeMenu: function (slug) {
    var that = this;
    if (this.$menu.is('.is-active')) {
      this.$menu.animate({
        height: 0
      }, 500, function () {
        that.$menu.removeClass('is-active');
        if (slug) {
          that.showPage(slug);
        }
      });
      $('.menu-trigger').removeClass('opened').attr('href', 'menu');
    }
  },
  injectingSVGs: function () {
    window.assetsPath = window.assetsPath || '';
    var svgPath = window.assetsPath + 'images/svg-defs.svg';
    var that = this;
    $.get(svgPath, function (data) {
      var $icons = $('<div class="icons visually-hidden"></div>').html(new XMLSerializer().serializeToString(data.documentElement));
      that.$body.prepend($icons);
    });
  },
  closeMenuWithEsc: function () {
    var that = this;
    $(document).keyup(function (e) {
      if (e.keyCode == 27 && that.$menu.is('.is-active')) {
        window.history.back();
      }
    });
  },
  showPage: function (page) {
    this.hidePage();
    this.hideHome();
    this.highlightActiveMenu(page);
    this.changeLogoLocaton(page);
    this.$body.addClass('page-active');
    $('[data-page="' + page + '"]').fadeIn('slow').addClass('is-active');
    $('[data-explore="' + page + '"]').fadeIn('slow').addClass('is-active');
    $('[data-event="' + page + '"]').fadeIn('slow').addClass('is-active');
    var selector = ['.' + page + '__wrapper'];
    switch (page) {
      case 'about':
        selector.push('.content');
        break;
      case 'explore':
        selector.push('.row');
        break;
      case 'play':
        selector.push('.row,', '.sponsor-info');
        break;
      case 'picnic':
        selector.push('.row .col:nth-child(2)', '.content,', '.row .col:nth-child(1) .content__img--secondry,', '.sponsor-info');
        break;
      case 'entertain':
        selector.push('.row,', '.sponsor-info');
        break;
      case 'promenade':
        selector.push('.row:nth-child(1) .col,', '.row:nth-child(2) .col:last-child .content');
        break;
      case 'exercise':
        selector.push('.row,', '.sponsor-info');
        break;
      case 'pet':
        selector.push('.row:nth-child(1) .content,', '.sponsor-info');
        break;
      case 'shop':
        selector.push('.row .content,', '.store-info .col:last-child');
        break;
      case 'contact':
        selector.push('.col .contact__form');
        break;
      case 'events':
        selector.push('.row');
        break;
    }
    this.animatePages(selector);


    // Fixing IE Object-fit
    if (page === 'map' && !this.mapInitialized) {
      this.mapInitialized = true;
      var $mapImg = $('.map__wrapper .map-details__img img');
      objectFitImages($mapImg);
    }

    if (page === 'eat-and-drink' && !this.eatDrinkInitialized) {
      this.eatDrinkInitialized = true;
      var $edimg = $('.eat-and-drink__wrapper .foodpark-image');
      objectFitImages($edimg);
    }

    if (page === 'about' && !this.aboutInitialized) {
      this.aboutInitialized = true;
      var $aboutLogo = $('.about__wrapper .about__info .logo');
      objectFitImages($aboutLogo);
    }

    if (page === 'explore' && !this.exploreInitialized) {
      this.exploreInitialized = true;
      var $exploreImgs = $('.explore-image');
      objectFitImages($exploreImgs);
    }
  },
  hidePage: function () {
    $('.slide.is-active').fadeOut().removeClass('is-active');
  },
  hideHome: function () {
    this.$body.removeClass('home-active');
  },
  highlightActiveMenu: function (href) {
    this.$nav.find('.is-active').removeClass('is-active');
    this.$nav.find('a[href="' + href + '"]').addClass('is-active');
  },
  initPageJs: function () {
    var that = this;
    page('/', function () {
      document.title = that.title;
      that.hidePage();
      that.$body.removeClass('page-active');
      that.$body.addClass('home-active');
      that.closeMenu();
    });
    page('/menu', function (context) {
      console.log("here  i'm")
      that.hidePage();
      that.hideHome();
      document.title = that.title + ' | Menu';
      $('.menu > li').removeAttr('style');
      $('.menu-trigger').addClass('opened').attr('href', getPrevPath() || '/');
      animateMenus(that.$menu);
    });
    page('/:slug', function (context) {
      that.closeMenu();
      that.showPage(context.params.slug);
    });
    page('/explore/:slug', function (context) {
      that.closeMenu();
      that.showPage(context.params.slug);
    });
    page('/explore/eat-and-drink/:slug', function (context) {
      that.closeMenu();
      that.showPage(context.params.slug);
    });
    page('/gallery/:slug', function (context) {
      that.closeMenu();
      that.showPage(context.params.slug);
    });
    page({
      hashbang: true
    });
  }
}

$(document).ready(function () {
  hideOut.init();
});
