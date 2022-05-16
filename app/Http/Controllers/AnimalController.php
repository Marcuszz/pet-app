<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = Animal::all();
        return view('index', compact('animal'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name_of_pet' => 'required|max:25',
            'animal_type' => 'required|max:25',
            'owner_of_pet' => 'required|max:25',
            'address_of_owner' => 'required|max:25',
        ]);
        $animal = Animal::create($storeData);
        return redirect('/animals')->with('completed', 'Pet has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('edit', compact('pet'));
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
        $updateData = $request->validate([
            'name of pet' => 'required|max:25',
            'animal type' => 'required|max:25',
            'owner of pet' => 'required|max:25',
            'address of owner' => 'required|max:25',
        ]);
        Animal::whereId($id)->update($updateData);
        return redirect('/animals')->with('completed', 'Pet has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect('/animals')->with('completed', 'Pet has been deleted');
    }
}