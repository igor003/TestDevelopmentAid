<?php

namespace App\Http\Controllers;
use App\Entities\Category;
use Doctrine\ORM\EntityManager;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = $this->em->getRepository('App\Entities\Category')->findAll();
        return view('welcome',['namesCategory'=>$categories]);
    }
}
