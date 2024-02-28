<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\RegisterPlan;

class RegisterPlanController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api', [

            'except' => [
                'index',
                'store',
                'destroy',
            ],

        ]);
    }

    public function index(){
        $data = RegisterPlan::all();
        if(count($data) == 0){
            return $this->core->setResponse('error', 'Not Found', NULL, false , 202  );
        } else {
            return $this->core->setResponse('success', 'found data',  $data, true);
        }
    }

    public function store(Request $request){
        $input = $request->all();
        $data = [
            'plan' => $input['plan'],
            'partner' => $input['partner'],
            'po_type' => $input['po_type'],
            'truck_type' => $input['truck_type'],
            'pengiriman_type' => $input['pengiriman_type'],
            'tanggal_in' => $input['tanggal_in'],
            'tanggal_out' => $input['tanggal_out'],
            'no_surat_jalan' => $input['no_surat_jalan'],
            'no_polisi' => $input['no_polisi'],
            'tanggal_eta' => $input['tanggal_eta'],
            'driver' => $input['driver'],
            'vendor_transporter' => $input['vendor_transporter'],
        ];
        $respon = RegisterPlan::create($data);
        if($respon == null){
            return $this->core->setResponse('error', 'failed to create data', NULL, false , 202  );
        } else {
            return $this->core->setResponse('success', "create data successfully",  $data, true);
        }
    }

    public function destroy(Request $request){
        $input = $request->all();
        $id = $input['id'];
        $data = RegisterPlan::where('id', $id)->first();
        if($data == null){
            return $this->core->setResponse('error', 'failed to delete data', NULL, false , 202  );
        } else {
            $respon = $data->delete();
            return $this->core->setResponse('success', "delete successfully", true);
        }
    }
}
