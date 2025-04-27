<div>
    @error($id)
    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
    @enderror
    <label for="{{$id}}" class="block text-gray-700 font-medium mb-2">{{$label}}</label>
{{--    textarea value does not include in form submission unless form attribute is supplied--}}

    <textarea id="{{$id}}"  {{$required  ? 'required' : ''}} name="{{$id}}" form="{{$formId}}"
              class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
              placeholder="{{$placeholder}}"
              {{$extraAttributes}}
    ></textarea>


</div>
