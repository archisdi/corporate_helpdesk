<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Problem;
use App\Ticket;
use App\Http\Requests\NewTicketRequest;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use App\User;


class employeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('employee');
    }

    public function CreateTicket(){

        $problems = Problem::lists('name', 'id');

        return view('user.employee.CreateTicket',compact('problems'));
    }

    public function StoreTicket(NewTicketRequest $request){

        $newTicket = Request::all();
        $newTicket['employee_id'] = Auth::user()->getID();
        $newTicket['bureau_id'] = Auth::user()->bureau_id;
        $newTicket['status_id'] = 1;

        Ticket::create($newTicket);
        \Session::flash('flash_message','Your ticket has been successfully inserted.');

        $pusher = App::make('pusher');

        $pusher->trigger('Operator_channel','new_ticket', array('employee_name' => Auth::user()->getName(),'bureau' => Auth::user()->getBureau()));

        return redirect('ticket/create');

    }

    public function Confirmation(Request $request){
        $data = Request::all();

        $pusher = App::make('pusher');

        if($data['respond_id'] == 1){

            $ticket = Ticket::findOrFail($data['id']);
            $ticket['status_id'] = 7;
            $ticket['closed_at'] = Carbon::now();
            $ticket['temp'] = null;

            \Session::flash('flash_message','Ticket Closed');

            $pusher->trigger('IT'.$ticket['it_id'],'closed', array('problem' => Problem::find($ticket['problem_id'])->getName(), 'employee_name' => User::find($ticket['employee_id'])->getName(), 'bureau' => User::find($ticket['employee_id'])->getBureau(), 'id' => $ticket['id']));

        }else{

            $ticket = Ticket::findOrFail($data['id']);
            $ticket['temp'] = $data['temp'];
            $ticket['status_id'] = 6;

            \Session::flash('flash_message','Ticket Completion Denied');

            $pusher->trigger('IT'.$ticket['it_id'],'denied', array('problem' => Problem::find($ticket['problem_id'])->getName(), 'employee_name' => User::find($ticket['employee_id'])->getName(), 'bureau' => User::find($ticket['employee_id'])->getBureau(), 'id' => $ticket['id'], 'reason' => $ticket['temp']));

        }

        $ticket->save();
        return redirect('tickets/view/active');
    }

    public function showManual(){

        return response()->download('uploads/manual.pdf');

    }
    
}
