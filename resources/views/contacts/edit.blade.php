<!-- resources/views/contacts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Contact</h2>
        <form method="POST" action="{{ route('contacts.update', $contact->Code) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Code">Code:</label>
                <input type="text" class="form-control" id="Code" name="Code" value="{{ $contact->Code }}" required>
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $contact->Name }}" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" value="{{ $contact->Email }}" required>
            </div>
            <div class="form-group">
                <label for="Phone">Phone:</label>
                <input type="text" class="form-control" id="Phone" name="Phone" value="{{ $contact->Phone }}" required>
            </div>
            <div class="form-group">
                <label for="Mobile">Mobile:</label>
                <input type="text" class="form-control" id="Mobile" name="Mobile" value="{{ $contact->Mobile }}" required>
            </div>
            <div class="form-group">
                <label for="Street">Street:</label>
                <input type="text" class="form-control" id="Street" name="Street" value="{{ $contact->Street }}">
            </div>
            <div class="form-group">
                <label for="City">City:</label>
                <input type="text" class="form-control" id="City" name="City" value="{{ $contact->City }}">
            </div>
            <div class="form-group">
                <label for="State">State:</label>
                <input type="text" class="form-control" id="State" name="State" value="{{ $contact->State }}">
            </div>
            <div class="form-group">
                <label for="Zip">Zip:</label>
                <input type="text" class="form-control" id="Zip" name="Zip" value="{{ $contact->Zip }}">
            </div>
            <div class="form-group">
                <label for="Country">Country:</label>
                <input type="text" class="form-control" id="Country" name="Country" value="{{ $contact->Country }}">
            </div>
            <div class="form-group">
                <label for="VAT">VAT:</label>
                <input type="text" class="form-control" id="VAT" name="VAT" value="{{ $contact->VAT }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection