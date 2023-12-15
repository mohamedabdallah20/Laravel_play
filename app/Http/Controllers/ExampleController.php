<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestCreate;
use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

use function Laravel\Prompts\error;

class ExampleController extends Controller
{
    private $columns = ['name','content','status','show'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // echo Test::get();
        return DB::select('select * from tests')  ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        // auth()->user()->can('create',Test::class);
        // $this->authorize('create',Test::class);
        if(Gate::allows('create',Test::class)){
            return 'Done authorize';
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestCreate $request)
    {
        // $data = $request->validate([
        //     'name' => 'required|string',
        //     'content' => 'required|string',
        //     'status'=>'required',
        //     'show'=>'required'
        // ]);

        // echo $request->validated();
        Test::create($request->validated());
        // $test=new Test;
        // $test->name= $request->name;
        // $test->content=$request->content;
        // $test->save();
        return 'Done';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $this->authorize('isAdmin');
        // if(!Gate::allows('isUser')){
        //     return '(403)';
        // }
            $test = Test::find($id);
        if($this->authorize('view',$test))   {

            return $test;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Test::where('id', $id)->update($request->only($this->columns));
        return 'Done';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Test::where('id',$id)->delete();

        return 'Done';
    }
    public function forceDelete(string $id){

        Test::where('id',$id)->forceDelete();

        return 'Done';
    }

    public function restore(string $id){

        Test::where('id',$id)->restore();

        return 'Done';
    }
}
