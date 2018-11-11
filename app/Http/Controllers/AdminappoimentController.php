<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adminappoiment;
use App\adminapp;
class AdminappoimentController extends Controller
{
    //


    public function index(Request $request) {
       {
            $adminapps= adminapp ::get();         //retieve data onto page
            return view('adminappoiment.index' ,['adminapps'=>$adminapps]);
        }
    }

   /* public function create() {
        $categories = Category::all();
        return view('items.create',compact('categories'));
    }
*/


    public function create() {
        /*  $page = $request->get('page', 1);
         $cache_name = 'items' . $page;
         if (Cache::has($cache_name)){
             $items = Cache::get($cache_name);
         } else {
             $items = Item::all();
             Cache::put($cache_name, $items, 10);
         }
         $items = Item::latest()->paginate((env('PER_PAGE')));
        */
         return view('adminappoiment.create', compact('adminappoiment'));
    }

 


public function store(Request $request){
  // dd($request);                     // checked debuging
   $adminapp= new Adminapp();

   $adminapp->speciality=$request->speciality;
   $adminapp->doctor=$request->doctor;                 // store data
   $adminapp->date=$request->date;
   $adminapp->availability=$request->availability;
   $adminapp->save();
   return redirect('adminappoiment');
}
/*

public function show(){
    $students =Student::get();         //retrieve all table data from db
    return view('student.show',['students'=>$students]);

}


public function edit($id){
    $student =Student::find($id);  //retreive row data accordind to the student  id 
    return view('student.edit',['student'=>$student]);
}
*/

public function edit($id){
    $adminapp =Adminapp::find($id);  //retreive row data accordind to the   id 
    return view('adminappoiment.edit',['adminapp'=>$adminapp]);
}


public function update(Request $request , $id){
    $adminapp =Adminapp::find($id);
    $adminapp= new Adminapp();

    $adminapp->speciality=$request->speciality;
    $adminapp->doctor=$request->doctor;                 // store data
    $adminapp->date=$request->date;
    $adminapp->availability=$request->availability;
    $adminapp->save();
    return redirect('adminappoiment');

}

public function destroy($id){
    Adminapp::destroy($id);
    return redirect('adminappoiment');
      }

      public function search(Request $request) {
        $query = $request->get('q');
        $results = Adminapp::where('speciality', 'LIKE', '%' . $query . '%')
        ->paginate((env('PER_PAGE')));
        return view('adminappoiment.result', compact('results', 'query'));
    }

    
    public function indexuser(Request $request) {
        {
             $adminapps= adminapp ::get();         //retieve data onto  user page             
             return view('user.index' ,['adminapps'=>$adminapps]);
         }
     }

     public function searchuser(Request $request) {
        $query = $request->get('q');
        $results = Adminapp::where('speciality', 'LIKE', '%' . $query . '%')        //retieve  result data onto  user page 
        ->paginate((env('PER_PAGE')));
        return view('user.result', compact('results', 'query'));
    }

}
