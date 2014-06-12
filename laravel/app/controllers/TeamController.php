<?php

class TeamController extends BaseController {

	public function index()
	{
		$teams = Team::all();

		return Response::json(
			array($teams)
		);
	}

}
