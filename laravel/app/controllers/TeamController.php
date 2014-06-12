<?php

class TeamController extends BaseController {

	public function index()
	{
		return Response::json(
			array(
				array(
					'name' => 'Team Awesome'
				),
				array(
					'name' => 'Team Cool' 
				)
			)
		);
	}

}
