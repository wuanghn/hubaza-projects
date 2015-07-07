<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '828149473934812',
            'client_secret' => 'bf30b1eccdcf4355bb3e3deb83086c4c',
            'scope'         => array('email'),
        ),
        

        'Google' => array(
            'client_id'     => '898817594625-tjasb1cdo58576fm55e2l7oct90007lh.apps.googleusercontent.com',
            'client_secret' => '8c2Ge-9WnH0pC2pzrX2jD346',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),  		

	)

);