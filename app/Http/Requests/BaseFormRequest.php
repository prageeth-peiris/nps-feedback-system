<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// created this abstract Form Request class because when default Laravel form request is resolved
// via dependency injection it will interfere the application data flow.
// this way validation behaviour is more customizable
abstract class BaseFormRequest
{
    public function __construct(
        public readonly Request $request,
    ) {}

    abstract public function rules(): array;

    abstract public function getValidatedData(): mixed;

    public function validate(): void
    {
        Validator::make($this->request->all(), $this->rules())->validate();
    }
}
