<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Message;
use App\SocialNetwork;
use Illuminate\Http\Request;

use Validator;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $socialNetworks = SocialNetwork::all();
        $contacts = Contact::first();
        return view('front.contact', compact('socialNetworks', 'contacts'));
    }

    public function message(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ];

        $validate = Validator::make($request->post(), $rules);

        if ($validate->fails())
        {
            return redirect()->route('contact')->withErrors($validate)->withInput();
        }

        Mail::send([], [], function ($message) use ($request){
            $message->from('info@local.com', 'Azad Eyvazov Sayt'
            );
            $message->to('azad.eyvazov99@mail.ru');
            $message->setBody('Mesajı göndərən şəxs: ' . $request->name . '<br />
                    Mesaj Göndərən E-poçt: ' . $request->email . '<br />
                    Mövzu: ' . $request->subject . '<br />
                    Mesaj: ' . $request->message . '<br />
                    Mesajın Göndərildiyi Tarix ' . now() . '', 'text/html');
            $message->subject($request->name. 'mesaj göndərdi');

        });

        $contact = new Message;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('success', 'Mesajınız Uğurla Göndərildi');
    }
}
