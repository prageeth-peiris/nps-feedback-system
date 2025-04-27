<form class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md" action="{{$action}}" method="{{$method}}">
    @csrf
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">{{$title}}</h1>

{{$slot}}

</form>
