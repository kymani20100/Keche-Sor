$(document).ready(function(){
	// GET HTTP REQUEST
	$('#button').click(function(){
		var first = $('#firstname').val();
		$.get('php/important-blocks.php', {input: first}, function(data){
			$('#feedback').text(data);
		});
	});
	
	// POST HTTP REQUEST
	$('#button').click(function(){
		var first = $('#firstname').val();
		$.post('php/important-blocks.php', {input: first}, function(data){
			$('#feedback').text(data);
		});
	});
	
	$('#button').click(function(){
		var name  = $('#name').val();
		$.ajax({
			type: 'POST',
			url: 'php_files/important-blocks.php',
			data: 'name='+name,
			success: function(data){
				$('#content').html(data);
			}
		}).error(function(){
			alert('An error occured');
		});
	});
	
});