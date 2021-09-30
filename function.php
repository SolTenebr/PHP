<?php
function main(){
    if (!isset($_REQUEST['page'])){
        include ('content/pages/main.md');
    }else{
        $page = $_REQUEST['page'];
        switch ($page){
            case 'about' : include ('content/pages/about.md');break;
            case 'calc' : include ('content/pages/calc.php');break;

            default: include ('content/pages/404.md');

        }
    }
}

function calc()
?>
