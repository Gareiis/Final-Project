<?php namespace App\Http\Controllers;

use Auth;
use Request;
use DB;
// use App\Library\Sql;
use App\Models\Game;

class WizardController extends Controller {

	public function addGame() {
		$vision = Request::input('vision');
		
		

		$game = new Game();
		$game->vision = $vision;
		$game->save();


		return redirect('wizard1/' . $game->game_id);
	}

	public function index() {
		return view('game-create');
	}

	public function wizard1($game_id) {
		return view('wizard-page-1');
	}

	public function wizard2() {
		return view('wizard-page-2');
	}

	public function wizard3() {
		return view('wizard-page-3');
	}
	
	public function wizard4() {
		return view('wizard-page-4');
	}

}