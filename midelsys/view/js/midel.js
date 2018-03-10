$(document).ready(function() {
	menuSwitcher('home');
	menu();
});


function menu(){
	$('a span').each(function(){
		var text = $(this).text().toLowerCase();
		$(this).parent().on('click',function(){
			$('#view').load('view/'+text+'.php', function(response,status,xhr){
				console.log(xhr);
				if(text != null && xhr.status == 404){
					menuSwitcher('comingsoon');
				}
			});
		});
	});
	
	$('#a-logo').on('click',function(){
		menuSwitcher('home');
	});
}

function menuSwitcher(menu){
	$('#view').load('view/'+menu+'.php');
}
