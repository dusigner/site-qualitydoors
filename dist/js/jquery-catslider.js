!function(a,b,c){"use strict";a.CatSlider=function(b,c){this.$el=a(c),this._init(b)},a.CatSlider.prototype={_init:function(a){this.$categories=this.$el.children("ul"),this.$navcategories=this.$el.find("nav > a");var b={WebkitAnimation:"webkitAnimationEnd",OAnimation:"oAnimationEnd",msAnimation:"MSAnimationEnd",animation:"animationend"};this.animEndEventName=b[Modernizr.prefixed("animation")],this.support=Modernizr.csstransforms&&Modernizr.cssanimations,this.isAnimating=!1,this.current=0;var c=this.$categories.eq(0);this.support?c.addClass("mi-current"):(this.$categories.hide(),c.show()),this.$navcategories.eq(0).addClass("mi-selected"),this._initEvents()},_initEvents:function(){var c=this;this.$navcategories.on("click.catslider",function(){return c.showCategory(a(this).index()),!1}),a(b).on("resize",function(){c.$categories.removeClass().eq(0).addClass("mi-current"),c.$navcategories.eq(c.current).removeClass("mi-selected").end().eq(0).addClass("mi-selected"),c.current=0})},showCategory:function(b){if(b===this.current||this.isAnimating)return!1;this.isAnimating=!0,this.$navcategories.eq(this.current).removeClass("mi-selected").end().eq(b).addClass("mi-selected");var c=b>this.current?"right":"left",d="right"===c?"mi-moveToLeft":"mi-moveToRight",e="right"===c?"mi-moveFromRight":"mi-moveFromLeft",f=this.$categories.eq(this.current),g=this.$categories.eq(b),h=g.children(),i="right"===c?h.length-1:0,j=this;this.support?(f.removeClass().addClass(d),setTimeout(function(){g.removeClass().addClass(e),h.eq(i).on(j.animEndEventName,function(){a(this).off(j.animEndEventName),g.addClass("mi-current"),j.current=b;var c=a(this);j.forceRedraw(c.get(0)),j.isAnimating=!1})},90*h.length)):(f.hide(),g.show(),this.current=b,this.isAnimating=!1)},forceRedraw:function(a){if(a){var b=document.createTextNode(" "),c=a.style.position;a.appendChild(b),a.style.position="relative",setTimeout(function(){a.style.position=c,b.parentNode.removeChild(b)},25)}}},a.fn.catslider=function(b){var c=a.data(this,"catslider");if("string"==typeof b){var d=Array.prototype.slice.call(arguments,1);this.each(function(){c[b].apply(c,d)})}else this.each(function(){c?c._init():c=a.data(this,"catslider",new a.CatSlider(b,this))});return c}}(jQuery,window);