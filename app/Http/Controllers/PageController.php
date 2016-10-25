<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Ticket;
use App\Bureau;
use App\Problem;
use App\Http\Controllers\HelpdeskController;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function index()
    {
        return redirect('login');
    }

    public function home()
    {
        if(Auth::user()->getRole() == 'employee'){

            $datas =  DB::table('tickets')
                        ->where('employee_id', Auth::user()->getID())
                        ->get();

            return view('user.layouts.home',compact('datas'));
            
        }else if(Auth::user()->getRole() == 'it'){

            $handled = Ticket::where('status_id',[7])->where('it_id',Auth::user()->getID())->count();
            $active  = Ticket::where('status_id',2,[4,5])->where('it_id',Auth::user()->getID())->count();
            $denied  = Ticket::where('status_id',[6])->where('it_id',Auth::user()->getID())->count();
            $total   = Ticket::where('it_id',Auth::user()->getID())->count();

            return view('user.layouts.home',compact('handled','active','denied','total'));            

        }else if(Auth::user()->getRole() == 'operator'){

            $all = Ticket::all()->count();
            $done = Ticket::where('status_id',3,7)->count();
            $queue = Ticket::where('status_id',1,2)->count();
            $progress = Ticket::where('status_id',2,[4,5])->count();

            $bureaus = Bureau::all();

            $problems = Problem::all();

            return view('user.layouts.home',compact('all','done','queue','progress','bureaus','problems'));

        }
        
    }

    public function profile()
    {    
        return view('user.layouts.profile');
    }

    public function ShowTicket($id){
        if(Auth::user()->getRole() == 'employee'){

            $data = Ticket::where('employee_id', Auth::user()->getID())->findOrFail($id);

            return view('user.layouts.ticketdetails',compact('data'));
            

        }else if(Auth::user()->getRole() == 'it'){

            $data = Ticket::where('it_id', Auth::user()->getID())->findOrFail($id);

            return view('user.layouts.ticketdetails',compact('data'));            

        }else if(Auth::user()->getRole() == 'operator'){

            $data = Ticket::findOrFail($id);

            return view('user.layouts.ticketdetails',compact('data'));

        }
    }

    public function ViewTicket($id){
        if(Auth::user()->getRole() == 'employee'){

            if($id == 'all'){

                $datas =  DB::table('tickets')
                            ->where('employee_id', Auth::user()->getID())
                            ->get();

                return view('user.layouts.tickets',compact('datas'));

            }else if ($id == 'active'){

                $datas =  DB::table('tickets')
                            ->where('employee_id', Auth::user()->getID())
                            ->whereNotIn('status_id', [3,7])
                            ->get();

                return view('user.employee.ShowActiveTickets',compact('datas'));

            }else{
                abort(404);
            }

        }else if(Auth::user()->getRole() == 'it'){

            if($id == 'all'){

                $datas =  DB::table('tickets')
                            ->where('it_id', Auth::user()->getID())
                            ->get();

                return view('user.layouts.tickets',compact('datas'));

            }else{
                abort(404);
            }

        }else if(Auth::user()->getRole() == 'operator'){

            if($id == 'all'){

                $pending =  DB::table('tickets')
                            ->where('status_id', [2])
                            ->get();

                $process =  DB::table('tickets')
                            ->where('status_id', [4])
                            ->get();

                $waiting =  DB::table('tickets')
                            ->where('status_id', [5])
                            ->get();

                $creject =  DB::table('tickets')
                            ->where('status_id', [6])
                            ->get();

                $closed  =  DB::table('tickets')
                            ->where('status_id', [7])
                            ->get();

                $reject  =  DB::table('tickets')
                            ->where('status_id', [3])
                            ->get();


                return view('user.layouts.tickets',compact('pending','process','waiting','creject','closed','reject'));

            }else{
                abort(404);
            }

        }

    }

}