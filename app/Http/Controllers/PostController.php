<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{
    //
    public function edit(Post $post){
         
        
      if(Gate::denies('update',$post)){
         abort(403,'Yeh teri post nahi hai');
      }
      return response()->json(['message'=>'Edit kr sakta hai']);

    }
}
