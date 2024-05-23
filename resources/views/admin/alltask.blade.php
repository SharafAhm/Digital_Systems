@extends('layouts.app')

@section('content')
<x-table.table-panel tableName="Tasks" :paginatorAttr="$tasks">
    <div class="container flex items-center">
        <!-- Simplify the search forms -->
        <div class="flex space-x-4">
            <form method="GET" action="{{ route('tasks.search') }}">
                <x-form.input inputName="search_date" type="date" value="{{ request('search_date') }}" />
                <x-form.button buttonName="Search Date" />
            </form>

            <form method="GET" action="{{ route('tasks.search') }}">
                <x-form.input inputName="search_text" value="{{ request('search_text') }}" />
                <x-form.button buttonName="Search" />
            </form>
        </div>
    </div>
    <thead>
        <tr>
            <x-table.table-head thName="Date Created" />
            <x-table.table-head thName="Task Name" />
            <x-table.table-head thName="Created By" />
            <x-table.table-head thName="Assigned to" />
            <x-table.table-head thName="Due Date" />
            <x-table.table-head thName="Completed" />
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr class="hover:bg-grey-lighter">
            <x-table.table-data tdName="{{ $task->created_at->format('d/m/Y') }}" />
            <td class="py-4 px-6 border-b border-grey-light">
                <a href="{{ route('tasks.show', $task) }}" class="underline"> {{ ucwords($task->title) }}</a>
            </td>
            <x-table.table-data tdName="{{ $task->creator->name }}" />
            <x-table.table-data tdName="{{ $task->assignee->name }}" />
            <x-table.table-data tdName="{{ $task->due->format('d/m/Y') }}" />
            <x-table.table-data tdName="{{ $task->completed ? 'Yes' : 'No' }}" />
        </tr>
        @endforeach
    </tbody>
</x-table.table-panel>
@endsection