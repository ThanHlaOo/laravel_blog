<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class UserManagerController extends Controller
{
    public function index(){
        $users = User::all();
        if(Gate::allows('admin-only')){
            return view('user-manager.index', ['users' => $users]);
        }else{
            return redirect()->back()->with('alert', ['icon' => 'error', 'title' => 'access Denied']);
        }
    }
    public function suspended($id){
        
        $user = User::find($id);
        $user->suspended = '1';
        $user->update();
        return redirect()->back()->with('alert', ['icon' => 'warning', 'title' => "$user->name is blocked!"]);
    }
    public function unsuspended($id){
       
        $user = User::find($id);
        $user->suspended = '0';
        $user->update();
        return redirect()->back()->with('alert', ['icon' => 'info', 'title' => "$user->name is unblocked!"]);
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function changeRole($id){
        $user = User::find($id);
        $user->role_id = request('role');
        $user->update();
        return redirect()->back()->with('alert', ['icon' => 'success', 'title' => "$user->name's role is changed!"]);
    }

    public function changePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|max:255'
        ]);
        if($validator->fails()){
            return response()->json(["status"=>422,"message"=>$validator->errors()]);
        }
        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->update();
        return response()->json(["status"=>200,"message"=>"Password Change for $user->name is complete"]);

    }
}
