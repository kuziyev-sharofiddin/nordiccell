/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);

( function( $ ) {
    // Your code goes here

    var ncrq = {

        init: function() {

            $('[data-modal="open"]').on('click', function(e) {
                e.preventDefault();
                $('body').addClass( 'modal-open' );
            });

            $(document).on('click', '[data-modal="close"]', function(e) {
                e.preventDefault();
                $('body').removeClass( 'modal-open' );
            });

            $(document).on( 'submit', '[data-rq-form]', function(e) {
                e.preventDefault();

                var data = $( this ).serialize();

                var button  = $('button', this),
                    loading = button.data('label-loading');

                button.prop('disabled', true).text( loading );

                ncrq.wpRestApi( this, data );
            })

        },

        wpRestApi: function( element, data ) {

            $('.alert').remove();

            var api = {}
            api.base = nordiccell_request_quote.apiUrl + nordiccell_request_quote.apiRoot,
            api.url = api.base + '/sendmail',
            api.nonce = nordiccell_request_quote.nonce,
            api.method = $(element).attr( 'method' ),
            api.params = data;

            $.ajax( {
                url: api.url,
                method: api.method,
                beforeSend: function ( xhr ) {
                    xhr.setRequestHeader( 'X-WP-Nonce', api.nonce );
                },
                data: api.params
            } ).done( function ( response ) {
                // console.log(element);
                // console.log($(element).find('[data-modal="close"]').trigger('click'));
                $('[data-modal="close"]').trigger('click');
                show_notice('<div class="woocommerce-message" role="alert">' + response.message + '</div>');

            } ).fail( function(  jqXHR, textStatus, errorThrown  ) {

                $(element).prepend( '<div class="woocommerce-error">' + jqXHR.responseJSON.message + '</div>' );

                $('.nordiccell__modal_dialog_body').scrollTop(0);

                if( jqXHR.responseJSON.hasOwnProperty('additional_errors') && jqXHR.responseJSON.additional_errors.length > 0 ) {
                    $.each( jqXHR.responseJSON.additional_errors, function(i, d) {

                        $('[name="' + d.code + '"]', element).after( '<div class="woocommerce-error">' + d.message + '</div>' );

                    });
                }

            } ).always( function() {
                var button  = $('button', element),
                    text = button.data('label');

                button.prop('disabled', false).text( text );
            } );
        }
    }

    ncrq.init();

    /**
	 * Shows new notices on the page.
	 *
	 * @param {Object} The Notice HTML Element in string or object form.
	 */
	  var show_notice = function( html_element, $target ) {
		if ( ! $target ) {
			$target = $( '.woocommerce-notices-wrapper:first' ) || $( '.cart-empty' ).closest( '.woocommerce' ) || $( '.woocommerce-cart-form' );
		}
		$target.prepend( html_element );
	};

} )( jQuery );


/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);