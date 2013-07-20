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
	
	public function action_select($id = null)
	{
		$list = array(
			1 => '1st',
			2 => '2nd',
			3 => '3rd'
		);
		if ($id === null) $id = 1;
		if ($id > 3) $id = 3;
		$data = array('text' => $list[$id]);
		
		return Response::forge( View::forge('demo/select', $data) );
	}
}
