<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use Auth;
use DB;
use App\Ticket;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use App\Problem;

class OperatorController extends Controller
{

	public function __construct()
    {
        $this->middleware('operator');
    }

    public function ShowNew(){

    	$datas = DB::table('tickets')
    			   ->where('status_id',[1])
    			   ->get();

    	return view('user.operator.ShowNewTickets',compact('datas'));
    }

    public function RespondTicket($id){
    	
    	$data = Ticket::where('status_id',[1])->findOrFail($id);

    	$supports = User::where('role','it')->get()->lists('name', 'id');

    	return view('user.operator.RespondTicket',compact('data','supports'));
    }

    public function ProcessRespond(Request $request){
    	
    	$data = Request::all();

        $pusher = App::make('pusher');

    	if($data['respond_id'] == 1){

    	$ticket = Ticket::findOrFail($data['id']);
    	$ticket['it_id'] = $data['it_id'];
    	$ticket['operator_id'] = Auth::user()->getID();
    	$ticket['status_id'] = 2;

    	\Session::flash('flash_message','Ticket successfully updated');

        $pusher->trigger('IT'.$data['it_id'],'new_assignment', array('problem' => Problem::find($ticket['problem_id'])->getName(), 'employee_name' => User::find($ticket['employee_id'])->getName(), 'bureau' => User::find($ticket['employee_id'])->getBureau()));

    }else{
    	
    	$ticket = Ticket::findOrFail($data['id']);
    	$ticket['operator_id'] = Auth::user()->getID();
    	$ticket['status_id'] = 3;
    	$ticket['temp'] = $data['temp'];
    	$ticket['closed_at'] = Carbon::now();

    	\Session::flash('flash_message','Ticket successfully updated');

        $pusher->trigger('EMP'.$ticket['employee_id'],'reject', array('id' => $ticket['id'],  'reason' => $ticket['temp']));

    }

    $ticket->save();
    return redirect('tickets/new');

    }

    
}