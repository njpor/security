<?php
$controllers = array('homepage'=>['home', 'error']); //list controller


function call($controller, $action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
       /* case "homepage":  $controller = new xxx_Controller();
                      break;
      */
           
                      
    }

    $controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{    if(in_array($action, $controllers[$controller]))
    {    call($controller, $action); }
    else
    {    call('homepage', 'error'); }

}
else
{    call('homepage', 'error');} 
?>
