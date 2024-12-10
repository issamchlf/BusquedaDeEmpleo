@extends('layouts.app')

@section('content')
<form action="{{ route('works.update', $work->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="buttons">
    <label class="block text-sm font-medium text-gray-700"></label>
    <input  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" type="text" name="job_title" value="{{ $work->job_title }}" required>
    <input  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" type="text" name="category" value="{{ $work->category }}" required>
    <select  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" name="status">
        <option value="Active" {{ $work->status == 'Active' ? 'selected' : '' }}>Active</option>
        <option value="In progress" {{ $work->status == 'In progress' ? 'selected' : '' }}>In progress</option>
        <option value="Closed" {{ $work->status == 'Closed' ? 'selected' : '' }}>Closed</option>
    </select>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3" >Save</button>
    </div>
</form>
@endsection
