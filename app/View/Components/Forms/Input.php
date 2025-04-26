<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'text', // here type means input type=text type=password
        public string $label = 'Enter Text',
        public string $placeholder = 'Enter Text',
        public string $id = "my-text",
        public bool $required = true,
        public string $extraAttributes = ""  // here define extra attributes like min=0 max=10 etc
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
