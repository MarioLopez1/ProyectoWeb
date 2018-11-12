$.ajax({
	url: 'data/comments.xml',
	type: 'GET',
	dataType: 'xml',
	success:function(data){
		let new_html = '';

		$(data).find('comment').each(function(){
			new_html += `
			<h3>${$(this).find('name').text()}</h3>
			<p>${$(data).find('name').attr('email')}</p>
			<p>${$(this).find('text').text()}</p>
			`;
		});
		$('#cos').append(new_html);
	},
	error:function(error_msg){
		console.log(error_msg);
	}
});
