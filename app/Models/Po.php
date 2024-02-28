<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Po extends Model
{
    protected $table = 'm_po';

    protected $fillable = [
        'id', 'po_type', 'created_at', 'updated_by'
    ];

    public $timestamps = false;

    public function getDateFormat()
    {
        return 'U';
    }
}
