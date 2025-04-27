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


    // warning : this form request does not belong to laravel default FormRequest class
    public function store(StoreCustomerFeedbackRequest $request){


            try{

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
