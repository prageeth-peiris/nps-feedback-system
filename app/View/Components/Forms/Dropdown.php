<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    /**
     * Create a new component instance.
     */

    // should pass options to dropdown as this.ex.  [  ['name','Full Name'] , ['age','Age'] ]
    public function __construct(public readonly array $options,

                                public string $label = 'Enter Text',
                                public string $id = "my-text",
                                public bool $required = true,
                                public string $extraAttributes = "" ) // here define extra attributes like selected
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.dropdown');
    }

    public function isSelected($option_value): bool
    {
        //if the request parameter is equal to the select option value then it should be selected
        //this method can be invoked in blade view. we pass select option value
        return $option_value === request()->get($this->id);
    }

}
