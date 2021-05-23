<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
class TestsController extends AppController 
{
   public function show($arg1, $arg2)
   {
	   $this->set('argument1',$arg1);
	   $this->set('argument2',$arg2);
   }
}
