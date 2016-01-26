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

	public static function create_maze($x, $y)
	{
		$maze = array();

		// 縦
		for ($i=0; $i < $x; $i++)
		{
			// 横
			for ($j=0; $j < $y; $j++)
			{
				// 一番上と一番下の行
				if($i==0 OR $i==$x-1)
				{
					$maze[$i][$j] = 1;
				}
				// 偶数行は壁と道を交互に
				elseif($i%2==0 AND $j%2==0)
				{
					$maze[$i][$j] = 1;
				}
				// 奇数行は最終列を壁にする
				elseif($j==0 OR $j== $x-1)
				{
					$maze[$i][$j] = 1;
				}
			}
		}

		return $maze;
	}

}
