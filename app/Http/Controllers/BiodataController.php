<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function bioform(){
        return view('bioform');
    }

    public function create(Request $request){
        Biodata::create($request->all());
       
        // echo $request->fname;
        // die ($request->lname);
        return redirect('bioform')->with('success', 'BioData Record Added Successfully!');
    }
    public function delete($id){
        $del = Biodata::find($id);
        $del->delete();

        return redirect('showall')->with('error', 'Biodata Deleted Successfully!!');
        // return redirect('showall')->with('success', 'BioData Updated Successfully!');
    }
    public function showall(){

        $show = Biodata::all();
        return view('showall', ['show'=>$show]);

    }

    public function edit($id){
        $edit = Biodata::find($id);

        return view('edit', ['bio'=>$edit]);
        // return view('edit',compact('bio', $edit));
        
    }

    public function update(Request $request, $id){
       
        // $update = Biodata::find($request->bio_id);
        $update = Biodata::find($id);
        $update->fname = $request->input('fname'); //This update one by one. i.e state field
        $update->lname = $request->input('lname');//This update one by one. i.e. capital field
        $update->update();
        return redirect('showall')->with('success', 'BioData Updated Successfully!');

    }
}
