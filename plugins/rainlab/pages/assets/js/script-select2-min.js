$(".select-days").select2({minimumResultsForSearch:1/0,dropdownCssClass:"dropdown-days"}),$(".select-interests").select2({minimumResultsForSearch:1/0}),$(".select-type").select2({minimumResultsForSearch:1/0}),$("#sltLocation").select2({maximumSelectionLength:3,language:{maximumSelected:function(e){return"Sólo puedes seleccionar "+e.maximum+" municipios"}}}),$("#sltLocation").on("select2:unselecting",function(e){if(1==$(".select2-selection__choice").length)return console.log("hola"),$("#mySelect2").val("todos-los-municipios"),!1});