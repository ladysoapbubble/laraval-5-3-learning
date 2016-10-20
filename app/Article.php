<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $fillable = ['name',
        'text',
        'published_at',
        'slug'
    ];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function scopePublished($query) {

        $query->where('published_at', '<=', Carbon::now());
    }

    public function setSlugAttribute($slug) {
        $this->attributes['slug'] = str_slug($this->attributes['name']);
    }

/*    public function getRouteKeyName()
    {
        return 'slug';
    }*/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }


    /**
     * Get the tags associated with the given article
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
