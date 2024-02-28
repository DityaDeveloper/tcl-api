<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Mplan;

class PlanController extends Controller
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
        $data = Mplan::all();
        if(count($data) == 0){
            return $this->core->setResponse('error', 'Not Found', NULL, false , 202  );
        } else {
            return $this->core->setResponse('success', 'found data',  $data, true);
        }
    }

    public function store(Request $request){
        $input = $request->all();
        $localtime = Carbon::now();
        $data = [
            'created_at' => $localtime,
            'updated_by' => '1',
            'plan' => $input['plan'],
        ];
        $respon = Mplan::create($data);
        if($respon == null){
            return $this->core->setResponse('error', 'failed to create data', NULL, false , 202  );
        } else {
            return $this->core->setResponse('success', "create data successfully",  $data, true);
        }
    }

    public function destroy(Request $request){
        $input = $request->all();
        $id = $input['id'];
        $data = Mplan::where('id', $id)->first();
        if($data == null){
            return $this->core->setResponse('error', 'failed to delete data', NULL, false , 202  );
        } else {
            $respon = $data->delete();
            return $this->core->setResponse('success', "delete successfully", true);
        }
    }
}
