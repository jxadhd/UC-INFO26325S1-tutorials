<?php
    function SanitizeString($string){
        $string = strip_tags($string);
        $string = htmlentities($string);
        return stripslashes($string);
    }
    echo SanitizeString($_POST['comment_text']);
?>