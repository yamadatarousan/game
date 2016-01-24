<?php
class Module_Dungeon
{
	public static function draw($data_list, $draw_cnt)
	{
		$total_weigth = 0;
		foreach ($data_list as $data)
		{
			$total_weigth += $data['weight'];
		}

		if(0==$total_weigth)
		{
			throw new Exception("Error total weight is zero");
		}


		$weight = 0;
		$result = array();

		for ($i=1; $i <=$draw_cnt ; $i++)
		{
			$rand = rand(1,$total_weigth);
			foreach ($data_list as $data)
			{
				$weight += $data['weight'];
				if($rand <= $weight)
				{
					$result[] = $data;
					break;
				}
			}
		}
		return $result;
	}

}
