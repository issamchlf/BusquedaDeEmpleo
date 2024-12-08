@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Work</h2>
    <form action="{{ route('works.store') }}" method="POST">
        @csrf
        <div>
            <label for="job_title">Job Title:</label>
            <input type="text" name="job_title" id="job_title" required>
        </div>
        <div>
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="Active">Active</option>
                <option value="Requested">Requested</option>
                <option value="Closed">Closed</option>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
</div>
@endsection
