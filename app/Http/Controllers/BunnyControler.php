<?php

namespace App\Http\Controllers;
use App\Models\Bunny;
use Illuminate\Http\Request;

class BunnyControler extends Controller
{
    //index all bunnies
    public function index()
    {
        return view('bunnies', [
            'bunnies' => Bunny::orderBy('id', 'desc')->paginate(4)
        ]);
    }

    //show single bunny
    public function show(Bunny $bunny){
        return view('/components/single-bunny', [
            'bunny'=> $bunny]);
    }

    //create new bunny
    public function create(){
        return view('bunnies.create');
    }

    //store new bunny
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'color' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            //store image in storage/bunny-images and save the path in the database
            $formFields['image'] = $request->file('image')->store('bunny-images', 'public');
        }

        $formFields['user_id'] = auth()->user()->id;
        
        Bunny::create($formFields);
        return redirect('/bunnies');
    }

    //edit bunny
    public function edit(Bunny $bunny){
        return view('bunnies.edit', [
            'bunny' => $bunny
        ]);
    }
    //update bunny
    public function update(Request $request, Bunny $bunny){
        $formFields = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'color' => 'required',
        ]);

        if($request->hasFile('image')){
            //store image in storage/bunny-images and save the path in the database
            $formFields['image'] = $request->file('image')->store('bunny-images', 'public');
        }

        $bunny->update($formFields);
        return redirect('/bunnies/' . $bunny->id);
    }

    //delete bunny
    public function destroy(Bunny $bunny){
        // Check if the authenticated user's ID matches the user_id of the bunny
        if ($bunny->user_id === auth()->user()->id) {
            $bunny->delete();
        }
        return redirect('/bunnies');
    }

    //manage bunnies
    public function manage(){
        return view('bunnies.manage', [
            //mimi podkreslenia z intelisense jest to poprawne
            'bunnies' => auth()->user()->bunny()->get()
        ]);
    }
}
