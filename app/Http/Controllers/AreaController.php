<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAreaRequest;
use App\Models\Area;
use App\Models\City;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=Area::paginate(3);
        // $areas-Areawithquerystring();
       return view('areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cities=City::all();
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAreaRequest $request)
    {
        // dd ($request->validated());
        // $name=['en' => $request->validated('name_en'),'ar' => $request->validated('name_ar')];
        $area=new Area();
        $area->setTranslation('name','en',$request->validated('name_en'))
        ->setTranslation('name','ar',$request->validated('name_ar'));
        $area->city_id=$request->validated('city');

        $area->save();

        session()->flash('message' , 'Added succesfuly');
        session()->flash('message-color' , 'success');
        return redirect()->route('areas.index');
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
    public function edit(Area $area)
    {

        $name=$area->getTranslations('name' );
        // $countries=Country::all();
        return view('areas.edit',compact('area','name'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAreaRequest $request, Area $area)
    {
        $area->setTranslation('name','en',$request->validated('name_en'))
        ->setTranslation('name','ar',$request->validated('name_ar'));
        $area->city_id=$request->validated('city');
        $area->update();


        session()->flash('message' , 'Edited succesfuly');
        session()->flash('message-color' , 'success');
        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
            $area->delete();
            session()->flash('message' , 'Deleted succesfuly');
            session()->flash('message-color' , 'success');


        return redirect()->route('areas.index');
    }
}
