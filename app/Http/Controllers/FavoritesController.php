<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FavoritesController extends Controller
{
    //投稿をお気に入りに追加
    //@param  $id  相手投稿のid
    public function store($id)
    {
       //認証済みユーザ（閲覧者）が、idの投稿をお気に入り追加する 
       \Auth::user()->favorite($id);
       //前のURLへリダイレクトする
       return back();
    }
    
    //投稿をお気に入りから外す
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入りから外す
        \Auth::user()->unfavorite($id);
        // 前の画面へリダイレクトする
        return back();
    }
}
