<?php 
namespace App\Models;

use DB;
//use App\Library\Sql;


class Game extends Model {
    protected static $table = 'games';
    protected static $key = 'game_id';

    public function getAllGames() {
    $sql = "select name from games";
    $results = DB::select($sql);
    return $results;
    }

    
}