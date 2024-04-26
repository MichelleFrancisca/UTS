<!-- resources/views/contacts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Contact List</h2>
        <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add Contact</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->Code }}</td>
                    <td>{{ $contact->Name }}</td>
                    <td>{{ $contact->Email }}</td>
                    <td>{{ $contact->Phone }}</td>
                    <td>{{ $contact->Mobile }}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection