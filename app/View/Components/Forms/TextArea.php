<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextArea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label = 'Enter Text',
        public string $placeholder = 'Enter Text',
        public string $id = 'my-textarea',
        public bool $required = true,
        public string $formId = 'my-form',
        public string $extraAttributes = ''  // here define extra attributes row=4

    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.text-area');
    }
}
