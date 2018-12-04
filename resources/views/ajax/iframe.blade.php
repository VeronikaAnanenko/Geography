<script>
$(function(){
	$(".main_page a:not([role=tab])").each(function(){
		var link=$(this).attr('href');
		var link_arr=link.split('.');
		var link_real='https://news.google.com'+link_arr[1]+'?hl=en-US&gl=US&ceid=US%3Aen';
		console.log(link_real);
		$(this).attr("href", link_real);
		$(this).attr("target","_blank");
	});
	$("menu").hide();
	$(".SVJrMe").hide();
	$(".qTydRe").hide();
});
</script>