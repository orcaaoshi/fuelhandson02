<?php

class Controller_Api extends Controller_Rest
{
	protected $format = 'xml';

	public function get_data()
	{
		return Model_Bbs::find('all');
	}
}
