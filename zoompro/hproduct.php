<!--   product  -->

<?php
session_start();
require ('../functions.php');
    $id = $_GET['id'] ?? 1;
    foreach ($hproduct->getData() as $item) :
        if ($item['id'] == $id) :
?>

<!-- so jo yeh product.php h esme inno ne foreach loop laga kr ek baar n -->
<!doctype html>

<html class="no-js" lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
	<title>New Samrat Elecronics</title>
    <link rel="preload" as="script" href="../cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/theme.min6348.js?v=13286664686911929253">
    
	 
	<!-- References: https://github.com/fancyapps/fancyBox -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- References: https://github.com/fancyapps/fancyBox -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
		
		<!--Jquery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		
		<!--Floating WhatsApp css-->
		<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
		
		<!--Floating WhatsApp javascript-->
		<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
    
	<script>
			$(function() {
				$('#WAButton').floatingWhatsApp({
					phone: '+919953755855', //WhatsApp Business phone number International format-
					
					headerTitle: 'Chat with us on WhatsApp!', //Popup Title
					popupMessage: 'Hello, how can we help you?', //Popup Message
					showPopup: true, //Enables popup display
					buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
					//headerColor: 'crimson', //Custom header color
					//backgroundColor: 'crimson', //Custom background button color
					position: "right"    
				});
			});
		</script>
   
    
    
	<link rel="preload" href="https://fonts.samratcdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?&amp;hmac=b8367b921c68be951353137a2829118bfe0ee68f19b746020d5d8c12f0248ce8" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="https://fonts.samratcdn.com/din_next/dinnext_i5.6181c1c6bd79a156767a82929b9c449117ad57ca.woff2?&amp;hmac=a44a3be52fe1042ec72e776e30d35a83d084470074ae4bf206a7954a19b92198" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="https://fonts.samratcdn.com/din_next/dinnext_n4.438c249fdbceeefafa64221353c5ece2fdb8ae14.woff2?&amp;hmac=a4f01625654a1dd45ebb61a78e9969f4067033ac7524f06ccb90d702b5105ed0" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="https://fonts.samratcdn.com/din_next/dinnext_n7.57888b0b2051a4dba7d02aad7ca64db99eca3cf1.woff2?&amp;hmac=50545d1907e429eb5de389c082d80ed33967eb9518474943db4d8ec0a077c8e6" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="https://fonts.samratcdn.com/din_next/dinnext_i4.61ded265c0c537a08a3ef6c1f78e76a5f3be91c9.woff2?&amp;hmac=735abb5dc4661a90e944fbd5abfddda46f67cdd3e66a21306af4ae1a1e9d3c83" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="https://fonts.samratcdn.com/din_next/dinnext_i7.3e0968fa491d382704988ea5c9fc6209193f03d0.woff2?&amp;hmac=e8a234fa22c4a03cbb876008019fb613b96540442d456e254c8168c2b640cf95" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="http://cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/font-theme-star.woff2?v=17697727674120249312" as="font" type="font/woff2" crossorigin><link rel="preload" href="https://fonts.samratcdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?&amp;hmac=b8367b921c68be951353137a2829118bfe0ee68f19b746020d5d8c12f0248ce8" as="font" type="font/woff2" crossorigin><style>
  /* We load the font used for the integration with samrat Reviews to load our own stars */
  @font-face {
    font-family: "font-theme-star";
    src: url(http://cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/font-theme-star.eot?v=17864997161147807755);
    src: url(http://cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/font-theme-star.eot?%23iefix&amp;v=17864997161147807755) format("embedded-opentype"), url(//cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/font-theme-star.woff2?v=17697727674120249312) format("woff2"), url(//cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/font-theme-star.ttf?v=1752756936325729076) format("truetype");
    font-weight: normal;
    font-style: normal;
    font-display: fallback;
  }

  @font-face {
  font-family: "DIN Next";
  font-weight: 500;
  font-style: normal;
  font-display: fallback;
  src: url("https://fonts.samratcdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?&amp;hmac=b8367b921c68be951353137a2829118bfe0ee68f19b746020d5d8c12f0248ce8") format("woff2"),
       url("https://fonts.samratcdn.com/din_next/dinnext_n5.780618dec464e6222d24888730ca26e0ca6ad6af.woff?&amp;hmac=f4e996904d5c497e50d014bd0d9f2f32b47d6dfa33cdcb8d8b068308b9bff151") format("woff");
}

  @font-face {
  font-family: "DIN Next";
  font-weight: 400;
  font-style: normal;
  font-display: fallback;
  src: url("https://fonts.samratcdn.com/din_next/dinnext_n4.438c249fdbceeefafa64221353c5ece2fdb8ae14.woff2?&amp;hmac=a4f01625654a1dd45ebb61a78e9969f4067033ac7524f06ccb90d702b5105ed0") format("woff2"),
       url("https://fonts.samratcdn.com/din_next/dinnext_n4.ba1a214c52f07ec250a5179209eb84e73639e1c9.woff?&amp;hmac=601954eb1808dd7a2d21bd023f96d3d99436121ea0a5a80002124b453fd07c87") format("woff");
}

@font-face {
  font-family: "DIN Next";
  font-weight: 500;
  font-style: normal;
  font-display: fallback;
  src: url("https://fonts.samratcdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?&amp;hmac=b8367b921c68be951353137a2829118bfe0ee68f19b746020d5d8c12f0248ce8") format("woff2"),
       url("https://fonts.samratcdn.com/din_next/dinnext_n5.780618dec464e6222d24888730ca26e0ca6ad6af.woff?&amp;hmac=f4e996904d5c497e50d014bd0d9f2f32b47d6dfa33cdcb8d8b068308b9bff151") format("woff");
}

@font-face {
  font-family: "DIN Next";
  font-weight: 500;
  font-style: italic;
  font-display: fallback;
  src: url("https://fonts.samratcdn.com/din_next/dinnext_i5.6181c1c6bd79a156767a82929b9c449117ad57ca.woff2?&amp;hmac=a44a3be52fe1042ec72e776e30d35a83d084470074ae4bf206a7954a19b92198") format("woff2"),
       url("https://fonts.samratcdn.com/din_next/dinnext_i5.8a0b77e365efc8daea9a021f4043f6d7046af5bb.woff?&amp;hmac=df0259085bebbbb2f2434837b769d8734b827ef3fdd631860d783a81eb7cbd2d") format("woff");
}


  @font-face {
  font-family: "DIN Next";
  font-weight: 700;
  font-style: normal;
  font-display: fallback;
  src: url("https://fonts.samratcdn.com/din_next/dinnext_n7.57888b0b2051a4dba7d02aad7ca64db99eca3cf1.woff2?&amp;hmac=50545d1907e429eb5de389c082d80ed33967eb9518474943db4d8ec0a077c8e6") format("woff2"),
       url("https://fonts.samratcdn.com/din_next/dinnext_n7.8ca52ee0f403ce0c89c90387f16284e4637c1b10.woff?&amp;hmac=bd22348c1c3532e18cfc203e6ab7915e42462c63484d60dce1ba49198ead7287") format("woff");
}

  @font-face {
  font-family: "DIN Next";
  font-weight: 400;
  font-style: italic;
  font-display: fallback;
  src: url("https://fonts.samratcdn.com/din_next/dinnext_i4.61ded265c0c537a08a3ef6c1f78e76a5f3be91c9.woff2?&amp;hmac=735abb5dc4661a90e944fbd5abfddda46f67cdd3e66a21306af4ae1a1e9d3c83") format("woff2"),
       url("https://fonts.samratcdn.com/din_next/dinnext_i4.09dd19acb435d364f8a7263a588c573108d49efc.woff?&amp;hmac=2d067fca207e7bf71eb6a7e7fd030dc3d2d76c2851a59d12bca5f7aad87a23b2") format("woff");
}

  @font-face {
  font-family: "DIN Next";
  font-weight: 700;
  font-style: italic;
  font-display: fallback;
  src: url("https://fonts.samratcdn.com/din_next/dinnext_i7.3e0968fa491d382704988ea5c9fc6209193f03d0.woff2?&amp;hmac=e8a234fa22c4a03cbb876008019fb613b96540442d456e254c8168c2b640cf95") format("woff2"),
       url("https://fonts.samratcdn.com/din_next/dinnext_i7.28611b7c75be07249f4251b10e48a8d9f8dbf8ba.woff?&amp;hmac=1571bb6a71e53ade29574070c533738d75877e0bc2bc0576117520c481f90802") format("woff");
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

    <script>window.performance && window.performance.mark && window.performance.mark('samrat.content_for_header.start');</script>
	
<link rel="alternate" type="application/json+oembed" href="../products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv.oembed">
<link href="https://monorail-edge.samratsvc.com/" rel="dns-prefetch">
<script id="samrat-features" type="application/json">{"accessToken":"865340c3c17555aebe213b305b42025c","betas":["rich-media-storefront-analytics"],"domain":"warehouse-theme-metal.mysamrat.com","predictiveSearch":true,"shopId":6530957363,"smart_payment_buttons_url":"https:\/\/cdn.samrat.com\/samratcloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.samrat.com\/samratcloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
<script>var samrat = samrat || {};
samrat.shop = "warehouse-theme-metal.mysamrat.com";
samrat.locale = "en";
samrat.currency = {"active":"USD","rate":"1.0"};
samrat.theme = {"name":"Warehouse 1.9.1","id":82177949747,"theme_store_id":null,"role":"main"};
samrat.theme.handle = "null";
samrat.theme.style = {"id":null,"handle":null};
samrat.cdnHost = "cdn.samrat.com";</script>
<script type="module">!function(o){(o.samrat=o.samrat||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.samrat=o.samrat||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.samratcdn.com\/assets\/v4\/spr.js?shop=warehouse-theme-metal.mysamrat.com"];
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
})();</script>
<script id="__st">var __st={"a":6530957363,"offset":-14400,"reqid":"fa9bde7b-3b85-4c90-9c8b-f088d1f2b50a","pageurl":"warehouse-theme-metal.mysamrat.com\/collections\/sales-home\/products\/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv","u":"fc2121096145","p":"product","rtyp":"product","rid":1916221128755};</script>
<script>window.samratPaypalV4VisibilityTracking = true;</script>
<script>window['GoogleAnalyticsObject'] = 'ga';
window['ga'] = window['ga'] || function() {
  (window['ga'].q = window['ga'].q || []).push(arguments);
};
window['ga'].l = 1 * new Date();</script>
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
              document.cookie = '_samrat_ga=' + linkerParam + '; ' + 'path=/';
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
<script>window.samratAnalytics = window.samratAnalytics || {};
window.samratAnalytics.meta = window.samratAnalytics.meta || {};
window.samratAnalytics.meta.currency = 'USD';
var meta = {"product":{"id":1916221128755,"gid":"gid:\/\/samrat\/Product\/1916221128755","vendor":"Sony","type":"TVs","variants":[{"id":17550242349107,"price":139800,"name":"Sony XBR-950G BRAVIA 4K HDR Ultra HD TV - 55\"","public_title":"55\"","sku":"SON-695219-XBR-55"},{"id":17550242414643,"price":219800,"name":"Sony XBR-950G BRAVIA 4K HDR Ultra HD TV - 65\"","public_title":"65\"","sku":"SON-985594-XBR-65"}]},"page":{"pageType":"product","resourceType":"product","resourceId":1916221128755}};
for (var attr in meta) {
  window.samratAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.samratAnalytics.merchantGoogleAnalytics = function() {
  
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

  var trekkie = window.samratAnalytics.lib = window.trekkie = window.trekkie || [];
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
    script.onerror = function(e) {
      (new Image()).src = 'http://v.samrat.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'cdn.samrat.com/s/javascripts/tricorder/trekkie.storefront.mindd82.js?v=2020.07.13.1';
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

    window.samratAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.samratAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;
      (function () {
        if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
          return;
        }
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.snippetStart = new Date().getTime();
        window.BOOMR.snippetExecuted = true;
        window.BOOMR.snippetVersion = 12;
        window.BOOMR.application = "core";
        window.BOOMR.shopId = 6530957363;
        window.BOOMR.themeId = 82177949747;
        window.BOOMR.url =
          "cdn.samrat.com/samratcloud/boomerang/samrat-boomerang-1.0.0.min.js";
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
              producer_url: "https://monorail-edge.samratsvc.com/v1/produce",
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
                producer_url: "https://monorail-edge.samratsvc.com/v1/produce",
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
      
        window.samratAnalytics.lib.page(
          null,
          {"pageType":"product","resourceType":"product","resourceId":1916221128755}
        );
      
      
        window.samratAnalytics.lib.track(
          "Viewed Product",
          {"currency":"USD","variantId":17550242349107,"productId":1916221128755,"productGid":"gid:\/\/samrat\/Product\/1916221128755","name":"Sony XBR-950G BRAVIA 4K HDR Ultra HD TV - 55\"","price":"1398.00","sku":"SON-695219-XBR-55","brand":"Sony","variant":"55\"","category":"TVs","nonInteraction":true}
        );
      

        window.samratAnalytics.lib.track(
          "monorail:\/\/trekkie_storefront_viewed_product\/1.1",
          {"currency":"USD","variantId":17550242349107,"productId":1916221128755,"productGid":"gid:\/\/samrat\/Product\/1916221128755","name":"Sony XBR-950G BRAVIA 4K HDR Ultra HD TV - 55\"","price":"1398.00","sku":"SON-695219-XBR-55","brand":"Sony","variant":"55\"","category":"TVs","nonInteraction":true,"referer":"https:\/\/warehouse-theme-metal.mysamrat.com\/collections\/sales-home\/products\/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv"}
        );
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "cdn.samrat.com/s/assets/shop_events_listener-2632023fb2795bd6668b6fbae05b661baba07afb3d62048f023763eca3cd96e3.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
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
};</script>
<script>document.addEventListener('DOMContentLoaded', function() {
  // Look for a contact form
  var form = document.querySelector('form[action^="/contact"] input[name="form_type"][value="contact"]');
  if (form === null) {
    return;
  }

  // If found, inject reCAPTCHA V3
  var recaptchaV3Script = document.createElement("script");
  recaptchaV3Script.setAttribute("src", "www.recaptcha.net/recaptcha/api73cd.js?onload=storefrontFormsRecaptchaCallback&amp;render=6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9&amp;hl=en");

  document.body.appendChild(recaptchaV3Script);

  return;
});</script>
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
});</script>
<script integrity="sha256-BFmLd7EQOpIHg76CWl9MJFqROXNgxiHNdyBpz5k0cRM=" crossorigin="anonymous" data-source-attribution="samrat.loadfeatures" defer="defer" src="../cdn.samrat.com/s/assets/storefront/load_feature-04598b77b1103a920783be825a5f4c245a91397360c621cd772069cf99347113.js"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="samrat.dynamic-checkout" defer="defer" src="../cdn.samrat.com/s/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<script async="async" src="www.google-analytics.com/analytics.js"></script>
<script defer="defer" src="../cdn.samrat.com/s/assets/themes_support/ga_urchin_forms-99e991855b3d8ddc69e625c68ab0579dd9927b611c2ec4943d396c72e3af0849.js"></script>

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
<script>window.performance && window.performance.mark && window.performance.mark('samrat.content_for_header.end');</script>

    <link rel="stylesheet" href="../cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/themeb4dd.css?v=13131973172680316835">

    
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Product",
    "offers": [{
          "@type": "Offer",
          "name": "55\"",
          "availability":"https://schema.org/InStock",
          "price": 1398.0,
          "priceCurrency": "USD",
          "priceValidUntil": "2020-08-17","sku": "SON-695219-XBR-55","url": "/collections/sales-home/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv?variant=17550242349107"
        },
{
          "@type": "Offer",
          "name": "65\"",
          "availability":"https://schema.org/InStock",
          "price": 2198.0,
          "priceCurrency": "USD",
          "priceValidUntil": "2020-08-17","sku": "SON-985594-XBR-65","url": "/collections/sales-home/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv?variant=17550242414643"
        }
],
    "brand": {
      "name": "Sony"
    },
    "name": "Sony XBR-950G BRAVIA 4K HDR Ultra HD TV",
    "description": "Unlock the world of ultimate colors and contrast with the X950G 4K HDR TV from Sony. Incredibly clear 4K HDR picture quality is powered by the Picture Processor X1 Ultimate, and content has never been brighter than with Full Array Local Dimming \u0026amp; Boosting. X-Motion Clarity technology makes action scenes look like real life.\nMake it real with lifelike pictures and sound\nSee how beautifully detailed 4K pictures with vibrant shades of color come together with our latest Sound-from-Picture Reality™ for enthralling 4K.\nPictures and sound in perfect harmony\nBe in the moment with true-to-life pictures and acoustics to match. Beautifully detailed images combine with our Sound-from-Picture Reality™ for a captivating audio-visual performance.\nUltimate realism\nWith unmatched processing power, the Picture Processor X1™ Ultimate detects hundreds of different objects on-screen and intelligently enhances brightness, detail and color so everything you watch is clear, bright and incredibly realistic.\nSound-from-Picture Reality™\nOur Acoustic Multi-Audio™ system adds two sound-positioning tweeters in the rear of the TV to the bass reflex speakers for Sound-from-Picture Reality™. With action and sound precisely aligned, your viewing becomes so much more immersive.\nBig screen, dynamic experience\nThis Sony 4K HDR TV is designed for spectacular big screen viewing. Immersive pictures put you right at the heart of the action.\nEmbrace the thrills of the theater\nSee all your favorite movies in a completely new way with more drama and realism on a 4K Ultra HD TV that's designed to deliver an authentic theater experience at home.\nLife’s brilliance, revealed with extra colors\nSee vivid, real-world colors all around you. A TRILUMINOS™ Display maps colors from a wider palette, faithfully reproducing every shade and hue in the umbrellas.\nGeneral specifications:\nDiscover a world rich in detail and color on this 4K HDR TV with Picture Processor X1™ Ultimate. Pictures are perfectly matched by our latest Acoustic Multi-Audio™.\n\nAvailable in 55\" class (54.6\" diag), 65\" class (64.5\" diag), 75\" class (74.5\" diag), 85\" class (84.6\" diag)\n4K High Dynamic Range\nPicture Processor X1™ Ultimate\nAcoustic Multi-Audio™\nAndroid TV™\nDimensions: TV with stand - 48 3\/8 x 30 5\/8 x 10 7\/8 inch; without stand - 48 3\/8 x 28 x 2 3\/4 inch\n\nThis is a demo store. This product can be bought on HiDEF Lifestyle eshop.\nAll logos, images, descriptions and brands are the property of their respective owners.",
    "category": "TVs",
    "url": "/collections/sales-home/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv",
    "sku": "SON-695219-XBR-55",
    "image": {
      "@type": "ImageObject",
      "url": "https://cdn.samrat.com/s/files/1/0065/3095/7363/products/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785_1024x.jpg?v=1570074258",
      "image": "https://cdn.samrat.com/s/files/1/0065/3095/7363/products/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785_1024x.jpg?v=1570074258",
      "name": "Sony XBR-950G BRAVIA 4K HDR Ultra HD TV",
      "width": "1024",
      "height": "1024"
    }
  }
  </script>



  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
  "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://warehouse-theme-metal.mysamrat.com"
    },{
          "@type": "ListItem",
          "position": 2,
          "name": "Sales - Home",
          "item": "https://warehouse-theme-metal.mysamrat.com/collections/sales-home"
        }, {
          "@type": "ListItem",
          "position": 3,
          "name": "Sony XBR-950G BRAVIA 4K HDR Ultra HD TV",
          "item": "https://warehouse-theme-metal.mysamrat.com/collections/sales-home/products/sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv"
        }]
  }
  </script>


    <script>
      // This allows to expose several variables to the global scope, to be used in scripts
      window.theme = {
        pageType: "product",
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
    </script><script src="../cdn.polyfill.io/v3/polyfill.mina617.js?unknown=polyfill&amp;features=fetch,Element.prototype.closest,Element.prototype.matches,Element.prototype.remove,Element.prototype.classList,Array.prototype.includes,Array.prototype.fill,String.prototype.includes,String.prototype.padStart,Object.assign,CustomEvent,Intl,URL,DOMTokenList,IntersectionObserver,IntersectionObserverEntry" defer></script>
    <script src="../cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/theme.min6348.js?v=13286664686911929253" defer></script>
    <script src="../cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/custom9167.js?v=9037325469167471270" defer></script>

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

  <body class="warehouse--v1 features--animate-zoom template-product " data-instant-intensity="viewport">
   <?php include "../header1.php"?>

    
<div >

<section data-section-id="header" data-section-type="header" data-section-settings='{
  "navigationLayout": "inline",
  "desktopOpenTrigger": "hover",
  "useStickyHeader": true
}'>
  <header  role="banner">
    <div class="container">
      <div class="header__inner">
	
<!-- Header -->



<div class="header__search-bar-wrapper is-visible">
</div><div class="header__action-list"><div class="header__action-item header__action-item--currency hidden-pocket">

                <div class="header__action-item-content">
                 
                  </div>
            </div>
        </div>
      </div>
    </div>
  </header>
  <div class="header__action-item header__action-item--cart">
           </div>
 	</section>

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
    }</style>

<script>
  document.documentElement.style.setProperty('--header-height', document.getElementById('samrat-section-header').clientHeight + 'px');
</script>

</div>

    <main id="main" role="main">
      <div id="samrat-section-product-template" class="samrat-section"><section data-section-id="product-template" data-section-type="product" data-section-settings='{
  "showShippingEstimator": true,
  "showQuantitySelector": true,
  "showPaymentButton": true,
  "showInventoryQuantity": true,
  "lowInventoryThreshold": 10,
  "galleryTransitionEffect": "slide",
  "enableImageZoom": true,
  "zoomEffect": "outside",
  "enableVideoLooping": false,
  "productOptions": [&quot;Size&quot;],
  "enableHistoryState": true,
  "infoOverflowScroll": true,
  "isQuickView": false
}'><div class="container container--flush">
      <div class="page__sub-header">
      </div>

      <div class="product-block-list product-block-list--small">
        <div class="product-block-list__wrapper"><div class="product-block-list__item product-block-list__item--gallery">
              <div class="card">
    <div class="card__section card__section--tight">
      <div class="product-gallery product-gallery--with-thumbnails"><div class="product-gallery__carousel-wrapper">
          <div class="product-gallery__carousel product-gallery__carousel--zoomable" data-media-count="7" data-initial-media-id="2744985419827"><div class="product-gallery__carousel-item is-selected " tabindex="-1" data-media-id="2744985419827" data-media-type="image"  ><div class="product-gallery__size-limiter" style="max-width: 2571px"><div class="aspect-ratio" style="padding-bottom: 100.0%">
                        <img class="product-gallery__image lazyload image--fade-in" data-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['fimg']); ?>" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['fimg']); ?>" alt="Sony XBR-950G BRAVIA 4K HDR Ultra HD TV">

                         
                         
                      </div>
                    </div></div><div class="product-gallery__carousel-item  " tabindex="-1" data-media-id="2744985452595" data-media-type="image"  ><div class="product-gallery__size-limiter" style="max-width: 2571px"><div class="aspect-ratio" style="padding-bottom: 100.0%">
                        <img class="product-gallery__image lazyload image--fade-in" data-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['bimg']); ?>" data-widths="[400,500,600,700,800,900,1000,1100,1200]" data-sizes="auto" data-zoom="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['bimg']); ?>" alt="Sony XBR-950G BRAVIA 4K HDR Ultra HD TV">

                       
                          
                      </div>
                    </div></div>
					
					
					
					
					</div><span class="product-gallery__zoom-notice"><svg class="icon icon--zoom" viewBox="0 0 10 10" role="presentation">
      <path d="M7.58801492 6.8808396L9.999992 9.292784l-.70716.707208-2.41193007-2.41199543C6.15725808 8.15916409 5.24343297 8.50004 4.25 8.50004c-2.347188 0-4.249968-1.902876-4.249968-4.2501C.000032 1.902704 1.902812.000128 4.25.000128c2.347176 0 4.249956 1.902576 4.249956 4.249812 0 .99341752-.34083418 1.90724151-.91194108 2.6308996zM4.25.999992C2.455064.999992.999992 2.454944.999992 4.24994c0 1.794984 1.455072 3.249936 3.250008 3.249936 1.794924 0 3.249996-1.454952 3.249996-3.249936C7.499996 2.454944 6.044924.999992 4.25.999992z" fill="currentColor" fill-rule="evenodd"></path>
    </svg> Roll over image to zoom in</span></div><div class="scroller">
            <div class="scroller__inner">
              <div class="product-gallery__thumbnail-list"><a href="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['fimg']); ?>" class="product-gallery__thumbnail is-nav-selected " data-media-id="2744985419827" ><div class="aspect-ratio" style="padding-bottom: 100.0%">
                      <img class="image--fade-in lazyload" data-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['fimg']); ?>" alt="">
                    </div>
                  </a><a href="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['bimg']); ?>" class="product-gallery__thumbnail  " data-media-id="2744985452595" ><div class="aspect-ratio" style="padding-bottom: 100.0%">
                      <img class="image--fade-in lazyload" data-src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['bimg']); ?>" alt="">
                    </div>
                  </a></div>
            </div>
          </div></div>
    </div>
  </div>
            </div><div class="product-block-list__item product-block-list__item--info">
            <div class="card card--collapsed card--sticky"><div id="product-zoom-product-template" class="product__zoom-wrapper"></div><div class="card__section">
    
<div class="product-meta"><h1 class="product-meta__title heading h1"><?php echo $item['title'] ?? "Unknown"; ?></h1><div class="product-meta__label-list"><span class="product-label product-label--on-sale" >Save Rs. <span><?php echo $item['save'] ?? "Unknown"; ?></span></span></div>

			<a href="#product-reviews" class="product-meta__reviews-badge link" data-offset="30">
          <span class="samrat-product-reviews-badge" data-id="1916221128755"><div class="spr-badge" style="opacity: 0">
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
        </a></div>

    <hr class="card__separator">
<form method="post" action="#" id="product_form_1916221128755" accept-charset="UTF-8" class="product-form" enctype="multipart/form-data">
<input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
<div class="product-form__variants"><div class="product-form__option" data-selector-type="block">


                  </div>
        </div><div class="product-form__info-list">
        <div class="product-form__info-item">
          <span class="product-form__info-title text--strong">Price:</span>

          <div class="product-form__info-content">
            <div class="price-list"><span class="price price--highlight">Rs. <?php echo $item['price'] ?? 0; ?></span>
                <span class="price price--compare">Rs. <?php echo $item['mrp'] ?? 0; ?></span></div>

            <div class="product-form__price-info" style="display: none">
              <div class="unit-price-measurement">
                <span class="unit-price-measurement__price"></span>
                <span class="unit-price-measurement__separator">/ </span><span class="unit-price-measurement__reference-value"></span><span class="unit-price-measurement__reference-unit"></span>
              </div>
            </div></div>
        </div><div class="product-form__info-item">
            <span class="product-form__info-title text--strong">Stock:</span>

            <div class="product-form__info-content"><span class="product-form__inventory inventory inventory--high"> <?php echo $item['stock'] ?? "out of stock"; ?></span><span class="inventory-bar " data-stock-countdown-max="171.0">
                    <span class="inventory-bar__progress" style="width: 100%"></span>
                  </span></div>
          </div><div class="product-form__info-item product-form__info-item--quantity">
              <label for="product-template-1916221128755-quantity" class="product-form__info-title text--strong">Warrenty: <?php echo $item['war'] ?? 0; ?></label>

              <div class="product-form__info-content">
                <div class="select-wrapper select-wrapper--small select-wrapper--primary"><svg class="icon icon--arrow-bottom" viewBox="0 0 12 8" role="presentation">
      <path stroke="currentColor" stroke-width="2" d="M10 2L6 6 2 2" fill="none" stroke-linecap="square"></path>
    </svg>
	
                </div>
              </div>
            </div></div>

      <div class="product-form__payment-container"><button type="submit" class="product-form__add-button button button--primary" data-action="add-to-cart">Hurry Up</button><div data-samrat="payment-button" class="samrat-payment-button"><button class="samrat-payment-button__button samrat-payment-button__button--unbranded samrat-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button><button class="samrat-payment-button__more-options samrat-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button></div>
</div></form>
<!--<div class="product-meta__share-buttons hidden-tablet-and-up">
        <span class="text--strong">Share this product</span>
       </div>-->
	   </div>

  <script type="application/json" data-product-json>
    {
      "product": {"id":1916221128755,"title":"Sony XBR-950G BRAVIA 4K HDR Ultra HD TV","handle":"sony-xbr-65x950g-65-class-64-5-diag-bravia-4k-hdr-ultra-hd-tv","description":"\u003cp\u003eUnlock the world of ultimate colors and contrast with the X950G 4K HDR TV from Sony. Incredibly clear 4K HDR picture quality is powered by the Picture Processor X1 Ultimate, and content has never been brighter than with Full Array Local Dimming \u0026amp; Boosting. X-Motion Clarity technology makes action scenes look like real life.\u003c\/p\u003e\n\u003ch6\u003eMake it real with lifelike pictures and sound\u003c\/h6\u003e\n\u003cp\u003eSee how beautifully detailed 4K pictures with vibrant shades of color come together with our latest Sound-from-Picture Reality™ for enthralling 4K.\u003c\/p\u003e\n\u003ch6\u003ePictures and sound in perfect harmony\u003c\/h6\u003e\n\u003cp\u003eBe in the moment with true-to-life pictures and acoustics to match. Beautifully detailed images combine with our Sound-from-Picture Reality™ for a captivating audio-visual performance.\u003c\/p\u003e\n\u003ch6\u003eUltimate realism\u003c\/h6\u003e\n\u003cp\u003eWith unmatched processing power, the Picture Processor X1™ Ultimate detects hundreds of different objects on-screen and intelligently enhances brightness, detail and color so everything you watch is clear, bright and incredibly realistic.\u003c\/p\u003e\n\u003ch6\u003eSound-from-Picture Reality™\u003c\/h6\u003e\n\u003cp\u003eOur Acoustic Multi-Audio™ system adds two sound-positioning tweeters in the rear of the TV to the bass reflex speakers for Sound-from-Picture Reality™. With action and sound precisely aligned, your viewing becomes so much more immersive.\u003c\/p\u003e\n\u003ch6\u003eBig screen, dynamic experience\u003c\/h6\u003e\n\u003cp\u003eThis Sony 4K HDR TV is designed for spectacular big screen viewing. Immersive pictures put you right at the heart of the action.\u003c\/p\u003e\n\u003ch6\u003eEmbrace the thrills of the theater\u003c\/h6\u003e\n\u003cp\u003eSee all your favorite movies in a completely new way with more drama and realism on a 4K Ultra HD TV that's designed to deliver an authentic theater experience at home.\u003c\/p\u003e\n\u003ch6\u003eLife’s brilliance, revealed with extra colors\u003c\/h6\u003e\n\u003cp\u003eSee vivid, real-world colors all around you. A TRILUMINOS™ Display maps colors from a wider palette, faithfully reproducing every shade and hue in the umbrellas.\u003c\/p\u003e\n\u003ch6\u003eGeneral specifications:\u003c\/h6\u003e\n\u003cp\u003eDiscover a world rich in detail and color on this 4K HDR TV with Picture Processor X1™ Ultimate. Pictures are perfectly matched by our latest Acoustic Multi-Audio™.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eAvailable in 55\" class (54.6\" diag), 65\" class (64.5\" diag), 75\" class (74.5\" diag), 85\" class (84.6\" diag)\u003c\/li\u003e\n\u003cli\u003e4K High Dynamic Range\u003c\/li\u003e\n\u003cli\u003ePicture Processor X1™ Ultimate\u003c\/li\u003e\n\u003cli\u003eAcoustic Multi-Audio™\u003c\/li\u003e\n\u003cli\u003eAndroid TV™\u003c\/li\u003e\n\u003cli\u003eDimensions: TV with stand - 48 3\/8 x 30 5\/8 x 10 7\/8 inch; without stand - 48 3\/8 x 28 x 2 3\/4 inch\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eThis is a demo store. This product can be bought on \u003ca href=\"https:\/\/www.hideflifestyle.com\/\"\u003eHiDEF Lifestyle eshop\u003c\/a\u003e.\u003c\/p\u003e\n\u003cem\u003eAll logos, images, descriptions and brands are the property of their respective owners.\u003c\/em\u003e","published_at":"2019-05-28T12:38:34-04:00","created_at":"2019-05-28T12:38:34-04:00","vendor":"Sony","type":"TVs","tags":["__stock:171","Brand_Sony","Color_Black","Color_Silver","Home Cinema","Led Tvs","Price_$800 to $1500","Price_More than $1500"],"price":139800,"price_min":139800,"price_max":219800,"available":true,"price_varies":true,"compare_at_price":219800,"compare_at_price_min":219800,"compare_at_price_max":219800,"compare_at_price_varies":false,"variants":[{"id":17550242349107,"title":"55\"","option1":"55\"","option2":null,"option3":null,"sku":"SON-695219-XBR-55","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Sony XBR-950G BRAVIA 4K HDR Ultra HD TV - 55\"","public_title":"55\"","options":["55\""],"price":139800,"weight":0,"compare_at_price":219800,"inventory_management":"samrat","barcode":""},{"id":17550242414643,"title":"65\"","option1":"65\"","option2":null,"option3":null,"sku":"SON-985594-XBR-65","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Sony XBR-950G BRAVIA 4K HDR Ultra HD TV - 65\"","public_title":"65\"","options":["65\""],"price":219800,"weight":0,"compare_at_price":null,"inventory_management":"samrat","barcode":"27242915718"}],"images":["\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785.jpg?v=1559061527","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55left_64aca63d-41cc-4e61-998b-69d5b9b4f3b3.jpg?v=1559061527","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55right_99b2696f-ee09-49f5-8475-c1eb28110008.jpg?v=1559061527","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55top_6857b339-ab22-43cf-aae6-8efae055e53e.jpg?v=1559061527","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55side_fe624b4c-8986-4e48-8c29-a8f46e7da1f4.jpg?v=1559061527","#\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55back_443b96f0-f320-4096-ba50-801da5647925.jpg?v=1559061527","\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonyxbr55lifestyle_5a4b6f75-334b-416b-b6ab-967e5679af1b.jpg?v=1559061527"],"featured_image":"\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785.jpg?v=1559061527","options":["Size"],"media":[{"alt":null,"id":2744985419827,"position":1,"preview_image":{"aspect_ratio":1.0,"height":2571,"width":2571,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785.jpg?v=1570074258"},"aspect_ratio":1.0,"height":2571,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonyxbr55front_f72cc8ff-fcd6-4141-b9cc-e1320f867785.jpg?v=1570074258","width":2571},{"alt":null,"id":2744985452595,"position":2,"preview_image":{"aspect_ratio":1.0,"height":2571,"width":2571,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55left_64aca63d-41cc-4e61-998b-69d5b9b4f3b3.jpg?v=1570074258"},"aspect_ratio":1.0,"height":2571,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55left_64aca63d-41cc-4e61-998b-69d5b9b4f3b3.jpg?v=1570074258","width":2571},{"alt":null,"id":2744985485363,"position":3,"preview_image":{"aspect_ratio":1.0,"height":2571,"width":2571,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55right_99b2696f-ee09-49f5-8475-c1eb28110008.jpg?v=1570074258"},"aspect_ratio":1.0,"height":2571,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55right_99b2696f-ee09-49f5-8475-c1eb28110008.jpg?v=1570074258","width":2571},{"alt":null,"id":2744985518131,"position":4,"preview_image":{"aspect_ratio":1.0,"height":2571,"width":2571,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55top_6857b339-ab22-43cf-aae6-8efae055e53e.jpg?v=1570074258"},"aspect_ratio":1.0,"height":2571,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55top_6857b339-ab22-43cf-aae6-8efae055e53e.jpg?v=1570074258","width":2571},{"alt":null,"id":2744985550899,"position":5,"preview_image":{"aspect_ratio":1.0,"height":2400,"width":2400,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55side_fe624b4c-8986-4e48-8c29-a8f46e7da1f4.jpg?v=1570074258"},"aspect_ratio":1.0,"height":2400,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55side_fe624b4c-8986-4e48-8c29-a8f46e7da1f4.jpg?v=1570074258","width":2400},{"alt":null,"id":2744985583667,"position":6,"preview_image":{"aspect_ratio":1.0,"height":2571,"width":2571,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55back_443b96f0-f320-4096-ba50-801da5647925.jpg?v=1570074258"},"aspect_ratio":1.0,"height":2571,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonybxr55back_443b96f0-f320-4096-ba50-801da5647925.jpg?v=1570074258","width":2571},{"alt":null,"id":2744985616435,"position":7,"preview_image":{"aspect_ratio":1.0,"height":2000,"width":2000,"src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonyxbr55lifestyle_5a4b6f75-334b-416b-b6ab-967e5679af1b.jpg?v=1570074258"},"aspect_ratio":1.0,"height":2000,"media_type":"image","src":"https:\/\/cdn.samrat.com\/s\/files\/1\/0065\/3095\/7363\/products\/sonyxbr55lifestyle_5a4b6f75-334b-416b-b6ab-967e5679af1b.jpg?v=1570074258","width":2000}],"content":"\u003cp\u003eUnlock the world of ultimate colors and contrast with the X950G 4K HDR TV from Sony. Incredibly clear 4K HDR picture quality is powered by the Picture Processor X1 Ultimate, and content has never been brighter than with Full Array Local Dimming \u0026amp; Boosting. X-Motion Clarity technology makes action scenes look like real life.\u003c\/p\u003e\n\u003ch6\u003eMake it real with lifelike pictures and sound\u003c\/h6\u003e\n\u003cp\u003eSee how beautifully detailed 4K pictures with vibrant shades of color come together with our latest Sound-from-Picture Reality™ for enthralling 4K.\u003c\/p\u003e\n\u003ch6\u003ePictures and sound in perfect harmony\u003c\/h6\u003e\n\u003cp\u003eBe in the moment with true-to-life pictures and acoustics to match. Beautifully detailed images combine with our Sound-from-Picture Reality™ for a captivating audio-visual performance.\u003c\/p\u003e\n\u003ch6\u003eUltimate realism\u003c\/h6\u003e\n\u003cp\u003eWith unmatched processing power, the Picture Processor X1™ Ultimate detects hundreds of different objects on-screen and intelligently enhances brightness, detail and color so everything you watch is clear, bright and incredibly realistic.\u003c\/p\u003e\n\u003ch6\u003eSound-from-Picture Reality™\u003c\/h6\u003e\n\u003cp\u003eOur Acoustic Multi-Audio™ system adds two sound-positioning tweeters in the rear of the TV to the bass reflex speakers for Sound-from-Picture Reality™. With action and sound precisely aligned, your viewing becomes so much more immersive.\u003c\/p\u003e\n\u003ch6\u003eBig screen, dynamic experience\u003c\/h6\u003e\n\u003cp\u003eThis Sony 4K HDR TV is designed for spectacular big screen viewing. Immersive pictures put you right at the heart of the action.\u003c\/p\u003e\n\u003ch6\u003eEmbrace the thrills of the theater\u003c\/h6\u003e\n\u003cp\u003eSee all your favorite movies in a completely new way with more drama and realism on a 4K Ultra HD TV that's designed to deliver an authentic theater experience at home.\u003c\/p\u003e\n\u003ch6\u003eLife’s brilliance, revealed with extra colors\u003c\/h6\u003e\n\u003cp\u003eSee vivid, real-world colors all around you. A TRILUMINOS™ Display maps colors from a wider palette, faithfully reproducing every shade and hue in the umbrellas.\u003c\/p\u003e\n\u003ch6\u003eGeneral specifications:\u003c\/h6\u003e\n\u003cp\u003eDiscover a world rich in detail and color on this 4K HDR TV with Picture Processor X1™ Ultimate. Pictures are perfectly matched by our latest Acoustic Multi-Audio™.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eAvailable in 55\" class (54.6\" diag), 65\" class (64.5\" diag), 75\" class (74.5\" diag), 85\" class (84.6\" diag)\u003c\/li\u003e\n\u003cli\u003e4K High Dynamic Range\u003c\/li\u003e\n\u003cli\u003ePicture Processor X1™ Ultimate\u003c\/li\u003e\n\u003cli\u003eAcoustic Multi-Audio™\u003c\/li\u003e\n\u003cli\u003eAndroid TV™\u003c\/li\u003e\n\u003cli\u003eDimensions: TV with stand - 48 3\/8 x 30 5\/8 x 10 7\/8 inch; without stand - 48 3\/8 x 28 x 2 3\/4 inch\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eThis is a demo store. This product can be bought on \u003ca href=\"https:\/\/www.hideflifestyle.com\/\"\u003eHiDEF Lifestyle eshop\u003c\/a\u003e.\u003c\/p\u003e\n\u003cem\u003eAll logos, images, descriptions and brands are the property of their respective owners.\u003c\/em\u003e"},
      "options_with_values": [{"name":"Size","position":1,"values":["55\"","65\""]}],
      "selected_variant_id": 17550242349107
,"inventories": {"17550242349107": {
              "inventory_management": "samrat",
              "inventory_policy": "deny",
              "inventory_quantity": 72,
              "inventory_message": "In stock (72 units), ready to be shipped"
            },
"17550242414643": {
              "inventory_management": "samrat",
              "inventory_policy": "deny",
              "inventory_quantity": 7,
              "inventory_message": "Only 7 units left"
            }
}}
  </script>
</div>
          </div><div class="product-block-list__item product-block-list__item--description">
              <div class="card"><div class="card__header">
                    <h2 class="card__title heading h3">Description</h2>
                  </div><div class="card__section expandable-content" aria-expanded="false">
                      <div class="rte text--pull">
                        <p><?php echo $item['dis'] ?></p>
                      </div>

                      <!--<button class="expandable-content__toggle">
                        <span class="expandable-content__toggle-icon"></span>
                        <span class="expandable-content__toggle-text" data-view-more="View more" data-view-less="View less">View more</span>
                      </button> -->
                    </div></div>
            </div>
			
			<div class="product-block-list__item product-block-list__item--description">
              <div class="card"><div class="card__header">
                    <h2 class="card__title heading h3">Specifications</h2>
                  </div><div class="card__section expandable-content" aria-expanded="false">
                      <div class="rte text--pull">
                        <p><?php echo $item['sip'] ?></p>
                      </div>

                      <button class="expandable-content__toggle">
                        <span class="expandable-content__toggle-icon"></span>
                        <span class="expandable-content__toggle-text" data-view-more="View more" data-view-less="View less">View more</span>
                      </button>
                    </div></div>
            </div>
			
			<div class="product-block-list__item product-block-list__item--content">
                <div class="card"><div class="card__header">
                      <h2 class="card__title heading h3">Shipping</h2>
                    </div>

                    <div class="card__section expandable-content" aria-expanded="false">
                      <div class="rte text--pull">
                        <ul>
<li>Delivery is free for all orders over Rs. 50,000. Otherwise, delivery is depending on the items you plan to purchase.</li>
<li>Once your product has shipped, it usually takes 2 to 7 business days.</li>
<li>You can return your product up to 10 days after receiving your order. Please make sure that the products are not used or damaged.</li>
</ul>
                      </div>

                    <!--   <button class="expandable-content__toggle">
                        <span class="expandable-content__toggle-icon"></span>
                        <span class="expandable-content__toggle-text" data-view-more="View more" data-view-less="View less">View more</span>
                      </button> -->
                    </div></div>
              </div><div class="product-block-list__item product-block-list__item--reviews">
              <span id="product-reviews" class="anchor"></span>

              <div class="card">
               
              </div>
            </div><div class="product-block-list__item product-block-list__item--trust">
              <div class="card">
                <div class="card__header card__header--flex">
                  <h2 class="card__title heading h3">Payment &amp; Security</h2><svg class="icon icon--lock" viewBox="0 0 18 24" role="presentation">
      <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="square" stroke-width="2">
        <path d="M9.00000011 1.916667c-2.48888889 0-4.44444444 2.01666667-4.44444444 4.58333333v2.75h8.88888893v-2.75c0-2.56666666-1.9555556-4.58333333-4.44444449-4.58333333z"></path>
        <path d="M1.888889 9.25h14.222222v12.833333H1.888889z"></path>
        <ellipse cx="9" cy="14.75" rx="1.777778" ry="1.833333"></ellipse>
        <path d="M9.00000011 16.5833337v1.8333333"></path>
      </g>
    </svg></div>

                <div class="card__section"><p class="card__subtitle heading h6">Payment methods</p><div class="payment-list">
                      
                        <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"/></svg>
                      
                        <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><circle fill="#EB001B" cx="15" cy="12" r="7"/><circle fill="#F79E1B" cx="23" cy="12" r="7"/><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"/></svg>
                      
                        <svg class="payment-list__item" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"/><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"/><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"/></g></svg>

                      
                        <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal"><title id="pi-paypal">PayPal</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"/><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"/><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"/></svg>
                      
                        <svg class="payment-list__item" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-diners_club"><title id="pi-diners_club">Diners Club</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z" fill="#3086C8"/></svg>
                      
                        <svg class="payment-list__item" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-discover"><title id="pi-discover">Discover</title><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"/><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"/><path d="M37 16.95V21c0 1.1-.9 2-2 2H23.228c7.896-1.815 12.043-4.601 13.772-6.05z" fill="#EDA024"/><path fill="#494949" d="M9 11h20v2H9z"/><path d="M22 12c0 1.7-1.3 3-3 3s-3-1.4-3-3 1.4-3 3-3c1.7 0 3 1.3 3 3z" fill="#EDA024"/></svg>

                      
                    </div>

                    <p class="payment-list__notice">Your payment information is processed securely. We do not store credit card details nor have access to your credit card information.</p>
					
					
					</div>
              </div>
            </div></div>
      </div>
    </div>
	<!--<div id="modal-refunds-policy" class="modal" aria-hidden="true">
        <div class="modal__dialog" role="dialog">
          <header class="modal__header">
            <h3 class="modal__title heading h2">Refund Policy</h3>
            <button class="modal__close link" data-action="close-modal"><svg class="icon icon--close" viewBox="0 0 19 19" role="presentation">
      <path d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z" fill="currentColor" fill-rule="evenodd"></path>
    </svg></button>
          </header>

          <div class="modal__content">
            <div class="rte">
              <p>Returns
<br />Our policy lasts 30 days. If 30 days have gone by since your purchase, unfortunately we can’t offer you a refund or exchange.</p>

<p>To be eligible for a return, your item must be unused and in the same condition that you received it. It must also be in the original packaging.</p>

<p>Several types of goods are exempt from being returned. Perishable goods such as food, flowers, newspapers or magazines cannot be returned. We also do not accept products that are intimate or sanitary goods, hazardous materials, or flammable liquids or gases.</p>

<p>Additional non-returnable items:
<br />Gift cards
<br />Downloadable software products
<br />Some health and personal care items</p>

<p>To complete your return, we require a receipt or proof of purchase.</p>

<p>Please do not send your purchase back to the manufacturer.</p>

<p>There are certain situations where only partial refunds are granted (if applicable)
<br />Book with obvious signs of use
<br />CD, DVD, VHS tape, software, video game, cassette tape, or vinyl record that has been opened
<br />Any item not in its original condition, is damaged or missing parts for reasons not due to our error
<br />Any item that is returned more than 30 days after delivery</p>

<p>Refunds (if applicable)
<br />Once your return is received and inspected, we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund.
<br />If you are approved, then your refund will be processed, and a credit will automatically be applied to your credit card or original method of payment, within a certain amount of days.</p>

<p>Late or missing refunds (if applicable)
<br />If you haven’t received a refund yet, first check your bank account again.
<br />Then contact your credit card company, it may take some time before your refund is officially posted.
<br />Next contact your bank. There is often some processing time before a refund is posted.
<br />If you’ve done all of this and you still have not received your refund yet, please contact us at team@maestrooo.com.</p>

<p>Sale items (if applicable)
<br />Only regular priced items may be refunded, unfortunately sale items cannot be refunded.</p>

<p>Exchanges (if applicable)
<br />We only replace items if they are defective or damaged.  If you need to exchange it for the same item, send us an email at team@maestrooo.com and send your item to: 61 RUE DE L'ESPERANCE, 75000 Paris, France.</p>

<p>Gifts
<br />If the item was marked as a gift when purchased and shipped directly to you, you’ll receive a gift credit for the value of your return. Once the returned item is received, a gift certificate will be mailed to you.</p>

<p>If the item wasn’t marked as a gift when purchased, or the gift giver had the order shipped to themselves to give to you later, we will send a refund to the gift giver and he will find out about your return.</p>

<p>Shipping
<br />To return your product, you should mail your product to: 61 RUE DE L'ESPERANCE, 75000 Paris, France</p>

<p>You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be deducted from your refund.</p>

<p>Depending on where you live, the time it may take for your exchanged product to reach you, may vary.</p>

<p>If you are shipping an item over $75, you should consider using a trackable shipping service or purchasing shipping insurance. We don’t guarantee that we will receive your returned item.</p>
            </div>
          </div> */ 
        </div>
      </div>-->
	  
	  </section>
<div id="WAButton"></div>
</div>
 
  </body>
<?php
        endif;
        endforeach;
?>
  <?php include "../footer.php"?>
</html>
