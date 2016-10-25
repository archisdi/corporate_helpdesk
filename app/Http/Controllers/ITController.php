<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use DB;
use Request;
use Auth;
use App\Ticket;
use Illuminate\Support\Facades\App;
use App\Problem;
use App\User;

class ITController extends Controller
{
    public function __construct()
    {
        $this->middleware('IT');
    }

    public function ShowAssignments(){

    	$new = DB::table('tickets')
                    ->where('it_id', Auth::user()->getID())
                    ->where('status_id',[2])
                    ->get();

      $active = DB::table('tickets')
                     ->where('it_id', Auth::user()->getID())
                     ->where('status_id',[4])
                     ->get();

      $denied = DB::table('tickets')
                     ->where('it_id', Auth::user()->getID())
                     ->where('status_id',[6])
                     ->get();

    		return view('user.it.Assignments',compact('new','active','denied'));
    }

    public function ShowAssignmentDetail($id){

        $data = Ticket::where('it_id',Auth::user()->getID())
                      ->findOrFail($id);

    	return view('user.it.AssignmentDetail',compact('data'));
    }

    public function DO(Request $request){

      $data = Request::all();

      $ticket = Ticket::findOrFail($data['id']);

      $pusher = App::make('pusher');

      if($ticket['status_id'] == 2){

        $ticket['status_id'] = 4;

        $pusher->trigger('EMP'.$ticket['employee_id'],'on_process', array('problem' => Problem::find($ticket['problem_id'])->getName(), 'it_name' => User::find($ticket['it_id'])->getName(), 'id' => $ticket['id']));

      }else if($ticket['status_id'] == 4){

        $ticket['status_id'] = 5;

        $pusher->trigger('EMP'.$ticket['employee_id'],'done', array('problem' => Problem::find($ticket['problem_id'])->getName(), 'it_name' => User::find($ticket['it_id'])->getName(), 'id' => $ticket['id']));

      }else if($ticket['status_id'] == 6){

        $ticket['status_id'] = 4;

        $pusher->trigger('EMP'.$ticket['employee_id'],'on_process', array('problem' => Problem::find($ticket['problem_id'])->getName(), 'it_name' => User::find($ticket['it_id'])->getName(), 'id' => $ticket['id']));

      }

      $ticket->save();
      \Session::flash('flash_message','Ticket successfully updated');

      return redirect('assignments');

    }

    public function DONE($id){
      return $id;
    }
}
