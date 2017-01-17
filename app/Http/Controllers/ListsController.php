<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Todolist;
use App\Category;
use App\Http\Requests\ListFormRequest;
class ListsController extends Controller
{
    public function index(){
    	$lists = Todolist::all();
    	return view('lists.index')->with('lists',$lists);
    }
    public function create(){
    	$categories = Category::pluck('name','id');
    	return view('lists.create')->with('categories',$categories);
    }
    public function store(ListFormRequest $request){
    	$list = new Todolist(array('name' => $request->get('name'),'description' =>$request->get('description')));
    	$list->save();
    	if(count($request->get('categories')) > 0){
    		$list->categories()->attach($request->get('categories'));
    	}
    	return \Redirect::route('lists.create')->with('message','Your list has been created');
    }
    public function show($id){
    	$list = Todolist::findBySlug($id);
    	//echo "List found is $list";
    	return view('lists.show')->with('list',$list);
    }
    public function edit($id){
    	$list = Todolist::find($id);
    	return view('lists.edit')->with('list',$list);
    }
    public function update($id,ListFormRequest $request){
    	$list = Todolist::find($id);
    	$list->update(['name' => $request->get('name'),'description'=>$request->get('description')]);
    	return \Redirect::route('lists.edit',array($list->id))->with('message','Your list has been updated');
    }
    public function destroy($id){
    	Todolist::destroy($id);
    	return \Redirect::route('lists.index')->with('message','The list has been deleted!');
    }
}
