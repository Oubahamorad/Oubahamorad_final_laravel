<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class DoubleAuthMiddleware extends Controller
{
    //
    public function handle(Request $request, Closure $next): Response
    {

        $user = User::where("id", auth()->user()->id)->first();
        if ($user && $user->auth_validate) {
            return $next($request);
        }
        return redirect()->route("2fa");
    }
     
    public function validate2fa(Request $request)
    {

        request()->validate([
            "code" => "required"
        ]);
        //* method 1 
        // $user = $request->user();

        // 
        $user = User::where("id", auth()->user()->id)->first();

        if ($request->code == $user->validation_code) {

            $user->auth_validate = true;
            $user->save();
            return redirect()->route("dashboard");
        } else {
            return back();
        }
    }   
}
