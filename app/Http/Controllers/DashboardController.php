<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Period;
use App\Student;
use App\User;
use App\Import;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        if(Auth::user()->type){
            $period = Period::find(1);
            $tc = User::where('type','!=',true)->count();
            $files = Import::count();
            $ratedStudents = Student::where('rated','=',true)->count();
            $unratedStudents = Student::where('rated','!=',true)->count();
            
            return view('pages.dashboard')->with(['period'=>$period,
                                                    'rs'=>$ratedStudents,
                                                    'urs'=>$unratedStudents,
                                                    'tc' =>$tc,'fl'=>$files]);
        }else{
            $period = Period::find(1);
            $ratedStudents = Auth::user()->students()->where('rated','=',true)->count();
            $unratedStudents = Auth::user()->students()->where('rated','!=',true)->count();
            $tc = null;
            $files = null;
            return view('pages.dashboard')->with(['period'=>$period,'rs'=>$ratedStudents,
                                                    'urs'=>$unratedStudents,
                                                    'tc'=>$tc,'fl'=>$files]);
        }

    }
    
    /*
     * public function getClient(Request $request){
        $client = Client::where('credential','=',$request->identifier)->first();
        if(!is_null($client))
            return view('clients.show')->with('client',$client);
        else {
            Session::flash('flash_message', 'El cliente no existe');
            return redirect()->back();
        }
    }
     * 
     * */

}
