<form class="md:flex flex-row flex-wrap justify-between p-3 gap-4" name="filterForm" action="{{route('dashboard')}}" method="GET">


<span class="flex gap-4">
    <x-forms.dropdown
        label="Response Group"
        id="response_group"
        :options="[

        ['Promoter','Promoter'] , ['Detractor','Detractor'] , ['Passive','Passive']

    ]"
        :required="false"

    />

    <x-forms.dropdown
        id="limit"
        label="Record Limit"
        :options="[

        ['10','10'] , ['25','25'] , ['50','50'] , ['100','100']

    ]"
        :required="false"
    />



       <x-forms.dropdown
           id="sortingColumn"
           label="Order By"
           :options="[

      ['id', 'ID'],
    ['feedback_score', 'Score'],
    ['answer_to_follow_up_question', 'Follow-Up Answer'],
    ['response_group', 'Response Group'],
    ['created_at', 'Submitted Date'],

    ]"
           :required="false"
       />

 <x-forms.dropdown
     id="sortingDirection"
     label="Sorting Direction"
     :options="[

        ['asc','Ascending'] , ['desc','Descending']

    ]"
     :required="false"
 />


</span>




    <div class="flex items-end w-1/6 mt-2">
          <span class="w-full flex gap-2">
      <x-forms.button label="Apply"/>
       <x-forms.button type="clear" label="Clear"/>
    </span>
    </div>


</form>
