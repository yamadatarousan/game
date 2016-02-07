<?php 
/**
 * 棒倒し法
 */

// 迷路サイズ
$size = 19;

// 棒倒し法式迷路初期化
$maze = init($size,$size);

// 迷路作成
$maze = create_maze($maze,$size);

// 入り口
$maze[0][1] = 0;

// 出口
$maze[$size-1][$size-2] = 0;

// 迷路描画
drawing_maze($maze,$size);

function init($x, $y)
{
	$maze = array();

	// 列
	for ($i=0; $i < $x; $i++)
	{
		// 行
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
	 // 列
	for ($i=2; $i < $size-2; $i+=2)
	{
		// 行
		for ($j=2; $j < $size-2; $j+=2)
		{
			// 一番上と一番下
			$end_loop = false;
			do {
				$rand = rand(0,3);
				switch ($rand) {
				case 0:
					// 外壁除いて2列目の1列手前（1列目）が空なら手前に棒を倒す
					if($i==2 AND $maze[$i-1][$j]==0)
					{
						// 外壁に接する棒が設置される
						$maze[$i-1][$j] = 1;
						$end_loop = true;
					}
					break;
				// 次の行に棒を倒す操作
				case 1;
					if($maze[$i][$j+1]==0)
					{
						$maze[$i][$j+1] = 1;
						$end_loop = true;
					}
					break;
				// 次の列に棒を倒す操作
				case 2;
					if($maze[$i+1][$j]==0)
					{
						$maze[$i+1][$j] = 1;
						$end_loop = true;
					}
					break;
				// 
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



/**
 * 穴掘り法
 */

Class dig
{

	protected $_width;
	protected $_height;
	protected $_outofrange = 1;
	protected $_map = null;

	public function __construct($width, $heigth)
	{
		$this->_width = $width;
		$this->_height = $height;
		$this->_map = $width*$height;
	}

	public function start()
	{
		static::fill();
	}

	public static function fill()
	{
		for ($i=0; $i < $this->_height; $i++)
		{
			for ($j=0; $j < $this->_width; $j++)
			{
				$this->_map[$i][$j] = 1;
			}
		}
	}


}



?>