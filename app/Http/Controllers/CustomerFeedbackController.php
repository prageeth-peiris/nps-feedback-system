<?php

namespace App\Http\Controllers;



use App\Http\Requests\StoreCustomerFeedbackRequest;
use App\Services\CustomerFeedback\CustomerFeedbackServiceContract;


class CustomerFeedbackController extends Controller
{


    public function __construct(
        private readonly CustomerFeedbackServiceContract $customerFeedbackServiceContract
    )
    {
    }

    public function store(StoreCustomerFeedbackRequest $request){

            try{

            $this->customerFeedbackServiceContract->save($request->getValidatedData());

            return redirect()->route('thank-you');

            }catch (\Exception $exception){



            }

    }



}
