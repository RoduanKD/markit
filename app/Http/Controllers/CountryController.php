<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Models\City;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(3);
        // $countries->withquerystring();
        return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        $name = ['en' => $request->validated('name_en'), 'ar' => $request->validated('name_ar')];
        $country = new Country();
        $country->setTranslation('name', 'en', $request->validated('name_en'))
        ->setTranslation('name', 'ar', $request->validated('name_ar'));

        // array_merge($request->validated(),['name' => $name]);
        // dd($name);
        // $country=Country::create($name);
        // $country->name=$name;
        $country->save();

        session()->flash('message', 'Added succesfuly');
        session()->flash('message-color', 'success');

        return redirect()->route('countries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        $cities = City::where('country_id', $country->id)->paginate(3);
        // $cities->withquerystring();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $name = $country->getTranslations('name');

        return view('countries.edit', compact('country', 'name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCountryRequest $request, Country $country)
    {
        $country->setTranslation('name', 'en', $request->validated('name_en'))
        ->setTranslation('name', 'ar', $request->validated('name_ar'));
        $country->update();

        session()->flash('message', 'Edited succesfuly');
        session()->flash('message-color', 'success');

        return redirect()->route('countries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if (! count($country->cities)) {
            $country->delete();
            session()->flash('message', 'Deleted succesfuly');
            session()->flash('message-color', 'success');
        }

        return redirect()->route('countries.index');
    }
}
