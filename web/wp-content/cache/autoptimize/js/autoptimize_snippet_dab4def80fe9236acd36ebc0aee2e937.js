var $j=jQuery.noConflict();$j(document).on("ready",function(){if("undefined"==typeof oceanwpLocalize)return!1;var d=$j("#owp-qv-wrap"),l=$j("#owp-qv-content");$j(document).on("click",".owp-quick-view",function(e){e.preventDefault();var t=$j(this),a=$j(this).data("product_id");t.parent().addClass("loading"),$j.ajax({url:oceanwpLocalize.ajax_url,data:{action:"oceanwp_product_quick_view",product_id:a},success:function(e){var t=$j("html").innerWidth();$j("html").css("overflow","hidden");var a=$j("html").innerWidth();$j("html").css("margin-right",a-t),$j("html").addClass("owp-qv-open"),l.html(e),d.fadeIn(),d.addClass("is-visible");var n=l.find(".variations_form");n.trigger("check_variations"),n.trigger("reset_image");var o=l.find(".variations_form");0<o.length&&(o.wc_variation_form(),o.find("select").change());var r=l.find(".owp-qv-image");1<r.find("li").length&&r.flexslider();var i=l.find("form.grouped_form");if(i){var c=l.find("form.grouped_form").attr("action");i.find(".group_table, button.single_add_to_cart_button").hide(),i.append(' <a href="'+c+'" class="button">'+oceanwpLocalize.grouped_text+"</a>")}}}).done(function(){t.parent().removeClass("loading")})});function t(){$j("html").css({overflow:"","margin-right":""}),$j("html").removeClass("owp-qv-open"),d.fadeOut(),d.removeClass("is-visible"),setTimeout(function(){l.html("")},600)}$j(".owp-qv-overlay, .owp-qv-close").on("click",function(e){e.preventDefault(),t()}),$j(document).keyup(function(e){27==e.keyCode&&t()}),$j.fn.serializeArrayAll=function(){var n=/\r?\n/g;return this.map(function(){return this.elements?jQuery.makeArray(this.elements):this}).map(function(e,a){var t=jQuery(this).val();return null==t?null==t:"checkbox"==this.type&&0==this.checked?{name:this.name,value:this.checked?this.value:""}:jQuery.isArray(t)?jQuery.map(t,function(e,t){return{name:a.name,value:e.replace(n,"\r\n")}}):{name:a.name,value:t.replace(n,"\r\n")}}).get()};function e(){$j(document.body).on("click","#owp-qv-content .product:not(.product-type-external) .single_add_to_cart_button",this.onAddToCart).on("added_to_cart",this.updateButton)}e.prototype.onAddToCart=function(e){e.preventDefault();var a=$j(this),n=a.closest("form.cart"),t=n.find('input:not([name="product_id"]), select, button, textarea').serializeArrayAll()||0;$j.each(t,function(e,t){"add-to-cart"==t.name&&(t.name="product_id",t.value=n.find("input[name=variation_id]").val()||a.val())}),$j(document.body).trigger("adding_to_cart",[a,t]),a.removeClass("added"),a.addClass("loading"),$j.ajax({url:woocommerce_params.wc_ajax_url.toString().replace("%%endpoint%%","add_to_cart"),type:"POST",data:t,success:function(e){$j(document.body).trigger("wc_fragment_refresh"),$j(document.body).trigger("added_to_cart",[e.fragments,e.cart_hash,a]),"yes"!==oceanwpLocalize.cart_redirect_after_add||(window.location=oceanwpLocalize.cart_url)}})},e.prototype.updateButton=function(e,t,a,n){(n=void 0!==n&&n)&&(n.removeClass("loading"),n.addClass("added"),oceanwpLocalize.is_cart||0!==n.parent().find(".added_to_cart").length||n.after(' <a href="'+oceanwpLocalize.cart_url+'" class="added_to_cart wc-forward" title="'+oceanwpLocalize.view_cart+'">'+oceanwpLocalize.view_cart+"</a>"))},new e});