@extends('layouts.app')

@section('content')
<div class="overflow-y-auto rounded-lg border p-0 m-0">
    <div class="overflow-x-auto">
        <div class="p-4">
            <h2 class="font-semibold text-gray-700">Job Applications</h2>
            <span class="text-xs text-gray-500">List of all applied jobs</span>
        </div>
    </div>
    <div class="overflow-y-hidden">
        <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
            <thead>
                <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                    <th class="px-2 py-1">ID</th>
                    <th class="px-2 py-1">Job Title</th>
                    <th class="px-2 py-1">Category</th>
                    <th class="px-2 py-1">Status</th>
                    <th class="px-2 py-1">Created At</th>
                </tr>
            </thead>
            <tbody class="text-gray-500">
                @foreach($works as $work)
                    <tr>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->id }}</td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->job_title }}</td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->category }}</td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">
                            <span class="rounded-full px-2 py-1 text-xs font-semibold 
                                {{ $work->status == 'Active' ? 'bg-green-200 text-green-900' : 
                                   ($work->status == 'Requested' ? 'bg-yellow-200 text-yellow-900' : 'bg-red-200 text-red-900') }}">
                                {{ $work->status }}
                            </span>
                        </td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->created_at->format("Y/m/d H:i") }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection