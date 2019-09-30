<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('menu')){

    function menu($json, $sesion = null)
    {
        $array =  json_decode($json);
       // var_dump($array->menu);die;
        $html = '<ul class="nav metismenu" id="side-menu">'.$sesion;
        foreach ($array->menu as $i) {

            switch ($i->nivel) {
                case 1:
                    $html .= '<li><a class="link" href="#" data-link="'.$i->link.'"><i class="fa '.$i->icono.'"></i><span class="nav-label">'.$i->nombre.'</span></a></li>';
                    break;
                case 2:
                    $html .= '<li class="treeview">
                                <a href="#">
                                    <i class="'.$i->icono.'"></i> <span class="nav-label">'.$i->nombre.'</span>
                                    <span class="fa arrow"></span>
                                </a>';
                    $html.= submenu($i->submenu);
                   
                    break;   
                default:
                    break;
            }
            

        }
        return $html.'</ul>';
    }

    function submenu($data)
    {
        $html = '<ul class="nav nav-second-level">';
        foreach ($data as $i) {
            $html.= '<li><a class="link" href="#" data-link="'.$i->link.'">'.$i->nombre.'</a></li>';
        }
        return $html.'</ul>';
    }



}