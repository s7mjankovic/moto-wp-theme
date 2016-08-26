
/*
(function ($) {
    $('.add-language').on('click', function() {
        console.log('click');
         var parent = $('#language-form');
            $('#language-form').html("<h1>sdasdsadasdas</h1>");
    });
})(jQuery);


(function ($) {
    $.fn.myOpenMode = function () {
        return this.mousedown(function () {
            var $this = $(this);

            var mode = $this.data("openmode");
            var href = this.href;
            var handled = true;
            if (mode) {
                switch (mode) {
                    case "NewWindow":
                    case "1":
                        alert("NewWindow");
                        break;
                    case "Dialog":
                    case "2":
                        alert("Dialog");
                        break;

                        // Actually, there are other options, but I removed them for clarity

                    default:
                        handled = false;
                }
            } else {
                handled = false;
            }
            return !handled;
        });
    };
})(jQuery);

(function($){
    $(".openmode").myOpenMode();
    $("#add").click(function(){
        $("#x").append("<li><a href='somewhere' class='openmode' data-openmode='Dialog'>Dynamic</a></li>");
    });
})(jQuery);

(function ($) {
    var fctsToObserve = {
        append: [$.fn.append, 'self']
    }, fctsObserveKeys = '';
    $.each(fctsToObserve, function (key, element) {
        fctsObserveKeys += "hasChanged." + key + " ";
    });
    var oOn = $.fn.on;
    $.fn.on = function () {
        if (arguments[0].indexOf('hasChanged') != -1) arguments[0] += " " + fctsObserveKeys;
        return oOn.apply(this, arguments);
    };
    $.fn.hasChanged = function (types, data, fn) {
        return this.on(fctsObserveKeys, types, null, data, fn);
    };
    $.extend($, {
        observeMethods: function (namespace) {
            var namespace = namespace ? "." + namespace : "";
            var _len = $.fn.length;
            delete $.fn.length;
            $.each(fctsToObserve, function (key) {
                var _pre = this;
                $.fn[key] = function () { 
                    var target = _pre[1] === 'self' ? this : this.parent(),
                        ret = _pre[0].apply(this, arguments);
                    target.trigger("hasChanged." + key + namespace, arguments);
                    return ret;
                };
            });
            $.fn.length = _len;
        }
    });
    $.observeMethods()
})(jQuery);

(function($){
    $(document).on('hasChanged','#x',function(){
        $(this).find('a.openmode:last').myOpenMode();
    });
})(jQuery);
*/