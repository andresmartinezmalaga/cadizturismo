!function($){$(document).render(function(){var e=function(e){if(!e.id)return e.text;var t=$(e.element),s=e.icon?e.icon:t.data("icon"),a=e.image?e.image:t.data("image");return s?'<i class="select-icon '+s+'"></i> '+e.text:a?'<img class="select-image" src="'+a+'" alt="" /> '+e.text:e.text},t={templateResult:e,templateSelection:e,escapeMarkup:function(e){return e},width:"style"};$("select.custom-select").each(function(){var e=$(this),s={dropdownCssClass:"",containerCssClass:""};if(null!=e.data("select2"))return!0;e.attr("data-disposable","data-disposable"),e.one("dispose-control",function(){e.data("select2")&&e.select2("destroy")}),e.hasClass("select-no-search")&&(s.minimumResultsForSearch=1/0),e.hasClass("select-no-dropdown")&&(s.dropdownCssClass+=" select-no-dropdown",s.containerCssClass+=" select-no-dropdown"),e.hasClass("select-hide-selected")&&(s.dropdownCssClass+=" select-hide-selected");var a=e.data("handler");a&&(s.ajax={transport:function(t,s,o){var l=e.request(a,{data:t.data});return l.done(s),l.fail(o),l},dataType:"json"});var o=e.data("token-separators");o&&(s.tags=!0,s.tokenSeparators=o.split("|"),e.hasClass("select-no-dropdown")&&(s.selectOnClose=!0,s.closeOnSelect=!1,e.on("select2:closing",function(){$(".select2-dropdown.select-no-dropdown:first .select2-results__option--highlighted").removeClass("select2-results__option--highlighted"),$(".select2-dropdown.select-no-dropdown:first .select2-results__option:first").addClass("select2-results__option--highlighted")})));var l=e.data("placeholder");l&&(s.placeholder=l),e.select2($.extend({},t,s))})}),$(document).on("disable","select.custom-select",function(e,t){null!=$(this).data("select2")&&$(this).select2("enable",!t)})}(jQuery);