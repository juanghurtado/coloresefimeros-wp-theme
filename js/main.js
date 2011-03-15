/* ----------------------------------------------------------------------------------
	Flaminwork Javascript Framework
	
	Version:	0.1
	Encoding:	UTF-8
	Authors:	
		Juan G. Hurtado 	[juan.g.hurtado@gmail.com]
		Álvaro Fernández 	[creativo@alvarografico.es]
-------------------------------------------------------------------------------------
	Table of contents
-------------------------------------------------------------------------------------
	1.	EXPAND BLOCKS
	2.	STYLE HELPER
---------------------------------------------------------------------------------- */

if (typeof jQuery != "undefined") {
	
	/* =INIT FUNCTION
	------------------------------------------------------------------------------ */
	function init() {
		styleHelper.firstLast('#wrapper', '.article');
		
		$link = jQuery('<a href="#"></a>');
		$link.css({
			border : '0',
			bottom : '-3px',
			display : 'block',
			height : '20px',
			padding : '0',
			position : 'absolute',
			right: '0',
			textIndent : '0',
			width: '20px'
		});
		jQuery('#header h1').css('position','relative').append(
			$link.clone().bind('click', function(e) {
				jQuery('body')
					.removeClass('red')
					.removeClass('orange')
					.addClass('green');
				e.preventDefault();
			}).css('right', '6px')
		)
		.append(
			$link.clone().bind('click', function(e) {
				jQuery('body')
					.removeClass('red')
					.removeClass('green')
					.addClass('orange');
				e.preventDefault();
			}).css('right', '35px')
		)
		.append(
			$link.clone().bind('click', function(e) {
				jQuery('body')
					.removeClass('orange')
					.removeClass('green')
					.addClass('red');
				e.preventDefault();
			}).css('right', '65px')
		);
		
	}
	
	/* =DOCUMENT READY
	------------------------------------------------------------------------------ */
	jQuery(function() {
		init();
	});
}