<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }
    public function create()
    {
        return view('contacts.create');
    }
     public function store(ContactRequest $request)
    {
        $validatedData = $request->validated();
        $contact = Contact::create($validatedData);
        return new ContactResource($contact);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $validatedData = $request->validated();
        $contact->update($validatedData);
        return new ContactResource($contact);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json(null, 204);
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $contacts = Contact::where('Name', 'like', "%$query%")->get();
        return ContactResource::collection($contacts);
    }
}
