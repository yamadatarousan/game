/**
 * サンプル5 迷路生成(棒倒し法アルゴリズム)
 */
import java.util.Random;

public class Sample5 {
    /** 迷路の大きさ */
    static final int MAZE_SIZE = 19;

    /**
     * mainメソッド
     */
    public static void main(String[] args) {
        // 迷路用2次元配列(maze[縦][横])
        int[][] maze = new int[MAZE_SIZE][MAZE_SIZE];

        // 配列初期化
        initialize(maze);
        // 迷路生成
        mazeCreate(maze);
        // 入口設定
        maze[0][1] = 0;
        // 出口設定
        maze[MAZE_SIZE - 1][MAZE_SIZE - 2] = 0;
        // 迷路描画
        mazeOutput(maze);
    }
    
    /**
     * 配列の初期化
     * @param maze 2次元配列
     */
    static void initialize(int[][] maze) {
        // 縦軸ループ
        for (int i = 0; i < MAZE_SIZE; i++) {
            // 横軸ループ
            for (int j = 0; j < MAZE_SIZE; j++) {
                // 一番上と一番下の行
                if (i == 0 || i == MAZE_SIZE - 1) {
                    // 壁を設定
                    maze[i][j] = 1;
                // 偶数行は壁と道を交互に
                } else if (i % 2 == 0 && j % 2 == 0) {
                    // 壁を設定
                    maze[i][j] = 1;
                // 奇数行は1列目と最終列を壁にする
                } else if (j == 0 || j == MAZE_SIZE - 1) {
                    // 壁を設定
                    maze[i][j] = 1;
                }
            }
        }
    }

    /**
     * 棒倒し法による迷路生成
     * @param maze 2次元配列
     */
    static void mazeCreate(int[][] maze) {
        // 乱数発生用のインスタンス生成
        Random rnd = new Random();

        // 縦軸ループ(棒があるところのみ)
        for (int i = 2; i < MAZE_SIZE - 2; i += 2) {
            // 横軸ループ(棒があるところのみ)
            for (int j = 2; j < MAZE_SIZE - 2; j += 2) {
                // doループ脱出用フラグ
                boolean flag = false;
                // 棒を倒したらdoループを脱出
                do {
                    // 0～3の乱数で生成
                    int random = rnd.nextInt(4);
                    switch (random) {
                    case 0:
                        // 2行目で上が道ならば
                        if (i == 2 && maze[i - 1][j] == 0) {
                            // 上へ倒す
                            maze[i - 1][j] = 1;
                            flag = true;
                        }
                        break;
                    case 1:
                        // 右が道ならば
                        if (maze[i][j + 1] == 0) {
                            // 右へ倒す
                            maze[i][j + 1] = 1;
                            flag = true;
                        }
                        break;
                    case 2:
                        // 下が道ならば
                        if (maze[i + 1][j] == 0) {
                            // 下へ倒す
                            maze[i + 1][j] = 1;
                            flag = true;
                        }
                        break;
                    case 3:
                        // 左が道ならば
                        if (maze[i][j - 1] == 0) {
                            // 左へ倒す
                            maze[i][j - 1] = 1;
                            flag = true;
                        }
                        break;
                    }
                } while (!flag);
            }
        }
    }

    /**
     * 迷路描画
     * @param maze 2次元配列
     */
    static void mazeOutput(int[][] maze) {
        // 縦軸ループ
        for (int i = 0; i < MAZE_SIZE; i++) {
            // 横軸ループ
            for (int j = 0; j < MAZE_SIZE; j++) {
                if (maze[i][j] == 1) {
                    // 壁描画
                    System.out.print('■');
                } else {
                    // 道描画
                    System.out.print('　');
                }
            }
            System.out.println();
        }
    }
}

/**
 * サンプル
*/
package com.hatenablog.nautilus2580;

import java.util.Random;

public class Maze {
    public static final int WALL = 1;
    public static final int BLANK = 0;

    public static int[][] createMaze(int w, int h){
        Random random = new Random();
        int[][] maze = new int[Math.abs(h)][Math.abs(w)];

        // 縦・横の大きさが5より小さい場合は作らない
        if(w < 5 || h < 5) return maze;

        // 外側に壁を作る
        for(int y = 0; y < h; y++){
            for(int x = 0; x < w; x++){
                if(x == 0 || y == 0 || x == w - 1 || y == h - 1)
                    maze[y][x] = WALL;
                else maze[y][x] = BLANK;
            }
        }

        // 棒を立てて倒す
        for(int y = 2; y < h - 2; y+=2){
            for(int x = 2; x < w - 2; x+=2){
                // 棒を立てる
                maze[y][x] = WALL;

                int direction;
                // 2段目のときだけ上方向を含む
                if(y == 2) direction = random.nextInt(4);

                // それ以降は右、下、左方向のどれか
                else direction = random.nextInt(3);

                switch(direction){
                // 右
                case 0:
                    maze[y][x+1] = WALL;
                    break;
                // 下
                case 1:
                    maze[y+1][x] = WALL;
                    break;
                // 左
                case 2:
                    maze[y][x-1] = WALL;
                    break;
                // 上
                case 3:
                    maze[y-1][x] = WALL;
                    break;
                }
            }
        }
        return maze;
    }
}
