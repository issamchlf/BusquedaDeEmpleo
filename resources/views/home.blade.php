@extends('layouts.app')

@section('content')
<div class="overflow-y-auto rounded-lg border max-h-96">
    <div class="overflow-x-auto">
        <div>
            <h2 class="font-semibold text-gray-700">Job Applications</h2>
            <span class="text-xs text-gray-500">List of all applied jobs</span>
        </div>
    </div>
    <div class="overflow-y-hidden rounded-lg border">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                        <th class="px-5 py-3">ID</th>
                        <th class="px-5 py-3">Job Title</th>
                        <th class="px-5 py-3">Category</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3">Created At</th>
                    </tr>
                </thead>
                <tbody class="text-gray-500">
                    @foreach($works as $work)
                        <tr>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $work->id }}</p> 
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $work->job_title }}</p>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $work->category }}</p> 
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <span class="rounded-full px-3 py-1 text-xs font-semibold 
                                    {{ $work->status == 'Active' ? 'bg-green-200 text-green-900' : 
                                       ($work->status == 'Requested' ? 'bg-yellow-200 text-yellow-900' : 'bg-red-200 text-red-900') }}">
                                    {{ $work->status }}
                                </span>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $work->created_at->format("Y/m/d H:i") }}</p> 
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
