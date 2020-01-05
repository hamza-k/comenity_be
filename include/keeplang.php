<?php

function keeplang($lang){
        if(isset($_GET['lang']) && $_GET['lang'] == $lang) { echo 'selected' ;}
    }

?>