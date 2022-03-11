<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{ /**
    * create a new instance of the class
    *
    * @return void
    */
   function __construct()
   {
        $this->middleware('permission:people-list|people-create|people-edit|people-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:people-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:people-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:people-delete', ['only' => ['destroy']]);
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {
       $data = People::latest()->paginate(5);

       return view('people.index',compact('data'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('people.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request, [
           'fristName' => 'required',
           'lastName'=> 'required',
           'middlename'=> 'required',
           'kebele'=> 'required',
           'wereda'=> 'required',
           'zone'=> 'required',
           'state'=> 'required',
           'age'=> 'required',
           'fingerPrint'=> 'required',
           'job'=> 'required',
          

       ]);
       $input = $request->except(['_token']);
   
       People::create($input);
   
       return redirect()->route('people.index')
           ->with('success','information stored successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $people = People::find($id);

       return view('people.show', compact('people'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $people = People::find($id);

       return view('people.edit',compact('people'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $this->validate($request, [
        'fristName' => 'required',
        'lastName'=> 'required',
        'middlename'=> 'required',
        'kebele'=> 'required',
        'wereda'=> 'required',
        'zone'=> 'required',
        'state'=> 'required',
        'age'=> 'required',
        'fingerPrint'=> 'required',
        'job'=> 'required',
       
       ]);

       $post = People::find($id);
   
       $people->update($request->all());
   
       return redirect()->route('people.index')
           ->with('success', 'Information updated successfully.');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       People::find($id)->delete();
   
       return redirect()->route('people.index')
           ->with('success', 'Information deleted successfully.');
   }
}
