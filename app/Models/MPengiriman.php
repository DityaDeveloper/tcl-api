<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MPengiriman extends Model
{
    protected $table = 'm_pengiriman';

    protected $fillable = [
        'id', 'pengiriman_type', 'created_at', 'updated_by'
    ];

    public $timestamps = false;

    public function getDateFormat()
    {
        return 'U';
    }
}
