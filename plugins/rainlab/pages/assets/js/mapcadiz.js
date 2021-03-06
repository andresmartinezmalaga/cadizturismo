$( document ).ready(function() {

  jQuery('.pointmap').hover(
   		function(e) {
   			var target = '.g'+($(e.target).attr("id"));    			  			
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

   jQuery('.mapboxd').hover(
   		function(e) {   			
   			var target = '.'+$(e.target).attr("id");    			  			
			mcs(target);
		},function(e){			
			var target = '.'+$(e.target).attr("id"); 					
			ocs(target);
		}
	);
   jQuery('.enlaces').on('touchstart',
   	function(e) {
   	var url = $(e.target).attr("href");  
   		console.log('click');
   		console.log(url);
   		window.location.href = url;
   	}
   );

   jQuery('.enlaces').click(   
   		function(e) {   
   			console.log('enlaces');			
   			var target = '.'+$(e.target); 
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
		$(els +' .mapboxd').css('visibility', 'visible');
		$(els +' .mapboxd').css('z-index', 999999);
   }
   function ocs(els){
   		$(els +' .mapbox').css('visibility', 'hidden');
		$(els +' .mapbox').css('z-index', 0);
		$(els +' .mapboxd').css('visibility', 'hidden');		
		$(els +' .mapboxd').css('z-index', 0);
   }

    jQuery('.spmv').on('touchstart',
   		function(e) {   			
   			var target = $(e.target).parent().attr("id");
			var els = $('#'+target+' .listps');
			var elsimg = $('#'+target+'>span>div');
			
			if(els.css('display') == 'none'){
				els.css('display', 'inline');
				elsimg.css('background-repeat','no-repeat')
				elsimg.css('background','url(/plugins/rainlab/pages/assets/images/mpmvu.png)');
				elsimg.css('background-repeat','no-repeat')
			} else {
				els.css('display', 'none');
				elsimg.css('background-repeat','no-repeat')
				elsimg.css('background','url(/plugins/rainlab/pages/assets/images/mpmvd.png)');
				elsimg.css('background-repeat','no-repeat')
			}
		}
	);
	// background: url(../svg/mpmv.svg) no-repeat;

});