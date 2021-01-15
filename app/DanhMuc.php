<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danhmuc';
    protected $primaryKey = 'iddanhmuc';
    public $timestamps = false;
    public static function getAllCategories() {
        $all = DanhMuc::get();
        return $all;
    }
    public static function getCategory($iddm) {
        $category = DanhMuc::where('iddanhmuc','=',$iddm)->first();
        return $category;
    }
    public static function updateCategory($iddm,$tenmoi,$imgdanhmuc) {
        $category = DanhMuc::find($iddm);
        $category->tendanhmuc = $tenmoi;
        $category->imgdanhmuc = $imgdanhmuc;
        $category->save();
        return true;
    }
    public static function deleteCategory($iddm) {
        $gameincatrgory = \App\Game::where('iddm','=',$iddm)->get();
        foreach($gameincatrgory as $game) {
            $game = \App\Game::find($game->id);
            $game->iddm = 33;
            $game->save();
        }
        DanhMuc::where('iddanhmuc','=',$iddm)->delete();
        return true;
    }
    public static function addDanhMuc($tendanhmuc,$imgdanhmuc) {
        $category = new DanhMuc();
        $category->tendanhmuc = $tendanhmuc;
        $category->imgdanhmuc = $imgdanhmuc;
        $category->save();
        return true;
    }
}
