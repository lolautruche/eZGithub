<?php

    class eZGithubUser
    {

        // STATIC METHODS ///////////////////////////////////////////

        /**
         * Get the content of a given project
         */
        public static function getGithubUserContent( $username )
        {

            $ini = eZINI::instance( 'ezgithub.ini' );

            // Select correct user
            if ( $username == null )
            {
                $username = $ini->variable( 'Profile', 'username' );
            }

            // Construct the URL to call
            $api_url = $ini->variable( 'API', 'url' )."/users/$username";

            // Get data
            $rsc = curl_init();
            curl_setopt( $rsc, CURLOPT_URL, $api_url );
            curl_setopt( $rsc, CURLOPT_RETURNTRANSFER, true );
            $result = curl_exec( $rsc );
            curl_close( $rsc );

            // Process data
            $data = json_decode( $result, true );

            return $data;
 
        }

        // FETCHS ///////////////////////////////////////////////////
        
        public static function fetchGetGithubUserContent( $username = null )
        {
            return array( 'result' => eZGithubUser::getGithubUserContent( $username ) );
        }

    }

?>
