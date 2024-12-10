@extends('layouts.app')

@section('content')

    <div class="container">
        <div id="search-bar" class="border border-sky-500">
            <form class="flex items-center justify-center p-4 bg-gray-100 rounded-lg shadow-lg">
                <label for="statusFilter" class="text-sm font-semibold text-gray-700 mr-4">
                    Filter By Status:
                </label>
                <select id="statusFilter" class="rounded-md border border-gray-300 px-4 py-2 text-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition">
                    <option value="">All</option>
                    <option value="Active">Active</option>
                    <option value="In progress">In progress</option>
                    <option value="Closed">Closed</option>
                </select>
            </form>
            
        </div>
        <table id="table" class="table-auto w-full border-collapse border border-gray-300 text-sm">
            <thead>
                <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                    <th class="px-2 py-1">Job Title</th>
                    <th class="px-2 py-1">Category</th>
                    <th class="px-2 py-1">Status</th>
                    <th class="px-2 py-1">Created At</th>
                    <th class="px-2 py-1">Updated At</th>
                    <th class="px-2 py-1">Options</th>
                </tr>
            </thead>
            <tbody class="text-gray-500">
                @foreach($works as $work)
                    <tr>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->job_title }}</td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->category }}</td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">
                            <span class="rounded-full px-2 py-1 text-xs font-semibold 
                                {{ $work->status == 'Active' ? 'bg-green-200 text-green-900' : 
                                   ($work->status == 'In progress' ? 'bg-yellow-200 text-yellow-900' : 'bg-red-200 text-red-900') }}">
                                {{ $work->status }}
                            </span>
                        </td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->created_at->format("Y/m/d H:i") }}</td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">{{ $work->updated_at->format("Y/m/d H:i") }}</td>
                        <td class="border-b border-gray-200 bg-white px-2 py-1">
                            <div class="options">
                                <a href="{{ route('show', $work->id) }}">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Details</button>
                                </a>
                                <a  href="{{ route('works.edit', $work->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded my-3">
                                    Edit
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
