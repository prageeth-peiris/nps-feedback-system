@extends('admin.layout')

@section('content')
    <x-data-table :records="$records"/>
@endsection
