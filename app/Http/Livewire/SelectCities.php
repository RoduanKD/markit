<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class SelectCities extends Component
{
    // public $oldcity;
    // public $oldcountry;
    public $city;
    public $country;
    public $countries;
    public $countryId;
    public $cityId;
    public $cities;

    public function mount($country,$city)
    {
        $this->countries= Country::orderBy('name')->get();
        if($country)
        $this->countryId=$country;
        if($city)
        $this->cityId=$city;

        if ($this->countryId)
        {
            $this->cities=City::where('country_id',$this->countryId)->get();
        }
        else $this->cities =[];

    }

    public function updatedCountryId()
    {
        if ($this->countryId)
        {
        $this->cities=City::where('country_id',$this->countryId)->get();
        }
    }

    public function render()
    {
        return view('livewire.select-cities');
    }
}
