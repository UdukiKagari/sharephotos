<?php

namespace App\Http\Controllers;

use Request;

class SearchController extends Controller
{

    // 検索処理
    public function getSearch(Request $request)
    {
        $getQuery = Request::get('s');
        $query = str_replace("　"," ", $getQuery);
        $query = explode(" ", $query);
        var_dump($query);
        return view('search.list', compact('query'));
        //return view('search.list', compact('query'));
    }

}
