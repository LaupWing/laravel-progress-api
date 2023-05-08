<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
   public function store(Request $request) {
      if(!Auth::attempt($request->validate([
         "email" => ["required", "string", "email"],
         "password" => ["required", "string"]
      ]), true)) {
         throw ValidationException::withMessages([
            "email" => "Authentication failed"
         ]);
      }
      $request->session()->regenerate();

      return response()->json([
         "status" => "success"
      ]);
   }
}
