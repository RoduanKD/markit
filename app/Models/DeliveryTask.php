<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliveryTask extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['employee_id', 'order_id', 'eta'];

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function order()
    {
        return $this->belongsTo(order::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
