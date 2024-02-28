<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterPlan extends Model
{
    protected $table = 'register_plan';

    protected $fillable = [
        'id', 'plan', 'partner', 'po_type', 'truck_type', 'pengiriman_type', 'tanggal_in','tanggal_out','no_surat_jalan','no_polisi','tanggal_eta','driver', 'vendor_transporter'
    ];

    public $timestamps = false;

    public function getDateFormat()
    {
        return 'U';
    }
}
