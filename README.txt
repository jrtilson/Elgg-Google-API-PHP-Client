Elgg Google API PHP Client 
Copyright (c) 2011 See COPYRIGHT.txt

This is an Elgg plugin that simply includes and registered the 
Google API PHP Client code for use in other plugins. 

To use this plugin, activate it in the Elgg admin area and use the following:

	// Main client * MUST BE LOADED FIRST *
	elgg_load_library('gapc:apiClient');       

	// Load a Google API service, ie Books
	elgg_load_library('gapc:apiBooksService');


The Google API PHP Client project page can be found here:
http://code.google.com/p/google-api-php-client

Elgg is managed by the Elgg Foundation, a nonprofit organization that was
founded to govern, protect, and promote the Elgg open source social network
engine.  The Foundation aims to provide a stable, commercially and
individually independent organization that moves in the best interest of Elgg
as an open source project.

The project site can be found at http://elgg.org/