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

        //echo '<pre>'.$getQuery.'</pre>';

        return view('search.list');
    }

}
