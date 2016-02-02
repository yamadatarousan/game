<?php 

$size = 19;
$maze = init($size,$size);
print_r($maze);
$maze = create_maze($maze,$size);

$maze[0][1] = 0;
$maze[$size-1][$size-2] = 0;

drawing_maze($maze,$size);

function init($x, $y)
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
			else
			{
				$maze[$i][$j] = 0;
			}
		}
	}

	return $maze;
}


function create_maze($maze, $size)
{
	 // 縦軸
	for ($i=2; $i < $size-2; $i+=2)
	{
		// 横軸
		for ($j=2; $j < $size-2; $j+=2)
		{
			// 一番上と一番下
			$end_loop = false;
			do {
				$rand = rand(0,3);
				switch ($rand) {
				case 0:
					if($i==2 AND $maze[$i-1][$j]==0)
					{
						$maze[$i-1][$j] = 1;
						$end_loop = true;
					}
					break;
				case 1;
					if($maze[$i][$j+1]==0)
					{
						$maze[$i][$j+1]=1;
						$end_loop = true;
					}
					break;
				case 2;
					if($maze[$i+1][$j]==0)
					{
						$maze[$i+1][$j] = 1;
						$end_loop = true;
					}
					break;
				case 3;
					if($maze[$i][$j-1]==0)
					{
						$maze[$i][$j-1] = 1;
						$end_loop = true;
					}
					break;
				}
			} while(!$end_loop);
		}
	}
	return $maze;
}

function drawing_maze($maze,$size)
{
	for ($i=0; $i < $size; $i++)
	{
		for ($j=0; $j < $size; $j++)
		{
			if($maze[$i][$j]==1)
			{
				echo '■';
			}
			else
			{
				echo '　';
			}
		}
		echo PHP_EOL;
	}
}

?>