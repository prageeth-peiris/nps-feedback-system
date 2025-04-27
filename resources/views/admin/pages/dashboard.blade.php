@extends('admin.layout')

@section('content')
    <x-data-table :records="$records">

        <x-slot:filters>
        @include('components.data-table-filters')
        </x-slot>

    </x-data-table>
@endsection
