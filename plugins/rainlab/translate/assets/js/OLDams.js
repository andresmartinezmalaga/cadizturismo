/*console.log('botonsjsload');
var toolbar = $('.fr-toolbar');
toolbar.append('<span id="insertP">insert p</span>');

$('#insertP').on('click',function(){
    console.log('saludando');
    self.pasteHtmlAtCaret('<p>Despidiendose</p>');
}) */
/*
 * Scripts for the Locales controller.
 */
+function ($) { "use strict";
    
    console.log('cargadaaaaa');

    var Ams = function() {
        
        var self = this;
        var brr = $('.fr-toolbar');        
        console.log(brr);
        
        brr.append('<span id="insertP">insert p</span>')
        
        $('#insertP').on('click',function(){
            console.log('saludando');
            self.pasteHtmlAtCaret('<p>Despidiendose</p>');
        }) 

    }

    // Andrés Martínez : Insert html at actual position
    Ams.prototype.pasteHtmlAtCaretb = function(html) {
        console.log(html);
    }  

    Ams.prototype.pasteHtmlAtCaret = function(html) {
        
        console.log('entra');
        var sel, range;


        
        if (window.getSelection) {
             console.log('entra2');
            // IE9 and non-IE
            sel = window.getSelection();

            if (sel.getRangeAt && sel.rangeCount) {
                
                range = sel.getRangeAt(0);
                range.deleteContents();

                 console.log(range);

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
                      console.log('lastNode');
                      console.log(lastNode);

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