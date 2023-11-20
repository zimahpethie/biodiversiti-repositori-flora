<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $totalFlora = Plant::count();
        $totalKingdom = Plant::distinct()->count('kingdom');
        $totalDivisio = Plant::distinct()->count('divisio');
        $totalClass = Plant::distinct()->count('class');
        $totalOrder = Plant::distinct()->count('order_');
        $totalFamily = Plant::distinct()->count('family_');
        $totalGenus = Plant::distinct()->count('genus');
        $totalSpecies = Plant::distinct()->count('species');

        return view('adminHome',
        ['totalFlora'=>$totalFlora, 'totalKingdom'=>$totalKingdom,'totalDivisio'=>$totalDivisio,
        'totalClass'=>$totalClass,'totalOrder'=>$totalOrder,'totalFamily'=>$totalFamily,'totalGenus'=>$totalGenus, 'totalSpecies'=>$totalSpecies]);
    }

    public function managePlant()
    {

        $plants = Plant::latest()->paginate(5);
    
        return view('managePlant',compact('plants'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->search;

        // Get the search value from the request
            $plants = Plant::search($request->search)
            ->get()
            ->map(function ($row) use ($search) {
                $row->scientific_name = preg_replace('/(' . $search . ')/i',  "<mark>$1</mark>", $row->scientific_name);
                $row->name = preg_replace('/(' . $search . ')/i', "<mark>$1</mark>", $row->name);
                $row->kingdom = preg_replace('/(' . $search . ')/i', "<mark>$1</mark>", $row->kingdom);
                $row->divisio = preg_replace('/(' . $search . ')/i', "<mark>$1</mark>", $row->divisio);
                $row->class = preg_replace('/(' . $search . ')/i', "<mark>$1</mark>", $row->class);
                $row->order_ = preg_replace('/(' . $search . ')/i', "<mark>$1</mark>", $row->order_);
                $row->family_ = preg_replace('/(' . $search . ')/i', "<mark>$1</mark>", $row->family_);
                $row->genus = preg_replace('/(' . $search . ')/i', "<mark>$1</mark>", $row->genus);
                $row->detail = preg_replace('/(' . $search . ')/i', '<mark>$1</mark>', $row->detail);
                return $row;
            });
    
        // Return the search view with the resluts compacted
        if(auth()->check() && auth()->user()->is_admin == 1){
            return view('adminSearch', ['plants' => $plants, 'query' => $search])->with($search);
        } else {
            return view('search', ['plants' => $plants, 'query' => $search])->with($search);
        }        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->check() && auth()->user()->is_admin == 1){
            return view ('create');
        }else{
             abort(403, "Cannot access to restricted page");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'scientific_name' => 'required',
            'kingdom' => 'required',
            'divisio' => 'required',
            'class' => 'required',
            'order_' => 'required',
            'family_' => 'required',
            'genus' => 'required',
            'species' => 'required',
            'detail' => 'required',
        ]);
    
        $input = $request->except(['_token']);
    
        if ($image = $request->file('image')) {
            $input['image'] = $image->store('plants', 'public');
        }
    
        Plant::create($input);
    
        return redirect()->route('admin.managePlant')
            ->with('success', 'Maklumat berjaya ditambah.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        if(auth()->check() && auth()->user()->is_admin == 1){
            return view('show',compact('plant'));
        }else{
            return view('showplant',compact('plant'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        if(auth()->check() && auth()->user()->is_admin == 1){
            return view('edit',compact('plant'));
        }else{
             abort(403, "Cannot access to restricted page");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'scientific_name' => 'required',
            'kingdom' => 'required',
            'divisio' => 'required',
            'class' => 'required',
            'order_' => 'required',
            'family_' => 'required',
            'genus' => 'required',
            'species' => 'required',
            'detail' => 'required',
        ]);
    
        $input = $request->except(['_token', '_method']); // Exclude unnecessary fields
    
        if ($image = $request->file('image')) {
            // Delete the previous image if it exists
            if ($plant->image) {
                Storage::disk('public')->delete($plant->image);
            }
    
            // Store the new image
            $input['image'] = $image->store('plants', 'public');
        }
    
        $plant->update($input);
    
        return redirect()->route('admin.managePlant')
            ->with('success', 'Maklumat berjaya dikemas kini');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();
    
        return redirect()->route('admin.managePlant')
                        ->with('success','Maklumat berjaya dipadam');
    }
}