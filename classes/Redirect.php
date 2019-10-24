<?php

    /**
    *
    * Redirect class
    *
    * Redirects users to correct URL
    * 
    */
    Class Redirect {

        public static function goto($loc = null) {
            if ($loc) {
                header('Location: ' . $loc);
                exit();
            }
        }

    }

?>