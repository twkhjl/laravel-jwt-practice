<?php

namespace App\Http\Middleware;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class AuthenticateAPI extends Middleware
{

  public function render($request, Exception $exception)
  {   
  
    // return parent::render($request);
    return $request;
  
  }

  
}