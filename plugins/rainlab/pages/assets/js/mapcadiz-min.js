$( document ).ready(function() {

   jQuery('.pointmap').hover(
   		function(e) {
   			var target = '.g'+($(e.target).attr("id"));    			  			
			console.log(target);
			mcs(target);
		},function(e){
			var target = '.g'+($(e.target).attr("id")); 					
			ocs(target);
		}
	);
   jQuery('.mapbox').hover(
   		function(e) {   			
   			var target = '.'+$(e.target).attr("id");    			  			
			mcs(target);
		},function(e){			
			var target = '.'+$(e.target).attr("id"); 					
			ocs(target);
		}
	);

   jQuery('.enlaces').hover(
   		function(e) {   			
   			var target = '.'+$(e.target).attr("id"); 
   			var res = target.replace("e", "g");   			  			
			mcs(res);
		},function(e){			
			var target = '.'+$(e.target).attr("id"); 
			var res = target.replace("e", "g");					
			ocs(res);
		}
	);

   function mcs(els){
   		$(els +' .mapbox').css('visibility', 'visible');
		$(els +' .mapbox').css('z-index', 999999);
   }
   function ocs(els){
   		$(els +' .mapbox').css('visibility', 'hidden');
		$(els +' .mapbox').css('z-index', 0);
   }

});

