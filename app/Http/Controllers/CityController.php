<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::paginate(3);
        // $cities->withquerystring();
       return view('cities.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::all();
        return view('cities.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $name=['en' => $request->validated('name_en'),'ar' => $request->validated('name_ar')];
        $city=new City();
        $city->setTranslation('name','en',$request->validated('name_en'))
        ->setTranslation('name','ar',$request->validated('name_ar'));
        $city->country_id=$request->validated('country');



        // array_merge($request->validated(),['name' => $name]);
        // dd($name);
        // $city=City::create($name);
        // $city->name=$name;
        $city->save();

        session()->flash('message' , 'Added succesfuly');
        session()->flash('message-color' , 'success');
        return redirect()->route('cities.index');
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
    public function edit(City $city)
    {

        $name=$city->getTranslations('name' );
        $countries=Country::all();
        return view('cities.edit',compact('city','name','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCityRequest $request, City $city)
    {
        $city->setTranslation('name','en',$request->validated('name_en'))
        ->setTranslation('name','ar',$request->validated('name_ar'));
        $city->country_id=$request->validated('country');
        $city->update();


        session()->flash('message' , 'Edited succesfuly');
        session()->flash('message-color' , 'success');
        return redirect()->route('cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
            $city->delete();
            session()->flash('message' , 'Deleted succesfuly');
            session()->flash('message-color' , 'success');


        return redirect()->route('cities.index');
    }
}
