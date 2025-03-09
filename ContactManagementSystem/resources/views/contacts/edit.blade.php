@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Contact</h2>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $contact->name }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $contact->email }}" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{ $contact->category }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Contact</button>
    </form>
</div>
@endsection
