<?php
 
namespace App\Http\Controllers\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


 
class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('do_logout');
    // }

    public function index()
    {
        return view('pages.admin.auth.main');
    }  
       
 
    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                        ->withSuccess('Signed in');
        }
   
        return redirect("admin/login")->withSuccess('Login details are not valid');
    }
     
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('admin/login');
    }
}