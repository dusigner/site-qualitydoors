(function(a){"use strict";a("#contactForm").validate({submitHandler:function(b){var c=a(b),d=a("#contactSuccess"),e=a("#contactError"),f=a(this.submitButton),g=a("#mailErrorMessage");f.button("loading"),a.ajax({type:"POST",url:c.attr("action"),data:{name:c.find("#name").val(),email:c.find("#email").val(),telefone:c.find("#telefone").val(),cidade:c.find("#cidade").val(),modelo:c.find("#modelo").val(),message:c.find("#message").val()}}).always(function(b,h,i){return g.empty().hide(),console.log(b),"success"==b.response?(d.removeClass("hide"),e.addClass("hide"),c.find(".form-control").val("").blur().parent().removeClass("has-success").removeClass("has-error").find("label.error").remove(),d.offset().top-80<a(window).scrollTop()&&a("html, body").animate({scrollTop:d.offset().top-80},300),void f.button("reset")):("error"==b.response&&"undefined"!=typeof b.errorMessage?g.html(b.errorMessage).show():g.html(b.responseText).show(),e.removeClass("hide"),d.addClass("hide"),e.offset().top-80<a(window).scrollTop()&&a("html, body").animate({scrollTop:e.offset().top-80},300),c.find(".has-success").removeClass("has-success"),void f.button("reset"))})}}),a("#contactFormAdvanced").validate({onkeyup:!1,onclick:!1,onfocusout:!1,rules:{captcha:{captcha:!0},"checkboxes[]":{required:!0},radios:{required:!0}},errorPlacement:function(a,b){"radio"==b.attr("type")||"checkbox"==b.attr("type")?a.appendTo(b.parent().parent()):a.insertAfter(b)}})}).apply(this,[jQuery]);