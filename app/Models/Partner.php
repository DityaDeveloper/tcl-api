<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partner';

    protected $fillable = [
        'id', 'name', 'created_at', 'updated_by'
    ];

    public $timestamps = false;

    public function getDateFormat()
    {
        return 'U';
    }
}
