<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Post;
use App\Culture_Segment;

class Culture extends Model
{
    protected $fillable = [
        'titulo', 'plataforma', 'culture__segments_id'
    ]; 

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
    
    public function culture_segment()
    {
        return $this->belongsTo(Culture_Segment::class, 'culture__segments_id');
    }
    
    public function cultureRating()
    {
        return $this->belongsToMany('App\Rating','culture_ratings_id');
    }
}
