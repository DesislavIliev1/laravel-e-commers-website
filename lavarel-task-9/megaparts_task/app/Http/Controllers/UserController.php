<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\SendMail;
use Mail;
use Illuminate\Contracts\Mail\Mailable;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::select("*")
                        ->paginate(10);
          
        return view('admin.users', compact('users'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendEmail(Request $request)
    {
         $users = User::all();
  
         try{
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new SendMail($user));
        }
        }catch(Exeption $e){
             print($e);
        }

        return redirect()->back();
        // return response()->json(['success'=>'Send email successfully.']);
    }
}