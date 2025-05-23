@extends('admin.layout')

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-3">
        <x-charts.bar-chart/>

        <x-stat-card heading="Your NPS Score"/>
    </div>



    <x-data-table :records="$records" :total="$total">

        <x-slot:filters>
        @include('components.data-table-filters')
        </x-slot>

    </x-data-table>
@endsection
