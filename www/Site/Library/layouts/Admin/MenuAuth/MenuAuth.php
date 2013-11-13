<?php
/**
 * Меню авторизации
 * @author: polinа Putrolaynen
 * @date: 07.03.13
 *
 */
namespace Library\layouts\Admin\MenuAuth;

use Library\views\Widget\Widget,
    Boolive\input\Input,
    Boolive\auth\Auth;

class MenuAuth extends Widget{

    function show($v = array(), $commands, $input)
    {
        $v['logout'] = Input::url(null,0,array('logout'=>true));
        $user = Auth::getUser();
        if($user->isExist()){
            $v['name'] = $user->title->value();
        }
        $v['userlink'] = $user->uri();
        return parent::show($v, $commands, $input);
    }
}