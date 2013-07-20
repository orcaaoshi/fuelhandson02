<?php

class Controller_Demo extends Controller
{
	public function action_index()
	{
		return Response::forge( View::forge('demo/index') );
	}
	
	public function action_showdata()
	{
		$data = array('text' => 'Nagoya.');
		return Response::forge( View::forge('demo/showdata', $data) );
	}
}
