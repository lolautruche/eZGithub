<?php

    class eZGists
    {

        // STATIC METHODS ///////////////////////////////////////////

        /**
         * Get all the gists for $username.
         * @param $username If null, it will use the username written in ezgithub.ini
         * @return An array of Gists
         */
        public static function getGists( $username = null )
        {

            $ini = eZINI::instance( 'ezgithub.ini' );

            // Select correct user
            if ( $username == null )
            {
                $username = $ini->variable( 'Profile', 'username' );
            }

            // Construct the URL to call
            $api_url = $ini->variable( 'API', 'url' )."/users/$username/gists";

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

        /**
         * Get the content of a given gist
         */
        public static function getGistContent( $gist_id )
        {

            $ini = eZINI::instance( 'ezgithub.ini' );

            // Construct the URL to call
            $api_url = $ini->variable( 'API', 'url' )."/gists/$gist_id";

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
        
        public static function fetchGetGists( $username = null )
        {
            return array( 'result' => eZGists::getGists( $username ) );
        }

        public static function fetchGetGistContent( $gist_id )
        {
            return array( 'result' => eZGists::getGistContent( $gist_id ) );
        }

    }

?>
