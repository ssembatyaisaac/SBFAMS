<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use App\Models\Accountant;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            $current_date = Carbon::now();
            $sem_1 = new Carbon('first day of August');
            $sem_2 = new Carbon('first day of January');
            if ($current_date >= $sem_1 & $current_date <= $sem_2) {
                $academic_year = $current_date->year."/".$current_date->addYear(1)->year;
                $semster = 1;
                //Storing academic year and semster in session
                session(['academic_year'=>$academic_year]);
                session(['semster'=>$semster]);

            } else if ($current_date >= $sem_2 & $current_date <= $sem_1) {
                $academic_year = $current_date->year."/".$current_date->addYear(1)->year;
                $semster = 2;

                session(['academic_year'=>$academic_year]);
                session(['semster'=>$semster]);
            }

            if (auth()->user()->role == 'Student') {
                $user_id = auth()->user()->id;
                //Retrieve student from array
                $student = Student::where('user_id', $user_id)->get()[0];
                //Store session of Student
                session(['user'=>$student]);
                return redirect()->route('student.show' ,['student'=>$student]);
            } elseif (auth()->user()->role == 'Admin'){
                $user_id = Auth::user()->id;
                $admin = Admin::where('user_id', $user_id)->get()[0];
                //Store session of admin
                session(['user'=>$admin]);
                return redirect()->route('admin.show', compact('admin'));
            } elseif (auth()->user()->role == 'Accountant') {
                $user_id = Auth::user()->id;
                $accountant = Accountant::where('user_id', $user_id)->first();
                //Store session of admin
                session(['user'=>$accountant]);
                return redirect()->route('accountant.show', $accountant);
            } elseif (auth()->user()->role == 'Super User') {
                return redirect()->route('superUser');
            }
            else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
