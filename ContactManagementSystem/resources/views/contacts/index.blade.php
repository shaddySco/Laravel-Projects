@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contact List</h2>

    <!-- Add Contact & Download PDF Buttons -->
    <div class="d-flex gap-2 mb-3">
        <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add Contact</a>
        <a href="{{ route('contacts.export-pdf') }}" class="btn btn-outline-danger">Download PDF</a>
    </div>

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
        <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Reset</a>
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

                    <!-- Delete Button (Triggers Modal) -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $contact->id }}">
                        Delete
                    </button>
                </td>
            </tr>

            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete <strong>{{ $contact->name }}</strong>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @empty
            <tr>
                <td colspan="5" class="text-center">
                    <p>No contacts found.</p>
                    <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-primary">Add a Contact</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->

</div>
@endsection
