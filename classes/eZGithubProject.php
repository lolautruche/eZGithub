<?php

    class eZGithubProject
    {

        // STATIC METHODS ///////////////////////////////////////////

        /**
         * Get all the projects for $username.
         * @param $username If null, it will use the username written in ezgithub.ini
         * @return An array of Gists
         */
        public static function getProjects( $username = null )
        {

            $ini = eZINI::instance( 'ezgithub.ini' );

            // Select correct user
            if ( $username == null )
            {
                $username = $ini->variable( 'Profile', 'username' );
            }

            // Construct the URL to call
            $api_url = $ini->variable( 'API', 'url' )."/users/$username/repos";

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
         * Get the content of a given project
         */
        public static function getGithubProjectContent( $project, $username )
        {

            $ini = eZINI::instance( 'ezgithub.ini' );

            // Select correct user
            if ( $username == null )
            {
                $username = $ini->variable( 'Profile', 'username' );
            }

            // Construct the URL to call
            $api_url = $ini->variable( 'API', 'url' )."/repos/$username/$project";

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
        
        public static function fetchGetProjects( $username = null )
        {
            return array( 'result' => eZGithubProject::getProjects( $username ) );
        }

        public static function fetchGetGithubProjectContent( $project, $username = null )
        {
            return array( 'result' => eZGithubProject::getGithubProjectContent( $project, $username ) );
        }

    }

?>
