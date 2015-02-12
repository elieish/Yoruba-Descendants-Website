<?php

class ChaptersController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function getIndex()
    {
        return View::make('chapters.index');
    }

     public function postSubmit()
    {
        //Get Form Data
        $data       = Input::all();

        // Flashing Input to the session
        Input::flash();

        //Validation rules
        $rules      = array (
                        'name'      =>  'required',
                        'email'     =>  'required|email',
                        'subject'   =>  'required',
                        'message'   =>  'required'
        );

        $emails     = array('elieish@gmail.com','denniscool2@gmail.com','info@yorubadescendants.com');

        //Validate data
        $validator  = Validator::make ($data , $rules);

        if ($validator -> passes()){

            Mail::send('emails.chapters', $data, function($message) use ($data,$emails)
            {
                $message->from('info@yorubadescendants.com');
                foreach ($emails as $email) {
                   $message->to($email)->subject('Yoruba Descendants Contact Request');
                }

            });

            // redirect
            Session::flash('message', 'Message Sent Successful');
            return Redirect::to('chapters');
        }
        else {
             Session::flash('error', 'Errors on the form,please resubmit');
            return Redirect::to('chapters')->withErrors($validator)->withInput();
        }

    }

}
