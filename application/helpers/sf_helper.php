<?php

function sf_construct(){
    $ci =& get_instance();
    $ci->classname=ucwords($ci->router->fetch_class());
    if(!is_allow('M_'.$ci->classname)){
                redirect(site_url($ci->classname));
        }
}

function GenerateCode() {
    $possible ='123456789';
    $operator ='+';   
    $admin    = array('Edy S', 'Bima N', 'Zaki C');
    $a = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $b = substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $opr = substr($operator, mt_rand(0, strlen($operator)-1), 1);
    if($opr=='+'){
        $res = $a + $b;
    }
    else{
        $res = $a + $b;
    }
    $code['adm']  = $admin[mt_rand(0, strlen($operator)-1)];
    $code['res']  = $res;
    $code['text'] = $a.' '.$opr.' '.$b.' =';
    return $code ;
}