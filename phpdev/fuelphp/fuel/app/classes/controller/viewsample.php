<?php

class Controller_ViewSample extends Controller
{
	public function action_index()
	{
		$data = array();
		
		$data['title']    = 'サンプル';
		$data['username'] = 'Ritsu';
		
		return View::forge(viewsample, $data);
	}
}