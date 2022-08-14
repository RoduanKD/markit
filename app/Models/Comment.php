<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{

    protected $table = 'comments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('commentable_type');
    protected $guarded = [];





    public function author()
    {
        return $this->belongsTo('User', 'author_id');
    }

    public function commentable()
    {
        return $this->morphTo();
    }

}
