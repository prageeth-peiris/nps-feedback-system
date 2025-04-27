<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Table Header -->
    <div class="px-6 py-4 border-b border-gray-200 flex justify-between">
        <span>
             <h2 class="text-xl font-semibold text-gray-800">All Customer Feedbacks</h2>
            <p>Total Records : {{$total}}</p>
        </span>

        <a class="w-1/12" href="{{route('export')}}">  <x-forms.button type="reset" label="Export"/></a>

    </div>

 {{$filters}}

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">
                    <div class="flex items-center">
                        Feedback Score
                    </div>
                </th>
                <th class="py-3 px-6 text-left">
                    <div class="flex items-center">
                        Response Group
                    </div>
                </th>
                <th class="py-3 px-6 text-left">
                    <div class="flex items-center">
                        Feedback Message
                    </div>
                </th>
                <th class="py-3 px-6 text-left">
                    <div class="flex items-center">
                        Submitted Date
                    </div>
                </th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">


            @foreach($records as $record)

            <tr class="border-b border-gray-200 hover:bg-gray-50">
                <td class="py-3 px-6 text-left whitespace-nowrap">{{$record->feedback_score}}</td>
                <td class="py-3 px-6 text-left">{{$record->response_group}}</td>
                <td class="py-3 px-6 text-left">{{$record->answer_to_follow_up_question}}</td>
                <td class="py-3 px-6 text-left">{{$record->created_at}}</td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>


</div>
