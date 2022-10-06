<?php 
	// Include the database configuration file  
	require_once 'dbConfig.php';
    session_start();
 ?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
      <title> New Samrat Electronics </title>
      <link rel="shortcut icon" href="cdn.samrat.com/s/files/1/0065/3095/7363/files/favicon-metal_1x_8c5a84a5-269e-4253-9f37-8607fe4b269d_96x962e70.png?v=1563383053" type="image/png">
      <link rel="preload" as="style" href="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/themeb4dd.css?v=13131973172680316835">
      <link rel="preload" as="script" href="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/theme.min6348.js?v=13286664686911929253">
       <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- References: https://github.com/fancyapps/fancyBox -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	  <style>
         /* We load the font used for the integration with Shopify Reviews to load our own stars */
         @font-face {
         font-family: "font-theme-star";
         format("embedded-opentype"), url(//cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/font-theme-star.woff2?v=17697727674120249312) format("woff2"), url(//cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/font-theme-star.ttf?v=1752756936325729076) format("truetype");
         font-weight: normal;
         font-style: normal;
         font-display: fallback;
         }
         @font-face {
         font-family: "DIN Next";
         font-weight: 500;
         font-style: normal;
         font-display: fallback;
         }
         @font-face {
         font-family: "DIN Next";
         font-weight: 400;
         font-style: normal;
         font-display: fallback;
         }
         @font-face {
         font-family: "DIN Next";
         font-weight: 500;
         font-style: normal;
         font-display: fallback;
         }
         @font-face {
         font-family: "DIN Next";
         font-weight: 500;
         font-style: italic;
         font-display: fallback;
         }
         @font-face {
         font-family: "DIN Next";
         font-weight: 700;
         font-style: normal;
         font-display: fallback;
         }
         @font-face {
         font-family: "DIN Next";
         font-weight: 400;
         font-style: italic;
         font-display: fallback;
         }
         @font-face {
         font-family: "DIN Next";
         font-weight: 700;
         font-style: italic;
         font-display: fallback;
         }
         :root {
         --default-text-font-size : 15px;
         --base-text-font-size    : 16px;
         --heading-font-family    : "DIN Next", sans-serif;
         --heading-font-weight    : 500;
         --heading-font-style     : normal;
         --text-font-family       : "DIN Next", sans-serif;
         --text-font-weight       : 400;
         --text-font-style        : normal;
         --text-font-bolder-weight: 500;
         --text-link-decoration   : underline;
         --text-color               : #677279;
         --text-color-rgb           : 103, 114, 121;
         --heading-color            : #1e2d7d;
         --border-color             : #e1e3e4;
         --border-color-rgb         : 225, 227, 228;
         --form-border-color        : #d4d6d8;
         --accent-color             : #00badb;
         --accent-color-rgb         : 0, 186, 219;
         --link-color               : #00badb;
         --link-color-hover         : #00798e;
         --background               : #f3f5f6;
         --secondary-background     : #ffffff;
         --secondary-background-rgb : 255, 255, 255;
         --accent-background        : rgba(0, 186, 219, 0.08);
         --error-color       : #ff0000;
         --error-background  : rgba(255, 0, 0, 0.07);
         --success-color     : #00c200;
         --success-background: rgba(0, 194, 0, 0.11);
         --primary-button-background      : #00badb;
         --primary-button-background-rgb  : 0, 186, 219;
         --primary-button-text-color      : #ffffff;
         --secondary-button-background    : #1e2d7d;
         --secondary-button-background-rgb: 30, 45, 125;
         --secondary-button-text-color    : #ffffff;
         --header-background      : #1e2d7d;
         --header-text-color      : #ffffff;
         --header-light-text-color: #a3afef;
         --header-border-color    : rgba(163, 175, 239, 0.3);
         --header-accent-color    : #00badb;
         --flickity-arrow-color: #abb1b4;--product-on-sale-accent           : #ee0000;
         --product-on-sale-accent-rgb       : 238, 0, 0;
         --product-on-sale-color            : #ffffff;
         --product-in-stock-color           : #008a00;
         --product-low-stock-color          : #ff0000;
         --product-sold-out-color           : #8a9297;
         --product-custom-label-1-background: #008a00;
         --product-custom-label-1-color     : #ffffff;
         --product-custom-label-2-background: #0774d7;
         --product-custom-label-2-color     : #ffffff;
         --product-review-star-color        : #ffbd00;
         --mobile-container-gutter : 20px;
         --desktop-container-gutter: 40px;
         }
		

		
		 
      </style>
	  
      <script>
         // IE11 does not have support for CSS variables, so we have to polyfill them
         if (!(((window || {}).CSS || {}).supports && window.CSS.supports('(--a: 0)'))) {
           const script = document.createElement('script');
           script.type = 'text/javascript';
           script.src = 'https://cdn.jsdelivr.net/npm/css-vars-ponyfill@2';
           script.onload = function() {
             cssVars({});
           };
         
           document.getElementsByTagName('head')[0].appendChild(script);
         }
      </script>
      <script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
      <script>(function() {
         function asyncLoad() {
          // var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=warehouse-theme-metal.myshopify.com"];
           for (var i = 0; i < urls.length; i++) {
             var s = document.createElement('script');
             s.type = 'text/javascript';
             s.async = true;
             s.src = urls[i];
             var x = document.getElementsByTagName('script')[0];
             x.parentNode.insertBefore(s, x);
           }
         };
         if(window.attachEvent) {
           window.attachEvent('onload', asyncLoad);
         } else {
           window.addEventListener('load', asyncLoad, false);
         }
         })();
      </script>
      <script>window.ShopifyPaypalicsObject'V4VisibilityTracking = true;</script>
      <script>window['GoogleAnalyt] = 'ga';
         window['ga'] = window['ga'] || function() {
           (window['ga'].q = window['ga'].q || []).push(arguments);
         };
         window['ga'].l = 1 * new Date();
      </script>
      <script>var _gaUTrackerOptions = {'allowLinker': true};ga('create', 'UA-51314466-18', 'auto', _gaUTrackerOptions);ga('send', 'pageview');
         (function(){
           ga('require', 'linker');
           function addListener(element, type, callback) {
             if (element.addEventListener) {
               element.addEventListener(type, callback);
             }
             else if (element.attachEvent) {
               element.attachEvent('on' + type, callback);
             }
           }
           function decorate(event) {
             event = event || window.event;
             var target = event.target || event.srcElement;
             if (target && (target.action || target.href)) {
               ga(function (tracker) {
                 var linkerParam = tracker.get('linkerParam');
                 document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
               });
             }
           }
           addListener(window, 'load', function(){
             for (var i=0; i<document.forms.length; i++) {
               if(document.forms[i].action && document.forms[i].action.indexOf('/cart') >= 0) {
                 addListener(document.forms[i], 'submit', decorate);
               }
             }
             for (var i=0; i<document.links.length; i++) {
               if(document.links[i].href && document.links[i].href.indexOf('/checkout') >= 0) {
                 addListener(document.links[i], 'click', decorate);
               }
             }
           })
         }());
      </script>
      <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
         window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
         window.ShopifyAnalytics.meta.currency = 'USD';
         var meta = {"page":{"pageType":"home"}};
         for (var attr in meta) {
           window.ShopifyAnalytics.meta[attr] = meta[attr];
         }
      </script>
      <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
         };
      </script>
      <script class="analytics">(function () {
         var customDocumentWrite = function(content) {
           var jquery = null;
         
           if (window.jQuery) {
             jquery = window.jQuery;
           } else if (window.Checkout && window.Checkout.$) {
             jquery = window.Checkout.$;
           }
         
           if (jquery) {
             jquery('body').append(content);
           }
         };
         
         var isDuplicatedThankYouPageView = function() {
           return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
         }
         
         var setCookieIfThankYouPage = function() {
           if (window.location.pathname.indexOf('/checkouts') !== -1 &&
               window.location.pathname.indexOf('/thank_you') !== -1) {
         
             var twoMonthsFromNow = new Date(Date.now());
             twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);
         
             document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
           }
         }
         
         var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
         if (trekkie.integrations) {
           return;
         }
         trekkie.methods = [
           'identify',
           'page',
           'ready',
           'track',
           'trackForm',
           'trackLink'
         ];
         trekkie.factory = function(method) {
           return function() {
             var args = Array.prototype.slice.call(arguments);
             args.unshift(method);
             trekkie.push(args);
             return trekkie;
           };
         };
         for (var i = 0; i < trekkie.methods.length; i++) {
           var key = trekkie.methods[i];
           trekkie[key] = trekkie.factory(key);
         }
         trekkie.load = function(config) {
           trekkie.config = config;
           var script = document.createElement('script');
           script.type = 'text/javascript';
           script.async = true;
           script.src = '../cdn.samrat.com/s/javascripts/tricorder/trekkie.storefront.mindd82.js?v=2020.07.13.1';
           var first = document.getElementsByTagName('script')[0];
           first.parentNode.insertBefore(script, first);
         };
         trekkie.load(
           {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":6530957363,"isMerchantRequest":null,"themeId":82177949747,"themeCityHash":"9641549556334653110","contentLanguage":"en","currency":"USD"},"isServerSideCookieWritingEnabled":true,"isPixelGateEnabled":false},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1},"Session Attribution":{}}
         );
         
         var loaded = false;
         trekkie.ready(function() {
           if (loaded) return;
           loaded = true;
         
           window.ShopifyAnalytics.lib = window.trekkie;
           
         
           var originalDocumentWrite = document.write;
           document.write = customDocumentWrite;
           try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
           document.write = originalDocumentWrite;
             (function () {
               if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                 return;
               }
               window.BOOMR = window.BOOMR || {};
               window.BOOMR.snippetStart = new Date().getTime();
               window.BOOMR.snippetExecuted = true;
               window.BOOMR.snippetVersion = 12;
               window.BOOMR.application = "storefront-renderer";
               window.BOOMR.shopId = 6530957363;
               window.BOOMR.themeId = 82177949747;
               window.BOOMR.url =
                 "../cdn.samrat.com/shopifycloud/boomerang/samrat-boomerang-1.0.0.min.js";
               var where = document.currentScript || document.getElementsByTagName("script")[0];
               var parentNode = where.parentNode;
               var promoted = false;
               var LOADER_TIMEOUT = 3000;
               function promote() {
                 if (promoted) {
                   return;
                 }
                 var script = document.createElement("script");
                 script.id = "boomr-scr-as";
                 script.src = window.BOOMR.url;
                 script.async = true;
                 parentNode.appendChild(script);
                 promoted = true;
               }
               function iframeLoader(wasFallback) {
                 promoted = true;
                 var dom, bootstrap, iframe, iframeStyle;
                 var doc = document;
                 var win = window;
                 window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                 bootstrap = function(parent, scriptId) {
                   var script = doc.createElement("script");
                   script.id = scriptId || "boomr-if-as";
                   script.src = window.BOOMR.url;
                   BOOMR_lstart = new Date().getTime();
                   parent = parent || doc.body;
                   parent.appendChild(script);
                 };
                 if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                   window.BOOMR.snippetMethod = "s";
                   bootstrap(parentNode, "boomr-async");
                   return;
                 }
                 iframe = document.createElement("IFRAME");
                 iframe.src = "about:blank";
                 iframe.title = "";
                 iframe.role = "presentation";
                 iframe.loading = "eager";
                 iframeStyle = (iframe.frameElement || iframe).style;
                 iframeStyle.width = 0;
                 iframeStyle.height = 0;
                 iframeStyle.border = 0;
                 iframeStyle.display = "none";
                 parentNode.appendChild(iframe);
                 try {
                   win = iframe.contentWindow;
                   doc = win.document.open();
                 } catch (e) {
                   dom = document.domain;
                   iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                   win = iframe.contentWindow;
                   doc = win.document.open();
                 }
                 if (dom) {
                   doc._boomrl = function() {
                     this.domain = dom;
                     bootstrap();
                   };
                   doc.write("<body onload='document._boomrl();'>");
                 } else {
                   win._boomrl = function() {
                     bootstrap();
                   };
                   if (win.addEventListener) {
                     win.addEventListener("load", win._boomrl, false);
                   } else if (win.attachEvent) {
                     win.attachEvent("onload", win._boomrl);
                   }
                 }
                 doc.close();
               }
               var link = document.createElement("link");
               if (link.relList &&
                 typeof link.relList.supports === "function" &&
                 link.relList.supports("preload") &&
                 ("as" in link)) {
                 window.BOOMR.snippetMethod = "p";
                 link.href = window.BOOMR.url;
                 link.rel = "preload";
                 link.as = "script";
                 link.addEventListener("load", promote);
                 link.addEventListener("error", function() {
                   iframeLoader(true);
                 });
                 setTimeout(function() {
                   if (!promoted) {
                     iframeLoader(true);
                   }
                 }, LOADER_TIMEOUT);
                 BOOMR_lstart = new Date().getTime();
                 parentNode.appendChild(link);
               } else {
                 iframeLoader(false);
               }
               function boomerangSaveLoadTime(e) {
                 window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
               }
               if (window.addEventListener) {
                 window.addEventListener("load", boomerangSaveLoadTime, false);
               } else if (window.attachEvent) {
                 window.attachEvent("onload", boomerangSaveLoadTime);
               }
               if (document.addEventListener) {
                 document.addEventListener("onBoomerangLoaded", function(e) {
                   e.detail.BOOMR.init({
                     producer_url: "#",
                     ResourceTiming: {
                       enabled: true,
                       trackedResourceTypes: ["script", "img", "css"]
                     },
                   });
                   e.detail.BOOMR.t_end = new Date().getTime();
                 });
               } else if (document.attachEvent) {
                 document.attachEvent("onpropertychange", function(e) {
                   if (!e) e=event;
                   if (e.propertyName === "onBoomerangLoaded") {
                     e.detail.BOOMR.init({
                       producer_url: "#",
                       ResourceTiming: {
                         enabled: true,
                         trackedResourceTypes: ["script", "img", "css"]
                       },
                     });
                     e.detail.BOOMR.t_end = new Date().getTime();
                   }
                 });
               }
             })();
           
         
           if (!isDuplicatedThankYouPageView()) {
             setCookieIfThankYouPage();
             
               window.ShopifyAnalytics.lib.page(
                 null,
                 {"pageType":"home"}
               );
             
             
           }
         });
         
         
             var eventsListenerScript = document.createElement('script');
             eventsListenerScript.async = true;
             eventsListenerScript.src = "cdn.samrat.com/s/assets/shop_events_listener-2632023fb2795bd6668b6fbae05b661baba07afb3d62048f023763eca3cd96e3.js";
             document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
           
         })();
      </script>
      <script>var storefrontFormsRecaptchaCallback = function() {
         grecaptcha.execute("6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9", { action: "contact_form" }).then(function(token) {
           var forms = document.querySelectorAll('form[action^="/contact"]');
         
           forms.forEach(function(form) {
             var contact_form_flag = form.querySelector('input[name="form_type"][value="contact"]');
         
             if(contact_form_flag === null) {
               return;
             }
         
             var tokenInput = form.querySelector('input[name=recaptcha-v3-token]');
             if (tokenInput instanceof HTMLElement) {
               tokenInput.setAttribute("value", token);
             }
             else {
               tokenInput = document.createElement("input");
               tokenInput.setAttribute("name", "recaptcha-v3-token");
               tokenInput.setAttribute("type", "hidden");
               tokenInput.setAttribute("value", token);
               form.appendChild(tokenInput, form);
             }
           });
         });
         };
      </script>
      <script>document.addEventListener('DOMContentLoaded', function() {
         // Look for a contact form
         var form = document.querySelector('form[action^="/contact"] input[name="form_type"][value="contact"]');
         if (form === null) {
           return;
         }
         
         // If found, inject reCAPTCHA V3
         var recaptchaV3Script = document.createElement("script");
         recaptchaV3Script.setAttribute("src", "../www.recaptcha.net/recaptcha/api73cd.js?onload=storefrontFormsRecaptchaCallback&amp;render=6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9&amp;hl=en");
         
         document.body.appendChild(recaptchaV3Script);
         
         return;
         });
      </script>
      <script>document.addEventListener('DOMContentLoaded', function() {
         // Look for reCAPTCHA disclaimer
         var spam_detection_disclaimer = document.querySelector('p[data-spam-detection-disclaimer]');
         
         if (spam_detection_disclaimer === null) {
           return;
         }
         
         var styleElement = document.createElement("style");
         
         document.head.appendChild(styleElement);
         
         // If found, hide the banner
         var styleSheet = styleElement.sheet;
         styleSheet.insertRule(".grecaptcha-badge { visibility: hidden; }");
         });
      </script>
      <script integrity="sha256-BFmLd7EQOpIHg76CWl9MJFqROXNgxiHNdyBpz5k0cRM=" crossorigin="anonymous" data-source-attribution="samrat.loadfeatures" defer="defer" src="cdn.samrat.com/s/assets/storefront/load_feature-04598b77b1103a920783be825a5f4c245a91397360c621cd772069cf99347113.js"></script>
      <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="samrat.dynamic-checkout" defer="defer" src="cdn.samrat.com/s/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
      <script async="async" src="../www.google-analytics.com/analytics.js"></script>
      <style id="samrat-dynamic-checkout">.samrat-payment-button__button--hidden {
         visibility: hidden;
         }
         .samrat-payment-button__button {
         border-radius: 4px;
         border: none;
         box-shadow: 0 0 0 0 transparent;
         color: white;
         cursor: pointer;
         display: block;
         font-size: 1em;
         font-weight: 500;
         line-height: 1;
         text-align: center;
         width: 100%;
         transition: background 0.2s ease-in-out;
         }
         .samrat-payment-button__button[disabled] {
         opacity: 0.6;
         cursor: default;
         }
         .samrat-payment-button__button--unbranded {
         background-color: #1990c6;
         padding: 1em 2em;
         }
         .samrat-payment-button__button--unbranded:hover:not([disabled]) {
         background-color: #136f99;
         }
         .samrat-payment-button__more-options {
         background: transparent;
         border: 0 none;
         cursor: pointer;
         display: block;
         font-size: 1em;
         margin-top: 1em;
         text-align: center;
         width: 100%;
         }
         .samrat-payment-button__more-options:hover:not([disabled]) {
         text-decoration: underline;
         }
         .samrat-payment-button__more-options[disabled] {
         opacity: 0.6;
         cursor: default;
         }
         .samrat-payment-button__button--branded {
         display: flex;
         flex-direction: column;
         min-height: 44px;
         position: relative;
         z-index: 1;
         }
         .samrat-payment-button__button--branded .samrat-cleanslate {
         flex: 1 !important;
         display: flex !important;
         flex-direction: column !important;
         }
      </style>
      <link rel="stylesheet" href="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/themeb4dd.css?v=13131973172680316835">
      <script>
         // This allows to expose several variables to the global scope, to be used in scripts
         window.theme = {
           pageType: "index",
           cartCount: 0,
           moneyFormat: "${{amount}}",
           moneyWithCurrencyFormat: "${{amount}} USD",
           showDiscount: true,
           discountMode: "saving",
           searchMode: "product,article,page",
           cartType: "drawer"
         };
         
         window.routes = {
           rootUrl: "\/",
           cartUrl: "\/cart",
           cartAddUrl: "\/cart\/add",
           cartChangeUrl: "\/cart\/change",
           searchUrl: "\/search",
           productRecommendationsUrl: "\/recommendations\/products"
         };
         
         window.languages = {
           collectionOnSaleLabel: "Save {{savings}}",
           productFormUnavailable: "Unavailable",
           productFormAddToCart: "Add to cart",
           productFormSoldOut: "Sold out",
           shippingEstimatorNoResults: "No shipping could be found for your address.",
           shippingEstimatorOneResult: "There is one shipping rate for your address:",
           shippingEstimatorMultipleResults: "There are {{count}} shipping rates for your address:",
           shippingEstimatorErrors: "There are some errors:"
         };
         
         window.lazySizesConfig = {
           loadHidden: false,
           hFac: 0.8,
           expFactor: 3,
           customMedia: {
             '--phone': '(max-width: 640px)',
             '--tablet': '(min-width: 641px) and (max-width: 1023px)',
             '--lap': '(min-width: 1024px)'
           }
         };
         
         document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      </script><script src="cdn.polyfill.io/v3/polyfill.mina617.js?unknown=polyfill&amp;features=fetch,Element.prototype.closest,Element.prototype.matches,Element.prototype.remove,Element.prototype.classList,Array.prototype.includes,Array.prototype.fill,String.prototype.includes,String.prototype.padStart,Object.assign,CustomEvent,Intl,URL,DOMTokenList,IntersectionObserver,IntersectionObserverEntry" defer></script>
      <script src="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/theme.min6348.js?v=13286664686911929253" defer></script>
      <script src="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/custom9167.js?v=9037325469167471270" defer></script>
      <script>
         (function () {
           window.onpageshow = function() {
             // We force re-freshing the cart content onpageshow, as most browsers will serve a cache copy when hitting the
             // back button, which cause staled data
             document.documentElement.dispatchEvent(new CustomEvent('cart:refresh', {
               bubbles: true,
               detail: {scrollToTop: false}
             }));
           };
         })();
      </script>
   </head>
   <body class="warehouse--v1 features--animate-zoom template-index " data-instant-intensity="viewport">
      <span class="loading-bar"></span>
	    <?php include "header.php";  ?>
	  
      <!--<div id="samrat-section-announcement-bar" class="samrat-section">
         <section data-section-id="announcement-bar" data-section-type="announcement-bar" data-section-settings='{
            "showNewsletter": true
            }'>
            <div id="announcement-bar-newsletter" class="announcement-bar__newsletter hidden-phone" aria-hidden="true">
               <div class="container">
                  <div class="announcement-bar__close-container">
                     <button class="announcement-bar__close" data-action="toggle-newsletter">
                        <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                           <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
            <div class="announcement-bar">
               <div class="container">
                  <div class="announcement-bar__inner">
                     <button type="button" class="announcement-bar__button hidden-phone" data-action="toggle-newsletter" aria-expanded="false" aria-controls="announcement-bar-newsletter">
                        <svg class="icon icon--newsletter" viewBox="0 0 20 17" role="presentation">
                           <path d="M19.1666667 0H.83333333C.37333333 0 0 .37995 0 .85v15.3c0 .47005.37333333.85.83333333.85H19.1666667c.46 0 .8333333-.37995.8333333-.85V.85c0-.47005-.3733333-.85-.8333333-.85zM7.20975004 10.8719018L5.3023283 12.7794369c-.14877889.1487878-.34409888.2235631-.53941886.2235631-.19531999 0-.39063998-.0747753-.53941887-.2235631-.29832076-.2983385-.29832076-.7805633 0-1.0789018L6.1309123 9.793l1.07883774 1.0789018zm8.56950946 1.9075351c-.1487789.1487878-.3440989.2235631-.5394189.2235631-.19532 0-.39064-.0747753-.5394189-.2235631L12.793 10.8719018 13.8718377 9.793l1.9074218 1.9075351c.2983207.2983385.2983207.7805633 0 1.0789018zm.9639048-7.45186267l-6.1248086 5.44429317c-.1706197.1516625-.3946127.2278826-.6186057.2278826-.223993 0-.447986-.0762201-.61860567-.2278826l-6.1248086-5.44429317c-.34211431-.30410267-.34211431-.79564457 0-1.09974723.34211431-.30410267.89509703-.30410267 1.23721134 0L9.99975 9.1222466l5.5062029-4.8944196c.3421143-.30410267.8950971-.30410267 1.2372114 0 .3421143.30410266.3421143.79564456 0 1.09974723z" fill="currentColor"></path>
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
         </section>
      </div>
<div id="samrat-section-header" class="samrat-section samrat-section__header">
        <section data-section-id="header" data-section-type="header" data-section-settings='{
            "navigationLayout": "inline",
            "desktopOpenTrigger": "hover",
            "useStickyHeader": true
            }'>
            <header class="header header--inline header--search-expanded" role="banner">
               <div class="container">
                  <div class="header__inner">
                     <nav class="header__mobile-nav hidden-lap-and-up">
                        <button class="header__mobile-nav-toggle icon-state touch-area" data-action="toggle-menu" aria-expanded="false" aria-haspopup="true" aria-controls="mobile-menu" aria-label="Open menu">
                           <span class="icon-state__primary">
                              <svg class="icon icon--hamburger-mobile" viewBox="0 0 20 16" role="presentation">
                                 <path d="M0 14h20v2H0v-2zM0 0h20v2H0V0zm0 7h20v2H0V7z" fill="currentColor" fill-rule="evenodd"></path>
                              </svg>
                           </span>
                           <span class="icon-state__secondary">
                              <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                 <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                              </svg>
                           </span>
                        </button>
                        <div id="mobile-menu" class="mobile-menu" aria-hidden="true">
                           <svg class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                              <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                           </svg>
                           <div class="mobile-menu__inner">
                              <div class="mobile-menu__panel">
                                 <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu">
                                       <li class="mobile-menu__nav-item"><a href="collections/new-arrivals.html" class="mobile-menu__nav-link" data-type="menuitem">New Arrivals</a></li>
                                       <li class="mobile-menu__nav-item"><a href="collections.html" class="mobile-menu__nav-link" data-type="menuitem">All Collections</a></li>
                                       <li class="mobile-menu__nav-item"><a href="pages/contact-us.html" class="mobile-menu__nav-link" data-type="menuitem">Contact</a></li>
                                    </ul>
                                 </div>
                                 <div class="mobile-menu__section mobile-menu__section--loose">
                                    <p class="mobile-menu__section-title heading h5">Need help?</p>
                                    <div class="mobile-menu__help-wrapper">
                                       <svg class="icon icon--bi-phone" viewBox="0 0 24 24" role="presentation">
                                          <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                             <path d="M17 15l-3 3-8-8 3-3-5-5-3 3c0 9.941 8.059 18 18 18l3-3-5-5z" stroke="#1e2d7d"></path>
                                             <path d="M14 1c4.971 0 9 4.029 9 9m-9-5c2.761 0 5 2.239 5 5" stroke="#00badb"></path>
                                          </g>
                                       </svg>
                                       <span>Call us +91 971015313</span>
                                    </div>
                                    <div class="mobile-menu__help-wrapper">
                                       <svg class="icon icon--bi-email" viewBox="0 0 22 22" role="presentation">
                                          <g fill="none" fill-rule="evenodd">
                                             <path stroke="#00badb" d="M.916667 10.08333367l3.66666667-2.65833334v4.65849997zm20.1666667 0L17.416667 7.42500033v4.65849997z"></path>
                                             <path stroke="#1e2d7d" stroke-width="2" d="M4.58333367 7.42500033L.916667 10.08333367V21.0833337h20.1666667V10.08333367L17.416667 7.42500033"></path>
                                             <path stroke="#1e2d7d" stroke-width="2" d="M4.58333367 12.1000003V.916667H17.416667v11.1833333m-16.5-2.01666663L21.0833337 21.0833337m0-11.00000003L11.0000003 15.5833337"></path>
                                             <path d="M8.25000033 5.50000033h5.49999997M8.25000033 9.166667h5.49999997" stroke="#00badb" stroke-width="2" stroke-linecap="square"></path>
                                          </g>
                                       </svg>
                                       <a href="mailto:info@newsmartelectronics.com">info@newsmartelectronics.com</a>
                                    </div>
                                 </div>
                                 <div class="mobile-menu__section mobile-menu__section--loose">
                                    <p class="mobile-menu__section-title heading h5">Follow Us</p>
                                    <ul class="social-media__item-list social-media__item-list--stack list--unstyled">
                                       <li class="social-media__item social-media__item--facebook">
                                          <a href="https://www.facebook.com/hideflifestyle" target="_blank" rel="noopener" aria-label="Follow us on Facebook">
                                             <svg class="icon icon--facebook" viewBox="0 0 30 30">
                                                <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm3.2142857-17.1429611h-2.1428678v-2.1425646c0-.5852979.8203285-1.07160109 1.0714928-1.07160109h1.071375v-2.1428925h-2.1428678c-2.3564786 0-3.2142536 1.98610393-3.2142536 3.21449359v2.1425646h-1.0714822l.0032143 2.1528011 1.0682679-.0099086v7.499969h3.2142536v-7.499969h2.1428678v-2.1428925z" fill="currentColor" fill-rule="evenodd"></path>
                                             </svg>
                                             Facebook
                                          </a>
                                       </li>
                                       <li class="social-media__item social-media__item--instagram">
                                          <a href="#" target="_blank" rel="noopener" aria-label="Follow us on Instagram">
                                             <svg class="icon icon--instagram" role="presentation" viewBox="0 0 30 30">
                                                <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm.0000159-23.03571429c-2.1823849 0-2.4560363.00925037-3.3131306.0483571-.8553081.03901103-1.4394529.17486384-1.9505835.37352345-.52841925.20532625-.9765517.48009406-1.42331254.926823-.44672894.44676084-.72149675.89489329-.926823 1.42331254-.19865961.5111306-.33451242 1.0952754-.37352345 1.9505835-.03910673.8570943-.0483571 1.1307457-.0483571 3.3131306 0 2.1823531.00925037 2.4560045.0483571 3.3130988.03901103.8553081.17486384 1.4394529.37352345 1.9505835.20532625.5284193.48009406.9765517.926823 1.4233125.44676084.446729.89489329.7214968 1.42331254.9268549.5111306.1986278 1.0952754.3344806 1.9505835.3734916.8570943.0391067 1.1307457.0483571 3.3131306.0483571 2.1823531 0 2.4560045-.0092504 3.3130988-.0483571.8553081-.039011 1.4394529-.1748638 1.9505835-.3734916.5284193-.2053581.9765517-.4801259 1.4233125-.9268549.446729-.4467608.7214968-.8948932.9268549-1.4233125.1986278-.5111306.3344806-1.0952754.3734916-1.9505835.0391067-.8570943.0483571-1.1307457.0483571-3.3130988 0-2.1823849-.0092504-2.4560363-.0483571-3.3131306-.039011-.8553081-.1748638-1.4394529-.3734916-1.9505835-.2053581-.52841925-.4801259-.9765517-.9268549-1.42331254-.4467608-.44672894-.8948932-.72149675-1.4233125-.926823-.5111306-.19865961-1.0952754-.33451242-1.9505835-.37352345-.8570943-.03910673-1.1307457-.0483571-3.3130988-.0483571zm0 1.44787387c2.1456068 0 2.3997686.00819774 3.2471022.04685789.7834742.03572556 1.2089592.1666342 1.4921162.27668167.3750864.14577303.6427729.31990322.9239522.60111439.2812111.28117926.4553413.54886575.6011144.92395217.1100474.283157.2409561.708642.2766816 1.4921162.0386602.8473336.0468579 1.1014954.0468579 3.247134 0 2.1456068-.0081977 2.3997686-.0468579 3.2471022-.0357255.7834742-.1666342 1.2089592-.2766816 1.4921162-.1457731.3750864-.3199033.6427729-.6011144.9239522-.2811793.2812111-.5488658.4553413-.9239522.6011144-.283157.1100474-.708642.2409561-1.4921162.2766816-.847206.0386602-1.1013359.0468579-3.2471022.0468579-2.1457981 0-2.3998961-.0081977-3.247134-.0468579-.7834742-.0357255-1.2089592-.1666342-1.4921162-.2766816-.37508642-.1457731-.64277291-.3199033-.92395217-.6011144-.28117927-.2811793-.45534136-.5488658-.60111439-.9239522-.11004747-.283157-.24095611-.708642-.27668167-1.4921162-.03866015-.8473336-.04685789-1.1014954-.04685789-3.2471022 0-2.1456386.00819774-2.3998004.04685789-3.247134.03572556-.7834742.1666342-1.2089592.27668167-1.4921162.14577303-.37508642.31990322-.64277291.60111439-.92395217.28117926-.28121117.54886575-.45534136.92395217-.60111439.283157-.11004747.708642-.24095611 1.4921162-.27668167.8473336-.03866015 1.1014954-.04685789 3.247134-.04685789zm0 9.26641182c-1.479357 0-2.6785873-1.1992303-2.6785873-2.6785555 0-1.479357 1.1992303-2.6785873 2.6785873-2.6785873 1.4793252 0 2.6785555 1.1992303 2.6785555 2.6785873 0 1.4793252-1.1992303 2.6785555-2.6785555 2.6785555zm0-6.8050167c-2.2790034 0-4.1264612 1.8474578-4.1264612 4.1264612 0 2.2789716 1.8474578 4.1264294 4.1264612 4.1264294 2.2789716 0 4.1264294-1.8474578 4.1264294-4.1264294 0-2.2790034-1.8474578-4.1264612-4.1264294-4.1264612zm5.2537621-.1630297c0-.532566-.431737-.96430298-.964303-.96430298-.532534 0-.964271.43173698-.964271.96430298 0 .5325659.431737.964271.964271.964271.532566 0 .964303-.4317051.964303-.964271z" fill="currentColor" fill-rule="evenodd"></path>
                                             </svg>
                                             Instagram
                                          </a>
                                       </li>
                                       <li class="social-media__item social-media__item--pinterest">
                                          <a href="#" target="_blank" rel="noopener" aria-label="Follow us on Pinterest">
                                             <svg class="icon icon--pinterest" role="presentation" viewBox="0 0 30 30">
                                                <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm-.4492946-22.49876954c-.3287968.04238918-.6577148.08477836-.9865116.12714793-.619603.15784625-1.2950238.30765013-1.7959124.60980792-1.3367356.80672832-2.26284291 1.74754848-2.88355361 3.27881599-.1001431.247352-.10374313.4870343-.17702448.7625149-.47574032 1.7840923.36779138 3.6310327 1.39120339 4.2696951.1968419.1231267.6448551.3405257.8093833.0511377.0909873-.1603963.0706852-.3734014.1265202-.5593764.036883-.1231267.1532436-.3547666.1263818-.508219-.0455542-.260514-.316041-.4256572-.4299438-.635367-.230748-.4253041-.2421365-.8027267-.3541701-1.3723228.0084116-.0763633.0168405-.1527266.0253733-.2290899.0340445-.6372108.1384107-1.0968422.3287968-1.5502554.5593198-1.3317775 1.4578212-2.07273488 2.9088231-2.5163011.324591-.09899963 1.2400541-.25867013 1.7200175-.1523539.2867042.05078464.5734084.10156927.8600087.1523539 1.0390064.33760307 1.7953931.9602003 2.2007079 1.9316992.252902.6061594.3275507 1.7651044.1517724 2.5415071-.0833199.3679287-.0705641.6832289-.1770418 1.0168107-.3936666 1.2334841-.9709174 2.3763639-2.2765854 2.6942337-.8613761.2093567-1.5070793-.3321303-1.7200175-.8896824-.0589159-.1545509-.1598205-.4285603-.1011297-.6865243.2277711-1.0010987.5562045-1.8969797.8093661-2.8969995.24115-.9528838-.2166421-1.7048063-.9358863-1.8809146-.8949186-.2192233-1.585328.6350139-1.8211644 1.1943903-.1872881.4442919-.3005678 1.2641823-.1517724 1.8557085.0471811.1874265.2666617.689447.2276672.8640842-.1728187.7731269-.3685356 1.6039823-.5818373 2.3635745-.2219729.7906632-.3415527 1.5999416-.5564641 2.3639276-.098793.3507651-.0955738.7263439-.1770244 1.092821v.5337977c-.0739045.3379758-.0194367.9375444.0505042 1.2703809.0449484.2137505-.0261175.4786388.0758948.6357396.0020943.1140055.0159752.1388388.0506254.2031582.3168026-.0095136.7526829-.8673992.9106342-1.118027.3008274-.477913.5797431-.990879.8093833-1.5506281.2069844-.5042174.2391769-1.0621226.4046917-1.60104.1195798-.3894861.2889369-.843272.328918-1.2707535h.0252521c.065614.2342095.3033024.403727.4805692.5334446.5563429.4077482 1.5137774.7873678 2.5547742.5337977 1.1769151-.2868184 2.1141687-.8571599 2.7317812-1.702982.4549537-.6225776.7983583-1.3445472 1.0624066-2.1600633.1297394-.4011574.156982-.8454494.2529193-1.2711066.2405269-1.0661438-.0797199-2.3511383-.3794396-3.0497261-.9078995-2.11694836-2.8374975-3.32410832-5.918897-3.27881604z" fill="currentColor" fill-rule="evenodd"></path>
                                             </svg>
                                             Pinterest
                                          </a>
                                       </li>
                                       <li class="social-media__item social-media__item--youtube">
                                          <a href="#" target="_blank" rel="noopener" aria-label="Follow us on YouTube">
                                             <svg class="icon icon--youtube" role="presentation" viewBox="0 0 30 30">
                                                <path d="M15 30c8.2842712 0 15-6.7157288 15-15 0-8.28427125-6.7157288-15-15-15C6.71572875 0 0 6.71572875 0 15c0 8.2842712 6.71572875 15 15 15zm7.6656364-18.7823145C23 12.443121 23 15 23 15s0 2.5567903-.3343636 3.7824032c-.184.6760565-.7260909 1.208492-1.4145455 1.3892823C20.0033636 20.5 15 20.5 15 20.5s-5.00336364 0-6.25109091-.3283145c-.68836364-.1807903-1.23054545-.7132258-1.41454545-1.3892823C7 17.5567903 7 15 7 15s0-2.556879.33436364-3.7823145c.184-.6761452.72618181-1.2085807 1.41454545-1.38928227C9.99663636 9.5 15 9.5 15 9.5s5.0033636 0 6.2510909.32840323c.6884546.18070157 1.2305455.71313707 1.4145455 1.38928227zm-9.302 6.103758l4.1818181-2.3213548-4.1818181-2.3215322v4.642887z" fill="currentColor" fill-rule="evenodd"></path>
                                             </svg>
                                             YouTube
                                          </a>
                                       </li>
                                       <li class="social-media__item social-media__item--linkedin">
                                          <a href="#" target="_blank" rel="noopener" aria-label="Follow us on LinkedIn">
                                             <svg class="icon icon--linkedin" role="presentation" viewBox="0 0 30 30">
                                                <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zM10.2456033 7.5c-.92709386 0-1.67417473.75112475-1.67417473 1.67662742 0 .92604418.74708087 1.67716898 1.67417473 1.67716898.9233098 0 1.6730935-.7511248 1.6730935-1.67716898C11.9186968 8.25112475 11.1689131 7.5 10.2456033 7.5zM8.80063428 21.4285714h2.88885682v-9.3037658H8.80063428v9.3037658zm4.69979822-9.3037658v9.3037658h2.8829104v-4.6015191c0-1.2141468.2292058-2.3898439 1.7309356-2.3898439 1.4811878 0 1.5001081 1.3879832 1.5001081 2.4667435v4.5246195H22.5V16.326122c0-2.5057349-.5400389-4.4320151-3.4618711-4.4320151-1.4044256 0-2.3466556.7711619-2.7315482 1.502791h-.0394623v-1.2720923h-2.7666859z" fill="currentColor" fill-rule="evenodd"></path>
                                             </svg>
                                             LinkedIn
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <!--<div id="mobile-panel-0" class="mobile-menu__panel is-nested">
                                 <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel">
                                       <svg class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                          <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                                       </svg>
                                       Back
                                    </button>
                                 </div>
                                 <div class="mobile-menu__section">
                                    <div class="mobile-menu__nav-list">
                                       <div class="mobile-menu__nav-list-item">
                                          <button class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-0" aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">
                                             Audio
                                             <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                                <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                             </svg>
                                          </button>
                                          <div id="mobile-list-0" class="mobile-menu__nav-collapsible">
                                             <div class="mobile-menu__nav-collapsible-content">
                                                <ul class="mobile-menu__nav" data-type="menu">
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/headphones.html" class="mobile-menu__nav-link" data-type="menuitem">Headphones</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/earbuds.html" class="mobile-menu__nav-link" data-type="menuitem">Earbuds</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/portable-speakers.html" class="mobile-menu__nav-link" data-type="menuitem">Portable Speakers</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/turntables.html" class="mobile-menu__nav-link" data-type="menuitem">Turntables</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/walkmans.html" class="mobile-menu__nav-link" data-type="menuitem">Walkmans</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/audio-accessories.html" class="mobile-menu__nav-link" data-type="menuitem">Audio Accessories</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/audio.html" class="mobile-menu__nav-link" data-type="menuitem">Shop All</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mobile-menu__nav-list-item">
                                          <button class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-1" aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">
                                             Hi-Fi
                                             <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                                <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                             </svg>
                                          </button>
                                          <div id="mobile-list-1" class="mobile-menu__nav-collapsible">
                                             <div class="mobile-menu__nav-collapsible-content">
                                                <ul class="mobile-menu__nav" data-type="menu">
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/speakers.html" class="mobile-menu__nav-link" data-type="menuitem">Speakers</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/subwoofers.html" class="mobile-menu__nav-link" data-type="menuitem">Subwoofers</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/sound-bars.html" class="mobile-menu__nav-link" data-type="menuitem">Sound Bars</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/amplifiers.html" class="mobile-menu__nav-link" data-type="menuitem">Amplifiers</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/home-cinema.html" class="mobile-menu__nav-link" data-type="menuitem">Home Cinema</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/a-v-receivers.html" class="mobile-menu__nav-link" data-type="menuitem">A/V Receivers</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/hi-fi.html" class="mobile-menu__nav-link" data-type="menuitem">Shop All</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mobile-menu__nav-list-item">
                                          <button class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-2" aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">
                                             TV & Entertainment
                                             <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                                <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                             </svg>
                                          </button>
                                          <div id="mobile-list-2" class="mobile-menu__nav-collapsible">
                                             <div class="mobile-menu__nav-collapsible-content">
                                                <ul class="mobile-menu__nav" data-type="menu">
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/led-tvs.html" class="mobile-menu__nav-link" data-type="menuitem">LED TVs</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/oled-tvs.html" class="mobile-menu__nav-link" data-type="menuitem">OLED TVs</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/projectors.html" class="mobile-menu__nav-link" data-type="menuitem">Projectors</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/blu-ray-dvd-players.html" class="mobile-menu__nav-link" data-type="menuitem">Blu-Ray & DVD Players</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/tv-accessories.html" class="mobile-menu__nav-link" data-type="menuitem">TV Accessories</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/tv-entertainment.html" class="mobile-menu__nav-link" data-type="menuitem">Shop All</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mobile-menu__nav-list-item">
                                          <button class="mobile-menu__nav-list-toggle text--strong" aria-controls="mobile-list-3" aria-expanded="false" data-action="toggle-collapsible" data-close-siblings="false">
                                             Our Selection
                                             <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                                <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                             </svg>
                                          </button>
                                          <div id="mobile-list-3" class="mobile-menu__nav-collapsible">
                                             <div class="mobile-menu__nav-collapsible-content">
                                                <ul class="mobile-menu__nav" data-type="menu">
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/waterproof.html" class="mobile-menu__nav-link" data-type="menuitem">Waterproof</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/portable.html" class="mobile-menu__nav-link" data-type="menuitem">Portable</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/bluetooth.html" class="mobile-menu__nav-link" data-type="menuitem">Bluetooth</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/accessories.html" class="mobile-menu__nav-link" data-type="menuitem">Accessories</a>
                                                   </li>
                                                   <li class="mobile-menu__nav-item">
                                                      <a href="collections/professional-audio.html" class="mobile-menu__nav-link" data-type="menuitem">Professional Audio</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mobile-menu__promo-item">
                                       <a href="collections/portable-speakers/brand_jbl.html" class="mobile-menu__promo">
                                          <div class="mobile-menu__image-wrapper">
                                             <div class="aspect-ratio" style="padding-bottom: 66.66666666666667%">
                                                <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/Header---2_550x.jpg?v=1559433650" alt="">
                                             </div>
                                          </div>
                                          <span class="mobile-menu__image-heading heading">New JBL Portable Speakers</span>
                                          <p class="mobile-menu__image-text">From $39.95 only!</p>
                                       </a>
                                    </div>
                                 </div>
                              </div> -->
                              <!-- <div id="mobile-panel-5" class="mobile-menu__panel is-nested">
                                 <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel">
                                       <svg class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                          <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                                       </svg>
                                       Back
                                    </button>
                                 </div>
                                 <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu">
                                       <li class="mobile-menu__nav-item">
                                          <a href="#" class="mobile-menu__nav-link text--strong">Information</a>
                                       </li>
                                       <li class="mobile-menu__nav-item"><a href="pages/meet-the-team.html" class="mobile-menu__nav-link" data-type="menuitem">Meet the team</a></li>
                                       <li class="mobile-menu__nav-item"><a href="pages/about.html" class="mobile-menu__nav-link" data-type="menuitem">About</a></li>
                                       <li class="mobile-menu__nav-item"><a href="pages/faq.html" class="mobile-menu__nav-link" data-type="menuitem">FAQ</a></li>
                                    </ul>
                                 </div>
                              </div> -->
                              <!-- <div id="mobile-panel-0-0" class="mobile-menu__panel is-nested">
                                 <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel">
                                       <svg class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                          <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                                       </svg>
                                       Back
                                    </button>
                                 </div>
                                 <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu">
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections.html" class="mobile-menu__nav-link text--strong">Audio</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/headphones.html" class="mobile-menu__nav-link" data-type="menuitem">Headphones</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/earbuds.html" class="mobile-menu__nav-link" data-type="menuitem">Earbuds</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/portable-speakers.html" class="mobile-menu__nav-link" data-type="menuitem">Portable Speakers</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/turntables.html" class="mobile-menu__nav-link" data-type="menuitem">Turntables</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/walkmans.html" class="mobile-menu__nav-link" data-type="menuitem">Walkmans</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/audio-accessories.html" class="mobile-menu__nav-link" data-type="menuitem">Audio Accessories</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/audio.html" class="mobile-menu__nav-link" data-type="menuitem">Shop All</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div> -->
                              <!-- <div id="mobile-panel-0-1" class="mobile-menu__panel is-nested">
                                 <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel">
                                       <svg class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                          <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                                       </svg>
                                       Back
                                    </button>
                                 </div>
                                 <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu">
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections.html" class="mobile-menu__nav-link text--strong">Hi-Fi</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/speakers.html" class="mobile-menu__nav-link" data-type="menuitem">Speakers</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/subwoofers.html" class="mobile-menu__nav-link" data-type="menuitem">Subwoofers</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/sound-bars.html" class="mobile-menu__nav-link" data-type="menuitem">Sound Bars</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/amplifiers.html" class="mobile-menu__nav-link" data-type="menuitem">Amplifiers</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/home-cinema.html" class="mobile-menu__nav-link" data-type="menuitem">Home Cinema</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/a-v-receivers.html" class="mobile-menu__nav-link" data-type="menuitem">A/V Receivers</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/hi-fi.html" class="mobile-menu__nav-link" data-type="menuitem">Shop All</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div> -->
                              <!-- <div id="mobile-panel-0-2" class="mobile-menu__panel is-nested">
                                 <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel">
                                       <svg class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                          <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                                       </svg>
                                       Back
                                    </button>
                                 </div>
                                 <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu">
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections.html" class="mobile-menu__nav-link text--strong">TV & Entertainment</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/led-tvs.html" class="mobile-menu__nav-link" data-type="menuitem">LED TVs</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/oled-tvs.html" class="mobile-menu__nav-link" data-type="menuitem">OLED TVs</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/projectors.html" class="mobile-menu__nav-link" data-type="menuitem">Projectors</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/blu-ray-dvd-players.html" class="mobile-menu__nav-link" data-type="menuitem">Blu-Ray & DVD Players</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/tv-accessories.html" class="mobile-menu__nav-link" data-type="menuitem">TV Accessories</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/tv-entertainment.html" class="mobile-menu__nav-link" data-type="menuitem">Shop All</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div> -->
                              <!-- <div id="mobile-panel-0-3" class="mobile-menu__panel is-nested">
                                 <div class="mobile-menu__section is-sticky">
                                    <button class="mobile-menu__back-button" data-action="close-panel">
                                       <svg class="icon icon--arrow-left" viewBox="0 0 8 12" role="presentation">
                                          <path stroke="currentColor" stroke-width="2" d="M6 10L2 6l4-4" fill="none" stroke-linecap="square"></path>
                                       </svg>
                                       Back
                                    </button>
                                 </div>
                                 <div class="mobile-menu__section">
                                    <ul class="mobile-menu__nav" data-type="menu">
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections.html" class="mobile-menu__nav-link text--strong">Our Selection</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/waterproof.html" class="mobile-menu__nav-link" data-type="menuitem">Waterproof</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/portable.html" class="mobile-menu__nav-link" data-type="menuitem">Portable</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/bluetooth.html" class="mobile-menu__nav-link" data-type="menuitem">Bluetooth</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/accessories.html" class="mobile-menu__nav-link" data-type="menuitem">Accessories</a>
                                       </li>
                                       <li class="mobile-menu__nav-item">
                                          <a href="collections/professional-audio.html" class="mobile-menu__nav-link" data-type="menuitem">Professional Audio</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div> 
                           </div>
                        </div>
                     </nav>
                     <h1 class="header__logo"><a href="index.html" class="header__logo-link"><img class="header__logo-image"
                        width="348"
                        height="64"
                        src=""                   
                        alt="New Smarat"></a></h1>
                     <div class="header__search-bar-wrapper is-visible">
                        <form action="#" method="get" role="search" class="search-bar">
                           <div class="search-bar__top-wrapper">
                              <div class="search-bar__top">
                                 <input type="hidden" name="type" value="product">
                                 <div class="search-bar__input-wrapper">
                                    <input class="search-bar__input" type="text" name="q" autocomplete="off" autocorrect="off" aria-label="Search..." placeholder="Search...">
                                    <button type="button" class="search-bar__input-clear hidden-lap-and-up" data-action="clear-input">
                                       <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                          <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                                       </svg>
                                    </button>
                                 </div>
                                 <div class="search-bar__filter">
                                    <label for="search-product-type" class="search-bar__filter-label">
                                       <span class="search-bar__filter-active">All categories</span>
                                       <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                          <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                       </svg>
                                    </label>
                                    <select id="search-product-type">
                                       <option value="" selected="selected">All categories</option>
                                       <option value="A/V Receivers">Washing Machine</option>
                                       <option value="Amplifiers">TV</option>
                                       <option value="Audio Accessories">Audio Accessories</option>
                                    </select>
                                 </div>
                                 <button type="submit" class="search-bar__submit" aria-label="Search">
                                    <svg class="icon icon--search" viewBox="0 0 21 21" role="presentation">
                                       <g stroke-width="2" stroke="currentColor" fill="none" fill-rule="evenodd">
                                          <path d="M19 19l-5-5" stroke-linecap="square"></path>
                                          <circle cx="8.5" cy="8.5" r="7.5"></circle>
                                       </g>
                                    </svg>
                                    <svg class="icon icon--search-loader" viewBox="0 0 64 64" role="presentation">
                                       <path opacity=".4" d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z"></path>
                                       <path d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z"></path>
                                    </svg>
                                 </button>
                              </div>
                              <button type="button" class="search-bar__close-button hidden-tablet-and-up" data-action="unfix-search">
                              <span class="search-bar__close-text">Close</span>
                              </button>
                           </div>
                           <div class="search-bar__inner">
                              <div class="search-bar__inner-animation">
                                 <div class="search-bar__results" aria-hidden="true">
                                    <div class="skeleton-container">
                                       <div class="search-bar__result-item search-bar__result-item--skeleton">
                                          <div class="search-bar__image-container">
                                             <div class="aspect-ratio aspect-ratio--square">
                                                <div class="skeleton-image"></div>
                                             </div>
                                          </div>
                                          <div class="search-bar__item-info">
                                             <div class="skeleton-paragraph">
                                                <div class="skeleton-text"></div>
                                                <div class="skeleton-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="search-bar__result-item search-bar__result-item--skeleton">
                                          <div class="search-bar__image-container">
                                             <div class="aspect-ratio aspect-ratio--square">
                                                <div class="skeleton-image"></div>
                                             </div>
                                          </div>
                                          <div class="search-bar__item-info">
                                             <div class="skeleton-paragraph">
                                                <div class="skeleton-text"></div>
                                                <div class="skeleton-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="search-bar__result-item search-bar__result-item--skeleton">
                                          <div class="search-bar__image-container">
                                             <div class="aspect-ratio aspect-ratio--square">
                                                <div class="skeleton-image"></div>
                                             </div>
                                          </div>
                                          <div class="search-bar__item-info">
                                             <div class="skeleton-paragraph">
                                                <div class="skeleton-text"></div>
                                                <div class="skeleton-text"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="search-bar__results-inner"></div>
                                 </div>
                                 <!-- <div class="search-bar__menu-wrapper" aria-hidden="true">
                                    <p class="search-bar__menu-title heading">Need some inspiration?</p>
                                    <ul class="search-bar__menu-linklist list--unstyled">
                                       <li>
                                          <a href="products/jbl-charge-3-portable-bluetooth-speaker.html" class="search-bar__menu-link">New In! JBL Charge 3</a>
                                       </li>
                                       <li>
                                          <a href="products/sony-xbr77a1e-77-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html" class="search-bar__menu-link">Sony 77-Inch 4K OLED TV</a>
                                       </li>
                                       <li>
                                          <a href="collections/bluetooth.html" class="search-bar__menu-link">Our Bluetooth Selection</a>
                                       </li>
                                       <li>
                                          <a href="products/klipsch-rp-600m-reference-premiere-bookshelf-speakers-pair.html" class="search-bar__menu-link">Klipsch Bookshelf Speakers</a>
                                       </li>
                                       <li>
                                          <a href="products/akg-n20u-reference-class-in-ear-headphones-with-truly-universal-3-button-control.html" class="search-bar__menu-link">AKG In-Ear Headphones</a>
                                       </li>
                                       <li>
                                          <a href="collections/sales.html" class="search-bar__menu-link">Our Sales</a>
                                       </li>
                                    </ul>
                                 </div> 
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="header__action-list">
                        <!-- <div class="header__action-item header__action-item--currency hidden-pocket">
                           <form method="post" action="https://warehouse-theme-metal.myshopify.com/localization" id="localization_form_header_currency" accept-charset="UTF-8" class="samrat-localization-form" enctype="multipart/form-data">
                              <input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/" /><span class="header__action-item-title">Currency</span>
                              <input type="hidden" name="currency_code" value="USD">
                              <div class="header__action-item-content">
                                 <button class="header__action-item-link" data-action="toggle-popover" aria-controls="desktop-currency-selector" aria-expanded="false">
                                    <span class="currency-selector__value">USD $</span> 
                                    <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                       <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                    </svg>
                                 </button>
                                 <div id="desktop-currency-selector" class="popover popover--currency" aria-hidden="true">
                                    <svg class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                       <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                    </svg>
                                    <div class="popover__inner popover__inner--no-padding">
                                       <ul class="popover__linklist">
                                          <li class="popover__linklist-item">
                                             <button type="submit" name="currency_code" class="popover__link-item" value="CAD" >
                                             CAD $
                                             </button>
                                          </li>
                                          <li class="popover__linklist-item">
                                             <button type="submit" name="currency_code" class="popover__link-item" value="EUR" >
                                             EUR €
                                             </button>
                                          </li>
                                          <li class="popover__linklist-item">
                                             <button type="submit" name="currency_code" class="popover__link-item" value="JPY" >
                                             JPY ¥
                                             </button>
                                          </li>
                                          <li class="popover__linklist-item">
                                             <button type="submit" name="currency_code" class="popover__link-item" value="USD" aria-current="true">
                                             USD $
                                             </button>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                           </form>
                           </div>
                        </div> 
                        <div class="header__action-item header__action-item--account">
                           <span class="header__action-item-title hidden-pocket hidden-lap">Login / Signup</span>
                           <div class="header__action-item-content">
                              <a href="account/login.html" class="header__action-item-link header__account-icon icon-state hidden-desk" aria-label="My account" aria-controls="account-popover" aria-expanded="false" data-action="toggle-popover" >
                                 <span class="icon-state__primary">
                                    <svg class="icon icon--account" viewBox="0 0 20 22" role="presentation">
                                       <path d="M10 13c2.82 0 5.33.64 6.98 1.2A3 3 0 0 1 19 17.02V21H1v-3.97a3 3 0 0 1 2.03-2.84A22.35 22.35 0 0 1 10 13zm0 0c-2.76 0-5-3.24-5-6V6a5 5 0 0 1 10 0v1c0 2.76-2.24 6-5 6z" stroke="currentColor" stroke-width="2" fill="none"></path>
                                    </svg>
                                 </span>
                                 <span class="icon-state__secondary">
                                    <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                       <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                                    </svg>
                                 </span>
                              </a>
                              <a href="account/login.html" class="header__action-item-link hidden-pocket hidden-lap" aria-controls="account-popover" aria-expanded="false" data-action="toggle-popover">
                                 My account 
                                 <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                    <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                 </svg>
                              </a>
                              <div id="account-popover" class="popover popover--large popover--unlogged" aria-hidden="true">
                                 <svg class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                 </svg>
                                 <div class="popover__panel-list">
                                    <div id="header-login-panel" class="popover__panel popover__panel--default is-selected">
                                       <div class="popover__inner">
                                          <form method="post" action="#" id="header_customer_login" accept-charset="UTF-8" name="login" class="form">
                                             <input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />
                                             <header class="popover__header">
                                                <h2 class="popover__title heading">Login to my account</h2>
                                                <p class="popover__legend">Enter your e-mail and password:</p>
                                             </header>
                                             <div class="form__input-wrapper form__input-wrapper--labelled">
                                                <input type="email" id="login-customer[email]" class="form__field form__field--text" name="customer[email]" required="required">
                                                <label for="login-customer[email]" class="form__floating-label">Email</label>
                                             </div>
                                             <div class="form__input-wrapper form__input-wrapper--labelled">
                                                <input type="password" id="login-customer[password]" class="form__field form__field--text" name="customer[password]" required="required" autocomplete="current-password">
                                                <label for="login-customer[password]" class="form__floating-label">Password</label>
                                             </div>
                                             <button type="submit" class="form__submit button button--primary button--full">Login</button>
                                          </form>
                                          <div class="popover__secondary-action">
                                             <p>New customer? <button data-action="show-popover-panel" aria-controls="header-register-panel" class="link link--accented">Create your account</button></p>
                                             <p>Lost password? <button data-action="show-popover-panel" aria-controls="header-recover-panel" class="link link--accented">Recover password</button></p>
                                          </div> 
                                       </div>
                                    </div>
                                    <!-- <div id="header-recover-panel" class="popover__panel popover__panel--sliding">
                                       <div class="popover__inner">
                                          <form method="post" action="https://warehouse-theme-metal.myshopify.com/account/recover" accept-charset="UTF-8" name="recover" class="form">
                                             <input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />
                                             <header class="popover__header">
                                                <h2 class="popover__title heading">Recover password</h2>
                                                <p class="popover__legend">Enter your email:</p>
                                             </header>
                                             <div class="form__input-wrapper form__input-wrapper--labelled">
                                                <input type="email" id="recover-customer[recover_email]" class="form__field form__field--text" name="email" required="required">
                                                <label for="recover-customer[recover_email]" class="form__floating-label">Email</label>
                                             </div>
                                             <button type="submit" class="form__submit button button--primary button--full">Recover</button>
                                          </form>
                                          <div class="popover__secondary-action">
                                             <p>Remembered your password? <button data-action="show-popover-panel" aria-controls="header-login-panel" class="link link--accented">Back to login</button></p>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div id="header-register-panel" class="popover__panel popover__panel--sliding">
                                       <div class="popover__inner">
                                          <form method="post" action="https://warehouse-theme-metal.myshopify.com/account" id="create_customer" accept-charset="UTF-8" name="create" class="form">
                                             <input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
                                             <header class="popover__header">
                                                <h2 class="popover__title heading">Create my account</h2>
                                                <p class="popover__legend">Please fill in the information below:</p>
                                             </header>
                                             <div class="form__input-wrapper form__input-wrapper--labelled">
                                                <input type="text" id="register-customer[first_name]" class="form__field form__field--text" name="customer[first_name]" required="required">
                                                <label for="register-customer[first_name]" class="form__floating-label">First name</label>
                                             </div>
                                             <div class="form__input-wrapper form__input-wrapper--labelled">
                                                <input type="text" id="register-customer[last_name]" class="form__field form__field--text" name="customer[last_name]" required="required">
                                                <label for="register-customer[last_name]" class="form__floating-label">Last name</label>
                                             </div>
                                             <div class="form__input-wrapper form__input-wrapper--labelled">
                                                <input type="email" id="register-customer[email]" class="form__field form__field--text" name="customer[email]" required="required">
                                                <label for="register-customer[email]" class="form__floating-label">Email</label>
                                             </div>
                                             <div class="form__input-wrapper form__input-wrapper--labelled">
                                                <input type="password" id="register-customer[password]" class="form__field form__field--text" name="customer[password]" required="required" autocomplete="new-password">
                                                <label for="register-customer[password]" class="form__floating-label">Password</label>
                                             </div>
                                             <button type="submit" class="form__submit button button--primary button--full">Create my account</button>
                                          </form>
                                          <div class="popover__secondary-action">
                                             <p>Already have an account? <button data-action="show-popover-panel" aria-controls="header-login-panel" class="link link--accented">Login here</button></p>
                                          </div>
                                       </div>
                                    </div> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="header__action-item header__action-item--cart">
                           <a class="header__action-item-link header__cart-toggle" href="#" aria-controls="mini-cart" aria-expanded="false" data-action="toggle-mini-cart">
                              <div class="header__action-item-content">
                                 <div class="header__cart-icon icon-state" aria-expanded="false">
                                   
                                    <span class="icon-state__secondary">
                                       <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                          <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                                       </svg>
                                    </span>
                                 </div>
                                <!--  <span class="hidden-pocket hidden-lap">Cart</span> 
                              </div>
                           </a>
                           <!-- <form method="post" action="https://warehouse-theme-metal.myshopify.com/cart" id="mini-cart" class="mini-cart" aria-hidden="true" novalidate="novalidate" data-item-count="0">
                              <input type="hidden" name="attributes[collection_products_per_page]" value="">
                              <input type="hidden" name="attributes[collection_layout]" value="">
                              <svg class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                 <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                              </svg>
                              <div class="mini-cart__content mini-cart__content--empty">
                                 <p class="alert alert--tight alert--center text--strong">Spend <span>$80</span> more and get free shipping!</p>
                                 <div class="mini-cart__empty-state">
                                    <svg width="81" height="70" viewBox="0 0 81 70">
                                       <g transform="translate(0 2)" stroke-width="4" stroke="#1e2d7d" fill="none" fill-rule="evenodd">
                                          <circle stroke-linecap="square" cx="34" cy="60" r="6"></circle>
                                          <circle stroke-linecap="square" cx="67" cy="60" r="6"></circle>
                                          <path d="M22.9360352 15h54.8070373l-4.3391876 30H30.3387146L19.6676025 0H.99560547"></path>
                                       </g>
                                    </svg>
                                    <p class="heading h4">Your cart is empty</p>
                                 </div>
                                 <a href="collections/all.html" class="button button--primary button--full">Shop our products</a>
                              </div>
                           </form> 
                        </div>
                     </div>
                  </div>
               </div>
            </header>-->
            <!-- <nav class="nav-bar">
               <div class="nav-bar__inner">
                  <div class="container">
                     <ul class="nav-bar__linklist list--unstyled" data-type="menu">
                        <li class="nav-bar__item">
                           <a href="collections.html" class="nav-bar__link link" data-type="menuitem" aria-expanded="false" aria-haspopup="true">
                              All Products
                              <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                 <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                              </svg>
                              <svg class="icon icon--nav-triangle" viewBox="0 0 20 9" role="presentation">
                                 <g fill="none" fill-rule="evenodd">
                                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                    <path d="M-.00922471 9C1.38887087 7.61849126 4.26661926 4.80337304 8.62402045.5546454c.75993175-.7409708 1.98812015-.7393145 2.74596565.0037073L19.9800494 9h-1.3748787l-7.9226239-7.7676545c-.3789219-.3715101-.9930172-.3723389-1.3729808-.0018557-3.20734177 3.1273507-5.6127118 5.4776841-7.21584193 7.05073579C1.82769633 8.54226204 1.58379521 8.7818599 1.36203986 9H-.00922471z" fill="#e1e3e4"></path>
                                 </g>
                              </svg>
                           </a>
                           <div id="dropdown-desktop-menu-0-1-mega-menu-0" class="mega-menu " data-type="menu" aria-hidden="true" >
                              <div class="container">
                                 <div class="mega-menu__inner mega-menu__inner--center mega-menu__inner--large">
                                    <div class="mega-menu__column">
                                       <span class="mega-menu__title heading">Audio</span>
                                       <ul class="mega-menu__linklist">
                                          <li class="mega-menu__item">
                                             <a href="collections/headphones.html" class="mega-menu__link link">Headphones</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/earbuds.html" class="mega-menu__link link">Earbuds</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/portable-speakers.html" class="mega-menu__link link">Portable Speakers</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/turntables.html" class="mega-menu__link link">Turntables</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/walkmans.html" class="mega-menu__link link">Walkmans</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/audio-accessories.html" class="mega-menu__link link">Audio Accessories</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/audio.html" class="mega-menu__link link">Shop All</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                       <span class="mega-menu__title heading">Hi-Fi</span>
                                       <ul class="mega-menu__linklist">
                                          <li class="mega-menu__item">
                                             <a href="collections/speakers.html" class="mega-menu__link link">Speakers</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/subwoofers.html" class="mega-menu__link link">Subwoofers</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/sound-bars.html" class="mega-menu__link link">Sound Bars</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/amplifiers.html" class="mega-menu__link link">Amplifiers</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/home-cinema.html" class="mega-menu__link link">Home Cinema</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/a-v-receivers.html" class="mega-menu__link link">A/V Receivers</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/hi-fi.html" class="mega-menu__link link">Shop All</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                       <span class="mega-menu__title heading">TV & Entertainment</span>
                                       <ul class="mega-menu__linklist">
                                          <li class="mega-menu__item">
                                             <a href="collections/led-tvs.html" class="mega-menu__link link">LED TVs</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/oled-tvs.html" class="mega-menu__link link">OLED TVs</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/projectors.html" class="mega-menu__link link">Projectors</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/blu-ray-dvd-players.html" class="mega-menu__link link">Blu-Ray & DVD Players</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/tv-accessories.html" class="mega-menu__link link">TV Accessories</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/tv-entertainment.html" class="mega-menu__link link">Shop All</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                       <span class="mega-menu__title heading">Our Selection</span>
                                       <ul class="mega-menu__linklist">
                                          <li class="mega-menu__item">
                                             <a href="collections/waterproof.html" class="mega-menu__link link">Waterproof</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/portable.html" class="mega-menu__link link">Portable</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/bluetooth.html" class="mega-menu__link link">Bluetooth</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/accessories.html" class="mega-menu__link link">Accessories</a>
                                          </li>
                                          <li class="mega-menu__item">
                                             <a href="collections/professional-audio.html" class="mega-menu__link link">Professional Audio</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <a href="collections/portable-speakers/brand_jbl.html" class="mega-menu__promo">
                                       <div class="mega-menu__image-wrapper">
                                          <div class="aspect-ratio" style="padding-bottom: 66.66666666666667%">
                                             <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/Header---2_550x.jpg?v=1559433650" alt="">
                                          </div>
                                       </div>
                                       <span class="mega-menu__image-heading heading h4">New JBL Portable Speakers</span>
                                       <p class="mega-menu__image-text">From $39.95 only!</p>
                                    </a>
                                 </div>
                              </div> 
                           </div>
                        </li>
                        <li class="nav-bar__item"><a href="collections/new-arrivals.html" class="nav-bar__link link" data-type="menuitem">New Arrivals</a></li>
                         <li class="nav-bar__item"><a href="collections/sales.html" class="nav-bar__link link" data-type="menuitem">Sales</a></li>
                        <li class="nav-bar__item"><a href="collections.html" class="nav-bar__link link" data-type="menuitem">All Collections</a></li>
                         <li class="nav-bar__item"><a href="pages/brands.html" class="nav-bar__link link" data-type="menuitem">Brands</a></li> 
                         <li class="nav-bar__item">
                           <a href="#" class="nav-bar__link link" data-type="menuitem" aria-expanded="false" aria-haspopup="true">
                              Information
                              <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                 <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                              </svg>
                              <svg class="icon icon--nav-triangle" viewBox="0 0 20 9" role="presentation">
                                 <g fill="none" fill-rule="evenodd">
                                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                    <path d="M-.00922471 9C1.38887087 7.61849126 4.26661926 4.80337304 8.62402045.5546454c.75993175-.7409708 1.98812015-.7393145 2.74596565.0037073L19.9800494 9h-1.3748787l-7.9226239-7.7676545c-.3789219-.3715101-.9930172-.3723389-1.3729808-.0018557-3.20734177 3.1273507-5.6127118 5.4776841-7.21584193 7.05073579C1.82769633 8.54226204 1.58379521 8.7818599 1.36203986 9H-.00922471z" fill="#e1e3e4"></path>
                                 </g>
                              </svg>
                           </a>
                           <ul id="dropdown-desktop-menu-0-6" class="nav-dropdown nav-dropdown--restrict" data-type="menu" aria-hidden="true">
                              <li class="nav-dropdown__item "><a href="pages/meet-the-team.html" class="nav-dropdown__link link" data-type="menuitem">Meet the team</a></li>
                              <li class="nav-dropdown__item "><a href="pages/about.html" class="nav-dropdown__link link" data-type="menuitem">About</a></li>
                              <li class="nav-dropdown__item "><a href="pages/faq.html" class="nav-dropdown__link link" data-type="menuitem">FAQ</a></li>
                           </ul>
                        </li> 
                       <li class="nav-bar__item"><a href="blogs/news.html" class="nav-bar__link link" data-type="menuitem">Blog</a></li> 
                        <li class="nav-bar__item"><a href="pages/contact-us.html" class="nav-bar__link link" data-type="menuitem">Contact</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </section>-->
         <style>
            :root {
            --header-is-sticky: 1;
            --header-inline-navigation: 1;
            }
            #samrat-section-header {
            position: relative;
            z-index: 5;position: -webkit-sticky;
            position: sticky;
            top: 0;}.header__logo-image {
            max-width: 140px;
            }
            @media screen and (min-width: 641px) {
            .header__logo-image {
            max-width: 175px;
            }
            }
         </style>
         <script>
            document.documentElement.style.setProperty('--header-height', document.getElementById('samrat-section-header').clientHeight + 'px');
         </script>
      </div>
      <main id="main" role="main">
         <!-- BEGIN content_for_index -->
         <div id="samrat-section-slideshow" class="samrat-section">
            <section data-section-id="slideshow" data-section-type="slideshow" data-section-settings='{
               "autoPlay": true,
               "prevNextButtons": false,
               "pageDots": true,
               "setGallerySize": false,
               "adaptiveHeight": false,
               "transitionEffect": "slide",
               "cycleSpeed": 5000
               }'>
               <link rel="preload" href="cdn.samrat.com/s/files/1/0065/3095/7363/files/slide-1-headphones-mobile_600x800_crop_center7609.jpg?v=1560283467" as="image" media="(max-width: 640px)">
               
               <div >
                  <div class="slideshow slideshow--medium slideshow--edge2edge" style="color: #ffffff">
                     <div class="slideshow__slide slideshow__slide--overlay is-selected" id="block-slide-0" data-block-index="0" >
                        <div class="slideshow__slide-inner slideshow__slide-inner--middle-center lazyload image--fade-in"  data-optimumx="1.4" data-sizes="auto">
						<img src="cdn.samrat.com/s/files/1/IMG-20190909-WA0019.jpg" alt="img" />
                           <div class="slideshow__content-wrapper">
                              <div class="container">
                                 <h2 class="slideshow__title heading h1" >Introducing: the Headphones Collection</h2>
                                 <p class="slideshow__content">Discover our selection of the best headphones of the year</p>
                                 <a href="#" class="slideshow__button button">Shop All Headphones</a>
                              </div>
                           </div>
                        </div>
                        <style>
                           #block-slide-0 {
                           color: #ffffff;
                           }
                           #block-slide-0 .button {
                           color: #ffffff;
                           background: #00badb;
                           }
                           #block-slide-0 .button:hover {
                           background: rgba(0, 186, 219, 0.8);
                           }#block-slide-0.slideshow__slide--overlay::before {background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
                           }
                        </style>
                        <noscript>
                           <style>
                              #block-slide-0 .slideshow__slide-inner {
                              background-image: url(cdn.samrat.com/s/files/1/slide-1-headphones_1800x (1).jpg)
                              }
                           </style>
                        </noscript>
                     </div>
                     <div class="slideshow__slide slideshow__slide--overlay " id="block-1559492406477" data-block-index="1" >
						<img src="cdn.samrat.com/s/files/1/home.jpg" alt="img" />
                           <div class="slideshow__content-wrapper">
                              <div class="container">
                                 <h2 class="slideshow__title heading h1">New JBL Portable Speakers</h2>
                                 <p class="slideshow__content">Discover the brand new speakers, by JBL</p>
                                 <a href="#s" class="slideshow__button button">Shop JBL Clip 3</a>
                              </div>
                           </div>
                     
                        <style>
                           #block-1559492406477 {
                           color: #ffffff;
                           }
                           #block-1559492406477 .button {
                           color: #ffffff;
                           background: #00badb;
                           }
                           #block-1559492406477 .button:hover {
                           background: rgba(0, 186, 219, 0.8);
                           }#block-1559492406477.slideshow__slide--overlay::before {background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
                           }
                        </style>
                        
                           <style>
                              #block-1559492406477 .slideshow__slide-inner {
                              background-image: url("cdn.samrat.com/s/files/1/Slide-10-mobile_600x800_crop_center (1).jpg")
                              }
                           </style>
                        
                     </div>
                     <div class="slideshow__slide slideshow__slide--overlay " id="block-1559490246919" data-block-index="2" >
                          <img src="cdn.samrat.com/s/files/1/banner_april.jpg" alt="img" />
						  <div class="slideshow__content-wrapper">
                              <div class="container">
                                 <h2 class="slideshow__title heading h1">Introducing brand new OLED TVs</h2>
                                 <p class="slideshow__content">Discover all the masterpieces, selected by Warehouse</p>
                                 <a href="collections/oled-tvs.html" class="slideshow__button button">Shop OLED TVs</a>
                              </div>
                           </div>
                      
                        <style>
                           #block-1559490246919 {
                           color: #ffffff;
                           }
                           #block-1559490246919 .button {
                           color: #ffffff;
                           background: #00badb;
                           }
                           #block-1559490246919 .button:hover {
                           background: rgba(0, 186, 219, 0.8);
                           }#block-1559490246919.slideshow__slide--overlay::before {background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5));
                           }
                        </style>
                        <noscript>
                           <style>
                              #block-1559490246919 .slideshow__slide-inner {
                              background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/Slide-3-desktop_1400xb751.jpg?v=1559490253)
                              }
                           </style>
                        </noscript>
                     </div>
                     <div class="slideshow__slide slideshow__slide--overlay " id="block-1559492409954" data-block-index="3" >
                        <img src="cdn.samrat.com/s/files/1/slide-1-headphones_1800x (1).jpg" alt="img" />		
                           <div class="slideshow__content-wrapper">
                              <div class="container">
                                 <h2 class="slideshow__title heading h1">The best performing products in the world</h2>
                                 <p class="slideshow__content">Our mission is to provide the best experience in the audio/video industry</p>
                                 <a href="#" class="slideshow__button button">Shop All</a>
                              </div>
                           </div>
                 
                        <style>
                           #block-1559492409954 {
                           color: #ffffff;
                           }
                           #block-1559492409954 .button {
                           color: #ffffff;
                           background: #00badb;
                           }
                           #block-1559492409954 .button:hover {
                           background: rgba(0, 186, 219, 0.8);
                           }#block-1559492409954.slideshow__slide--overlay::before {background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
                           }
                        </style>
                        <noscript>
                           <style>
                              #block-1559492409954 .slideshow__slide-inner {
                              background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/Slide_4_desktop_1400xdb61.jpg?v=1559495951)
                              }
                           </style>
                        </noscript>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div id="samrat-section-1559571186638" class="samrat-section">
            <section class="section" data-section-id="1559571186638" data-section-type="promo-block">
               <div class="container">
                  <div class="block-list">
                     <div id="block-1559571186638-1" class="block-list__item  1/2--tablet-and-up 1/3--desk" >
                        <a href="collections/tv.php" class="promo-block promo-block--top-left  promo-block--small">
                           <div class="promo-block__image-clip">
                              <img class="promo-block__image-wrapper  lazyload image--fade-in" src="cdn.samrat.com/s/files/1/81t2A6uhm4L._SX355_.jpg" style="height:300px; ">
                           </div>
                           <div class="promo-block__inner">
                              <!-- <p class="promo-block__heading heading h3">OLED TVs</p>
                              <p class="promo-block__content">Exclusive offers on TVs until Dec 31.<br />
                                 $100 off on every purchase
                              </p> -->
                              <span class="promo-block__cta button button--floating" style="margin-top:300px;">OLED TVs</span>
                           </div>
                           <style>
                              #block-1559571186638-1 .promo-block {
                              background-color: #fc2a68;
                              color: #ffffff
                              }
                              #block-1559571186638-1 .button {
                              background: #ffffff;
                              color: #fc2a68;
                              }
                           </style>
                           <noscript>
                              <style>
                                 #block-1559571186638-1 .promo-block__image-wrapper {
                                 background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/promotion-tvs_x2000_dbeffac0-9a5c-4dd7-be82-4f390aec55f4_x4005369.png?v=1560276887);
                                 }
                              </style>
                           </noscript>
                        </a>
                     </div>
                     <div id="block-1559571186638-0" class="block-list__item  1/2--tablet-and-up 1/3--desk" >
                        <a href="collections/earbuds.php" class="promo-block promo-block--top-left  promo-block--small">
                           <div class="promo-block__image-clip">
                              <img class="promo-block__image-wrapper  lazyload image--fade-in" src="cdn.samrat.com/s/files/1/HL1654_28-IMS-en_IN.jpg" style="height:300px; " />
                           </div>
                           <div class="promo-block__inner">
                             <!--  <p class="promo-block__heading heading h3">Jucier Mixer</p>
                              <p class="promo-block__content">Explore our range of high-quality speakers.</p> -->
                              <span class="promo-block__cta button button--floating" style="margin-top:300px;" >Jucier Mixer / Jucier Grander</span>
                           </div>
                           <style>
                              #block-1559571186638-0 .promo-block {
                              background-color: #6f42ef;
                              color: #ffffff
                              }
                              #block-1559571186638-0 .button {
                              background: #ffffff;
                              color: #6f42ef;
                              }
                           </style>
                           <noscript>
                              <style>
                                 #block-1559571186638-0 .promo-block__image-wrapper {
                                 background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/speakers-promotions_x2000_3cfa90d9-1e0d-4001-9c8f-e5ca69584bdc_x40010e7.png?v=1560276874);
                                 }
                              </style>
                           </noscript>
                        </a>
                     </div>
                     <div id="block-1559571186638-2" class="block-list__item  1/2--tablet-and-up 1/3--desk" >
                        <a href="collections/wm.php" class="promo-block promo-block--top-left  promo-block--small">
                           <div class="promo-block__image-clip">
                              <img class="promo-block__image-wrapper  lazyload image--fade-in" src="cdn.samrat.com/s/files/1/wm5.jpg" style="height:300px; " >
                           </div>
                           <div class="promo-block__inner">
                             <!--  <p class="promo-block__heading heading h3">Headphones</p>
                              <p class="promo-block__content">Discover our new headphones.<br />
                                 Up to 25% Off !
                              </p> -->
                              <span class="promo-block__cta button button--floating" style="margin-top:300px;">Washing Machine</span>
                           </div>
                           <style>
                              #block-1559571186638-2 .promo-block {
                              background-color: #26c1ce;
                              color: #ffffff
                              }
                              #block-1559571186638-2 .button {
                              background: #ffffff;
                              color: #26c1ce;
                              }
                           </style>
                           <noscript>
                              <style>
                                 #block-1559571186638-2 .promo-block__image-wrapper {
                                 background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/promotion-headphones_x2000_f4667f82-fb70-4ba6-abba-f696a2f91d9f_x4000688.png?v=1560276862);
                                 }
                              </style>
                           </noscript>
                        </a>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div id="samrat-section-1559572127904" class="samrat-section">
            <section class="section" data-section-id="1559572127904" data-section-type="offers">
               <div class="container">
                  <div class="scroller">
                     <div class="scroller__inner">
                        <div class="block-list">
                           <div class="block-list__item 1/2--lap-and-up" >
                              <div class="offer-item offer-item--inline">
                                 <div class="offer-item__image-wrapper">
                                    <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                      
                                       
                                          <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/offer-1_2x_6ba50f80-1d2d-4361-a867-05ca0f32413c_220x1934.jpg?v=1559572262" alt="">
                                      
                                    </div>
                                 </div>
                                 <div class="offer-item__inner">
                                    <p class="offer-item__title heading h4">Exclusive offers on Every products</p>
                                    <div class="offer-item__content rte">
                                       <p>We offer you&nbsp;a lot of discounts on all our Bluetooth speakers, Home Theater, Washing Machines or CookTop / Induction !</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="block-list__item 1/2--lap-and-up" >
                              <div class="offer-item offer-item--inline">
                                 <div class="offer-item__image-wrapper">
                                    <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                       <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/offer-2_2x_26b533cd-d17a-43fe-97c8-8d0af50a398c_220x.jpg?v=1559572424" alt="">
                                       
                                          <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/offer-2_2x_26b533cd-d17a-43fe-97c8-8d0af50a398c_220xd3d6.jpg?v=1559572424" alt="">
                                       
                                    </div>
                                 </div>
                                 <div class="offer-item__inner">
                                    <p class="offer-item__title heading h4">Free shipping for all orders overs Rs. 80</p>
                                    <div class="offer-item__content rte">
                                       <p>We got you covered ! We deliver your goods using UPS expedited shipping, free of charge</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div id="samrat-section-collection-list" class="samrat-section">    
		   <section class="section" data-section-id="collection-list" data-section-type="collection-list">
               <div class="container">
                  <header class="section__header">
                     <h2 class="section__title heading h3">Popular categories</h2>
                     <a href="collections.php" class="section__action-link link">
                        View all 
                        <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                           <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                        </svg>
                     </a>
                  </header>

                <div class="scroller">
                     <div class="scroller__inner">
                        <div class="collection-list hideimage">
                           <a href="collections/handBlender.php" class="collection-item" data-collection-index="0" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                 <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/headphones-600_{width}x.jpg?v=1559570745" data-widths="[300,400,500,600]" data-sizes="auto" alt="">
                                    
                                       <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/51w0V07oM-L._SY741_.jpg" alt="" style="height:150px;">
                                    
                                 </div>
                              </div>
                              <span class="collection-item__title text--strong">
                                 Hand Blender / Beaters / Choppers
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
                              </span>
                           </a>
                           <a href="collections/earbuds.php" class="collection-item" data-collection-index="1" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                 <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/earbuds-600_abcad8d1-f772-47be-8de5-7b6e1dd45f03_{width}x.jpg?v=1559570781" data-widths="[300,400,500,600]" data-sizes="auto" alt="">
                                   
                                       <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/WhatsApp Image 2020-08-07 at 1.21.24 PM (7).jpeg" alt="">
                                   
                                 </div>
                              </div>
                              <span class="collection-item__title text--strong">
                                 Jucier Mixer 
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
                              </span>
                           </a>
                           <a href="collections/Sandwich.php" class="collection-item" data-collection-index="2" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                 <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/speakers-600_490fc860-32d7-4226-bb15-b319dfcad104_{width}x.jpg?v=1559570803" data-widths="[300,400,500,600]" data-sizes="auto" alt="">
                                    
                                       <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/download.jpg" alt="">
                                    
                                 </div>
                              </div>
                              <span class="collection-item__title text--strong">
                                 Sandwich / Toaster / Grillers
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
								</span>
                           </a>
                           <a href="collections/iron.php" class="collection-item" data-collection-index="3" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                 <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/oled-tvs-600_1f8be815-fc56-40ee-81d4-a813eba17df2_{width}x.jpg?v=1559570835" data-widths="[300,400,500,600]" data-sizes="auto" alt="">
                                    
                                       <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/iron.jpg" alt="">
                                    
                                 </div>
                              </div>
                              <span class="collection-item__title text--strong">
                                Iron / Garment Streamer
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
                              </span>
                           </a>
                           <a href="collections/fan.php" class="collection-item" data-collection-index="4" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                 <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/turntables-600_7f5b0d89-9873-45ce-a0da-5bc6907ed9d8_{width}x.jpg?v=1559570860" data-widths="[300,400,500,600]" data-sizes="auto" alt="">
                                   
                                       <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/51QqXY279vL._SL1200_.JPG" alt="">
                                   
                                 </div>
                              </div>
                              <span class="collection-item__title text--strong">
                                 Fan 
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
                              </span>
                           </a>
                           <a href="collections/coffeeMaker.php" class="collection-item" data-collection-index="5" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                 <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/subwoofers-600_2406ccc6-33ce-4565-aa2f-aa0079f816e5_{width}x.jpg?v=1559570818" data-widths="[300,400,500,600]" data-sizes="auto" alt="">
                                    
                                       <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/710FyjteI1L._SL1500_.jpg" alt="">
                                    
                                 </div>
                              </div>
                              <span class="collection-item__title text--strong">
                                 Coffer Maker/ Kettle/ Egg Boiler 
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
                              </span>
                           </a>
                           <a href="collections/burner.php" class="collection-item" data-collection-index="6" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/modern-burner-gas-stove-500x500.jpg" alt="">
                                </div>
                              </div>
                              <span class="collection-item__title text--strong">
                                 CookTop / Burner / Induction
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
                              </span>
                           </a>
                           <a href="collections/induction.php" class="collection-item" data-collection-index="7" >
                              <div class="collection-item__image-wrapper collection-item__image-wrapper--rounded">
                                 <div class="aspect-ratio" style="padding-bottom: 100%">
                                    <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/amplifiers-600_969cae5b-7025-4eca-9629-166de542116c_{width}x.jpg?v=1559570914" data-widths="[300,400,500,600]" data-sizes="auto" alt="">
                                    
                                       <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/41qCoR5UzdL._SX425_.jpg" alt="">
                                   
									</div>
                              </div>
                              <span class="collection-item__title text--strong">
                                 Induction
                                 <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                                    <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                                 </svg>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
		
         </div>
         <div id="samrat-section-1542984811767" class="samrat-section">
            <section class="section" data-section-id="1542984811767" data-section-type="featured-collection" data-section-settings='{
               "stackable": false,
               "layout": "vertical"
               }'>
               <div class="container">
                  <header class="section__header">
                     <div class="section__header-stack">
                        <h2 class="section__title heading h3">Special Offer</h2>
                     </div>
                     <a href="collections/sales.php" class="section__action-link link">
                        View all Offers 
                        <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                           <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                        </svg>
                     </a>
                  </header>
               </div>
			   
			   
	<?php 
		// Include the database configuration file  
		require_once 'addbConfig.php'; 
		 
		// Get image data from database 
		$result = $db->query("SELECT * FROM product where type= 'handblender' ORDER BY id DESC LIMIT 6"); 
	?>

               <div class="container ">
                  <div class="scroller">
                     <div class="scroller__inner">
                        <div class="product-list--vertical product-list--scrollable ">
                           <?php if($result->num_rows > 0){
								$i=0;		
							?> 
						    <?php 
								while($item = $result->fetch_assoc()){ 
								$id = $item["id"];
							?>
						   <div  class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
						  
                              <div class="product-item__label-list">
								<span class="product-label product-label--on-sale">Save <span>Rs. <?php echo $item['save']; ?></span></span>
							  </div>
                              <a href="<?php printf('%s?id=%s', 'zoompro/offproduct.php',  $item['id']); ?>" class="product-item__image-wrapper ">
                                 <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                    <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744985419827" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785_{width}x.jpg?v=1570074258" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="">
                                    
                                       <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['fimg']); ?>" alt="">
                                    
                                 </div>
                              </a>
                              <div class="product-item__info">
                                 <div class="product-item__info-inner">
                                    <a class="product-item__vendor link" href="#"><?php echo $item['productname']; ?></a>
                                   
                                    <div class="product-item__price-list price-list"><span class="price price--highlight">Rs. <?php echo $item['price']; ?></span>
                                       <span class="price price--compare">Rs.<?php echo $item['mrp']; ?></span>
                                    </div>
                                    <a class="product-item__reviews-badge link" href="collections/sales-home/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv.html#product-reviews">
                                       <span class="samrat-product-reviews-badge" data-id="1916221128755">
                                          <div class="spr-badge" style="opacity: 0">
                                             <span class="spr-starrating spr-badge-starrating">
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             </span>
                                          </div>
                                       </span>
                                    </a>
                                    <span class="product-item__inventory inventory inventory--high"><?php echo $item['stock']; ?></span>
                                 </div>
                              </div>
                           </div>
						   
		
	
      </div>
   </div>
   	  <?php }
  }?>
  </div>
              
                              <!--<div class="product-item__info">
                                 <div class="product-item__info-inner">
                                    <a class="product-item__vendor link" href="collections/jbl.html">JBL</a>
                                    <a href="collections/sales-home/products/jbl-tune-205bt-wireless-earbuds.html" class="product-item__title text--strong link">JBL Tune 205BT Wireless Earbuds</a>
                                     <div class="product-item__swatch-list">
                                       <div class="color-swatch-list">
                                          <div class="color-swatch "><input class="color-swatch__radio" type="radio" name="1542984811767-1916180594739" id="1542984811767-1916180594739-1" value="Black" checked="checked" data-variant-url="/products/jbl-tune-205bt-wireless-earbuds?variant=17550010581043" data-media-id="2744898781235" data-image-url="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16433_260__1_31173a53-f655-43f9-bfbd-bf02365e0401_{width}x.jpg?v=1570074241" data-image-widths="[200,300,400,500,600,700,800]" data-image-aspect-ratio="1.0" aria-hidden="true">
                                             <label class="color-swatch__item lazyload" for="1542984811767-1916180594739-1" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/black_64x64.png?v=1559050383" title="Black"></label>
                                             <a href="products/jbl-tune-205bt-wireless-earbuds.html" class="color-swatch__item-link">+5</a>
                                          </div>
                                          <div class="color-swatch "><input class="color-swatch__radio" type="radio" name="1542984811767-1916180594739" id="1542984811767-1916180594739-2" value="Blue"  data-variant-url="/products/jbl-tune-205bt-wireless-earbuds?variant=17550010613811" data-media-id="2744898879539" data-image-url="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16437_354__3_c0ddc77d-32c1-4bfd-bbb3-6aac28ed67f0_{width}x.jpg?v=1570074241" data-image-widths="[200,300,400,500,600,700,800]" data-image-aspect-ratio="1.0" aria-hidden="true">
                                             <label class="color-swatch__item lazyload" for="1542984811767-1916180594739-2" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/blue_64x64.png?v=1559050357" title="Blue"></label>
                                             <a href="products/jbl-tune-205bt-wireless-earbuds.html" class="color-swatch__item-link">+4</a>
                                          </div>
                                          <div class="color-swatch "><input class="color-swatch__radio" type="radio" name="1542984811767-1916180594739" id="1542984811767-1916180594739-3" value="Champagne Gold"  data-variant-url="/products/jbl-tune-205bt-wireless-earbuds?variant=17550010646579" data-media-id="2744898977843" data-image-url="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16435_220__2_178cdf81-9ad2-4db0-8dbc-e1d31e35d93c_{width}x.jpg?v=1570074241" data-image-widths="[200,300,400,500,600,700,800]" data-image-aspect-ratio="1.0" aria-hidden="true">
                                             <label class="color-swatch__item lazyload" for="1542984811767-1916180594739-3" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/champagne-gold_64x64.png?v=1559552175" title="Champagne Gold"></label>
                                             <a href="products/jbl-tune-205bt-wireless-earbuds.html" class="color-swatch__item-link">+3</a>
                                          </div>
                                          <div class="color-swatch "><input class="color-swatch__radio" type="radio" name="1542984811767-1916180594739" id="1542984811767-1916180594739-4" value="Green"  data-variant-url="/products/jbl-tune-205bt-wireless-earbuds?variant=17550010679347" data-media-id="2744899076147" data-image-url="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16438_414__3_c16f482e-fd80-4185-bd0f-db61632e346b_{width}x.jpg?v=1570074241" data-image-widths="[200,300,400,500,600,700,800]" data-image-aspect-ratio="1.0" aria-hidden="true">
                                             <label class="color-swatch__item lazyload" for="1542984811767-1916180594739-4" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/green_64x64.png?v=1559050385" title="Green"></label>
                                             <a href="products/jbl-tune-205bt-wireless-earbuds.html" class="color-swatch__item-link">+2</a>
                                          </div>
                                          <div class="color-swatch "><input class="color-swatch__radio" type="radio" name="1542984811767-1916180594739" id="1542984811767-1916180594739-5" value="Rose Gold"  data-variant-url="/products/jbl-tune-205bt-wireless-earbuds?variant=17550010712115" data-media-id="2744899239987" data-image-url="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16436_784__2_bb89f91e-119f-46bf-98ed-def2d52a5315_{width}x.jpg?v=1570074241" data-image-widths="[200,300,400,500,600,700,800]" data-image-aspect-ratio="1.0" aria-hidden="true">
                                             <label class="color-swatch__item lazyload" for="1542984811767-1916180594739-5" style="background-color: rosegold" title="Rose Gold"></label>
                                             <a href="products/jbl-tune-205bt-wireless-earbuds.html" class="color-swatch__item-link">+1</a>
                                          </div>
                                       </div>
                                    </div>
                                     --<div class="product-item__price-list price-list"><span class="price price--highlight">$31.95</span>
                                       <span class="price price--compare">$39.95</span>
                                    </div>
                                    <a class="product-item__reviews-badge link" href="collections/sales-home/products/jbl-tune-205bt-wireless-earbuds.html#product-reviews">
                                       <span class="samrat-product-reviews-badge" data-id="1916180594739">
                                          <div class="spr-badge" style="opacity: 0">
                                             <span class="spr-starrating spr-badge-starrating">
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             <i class="spr-icon spr-icon-star-empty"></i>
                                             </span>
                                          </div>
                                       </span>
                                    </a>
                                    <span class="product-item__inventory inventory inventory--high">In stock, 444 units</span>
                                 </div>-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="modal-quick-view-1542984811767" class="modal" aria-hidden="true">
                  <div class="modal__dialog modal__dialog--stretch" role="dialog">
                     <button class="modal__close link" data-action="close-modal">
                        <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                           <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                     </button>
                     <div class="modal__loader">
                        <svg class="icon icon--search-loader" viewBox="0 0 64 64" role="presentation">
                           <path opacity=".4" d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z"></path>
                           <path d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z"></path>
                        </svg>
                     </div>
                     <div class="modal__inner"></div>
                  </div>
               </div>
            </section>
         </div>
         <div id="samrat-section-1559483991699" class="samrat-section">
            <section class="section" data-section-id="1559483991699" data-section-type="mosaic">
               <div class="container">
                  <div class="mosaic mosaic--medium mosaic--three-columns">
                     <div class="mosaic__column">
                        <div class="mosaic__item">
                           <a href="collections/Vacuum.php" id="block-1559483991699-0" class="promo-block promo-block--top-left " >
                              <div class="promo-block__image-clip">
                                 <div class="promo-block__image-wrapper promo-block__image-wrapper--cover lazyload image--fade-in" data-bgset="//cdn.samrat.com/s/files/1/0065/3095/7363/files/bluetooth-red_f7adb5c3-0506-4481-b8ee-aa20422d1d2f_400x.png?v=1559642989 400w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/bluetooth-red_f7adb5c3-0506-4481-b8ee-aa20422d1d2f_600x.png?v=1559642989 600w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/bluetooth-red_f7adb5c3-0506-4481-b8ee-aa20422d1d2f_800x.png?v=1559642989 800w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/bluetooth-red_f7adb5c3-0506-4481-b8ee-aa20422d1d2f_1000x.png?v=1559642989 1000w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/bluetooth-red_f7adb5c3-0506-4481-b8ee-aa20422d1d2f_1200x.png?v=1559642989 1200w" data-optimumx="1.4" data-sizes="auto"></div>
                              </div>
                              <div class="promo-block__inner">
							  <img src="cdn.samrat.com/s/files/1/inalsa-quickvac-original-imafk94wffyhumy2.jpeg" alt="imag" />
                                 <p class="promo-block__heading heading h3"> Vacuum Cleaner</p>
                                 <!-- <p class="promo-block__content">Feel the freedom with our Bluetooth headphones and speakers.</p>
                                 <span class="promo-block__cta button button--floating">Shop Now</span> -->
                              </div>
                              <style>
                                 #block-1559483991699-0 {
                                 background-color: #ff2e1f;
                                 color: #ffffff
                                 }
                                 #block-1559483991699-0 .button {
                                 background: #ffffff;
                                 color: #ff2e1f;
                                 }
                              </style>
                              
                                 <style>
                                    #block-1559483991699-0 .promo-block__image-wrapper {
                                    background-image: url("../cdn.samrat.com/s/files/1/0065/3095/7363/files/");
                                    }
                                 </style>
                             
                           </a>
                        </div>
                        <div class="mosaic__item">
                           <a href="collections/ro.php" id="block-1559483991699-1" class="promo-block promo-block--top-left " >
                              
                              <div class="promo-block__inner">
							    <img src="cdn.samrat.com/s/files/1/kent-ace-original-imafszvdebr69hyy.jpeg" alt="imag" />
                                 <p class="promo-block__heading heading h3" style="color:black;">Optima R.O</p>
                                 
                              </div>
                              <style>
                                 #block-1559483991699-1 {
                                 background-color: #f3f4f4;
                                 color: #ffffff
                                 }
                                 #block-1559483991699-1 .button {
                                 background: #ffffff;
                                 color: #000000;
                                 }
                              </style>
                              <noscript>
                                 <style>
                                    #block-1559483991699-1 .promo-block__image-wrapper {
                                    background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/mosaic-audio_04cd57f4-2a11-47e3-bd88-0231bc0618f0_800x3429.jpg?v=1559724114);
                                    }
                                 </style>
                              </noscript>
                           </a>
                        </div>
                     </div>
                     <div class="mosaic__column">
                        <div class="mosaic__item">
                           <a href="collections/blueEar.php" id="block-1559483991699-2" class="promo-block promo-block--top-left " >
                              <div class="promo-block__image-clip">
                                 <div class="promo-block__image-wrapper promo-block__image-wrapper--cover lazyload image--fade-in" data-bgset="//cdn.samrat.com/s/files/1/0065/3095/7363/files/mosaic-headphones_400x.jpg?v=1559739692 400w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/mosaic-headphones_600x.jpg?v=1559739692 600w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/mosaic-headphones_800x.jpg?v=1559739692 800w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/mosaic-headphones_1000x.jpg?v=1559739692 1000w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/mosaic-headphones_1200x.jpg?v=1559739692 1200w" data-optimumx="1.4" data-sizes="auto"></div>
                              </div>
                              <div class="promo-block__inner">
							  <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/headphones-600_450x8935.jpg" alt="imag" />
                                 <p class="promo-block__heading heading h3">Headphones</p>
                                 <p class="promo-block__content">Our selection of premium headphones to enjoy your favorite playlist with an incredible sound.</p>
                                 
                              </div>
                              <style>
                                 #block-1559483991699-2 {
                                 background-color: #f3f4f4;
                                 color: #212226
                                 }
                                 #block-1559483991699-2 .button {
                                 background: #ffffff;
                                 color: #292929;
                                 }
                              </style>
                              <noscript>
                                 <style>
                                    #block-1559483991699-2 .promo-block__image-wrapper {
                                    background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/mosaic-headphones_800xcd2b.jpg?v=1559739692);
                                    }
                                 </style>
                              </noscript>
                           </a>
                        </div>
                     </div>
                     <div class="mosaic__column">
                        <div class="mosaic__item">
                           <a href="collections/burner.php" id="block-1559483991699-4" class="promo-block promo-block--top-left " >
                              <div class="promo-block__image-clip">
                                 <div class="promo-block__image-wrapper promo-block__image-wrapper--cover lazyload image--fade-in" data-bgset="//cdn.samrat.com/s/files/1/0065/3095/7363/files/accessories-bag_400x.jpg?v=1559739848 400w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/accessories-bag_600x.jpg?v=1559739848 600w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/accessories-bag_800x.jpg?v=1559739848 800w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/accessories-bag_1000x.jpg?v=1559739848 1000w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/accessories-bag_1200x.jpg?v=1559739848 1200w" data-optimumx="1.4" data-sizes="auto"></div>
                              </div>
                              <div class="promo-block__inner">
							   <img src="cdn.samrat.com/s/files/1/lifelong-llic12-llic12-original-imafjarbpcgchec5.jpeg" alt="imag" />
                                 <p class="promo-block__heading heading h3" style="color:black;">Electric Induction</p>
                                
                              </div>
                              <style>
                                 #block-1559483991699-4 {
                                 background-color: #f3f4f4;
                                 color: #ffffff
                                 }
                                 #block-1559483991699-4 .button {
                                 background: #ffffff;
                                 color: #000000;
                                 }
                              </style>
                              <noscript>
                                 <style>
                                    #block-1559483991699-4 .promo-block__image-wrapper {
                                    background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/accessories-bag_800x2755.jpg?v=1559739848);
                                    }
                                 </style>
                              </noscript>
                           </a>
                        </div>
                        <div class="mosaic__item">
                           <a href="collections/refi.php" id="block-1559483991699-3" class="promo-block promo-block--top-left promo-block--overlay" >
                              <div class="promo-block__image-clip">
                                 <div class="promo-block__image-wrapper promo-block__image-wrapper--cover lazyload image--fade-in" data-bgset="//cdn.samrat.com/s/files/1/0065/3095/7363/files/projectors_400x.png?v=1559740011 400w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/projectors_600x.png?v=1559740011 600w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/projectors_800x.png?v=1559740011 800w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/projectors_1000x.png?v=1559740011 1000w, //cdn.samrat.com/s/files/1/0065/3095/7363/files/projectors_1200x.png?v=1559740011 1200w" data-optimumx="1.4" data-sizes="auto"></div>
                              </div>
                              <div class="promo-block__inner">
							  <img src="cdn.samrat.com/s/files/1/rr21t2h2wcu-hl-5-samsung-original-imafnmkbyzev8szv.jpeg" alt="imag" />
                                 <p class="promo-block__heading heading h3">Refrigerater</p>
                                
                              </div>
                              <style>
                                 #block-1559483991699-3 {
                                 background-color: #383639;
                                 color: #ffffff
                                 }
                                 #block-1559483991699-3 .button {
                                 background: #ffffff;
                                 color: #383639;
                                 }#block-1559483991699-3.promo-block--overlay::before {background: linear-gradient(to top, rgba(0, 0, 0, 0) 15%, rgba(0, 0, 0, 0.5));
                                 }
                              </style>
                              <noscript>
                                 <style>
                                    #block-1559483991699-3 .promo-block__image-wrapper {
                                    background-image: url(cdn.samrat.com/s/files/1/0065/3095/7363/files/projectors_800x349a.png?v=1559740011);
                                    }
                                 </style>
                              </noscript>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div id="samrat-section-1559593095327" class="samrat-section">
            <section class="section section--text-centered" data-section-id="1559593095327" data-section-type="rich-text">
               <div class="container container--narrow">
                  <h2 class="heading h1">About New Smarat Electonics</h2>
                  <div class="rte">
                     <p>Our mission statement is to provide the absolute best customer experience available in the Audio/Video industry without exception. We choose to only sell the best performing products in the world, learning them inside and out to ensure your experience with our organization and the products we supply&nbsp;are second to none. New Samrat Lifestyle is one of the fastest growing Audio and Video retailers in the India.</p>
                     <a href="pages/brands.php" class="button button--primary">Discover our brand</a>
                  </div>
               </div>
            </section>
         </div>
         <div id="samrat-section-1559483970551" class="samrat-section">
            <section class="section" data-section-id="1559483970551" data-section-type="logo-list">
               <div class="container">
                  <header class="section__header">
                     <h2 class="section__title heading h3">Brands we distribute</h2>
                     <a href="pages/brands.php" class="section__action-link link">
                        View all brands 
                        <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                           <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                        </svg>
                     </a>
                  </header>
                  <div class="quick-links">
                     <a href="collections/jbl.html" class="quick-links__link" >
                        <div id="block-1559483970551-0" class="quick-links__image-container">
                           <div class="quick-links__image-ie-fix">
                              <div class="aspect-ratio" style="padding-bottom: 32.0%">
                                 <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/jbl_2x_a92dda2f-02d1-4048-aad8-e54b3b0020d7_280x.jpg?v=1590304148" alt="JBL">
                                 
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/jbl_2x_a92dda2f-02d1-4048-aad8-e54b3b0020d7_280xcb2d.jpg?v=1590304148" alt="JBL">
                                 
                              </div>
                           </div>
                        </div>
                        <style>
                           #block-1559483970551-0 .quick-links__image-ie-fix {
                           max-width: 100px;
                           }
                           @media screen and (min-width: 641px) {
                           #block-1559483970551-0 .quick-links__image-ie-fix {
                           max-width: 140px;
                           }
                           }
                        </style>
                     </a>
                     <a href="collections/lg.html" class="quick-links__link" >
                        <div id="block-1559483970551-2" class="quick-links__image-container">
                           <div class="quick-links__image-ie-fix">
                              <div class="aspect-ratio" style="padding-bottom: 32.0%">
                                 <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/lg_2x_4e7aac88-df70-46d3-afb8-62440355c980_280x.jpg?v=1590304155" alt="LG">
                                 
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/lg_2x_4e7aac88-df70-46d3-afb8-62440355c980_280xf5a9.jpg?v=1590304155" alt="LG">
                                 
                              </div>
                           </div>
                        </div>
                        <style>
                           #block-1559483970551-2 .quick-links__image-ie-fix {
                           max-width: 100px;
                           }
                           @media screen and (min-width: 641px) {
                           #block-1559483970551-2 .quick-links__image-ie-fix {
                           max-width: 140px;
                           }
                           }
                        </style>
                     </a>
                     <a href="collections/sony.html" class="quick-links__link" >
                        <div id="block-1559483970551-5" class="quick-links__image-container">
                           <div class="quick-links__image-ie-fix">
                              <div class="aspect-ratio" style="padding-bottom: 32.0%">
                                 <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/sony_2x_1eaa5916-dc1f-4d37-9ffd-1680554d5115_280x.jpg?v=1590304161" alt="Sony">
                                 
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/sony_2x_1eaa5916-dc1f-4d37-9ffd-1680554d5115_280x85cd.jpg?v=1590304161" alt="Sony">
                                 
                              </div>
                           </div>
                        </div>
                        <style>
                           #block-1559483970551-5 .quick-links__image-ie-fix {
                           max-width: 100px;
                           }
                           @media screen and (min-width: 641px) {
                           #block-1559483970551-5 .quick-links__image-ie-fix {
                           max-width: 140px;
                           }
                           }
                        </style>
                     </a>
                     <a href="collections/pioneer.html" class="quick-links__link" >
                        <div id="block-1559483970551-4" class="quick-links__image-container">
                           <div class="quick-links__image-ie-fix">
                              <div class="aspect-ratio" style="padding-bottom: 32.0%">
                                 <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/pioneer_2x_769ad94d-7220-408d-b709-746a89ffac91_280x.jpg?v=1590304167" alt="Pioneer">
                                 
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/pioneer_2x_769ad94d-7220-408d-b709-746a89ffac91_280x208d.jpg?v=1590304167" alt="Pioneer">
                                 
                              </div>
                           </div>
                        </div>
                        <style>
                           #block-1559483970551-4 .quick-links__image-ie-fix {
                           max-width: 100px;
                           }
                           @media screen and (min-width: 641px) {
                           #block-1559483970551-4 .quick-links__image-ie-fix {
                           max-width: 140px;
                           }
                           }
                        </style>
                     </a>
                     <a href="collections/harman-kardon.html" class="quick-links__link" >
                        <div id="block-1559483970551-3" class="quick-links__image-container">
                           <div class="quick-links__image-ie-fix">
                              <div class="aspect-ratio" style="padding-bottom: 32.0%">
                                 <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/harman_kardon_2x_d74427ae-81df-4a01-9343-c7bcd116d7da_280x.jpg?v=1590304175" alt="Harman/Kardon">
                                 
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/harman_kardon_2x_d74427ae-81df-4a01-9343-c7bcd116d7da_280xf1be.jpg?v=1590304175" alt="Harman/Kardon">
                                 
                              </div>
                           </div>
                        </div>
                        <style>
                           #block-1559483970551-3 .quick-links__image-ie-fix {
                           max-width: 100px;
                           }
                           @media screen and (min-width: 641px) {
                           #block-1559483970551-3 .quick-links__image-ie-fix {
                           max-width: 140px;
                           }
                           }
                        </style>
                     </a>
                     <a href="collections/klipsch.html" class="quick-links__link" >
                        <div id="block-1559483970551-1" class="quick-links__image-container">
                           <div class="quick-links__image-ie-fix">
                              <div class="aspect-ratio" style="padding-bottom: 32.0%">
                                 <img class="lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/files/klipsch_2x_5fbe2c74-cf98-493e-bf75-6987a11db936_280x.jpg?v=1590304182" alt="Klipsch">
                                 
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/klipsch_2x_5fbe2c74-cf98-493e-bf75-6987a11db936_280xe262.jpg?v=1590304182" alt="Klipsch">
                                 
                              </div>
                           </div>
                        </div>
                        <style>
                           #block-1559483970551-1 .quick-links__image-ie-fix {
                           max-width: 100px;
                           }
                           @media screen and (min-width: 641px) {
                           #block-1559483970551-1 .quick-links__image-ie-fix {
                           max-width: 140px;
                           }
                           }
                        </style>
                     </a>
                     <style>
                        /* Based on the number of logos, we have to dynamically re-calculate the width of each each */
                        @media screen and (min-width: 641px) {#samrat-section-1559483970551 .quick-links__link {
                        width: 33.333333333333336%;
                        }
                        }
                        @media screen and (min-width: 1000px) {#samrat-section-1559483970551 .quick-links__link {
                        width: 16.666666666666668%;
                        }
                        }
                     </style>
                  </div>
               </div>
            </section>
         </div>
        <!--  <div id="samrat-section-1559483948816" class="samrat-section">
            <section class="section" data-section-id="1559483948816" data-section-type="featured-collection" data-section-settings='{
               "stackable": false,
               "layout": "vertical"
               }'>
               <div class="container container--flush">
                  <div class="featured-collection lazyload" data-bgset="//cdn.samrat.com/s/files/1/0065/3095/7363/files/featured-collection_1000x.png?v=1559725563 [--lap]">
                     <header class="featured-collection__header lazyload" data-bgset="//cdn.samrat.com/s/files/1/0065/3095/7363/files/featured-collection_1000x.png?v=1559725563 [--tablet]">
                        <h2 class="featured-collection__title heading h2">New TVs</h2>
                        <p class="featured-collection__text">Here is our selection of new TVs on the market, picked by our New Smarat experts.</p>
                        <a href="collections/all-tvs.html" class="featured-collection__cta button button--floating">Shop All TVs</a>
                     </header>
                     <div class="featured-collection__content">
                        <div class="scroller scroller--flush">
                           <div class="scroller__inner">
                              <div class="product-list product-list--scrollable">
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <div class="product-item__label-list"><span class="product-label product-label--on-sale">Save <span>Rs. 800</span></span></div>
                                    <a href="products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744985419827" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785_{width}x.jpg?v=1570074258" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-950G BRAVIA 4K HDR Ultra HD TV">
                                          
                                             <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/filesScreenshot_2020-08-07-14-26-44-20.png" alt="Sony XBR-950G BRAVIA 4K HDR Ultra HD TV">
                                          
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv.html" class="product-item__title text--strong link">Sony XBR-950G BRAVIA 4K HDR Ultra HD TV</a>
                                          <div class="product-item__price-list price-list"><span class="price price--highlight">$1,398</span>
                                             <span class="price price--compare">$2,198</span>
                                          </div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916221128755">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 79 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <a href="products/sony-kd55x720e-55-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744972640307" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16187_668__1_689b6c81-9210-43af-b9a7-722d4054370f_{width}x.jpg?v=1570074255" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony KD55X720E 55-Inch 4K Ultra HD Smart LED TV">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony KD55X720E 55-Inch 4K Ultra HD Smart LED TV">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-kd55x720e-55-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__title text--strong link">Sony KD55X720E 55-Inch 4K Ultra HD Smart LED TV</a>
                                          <div class="product-item__price-list price-list"><span class="price">$698</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-kd55x720e-55-inch-4k-ultra-hd-smart-led-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916217196595">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory">Sold out</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <a href="products/sony-kd55x750f-55-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744972967987" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/91bu9k4syfl._sl1500_6c92740b-a569-4700-96af-8044c2c6542d_{width}x.jpg?v=1570074256" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony KD55X750F 55-Inch 4K Ultra HD Smart LED TV">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony KD55X750F 55-Inch 4K Ultra HD Smart LED TV">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-kd55x750f-55-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__title text--strong link">Sony KD55X750F 55-Inch 4K Ultra HD Smart LED TV</a>
                                          <div class="product-item__price-list price-list"><span class="price">$748</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-kd55x750f-55-inch-4k-ultra-hd-smart-led-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916217393203">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 145 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <div class="product-item__label-list"><span class="product-label product-label--on-sale">Save <span>$500</span></span></div>
                                    <a href="products/sony-xbr85x850f-85-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744990433331" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16166_125__1_3c0a96d8-25e7-49a6-aba5-b34307b651a9_{width}x.jpg?v=1570074259" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-85X850F 85-Inch 4K Ultra HD Smart LED TV">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-85X850F 85-Inch 4K Ultra HD Smart LED TV">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr85x850f-85-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__title text--strong link">Sony XBR-85X850F 85-Inch 4K Ultra HD Smart LED TV</a>
                                          <div class="product-item__price-list price-list"><span class="price price--highlight">$3,498</span>
                                             <span class="price price--compare">$3,998</span>
                                          </div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr85x850f-85-inch-4k-ultra-hd-smart-led-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222767155">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 136 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <a href="products/sony-xbr77a1e-77-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744989188147" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16195_014__1_3d60c3b2-ae17-4aa0-9615-ff806ea5218e_{width}x.jpg?v=1570074259" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-77A1E 77-Inch 4K Ultra HD Smart BRAVIA OLED TV, Works with Alexa">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-77A1E 77-Inch 4K Ultra HD Smart BRAVIA OLED TV, Works with Alexa">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr77a1e-77-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html" class="product-item__title text--strong link">Sony XBR-77A1E 77-Inch 4K Ultra HD Smart BRAVIA OLED TV, Works with Alexa</a>
                                          <div class="product-item__price-list price-list"><span class="price">$7,998</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr77a1e-77-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222668851">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 10 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <div class="product-item__label-list"><span class="product-label product-label--on-sale">Save <span>$300</span></span></div>
                                    <a href="products/sony-xbr75x850f-75-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744988893235" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16165_405__1_bbd1086c-0dbd-404f-9d26-f74d2688c5b5_{width}x.jpg?v=1570074259" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-75X850F 75-Inch 4K Ultra HD Smart LED TV">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-75X850F 75-Inch 4K Ultra HD Smart LED TV">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr75x850f-75-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__title text--strong link">Sony XBR-75X850F 75-Inch 4K Ultra HD Smart LED TV</a>
                                          <div class="product-item__price-list price-list"><span class="price price--highlight">$1,998</span>
                                             <span class="price price--compare">$2,298</span>
                                          </div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr75x850f-75-inch-4k-ultra-hd-smart-led-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222406707">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 67 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <a href="products/sony-xbr75x850e-75-inch-4k-ultra-hd-smart-led-tv-works-with-alexa.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744988598323" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16184_133__1_81334dd4-7155-4037-aa12-09f08a2f85b3_{width}x.jpg?v=1570074259" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-75X850E 75-Inch 4K Ultra HD Smart LED TV, Works with Alexa">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-75X850E 75-Inch 4K Ultra HD Smart LED TV, Works with Alexa">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr75x850e-75-inch-4k-ultra-hd-smart-led-tv-works-with-alexa.html" class="product-item__title text--strong link">Sony XBR-75X850E 75-Inch 4K Ultra HD Smart LED TV, Works with Alexa</a>
                                          <div class="product-item__price-list price-list"><span class="price">$2,498</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr75x850e-75-inch-4k-ultra-hd-smart-led-tv-works-with-alexa.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222341171">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 146 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <div class="product-item__label-list"><span class="product-label product-label--custom1">New</span></div>
                                    <a href="products/sony-xbr70x830f-70-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744988303411" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/91iihyeiy9l._sl1500_87e8c3c8-d55a-4ee1-8cc1-4859d4969820_{width}x.jpg?v=1570074259" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-70X830F 70-Inch 4K Ultra HD Smart LED TV">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-70X830F 70-Inch 4K Ultra HD Smart LED TV">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr70x830f-70-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__title text--strong link">Sony XBR-70X830F 70-Inch 4K Ultra HD Smart LED TV</a>
                                          <div class="product-item__price-list price-list"><span class="price">$1,998</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr70x830f-70-inch-4k-ultra-hd-smart-led-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222275635">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 102 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <a href="products/sony-xbr65x850f-65-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744988074035" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16164_783__1_061510e5-0ceb-4072-83da-84fa5c21486b_{width}x.jpg?v=1570074259" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-65X850F 65-Inch 4K Ultra HD Smart LED TV">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-65X850F 65-Inch 4K Ultra HD Smart LED TV">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr65x850f-65-inch-4k-ultra-hd-smart-led-tv.html" class="product-item__title text--strong link">Sony XBR-65X850F 65-Inch 4K Ultra HD Smart LED TV</a>
                                          <div class="product-item__price-list price-list"><span class="price">$1,298</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr65x850f-65-inch-4k-ultra-hd-smart-led-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222210099">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 106 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <a href="products/sony-xbr65a8f-65-inch-4k-ultra-hd-smart-bravia-oled-tv.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744987713587" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16037_175__1_28b2d8bc-8276-4a81-a733-d262d815a048_{width}x.jpg?v=1570074259" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-65A8F 65-Inch 4K Ultra HD Smart BRAVIA OLED TV">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-65A8F 65-Inch 4K Ultra HD Smart BRAVIA OLED TV">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr65a8f-65-inch-4k-ultra-hd-smart-bravia-oled-tv.html" class="product-item__title text--strong link">Sony XBR-65A8F 65-Inch 4K Ultra HD Smart BRAVIA OLED TV</a>
                                          <div class="product-item__price-list price-list"><span class="price">$3,498</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr65a8f-65-inch-4k-ultra-hd-smart-bravia-oled-tv.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222144563">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 87 units</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <div class="product-item__label-list"><span class="product-label product-label--custom1">New</span></div>
                                    <a href="products/sony-xbr65a1e-65-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744987353139" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16194_250__1_cee96397-0276-4480-9361-6640fdb80b54_{width}x.jpg?v=1570074258" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-65A1E 65-Inch 4K Ultra HD Smart BRAVIA OLED TV, Works with Alexa">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-65A1E 65-Inch 4K Ultra HD Smart BRAVIA OLED TV, Works with Alexa">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr65a1e-65-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html" class="product-item__title text--strong link">Sony XBR-65A1E 65-Inch 4K Ultra HD Smart BRAVIA OLED TV, Works with Alexa</a>
                                          <div class="product-item__price-list price-list"><span class="price">$3,198</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr65a1e-65-inch-4k-ultra-hd-smart-bravia-oled-tv-works-with-alexa.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916222046259">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--low">Only 3 units left</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item--vertical  1/2--lap 1/3--desk 1/4--wide">
                                    <a href="products/sony-xbr55x930e-55-inch-4k-ultra-hd-smart-led-tv-works-with-alexa.html" class="product-item__image-wrapper ">
                                       <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                          <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744986959923" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16832_740__1_0fa8c8f5-e3e8-4128-abd7-4c0290d884c7_{width}x.jpg?v=1570074258" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="Sony XBR-55X930E 55-Inch 4K Ultra HD Smart LED TV, Works with Alexa">
                                          <noscript>
                                             <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="Sony XBR-55X930E 55-Inch 4K Ultra HD Smart LED TV, Works with Alexa">
                                          </noscript>
                                       </div>
                                    </a>
                                    <div class="product-item__info">
                                       <div class="product-item__info-inner">
                                          <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                          <a href="products/sony-xbr55x930e-55-inch-4k-ultra-hd-smart-led-tv-works-with-alexa.html" class="product-item__title text--strong link">Sony XBR-55X930E 55-Inch 4K Ultra HD Smart LED TV, Works with Alexa</a>
                                          <div class="product-item__price-list price-list"><span class="price">$1,498</span></div>
                                          <a class="product-item__reviews-badge link" href="products/sony-xbr55x930e-55-inch-4k-ultra-hd-smart-led-tv-works-with-alexa.html#product-reviews">
                                             <span class="samrat-product-reviews-badge" data-id="1916221947955">
                                                <div class="spr-badge" style="opacity: 0">
                                                   <span class="spr-starrating spr-badge-starrating">
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   <i class="spr-icon spr-icon-star-empty"></i>
                                                   </span>
                                                </div>
                                             </span>
                                          </a>
                                          <span class="product-item__inventory inventory inventory--high">In stock, 63 units</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <style>
               #samrat-section-1559483948816 .featured-collection {
               background-color: #2d2d2d;
               }
               #samrat-section-1559483948816 .featured-collection__header {
               color: #ffffff;
               }
               #samrat-section-1559483948816 .button {
               color: #2d2d2d;
               background-color: #ffffff;
               }
            </style>
         </div>
        --> 
		<div id="samrat-section-1560191744902" class="samrat-section">
            <section class="section" data-section-id="1560191744902" data-section-type="product" data-section-settings='{
               "showShippingEstimator": false,
               "showQuantitySelector": true,
               "showPaymentButton": true,
               "showInventoryQuantity": true,
               "lowInventoryThreshold": 9,
               "galleryTransitionEffect": "slide",
               "enableImageZoom": true,
               "zoomEffect": "outside",
               "productOptions": [&quot;Color&quot;],
               "enableHistoryState": false,
               "infoOverflowScroll": false,
               "isQuickView": false
               }'>
               <div class="container">
                  <header class="section__header">
                     <h2 class="section__title heading h3">Featured product</h2>
                     <!--<a href="#" class="section__action-link link">
                        View details 
                        <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                           <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                        </svg>
                     </a>-->
                  </header>
               </div>
               <div class="container container--flush">
                  <div class="featured-product">
                     <div class="card">
                        <div class="card__section card__section--tight">
                           <div class="product-gallery product-gallery--with-thumbnails">
                              <div class="product-gallery__carousel-wrapper">
                                 <div class="product-gallery__carousel product-gallery__carousel--zoomable" data-media-count="43" data-initial-media-id="2759721680947">
                                    <!-- Image Number-1-->
									
									<div class="product-gallery__carousel-item is-selected " tabindex="-1" data-media-id="2759721680947" data-media-type="image"  data-group-name="color" data-group-value="black">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/rr21t2h2wcu-hl-5-samsung-original-imafnmkbyzev8szv.jpeg " data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/rr21t2h2wcu-hl-5-samsung-original-imafnmkbyzev8szv.jpeg" alt="">
											 
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number-2-->
									
                                    <div class="product-gallery__carousel-item  " tabindex="-1" data-media-id="2744871944243" data-media-type="image"  data-group-name="color" data-group-value="black">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/kent-ace-original-imafszvdebr69hyy.jpeg " data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/kent-ace-original-imafszvdebr69hyy.jpeg " alt="">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number-3-->
									
                                    <div class="product-gallery__carousel-item  " tabindex="-1" data-media-id="2744871977011" data-media-type="image"  data-group-name="color" data-group-value="black">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/promotion-headphones_x2000_f4667f82-fb70-4ba6-abba-f696a2f91d9f_x4000688.png " data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/promotion-headphones_x2000_f4667f82-fb70-4ba6-abba-f696a2f91d9f_x4000688.png " alt="">
                                            
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number-4-->
									
                                    <div class="product-gallery__carousel-item  " tabindex="-1" data-media-id="2744872009779" data-media-type="image"  data-group-name="color" data-group-value="black">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number - 5 -->
									
                                    <div class="product-gallery__carousel-item  " tabindex="-1" data-media-id="2744872042547" data-media-type="image"  data-group-name="color" data-group-value="black">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number - 6 !-->
									
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872075315" data-media-type="image"  data-group-name="color" data-group-value="camo">
                                       <div class="product-gallery__size-limiter" style="max-width: 1396px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number - 7 -->
									
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872108083" data-media-type="image"  data-group-name="color" data-group-value="camo">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number - 8 -->
									
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872140851" data-media-type="image"  data-group-name="color" data-group-value="camo">
                                       <div class="product-gallery__size-limiter" style="max-width: 1400px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Imagee Number - 9 -->
									
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872206387" data-media-type="image"  data-group-name="color" data-group-value="forest green">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number - 10 -->
									
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872501299" data-media-type="image"  data-group-name="color" data-group-value="forest green">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number - 11 -->
									
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872534067" data-media-type="image"  data-group-name="color" data-group-value="forest green">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									<!-- Image Number - 12 -->
									
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872566835" data-media-type="image"  data-group-name="color" data-group-value="forest green">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
									
									
									
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872599603" data-media-type="image"  data-group-name="color" data-group-value="forest green">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872632371" data-media-type="image"  data-group-name="color" data-group-value="grey">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872665139" data-media-type="image"  data-group-name="color" data-group-value="grey">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872697907" data-media-type="image"  data-group-name="color" data-group-value="grey">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872730675" data-media-type="image"  data-group-name="color" data-group-value="grey">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872763443" data-media-type="image"  data-group-name="color" data-group-value="grey">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744872796211" data-media-type="image"  data-group-name="color" data-group-value="pink">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <!-- <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873025587" data-media-type="image"  data-group-name="color" data-group-value="pink">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div> -->
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873058355" data-media-type="image"  data-group-name="color" data-group-value="pink">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_485__4_89342a57-ddd8-4f3a-a7dc-4e01ed009b07_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873091123" data-media-type="image"  data-group-name="color" data-group-value="pink">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873123891" data-media-type="image"  data-group-name="color" data-group-value="pink">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873156659" data-media-type="image"  data-group-name="color" data-group-value="red">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873189427" data-media-type="image"  data-group-name="color" data-group-value="red">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873222195" data-media-type="image"  data-group-name="color" data-group-value="red">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873254963" data-media-type="image"  data-group-name="color" data-group-value="red">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873287731" data-media-type="image"  data-group-name="color" data-group-value="red">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2781538844723" data-media-type="image"  data-group-name="color" data-group-value="sand">
                                       <div class="product-gallery__size-limiter" style="max-width: 1466px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc_{width}x.jpg?v=1570083556" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc_1600x.jpg?v=1570083556" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc_800x758a.jpg?v=1570083556" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873582643" data-media-type="image"  data-group-name="color" data-group-value="sand">
                                       <div class="product-gallery__size-limiter" style="max-width: 1600px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873615411" data-media-type="image"  data-group-name="color" data-group-value="sand">
                                       <div class="product-gallery__size-limiter" style="max-width: 1600px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873648179" data-media-type="image"  data-group-name="color" data-group-value="sand">
                                       <div class="product-gallery__size-limiter" style="max-width: 1430px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873680947" data-media-type="image"  data-group-name="color" data-group-value="teal">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873713715" data-media-type="image"  data-group-name="color" data-group-value="teal">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_026__3_b6144529-7484-48e8-b48b-837ddab1f495_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                                <img src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873746483" data-media-type="image"  data-group-name="color" data-group-value="teal">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873779251" data-media-type="image"  data-group-name="color" data-group-value="teal">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873812019" data-media-type="image"  data-group-name="color" data-group-value="teal">
                                       <div class="product-gallery__size-limiter" style="max-width: 1500px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_304__5_c488a445-a703-4fe2-86f0-b3b563b161fd_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_304__5_c488a445-a703-4fe2-86f0-b3b563b161fd_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_304__5_c488a445-a703-4fe2-86f0-b3b563b161fd_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2781539991603" data-media-type="image"  data-group-name="color" data-group-value="white">
                                       <div class="product-gallery__size-limiter" style="max-width: 1466px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a_{width}x.jpg?v=1570083556" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a_1600x.jpg?v=1570083556" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a_800x758a.jpg?v=1570083556" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873844787" data-media-type="image"  data-group-name="color" data-group-value="white">
                                       <div class="product-gallery__size-limiter" style="max-width: 1600px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873877555" data-media-type="image"  data-group-name="color" data-group-value="white">
                                       <div class="product-gallery__size-limiter" style="max-width: 1600px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873910323" data-media-type="image"  data-group-name="color" data-group-value="white">
                                       <div class="product-gallery__size-limiter" style="max-width: 1600px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  is-filtered" tabindex="-1" data-media-id="2744873943091" data-media-type="image"  data-group-name="color" data-group-value="white">
                                       <div class="product-gallery__size-limiter" style="max-width: 1600px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908_{width}x.jpg?v=1570074236" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908_1600x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908_800x4cdc.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-gallery__carousel-item  " tabindex="-1" data-media-id="2759725023283" data-media-type="image"  >
                                       <div class="product-gallery__size-limiter" style="max-width: 1000px">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="product-gallery__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700_{width}x.jpg?v=1570078186" data-widths="[400,500,600,700,800,900,1000]" data-sizes="auto" data-zoom="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700_1600x.jpg?v=1570078186" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             <noscript>
                                                <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700_800x9b16.jpg?v=1570078186" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                             </noscript>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <span class="product-gallery__zoom-notice">
                                    <svg class="icon icon--zoom" viewBox="0 0 10 10" role="presentation">
                                       <path d="M7.58801492 6.8808396L9.999992 9.292784l-.70716.707208-2.41193007-2.41199543C6.15725808 8.15916409 5.24343297 8.50004 4.25 8.50004c-2.347188 0-4.249968-1.902876-4.249968-4.2501C.000032 1.902704 1.902812.000128 4.25.000128c2.347176 0 4.249956 1.902576 4.249956 4.249812 0 .99341752-.34083418 1.90724151-.91194108 2.6308996zM4.25.999992C2.455064.999992.999992 2.454944.999992 4.24994c0 1.794984 1.455072 3.249936 3.250008 3.249936 1.794924 0 3.249996-1.454952 3.249996-3.249936C7.499996 2.454944 6.044924.999992 4.25.999992z" fill="currentColor" fill-rule="evenodd"></path>
                                    </svg>
                                    Roll over image to zoom in
                                 </span>
                              </div>
                              <div class="scroller">
                                 <div class="scroller__inner">
                                    <div class="product-gallery__thumbnail-list">
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069_1024x9b16.jpg?" class="product-gallery__thumbnail is-nav-selected " data-media-id="2759721680947" data-group-name="color" data-group-value="black">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/rr21t2h2wcu-hl-5-samsung-original-imafnmkbyzev8szv.jpeg" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_950__3_a18a25dd-5fce-4ca3-95ca-377426c84175_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  " data-media-id="2744871944243" data-group-name="color" data-group-value="black">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/kent-ace-original-imafszvdebr69hyy.jpeg" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_177__4_8b5dec2f-32d6-441d-ac14-c259debeb4b6_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  " data-media-id="2744871977011" data-group-name="color" data-group-value="black">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/promotion-headphones_x2000_f4667f82-fb70-4ba6-abba-f696a2f91d9f_x4000688.png " alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_212__2_b04238d0-08da-4319-8cdd-893df4bc15ef_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  " data-media-id="2744872009779" data-group-name="color" data-group-value="black">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_401__5_a1d1b670-c599-40f4-a326-af6e17dc181c_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  " data-media-id="2744872042547" data-group-name="color" data-group-value="black">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
									   
									   <!--Finish Scrolin -->
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/jbl3cam2_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872075315" data-group-name="color" data-group-value="camo">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/jbl3cam2_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/jbl3cam_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872108083" data-group-name="color" data-group-value="camo">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/jbl3cam_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/jbl3cam3_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872140851" data-group-name="color" data-group-value="camo">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/jbl3cam3_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_218__1_b4b0f2a5-a0ad-4f14-a441-8f3cb8348c68_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872206387" data-group-name="color" data-group-value="forest green">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_218__1_b4b0f2a5-a0ad-4f14-a441-8f3cb8348c68_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_784__5_02d6b9b2-c03d-44a5-b2de-2bab07527330_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872501299" data-group-name="color" data-group-value="forest green">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_784__5_02d6b9b2-c03d-44a5-b2de-2bab07527330_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_015__2_20cefa3f-a066-42df-8282-d24f37474edb_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872534067" data-group-name="color" data-group-value="forest green">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_015__2_20cefa3f-a066-42df-8282-d24f37474edb_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_939__4_a4c9b123-5292-4fde-8e13-ee8063fc4f39_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872566835" data-group-name="color" data-group-value="forest green">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_939__4_a4c9b123-5292-4fde-8e13-ee8063fc4f39_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872599603" data-group-name="color" data-group-value="forest green">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872632371" data-group-name="color" data-group-value="grey">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872665139" data-group-name="color" data-group-value="grey">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872697907" data-group-name="color" data-group-value="grey">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872730675" data-group-name="color" data-group-value="grey">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872763443" data-group-name="color" data-group-value="grey">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744872796211" data-group-name="color" data-group-value="pink">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873025587" data-group-name="color" data-group-value="pink">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_485__4_89342a57-ddd8-4f3a-a7dc-4e01ed009b07_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873058355" data-group-name="color" data-group-value="pink">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_485__4_89342a57-ddd8-4f3a-a7dc-4e01ed009b07_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873091123" data-group-name="color" data-group-value="pink">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873123891" data-group-name="color" data-group-value="pink">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873156659" data-group-name="color" data-group-value="red">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873189427" data-group-name="color" data-group-value="red">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873222195" data-group-name="color" data-group-value="red">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873254963" data-group-name="color" data-group-value="red">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873287731" data-group-name="color" data-group-value="red">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc_1024x758a.jpg?v=1570083556" class="product-gallery__thumbnail  is-filtered" data-media-id="2781538844723" data-group-name="color" data-group-value="sand">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc_130x.jpg?v=1570083556" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873582643" data-group-name="color" data-group-value="sand">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873615411" data-group-name="color" data-group-value="sand">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873648179" data-group-name="color" data-group-value="sand">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873680947" data-group-name="color" data-group-value="teal">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_026__3_b6144529-7484-48e8-b48b-837ddab1f495_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873713715" data-group-name="color" data-group-value="teal">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_026__3_b6144529-7484-48e8-b48b-837ddab1f495_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873746483" data-group-name="color" data-group-value="teal">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="../cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873779251" data-group-name="color" data-group-value="teal">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16051_304__5_c488a445-a703-4fe2-86f0-b3b563b161fd_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873812019" data-group-name="color" data-group-value="teal">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/files/Screenshot_2020-08-07-14-29-22-66.png" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a>
                                       <!-- <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a_1024x758a.jpg?v=1570083556" class="product-gallery__thumbnail  is-filtered" data-media-id="2781539991603" data-group-name="color" data-group-value="white">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a_130x.jpg?v=1570083556" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a> -->
                                       <!-- <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873844787" data-group-name="color" data-group-value="white">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a> -->
                                       <!-- <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873877555" data-group-name="color" data-group-value="white">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a> -->
                                       <!-- <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873910323" data-group-name="color" data-group-value="white">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a> -->
                                      <!--  <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908_1024x4cdc.jpg?v=1570074236" class="product-gallery__thumbnail  is-filtered" data-media-id="2744873943091" data-group-name="color" data-group-value="white">
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908_130x.jpg?v=1570074236" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a> -->
                                       <!-- <a href="cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700_1024x9b16.jpg?v=1570078186" class="product-gallery__thumbnail  " data-media-id="2759725023283" >
                                          <div class="aspect-ratio" style="padding-bottom: 100.0%">
                                             <img class="image--fade-in lazyload" data-src="cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700_130x.jpg?v=1570078186" alt="JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker">
                                          </div>
                                       </a> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card card--collapsed ">
                        <div id="product-zoom-1560191744902" class="product__zoom-wrapper"></div>
                        <div class="card__section">
                           <div class="product-meta">
                              <!-- <h3 class="product-meta__title heading h2">
                                 <a href="products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker.html">JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker</a>
                              </h3> -->
                              <div class="product-meta__label-list"><span class="product-label product-label--on-sale" style="display: none">Save <span>$-59.95</span></span></div>
                              <div class="product-meta__reference"><a class="product-meta__vendor link link--accented" href="collections/jbl.html">JBL</a><span class="product-meta__sku">SKU: <span class="product-meta__sku-number">JBL-580619-CLI-BL</span>
                                 </span>
                              </div>
                             <!--  <a href="products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker.html#product-reviews" class="product-meta__reviews-badge link" data-offset="30">
                                 <span class="samrat-product-reviews-badge" data-id="1916173156403">
                                    <div class="spr-badge" style="opacity: 0">
                                       <span class="spr-starrating spr-badge-starrating">
                                       <i class="spr-icon spr-icon-star-empty"></i>
                                       <i class="spr-icon spr-icon-star-empty"></i>
                                       <i class="spr-icon spr-icon-star-empty"></i>
                                       <i class="spr-icon spr-icon-star-empty"></i>
                                       <i class="spr-icon spr-icon-star-empty"></i>
                                       </span>
                                       <span class="spr-badge-caption">filler</span>
                                    </div>
                                 </span>
                              </a> -->
                              <!-- <div class="product-meta__share-buttons hidden-phone">
                                 <ul class="social-media__item-list list--unstyled">
                                    <li class="social-media__item social-media__item--facebook">
                                       <a href="https://www.facebook.com/sharer.php?u=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker" target="_blank" rel="noopener" aria-label="Share on Facebook">
                                          <svg class="icon icon--facebook" viewBox="0 0 30 30">
                                             <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm3.2142857-17.1429611h-2.1428678v-2.1425646c0-.5852979.8203285-1.07160109 1.0714928-1.07160109h1.071375v-2.1428925h-2.1428678c-2.3564786 0-3.2142536 1.98610393-3.2142536 3.21449359v2.1425646h-1.0714822l.0032143 2.1528011 1.0682679-.0099086v7.499969h3.2142536v-7.499969h2.1428678v-2.1428925z" fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>
                                       </a>
                                    </li>
                                    <li class="social-media__item social-media__item--pinterest">
                                       <a href="../pinterest.com/pin/create/button/indexf92d.html?url=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker&amp;media=https://cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069_1024x.jpg?v=1570078186&amp;description=Like%20no%20other,%20the%20JBL%20Clip%203%20is%20a%20unique%20ultra-portable,%20ultra-rugged%20and%20waterproof%20Bluetooth%C2%AE..." target="_blank" rel="noopener" aria-label="Pin on Pinterest">
                                          <svg class="icon icon--pinterest" role="presentation" viewBox="0 0 30 30">
                                             <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm-.4492946-22.49876954c-.3287968.04238918-.6577148.08477836-.9865116.12714793-.619603.15784625-1.2950238.30765013-1.7959124.60980792-1.3367356.80672832-2.26284291 1.74754848-2.88355361 3.27881599-.1001431.247352-.10374313.4870343-.17702448.7625149-.47574032 1.7840923.36779138 3.6310327 1.39120339 4.2696951.1968419.1231267.6448551.3405257.8093833.0511377.0909873-.1603963.0706852-.3734014.1265202-.5593764.036883-.1231267.1532436-.3547666.1263818-.508219-.0455542-.260514-.316041-.4256572-.4299438-.635367-.230748-.4253041-.2421365-.8027267-.3541701-1.3723228.0084116-.0763633.0168405-.1527266.0253733-.2290899.0340445-.6372108.1384107-1.0968422.3287968-1.5502554.5593198-1.3317775 1.4578212-2.07273488 2.9088231-2.5163011.324591-.09899963 1.2400541-.25867013 1.7200175-.1523539.2867042.05078464.5734084.10156927.8600087.1523539 1.0390064.33760307 1.7953931.9602003 2.2007079 1.9316992.252902.6061594.3275507 1.7651044.1517724 2.5415071-.0833199.3679287-.0705641.6832289-.1770418 1.0168107-.3936666 1.2334841-.9709174 2.3763639-2.2765854 2.6942337-.8613761.2093567-1.5070793-.3321303-1.7200175-.8896824-.0589159-.1545509-.1598205-.4285603-.1011297-.6865243.2277711-1.0010987.5562045-1.8969797.8093661-2.8969995.24115-.9528838-.2166421-1.7048063-.9358863-1.8809146-.8949186-.2192233-1.585328.6350139-1.8211644 1.1943903-.1872881.4442919-.3005678 1.2641823-.1517724 1.8557085.0471811.1874265.2666617.689447.2276672.8640842-.1728187.7731269-.3685356 1.6039823-.5818373 2.3635745-.2219729.7906632-.3415527 1.5999416-.5564641 2.3639276-.098793.3507651-.0955738.7263439-.1770244 1.092821v.5337977c-.0739045.3379758-.0194367.9375444.0505042 1.2703809.0449484.2137505-.0261175.4786388.0758948.6357396.0020943.1140055.0159752.1388388.0506254.2031582.3168026-.0095136.7526829-.8673992.9106342-1.118027.3008274-.477913.5797431-.990879.8093833-1.5506281.2069844-.5042174.2391769-1.0621226.4046917-1.60104.1195798-.3894861.2889369-.843272.328918-1.2707535h.0252521c.065614.2342095.3033024.403727.4805692.5334446.5563429.4077482 1.5137774.7873678 2.5547742.5337977 1.1769151-.2868184 2.1141687-.8571599 2.7317812-1.702982.4549537-.6225776.7983583-1.3445472 1.0624066-2.1600633.1297394-.4011574.156982-.8454494.2529193-1.2711066.2405269-1.0661438-.0797199-2.3511383-.3794396-3.0497261-.9078995-2.11694836-2.8374975-3.32410832-5.918897-3.27881604z" fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>
                                       </a>
                                    </li>
                                    <li class="social-media__item social-media__item--twitter">
                                       <a href="https://twitter.com/share?text=JBL%20Clip%203%20Portable%20Waterproof%20Wireless%20Bluetooth%20Speaker&amp;url=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker" target="_blank" rel="noopener" aria-label="Tweet on Twitter">
                                          <svg class="icon icon--twitter" role="presentation" viewBox="0 0 30 30">
                                             <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm3.4314771-20.35648929c-.134011.01468929-.2681239.02905715-.4022367.043425-.2602865.05139643-.5083383.11526429-.7319208.20275715-.9352275.36657324-1.5727317 1.05116784-1.86618 2.00016964-.1167278.3774214-.1643635 1.0083696-.0160821 1.3982464-.5276368-.0006268-1.0383364-.0756643-1.4800457-.1737-1.7415129-.3873214-2.8258768-.9100285-4.02996109-1.7609946-.35342035-.2497018-.70016357-.5329286-.981255-.8477679-.09067071-.1012178-.23357785-.1903178-.29762142-.3113357-.00537429-.0025553-.01072822-.0047893-.0161025-.0073446-.13989429.2340643-.27121822.4879125-.35394965.7752857-.32626393 1.1332446.18958607 2.0844643.73998215 2.7026518.16682678.187441.43731214.3036696.60328392.4783178h.01608215c-.12466715.041834-.34181679-.0159589-.45040179-.0360803-.25715143-.0482143-.476235-.0919607-.69177643-.1740215-.11255464-.0482142-.22521107-.09675-.3378675-.1449642-.00525214 1.251691.69448393 2.0653071 1.55247643 2.5503267.27968679.158384.67097143.3713625 1.07780893.391484-.2176789.1657285-1.14873321.0897268-1.47198429.0581143.40392643.9397285 1.02481929 1.5652607 2.09147249 1.9056375.2750861.0874928.6108975.1650857.981255.1593482-.1965482.2107446-.6162514.3825321-.8928439.528766-.57057.3017572-1.2328489.4971697-1.97873466.6450108-.2991075.0590785-.61700464.0469446-.94113107.0941946-.35834678.0520554-.73320321-.02745-1.0537875-.0364018.09657429.053325.19312822.1063286.28958036.1596536.2939775.1615821.60135.3033482.93309.4345875.59738036.2359768 1.23392786.4144661 1.93859037.5725286 1.4209286.3186642 3.4251707.175291 4.6653278-.1740215 3.4539354-.9723053 5.6357529-3.2426035 6.459179-6.586425.1416246-.5754053.162226-1.2283875.1527803-1.9126768.1716718-.1232517.3432215-.2465035.5148729-.3697553.4251996-.3074947.8236703-.7363286 1.118055-1.1591036v-.00765c-.5604729.1583679-1.1506672.4499036-1.8661597.4566054v-.0070232c.1397925-.0495.250515-.1545429.3619908-.2321358.5021089-.3493285.8288003-.8100964 1.0697678-1.39826246-.1366982.06769286-.2734778.13506429-.4101761.20275716-.4218407.1938214-1.1381067.4719375-1.689256.5144143-.6491893-.5345357-1.3289754-.95506074-2.6061215-.93461789z" fill="currentColor" fill-rule="evenodd"></path>
                                          </svg>
                                       </a>
                                    </li>
                                    <li class="social-media__item">
                                       <a href="mailto:?&subject=JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker&body=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker" aria-label="Share by email">
                                          <svg class="icon icon--email" role="presentation" viewBox="0 0 28 28">
                                             <path d="M14 28C6.2680135 28 0 21.7319865 0 14S6.2680135 0 14 0s14 6.2680135 14 14-6.2680135 14-14 14zm-3.2379501-18h6.4759002L14 12.6982917 10.7620499 10zM19 11.1350416V18H9v-6.8649584l5 4.1666667 5-4.1666667zM21 8H7v12h14V8z"></path>
                                          </svg>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           --> </div>
                           <hr class="card__separator">
                           <form method="post" action="#" id="product_form_1916173156403" accept-charset="UTF-8" class="product-form" enctype="multipart/form-data">
                              <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                             <!--  <div class="product-form__variants">
                                 <div class="product-form__option" data-selector-type="color">
                                    <span class="product-form__option-name text--strong">Color: <span class="product-form__selected-value">Black</span></span>
                                    <div class="color-swatch-list color-swatch-list--large">
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-1" value="Black" checked data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-1" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/black_64x64.png?v=1559050383" title="Black">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-2" value="Camo"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-2" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/camo_64x64.png?v=1559119219" title="Camo">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-3" value="Forest Green"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-3" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/forest-green_64x64.png?v=1559050356" title="Forest Green">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-4" value="Grey"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-4" style="background-color: grey" title="Grey">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-5" value="Pink"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-5" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/pink_64x64.png?v=1559050357" title="Pink">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-6" value="Red"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-6" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/red_64x64.png?v=1559050356" title="Red">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-7" value="Sand"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-7" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/sand_64x64.png?v=1559050358" title="Sand">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch ">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-8" value="Teal"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-8" data-bg="//cdn.samrat.com/s/files/1/0065/3095/7363/files/teal_64x64.png?v=1559050364" title="Teal">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                       <div class="color-swatch color-swatch--white">
                                          <input class="color-swatch__radio product-form__single-selector" type="radio" name="1560191744902-1916173156403-1" id="1560191744902-1916173156403-1-9" value="White"  data-option-position="1" aria-hidden="true">
                                          <label class="color-swatch__item lazyload" for="1560191744902-1916173156403-1-9" style="background-color: white" title="White">
                                             <svg class="icon icon--cross-sold-out" viewBox="0 0 14 14" role="presentation">
                                                <g fill-rule="nonzero" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="square">
                                                   <path d="M11.89949494 2L2 11.89949494M1.99999906 2l9.89949494 9.89949494"></path>
                                                </g>
                                             </svg>
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="no-js product-form__option">
                                    <label for="product-select-1916173156403">Variant</label>
                                    <div class="select-wrapper select-wrapper--primary">
                                       <select id="product-select-1916173156403" name="id">
                                          <option selected="selected"  value="17549949829171" data-sku="JBL-580619-CLI-BL">Black - Rs. 5910.95</option>
                                          <option   value="17549949861939" data-sku="JBL-240001-CLI-CA">Camo - $59.95</option>
                                          <option   value="17549949894707" data-sku="JBL-785065-CLI-FO">Forest Green - $59.95</option>
                                          <option   value="17549949927475" data-sku="JBL-443532-CLI-GR">Grey - $59.95</option>
                                          <option   value="17549949960243" data-sku="JBL-517052-CLI-PI">Pink - $59.95</option>
                                          <option   value="17549949993011" data-sku="JBL-806041-CLI-RE">Red - $59.95</option>
                                          <option   value="17549950025779" data-sku="JBL-443554-CLI-SA">Sand - $59.95</option>
                                          <option   value="17549950058547" data-sku="JBL-989869-CLI-TE">Teal - $59.95</option>
                                          <option   value="17549950091315" data-sku="JBL-803211-CLI-WH">White - $59.95</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              --> <div class="product-form__info-list">
                                 <div class="product-form__info-item">
                                    <span class="product-form__info-title text--strong">Price:</span>
                                    <div class="product-form__info-content">
                                       <div class="price-list"><span class="price">Rs. 5900</span></div>
                                       <div class="product-form__price-info" style="display: none">
                                          <div class="unit-price-measurement">
                                             <span class="unit-price-measurement__price"></span>
                                             <span class="unit-price-measurement__separator">/ </span><span class="unit-price-measurement__reference-value"></span><span class="unit-price-measurement__reference-unit"></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-form__info-item">
                                    <span class="product-form__info-title text--strong">Stock:</span>
                                    <div class="product-form__info-content"><span class="product-form__inventory inventory inventory--high">In stock (45 units), ready to be shipped</span><span class="inventory-bar " data-stock-countdown-max="214.0">
                                       <span class="inventory-bar__progress" style="width: 100%"></span>
                                       </span>
                                    </div>
                                 </div>
                                 <!-- <div class="product-form__info-item product-form__info-item--quantity">
                                    <label for="1560191744902-1916173156403-quantity" class="product-form__info-title text--strong">Quantity:</label>
                                    <div class="product-form__info-content">
                                       <div class="select-wrapper select-wrapper--small select-wrapper--primary">
                                          <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                             <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                          </svg>
                                           <select name="quantity" id="1560191744902-1916173156403-quantity" class="product-form__quantity">
                                             <option value="1" selected="selected">1</option>
                                             <option value="2" >2</option>
                                             <option value="3" >3</option>
                                             <option value="4" >4</option>
                                             <option value="5" >5</option>
                                             <option value="6" >6</option>
                                             <option value="7" >7</option>
                                             <option value="8" >8</option>
                                             <option value="9" >9</option>
                                             <option value="10" >10+</option>
                                          </select> 
                                       </div>
                                    </div>
                                 </div> -->
                              </div>
                              <!-- <div class="product-form__payment-container">
                                 <button type="submit" class="product-form__add-button button button--primary" data-action="add-to-cart">Add to cart</button>
                                 <div data-samrat="payment-button" class="samrat-payment-button"><button class="samrat-payment-button__button samrat-payment-button__button--unbranded samrat-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button><button class="samrat-payment-button__more-options samrat-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button></div>
                              </div> -->
                           </form>
                           <div class="product-meta__share-buttons hidden-tablet-and-up">
                              <span class="text--strong">Share this product</span>
                             <!--  <ul class="social-media__item-list list--unstyled">
                                 <li class="social-media__item social-media__item--facebook">
                                    <a href="https://www.facebook.com/sharer.php?u=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker" target="_blank" rel="noopener" aria-label="Share on Facebook">
                                       <svg class="icon icon--facebook" viewBox="0 0 30 30">
                                          <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm3.2142857-17.1429611h-2.1428678v-2.1425646c0-.5852979.8203285-1.07160109 1.0714928-1.07160109h1.071375v-2.1428925h-2.1428678c-2.3564786 0-3.2142536 1.98610393-3.2142536 3.21449359v2.1425646h-1.0714822l.0032143 2.1528011 1.0682679-.0099086v7.499969h3.2142536v-7.499969h2.1428678v-2.1428925z" fill="currentColor" fill-rule="evenodd"></path>
                                       </svg>
                                    </a>
                                 </li>
                                 <li class="social-media__item social-media__item--pinterest">
                                    <a href="../pinterest.com/pin/create/button/indexf92d.html?url=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker&amp;media=https://cdn.samrat.com/s/files/1/0065/3095/7363/products/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069_1024x.jpg?v=1570078186&amp;description=Like%20no%20other,%20the%20JBL%20Clip%203%20is%20a%20unique%20ultra-portable,%20ultra-rugged%20and%20waterproof%20Bluetooth%C2%AE..." target="_blank" rel="noopener" aria-label="Pin on Pinterest">
                                       <svg class="icon icon--pinterest" role="presentation" viewBox="0 0 30 30">
                                          <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm-.4492946-22.49876954c-.3287968.04238918-.6577148.08477836-.9865116.12714793-.619603.15784625-1.2950238.30765013-1.7959124.60980792-1.3367356.80672832-2.26284291 1.74754848-2.88355361 3.27881599-.1001431.247352-.10374313.4870343-.17702448.7625149-.47574032 1.7840923.36779138 3.6310327 1.39120339 4.2696951.1968419.1231267.6448551.3405257.8093833.0511377.0909873-.1603963.0706852-.3734014.1265202-.5593764.036883-.1231267.1532436-.3547666.1263818-.508219-.0455542-.260514-.316041-.4256572-.4299438-.635367-.230748-.4253041-.2421365-.8027267-.3541701-1.3723228.0084116-.0763633.0168405-.1527266.0253733-.2290899.0340445-.6372108.1384107-1.0968422.3287968-1.5502554.5593198-1.3317775 1.4578212-2.07273488 2.9088231-2.5163011.324591-.09899963 1.2400541-.25867013 1.7200175-.1523539.2867042.05078464.5734084.10156927.8600087.1523539 1.0390064.33760307 1.7953931.9602003 2.2007079 1.9316992.252902.6061594.3275507 1.7651044.1517724 2.5415071-.0833199.3679287-.0705641.6832289-.1770418 1.0168107-.3936666 1.2334841-.9709174 2.3763639-2.2765854 2.6942337-.8613761.2093567-1.5070793-.3321303-1.7200175-.8896824-.0589159-.1545509-.1598205-.4285603-.1011297-.6865243.2277711-1.0010987.5562045-1.8969797.8093661-2.8969995.24115-.9528838-.2166421-1.7048063-.9358863-1.8809146-.8949186-.2192233-1.585328.6350139-1.8211644 1.1943903-.1872881.4442919-.3005678 1.2641823-.1517724 1.8557085.0471811.1874265.2666617.689447.2276672.8640842-.1728187.7731269-.3685356 1.6039823-.5818373 2.3635745-.2219729.7906632-.3415527 1.5999416-.5564641 2.3639276-.098793.3507651-.0955738.7263439-.1770244 1.092821v.5337977c-.0739045.3379758-.0194367.9375444.0505042 1.2703809.0449484.2137505-.0261175.4786388.0758948.6357396.0020943.1140055.0159752.1388388.0506254.2031582.3168026-.0095136.7526829-.8673992.9106342-1.118027.3008274-.477913.5797431-.990879.8093833-1.5506281.2069844-.5042174.2391769-1.0621226.4046917-1.60104.1195798-.3894861.2889369-.843272.328918-1.2707535h.0252521c.065614.2342095.3033024.403727.4805692.5334446.5563429.4077482 1.5137774.7873678 2.5547742.5337977 1.1769151-.2868184 2.1141687-.8571599 2.7317812-1.702982.4549537-.6225776.7983583-1.3445472 1.0624066-2.1600633.1297394-.4011574.156982-.8454494.2529193-1.2711066.2405269-1.0661438-.0797199-2.3511383-.3794396-3.0497261-.9078995-2.11694836-2.8374975-3.32410832-5.918897-3.27881604z" fill="currentColor" fill-rule="evenodd"></path>
                                       </svg>
                                    </a>
                                 </li>
                                 <li class="social-media__item social-media__item--twitter">
                                    <a href="https://twitter.com/share?text=JBL%20Clip%203%20Portable%20Waterproof%20Wireless%20Bluetooth%20Speaker&amp;url=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker" target="_blank" rel="noopener" aria-label="Tweet on Twitter">
                                       <svg class="icon icon--twitter" role="presentation" viewBox="0 0 30 30">
                                          <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm3.4314771-20.35648929c-.134011.01468929-.2681239.02905715-.4022367.043425-.2602865.05139643-.5083383.11526429-.7319208.20275715-.9352275.36657324-1.5727317 1.05116784-1.86618 2.00016964-.1167278.3774214-.1643635 1.0083696-.0160821 1.3982464-.5276368-.0006268-1.0383364-.0756643-1.4800457-.1737-1.7415129-.3873214-2.8258768-.9100285-4.02996109-1.7609946-.35342035-.2497018-.70016357-.5329286-.981255-.8477679-.09067071-.1012178-.23357785-.1903178-.29762142-.3113357-.00537429-.0025553-.01072822-.0047893-.0161025-.0073446-.13989429.2340643-.27121822.4879125-.35394965.7752857-.32626393 1.1332446.18958607 2.0844643.73998215 2.7026518.16682678.187441.43731214.3036696.60328392.4783178h.01608215c-.12466715.041834-.34181679-.0159589-.45040179-.0360803-.25715143-.0482143-.476235-.0919607-.69177643-.1740215-.11255464-.0482142-.22521107-.09675-.3378675-.1449642-.00525214 1.251691.69448393 2.0653071 1.55247643 2.5503267.27968679.158384.67097143.3713625 1.07780893.391484-.2176789.1657285-1.14873321.0897268-1.47198429.0581143.40392643.9397285 1.02481929 1.5652607 2.09147249 1.9056375.2750861.0874928.6108975.1650857.981255.1593482-.1965482.2107446-.6162514.3825321-.8928439.528766-.57057.3017572-1.2328489.4971697-1.97873466.6450108-.2991075.0590785-.61700464.0469446-.94113107.0941946-.35834678.0520554-.73320321-.02745-1.0537875-.0364018.09657429.053325.19312822.1063286.28958036.1596536.2939775.1615821.60135.3033482.93309.4345875.59738036.2359768 1.23392786.4144661 1.93859037.5725286 1.4209286.3186642 3.4251707.175291 4.6653278-.1740215 3.4539354-.9723053 5.6357529-3.2426035 6.459179-6.586425.1416246-.5754053.162226-1.2283875.1527803-1.9126768.1716718-.1232517.3432215-.2465035.5148729-.3697553.4251996-.3074947.8236703-.7363286 1.118055-1.1591036v-.00765c-.5604729.1583679-1.1506672.4499036-1.8661597.4566054v-.0070232c.1397925-.0495.250515-.1545429.3619908-.2321358.5021089-.3493285.8288003-.8100964 1.0697678-1.39826246-.1366982.06769286-.2734778.13506429-.4101761.20275716-.4218407.1938214-1.1381067.4719375-1.689256.5144143-.6491893-.5345357-1.3289754-.95506074-2.6061215-.93461789z" fill="currentColor" fill-rule="evenodd"></path>
                                       </svg>
                                    </a>
                                 </li>
                                 <li class="social-media__item">
                                    <a href="mailto:?&subject=JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker&body=https://warehouse-theme-metal.myshopify.com/products/jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker" aria-label="Share by email">
                                       <svg class="icon icon--email" role="presentation" viewBox="0 0 28 28">
                                          <path d="M14 28C6.2680135 28 0 21.7319865 0 14S6.2680135 0 14 0s14 6.2680135 14 14-6.2680135 14-14 14zm-3.2379501-18h6.4759002L14 12.6982917 10.7620499 10zM19 11.1350416V18H9v-6.8649584l5 4.1666667 5-4.1666667zM21 8H7v12h14V8z"></path>
                                       </svg>
                                    </a>
                                 </li>
                              </ul>
                          -->  </div>
                        </div>
                        <script type="application/json" data-product-json>
                           {
                             "product": {"id":1916173156403,"title":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker","handle":"jbl-clip-3-portable-waterproof-wireless-bluetooth-speaker","description":"\u003cp\u003eLike no other, the JBL Clip 3 is a unique ultra-portable, ultra-rugged and waterproof Bluetooth® speaker that is small in size but with surprisingly big sound. The upgraded durable and fully integrated carabiner clips to your clothes, belt loop or backpack, making the Clip 3 your outdoor companion on every adventure. The Clip 3 is IPX7 waterproof and offers 10 hours of playtime, powered by a 1000mAh rechargeable Li-ion battery, allowing you to bring your music with you. A built-in noise and echo-cancelling speakerphone gives you crystal clear calls with the press of a button.\u003c\/p\u003e\n\u003ch6\u003eSound to go\u003c\/h6\u003e\n\u003cp\u003eNever leave awesome sound at home again. Clip it on with the built-in carabiner, press play and make the moment pop.\u003c\/p\u003e\n\u003ch6\u003eWaterproof\u003c\/h6\u003e\n\u003cp\u003eA speaker and a submersible in one. Immerse yourself in sound that’s not afraid of a little H2O.\u003c\/p\u003e\n\u003ch6\u003eFeatures:\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eWireless Bluetooth Streaming\u003c\/li\u003e\n\u003cli\u003e10 Hours of Playtime\u003c\/li\u003e\n\u003cli\u003eIPX7 Waterproof\u003c\/li\u003e\n\u003cli\u003eIntegrated Carabiner\u003c\/li\u003e\n\u003cli\u003eSpeakerphone\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch6\u003ePackage contains:\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eJBL Clip 3\u003c\/li\u003e\n\u003cli\u003eMicro USB Cable for charging\u003c\/li\u003e\n\u003cli\u003eSafety Sheet\u003c\/li\u003e\n\u003cli\u003eQuick Start Guide\u003c\/li\u003e\n\u003cli\u003eWarranty Card\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eThis is a demo store. This product can be bought on \u003ca href=\"https:\/\/www.hideflifestyle.com\/\"\u003eHiDEF Lifestyle eshop\u003c\/a\u003e.\u003c\/p\u003e\n\u003cem\u003eAll logos, images, descriptions and brands are the property of their respective owners.\u003c\/em\u003e","published_at":"2019-05-28T12:01:53-04:00","created_at":"2019-05-28T12:01:53-04:00","vendor":"JBL","type":"Portable Speakers","tags":["__stock:214","Bluetooth","Brand_JBL","Color_Black","Color_Camo","Color_Champagne","Color_Dark Grey","Color_Green","Color_Red","Color_Rose","Color_White","Portable","Portable Speakers","Price_$0 to $100","Speakers","Waterproof"],"price":5995,"price_min":5995,"price_max":5995,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":17549949829171,"title":"Black","option1":"Black","option2":null,"option3":null,"sku":"JBL-580619-CLI-BL","requires_shipping":true,"taxable":true,"featured_image":{"id":5912095785011,"product_id":1916173156403,"position":1,"created_at":"2019-06-02T09:48:30-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_black","width":1500,"height":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069.jpg?v=1560250249","variant_ids":[17549949829171]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Black","public_title":"Black","options":["Black"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344326","featured_media":{"alt":"#color_black","id":2759721680947,"position":1,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069.jpg?v=1570078186"}}},{"id":17549949861939,"title":"Camo","option1":"Camo","option2":null,"option3":null,"sku":"JBL-240001-CLI-CA","requires_shipping":true,"taxable":true,"featured_image":{"id":5862229278771,"product_id":1916173156403,"position":6,"created_at":"2019-05-28T12:02:04-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_camo","width":1396,"height":1396,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam2.jpg?v=1560250249","variant_ids":[17549949861939]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Camo","public_title":"Camo","options":["Camo"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036354257","featured_media":{"alt":"#color_camo","id":2744872075315,"position":6,"preview_image":{"aspect_ratio":1.0,"height":1396,"width":1396,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam2.jpg?v=1570074236"}}},{"id":17549949894707,"title":"Forest Green","option1":"Forest Green","option2":null,"option3":null,"sku":"JBL-785065-CLI-FO","requires_shipping":true,"taxable":true,"featured_image":{"id":5862229442611,"product_id":1916173156403,"position":9,"created_at":"2019-05-28T12:02:04-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_forest green","width":1500,"height":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_218__1_b4b0f2a5-a0ad-4f14-a441-8f3cb8348c68.jpg?v=1560250249","variant_ids":[17549949894707]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Forest Green","public_title":"Forest Green","options":["Forest Green"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344388","featured_media":{"alt":"#color_forest green","id":2744872206387,"position":9,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_218__1_b4b0f2a5-a0ad-4f14-a441-8f3cb8348c68.jpg?v=1570074236"}}},{"id":17549949927475,"title":"Grey","option1":"Grey","option2":null,"option3":null,"sku":"JBL-443532-CLI-GR","requires_shipping":true,"taxable":true,"featured_image":{"id":5862230884403,"product_id":1916173156403,"position":14,"created_at":"2019-05-28T12:02:15-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_grey","width":1500,"height":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99.jpg?v=1560250249","variant_ids":[17549949927475]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Grey","public_title":"Grey","options":["Grey"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344357","featured_media":{"alt":"#color_grey","id":2744872632371,"position":14,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99.jpg?v=1570074236"}}},{"id":17549949960243,"title":"Pink","option1":"Pink","option2":null,"option3":null,"sku":"JBL-517052-CLI-PI","requires_shipping":true,"taxable":true,"featured_image":{"id":5862231048243,"product_id":1916173156403,"position":19,"created_at":"2019-05-28T12:02:15-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_pink","width":1500,"height":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a.jpg?v=1560250249","variant_ids":[17549949960243]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Pink","public_title":"Pink","options":["Pink"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344401","featured_media":{"alt":"#color_pink","id":2744872796211,"position":19,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a.jpg?v=1570074236"}}},{"id":17549949993011,"title":"Red","option1":"Red","option2":null,"option3":null,"sku":"JBL-806041-CLI-RE","requires_shipping":true,"taxable":true,"featured_image":{"id":5862233407539,"product_id":1916173156403,"position":24,"created_at":"2019-05-28T12:02:24-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_red","width":1500,"height":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297.jpg?v=1560250249","variant_ids":[17549949993011]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Red","public_title":"Red","options":["Red"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344340","featured_media":{"alt":"#color_red","id":2744873156659,"position":24,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297.jpg?v=1570074236"}}},{"id":17549950025779,"title":"Sand","option1":"Sand","option2":null,"option3":null,"sku":"JBL-443554-CLI-SA","requires_shipping":true,"taxable":true,"featured_image":{"id":6070325739571,"product_id":1916173156403,"position":29,"created_at":"2019-06-11T06:49:43-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_sand","width":1466,"height":1466,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc.jpg?v=1560250249","variant_ids":[17549950025779]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Sand","public_title":"Sand","options":["Sand"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344418","featured_media":{"alt":"#color_sand","id":2781538844723,"position":29,"preview_image":{"aspect_ratio":1.0,"height":1466,"width":1466,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc.jpg?v=1570083556"}}},{"id":17549950058547,"title":"Teal","option1":"Teal","option2":null,"option3":null,"sku":"JBL-989869-CLI-TE","requires_shipping":true,"taxable":true,"featured_image":{"id":5862234292275,"product_id":1916173156403,"position":33,"created_at":"2019-05-28T12:02:34-04:00","updated_at":"2019-06-11T06:50:49-04:00","alt":"#color_teal","width":1500,"height":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a.jpg?v=1560250249","variant_ids":[17549950058547]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - Teal","public_title":"Teal","options":["Teal"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344364","featured_media":{"alt":"#color_teal","id":2744873680947,"position":33,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a.jpg?v=1570074236"}}},{"id":17549950091315,"title":"White","option1":"White","option2":null,"option3":null,"sku":"JBL-803211-CLI-WH","requires_shipping":true,"taxable":true,"featured_image":{"id":6070343958579,"product_id":1916173156403,"position":38,"created_at":"2019-06-11T06:50:44-04:00","updated_at":"2019-06-11T06:50:53-04:00","alt":"#color_white","width":1466,"height":1466,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a.jpg?v=1560250253","variant_ids":[17549950091315]},"available":true,"name":"JBL Clip 3 Portable Waterproof Wireless Bluetooth Speaker - White","public_title":"White","options":["White"],"price":5995,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"50036344371","featured_media":{"alt":"#color_white","id":2781539991603,"position":38,"preview_image":{"aspect_ratio":1.0,"height":1466,"width":1466,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a.jpg?v=1570083556"}}}],"images":["\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_950__3_a18a25dd-5fce-4ca3-95ca-377426c84175.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_177__4_8b5dec2f-32d6-441d-ac14-c259debeb4b6.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_212__2_b04238d0-08da-4319-8cdd-893df4bc15ef.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_401__5_a1d1b670-c599-40f4-a326-af6e17dc181c.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam2.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam3.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_218__1_b4b0f2a5-a0ad-4f14-a441-8f3cb8348c68.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_784__5_02d6b9b2-c03d-44a5-b2de-2bab07527330.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_015__2_20cefa3f-a066-42df-8282-d24f37474edb.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_939__4_a4c9b123-5292-4fde-8e13-ee8063fc4f39.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_485__4_89342a57-ddd8-4f3a-a7dc-4e01ed009b07.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_026__3_b6144529-7484-48e8-b48b-837ddab1f495.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_304__5_c488a445-a703-4fe2-86f0-b3b563b161fd.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a.jpg?v=1560250253","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79.jpg?v=1560250249","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908.jpg?v=1560250249","\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700.jpg?v=1560250249"],"featured_image":"\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069.jpg?v=1560250249","options":["Color"],"media":[{"alt":"#color_black","id":2759721680947,"position":1,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069.jpg?v=1570078186"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_417__1_dcd9694a-a473-46e8-9368-d0aaadbce069.jpg?v=1570078186","width":1500},{"alt":"#color_black","id":2744871944243,"position":2,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_950__3_a18a25dd-5fce-4ca3-95ca-377426c84175.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_950__3_a18a25dd-5fce-4ca3-95ca-377426c84175.jpg?v=1570074236","width":1500},{"alt":"#color_black","id":2744871977011,"position":3,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_177__4_8b5dec2f-32d6-441d-ac14-c259debeb4b6.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_177__4_8b5dec2f-32d6-441d-ac14-c259debeb4b6.jpg?v=1570074236","width":1500},{"alt":"#color_black","id":2744872009779,"position":4,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_212__2_b04238d0-08da-4319-8cdd-893df4bc15ef.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_212__2_b04238d0-08da-4319-8cdd-893df4bc15ef.jpg?v=1570074236","width":1500},{"alt":"#color_black","id":2744872042547,"position":5,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_401__5_a1d1b670-c599-40f4-a326-af6e17dc181c.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_401__5_a1d1b670-c599-40f4-a326-af6e17dc181c.jpg?v=1570074236","width":1500},{"alt":"#color_camo","id":2744872075315,"position":6,"preview_image":{"aspect_ratio":1.0,"height":1396,"width":1396,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam2.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1396,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam2.jpg?v=1570074236","width":1396},{"alt":"#color_camo","id":2744872108083,"position":7,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam.jpg?v=1570074236","width":1500},{"alt":"#color_camo","id":2744872140851,"position":8,"preview_image":{"aspect_ratio":1.0,"height":1400,"width":1400,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam3.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1400,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/jbl3cam3.jpg?v=1570074236","width":1400},{"alt":"#color_forest green","id":2744872206387,"position":9,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_218__1_b4b0f2a5-a0ad-4f14-a441-8f3cb8348c68.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_218__1_b4b0f2a5-a0ad-4f14-a441-8f3cb8348c68.jpg?v=1570074236","width":1500},{"alt":"#color_forest green","id":2744872501299,"position":10,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_784__5_02d6b9b2-c03d-44a5-b2de-2bab07527330.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_784__5_02d6b9b2-c03d-44a5-b2de-2bab07527330.jpg?v=1570074236","width":1500},{"alt":"#color_forest green","id":2744872534067,"position":11,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_015__2_20cefa3f-a066-42df-8282-d24f37474edb.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_015__2_20cefa3f-a066-42df-8282-d24f37474edb.jpg?v=1570074236","width":1500},{"alt":"#color_forest green","id":2744872566835,"position":12,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_939__4_a4c9b123-5292-4fde-8e13-ee8063fc4f39.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_939__4_a4c9b123-5292-4fde-8e13-ee8063fc4f39.jpg?v=1570074236","width":1500},{"alt":"#color_forest green","id":2744872599603,"position":13,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16052_546__3_19d07f47-b306-4967-84e4-cb111b07c8f8.jpg?v=1570074236","width":1500},{"alt":"#color_grey","id":2744872632371,"position":14,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_393__1_8870a769-a683-4b4a-9f70-df11cd3dcf99.jpg?v=1570074236","width":1500},{"alt":"#color_grey","id":2744872665139,"position":15,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_153__3_bbca1317-9cfd-48f5-8bb8-869f8235a727.jpg?v=1570074236","width":1500},{"alt":"#color_grey","id":2744872697907,"position":16,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_222__4_06e30ec4-8fe9-4d38-ba0d-5c6c39a3cde4.jpg?v=1570074236","width":1500},{"alt":"#color_grey","id":2744872730675,"position":17,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_307__2_df7b6012-d663-4b31-9437-a9b1c41d73e1.jpg?v=1570074236","width":1500},{"alt":"#color_grey","id":2744872763443,"position":18,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16055_429__5_33951197-9c29-4687-8635-d206dd3c6982.jpg?v=1570074236","width":1500},{"alt":"#color_pink","id":2744872796211,"position":19,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_285__1_596ec850-e4a7-484f-80cc-222c3fda2f3a.jpg?v=1570074236","width":1500},{"alt":"#color_pink","id":2744873025587,"position":20,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_156__3_daf804a0-3f9f-45b6-b350-e3388785d5d4.jpg?v=1570074236","width":1500},{"alt":"#color_pink","id":2744873058355,"position":21,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_485__4_89342a57-ddd8-4f3a-a7dc-4e01ed009b07.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_485__4_89342a57-ddd8-4f3a-a7dc-4e01ed009b07.jpg?v=1570074236","width":1500},{"alt":"#color_pink","id":2744873091123,"position":22,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_294__2_22ea84d4-8124-49e1-abce-118e9d790a28.jpg?v=1570074236","width":1500},{"alt":"#color_pink","id":2744873123891,"position":23,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16050_066__5_4a9276e9-e9fc-4244-9fa2-0d2ba22085d2.jpg?v=1570074236","width":1500},{"alt":"#color_red","id":2744873156659,"position":24,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_046__1_4270a960-9017-4dd2-8ab1-6eb0bdff9297.jpg?v=1570074236","width":1500},{"alt":"#color_red","id":2744873189427,"position":25,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_431__3_95efd050-d985-482f-9311-ea56756b7df3.jpg?v=1570074236","width":1500},{"alt":"#color_red","id":2744873222195,"position":26,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_297__4_39294b72-b114-4f18-91a5-ddfd11fadbaf.jpg?v=1570074236","width":1500},{"alt":"#color_red","id":2744873254963,"position":27,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_793__2_bb4f252b-9a06-42ac-8033-9ec69ace4c95.jpg?v=1570074236","width":1500},{"alt":"#color_red","id":2744873287731,"position":28,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16053_041__5_934e7833-a6ad-4829-9464-858dd0d704c2.jpg?v=1570074236","width":1500},{"alt":"#color_sand","id":2781538844723,"position":29,"preview_image":{"aspect_ratio":1.0,"height":1466,"width":1466,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc.jpg?v=1570083556"},"aspect_ratio":1.0,"height":1466,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_230__1_ff626e13-5ba1-4393-ac68-b78520304adc.jpg?v=1570083556","width":1466},{"alt":"#color_sand","id":2744873582643,"position":30,"preview_image":{"aspect_ratio":1.0,"height":1600,"width":1600,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1600,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_873__2_a26beac3-6034-4c0c-8cf9-cff2d3ce6c75.jpg?v=1570074236","width":1600},{"alt":"#color_sand","id":2744873615411,"position":31,"preview_image":{"aspect_ratio":1.0,"height":1600,"width":1600,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1600,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_637__3_8958cd12-3b35-496d-9a00-735ef9583ae7.jpg?v=1570074236","width":1600},{"alt":"#color_sand","id":2744873648179,"position":32,"preview_image":{"aspect_ratio":1.0,"height":1430,"width":1430,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1430,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16054_328__4_348a2136-ca41-4f8c-9cd3-e451bba267e0.jpg?v=1570074236","width":1430},{"alt":"#color_teal","id":2744873680947,"position":33,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_887__1_5f77f7e2-02ed-43a2-819b-134f80b7df1a.jpg?v=1570074236","width":1500},{"alt":"#color_teal","id":2744873713715,"position":34,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_026__3_b6144529-7484-48e8-b48b-837ddab1f495.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_026__3_b6144529-7484-48e8-b48b-837ddab1f495.jpg?v=1570074236","width":1500},{"alt":"#color_teal","id":2744873746483,"position":35,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_873__4_1915eb44-7b2a-4256-aee9-3772121e69f8.jpg?v=1570074236","width":1500},{"alt":"#color_teal","id":2744873779251,"position":36,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_850__2_39f965d6-bf3d-4538-ac38-7d5f6c2790fb.jpg?v=1570074236","width":1500},{"alt":"#color_teal","id":2744873812019,"position":37,"preview_image":{"aspect_ratio":1.0,"height":1500,"width":1500,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_304__5_c488a445-a703-4fe2-86f0-b3b563b161fd.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1500,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16051_304__5_c488a445-a703-4fe2-86f0-b3b563b161fd.jpg?v=1570074236","width":1500},{"alt":"#color_white","id":2781539991603,"position":38,"preview_image":{"aspect_ratio":1.0,"height":1466,"width":1466,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a.jpg?v=1570083556"},"aspect_ratio":1.0,"height":1466,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_621__1_f20b2b88-8e30-4f65-86a2-0a967387222a.jpg?v=1570083556","width":1466},{"alt":"#color_white","id":2744873844787,"position":39,"preview_image":{"aspect_ratio":1.0,"height":1600,"width":1600,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1600,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_231__3_e8fde569-6558-4cbb-bda9-b39d187b0609.jpg?v=1570074236","width":1600},{"alt":"#color_white","id":2744873877555,"position":40,"preview_image":{"aspect_ratio":1.0,"height":1600,"width":1600,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1600,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_625__4_66601006-0df7-4086-9016-3d69212b02a2.jpg?v=1570074236","width":1600},{"alt":"#color_white","id":2744873910323,"position":41,"preview_image":{"aspect_ratio":1.0,"height":1600,"width":1600,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1600,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_858__2_caea455b-4ce4-4589-8c89-5eb2fc53ae79.jpg?v=1570074236","width":1600},{"alt":"#color_white","id":2744873943091,"position":42,"preview_image":{"aspect_ratio":1.0,"height":1600,"width":1600,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908.jpg?v=1570074236"},"aspect_ratio":1.0,"height":1600,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16048_461__5_83ccfffa-0261-4ba6-b349-610d564da908.jpg?v=1570074236","width":1600},{"alt":null,"id":2759725023283,"position":43,"preview_image":{"aspect_ratio":1.0,"height":1000,"width":1000,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700.jpg?v=1570078186"},"aspect_ratio":1.0,"height":1000,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/16047_728__6_c998e0d0-8f40-4e91-9304-e4fb71265700.jpg?v=1570078186","width":1000}],"content":"\u003cp\u003eLike no other, the JBL Clip 3 is a unique ultra-portable, ultra-rugged and waterproof Bluetooth® speaker that is small in size but with surprisingly big sound. The upgraded durable and fully integrated carabiner clips to your clothes, belt loop or backpack, making the Clip 3 your outdoor companion on every adventure. The Clip 3 is IPX7 waterproof and offers 10 hours of playtime, powered by a 1000mAh rechargeable Li-ion battery, allowing you to bring your music with you. A built-in noise and echo-cancelling speakerphone gives you crystal clear calls with the press of a button.\u003c\/p\u003e\n\u003ch6\u003eSound to go\u003c\/h6\u003e\n\u003cp\u003eNever leave awesome sound at home again. Clip it on with the built-in carabiner, press play and make the moment pop.\u003c\/p\u003e\n\u003ch6\u003eWaterproof\u003c\/h6\u003e\n\u003cp\u003eA speaker and a submersible in one. Immerse yourself in sound that’s not afraid of a little H2O.\u003c\/p\u003e\n\u003ch6\u003eFeatures:\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eWireless Bluetooth Streaming\u003c\/li\u003e\n\u003cli\u003e10 Hours of Playtime\u003c\/li\u003e\n\u003cli\u003eIPX7 Waterproof\u003c\/li\u003e\n\u003cli\u003eIntegrated Carabiner\u003c\/li\u003e\n\u003cli\u003eSpeakerphone\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003ch6\u003ePackage contains:\u003c\/h6\u003e\n\u003cul\u003e\n\u003cli\u003eJBL Clip 3\u003c\/li\u003e\n\u003cli\u003eMicro USB Cable for charging\u003c\/li\u003e\n\u003cli\u003eSafety Sheet\u003c\/li\u003e\n\u003cli\u003eQuick Start Guide\u003c\/li\u003e\n\u003cli\u003eWarranty Card\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eThis is a demo store. This product can be bought on \u003ca href=\"https:\/\/www.hideflifestyle.com\/\"\u003eHiDEF Lifestyle eshop\u003c\/a\u003e.\u003c\/p\u003e\n\u003cem\u003eAll logos, images, descriptions and brands are the property of their respective owners.\u003c\/em\u003e"},
                             "options_with_values": [{"name":"Color","position":1,"values":["Black","Camo","Forest Green","Grey","Pink","Red","Sand","Teal","White"]}],
                             "selected_variant_id": 17549949829171
                           ,"inventories": {"17549949829171": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 45,
                                     "inventory_message": "In stock (45 units), ready to be shipped"
                                   },
                           "17549949861939": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 72,
                                     "inventory_message": "In stock (72 units), ready to be shipped"
                                   },
                           "17549949894707": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 117,
                                     "inventory_message": "In stock (117 units), ready to be shipped"
                                   },
                           "17549949927475": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 7,
                                     "inventory_message": "Only 7 units left"
                                   },
                           "17549949960243": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 100,
                                     "inventory_message": "In stock (100 units), ready to be shipped"
                                   },
                           "17549949993011": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 85,
                                     "inventory_message": "In stock (85 units), ready to be shipped"
                                   },
                           "17549950025779": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 139,
                                     "inventory_message": "In stock (139 units), ready to be shipped"
                                   },
                           "17549950058547": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 59,
                                     "inventory_message": "In stock (59 units), ready to be shipped"
                                   },
                           "17549950091315": {
                                     "inventory_management": "samrat",
                                     "inventory_policy": "deny",
                                     "inventory_quantity": 65,
                                     "inventory_message": "In stock (65 units), ready to be shipped"
                                   }
                           }}
                        </script>
                     </div>
                  </div>
               </div>
               <script>
                  window.ShopifyXR=window.ShopifyXR||function(){(ShopifyXR.q=ShopifyXR.q||[]).push(arguments)};
                  ShopifyXR('addModels', []);
               </script>
            </section>
         </div>
			<div id="samrat-section-1560189252024" class="samrat-section">
            <!--<section class="section" data-section-id="1560189252024" data-section-type="featured-collection" data-section-settings='{
               "stackable": true,
               "layout": "collage"
               }'>
               <div class="container">
                  <header class="section__header">
                     <div class="section__header-stack">
                        <h2 class="section__title heading h3">Top-rated products</h2>
                     </div>
                  </header>
               </div>
               <div class="container container--flush">
                  <div class="product-list product-list--collage  ">
                     <div class="product-list__column product-list__column--highlight">
                        <div class="product-item product-item--vertical  ">
                           <div class="product-item__label-list"><span class="product-label product-label--on-sale">Save <span>Rs. 2150</span></span></div>
                           <a href="collections/bluetooth/products/sony-xb950-extra-bass-wireless-headphones-with-app-control.html" class="product-item__image-wrapper ">
                              <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                 <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744983879731" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/13261_147__1_2e3211f9-de49-4919-9e67-006800a5c5a0_{width}x.jpg?v=1570074258" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="#color_blue">
                                 <noscript>
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/products/13261_147__1_2e3211f9-de49-4919-9e67-006800a5c5a0_400x.jpg" alt="#color_blue">
                                 </noscript>
                              </div>
                           </a>
                           <div class="product-item__info">
                              <div class="product-item__info-inner">
                                 <a class="product-item__vendor link" href="collections/sony.html">Sony</a>
                                 <a href="collections/bluetooth/products/sony-xb950-extra-bass-wireless-headphones-with-app-control.html" class="product-item__title text--strong link">Sony XB-950B1 Extra Bass Wireless Headphones with App Control</a>
                                 <div class="product-item__price-list price-list"><span class="price price--highlight">From <span>Rs. 2128</span></span>
                                    <span class="price price--compare">Rs. 1178</span>
                                 </div>
                                 <a class="product-item__reviews-badge link" href="collections/bluetooth/products/sony-xb950-extra-bass-wireless-headphones-with-app-control.html#product-reviews">
                                    
                                 </a>
                                 <span class="product-item__inventory inventory inventory--high">In stock, 99 units</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="product-list__column ">
                        <div class="product-item product-item--horizontal  ">
                           <a href="collections/bluetooth/products/yamaha-wx-030-musiccast-wireless-speaker.html" class="product-item__image-wrapper ">
                              <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                 <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744994168883" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/A1Cet8zvhXL._SL1500_200x.jpg" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="#color_black">
                                 <noscript>
                                    <img src="cdn.samrat.com/s/files/1/0065/3095/7363/products/A1Cet8zvhXL._SL1500_200x.jpg" alt="#color_black">
                                 </noscript>
                              </div>
                           </a>
                           <div class="product-item__info">
                              <div class="product-item__info-inner">
                                 <a class="product-item__vendor link" href="collections/yamaha.html">Yamaha</a>
                                 <a href="collections/bluetooth/products/yamaha-wx-030-musiccast-wireless-speaker.html" class="product-item__title text--strong link">Yamaha WX-030 MusicCast Wireless Speaker</a>
                                 <div class="product-item__price-list price-list"><span class="price">Rs. 2249.95</span></div>
                                 <a class="product-item__reviews-badge link" href="collections/bluetooth/products/yamaha-wx-030-musiccast-wireless-speaker.html#product-reviews">
                                    
                                 </a>
                                 <span class="product-item__inventory inventory inventory--high">In stock, 160 units</span>
                              </div>
                           </div>
                        </div>
                        <div class="product-item product-item--horizontal  ">
                           <div class="product-item__label-list"><span class="product-label product-label--custom2">Our Selection</span></div>
                           <a href="collections/bluetooth/products/jbl-e55bt-quincy-edition-wireless-over-ear-headphones.html" class="product-item__image-wrapper ">
                              <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                 <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2748835495987" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/E55BT_Quincy_Rose_Hero_200x.jpg" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="#color_dusty rose">
                                 <noscript>
                                    <img src="../cdn.samrat.com/s/files/1/0065/3095/7363/products/E55BT_Quincy_Rose_Hero_200x.jpg" alt="#color_dusty rose">
                                 </noscript>
                              </div>
                           </a>
                           <div class="product-item__info">
                              <div class="product-item__info-inner">
                                 <a class="product-item__vendor link" href="collections/jbl.html">JBL</a>
                                 <a href="collections/bluetooth/products/jbl-e55bt-quincy-edition-wireless-over-ear-headphones.html" class="product-item__title text--strong link">JBL E55BT Quincy Edition Wireless Over-Ear Headphones</a>
                                 <div class="product-item__price-list price-list"><span class="price">Rs. 2199.95</span></div>
                                 <a class="product-item__reviews-badge link" href="collections/bluetooth/products/jbl-e55bt-quincy-edition-wireless-over-ear-headphones.html#product-reviews">
                                    
                                 </a>
                                 <span class="product-item__inventory inventory inventory--high">In stock, 180 units</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="product-list__column product-list__column--highlight">
                        <div class="product-item product-item--vertical  ">
                           <div class="product-item__label-list"><span class="product-label product-label--custom1">New</span></div>
                           <a href="collections/bluetooth/products/jbl-go-2-portable-bluetooth-waterproof-speaker.html" class="product-item__image-wrapper ">
                              <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                 <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744882364467" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16568_174__1_ae3d9105-352b-40d7-960e-5d2b80795ad8_{width}x.jpg?v=1570074238" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="#color_red">
                                 <noscript>
                                    <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="#color_red">
                                 </noscript>
                              </div>
                           </a>
                           <div class="product-item__info">
                              <div class="product-item__info-inner">
                                 <a class="product-item__vendor link" href="collections/jbl.html">JBL</a>
                                 <a href="collections/bluetooth/products/jbl-go-2-portable-bluetooth-waterproof-speaker.html" class="product-item__title text--strong link">JBL Go2 Portable Bluetooth Speaker</a>
                                  <div class="product-item__price-list price-list"><span class="price">Rs. 2339.95</span></div>
                                 <a class="product-item__reviews-badge link" href="collections/bluetooth/products/jbl-go-2-portable-bluetooth-waterproof-speaker.html#product-reviews">
                                    
                                 </a>
                                 <span class="product-item__inventory inventory inventory--high">In stock, 800 units</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="product-list__column ">
                        <div class="product-item product-item--horizontal  ">
                           <a href="collections/bluetooth/products/jbl-reflect-mini-2-wireless-in-ear-sport-headphones-with-three-button-remote-and-microphone.html" class="product-item__image-wrapper ">
                              <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
                                 <img class="product-item__primary-image lazyload image--fade-in" data-media-id="2744896421939" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/products/16070_752__1_{width}x.jpg?v=1570074240" data-sizes="auto" data-widths="[200,300,400,500,600,700,800]" alt="#color_black">
                                 <noscript>
                                    <img src="../cdn.samrat.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_600x.gif" alt="#color_black">
                                 </noscript>
                              </div>
                           </a>
                           <div class="product-item__info">
                              <div class="product-item__info-inner">
                                 <a class="product-item__vendor link" href="collections/jbl.html">JBL</a>
                                 <a href="collections/bluetooth/products/jbl-reflect-mini-2-wireless-in-ear-sport-headphones-with-three-button-remote-and-microphone.html" class="product-item__title text--strong link">JBL Reflect Mini 2 Wireless In-Ear Sport Headphones with Three-Button Remote and Mic</a>
                                <div class="product-item__price-list price-list"><span class="price">Rs. 499.95</span></div>
                                <a class="product-item__reviews-badge link" href="collections/bluetooth/products/jbl-reflect-mini-2-wireless-in-ear-sport-headphones-with-three-button-remote-and-microphone.html#product-reviews">
                                   
                                 </a>
                                 <span class="product-item__inventory inventory inventory--high">In stock, 63 units</span>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <div id="modal-quick-view-1560189252024" class="modal" aria-hidden="true">
                  <div class="modal__dialog modal__dialog--stretch" role="dialog">
                     <button class="modal__close link" data-action="close-modal">
                        <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                           <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                     </button>
                     <div class="modal__loader">
                        <svg class="icon icon--search-loader" viewBox="0 0 64 64" role="presentation">
                           <path opacity=".4" d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z"></path>
                           <path d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z"></path>
                        </svg>
                     </div>
                     <div class="modal__inner"></div>
                  </div>
               </div>
            </section>
         </div>
        <!--  <div id="samrat-section-1542984882560" class="samrat-section">
            <section class="section" data-section-id="1542984882560" data-section-type="blog-posts">
               <div class="container">
                  <header class="section__header">
                     <h2 class="section__title heading h3">Blog posts</h2>
                     <a href="blogs/news.html" class="section__action-link link">
                        View all 
                        <svg class="icon icon--tail-right" viewBox="0 0 24 24" role="presentation">
                           <path fill="currentColor" d="M22.707 11.293L15 3.586 13.586 5l6 6H2c-.553 0-1 .448-1 1s.447 1 1 1h17.586l-6 6L15 20.414l7.707-7.707c.391-.391.391-1.023 0-1.414z"></path>
                        </svg>
                     </a>
                  </header>
                  <div class="scroller">
                     <div class="scroller__inner">
                        <div class="block-list block-list--loose">
                           <div class="block-list__item 1/2--tablet 1/3--lap-and-up ">
                              <div class="article-item ">
                                 <a href="blogs/news/setup-your-surround-sound-speaker.html" class="article-item__image-container">
                                    <div class="aspect-ratio" style="padding-bottom: 54%">
                                       <img class="article-item__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/articles/old-new-living-space_{width}x.jpg?v=1555337759" data-widths="[200,300,400,500,600,700,800,900,1000,1200,1400]" data-sizes="auto" alt="Setup your Surround sound speaker">
                                       <noscript>
                                          <img class="article-item__image" src="../cdn.samrat.com/s/files/1/0065/3095/7363/articles/old-new-living-space_600x2ed9.jpg?v=1555337759" alt="Setup your Surround sound speaker">
                                       </noscript>
                                    </div>
                                 </a>
                                 <h3 class="article-item__title heading h4">
                                    <a href="blogs/news/setup-your-surround-sound-speaker.html" class="link">Setup your Surround sound speaker</a>
                                 </h3>
                                 <div class="article-item__meta">
                                    <span class="article-item__meta-item">Michaël Gallego</span><time class="article-item__meta-item">Apr 15, 2019</time>
                                 </div>
                              </div>
                           </div>
                           <div class="block-list__item 1/2--tablet 1/3--lap-and-up ">
                              <div class="article-item ">
                                 <a href="blogs/news/hook-up-a-receiver-for-your-home-theater.html" class="article-item__image-container">
                                    <div class="aspect-ratio" style="padding-bottom: 54%">
                                       <img class="article-item__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/articles/dj-board-volume-slider_{width}x.jpg?v=1555337346" data-widths="[200,300,400,500,600,700,800,900,1000,1200,1400]" data-sizes="auto" alt="Hook up a receiver for your home theater">
                                       <noscript>
                                          <img class="article-item__image" src="../cdn.samrat.com/s/files/1/0065/3095/7363/articles/dj-board-volume-slider_600x8842.jpg?v=1555337346" alt="Hook up a receiver for your home theater">
                                       </noscript>
                                    </div>
                                 </a>
                                 <h3 class="article-item__title heading h4">
                                    <a href="blogs/news/hook-up-a-receiver-for-your-home-theater.html" class="link">Hook up a receiver for your home theater</a>
                                 </h3>
                                 <div class="article-item__meta">
                                    <span class="article-item__meta-item">Michaël Gallego</span><time class="article-item__meta-item">Apr 15, 2019</time>
                                 </div>
                              </div>
                           </div>
                           <div class="block-list__item 1/2--tablet 1/3--lap-and-up ">
                              <div class="article-item ">
                                 <a href="blogs/news/top-most-comfortable-headphones.html" class="article-item__image-container">
                                    <div class="aspect-ratio" style="padding-bottom: 54%">
                                       <img class="article-item__image lazyload image--fade-in" data-src="//cdn.samrat.com/s/files/1/0065/3095/7363/articles/headphones-in-an-orange-glow_{width}x.jpg?v=1555336792" data-widths="[200,300,400,500,600,700,800,900,1000,1200,1400]" data-sizes="auto" alt="Top most comfortable headphones">
                                       <noscript>
                                          <img class="article-item__image" src="../cdn.samrat.com/s/files/1/0065/3095/7363/articles/headphones-in-an-orange-glow_600x00ed.jpg?v=1555336792" alt="Top most comfortable headphones">
                                       </noscript>
                                    </div>
                                 </a>
                                 <h3 class="article-item__title heading h4">
                                    <a href="blogs/news/top-most-comfortable-headphones.html" class="link">Top most comfortable headphones</a>
                                 </h3>
                                 <div class="article-item__meta">
                                    <span class="article-item__meta-item">Michaël Gallego</span><time class="article-item__meta-item">Apr 15, 2019</time>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
        --> <!--  <div id="samrat-section-1560179897905" class="samrat-section">
            <section class="section" data-section-id="1560179897905" data-section-type="map" data-section-settings='
               {
               &quot;apiKey&quot;: &quot;&quot;,
               &quot;zoom&quot;: 16,
               &quot;draggableMap&quot;: true,
               &quot;showMapControls&quot;: false,
               &quot;mapAddresses&quot;: [&quot;6195 Allentown Blvd, Harrisburg, PA 17112, USA&quot;,&quot;Allentown Blvd, Pennsylvania, USA&quot;],
               &quot;markerActiveColor&quot;: &quot;#00badb&quot;,
               &quot;markerColor&quot;: &quot;#000000&quot;
               }
               '>
               <div class="container">
                  <header class="section__header">
                     <h2 class="section__title heading h3">Our stores</h2>
                  </header>
                  <div class="map">
                     <div class="map__store-list">
                        <div class="map__store-item" data-store-index="0" >
                           <button class="map__store-name heading h4" aria-expanded="true" aria-controls="block-1560179897905-0" data-action="toggle-store">
                              HiDEF Lifestyle Home Theater Store
                              <span class="map__icon-container">
                                 <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                    <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                 </svg>
                              </span>
                           </button>
                           <div class="map__store-collapsible" id="block-1560179897905-0" style="height: auto">
                              <div  class="map__store-inner">
                                 <div class="map__store-address rte">
                                    <p>6195 Allentown Blvd, Harrisburg, PA 17112, USA</p>
                                 </div>
                                 <div class="map__store-hours rte">
                                    <p>Monday - Friday: 9AM - 7PM<br>Saturday: 9AM - 5PM<br>Sunday: Closed</p>
                                 </div>
                                 <a href="https://maps.google.com/?daddr=6195%20Allentown%20Blvd,%20Harrisburg,%20PA%2017112,%20USA" target="_blank" rel="nofollow noopener" class="map__direction-link button button--primary">Get directions</a>
                                 <div class="map__map-container map__map-container--mobile hidden-tablet-and-up lazyload" data-bg="../cdn.samrat.com/s/files/1/0065/3095/7363/files/Capture_d_ecran_2020-03-31_a_12.02.09_600x7ef4.png?v=1585623753"></div>
                              </div>
                           </div>
                        </div>
                        <div class="map__store-item" data-store-index="1" >
                           <button class="map__store-name heading h4" aria-expanded="false" aria-controls="block-1560180355538" data-action="toggle-store">
                              HiDEF Showroom
                              <span class="map__icon-container">
                                 <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                    <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                 </svg>
                              </span>
                           </button>
                           <div class="map__store-collapsible" id="block-1560180355538" >
                              <div  class="map__store-inner">
                                 <div class="map__store-address rte">
                                    <p>Allentown Blvd, Pennsylvania, USA</p>
                                 </div>
                                 <div class="map__store-hours rte">
                                    <p>Monday - Friday: 10AM - 9PM<br>Saturday: 11AM - 9PM<br>Sunday: Closed</p>
                                 </div>
                                 <a href="https://maps.google.com/?daddr=Allentown%20Blvd,%20Pennsylvania,%20USA" target="_blank" rel="nofollow noopener" class="map__direction-link button button--primary">Get directions</a>
                                 <div class="map__map-container map__map-container--mobile hidden-tablet-and-up lazyload" data-bg="../cdn.samrat.com/s/files/1/0065/3095/7363/files/Capture_d_ecran_2020-03-31_a_12.02.09_600x7ef4.png?v=1585623753"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="map__map-container map__map-container--desktop hidden-phone lazyload" data-bg="../cdn.samrat.com/s/files/1/0065/3095/7363/files/Capture_d_ecran_2020-03-31_a_12.02.09_1200x7ef4.png?v=1585623753"></div>
                     <noscript>
                        <style>
                           #samrat-section-1560179897905 .map__map-container {
                           background-image: url(../cdn.samrat.com/s/files/1/0065/3095/7363/files/Capture_d_ecran_2020-03-31_a_12.02.09_1200x7ef4.png?v=1585623753);
                           }
                        </style>
                     </noscript>
                     <script type="application/json" data-gmap-style>[
                        {
                          "elementType": "geometry",
                          "stylers": [{"color": "#f5f5f5"}]
                        },
                        {
                          "elementType": "labels.icon",
                          "stylers": [{"visibility": "off"}]
                        },
                        {
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#616161"}]
                        },
                        {
                          "elementType": "labels.text.stroke",
                          "stylers": [{"color": "#f5f5f5"}]
                        },
                        {
                          "featureType": "administrative.land_parcel",
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#bdbdbd"}]
                        },
                        {
                          "featureType": "poi",
                          "elementType": "geometry",
                          "stylers": [{"color": "#eeeeee"}]
                        },
                        {
                          "featureType": "poi",
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#757575"}]
                        },
                        {
                          "featureType": "poi.park",
                          "elementType": "geometry",
                          "stylers": [{"color": "#e5e5e5"}]
                        },
                        {
                          "featureType": "poi.park",
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#9e9e9e"}]
                        },
                        {
                          "featureType": "road",
                          "elementType": "geometry",
                          "stylers": [{"color": "#ffffff"}]
                        },
                        {
                          "featureType": "road.arterial",
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#757575"}]
                        },
                        {
                          "featureType": "road.highway",
                          "elementType": "geometry",
                          "stylers": [{"color": "#dadada"}]
                        },
                        {
                          "featureType": "road.highway",
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#616161"}]
                        },
                        {
                          "featureType": "road.local",
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#9e9e9e"}]
                        },
                        {
                          "featureType": "transit.line",
                          "elementType": "geometry",
                          "stylers": [{"color": "#e5e5e5"}]
                        },
                        {
                          "featureType": "transit.station",
                          "elementType": "geometry",
                          "stylers": [{"color": "#eeeeee"}]
                        },
                        {
                          "featureType": "water",
                          "elementType": "geometry",
                          "stylers": [{"color": "#c9c9c9"}]
                        },
                        {
                          "featureType": "water",
                          "elementType": "labels.text.fill",
                          "stylers": [{"color": "#9e9e9e"}]
                        }
                        ]
                     </script>
                  </div>
               </div>
            </section>
         </div> -->
         <!-- <div id="samrat-section-1560191702776" class="samrat-section">
            <section class="section section--text-centered" data-section-id="1560191702776" data-section-type="newsletter">
               <div class="container container--extra-narrow">
                  <h2 class="heading h3">Let&#39;s keep in touch!</h2>
                  <div class="rte">
                     <p>Subscribe to our weekly newsletter and receive exclusive offers on products you love!</p>
                  </div>
                  <div class="newsletter newsletter--compact">
                     <form method="post" action="https://warehouse-theme-metal.myshopify.com/contact#newsletter-1560191702776" id="newsletter-1560191702776" accept-charset="UTF-8" class="form newsletter__form">
                        <input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="contact[tags]" value="newsletter">
                        <div class="form__input-row">
                           <div class="form__input-wrapper form__input-wrapper--labelled">
                              <input type="email" id="newsletter[contact][email]" name="contact[email]" class="form__field form__field--text" required>
                              <label for="newsletter[contact][email]" class="form__floating-label">Your email</label>
                           </div>
                           <button type="submit" class="form__submit button button--primary">Subscribe</button>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
         </div> -->
       <!--   <div id="samrat-section-1559483981185" class="samrat-section">
            <section class="section " data-section-id="1559483981185" data-section-type="quick-links">
               <div class="container">
                  <header class="section__header">
                     <h2 class="section__title heading h3">Most searched collections</h2>
                  </header>
                  <div class="quick-links"><a href="collections/headphones.html" class="quick-links__link  heading" >Headphones</a><a href="collections/speakers.html" class="quick-links__link  heading" >Speakers</a><a href="collections/all-tvs.html" class="quick-links__link  heading" >TVs</a><a href="collections/turntables.html" class="quick-links__link  heading" >Turntables</a><a href="collections/subwoofers.html" class="quick-links__link  heading" >Subwoofers</a><a href="collections/projectors.html" class="quick-links__link  heading" >Projectors</a></div>
               </div>
            </section>
         </div> -->
         <!-- <div id="samrat-section-1559483959965" class="samrat-section">
            <section class="section" data-section-id="1559483959965" data-section-type="recently-viewed-products" data-section-settings='{
               "currentProductId": null
               }'>
               <div class="container">
                  <header class="section__header">
                     <h2 class="section__title heading h3">Recently viewed</h2>
                  </header>
                  <div class="recently-viewed-products-placeholder"></div>
               </div>
               <style>
                  /* By default the section is hidden as we do not know if there are product yet */
                  #samrat-section-1559483959965 {
                  display: none;
                  }
               </style>
               <div id="modal-quick-view-1559483959965" class="modal" aria-hidden="true">
                  <div class="modal__dialog modal__dialog--stretch" role="dialog">
                     <button class="modal__close link" data-action="close-modal">
                        <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                           <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                     </button>
                     <div class="modal__loader">
                        <svg class="icon icon--search-loader" viewBox="0 0 64 64" role="presentation">
                           <path opacity=".4" d="M23.8589104 1.05290547C40.92335108-3.43614731 58.45816642 6.79494359 62.94709453 23.8589104c4.48905278 17.06444068-5.74156424 34.59913135-22.80600493 39.08818413S5.54195825 57.2055303 1.05290547 40.1410896C-3.43602265 23.0771228 6.7944697 5.54195825 23.8589104 1.05290547zM38.6146353 57.1445143c13.8647142-3.64731754 22.17719655-17.89443541 18.529879-31.75914961-3.64743965-13.86517841-17.8944354-22.17719655-31.7591496-18.529879S3.20804604 24.7494569 6.8554857 38.6146353c3.64731753 13.8647142 17.8944354 22.17719655 31.7591496 18.529879z"></path>
                           <path d="M1.05290547 40.1410896l5.80258022-1.5264543c3.64731754 13.8647142 17.89443541 22.17719655 31.75914961 18.529879l1.5264543 5.80258023C23.07664892 67.43614731 5.54195825 57.2055303 1.05290547 40.1410896z"></path>
                        </svg>
                     </div>
                     <div class="modal__inner"></div>
                  </div>
               </div>
            </section>
         </div> -->
         <!-- END content_for_index -->
      </main>
      <!-- <div id="samrat-section-text-with-icons" class="samrat-section">
         <section class="section section--tight" data-section-id="text-with-icons" data-section-type="text-with-icons">
            <div class="container container--flush">
               <div class="text-with-icons ">
                  <div class="text-with-icons__item" data-block-index="0" >
                     <div class="text-with-icons__icon-wrapper">
                        <svg viewBox="0 0 24 24" role="presentation">
                           <g stroke-width="1.5" fill="none" fill-rule="evenodd">
                              <path d="M6.5 3.25l12 6" stroke="#00badb"></path>
                              <path stroke="#1e2d7d" d="M23 7l-10 5L1 6M13 12v11"></path>
                              <path stroke="#1e2d7d" stroke-linecap="square" d="M23 7v10l-10 6-12-6V6l10-5z"></path>
                           </g>
                        </svg>
                     </div>
                     <div class="text-with-icons__content-wrapper">
                        <p class="text-with-icons__title text--strong">Free delivery for $80+ orders</p>
                        <div class="text-with-icons__content rte">
                           <p>We deliver in 48 hours max!</p>
                        </div>
                     </div>
                  </div>
                  <div class="text-with-icons__item" data-block-index="1" >
                     <div class="text-with-icons__icon-wrapper">
                        <svg viewBox="0 0 23 24" role="presentation">
                           <g transform="translate(1 1)" stroke-width="1.5" fill="none" fill-rule="evenodd">
                              <path stroke="#00badb" d="M8 4h8v7"></path>
                              <path stroke="#00badb" stroke-linecap="square" d="M11 7L8 4l3-3"></path>
                              <circle stroke="#1e2d7d" stroke-linecap="square" cx="6" cy="20" r="2"></circle>
                              <circle stroke="#1e2d7d" stroke-linecap="square" cx="18" cy="20" r="2"></circle>
                              <path stroke="#1e2d7d" stroke-linecap="square" d="M21 5l-2 10H5L3 0H0"></path>
                           </g>
                        </svg>
                     </div>
                     <div class="text-with-icons__content-wrapper">
                        <p class="text-with-icons__title text--strong">Satisfied or refunded</p>
                        <div class="text-with-icons__content rte">
                           <p>Free returns within 14 days</p>
                        </div>
                     </div>
                  </div>
                  <div class="text-with-icons__item" data-block-index="2" >
                     <div class="text-with-icons__icon-wrapper">
                        <svg viewBox="0 0 24 24" role="presentation">
                           <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="square">
                              <path d="M10 17H4c-1.7 0-3 1.3-3 3v3h12v-3c0-1.7-1.3-3-3-3zM7 14c-1.7 0-3-1.3-3-3v-1c0-1.7 1.3-3 3-3s3 1.3 3 3v1c0 1.7-1.3 3-3 3z" stroke="#1e2d7d"></path>
                              <path stroke="#00badb" d="M13 1v10l4-3h6V1z"></path>
                           </g>
                        </svg>
                     </div>
                     <div class="text-with-icons__content-wrapper">
                        <p class="text-with-icons__title text--strong">We are available 24/7</p>
                        <div class="text-with-icons__content rte">
                           <p>Contact us by chat, mail, phone</p>
                        </div>
                     </div>
                  </div>
                  <div class="text-with-icons__item" data-block-index="3" >
                     <div class="text-with-icons__icon-wrapper">
                        <svg viewBox="0 0 24 24" role="presentation">
                           <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="square">
                              <path d="M1 5h22M1 9h22M9 17H3c-1.105 0-2-.895-2-2V3c0-1.105.895-2 2-2h18c1.105 0 2 .895 2 2v10M5 13h5" stroke="#1e2d7d"></path>
                              <path stroke="#00badb" d="M13 16h8v7h-8zM15 16v-2c0-1.1.9-2 2-2s2 .9 2 2v2M17 19v1"></path>
                           </g>
                        </svg>
                     </div>
                     <div class="text-with-icons__content-wrapper">
                        <p class="text-with-icons__title text--strong">100% Secure payments</p>
                        <div class="text-with-icons__content rte">
                           <p>Visa, Mastercard, Amex, PayPal</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div> -->
     <!--  <div id="samrat-section-footer" class="samrat-section">
         <footer class="footer" data-section-id="footer" data-section-type="footer" role="contentinfo">
            <div class="container">
               <div class="footer__wrapper">
                  <div class="footer__block-list">
                     <div class="footer__block-item footer__block-item--text" >
                        <button class="footer__title heading h6" disabled aria-expanded="false" aria-controls="block-footer-0" data-action="toggle-collapsible">
                        <span>About the store</span>
                        <span class="plus-button"></span>
                        </button>
                        <div id="block-footer-0" class="footer__collapsible">
                           <div class="footer__collapsible-content">
                              <div class="rte">
                                 <p>Our mission statement is to provide&nbsp;the absolute best customer experience&nbsp;available in the Audio/Video industry without exception.</p>
                                 <p></p>
                                 <p><em>A big thank you to&nbsp;<a href="https://www.hideflifestyle.com/">HiDEF Lifestyle</a>&nbsp;for allowing us to use their&nbsp;products in this demo store.</em></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="footer__block-item footer__block-item--links" >
                        <button class="footer__title heading h6" disabled aria-expanded="false" aria-controls="block-footer-1" data-action="toggle-collapsible">
                        <span>Popular Collections</span>
                        <span class="plus-button"></span>
                        </button>
                        <div id="block-footer-1" class="footer__collapsible">
                           <div class="footer__collapsible-content">
                              <ul class="footer__linklist list--unstyled">
                                 <li>
                                    <a href="collections/speakers.html" class="footer__link-item link">Speakers</a>
                                 </li>
                                 <li>
                                    <a href="collections/audio-accessories.html" class="footer__link-item link">Audio Accessories</a>
                                 </li>
                                 <li>
                                    <a href="collections/headphones.html" class="footer__link-item link">Headphones</a>
                                 </li>
                                 <li>
                                    <a href="collections/home-cinema.html" class="footer__link-item link">Home Cinema</a>
                                 </li>
                                 <li>
                                    <a href="collections/sound-bars.html" class="footer__link-item link">Sound Bars</a>
                                 </li>
                                 <li>
                                    <a href="collections/led-tvs.html" class="footer__link-item link">LED TVs</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="footer__block-item footer__block-item--links" >
                        <button class="footer__title heading h6" disabled aria-expanded="false" aria-controls="block-1559431882706" data-action="toggle-collapsible">
                        <span>Information</span>
                        <span class="plus-button"></span>
                        </button>
                        <div id="block-1559431882706" class="footer__collapsible">
                           <div class="footer__collapsible-content">
                              <ul class="footer__linklist list--unstyled">
                                 <li>
                                    <a href="pages/about.html" class="footer__link-item link">About us</a>
                                 </li>
                                 <li>
                                    <a href="pages/brands.html" class="footer__link-item link">Brands we distribute</a>
                                 </li>
                                 <li>
                                    <a href="pages/meet-the-team.html" class="footer__link-item link">Meet the team</a>
                                 </li>
                                 <li>
                                    <a href="pages/contact-us.html" class="footer__link-item link">Contact information</a>
                                 </li>
                                 <li>
                                    <a href="pages/faq.html" class="footer__link-item link">FAQ</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="footer__block-item footer__block-item--newsletter" >
                        <p class="footer__title heading h6">Our Newsletter</p>
                        <div class="footer__newsletter-wrapper">
                           <div class="footer__newsletter-text rte">
                              <p>Subscribe to get notified about product launches, special offers and news.</p>
                           </div>
                           <form method="post" action="https://warehouse-theme-metal.myshopify.com/contact#footer-newsletter" id="footer-newsletter" accept-charset="UTF-8" class="footer__newsletter-form">
                              <input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="contact[tags]" value="newsletter">
                              <div class="form__input-wrapper form__input-wrapper--labelled">
                                 <input type="email" id="footer[contact][email]" name="contact[email]" class="form__field form__field--text" required="">
                                 <label for="footer[contact][email]" class="form__floating-label">Your email</label>
                              </div>
                              <button type="submit" class="form__submit form__submit--tight button button--primary">Subscribe</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <aside class="footer__aside">
                     <div class="footer__aside-item footer__aside-item--localization">
                        <form method="post" action="https://warehouse-theme-metal.myshopify.com/localization" id="localization_form_footer" accept-charset="UTF-8" class="footer__localization-form" enctype="multipart/form-data">
                           <input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/" />
                           <div class="footer__localization-form-item">
                              <input type="hidden" name="currency_code" value="USD">
                              <span class="visually-hidden">Currency</span>
                              <div class="value-picker-wrapper">
                                 <button type="button" class="select-button select-button--mini" aria-haspopup="true" aria-expanded="false" aria-controls="footer-currency-picker" data-action="open-value-picker">
                                    USD $
                                    <svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
                                       <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
                                    </svg>
                                 </button>
                                 <div id="footer-currency-picker" class="value-picker value-picker--auto value-picker--small" data-picker-position="top" aria-hidden="true">
                                    <svg class="icon icon--nav-triangle-borderless" viewBox="0 0 20 9" role="presentation">
                                       <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                                    </svg>
                                    <div class="value-picker__inner">
                                       <header class="value-picker__header">
                                          <span class="value-picker__title text--strong">Currency</span>
                                          <button type="button" class="value-picker__close" data-action="close-value-picker" aria-controls="footer-currency-picker" aria-label="Close">
                                             <svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
                                                <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
                                             </svg>
                                          </button>
                                       </header>
                                       <ul class="value-picker__choice-list">
                                          <li class="value-picker__choice-list-item">
                                             <button type="submit" name="currency_code" class="value-picker__choice-item" value="CAD" >
                                             CAD $
                                             </button>
                                          </li>
                                          <li class="value-picker__choice-list-item">
                                             <button type="submit" name="currency_code" class="value-picker__choice-item" value="EUR" >
                                             EUR €
                                             </button>
                                          </li>
                                          <li class="value-picker__choice-list-item">
                                             <button type="submit" name="currency_code" class="value-picker__choice-item" value="JPY" >
                                             JPY ¥
                                             </button>
                                          </li>
                                          <li class="value-picker__choice-list-item">
                                             <button type="submit" name="currency_code" class="value-picker__choice-item" value="USD" aria-current="true">
                                             USD $
                                             </button>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <p class="hidden-pocket">© Warehouse - Metal<br><a target="_blank" rel="nofollow" href="https://www.samrat.com/?utm_campaign=poweredby&amp;utm_medium=samrat&amp;utm_source=onlinestore">Powered by Shopify</a></p>
                     </div>
                     <div class="footer__aside-item footer__aside-item--social">
                        <p class="footer__aside-title">Follow Us</p>
                        <ul class="social-media__item-list  list--unstyled">
                           <li class="social-media__item social-media__item--facebook">
                              <a href="https://www.facebook.com/hideflifestyle" target="_blank" rel="noopener" aria-label="Follow us on Facebook">
                                 <svg class="icon icon--facebook" viewBox="0 0 30 30">
                                    <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm3.2142857-17.1429611h-2.1428678v-2.1425646c0-.5852979.8203285-1.07160109 1.0714928-1.07160109h1.071375v-2.1428925h-2.1428678c-2.3564786 0-3.2142536 1.98610393-3.2142536 3.21449359v2.1425646h-1.0714822l.0032143 2.1528011 1.0682679-.0099086v7.499969h3.2142536v-7.499969h2.1428678v-2.1428925z" fill="currentColor" fill-rule="evenodd"></path>
                                 </svg>
                              </a>
                           </li>
                           <li class="social-media__item social-media__item--instagram">
                              <a href="https://www.instagram.com/hidef_lifestyle/" target="_blank" rel="noopener" aria-label="Follow us on Instagram">
                                 <svg class="icon icon--instagram" role="presentation" viewBox="0 0 30 30">
                                    <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm.0000159-23.03571429c-2.1823849 0-2.4560363.00925037-3.3131306.0483571-.8553081.03901103-1.4394529.17486384-1.9505835.37352345-.52841925.20532625-.9765517.48009406-1.42331254.926823-.44672894.44676084-.72149675.89489329-.926823 1.42331254-.19865961.5111306-.33451242 1.0952754-.37352345 1.9505835-.03910673.8570943-.0483571 1.1307457-.0483571 3.3131306 0 2.1823531.00925037 2.4560045.0483571 3.3130988.03901103.8553081.17486384 1.4394529.37352345 1.9505835.20532625.5284193.48009406.9765517.926823 1.4233125.44676084.446729.89489329.7214968 1.42331254.9268549.5111306.1986278 1.0952754.3344806 1.9505835.3734916.8570943.0391067 1.1307457.0483571 3.3131306.0483571 2.1823531 0 2.4560045-.0092504 3.3130988-.0483571.8553081-.039011 1.4394529-.1748638 1.9505835-.3734916.5284193-.2053581.9765517-.4801259 1.4233125-.9268549.446729-.4467608.7214968-.8948932.9268549-1.4233125.1986278-.5111306.3344806-1.0952754.3734916-1.9505835.0391067-.8570943.0483571-1.1307457.0483571-3.3130988 0-2.1823849-.0092504-2.4560363-.0483571-3.3131306-.039011-.8553081-.1748638-1.4394529-.3734916-1.9505835-.2053581-.52841925-.4801259-.9765517-.9268549-1.42331254-.4467608-.44672894-.8948932-.72149675-1.4233125-.926823-.5111306-.19865961-1.0952754-.33451242-1.9505835-.37352345-.8570943-.03910673-1.1307457-.0483571-3.3130988-.0483571zm0 1.44787387c2.1456068 0 2.3997686.00819774 3.2471022.04685789.7834742.03572556 1.2089592.1666342 1.4921162.27668167.3750864.14577303.6427729.31990322.9239522.60111439.2812111.28117926.4553413.54886575.6011144.92395217.1100474.283157.2409561.708642.2766816 1.4921162.0386602.8473336.0468579 1.1014954.0468579 3.247134 0 2.1456068-.0081977 2.3997686-.0468579 3.2471022-.0357255.7834742-.1666342 1.2089592-.2766816 1.4921162-.1457731.3750864-.3199033.6427729-.6011144.9239522-.2811793.2812111-.5488658.4553413-.9239522.6011144-.283157.1100474-.708642.2409561-1.4921162.2766816-.847206.0386602-1.1013359.0468579-3.2471022.0468579-2.1457981 0-2.3998961-.0081977-3.247134-.0468579-.7834742-.0357255-1.2089592-.1666342-1.4921162-.2766816-.37508642-.1457731-.64277291-.3199033-.92395217-.6011144-.28117927-.2811793-.45534136-.5488658-.60111439-.9239522-.11004747-.283157-.24095611-.708642-.27668167-1.4921162-.03866015-.8473336-.04685789-1.1014954-.04685789-3.2471022 0-2.1456386.00819774-2.3998004.04685789-3.247134.03572556-.7834742.1666342-1.2089592.27668167-1.4921162.14577303-.37508642.31990322-.64277291.60111439-.92395217.28117926-.28121117.54886575-.45534136.92395217-.60111439.283157-.11004747.708642-.24095611 1.4921162-.27668167.8473336-.03866015 1.1014954-.04685789 3.247134-.04685789zm0 9.26641182c-1.479357 0-2.6785873-1.1992303-2.6785873-2.6785555 0-1.479357 1.1992303-2.6785873 2.6785873-2.6785873 1.4793252 0 2.6785555 1.1992303 2.6785555 2.6785873 0 1.4793252-1.1992303 2.6785555-2.6785555 2.6785555zm0-6.8050167c-2.2790034 0-4.1264612 1.8474578-4.1264612 4.1264612 0 2.2789716 1.8474578 4.1264294 4.1264612 4.1264294 2.2789716 0 4.1264294-1.8474578 4.1264294-4.1264294 0-2.2790034-1.8474578-4.1264612-4.1264294-4.1264612zm5.2537621-.1630297c0-.532566-.431737-.96430298-.964303-.96430298-.532534 0-.964271.43173698-.964271.96430298 0 .5325659.431737.964271.964271.964271.532566 0 .964303-.4317051.964303-.964271z" fill="currentColor" fill-rule="evenodd"></path>
                                 </svg>
                              </a>
                           </li>
                           <li class="social-media__item social-media__item--pinterest">
                              <a href="https://www.pinterest.fr/HiDEF_Lifestyle/" target="_blank" rel="noopener" aria-label="Follow us on Pinterest">
                                 <svg class="icon icon--pinterest" role="presentation" viewBox="0 0 30 30">
                                    <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zm-.4492946-22.49876954c-.3287968.04238918-.6577148.08477836-.9865116.12714793-.619603.15784625-1.2950238.30765013-1.7959124.60980792-1.3367356.80672832-2.26284291 1.74754848-2.88355361 3.27881599-.1001431.247352-.10374313.4870343-.17702448.7625149-.47574032 1.7840923.36779138 3.6310327 1.39120339 4.2696951.1968419.1231267.6448551.3405257.8093833.0511377.0909873-.1603963.0706852-.3734014.1265202-.5593764.036883-.1231267.1532436-.3547666.1263818-.508219-.0455542-.260514-.316041-.4256572-.4299438-.635367-.230748-.4253041-.2421365-.8027267-.3541701-1.3723228.0084116-.0763633.0168405-.1527266.0253733-.2290899.0340445-.6372108.1384107-1.0968422.3287968-1.5502554.5593198-1.3317775 1.4578212-2.07273488 2.9088231-2.5163011.324591-.09899963 1.2400541-.25867013 1.7200175-.1523539.2867042.05078464.5734084.10156927.8600087.1523539 1.0390064.33760307 1.7953931.9602003 2.2007079 1.9316992.252902.6061594.3275507 1.7651044.1517724 2.5415071-.0833199.3679287-.0705641.6832289-.1770418 1.0168107-.3936666 1.2334841-.9709174 2.3763639-2.2765854 2.6942337-.8613761.2093567-1.5070793-.3321303-1.7200175-.8896824-.0589159-.1545509-.1598205-.4285603-.1011297-.6865243.2277711-1.0010987.5562045-1.8969797.8093661-2.8969995.24115-.9528838-.2166421-1.7048063-.9358863-1.8809146-.8949186-.2192233-1.585328.6350139-1.8211644 1.1943903-.1872881.4442919-.3005678 1.2641823-.1517724 1.8557085.0471811.1874265.2666617.689447.2276672.8640842-.1728187.7731269-.3685356 1.6039823-.5818373 2.3635745-.2219729.7906632-.3415527 1.5999416-.5564641 2.3639276-.098793.3507651-.0955738.7263439-.1770244 1.092821v.5337977c-.0739045.3379758-.0194367.9375444.0505042 1.2703809.0449484.2137505-.0261175.4786388.0758948.6357396.0020943.1140055.0159752.1388388.0506254.2031582.3168026-.0095136.7526829-.8673992.9106342-1.118027.3008274-.477913.5797431-.990879.8093833-1.5506281.2069844-.5042174.2391769-1.0621226.4046917-1.60104.1195798-.3894861.2889369-.843272.328918-1.2707535h.0252521c.065614.2342095.3033024.403727.4805692.5334446.5563429.4077482 1.5137774.7873678 2.5547742.5337977 1.1769151-.2868184 2.1141687-.8571599 2.7317812-1.702982.4549537-.6225776.7983583-1.3445472 1.0624066-2.1600633.1297394-.4011574.156982-.8454494.2529193-1.2711066.2405269-1.0661438-.0797199-2.3511383-.3794396-3.0497261-.9078995-2.11694836-2.8374975-3.32410832-5.918897-3.27881604z" fill="currentColor" fill-rule="evenodd"></path>
                                 </svg>
                              </a>
                           </li>
                           <li class="social-media__item social-media__item--youtube">
                              <a href="https://www.youtube.com/user/hideflifestyle" target="_blank" rel="noopener" aria-label="Follow us on YouTube">
                                 <svg class="icon icon--youtube" role="presentation" viewBox="0 0 30 30">
                                    <path d="M15 30c8.2842712 0 15-6.7157288 15-15 0-8.28427125-6.7157288-15-15-15C6.71572875 0 0 6.71572875 0 15c0 8.2842712 6.71572875 15 15 15zm7.6656364-18.7823145C23 12.443121 23 15 23 15s0 2.5567903-.3343636 3.7824032c-.184.6760565-.7260909 1.208492-1.4145455 1.3892823C20.0033636 20.5 15 20.5 15 20.5s-5.00336364 0-6.25109091-.3283145c-.68836364-.1807903-1.23054545-.7132258-1.41454545-1.3892823C7 17.5567903 7 15 7 15s0-2.556879.33436364-3.7823145c.184-.6761452.72618181-1.2085807 1.41454545-1.38928227C9.99663636 9.5 15 9.5 15 9.5s5.0033636 0 6.2510909.32840323c.6884546.18070157 1.2305455.71313707 1.4145455 1.38928227zm-9.302 6.103758l4.1818181-2.3213548-4.1818181-2.3215322v4.642887z" fill="currentColor" fill-rule="evenodd"></path>
                                 </svg>
                              </a>
                           </li>
                           <li class="social-media__item social-media__item--linkedin">
                              <a href="https://www.linkedin.com/company/hidef-lifestyle/" target="_blank" rel="noopener" aria-label="Follow us on LinkedIn">
                                 <svg class="icon icon--linkedin" role="presentation" viewBox="0 0 30 30">
                                    <path d="M15 30C6.71572875 30 0 23.2842712 0 15 0 6.71572875 6.71572875 0 15 0c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15zM10.2456033 7.5c-.92709386 0-1.67417473.75112475-1.67417473 1.67662742 0 .92604418.74708087 1.67716898 1.67417473 1.67716898.9233098 0 1.6730935-.7511248 1.6730935-1.67716898C11.9186968 8.25112475 11.1689131 7.5 10.2456033 7.5zM8.80063428 21.4285714h2.88885682v-9.3037658H8.80063428v9.3037658zm4.69979822-9.3037658v9.3037658h2.8829104v-4.6015191c0-1.2141468.2292058-2.3898439 1.7309356-2.3898439 1.4811878 0 1.5001081 1.3879832 1.5001081 2.4667435v4.5246195H22.5V16.326122c0-2.5057349-.5400389-4.4320151-3.4618711-4.4320151-1.4044256 0-2.3466556.7711619-2.7315482 1.502791h-.0394623v-1.2720923h-2.7666859z" fill="currentColor" fill-rule="evenodd"></path>
                                 </svg>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="footer__aside-item footer__aside-item--payment">
                        <p class="footer__aside-title">We Accept</p>
                        <div class="payment-list">
                           <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">
                              <title id="pi-visa">Visa</title>
                              <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/>
                              <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/>
                              <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"/>
                           </svg>
                           <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">
                              <title id="pi-master">Mastercard</title>
                              <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/>
                              <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/>
                              <circle fill="#EB001B" cx="15" cy="12" r="7"/>
                              <circle fill="#F79E1B" cx="23" cy="12" r="7"/>
                              <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"/>
                           </svg>
                           <svg class="payment-list__item" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">
                              <title id="pi-american_express">American Express</title>
                              <g fill="none">
                                 <path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"/>
                                 <path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"/>
                                 <path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"/>
                              </g>
                           </svg>
                           <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal">
                              <title id="pi-paypal">PayPal</title>
                              <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/>
                              <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/>
                              <path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"/>
                              <path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"/>
                              <path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"/>
                           </svg>
                           <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-diners_club">
                              <title id="pi-diners_club">Diners Club</title>
                              <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/>
                              <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/>
                              <path d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z" fill="#3086C8"/>
                           </svg>
                           <svg class="payment-list__item" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-discover">
                              <title id="pi-discover">Discover</title>
                              <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"/>
                              <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"/>
                              <path d="M37 16.95V21c0 1.1-.9 2-2 2H23.228c7.896-1.815 12.043-4.601 13.772-6.05z" fill="#EDA024"/>
                              <path fill="#494949" d="M9 11h20v2H9z"/>
                              <path d="M22 12c0 1.7-1.3 3-3 3s-3-1.4-3-3 1.4-3 3-3c1.7 0 3 1.3 3 3z" fill="#EDA024"/>
                           </svg>
                        </div>
                     </div>
                  </aside>
               </div>
            </div>
            <aside class="cookie-bar" aria-hidden="true">
               <div class="container">
                  <div class="cookie-bar__inner">
                     <div class="cookie-bar__text rte">
                        <p>Warehouse uses cookies to improve and personalise your shopping experience and to improve our services. If you continue browsing on our website, we will assume that you agree to the use of such cookies.</p>
                     </div>
                     <button type="button" class="cookie-bar__button button button--secondary" data-action="accept-terms">Accept</button>
                  </div>
               </div>
            </aside>
         </footer>
      </div>
   --> 
   <?php include "footer1.php";  ?>
   </body>
</html>