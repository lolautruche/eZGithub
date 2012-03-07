<?php

    class eZGists
    {

        public static function getGists( $username = null )
        {
            if ( $username == null )
            {
                $ini = eZINI::instance( 'ezgithub.ini' );
                $username = $ini->value( 'Profile', 'username' );
            }
            return "Temporary Result";
        }

        // FETCHS ///////////////////////////////////////////////////
        
        public static function fetchGetGists( $username = null )
        {
            return array( 'result' => $this->getGists( $username ) );
        }

    }

?>
