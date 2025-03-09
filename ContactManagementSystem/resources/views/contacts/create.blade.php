@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Contact</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control" required>
                <option value="" disabled selected>Select Category</option>
                <option value="Personal">Personal</option>
                <option value="Business">Business</option>
            </select>
                </div>
        <button type="submit" class="btn btn-primary">Save Contact</button>
    </form>
</div>
@endsection
