<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class TaskController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      $placeholderUser = User::find(1); 
      return $placeholderUser->tasks()->with("section")->with("taskDates")->get();
   }


   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
      $placeholderUser = User::find(1); 
      return $placeholderUser->tasks()->create(
         $request->validate([
            "name" => ["required"]
         ])
      );
   }

   /**
    * Display the specified resource.
    */
   public function show(Task $task)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Task $task)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Task $task)
   {
      //
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Task $task)
   {
      //
   }
}
