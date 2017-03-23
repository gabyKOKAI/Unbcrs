<?php namespace Unbcrs\Http\Controllers;

use Unbcrs\Posts;
use Unbcrs\Comments;
use Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;

class CommentController extends Controller {

  //Create comment
  public function store(Request $request)
  {
    //on_post, from_user, body
    $input['from_user'] = $request->user()->id;
    $input['on_post'] = $request->input('on_post');
    $input['body'] = $request->input('body');
    $slug = $request->input('slug');
    Comments::create( $input );
    return redirect($slug)->with('message', 'Commentario publicado');     
  }
}