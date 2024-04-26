<!-- resources/views/contacts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Contact</h2>
        <form method="POST" action="{{ route('contacts.store') }}">
            @csrf
            <div class="form-group">
                <label for="Code">Code:</label>
                <input type="text" class="form-control" id="Code" name="Code" required>
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="Name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="Phone">Phone:</label>
                <input type="text" class="form-control" id="Phone" name="Phone" required>
            </div>
            <div class="form-group">
                <label for="Mobile">Mobile:</label>
                <input type="text" class="form-control" id="Mobile" name="Mobile" required>
            </div>
            <div class="form-group">
                <label for="Street">Street:</label>
                <input type="text" class="form-control" id="Street" name="Street">
            </div>
            <div class="form-group">
                <label for="City">City:</label>
                <input type="text" class="form-control" id="City" name="City">
            </div>
            <div class="form-group">
                <label for="State">State:</label>
                <input type="text" class="form-control" id="State" name="State">
            </div>
            <div class="form-group">
                <label for="Zip">Zip:</label>
                <input type="text" class="form-control" id="Zip" name="Zip">
            </div>
            <div class="form-group">
                <label for="Country">Country:</label>
                <input type="text" class="form-control" id="Country" name="Country">
            </div>
            <div class="form-group">
                <label for="VAT">VAT:</label>
                <input type="text" class="form-control" id="VAT" name="VAT">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection