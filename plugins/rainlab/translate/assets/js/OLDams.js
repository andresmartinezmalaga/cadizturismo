
/*
 * Scripts for the Locales controller.
 */
+function ($) { "use strict";

    var Ams = function() {
        
        var self = this;
        var brr = $('.fr-toolbar');        
      
        brr.append('<span id="insertP">insert p</span>')
        
        $('#insertP').on('click',function(){
            self.pasteHtmlAtCaret('<p>Despidiendose</p>');
        }) 

    }

    // Andrés Martínez : Insert html at actual position
    Ams.prototype.pasteHtmlAtCaret = function(html) {
        
       
        var sel, range;
        
        if (window.getSelection) {
            
            // IE9 and non-IE
            sel = window.getSelection();

            if (sel.getRangeAt && sel.rangeCount) {
                
                range = sel.getRangeAt(0);
                range.deleteContents();

                // Range.createContextualFragment() would be useful here but is
                // non-standard and not supported in all browsers (IE9, for one)
                var el = document.createElement("div");
                el.innerHTML = html;

                var frag = document.createDocumentFragment(), node, lastNode;
               
                while ( (node = el.firstChild) ) {
                    lastNode = frag.appendChild(node);
                }
               
                range.insertNode(frag);
                
                // Preserve the selection
                if (lastNode) {
                     
                    range = range.cloneRange();
                    range.setStartAfter(lastNode);
                    range.collapse(true);
                    sel.removeAllRanges();
                    sel.addRange(range);
                }
            }
        } else if (document.selection && document.selection.type != "Control") {
            // IE < 9
            document.selection.createRange().pasteHTML(html);
        }
    }

   

}(window.jQuery);