<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;
use App\Status;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function index()
    {
        $objLatestNews = new LatestNews();
        $news = $objLatestNews->getNewsOrderByDatetimeDesc();
        return view('news',compact('news'));
    }

    public function DatetimeAsc()
    {
        $objLatestNews = new LatestNews();
        $news = $objLatestNews->getNewsOrderByDatetimeAsc();
        return view('news',compact('news'));
    }

    public function RatingDesc()
    {
        $objLatestNews = new LatestNews();
        $news = $objLatestNews->getNewsOrderByRatingDesc();
        return view('news',compact('news'));
    }

    public function RatingAsc()
    {
        $objLatestNews = new LatestNews();
        $news = $objLatestNews->getNewsOrderByRatingAsc();
        return view('news',compact('news'));
    }

    public function store(Request $request)
    {
        $input=$request->all();
        $objLatestNews = new LatestNews();
        foreach ($input['latestnews'] as $news){
            $keys = str_replace( ' ', '', array_keys( $news ) );
            $news = array_combine( $keys, array_values( $news ) );
            $originalDate = $news['datetime'];
            $originalDate = substr($originalDate, 5);
            $newDate = date("d-m-Y H:i", strtotime($originalDate));
            $news['datetime'] = $newDate;
            $latestNews = array_change_key_case($news, CASE_LOWER);
            $latestNews['agency']=$input['agency'];
            $result = $objLatestNews->createNews($latestNews);
        }
        $arr['data'] = $input['latestnews'];
        $arr = Status::mergeStatus($arr,200);
        return $arr;
    }

}
