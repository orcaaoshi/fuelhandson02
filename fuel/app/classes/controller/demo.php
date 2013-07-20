<?php

class Controller_Demo extends Controller
{
	public function action_index()
	{
		return Response::forge( View::forge('demo/index') );
	}
}
