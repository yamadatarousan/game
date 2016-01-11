<?php 

class Controller_Test extends Controller
{
	
	public function action_index()
	{

		$data = array();
		$query = DB::select()->from('test');
		$data = $query->execute();
		Debug::dump($data);
		return Response::forge(View::forge('test/index'));
	}

}