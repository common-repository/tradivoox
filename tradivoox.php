<?php
/*
Plugin Name: tradivoox
Plugin URI: http://agence-web-biarritz.fr/
Description: Tradivoox : For translate all your blog contents in French, Italian,Spain,German and Japanese.

How it's work?
Just install the plugin and active it. 
Once done, just click on any post you want on your blog for translate it.
We just add a few language:French, Italian,Spain,German and Japanese.
We will provide more language and more feat on the next version.

05-05-2010
Version 1


Author: devoox
Author URI: http://agence-web-biarritz.fr/
*/


/*  Copyright 2009  devoox.com  (email : info@devoox.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
  
*/
function glassy(){
$script='
<script type="text/javascript" src="'.PLUGINDIR.'/tradivoox/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="'.PLUGINDIR.'/tradivoox/jquery.sundaymorning.js"></script>
<link rel="stylesheet" type="text/css" href="'.PLUGINDIR.'/tradivoox/jquery.sundaymorning.css">
<script type="text/javascript">
		$(function() { 	
			// DEMO -------------------------------------------
			
		    // EXAMPLE 1 ----------------------------------------
			
			$(\'.entry\').sundayMorning({
				source:\'fr\',
				trigger:\'dblclick\', 
				destination:{     
					en:\'English\',
					it:\'Italiano\',
					es:\'Español\',
					de:\'Deutsch\',
					ja:\'日本語\'
					
				}
			});

						});					
		
		</script>

';
print($script);
}
add_action('wp_head', 'glassy', 2);

?>
