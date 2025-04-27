@extends('frontend.layout')

@section('content')

{{--    we have used blade components here --}}
{{--    textarea value does not include in form submission unless form attribute is supplied--}}
    <x-forms.form title="Give us your feedback"
                  :action="route('create-customer-feedback')"
                  method="POST"
                  id="feedback-form"

    >

        <x-forms.input
            label="How likely are you to recommend us? (0-10)"
            type="number"
            extra-attributes="min=0 max=10"
            placeholder="Enter your score"
            id="feedback_score"
        />
        <x-forms.text-area
            label="What could we improve? (Optional)"
            extra-attributes="rows=4"
            placeholder="Write your idea here"
            :required="false"
            id="feedback_message"
            form-id="feedback-form"
        />

        <x-forms.button/>

    </x-forms.form>


@endsection
