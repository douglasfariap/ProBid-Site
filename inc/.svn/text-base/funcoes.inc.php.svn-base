<?php
function __autoload($class){
    $c = 'class/'.$class.'.class.php';
    if(is_file($c)){
        require_once($c);
    }else{
        $founded=false;
        for($i=0;$i<4;$i++){
            $c = "../".$c;
            if(is_file($c)){
                require_once($c);
                $founded=true;
                break;
            }
        }
        if(!$founded){
            return false;
        }
    }
}

function redirect($url){
    die("<script>self.location='".$url."'</script>");
}

?>