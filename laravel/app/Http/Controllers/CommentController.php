<?php namespace App\Http\Controllers;

use Auth;
use Request;
use DB;
use App\Library\Sql;
use App\Models\Game;
use App\Models\Comment;

class CommentController extends Controller {
	
	public function addComment() {
		$comment_body = Request::input('comment_body');
		
		$comments = new Comment();
		$comments->comment_body = $comment_body;
		$comments->save();


		return view('plot', ['comments'=>$comments]);
	}

	public function getComments() {
		$comments = new Comment();

		return view('plot', ['comments'=>$comments]);
	}

	public function plot() {
		return view('plot');
	}

	public function combat() {
		return view('combat');
	}

	public function items() {
		return view('item');
	}

	public function npcs() {
		return view('npc');
	}
}