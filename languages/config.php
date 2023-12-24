<?php 


if(!isset($_SESSION["lang"])) {
    $_SESSION["lang"] = "al";
}else if(isset($_GET["lang"]) && $_SESSION["lang"] != $_GET["lang"] && !empty($_GET["lang"])) {
    if($_GET["lang"] == "al"){
        $_SESSION["lang"] = "al";
    }else if($_GET["lang"] == "mq"){
        $_SESSION["lang"] = "mq";
    }
}

require_once $_SESSION["lang"] . ".php";
?>