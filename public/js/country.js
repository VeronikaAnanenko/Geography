$(function () {
	 var country=$("#info").attr("data-country");
	 $.ajax({
		 url: '/ajax/info',
		 data:'find=info&country='+country,
		 success: function(data){
			 console.log(data);
			 $("#empty_info").html(data);
		 },
		 error: function(data){
			 console.log(data);
		}
	});
	$('#link_news').click(function(){
		var country=$(this).attr("data-country");
		$.ajax({
			url: '/ajax',
			data:'find=news&country='+country,
			success: function(data){
			$('#news').html(data);
			},
		error: function(data){
			$('#news').html(data);
			}
		});
	});
	
	$('#link_cities').click(function(){
	 var country=$(this).attr("data-country");
		$.ajax({
			url: '/ajax/cities',
			data:'find=cities&country='+country,
			success: function(data){
				$('#cities').html(data);
			},
			error: function(data){
				$('#cities').html(data);
			}
		});
	});
});