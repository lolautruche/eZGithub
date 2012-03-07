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

            // Get datas
            $rsc = curl_init();
            curl_setopt( $rsc, CURLOPT_URL, $api_url );
            curl_setopt( $rsc, CURLOPT_RETURNTRANSFER, true );
            $result = curl_exec( $rsc );
            curl_close( $rsc );

            // Process datas
            $datas = json_decode( $result );

            return $datas;

        }

        // FETCHS ///////////////////////////////////////////////////
        
        public static function fetchGetGists( $username = null )
        {
            return array( 'result' => eZGists::getGists( $username ) );
        }

    }

?>
