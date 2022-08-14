<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliveryTask extends Model
{

    protected $table = 'delivery_tasks';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('eta');







    public function employee()
    {
        return $this->belongsTo('User', 'employee_id');
    }

    public function order()
    {
        return $this->belongsTo('Order');
    }

}
