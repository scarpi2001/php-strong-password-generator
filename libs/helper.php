<?php
    

    function pws_rand ($length) {
        $chars = array_merge(range("A", "Z"), range("a", "z"), range(0, 9), ["!","@","#","$","%","^","&","*",]);
        $password = "";

        for ($i=0; $i < $length; $i++) { 
            $password .= $chars[array_rand($chars)];
        }

        return $password;
    }

    
?>