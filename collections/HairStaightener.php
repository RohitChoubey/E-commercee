<?php
// Start the session
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
		<title>Hair Staightener</title>
		<link rel="shortcut icon" href=			"../cdn.samrat.com/s/files/1/0065/3095/7363/files/favicon-metal_1x_8c5a84a5-269e-4253-9f37-8607fe4b269d_96x962e70.png?v=1563383053" type="image/png">
		<link rel="preload" as="style" href="../cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/themeb4dd.css?v=13131973172680316835">
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

      <style>
         /* We load the font used for the integration with Shopify Reviews to load our own stars */
         @font-face {
         font-family: "font-theme-star";
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
		
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
        .form-image-upload{
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
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
      <script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
      <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
      <script>window['GoogleAnalyticsObject'] = 'ga';
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
         var meta = {"page":{"pageType":"collection","resourceType":"collection","resourceId":89623035955}};
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
           script.onerror = function(e) {
             (new Image()).src = 'http://v.samrat.com/internal_errors/track?error=trekkie_load';
           };
           script.async = true;
           script.src = '../../cdn.samrat.com/s/javascripts/tricorder/trekkie.storefront.mindd82.js?v=2020.07.13.1';
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
                 "";
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
                     producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
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
                       producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
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
                 {"pageType":"collection","resourceType":"collection","resourceId":89623035955}
               );
             
             
               window.ShopifyAnalytics.lib.track(
                 "Viewed Product Category",
                 {"currency":"USD","category":"Collection: earbuds","nonInteraction":true}
               );
             
           }
         });
         
         
             var eventsListenerScript = document.createElement('script');
             eventsListenerScript.async = true;
             eventsListenerScript.src = "../cdn.samrat.com/s/assets/shop_events_listener-2632023fb2795bd6668b6fbae05b661baba07afb3d62048f023763eca3cd96e3.js";
             document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
           
         })();
      </script>
      <script integrity="sha256-BFmLd7EQOpIHg76CWl9MJFqROXNgxiHNdyBpz5k0cRM=" crossorigin="anonymous" data-source-attribution="samrat.loadfeatures" defer="defer" src="../cdn.samrat.com/s/assets/storefront/load_feature-04598b77b1103a920783be825a5f4c245a91397360c621cd772069cf99347113.js"></script>
      <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="samrat.dynamic-checkout" defer="defer" src="../cdn.samrat.com/s/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
      <script async="async" src="../../www.google-analytics.com/analytics.js"></script>
      <script>window.performance && window.performance.mark && window.performance.mark('samrat.content_for_header.end');</script>
      <link rel="stylesheet" href="../cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/themeb4dd.css?v=13131973172680316835">
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
    
   <body class="warehouse--v1 features--animate-zoom template-collection " data-instant-intensity="viewport">
      <span class="loading-bar"></span>
      <div id="samrat-section-header" class="samrat-section samrat-section__header">
         <section data-section-id="header" data-section-type="header" data-section-settings='{
            "navigationLayout": "inline",
            "desktopOpenTrigger": "hover",
            "useStickyHeader": true
            }'>
         <?php include "../header1.php";  ?>
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
         </style><div id="WAButton"></div>
         <script>
            document.documentElement.style.setProperty('--header-height', document.getElementById('samrat-section-header').clientHeight + 'px');
         </script>
      </div>
      <main id="main" role="main">
         <div id="samrat-section-collection-template" class="samrat-section">
            <section data-section-id="collection-template" data-section-type="collection" data-section-settings='{
               "currentSortBy": "best-selling",
               "currentTags": [],
               "filterType": "group",
               "defaultLayout": "grid",
               "defaultProductsPerPage": 24,
               "isAutomatic": false,
               "gridClasses": "1\/3--tablet-and-up 1\/4--desk"
               }'>
               <div class="container container--flush">
					<div class="page__sub-header">
						<nav aria-label="Breadcrumb" class="breadcrumb">
							<ol class="breadcrumb__list">
								<li class="breadcrumb__item">
								    <a class="breadcrumb__link link" href="../index.php">Home</a>
									<svg class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
										<path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
								    </svg>
								</li>
							   <li class="breadcrumb__item"><span class="breadcrumb__link" aria-current="page">Hair Staightener / Trimmer / Hair Dryers</span></li>
							</ol>
						</nav>
					</div>
				</div>
			
			</section>
		</div>
	</main>
	
	
	
	
	<?php 
		// Include the database configuration file  
		require_once '../addbConfig.php'; 
		    $limit = 18;  
			if (isset($_GET["page"])) {
				$page  = $_GET["page"]; 
			} 
			else{ 
				$page=1;
			};
			$start_from = ($page-1) * $limit;
		// Get image data from database 
		$result = $db->query("SELECT * FROM hair ORDER BY id DESC LIMIT $start_from, $limit"); 
	?>

<div class="product-list product-list--collection product-list--with-sidebar">

	<?php if($result->num_rows > 0){
		$i=0;		
	?> 
	<?php 
		while($item = $result->fetch_assoc()){ 
		$id = $item["id"];
	?>
&ensp;&ensp;&ensp;&emsp;
   <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="margin-left:60px;">&ensp;&ensp;&ensp;&ensp;&ensp;
        <a href="<?php printf('%s?id=%s', '../zoompro/hairproduct.php',  $item['id']); ?>" class="product-item__image-wrapper ">
         <div class="aspect-ratio aspect-ratio--square" style="padding-bottom: 100.0%">
            
               <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($item['fimg']); ?>">
           
         </div>
      </a>	
<div class="product-item__info">
         <div class="product-item__info-inner">
            <a class="product-item__vendor link" href="<?php printf('%s?id=%s', '../zoompro/hairproduct.php',  $item['id']); ?>"><?php echo $item['productname']; ?></a>
            <a href="<?php printf('%s?id=%s', '../zoompro/hairproduct.php',  $item['id']); ?>" class="product-item__title text--strong link"><?php echo $item['title']; ?></a>&ensp;&ensp;&ensp;&ensp;&ensp;
            
            <div class="product-item__price-list price-list"><span class="price">Rs. <?php echo $item['price']; ?></span></div>
            <a class="product-item__reviews-badge link" href="earbuds/products/akg-n20u-reference-class-in-ear-headphones-with-truly-universal-3-button-control.html#product-reviews">
               <span class="shopify-product-reviews-badge" data-id="1916135178291">
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
         <form method="post" action="" id="product_form_id_1916135178291_collection-template" accept-charset="UTF-8" class="product-item__action-list button-stack" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="quantity" value="1">
            <input type="hidden" name="id" value="17549719011379">
			<a href="<?php printf('%s?id=%s', '../zoompro/hairproduct.php',  $item['id']); ?>" class="product-item__action-button button button--small button--primary">Quick View</a><br/></form>
						
			
			<?php 
				if(! isset($_SESSION['user_name'])){
				}
				else{
			?>
			
			<form method = "post" action = "<?php $PHP_SELF ?>" class="product-item_action-list button-stack" name ="delete"enctype="multipart/form-data" > 
				<input type="hidden" name="id" value="17549719011379">
				<button class="product-item__action-button button button--small button--primary" name = "delete" style="background-color:red;"><i class="fa fa-trash"></i>Delete Product</button>
				<?php }?>
			</form>
		
		<!--// Delete Code End  -->
		<?php
  
			  // TO delete the image 
			  
				if(isset($_POST['delete'])) {
					
				/* Attempt MySQL server connection. Assuming you are running MySQL
				server with default setting (user 'root' with no password) */
				
				require_once '../addbConfig.php';
				
				// Check connection
				
				if($db === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
				}
				
				// Attempt delete query execution
				$sql = "DELETE FROM hair WHERE id='".$id."'";
				
				if(mysqli_query($db, $sql)){
		?>
					<script language="JavaScript">
						alert('Image Delete Sucessfully !');
						document.location='earbuds.php';
					</script>
				<?php
					} 
					else {
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
					}
				 
				// Close connection
				mysqli_close($db);
			}
		?>	
	<!--// Delete Code End  -->
      </div>
   </div>
   	  <?php }
  }?>
  </div>
    <?php
		// a non null if
		// isset for submit
		include('../addbConfig.php');	
		$result_db = mysqli_query($db,"SELECT COUNT(id) FROM hair"); 
		$row_db = mysqli_fetch_row($result_db);  
		$total_records = $row_db[0];  
		$total_pages = ceil($total_records / $limit); 
		/* echo  $total_pages; */
		$pagLink = "<center><ul class='pagination'>";  
		for ($i=1; $i<=$total_pages; $i++) {
					  $pagLink .= "<li class='page-item'><a class='page-link' href='HairStaightener.php?page=".$i."'>".$i."</a></li>";	
		}
		echo $pagLink . "</ul></center>";  
  
   ?>
   <?php include "../footer.php";  ?>
   </body>
</html>