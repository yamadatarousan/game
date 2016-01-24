<?php 

class Controller_Test extends Controller
{
	
	public function action_index()
	{

		$data = array();
		$query = DB::select()->from('test');
		$data = $query->execute();
		return Response::forge(View::forge('test/index'));
	}

}	