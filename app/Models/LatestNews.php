<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'rating',
        'datetime',
        'agency'
    ];

    public function createNews($news){
        $result = $this->create($news);
        return $result;
    }

    public function getNewsOrderByDatetimeAsc(){
        $news = $this->orderBy('datetime', 'asc')->get();
        return $news;
    }

    public function getNewsOrderByDatetimeDesc(){
        $news = $this->orderBy('datetime', 'desc')->get();
        return $news;
    }

    public function getNewsOrderByRatingAsc(){
        $news = $this->orderBy('rating', 'asc')->get();
        return $news;
    }

    public function getNewsOrderByRatingDesc(){
        $news = $this->orderBy('rating', 'desc')->get();
        return $news;
    }

}
