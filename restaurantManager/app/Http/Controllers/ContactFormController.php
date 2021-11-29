<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Mail;

  use App\Http\Requests;
  use App\Http\Controllers\Controller;

  class ContactFormController extends Controller
  {
    public function submit(Request $request) {
      $this->validate($request, [
          'name' => 'required|string',
          'email' => 'required|email',
          'message' => 'required',
          'subject' => 'required'
      ]);
      $name=$request['name'];
      $email=$request['email'];
      $title=$request['subject'];
      $message=$request['message'];

      $data = array('name'=>"Virat Gandhi");

      Mail::raw($message, function($message) use ($title, $name, $email){
          $message->to(YOUR_EMAIL, YOUR_NAME)->subject
              ($title);
          $message->from($email, $name);
      });
      echo "Your email has been send!";

      return response()->json(null, 200);
    }
  }