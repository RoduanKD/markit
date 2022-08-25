<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class Coveredareas extends Component
{
    public $city;
    public $country;
    public $countries;
    public $countryId;
    public $cityId;
    public $areaId;
    public $cities;
    public $areas;

    public function mount($country,$city)
    {
        $this->countries= Country::orderBy('name')->get();
        // $this->areas=Area::orderBy('name')->get();
        // dd($this->areas);
        if($country)
        $this->countryId=$country;
        if($city)
        $this->cityId=$city;

        if ($this->countryId)
        {
            $this->cities=City::where('country_id',$this->countryId)->get();
        }
        else $this->cities =[];

        if ($this->cityId)
        {
            $this->areas=Area::where('country_id',$this->countryId)->get();
        }
        else $this->areas =[];


    }

    public function updatedCountryId()
    {
        if ($this->countryId)
        {
        $this->cities=City::where('country_id',$this->countryId)->get();
        }
    }

    public function updatedCityId()
    {
        if ($this->cityId)
        {
            $this->areas=Area::where('city_id',$this->cityId)->get();
            // $this->reset('areas');
            // dd($this->areas[0]);
            // $this->reset();
        }
    }


    public function render()
    {
        return view('livewire.coveredareas');
    }
}
