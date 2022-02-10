<?php

    if(isset($_GET["page"])){
        $page= $_GET["page"];
        header("Location:".$page."/index.html.php");
    }

?>