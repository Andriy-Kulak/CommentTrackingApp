<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(Comment::get());
	}

	/**
	 * Return the specified resource using json
	 *
	 * @return Response
	 */
	public function show($id) {
		return response()->json( Comment::find($id) );
	}

	/**
	 * Store new comment
	 */
	public function store()
	{
		Comment::create(array(
			'author' => Input::get('author'),
			'text' => Input::get('text')
		));

		return response()->json(['success' => true]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
		Comment::destroy($id);
		return response()->json(['success' => true]);
	}

}
