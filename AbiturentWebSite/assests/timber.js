(function(e){e.fn.prepareTransition=function(){return this.each(function(){var t=e(this);t.one("TransitionEnd webkitTransitionEnd transitionend oTransitionEnd",function(){t.removeClass("is-transitioning")});var i=["transition-duration","-moz-transition-duration","-webkit-transition-duration","-o-transition-duration"],r=0;e.each(i,function(a,n){r=parseFloat(t.css(n))||r}),r!=0&&(t.addClass("is-transitioning"),t[0].offsetWidth)})}})(jQuery);function replaceUrlParam(e,t,i){var r=new RegExp("("+t+"=).*?(&|$)"),a=e;return a=e.search(r)>=0?e.replace(r,"$1"+i+"$2"):a+(a.indexOf("?")>0?"&":"?")+t+"="+i}typeof Shopify=="undefined"&&(Shopify={}),Shopify.formatMoney||(Shopify.formatMoney=function(e,t){var i="",r=/\{\{\s*(\w+)\s*\}\}/,a=t||this.money_format;typeof e=="string"&&(e=e.replace(".",""));function n(s,c){return typeof s=="undefined"?c:s}function u(s,c,d,h){if(c=n(c,2),d=n(d,","),h=n(h,"."),isNaN(s)||s==null)return 0;s=(s/100).toFixed(c);var m=s.split("."),o=m[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1"+d),f=m[1]?h+m[1]:"";return o+f}switch(a.match(r)[1]){case"amount":i=u(e,2);break;case"amount_no_decimals":i=u(e,0);break;case"amount_with_comma_separator":i=u(e,2,".",",");break;case"amount_no_decimals_with_comma_separator":i=u(e,0,".",",");break}return a.replace(r,i)}),window.timber=window.timber||{},timber.cacheSelectors=function(){timber.cache={$html:$("html"),$body:$(document.body),$navigation:$("#AccessibleNav"),$mobileSubNavToggle:$(".mobile-nav__toggle"),$changeView:$(".change-view"),$productImage:$("#ProductPhotoImg"),$thumbImages:$("#ProductThumbs").find("a.product-single__thumbnail"),$recoverPasswordLink:$("#RecoverPassword"),$hideRecoverPasswordLink:$("#HideRecoverPasswordLink"),$recoverPasswordForm:$("#RecoverPasswordForm"),$customerLoginForm:$("#CustomerLoginForm"),$passwordResetSuccess:$("#ResetSuccess")}},timber.init=function(){FastClick.attach(document.body),timber.cacheSelectors(),timber.accessibleNav(),timber.mobileNavToggle(),timber.productImageSwitch(),timber.responsiveVideos(),timber.collectionViews(),timber.loginForms()},timber.accessibleNav=function(){var e=timber.cache.$navigation,t=e.find("a"),i=e.children("li").find("a"),r=e.find(".site-nav--has-dropdown"),a=e.find(".site-nav__dropdown").find("a"),n="nav-hover",u="nav-focus";r.on("mouseenter touchstart",function(o){var f=$(this);f.hasClass(n)||o.preventDefault(),c(f)}),r.on("mouseleave",function(){d($(this))}),a.on("touchstart",function(o){o.stopImmediatePropagation()}),t.focus(function(){s($(this))}),t.blur(function(){m(i)});function s(o){var f=o.next("ul"),b=!!f.hasClass("sub-nav"),p=$(".site-nav__dropdown").has(o).length,l=null;p?(l=o.closest(".site-nav--has-dropdown").find("a"),h(l)):(m(i),h(o))}function c(o){o.addClass(n),setTimeout(function(){timber.cache.$body.on("touchstart",function(){d(o)})},250)}function d(o){o.removeClass(n),timber.cache.$body.off("touchstart")}function h(o){o.addClass(u)}function m(o){o.removeClass(u)}},timber.mobileNavToggle=function(){timber.cache.$mobileSubNavToggle.on("click",function(){$(this).parent().toggleClass("mobile-nav--expanded")})},timber.getHash=function(){return window.location.hash},timber.productPage=function(e){var t=e.money_format,i=e.variant,r=e.selector,a=$("#ProductPhotoImg"),n=$("#AddToCart"),u=$("#ProductPrice"),s=$("#ComparePrice"),c=$(".quantity-selector, label + .js-qty"),d=$("#AddToCartText");if(i){if(i.featured_image){var h=i.featured_image,m=a[0];Shopify.Image.switchImage(h,m,timber.switchImage)}i.available?(n.removeClass("disabled").prop("disabled",!1),d.html("Add to cart"),c.show()):(n.addClass("disabled").prop("disabled",!0),d.html("Soldout"),c.hide()),u.html(Shopify.formatMoney(i.price,t)),i.compare_at_price>i.price?s.html(" "+Shopify.formatMoney(i.compare_at_price,t)).show():s.hide()}else n.addClass("disabled").prop("disabled",!0),d.html("Unavailable"),c.hide()},timber.productImageSwitch=function(){timber.cache.$thumbImages.length&&timber.cache.$thumbImages.on("click",function(e){e.preventDefault();var t=$(this).attr("href");timber.switchImage(t,null,timber.cache.$productImage)})},timber.switchImage=function(e,t,i){var r=$(i);r.attr("src",e)},timber.responsiveVideos=function(){var e=$('iframe[src*="youtube.com/embed"], iframe[src*="player.vimeo"]'),t=e.add("iframe#admin_bar_iframe");e.each(function(){$(this).wrap('<div class="video-wrapper"></div>')}),t.each(function(){this.src=this.src})},timber.collectionViews=function(){timber.cache.$changeView.length&&timber.cache.$changeView.on("click",function(){var e=$(this).data("view"),t=document.URL,i=t.indexOf("?")>-1;i?window.location=replaceUrlParam(t,"view",e):window.location=t+"?view="+e})},timber.loginForms=function(){function e(){timber.cache.$recoverPasswordForm.show(),timber.cache.$customerLoginForm.hide()}function t(){timber.cache.$recoverPasswordForm.hide(),timber.cache.$customerLoginForm.show()}timber.cache.$recoverPasswordLink.on("click",function(i){i.preventDefault(),e()}),timber.cache.$hideRecoverPasswordLink.on("click",function(i){i.preventDefault(),t()}),timber.getHash()=="#recover"&&e()},timber.resetPasswordSuccess=function(){timber.cache.$passwordResetSuccess.show()},timber.Drawers=function(){var e=function(t,i,r){var a={close:".js-drawer-close",open:".js-drawer-open-"+i,openClass:"js-drawer-open",dirOpenClass:"js-drawer-open-"+i};if(this.$nodes={parent:$("body, html"),page:$("#PageContainer"),moved:$(".is-moved-by-drawer")},this.config=$.extend(a,r),this.position=i,this.$drawer=$("#"+t),!this.$drawer.length)return!1;this.drawerIsOpen=!1,this.init()};return e.prototype.init=function(){$(this.config.open).on("click",$.proxy(this.open,this)),this.$drawer.find(this.config.close).on("click",$.proxy(this.close,this))},e.prototype.open=function(t){var i=!1;if(t?t.preventDefault():i=!0,t&&t.stopPropagation&&(t.stopPropagation(),this.$activeSource=$(t.currentTarget)),this.drawerIsOpen&&!i)return this.close();timber.cache.$body.trigger("beforeDrawerOpen.timber",this),this.$nodes.moved.addClass("is-transitioning"),this.$drawer.prepareTransition(),this.$nodes.parent.addClass(this.config.openClass+" "+this.config.dirOpenClass),this.drawerIsOpen=!0,this.trapFocus(this.$drawer,"drawer_focus"),this.config.onDrawerOpen&&typeof this.config.onDrawerOpen=="function"&&(i||this.config.onDrawerOpen()),this.$activeSource&&this.$activeSource.attr("aria-expanded")&&this.$activeSource.attr("aria-expanded","true"),this.$nodes.page.on("touchmove.drawer",function(){return!1}),this.$nodes.page.on("click.drawer",$.proxy(function(){return this.close(),!1},this)),timber.cache.$body.trigger("afterDrawerOpen.timber",this)},e.prototype.close=function(){!this.drawerIsOpen||(timber.cache.$body.trigger("beforeDrawerClose.timber",this),$(document.activeElement).trigger("blur"),this.$nodes.moved.prepareTransition({disableExisting:!0}),this.$drawer.prepareTransition({disableExisting:!0}),this.$nodes.parent.removeClass(this.config.dirOpenClass+" "+this.config.openClass),this.drawerIsOpen=!1,this.removeTrapFocus(this.$drawer,"drawer_focus"),this.$nodes.page.off(".drawer"),timber.cache.$body.trigger("afterDrawerClose.timber",this))},e.prototype.trapFocus=function(t,i){var r=i?"focusin."+i:"focusin";t.attr("tabindex","-1"),t.focus(),$(document).on(r,function(a){t[0]!==a.target&&!t.has(a.target).length&&t.focus()})},e.prototype.removeTrapFocus=function(t,i){var r=i?"focusin."+i:"focusin";t.removeAttr("tabindex"),$(document).off(r)},e}(),$(timber.init);
//# sourceMappingURL=/s/files/1/0265/8933/1530/t/16/assets/timber.js.map?v=132601391146540697821643883185
