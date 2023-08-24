<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index () {
        $tickets = Support::all();
        return view('admin/support/index', compact('tickets'));
    }

    public function open () {
        return view('admin/support/open');
    }

    public function store (Request $request) {
        $ticket = Support::create([
            'body' => $request->body, 
            'subject' => $request->subject,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);

        return redirect('/support');
    }

    public function show (Request $request) {
        $ticket = Support::find($request->id);

        if (!$ticket) {
            return view('/admin/support/error', ['error' => 'Ticket inexistente']);
        }

        return view('/admin/support/show', compact('ticket'));
    }
}
