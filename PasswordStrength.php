<?php
    require_once 'request.php';
    require_once 'include/common.inc.php';
    $password = GetParam('password');
    if (empty($password))
    {
        echo 'Parameter not found!';
    }
    else
    {
        $strength = CalcStrength($password);
        echo 'Надежность пароля: ' . $strength;		
    }