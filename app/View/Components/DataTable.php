<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class DataTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public readonly array|Collection|\Illuminate\Support\Collection $records)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
