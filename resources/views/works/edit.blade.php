@extends('layouts.app')

@section('content')
<form action="{{ route('works.update', $work->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="job_title" value="{{ $work->job_title }}" required>
    <input type="text" name="category" value="{{ $work->category }}" required>
    <select name="status">
        <option value="Active" {{ $work->status == 'Active' ? 'selected' : '' }}>Active</option>
        <option value="Requested" {{ $work->status == 'Requested' ? 'selected' : '' }}>Requested</option>
        <option value="Closed" {{ $work->status == 'Closed' ? 'selected' : '' }}>Closed</option>
    </select>
    <button type="submit" >Save</button>
</form>
@endsection
