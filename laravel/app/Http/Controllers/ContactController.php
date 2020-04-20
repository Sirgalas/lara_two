<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact=new Contact();
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->subject=$req->input('subject');
        $contact->message=$req->input('message');

        $contact->save();
        return redirect()->route('home')->with('success','Сообшение было добавлено');
    }

    public function all(){
        return view('message',['messages'=>Contact::all()]);
    }

    public function one(int $id)
    {
        $contact= new Contact();
        return view('one',['one'=>$contact->find($id),'rands'=>$contact->inRandomOrder()->take(4)->get()]);
    }

    public function update($id)
    {
        $contact= new Contact();
        return view('update',['one'=>$contact->find($id)]);
    }

    public function updateSubmit(int $id,ContactRequest $req)
    {
        $contact=Contact::find($id);
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->subject=$req->input('subject');
        $contact->message=$req->input('message');

        $contact->save();
        return redirect()->route('/one',$id)->with('success','Сообшение было отредактировано');
    }

    public function delete(int $id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect()->route('home')->with('success','Сообшение было удалено');
    }
}
