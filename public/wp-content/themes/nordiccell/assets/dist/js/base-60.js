/******/ (function(modules) { // webpackBootstrap
/******/ 	// install a JSONP callback for chunk loading
/******/ 	function webpackJsonpCallback(data) {
/******/ 		var chunkIds = data[0];
/******/ 		var moreModules = data[1];
/******/
/******/
/******/ 		// add "moreModules" to the modules object,
/******/ 		// then flag all "chunkIds" as loaded and fire callback
/******/ 		var moduleId, chunkId, i = 0, resolves = [];
/******/ 		for(;i < chunkIds.length; i++) {
/******/ 			chunkId = chunkIds[i];
/******/ 			if(Object.prototype.hasOwnProperty.call(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 				resolves.push(installedChunks[chunkId][0]);
/******/ 			}
/******/ 			installedChunks[chunkId] = 0;
/******/ 		}
/******/ 		for(moduleId in moreModules) {
/******/ 			if(Object.prototype.hasOwnProperty.call(moreModules, moduleId)) {
/******/ 				modules[moduleId] = moreModules[moduleId];
/******/ 			}
/******/ 		}
/******/ 		if(parentJsonpFunction) parentJsonpFunction(data);
/******/
/******/ 		while(resolves.length) {
/******/ 			resolves.shift()();
/******/ 		}
/******/
/******/ 	};
/******/
/******/
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// object to store loaded and loading chunks
/******/ 	// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 	// Promise = chunk loading, 0 = chunk loaded
/******/ 	var installedChunks = {
/******/ 		"base": 0
/******/ 	};
/******/
/******/
/******/
/******/ 	// script path function
/******/ 	function jsonpScriptSrc(chunkId) {
/******/ 		return __webpack_require__.p + "js/" + chunkId + ".js"
/******/ 	}
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/ 	// This file contains only the entry chunk.
/******/ 	// The chunk loading function for additional chunks
/******/ 	__webpack_require__.e = function requireEnsure(chunkId) {
/******/ 		var promises = [];
/******/
/******/
/******/ 		// JSONP chunk loading for javascript
/******/
/******/ 		var installedChunkData = installedChunks[chunkId];
/******/ 		if(installedChunkData !== 0) { // 0 means "already installed".
/******/
/******/ 			// a Promise means "currently loading".
/******/ 			if(installedChunkData) {
/******/ 				promises.push(installedChunkData[2]);
/******/ 			} else {
/******/ 				// setup Promise in chunk cache
/******/ 				var promise = new Promise(function(resolve, reject) {
/******/ 					installedChunkData = installedChunks[chunkId] = [resolve, reject];
/******/ 				});
/******/ 				promises.push(installedChunkData[2] = promise);
/******/
/******/ 				// start chunk loading
/******/ 				var script = document.createElement('script');
/******/ 				var onScriptComplete;
/******/
/******/ 				script.charset = 'utf-8';
/******/ 				script.timeout = 120;
/******/ 				if (__webpack_require__.nc) {
/******/ 					script.setAttribute("nonce", __webpack_require__.nc);
/******/ 				}
/******/ 				script.src = jsonpScriptSrc(chunkId);
/******/
/******/ 				// create error before stack unwound to get useful stacktrace later
/******/ 				var error = new Error();
/******/ 				onScriptComplete = function (event) {
/******/ 					// avoid mem leaks in IE.
/******/ 					script.onerror = script.onload = null;
/******/ 					clearTimeout(timeout);
/******/ 					var chunk = installedChunks[chunkId];
/******/ 					if(chunk !== 0) {
/******/ 						if(chunk) {
/******/ 							var errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 							var realSrc = event && event.target && event.target.src;
/******/ 							error.message = 'Loading chunk ' + chunkId + ' failed.\n(' + errorType + ': ' + realSrc + ')';
/******/ 							error.name = 'ChunkLoadError';
/******/ 							error.type = errorType;
/******/ 							error.request = realSrc;
/******/ 							chunk[1](error);
/******/ 						}
/******/ 						installedChunks[chunkId] = undefined;
/******/ 					}
/******/ 				};
/******/ 				var timeout = setTimeout(function(){
/******/ 					onScriptComplete({ type: 'timeout', target: script });
/******/ 				}, 120000);
/******/ 				script.onerror = script.onload = onScriptComplete;
/******/ 				document.head.appendChild(script);
/******/ 			}
/******/ 		}
/******/ 		return Promise.all(promises);
/******/ 	};
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// on error function for async loading
/******/ 	__webpack_require__.oe = function(err) { console.error(err); throw err; };
/******/
/******/ 	var jsonpArray = window["webpackJsonp"] = window["webpackJsonp"] || [];
/******/ 	var oldJsonpFunction = jsonpArray.push.bind(jsonpArray);
/******/ 	jsonpArray.push = webpackJsonpCallback;
/******/ 	jsonpArray = jsonpArray.slice();
/******/ 	for(var i = 0; i < jsonpArray.length; i++) webpackJsonpCallback(jsonpArray[i]);
/******/ 	var parentJsonpFunction = oldJsonpFunction;
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./entries/base.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "../css/base.css":
/*!***********************!*\
  !*** ../css/base.css ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "../js/base.js":
/*!*********************!*\
  !*** ../js/base.js ***!
  \*********************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  'use strict';

  toggleSubMenu();
  toggleOverlayMenu();
  handleOverlayScroll();
  toggleSearch();
  togglemobileSubMenu();
  removeBodyOverlay();
  addToCartAjax();
  //Navigation();
  //  btBackNav();
  toggleNavMobile();
  openSubNav();
  menuServiceMobile();
  pageRegister();

  // Show all variant on group product detail
  $('.btn-show-all-variants span').on('click', function () {
    $('.woocommerce-grouped-product-list-item').removeClass('not-show');
    $(this).parent().remove();
  });

  /**
    * Check if a node is blocked for processing.
    *
    * @param {JQuery Object} $node
    * @return {bool} True if the DOM Element is UI Blocked, false if not.
    */
  var is_blocked = function is_blocked($node) {
    return $node.is('.processing') || $node.parents('.processing').length;
  };

  /**
   * Block a node visually for processing.
   *
   * @param {JQuery Object} $node
   */
  var block = function block($node) {
    if (!is_blocked($node)) {
      $node.addClass('processing').block({
        message: null,
        overlayCSS: {
          background: '#fff',
          opacity: 0.6
        }
      });
    }
  };

  /**
   * Unblock a node after processing is complete.
   *
   * @param {JQuery Object} $node
   */
  var unblock = function unblock($node) {
    $node.removeClass('processing').unblock();
  };

  // Handle remove product in cart 
  $(document).on('click', '.woocommerce-cart-form .product-remove-cart > a', function (evt) {
    evt.preventDefault();
    var $a = $(evt.currentTarget);
    var $form = $a.parents('form');
    block($form);
    block($('div.cart_totals'));
    $.ajax({
      type: 'GET',
      url: $a.attr('href'),
      dataType: 'html',
      success: function success(response) {
        $a.parent().parent().remove();
      },
      complete: function complete() {
        unblock($form);
        unblock($('div.cart_totals'));
      }
    });
  });
});

/**
 * Toggle submenus in the main menu.
 */
function toggleSubMenu() {
  'use strict';

  $('.menu__item--has-children > a').click(function (e) {
    e.preventDefault();
    var toOpen = true;

    // If this submenu is already open we just need to close any open submenus.
    if ($(this).hasClass('menu__link--is-active')) {
      toOpen = false;
    }

    // Close any open submenus.
    $('.menu__item--has-children > a').removeClass('menu__link--is-active').next().removeClass('menu__sub-menu--is-visible');

    // remove body overlay
    $('.body-overlay').removeClass('body-overlay--is-active body-overlay--is-active--submenu');
    $('.body-overlay').fadeOut(150);

    // Open if needed.
    if (toOpen) {
      $(this).toggleClass('menu__link--is-active');
      $(this).next().toggleClass('menu__sub-menu--is-visible');

      // add body overlay
      $('.body-overlay').toggleClass('body-overlay--is-active body-overlay--is-active--submenu');
      $('.body-overlay').fadeIn(150);

      // close search field
      $('.header-search__form-wrap').removeClass('header-search--is-open');
      $('.header-search__button').removeClass('active');
    }
  });

  // Menu mobile

  $('.nav__link').click(function (e) {
    e.preventDefault();
    $(this).siblings().addClass('is-active');
  });
  $('.sub__close').click(function (e) {
    e.preventDefault();
    $(this).parent().parent().removeClass('is-active');
  });
  $('.icon-hamburger').on('click', function (e) {
    $('.nav-menu-mobile').addClass('active');
    $('.menu-mobile-overlay').addClass('is-open');
  });
  $('.close-nav-btn').on('click', function () {
    $('.nav-menu-mobile').removeClass('active');
    $('.menu-mobile-overlay').removeClass('is-open');
  });
}
function togglemobileSubMenu() {
  'use strict';

  var menuParent = $('.menu-mobile__item--has-children');
  if (menuParent.hasClass('menu-mobile__item--current-ancestor')) {
    $('.menu-mobile__item--current-ancestor').addClass('menu-mobile__item--has-children--is-active');
  }
  menuParent.children('a').click(function (e) {
    e.preventDefault();
    var classActive = $(this).parent().hasClass('menu-mobile__item--has-children--is-active');
    menuParent.removeClass('menu-mobile__item--has-children--is-active');
    menuParent.children('.menu-mobile__sub-menu').slideUp(100);
    if (!classActive) {
      $(this).parent().addClass('menu-mobile__item--has-children--is-active');
      $('.menu-mobile__sub-menu', $(this).parent()).slideDown(100);
    }
  });
}

/**
 * Js for page register
 * @returns {undefined}
 */
function pageRegister() {
  if ($('body').hasClass('page-template-templatesregister-php')) {
    if ($('.text-error').length > 0) {
      $('html, body').animate({
        scrollTop: $($('.text-error').first()).offset().top - 300
      }, 500);
    }
  }
}

/**
 * Toggle the overlay menu on hamburger click.
 */
function toggleOverlayMenu() {
  'use strict';

  var hamburger = $('.hamburger');
  hamburger.click(function () {
    $('.menu-overlay').toggleClass('menu-overlay--open');
    hamburger.toggleClass('active');

    // Remove / add body overlay
    if ($('.menu-overlay').hasClass('menu-overlay--open')) {
      $('.body-overlay').addClass('body-overlay--is-active body-overlay--is-active--submenu');
      $('.body-overlay').fadeIn(150);
    } else {
      $('.body-overlay').removeClass('body-overlay--is-active body-overlay--is-active--submenu');
      $('.body-overlay').fadeOut(150);
    }

    // Remove search if visible
    $('.header-search__form-wrap').removeClass('header-search--is-open');
    $('.header-search__button').removeClass('active');
    $('.header-search__field').blur();
  });
  hamburger.mousedown(function (e) {
    e.preventDefault();
  });
}

/**
 * Stop scroll of main body when swiping on overlay menu.
 */
function handleOverlayScroll() {
  'use strict';

  var overlay = $('menu-overlay').first();
  var overflow;
  $(window).on('load resize', function () {
    overflow = overlay.scrollHeight - $('#fixed').height();
  });
  overlay.on('touchmove', function () {
    if (overflow) {
      return true;
    }
    return false;
  });
}
function toggleSearch() {
  'use strict';

  $('.header-search__form-wrap').removeClass('header-search--is-open');
  var searchButton = $('.header-search__button');
  searchButton.click(function (e) {
    e.preventDefault();
    var toOpen = true;
    if ($('.header-search__form-wrap').hasClass('header-search--is-open')) {
      toOpen = false;
    }

    // Remove class active from search icon
    searchButton.removeClass('active');

    // Remove class active from hamburger
    $('.hamburger').removeClass('active');

    // remove mobile menu (menu overlay)
    if ($('.menu-overlay').hasClass('menu-overlay--open')) {
      $('.menu-overlay').removeClass('menu-overlay--open');
    }

    // remove body overlay
    $('.body-overlay').removeClass('body-overlay--is-active body-overlay--is-active--search');
    $('.body-overlay').fadeOut(150);

    // close search field
    $('.header-search__form-wrap').removeClass('header-search--is-open');
    $('.header-search__field').blur();

    // Open if needed.
    if (toOpen) {
      $('.header-search__form-wrap').toggleClass('header-search--is-open');
      $('.header-search__field').focus();

      // Add class active to search icon
      searchButton.addClass('active');

      // add body overlay
      $('.body-overlay').toggleClass('body-overlay--is-active body-overlay--is-active--search');
      $('.body-overlay').fadeIn(150);

      // Close any open submenus.
      $('.menu__item--has-children > a').removeClass('menu__link--is-active').next().removeClass('menu__sub-menu--is-visible');
    }
  });
}
function removeBodyOverlay() {
  'use strict';

  var hamburger = $('.hamburger');
  var menuOverlay = $('.menu-overlay');
  var searchButton = $('.header-search__button');
  $('.body-overlay, .header-search__form__footer__close').click(function (e) {
    e.preventDefault();

    // remove body overlay
    $('.body-overlay').removeClass('body-overlay--is-active body-overlay--is-active--submenu');
    $('.body-overlay').removeClass('body-overlay--is-active body-overlay--is-active--search');
    $('.body-overlay').fadeOut(150);
    if ($('.header-search__form-wrap').hasClass('header-search--is-open')) {
      $('.header-search__form-wrap').removeClass('header-search--is-open');
    }

    // Remove menu overlay
    if (menuOverlay.hasClass('menu-overlay--open')) {
      menuOverlay.removeClass('menu-overlay--open');
      hamburger.removeClass('active');
    }

    // Remove search button active state
    if (searchButton.hasClass('active')) {
      searchButton.removeClass('active');
    }

    // Close any open submenus.
    $('.menu__item--has-children > a').removeClass('menu__link--is-active').next().removeClass('menu__sub-menu--is-visible');
  });
}

// /**
//  * Plugin for sticky menu on scroll up.
//  * Based on https://osvaldas.info/examples/auto-hide-sticky-header/?reactive-plus.
//  */
// ;(function($, window, document, undefined) {
//   'use strict';

//   var elSelector = '.header-wrapper',
//     elClassScroll = 'header-wrapper--scrolling',
//     elClassScrollUp = 'header-wrapper--scrolling-up',
//     elClassScrollDown = 'header-wrapper--scrolling-down',
//     $element = $(elSelector);

//   if (!$element.length) {
//     return true;
//   }

//   var elHeight = 0,
//     elTop = 0,
//     $document = $(document),
//     dHeight = 0,
//     $window = $(window),
//     wHeight = 0,
//     wScrollCurrent = 0,
//     wScrollBefore = 0,
//     wScrollDiff = 0,
//     pageTop = 0;

//   // Service menu height. (Service menu only visible above 1040px)
//   if ( $window.width() > 1040 ) {
//     pageTop = 52;
//   }

//   $window.on('scroll', function() {
//     elHeight = $element.outerHeight() - pageTop;
//     dHeight = $document.height();
//     wHeight = $window.height();
//     wScrollCurrent = $window.scrollTop();
//     wScrollDiff = wScrollBefore - wScrollCurrent; // scroll difference. Negative if scrolled down, positive if scrolled up
//     elTop = parseInt($element.css('top')) + wScrollDiff; // current position plus scroll change

//     $element.toggleClass(elClassScroll, wScrollCurrent > 0); // toggles scrolling classname
//     $element.toggleClass(elClassScrollUp, wScrollDiff > 0); // toggles scrolling up classname
//     $element.toggleClass(elClassScrollDown, wScrollDiff < 0); // toggles scrolling down classname

//     if (wScrollCurrent <= 0) {
//       $element.css('top', pageTop); // scrolled to the very top; element sticks to the top
//     } else if (wScrollDiff > 0) {
//       $element.css('top', elTop > pageTop ? pageTop : elTop); // scrolled up; element slides in
//     } else if (wScrollDiff < 0) {
//       $element.css('top', Math.abs(elTop) > elHeight ? -elHeight : elTop); // scrolled down; element slides out
//     }

//     wScrollBefore = wScrollCurrent;
//   });

// })(jQuery, window, document);

// function Navigation() {
//     'use strict';
//     $('.wrap-category li').each(function () {
//         $(this).append('<span class="icon-arrow"></span>');
//     });

//     $('.wrap-category li .icon-arrow').on('click', function (e) {
//         console.log('arrow')
//         var text = $(this).prev('a').text();
//         var parent = $(this).closest('.wrap-category');
//         var sibling = parent.next('.wrap-sidebar');
//         parent.hide();
//         sibling.show();

//         //for mobile
//         $('.menu-account-menu-container #menu-service-menu-v3').hide();

//         $('.product-categories > li').each(function () {
//             var text_item = $(this).find('> a').text();
//             if(text_item == text) {
//               $('.product-categories > li').hide();
//               $(this).show();
//               return;
//             }
//         });
//     });

// }

// function btBackNav() {
//     'use strict';

//     $('.label-nav.back').on('click', function (e) {
//         var data_class = $(this).find('span:last-child').text();
//         if(data_class == '') {
//             var parent = $(this).closest('.wrap-sidebar');
//             var sibling = parent.prev('.wrap-category');
//             parent.hide();
//             sibling.show();
//             $('.menu-account-menu-container #menu-service-menu-v3').show();
//         } else {
//             var class_item = data_class.replace(/ /g, '.');
//             $('.' + class_item).removeAttr('style');
//             $('.' + class_item).children('.children').removeAttr('style');
//             $('.' + class_item).parent('.children').removeClass('open-sub');
//             $(this).find('span:last-child').remove();
//         }
//     });
// }

function toggleNavMobile() {
  'use strict';

  $('.icon-hamburger').on('click', function (e) {
    $('html').toggleClass('menu--opened');
  });
}
function openSubNav() {
  'use strict';

  $('.widget_product_categories > ul > li ul li.cat-parent > .count').on('click', function (e) {
    var parent_ul = $(this).closest('.children');
    var parent_li = $(this).parent();
    var child_ul = $(this).next();
    parent_ul.addClass('open-sub');
    parent_li.show();
    child_ul.show();
    //data_class = parent_li.attr('class');
    $('.label-nav.back').append('<span>' + parent_li.attr('class') + '</span>');
  });
}
function menuServiceMobile() {
  'use strict';

  if ($(window).width() < 1041) {
    $('.menu-account-menu-container').append($('#menu-service-menu-v3'));
  }
}
function addToCartAjax() {
  // Update Cart when change quantity product
  if ($('.woocommerce-cart').length > 0) {
    $(document).on('change', '.product-quantity input[type="number"]', function () {
      setTimeout(function () {
        $.post(wc_add_to_cart_params.ajax_url, {
          'action': 'nordiccell_ajax_update_reload_cart',
          'data': $('.woocommerce-cart-form').serializeArray()
        }, function (response) {
          $('.post-content').html(response.data.woocommerce_cart);
          $(document.body).trigger('wc_fragment_refresh');
          $('.woocommerce-cart table.shop_table.cart').find('.qty').before('<input type="button" value="-" class="minus">').after('<input type="button" value="+" class="plus">');
          $('.woocommerce-cart table.shop_table.cart .quantity').addClass('buttons_added');
        });
        // $('.btn-update-cart').trigger('click');
      }, 100);
    });
  }
  $('#header-cart').hover(function () {
    $(this).addClass('hover');
  }, function () {
    $(this).removeClass('hover');
  });
  $('.single_add_to_cart_button').on('click', function (event) {
    if ($(this).hasClass('button-login-to-shop')) {
      return;
    }
    event.preventDefault();
    var $thisbutton = $(this);

    // Case group product;
    if ($(this).parents('.grouped_form').length > 0) {
      var listProducts = [];
      $('.woocommerce-grouped-product-list input.qty').each(function () {
        var qty = parseInt($(this).val());
        var productIds = $(this).attr('name');
        productIds = productIds.replaceAll('quantity[', '');
        productIds = productIds.replaceAll(']', '');
        productIds = parseInt(productIds);
        if (qty > 0 && productIds > 0) {
          listProducts.push({
            'product_id': productIds,
            'qty': qty
          });
        }
      });
      var data = {
        action: 'nordiccell_ajax_add_to_cart_group_products',
        listProducts: listProducts
      };
    } else {
      $thisbutton = $(this);
      $form = $thisbutton.closest('form.cart');
      id = $thisbutton.val();
      product_qty = $form.find('input[name=quantity]').val() || 1;
      product_id = $form.find('input[name=product_id]').val() || id;
      variation_id = $form.find('input[name=variation_id]').val() || 0;
      var data = {
        action: 'nordiccell_ajax_add_to_cart',
        product_id: product_id,
        product_sku: '',
        quantity: product_qty,
        variation_id: variation_id
      };
    }
    $.ajax({
      type: 'post',
      url: wc_add_to_cart_params.ajax_url,
      data: data,
      beforeSend: function beforeSend(response) {
        $thisbutton.removeClass('added').addClass('loading');
      },
      complete: function complete(response) {
        $thisbutton.addClass('added').removeClass('loading');
      },
      success: function success(response) {
        if (response.error & response.product_url) {
          window.location = response.product_url;
          return;
        } else {
          $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash]);

          //$('a[class="cart-contents"]').click();
          $('#header-cart').addClass('hover');
        }
      }
    });
    return false;
  });
}

// Checkout Page
$('.field-select-company').on('change', function () {
  var linkCheckout = $(this).attr('data-link');
  linkCheckout += "?company-id=" + $(this).val();
  window.location = linkCheckout;
});

/***/ }),

/***/ "./entries/base.js":
/*!*************************!*\
  !*** ./entries/base.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*
 * css
 */
__webpack_require__(/*! ../../css/base.css */ "../css/base.css");

/*
 * js
 */
__webpack_require__(/*! ../../js/base */ "../js/base.js");

/*
 * Static assets chunk
 */
var resolvers = {};
resolvers.index = function (cb) {
  'use strict';

  __webpack_require__.e(/*! require.ensure */ 1).then((function () {
    // fonts
    var fontsContext = cb(__webpack_require__("../fonts sync recursive \\.(woff(2)?|ttf|otf|eot|svg)$"));
    if (fontsContext.length >= 0) {
      fontsContext.keys().forEach(function (key) {
        fontsContext(key);
      });
    }

    // icons
    var iconsContext = cb(__webpack_require__("../icons sync recursive \\.(svg)$"));
    if (iconsContext.length >= 0) {
      iconsContext.keys().forEach(function (key) {
        iconsContext(key);
      });
    }

    // inlineIcons
    var inlineIconsContext = cb(__webpack_require__("../inline-icons sync recursive \\.(svg)$"));
    if (inlineIconsContext.length >= 0) {
      inlineIconsContext.keys().forEach(function (key) {
        inlineIconsContext(key);
      });
    }

    // img
    var imgContext = cb(__webpack_require__("../img sync recursive \\.(png|gif|jpe?g|svg)$"));
    if (imgContext.length >= 0) {
      imgContext.keys().forEach(function (key) {
        imgContext(key);
      });
    }
  }).bind(null, __webpack_require__)).catch(__webpack_require__.oe);
};

/***/ })

/******/ });
//# sourceMappingURL=base.js.map