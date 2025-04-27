<div>

    @error($id)
    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
    @enderror
    <label for="{{$id}}" class="block text-gray-700 font-medium mb-2">{{$label}}</label>


    <select id="{{$id}}"  {{$required ? 'required' : ''}}
    name="{{$id}}"
            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200"
        {{$extraAttributes}}
    >
        <option value="">Not Selected</option>

        @foreach($options as $option)
{{--            here option variable must be an array whose 0 index must value and 1 index must be display name--}}
            <option value="{{$option[0]}}"  {{ $isSelected($option[0]) ? 'selected' : '' }}>{{$option[1]}}</option>
        @endforeach
    </select>


</div>
