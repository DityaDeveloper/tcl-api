<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 't_truck';

    protected $fillable = [
        'id', 'truck_type', 'created_at', 'updated_by'
    ];

    public $timestamps = false;

    public function getDateFormat()
    {
        return 'U';
    }
}
