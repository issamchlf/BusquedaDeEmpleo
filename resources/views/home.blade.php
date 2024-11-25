@extends('layouts.app')
@section('content')
<div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8">
    <div class="flex items-center justify-between pb-6">
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
                    @foreach($applications as $application)
                        <tr>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $application->id }}</p>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $application->{"Job Title"} }}</p>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $application->Category }}</p>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <span class="rounded-full px-3 py-1 text-xs font-semibold 
                                    {{ $application->Status == 'Active' ? 'bg-green-200 text-green-900' : 
                                       ($application->Status == 'Requested' ? 'bg-yellow-200 text-yellow-900' : 'bg-red-200 text-red-900') }}">
                                    {{ $application->Status }}
                                </span>
                            </td>
                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                <p class="whitespace-no-wrap">{{ $application->created_at->format("Y/m/d H:i") }}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection