<?php

namespace App\Http\Controllers;



use App\Http\Requests\CustomerFeedbackDataTableRequest;
use App\Http\Requests\DataTableRequest;
use App\Http\Requests\StoreCustomerFeedbackRequest;
use App\Services\CustomerFeedback\CustomerFeedbackServiceContract;
use Illuminate\Validation\ValidationException;


class CustomerFeedbackController extends Controller
{


    public function __construct(
        private readonly CustomerFeedbackServiceContract $customerFeedbackServiceContract
    )
    {
    }

    public function store(){


            try{
                // here I have instantiated  the request object here because
                //if I injected it as a dependency then it will throw exception
                // before request comes here. then it is hard to pass data to frontend view
                $request = new StoreCustomerFeedbackRequest();



            $this->customerFeedbackServiceContract->save($request->getValidatedData());



            return redirect()->route('thank-you');

            }catch (ValidationException $exception){


                  return redirect()->back()->withErrors($exception->errors());

            }

    }


    public function list(CustomerFeedbackDataTableRequest $dataTableRequest)
    {

       try{

       $records =  $this->customerFeedbackServiceContract->retrieve($dataTableRequest->getValidatedData());

       return view('admin.pages.dashboard',compact('records'));
       }catch (\Exception $exception){

       }


    }



}
