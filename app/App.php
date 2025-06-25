<?php
namespace app;

use app\libs\pipeline\Pipeline;
use app\libs\pipeline\middlewares\ExceptionHandlerMiddleware;
use app\libs\http\Request;
use app\libs\http\Response;
use app\libs\pipeline\middlewares\RouterHandlerMiddleware;

/**
 * Descripción de App
 *
 * @author Ing. Jose Rasjido
 */

final class App{

    private function __construct(){}
    
    public static function run(){   
        $pipeline = new Pipeline();

        $pipeline
        ->pipe(new ExceptionHandlerMiddleware())
        ->pipe(new RouterHandlerMiddleware());

        $pipeline->process(new Request(), new Response());
    }
    
}