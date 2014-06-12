<?php

class TeamController extends BaseController {

	public function index()
	{
		$teams = Team::all();
		return View::make('teams.index')->with('teams', $teams);
	}

}
