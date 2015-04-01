<?php 
namespace App\Models;

use DB;
use App\Library\Sql;


class Comment extends Model {
    protected static $table = 'comments';
    protected static $key = 'comment_id';

    public function getAllComments() {
    $sql = "select comment_body from comments";
    $results = DB::select($sql);
    return $results;
    }

    
}