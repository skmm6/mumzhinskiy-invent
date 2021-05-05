<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\TechRequest;
use App\Models\Techinv;

class TechController extends Controller{
    
    public function submit(TechRequest $req) {

        $techinv = new Techinv();
        $techinv->invent = $req->input('invent');
        $techinv->name = $req->input('name');
        $techinv->col = $req->input('col');
        $techinv->price = $req->input('price');
        $techinv->message = $req->input('message');


        $techinv->save();

        return redirect()->route('home')->with('success', 'Оборудование было добавлено');
         
    }

    public function allData() {
        $techinv = new Techinv;
        // $contact->orderBy('id', 'asc')->skip(1)->take(3)->get()
       return view('massages', ['data' => $techinv->all()]);
        
    }


    public function showOneMassage($id) {
        $techinv = new Techinv;
        return view('one-massages', ['data' => $techinv->find($id)]);
    }

    public function updateMessage($id) {
        $techinv = new Techinv;
        return view('update-massages', ['data' => $techinv->find($id)]);
    }

    public function updateMessageSubmit($id, TechRequest $req) {

        $techinv = Techinv::find($id);
        $techinv->invent = $req->input('invent');
        $techinv->name = $req->input('name');
        $techinv->col = $req->input('col');
        $techinv->price = $req->input('price');
        $techinv->message = $req->input('message');

        $techinv->save();

        return redirect()->route('contact-date-one', $id)->with('success', 'Сообщение было обновлено');
         
    }

    public function deleteMessage($id) {
        Techinv::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }


}
