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
}
