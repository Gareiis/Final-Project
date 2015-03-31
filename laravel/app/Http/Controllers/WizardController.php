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

	public function addFormat() {
		$format_id = Request::input('format');
		$game_id = Request::input('game_id');

		$game = new Game($game_id);
		$game->format_id = $format_id;
		// $game->save();

		return redirect('wizard2/' . $game->game_id);
	}

		public function addObjective() {
		$objective_id = Request::input('objective');
		$game_id = Request::input('game_id');

		$game = new Game($game_id);
		$game->objective_id = $objective_id;
		// $game->save();

		return redirect('wizard3/' . $game->game_id);
	}

		public function addRules() {
		$rules = Request::input('rules');
		$game_id = Request::input('game_id');

		$game = new Game($game_id);
		$game->rules = $rules;
		$game->save();

		return redirect('wizard4/' . $game->game_id);
	}

		public function addSetting() {
		$setting = Request::input('setting');
		$game_id = Request::input('game_id');

		$game = new Game($game_id);
		$game->setting = $setting;
		$game->save();

		return redirect('/');
	}

	public function index() {
		return view('game-create');
	}

	public function wizard1($game_id) {
		return view('wizard-page-1', ['game_id' => $game_id]);
	}

	public function wizard2($game_id) {
		return view('wizard-page-2', ['game_id' => $game_id]);
	}

	public function wizard3($game_id) {
		return view('wizard-page-3', ['game_id' => $game_id]);
	}
	
	public function wizard4($game_id) {
		return view('wizard-page-4');
	}

}