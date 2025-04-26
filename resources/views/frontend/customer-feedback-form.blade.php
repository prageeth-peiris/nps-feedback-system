@extends('frontend.layout')

@section('content')

{{--    we have used blade components here --}}
    <x-forms.form title="Give us your feedback">

        <x-forms.input
            label="How likely are you to recommend us? (0-10)"
            type="number"
            extra-attributes="min=0 max=10"
            placeholder="Enter your score"
        />
        <x-forms.text-area
            label="What could we improve? (Optional)"
            extra-attributes="rows=4"
            placeholder="Write your idea here"
            :required="false"
        />

        <x-forms.button/>

    </x-forms.form>


@endsection
