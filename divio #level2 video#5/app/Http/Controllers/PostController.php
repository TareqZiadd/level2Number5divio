<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{


public function index (){

$posts =Post::paginate(8);


    return view('posts.index',['posts'=>$posts]);
}


public function home (){

//$posts=Post::all();
$posts=Post::paginate();

return view('home',['posts'=>$posts]);

}

public function show ($id){

    $post=Post::findOrFail($id);
    //dd($post);
    return view('posts.show',['post'=>$post]);


    }



public function create (){
    return view('posts.add');
}

public function edit ($id){

$post=Post::findOrFail($id);
return view('posts.edit',['post'=>$post,'id'=>$id]);

}

public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();
     return back()->with('success', 'Post Deleted Successfully');
}


public function search (){
echo 33;

}


public function destroy2 ($id){
$obj=Post::findOrFail($id);
$obj->delete();
return back()->with('success','post is deleted');
}


public function destroy3 ($id){

$obj=Post::findOrFail($id);
$obj->delete();
return back()->with('success','post is deleted');
}



public function store(Request $request)
{

    $request->validate([
        'title' => 'required|string|min:3',
        'description' => 'required|string|max:1500',
        'user_id' => 'required|exists:users,id',
    ]);

    $obj = new Post();
    $obj->title=$request->title;
    $obj->description=$request->description;
    $obj->user_id=$request->user_id;
    $obj->save();
    return back()->with('success','Post Added Successfuly');

}


public function update($id, Request $request)
{
    // Find the post by its ID or fail if it doesn't exist
    $obj = Post::findOrFail($id);

    // Update the post's title and description with the data from the request
    $obj->title = $request->title;
    $obj->description = $request->description;
    $obj->save();
    // Dump and die - output the $obj object and halt further execution
    return redirect('posts')->with('success','post updated Successfully');
}


/*
public function store2(Request $request){

$request->validate(
['title'=>'required|min=3|string',
'description'=>'required|max=1500',
'user_id'=>'required|exists:users,id'
]
);

$obj= new Post();

$obj->title=$request->title;
$obj->description=$request->description;
$obj->user_id=$request->user_id;

$obj->save();

return back()->with('success','Post is Added');
}
*/


}
