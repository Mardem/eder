<?php

namespace App\Http\Controllers\Principal;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    public function index()
    {
        return view('principal.contact');
    }

    public function save(Request $request)
    {
        try {
            Contact::create($request->all());
            return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso!');
        } catch (\Exception $exception) {
            return redirect()->withInput(Input::all())->with('error', 'Infelizmente não foi possível enviar sua mensagem, tente novamente.');
        }
    }
}
