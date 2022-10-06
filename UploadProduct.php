<?php 
session_start(); 
?>
<!doctype html>

<html class="no-js" lang="en">
  
<head>
   <title>Upload Products
</title>
<link rel="canonical" href="collections.html">
<link rel="shortcut icon" href="cdn.samrat.com/s/files/1/0065/3095/7363/files/favicon-metal_1x_8c5a84a5-269e-4253-9f37-8607fe4b269d_96x962e70.png?v=1563383053" type="image/png">
<link rel="preload" as="style" href="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/themeb4dd.css?v=13131973172680316835">
    <link rel="preload" as="script" href="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/theme.min6348.js?v=13286664686911929253">
    
    <style>
  /* We load the font used for the integration with Shopify Reviews to load our own stars */
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
  src: url("https://fonts.shopifycdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?&amp;hmac=b8367b921c68be951353137a2829118bfe0ee68f19b746020d5d8c12f0248ce8") format("woff2"),
       url("https://fonts.shopifycdn.com/din_next/dinnext_n5.780618dec464e6222d24888730ca26e0ca6ad6af.woff?&amp;hmac=f4e996904d5c497e50d014bd0d9f2f32b47d6dfa33cdcb8d8b068308b9bff151") format("woff");
}

  @font-face {
  font-family: "DIN Next";
  font-weight: 400;
  font-style: normal;
  font-display: fallback;
  src: url("https://fonts.shopifycdn.com/din_next/dinnext_n4.438c249fdbceeefafa64221353c5ece2fdb8ae14.woff2?&amp;hmac=a4f01625654a1dd45ebb61a78e9969f4067033ac7524f06ccb90d702b5105ed0") format("woff2"),
       url("https://fonts.shopifycdn.com/din_next/dinnext_n4.ba1a214c52f07ec250a5179209eb84e73639e1c9.woff?&amp;hmac=601954eb1808dd7a2d21bd023f96d3d99436121ea0a5a80002124b453fd07c87") format("woff");
}

@font-face {
  font-family: "DIN Next";
  font-weight: 500;
  font-style: normal;
  font-display: fallback;
  src: url("https://fonts.shopifycdn.com/din_next/dinnext_n5.9de62f474792d83a5c7487ba13c73b05f03f03c7.woff2?&amp;hmac=b8367b921c68be951353137a2829118bfe0ee68f19b746020d5d8c12f0248ce8") format("woff2"),
       url("https://fonts.shopifycdn.com/din_next/dinnext_n5.780618dec464e6222d24888730ca26e0ca6ad6af.woff?&amp;hmac=f4e996904d5c497e50d014bd0d9f2f32b47d6dfa33cdcb8d8b068308b9bff151") format("woff");
}

@font-face {
  font-family: "DIN Next";
  font-weight: 500;
  font-style: italic;
  font-display: fallback;
  src: url("https://fonts.shopifycdn.com/din_next/dinnext_i5.6181c1c6bd79a156767a82929b9c449117ad57ca.woff2?&amp;hmac=a44a3be52fe1042ec72e776e30d35a83d084470074ae4bf206a7954a19b92198") format("woff2"),
       url("https://fonts.shopifycdn.com/din_next/dinnext_i5.8a0b77e365efc8daea9a021f4043f6d7046af5bb.woff?&amp;hmac=df0259085bebbbb2f2434837b769d8734b827ef3fdd631860d783a81eb7cbd2d") format("woff");
}


  @font-face {
  font-family: "DIN Next";
  font-weight: 700;
  font-style: normal;
  font-display: fallback;
  src: url("https://fonts.shopifycdn.com/din_next/dinnext_n7.57888b0b2051a4dba7d02aad7ca64db99eca3cf1.woff2?&amp;hmac=50545d1907e429eb5de389c082d80ed33967eb9518474943db4d8ec0a077c8e6") format("woff2"),
       url("https://fonts.shopifycdn.com/din_next/dinnext_n7.8ca52ee0f403ce0c89c90387f16284e4637c1b10.woff?&amp;hmac=bd22348c1c3532e18cfc203e6ab7915e42462c63484d60dce1ba49198ead7287") format("woff");
}

  @font-face {
  font-family: "DIN Next";
  font-weight: 400;
  font-style: italic;
  font-display: fallback;
  src: url("https://fonts.shopifycdn.com/din_next/dinnext_i4.61ded265c0c537a08a3ef6c1f78e76a5f3be91c9.woff2?&amp;hmac=735abb5dc4661a90e944fbd5abfddda46f67cdd3e66a21306af4ae1a1e9d3c83") format("woff2"),
       url("https://fonts.shopifycdn.com/din_next/dinnext_i4.09dd19acb435d364f8a7263a588c573108d49efc.woff?&amp;hmac=2d067fca207e7bf71eb6a7e7fd030dc3d2d76c2851a59d12bca5f7aad87a23b2") format("woff");
}

  @font-face {
  font-family: "DIN Next";
  font-weight: 700;
  font-style: italic;
  font-display: fallback;
  src: url("https://fonts.shopifycdn.com/din_next/dinnext_i7.3e0968fa491d382704988ea5c9fc6209193f03d0.woff2?&amp;hmac=e8a234fa22c4a03cbb876008019fb613b96540442d456e254c8168c2b640cf95") format("woff2"),
       url("https://fonts.shopifycdn.com/din_next/dinnext_i7.28611b7c75be07249f4251b10e48a8d9f8dbf8ba.woff?&amp;hmac=1571bb6a71e53ade29574070c533738d75877e0bc2bc0576117520c481f90802") format("woff");
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

    <script>window.performance && window.performance.mark && window.performance.mark('samrat.content_for_header.start');</script><meta id="samrat-digital-wallet" name="samrat-digital-wallet" content="/6530957363/digital_wallets/dialog">
<link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
<script id="samrat-features" type="application/json">{"accessToken":"865340c3c17555aebe213b305b42025c","betas":["rich-media-storefront-analytics"],"domain":"warehouse-theme-metal.myshopify.com","predictiveSearch":true,"shopId":6530957363,"smart_payment_buttons_url":"https:\/\/cdn.samrat.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.samrat.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "warehouse-theme-metal.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.theme = {"name":"Warehouse 1.9.1","id":82177949747,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.samrat.com";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=warehouse-theme-metal.myshopify.com"];
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
<script id="__st">var __st={"a":6530957363,"offset":-14400,"reqid":"c1b554dd-ac81-4ef1-bac1-18ff8e3c00dd","pageurl":"warehouse-theme-metal.myshopify.com\/collections","u":"0ec50044dd4f","p":"collections"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
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
var meta = {"page":{"pageType":"collections"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
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
        window.BOOMR.application = "core";
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
              producer_url: "",
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
                producer_url: "",
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
          {"pageType":"collections"}
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


<script integrity="sha256-BFmLd7EQOpIHg76CWl9MJFqROXNgxiHNdyBpz5k0cRM=" crossorigin="anonymous" data-source-attribution="samrat.loadfeatures" defer="defer" src="cdn.samrat.com/s/assets/storefront/load_feature-04598b77b1103a920783be825a5f4c245a91397360c621cd772069cf99347113.js"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="samrat.dynamic-checkout" defer="defer" src="cdn.samrat.com/s/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<script async="async" src="www.google-analytics.com/analytics.js"></script>
<script defer="defer" src="cdn.samrat.com/s/assets/themes_support/ga_urchin_forms-99e991855b3d8ddc69e625c68ab0579dd9927b611c2ec4943d396c72e3af0849.js"></script>


<script>window.performance && window.performance.mark && window.performance.mark('samrat.content_for_header.end');</script>

    <link rel="stylesheet" href="cdn.samrat.com/s/files/1/0065/3095/7363/t/29/assets/themeb4dd.css?v=13131973172680316835">

    


  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
  "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://warehouse-theme-metal.myshopify.com"
    }]
  }
  </script>


    <script>
      // This allows to expose several variables to the global scope, to be used in scripts
      window.theme = {
        pageType: "list-collections",
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

   
  </head>

  <body class="warehouse--v1 features--animate-zoom template-list-collections " data-instant-intensity="viewport">
<?php include "header.php";  ?>
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
      <div id="samrat-section-list-collections-template" class="samrat-section"><section data-section-id="list-collections-template" data-section-type="list-collections">
  <div class="container">
    <div class="page__sub-header">
      <nav aria-label="Breadcrumb" class="breadcrumb">
        <ol class="breadcrumb__list">
          <li class="breadcrumb__item">
            <a class="breadcrumb__link link" href="index.html">Home</a><svg class="icon icon--arrow-right" viewBox="0 0 8 12" role="presentation">
      <path stroke="currentColor" stroke-width="2" d="M2 2l4 4-4 4" fill="none" stroke-linecap="square"></path>
    </svg></li>

          <li class="breadcrumb__item">
            <span class="breadcrumb__link">Upload Products</span>
          </li>
        </ol>
      </nav>
    </div><div class="collection-list__section">
        <header class="page__header page__header--stack page__header--centered">
          <h1 class="page__title heading h1">Upload Products</h1>
        </header>

        <div class="grid"><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addfan.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/Slide-10-mobile_600x800_crop_center (1).jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Fan</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addtan.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/unnamed.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Microwaves / Oven / Otg's / Electric Tandoor</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addtv.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/TVs-2_850x42fb.jpg?v=1559143805"></div>
                    </div><p class="collection-block-item__title heading h2">All TVs</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addHome.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/banner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Home Theatre / Sound Bars</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addPizza.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/best-pizza-Maker.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Pizza Maker</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addWater.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/water-bottles-lowres-01000-2x1-1-1024x512.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Water Bottel</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addCrockery.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/TABLEWARE-13-866x13001.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Crockery</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addbed.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/vivid-floral-microfiber-double-bed-sheet-with-2-pillow-covers-original-imaf2cwj4yzabmsn.jpeg"></div>
                    </div><p class="collection-block-item__title heading h2">Bed SheetsS</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addTowel.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/images.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Towel Sets</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/footmen.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/Best-Dress-Shoes-For-Men-0-FB.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">FootWear Men</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addac.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/AC1589272398916.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Air Conditioners</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/footwomen.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/Featured-Image.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">FootWear Wowen</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addrefi.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/godrej-double-door-refrigerator-500x500.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Refrigerator</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addwm.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/download.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Washing Machine</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addHair.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/71VGyaW1tvL._SL1500_.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Hair Dryer</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addHair.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/thumb___personal-care-appliances-trimmers-image-880x320HUut.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Trimmers</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addHair.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/Straigthteners_Banner.png"></div>
                    </div><p class="collection-block-item__title heading h2">Hair Straighteners</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addbag.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/benikea-hotel-kp.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Suitcase and Luggage Bags</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addlapbag.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/top-23-best-laptop-bags-for-men.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Hand and Laptop Bags</p></a>
                </div> <div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addCook.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/MCIM02315805_KI-Chimney-Hoods-Banner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Cooker Hood</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addheater.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/unnamed (1).jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Water Heater / Geysers</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addRoti.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/Banner-03-1700x650.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Roti Maker</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addPower.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/powerbank_capacity.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Power Banks</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addCharger.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/geo3.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Wire and Wireless Mobile Charger</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addEar.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/inner-banner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Bluetooth Ear phones </p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addblue.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/bluetooth-banner-1024x576.png"></div>
                    </div><p class="collection-block-item__title heading h2">Bluetooth Portable Wireless Speaker</p></a>
                </div><div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addWatch.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/en_mb-banner-smartwatches_1.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">All type of Watches</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addPerfume.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/banner_men.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Deodorant/Perfume</p></a>
                </div>
				<!---<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addlocker.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/used-lockers-banner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Locker</p></a>
                </div>-->
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addro.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/banner1.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">All R.O.</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addkids.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/unnamed (2).jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Kids</p></a>
                </div>'
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addVacumm.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/traning-sirenabanner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Vacuum Cleaners</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addair.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/9ca36d4020446b31067d9cc58aa77f54c63440d466be98ca19e0fbdef966.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Air Perfume</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addLunch.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/cfdwset2nl14_carry_fresh_ss_insulated_lunch_box_set_of_2_280_ml_x_2_b_1_1.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Lunch Box</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addBlender.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/inner-banner (1).jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Hand Blender / Chopper / Beaters</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addMixer.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/best-mixer-grinder-under-2000.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Juicer / Mixer / Grinder</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addsand.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/011_Baltra_Home_Page_Banner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2">Sandwich / Toaster/ Griller</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addiron.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/STEAM-IRON-JUMBO-DLX-_MAIN-BANNER_.png"></div>
                    </div><p class="collection-block-item__title heading h2">Iron/Steam Dryer</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addfan.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/all-fans-banner_1.png"></div>
                    </div><p class="collection-block-item__title heading h2">Fan</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addCoffe.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/kettle-banner.png"></div>
                    </div><p class="collection-block-item__title heading h2">Coffe Maker/ Kattely etc.</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addburner.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/15756547_Bosch-RNA-Indy-Rangetop-Banner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2"> CookTop/Induction</p></a>
                </div>
				<div class="grid__cell 1/2--tablet 1/3--lap-and-up">
                  <a href="addProduct/addOther.php" class="collection-block-item " >
                    <div class="aspect-ratio" style="padding-bottom: 45%">
                      <div class="collection-block-item__image lazyload image--fade-in" data-bg="cdn.samrat.com/s/files/1/0065/3095/7363/collections/otherproductsbanner.jpg"></div>
                    </div><p class="collection-block-item__title heading h2"></p></a>
                </div>
			</div>
      </div><div class="collection-list__section">
        

         </div></div>

  <style>
    #samrat-section-list-collections-template .collection-block-item--overlay::before {background: rgba(0, 0, 0, 0.2)
    }
  </style>
</section>

</div>
    </main>
	<?php include "footer1.php";  ?>
	 </body>

</html>
