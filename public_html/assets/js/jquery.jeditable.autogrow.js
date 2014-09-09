/*
 * Autogrow textarea for Jeditable
 *
 * Copyright (c) 2008 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 * 
 * Depends on Autogrow jQuery plugin by Chrys Bader:
 *   http://www.aclevercookie.com/facebook-like-auto-growing-textarea/
 *
 * Project home:
 *   http://www.appelsiini.net/projects/jeditable
 *
 * Revision: $Id$
 *
 */
 
 $.editable.addInputType('autogrow', {
 	element : function(settings, original) {
 		var textarea = $('<form class="pure-form pure-form-aligned"><div class="pure-control-group"><label for="immat">Modifier la valeur : </label><input type="text"/> </div></form>');
 		
 		$(this).append(textarea);
 		return(textarea);
 	},
 	plugin : function(settings, original) {
 		$('textarea', this).autogrow(settings.autogrow);
 	}
 });
