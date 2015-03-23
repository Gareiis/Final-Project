<?php namespace App\Http\Controllers;

class WizardController extends Controller {

	public function index() {
		return view('game-create');
	}

	public function wizard1() {
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