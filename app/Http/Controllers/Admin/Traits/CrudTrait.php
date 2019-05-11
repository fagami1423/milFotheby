<?php

namespace App\Http\Controllers\Admin\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;
use App\Category;
use App\Item;

/**
 * Trait CrudTrait
 * @package App\Http\Controllers\Admin\Traits
 */
trait CrudTrait
{

    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $results = $this->model->all();
        return view($this->views['index'])->with(['results'=>$results]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()

    {
        $categories = Category::all();
        $items = Item::all();
        return view($this->views['create'])->with(['categories'=>$categories,'items'=>$items]);
    }

    public function store(Request $request)
    {
       
        $redirect = isset($this->redirect) ? $this->redirect : $this->view;

        $data = $request->except('_token');
       
        if($request->hasFile('art_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('art_image')->getClientOriginalName();
         
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           
            $extension = $request->file('art_image')->getClientOriginalExtension();
            
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
           
            $path = $request->file('art_image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'no image';
        }
       
       
        $data['admin_id']=auth()->user()->id;       
        $data['user_id']=auth()->user()->id;
        $data['art_image']=$fileNameToStore;
        $model = $this->model->create($data);
       
        return redirect(route("{$redirect}.index"))->with('message',
            'Record was successfully saved!!');
    }


    /**
     * @param $id
     */
    public function show($id)
    {
        $item = $this->model->find($id);
        return view($this->views['show'])->with('item', $item);
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $categories = Category::all();
        $items = Item::all();
        $model = $this->model->find($id);
        return view($this->views['edit'], compact('model'))->with(['categories'=>$categories,'items'=>$items]);
    }

    public function update(Request $request, $id)
    {
        $redirect = isset($this->redirect) ? $this->redirect : $this->view;
        $data = $request->except('_token');
        $model = $this->model->find($id);
       
        if($request->hasFile('art_image')){
            $filenameWithExt = $request->file('art_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('art_image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('art_image')->storeAs('public/images', $fileNameToStore);
        } 
        if($request->hasFile('art_image')){
            $data['art_image']=$fileNameToStore;
        }
        $model->update($data);
        return redirect(route("{$redirect}.edit", $id))->with('message', 'Record was successfully Updated!!');
    }


    public function destroy($id)
    {
        $model = $this->model->find($id);
        $model->delete($id);
        return redirect()->back()->with('message', 'Record was successfully deleted!');
    }

}
