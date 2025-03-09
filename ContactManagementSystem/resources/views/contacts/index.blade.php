@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contact List</h2>

    <!-- Add Contact Button -->
    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add Contact</a>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Search and Filter Form -->
    <form method="GET" action="{{ route('contacts.index') }}" class="mb-3 d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search by name or email" value="{{ request('search') }}">
        
        <select name="category" class="form-select">
            <option value="all">All Categories</option>
            <option value="Personal" {{ request('category') == 'Personal' ? 'selected' : '' }}>Personal</option>
            <option value="Business" {{ request('category') == 'Business' ? 'selected' : '' }}>Business</option>
        </select>

        <button type="submit" class="btn btn-secondary">Search</button>
    </form>

    <!-- Contacts Table -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone ?? 'N/A' }}</td>
                <td>{{ $contact->category }}</td>
                <td>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No contacts found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
