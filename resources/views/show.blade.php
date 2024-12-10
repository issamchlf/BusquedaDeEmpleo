@extends('layouts.app')

@section('content')
<div class="overflow-y-auto rounded-lg border p-4">
    <h2 class="font-semibold text-gray-700">Work Details</h2>
    <h3 class="mt-2 font-semibold text-blue-700">Job Title: {{ $work->job_title }}</h3>
    <ul class="mt-4">
        @if($work->details->isEmpty())
            <p>No details available for this job.</p>
        @else
            @foreach($work->details as $detail)
                <li class="mb-2">
                    <strong>Company Name:</strong> {{ $detail->company_name }} <br>
                    <strong>Location:</strong> {{ $detail->location }} <br>
                    <strong>Comment:</strong> {{ $detail->comment }} <br>
                    <strong>Salary:</strong> {{ $detail->salary }} <br>
                    <strong>URL:</strong> <a href="{{ $detail->URL }}" target="_blank" class="text-blue-500">{{ $detail->URL }}</a>
                </li>
                <hr>
            @endforeach
        @endif
    </ul>
    <a href="{{ route('home') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
        Back to Job Applications
    </a>
</div>
@endsection
