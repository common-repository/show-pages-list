(function( $ ) {
	'use strict';

	$( window ).load(function() {

		$('#download').click(function(e){

			$.generateFile({
				filename	: 'export.txt',
				content		: $('#pages_list').val(),
				script		: pathPHP
			});

			e.preventDefault();
		});

		$('#download2').click(function(e){

			$.generateFile({
				filename	: 'export.txt',
				content		: $('#posts_list').val(),
				script		: pathPHP
			});

			e.preventDefault();
		});

		$('#download3').click(function(e){

			$.generateFile({
				filename	: 'export.txt',
				content		: $('#all_list').val(),
				script		: pathPHP
			});

			e.preventDefault();
		});

		$('#download4').click(function(e){

			$.generateFile({
				filename	: 'export.txt',
				content		: $('#categories_list').val(),
				script		: pathPHP
			});

			e.preventDefault();
		});

	});

})( jQuery );
