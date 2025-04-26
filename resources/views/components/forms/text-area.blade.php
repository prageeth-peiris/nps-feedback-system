<div>

    <label for="{{$id}}" class="block text-gray-700 font-medium mb-2">{{$label}}</label>
    <textarea id="{{$id}}"  {{$required  ? 'required' : ''}}
              class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
              placeholder="{{$placeholder}}"
              {{$extraAttributes}}
    ></textarea>


</div>
