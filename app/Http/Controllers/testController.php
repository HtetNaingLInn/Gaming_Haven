<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index($id){
        $cats=Category::whereId($id)->firstOrFail();
        
       echo  $cats->name;
       echo "<hr>";

       foreach($cats->posts as $post)
       echo $post .'<br>';

    }
}
