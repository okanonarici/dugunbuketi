$(document).ready(function(){
		
	setInterval(function(){
	
		$(".logo img").removeClass("tada");
		
		setTimeout(function(){
			$(".logo img").addClass("tada");
		}, 5000);
		
	
	}, 5000);

	$('body').on("click", "#nav-icon", function(){
		if($("#menuToggle input").is(":checked")){
			$("#menuToggle input").prop("checked", false);
			$('#nav-icon').removeClass('open');
		}else {
			$("#menuToggle input").prop("checked", true);
			$('#nav-icon').addClass('open');
		}
	});
	
	$("body").on("click", ".search-button", function(e){
		
		e.preventDefault();
		$("div.search-state").html("");
		var search_val = $(".search-text").val();
		
		if(search_val != ""){
		
			$.ajax({
				type: "post",
				url: "./api/CategorySearch.php",
				data: { search_val: search_val , type: "SearchButton" },
				dataType: "json",
				success: function(cevap){
					if(cevap.ok){
						$("div.search-state").html(cevap.ok);
					}else if(cevap.error){
						$("div.search-state").html(cevap.error);
					}else { console.log("Error!"); }
				}
			});
			
		}else {
			$("div.search-state").html("Lüften boş bırakmayınız!");
		}
			
	});
	
});