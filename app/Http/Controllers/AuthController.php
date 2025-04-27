<?php

namespace App\Http\Controllers;

use App\Exceptions\NoUserFoundException;
use App\Exceptions\UserPasswordDoesNotMatchException;
use App\Http\Requests\UserLoginRequest;
use App\Services\User\UserServiceContract;;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{


    public function __construct(public readonly UserServiceContract $userService)
    {
    }

    public function login(UserLoginRequest $request){

        try{

          $userModelObject =   $this->userService->login($request->getValidatedData());

            Auth::login($userModelObject);

            return redirect()->route('dashboard');

        }catch (ValidationException $exception){

            return back()->withErrors($exception->errors());

        }catch (NoUserFoundException | UserPasswordDoesNotMatchException $e){
            return back()->with('fail',$e->getMessage());
        }catch (\Exception $e){
            return back()->with('fail',"Something went wrong");
        }
    }

}
