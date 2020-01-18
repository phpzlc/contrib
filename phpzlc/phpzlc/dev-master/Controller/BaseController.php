<?php

namespace App\Controller;

use PHPZlc\PHPZlc\Bundle\Controller\SystemBaseController;

abstract class BaseController extends SystemBaseController
{
    protected function inlet($returnType = SystemBaseController::RETURN_HIDE_RESOURCE, $isLogin = true)
    {
        SystemBaseController::setReturnType($returnType);

        return true;
    }
}