<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth:api', [

            'except' => [
                'index',
                'register',
                'login',
            ],

        ]);
    }

    public function index(){
        $data = User::all();
        if(count($data) == 0){
            return $this->core->setResponse('error', 'Not Found', NULL, false , 202  );
        } else {
            return $this->core->setResponse('success', 'found data',  $data, true);
        }
    }

    public function login(Request $request){
        $input = $request->all();
        $email = $input['email'];
        $password = $input['password'];

        $user = User::where('email', $input['email'])->first();

        if( !$user){
            return $this->core->setResponse('error', 'user not found', NULL, false , 203  );
        }
        $pw = $user->password;
        if( !Hash::check($password, $pw)){
            return $this->core->setResponse('error', 'email & password incorrect', NULL, false , 203  );
        }

        $token = \Auth::login($user);
        return $this->respondWithToken($token, 'login');
    }

    public function register(Request $request){
        $input = $request->all();

        $localtime = Carbon::now();
        $data = [
            'created_at' => $localtime,
            'updated_by' => '1',
            'email' => $input['email'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
        ];
        $respon = User::create($data);
        if($respon == null){
            return $this->core->setResponse('error', 'failed to create data', NULL, false , 202  );
        } else {
            return $this->core->setResponse('success', "create data successfully",  $data, true);
        }

    }

    protected function respondWithToken($token, $action = null)
    {
        $data = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * config('auth.jwt.expires_in', 2880),
        ];

        return $this->core->setResponse('success', "Successfully $action", $data );
    }

}
