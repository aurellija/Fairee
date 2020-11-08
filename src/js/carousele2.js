$(document).ready(function(){
		
			$("#play").click(function(){
				$("#car").carousel("cycle");
			});

			$("#stop").click(function(){
				$("#car").carousel("pause");
			});
				
			//indicators
			$(".item1").click(function(){
				$("#car").carousel(0);
			});
			$(".item2").click(function(){
				$("#car").carousel(1);
			});
			$(".item3").click(function(){
				$("#car").carousel(2);
			});
			$(".item4").click(function(){
				$("#car").carousel(3);
			});
			$(".item5").click(function(){
				$("#car").carousel(4);
			});
				
			//controls 
			$(".carousel-control-prev").click(function(){
				$("#car").carousel("prev");
			});
			$(".carousel-control-next").click(function(){
				$("#car").carousel("next");
			});
			});