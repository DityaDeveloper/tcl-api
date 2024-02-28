<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mplan extends Model
{
    protected $table = 'm_plan';

    protected $fillable = [
        'id', 'plan', 'created_at', 'updated_by'
    ];

    public $timestamps = false;

    public function getDateFormat()
    {
        return 'U';
    }

}
