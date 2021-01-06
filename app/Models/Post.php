<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable = [
        "title", "body", "iframe","image" ,"user_id"
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getExceprtAttribute(){
        return Str::words($this->body, 40);
    }

    public function getImageurlAttribute(){
        return Storage::disk("public")->url($this->image);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    /*public function getRouteKeyName()
    {
        return 'slug';
    } */
}
