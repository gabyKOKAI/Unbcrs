<?php 

namespace Unbcrs\Http\Controllers;

use Unbcrs\Post;
use Unbcrs\User;
use Redirect;
use Unbcrs\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

  /*Esta funcion se debe quitar porque sino cuando estas como usuario registrado te lleva solo a home
	public function __construct()
	{
		$this->middleware('guest');
	}
*/

	//Show all posts
	public function index()
	{
		 //fetch 5 posts from database which are active and latest
		 $posts = Post::where('active',1)->orderBy('created_at','desc')->paginate(5);

		 //page heading
    	 $title = 'Latest Posts';

    	//return home.blade.php template from resources/views folder
    	return view('blog')->withPosts($posts)->withTitle($title);
  	}

  	//Create new post
  	public function create(Request $request)
  	{
    	// if user can post i.e. user is admin or author
    	if($request->user()->can_post())
    	{
      		return view('posts.create');
    	}    
    	else 
    	{
      		return redirect('/')->withErrors('No tienes los permisos suficientes para escribir posts');
    	}
    }

    //Storing posts
    public function store(PostFormRequest $request)
  	{

      
    	$post = new Post();
    	$post->title = $request->get('title');
    	$post->body = $request->get('body');
    	$post->slug = str_slug($post->title);
    	$post->author_id = $request->user()->id;
    	if($request->has('save'))
    	{
      		$post->active = 0;
      		$message = 'Post guardado';            
    	}            
    	else 
    	{
      		$post->active = 1;
      		$message = 'Post publicado';
    	}

    	$post->save();
    	return redirect('edit/'.$post->slug)->withMessage($message);
      
  	}

  	//Show single post with comments
  	public function show($slug)
  	{
    	$post = Post::where('slug',$slug)->first();
    	if(!$post)
    	{
       		return redirect('/')->withErrors('no se encontro la página solicitada');
    	}
    	$comments = $post->comments;
    	return view('posts.show')->withPost($post)->withComments($comments);
  	}

  	//Edit Post
  	public function edit(Request $request,$slug)
  	{
    	$post = Post::where('slug',$slug)->first();
    	if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
      		return view('posts.edit')->with('post',$post);
    	return redirect('/')->withErrors('no tienes los permisos suficientes');
  	}

  	//Update Post
  	public function update(Request $request)
  	{
        $post_id = $request->input('post_id');
    	$post = Post::find($post_id);
    	if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
    	{
      		$title = $request->input('title');
      		$slug = str_slug($title);
      		$duplicate = Post::where('slug',$slug)->first();
      		if($duplicate)
      		{
        		if($duplicate->id != $post_id)
        		{
          			return redirect('edit/'.$post->slug)->withErrors('El título ya existe.')->withInput();
        		}
        		else 
        		{
          		$post->slug = $slug;
        		}
      		}
      		$post->title = $title;
      		$post->body = $request->input('body');
      		if($request->has('save'))
      		{
        		$post->active = 0;
        		$message = 'Post guardado';
        		$landing = 'edit/'.$post->slug;
      		}            
      		else 
      		{
        		$post->active = 1;
        		$message = 'Post actualizado';
        		$landing = $post->slug;
      		}
      		$post->save();
            return redirect($landing)->withMessage($message);
    	}
    	else
    	{
      		return redirect('/')->withErrors('no tienes suficientes permisos');
    	}
  }

  //Delete post
  public function destroy(Request $request, $id)
  {
    $post = Post::find($id);
    if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
    {
    	$post->delete();
    	$data['message'] = 'Post eliminado';
    }
    else 
    {
    	$data['errors'] = 'Operación inválida. No tienes suficientes permisos';
    }
    return redirect('/')->with($data);
  }
  

}


