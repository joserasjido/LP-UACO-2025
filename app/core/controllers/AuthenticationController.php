<?php

namespace app\core\controllers;

use app\core\controllers\base\BaseController;
use app\core\controllers\base\InterfaceController;
use app\libs\http\Request;
use app\libs\http\Response;

final class AuthenticationController extends BaseController{

    public function index(Request $request, Response $response): void{
        array_push($this->scripts, "app/js/{$request->getController()}/{$request->getAction()}.js");
        // $this->setCurrentView($request);
        // require_once APP_FILE_TEMPLATE;
        require_once APP_FILE_LOGIN;
    }

    public function logout(Request $request, Response $response): void{
        $response->setMessage("Vista o funcionalidad en desarrollo...");
        $response->send();
    }

}