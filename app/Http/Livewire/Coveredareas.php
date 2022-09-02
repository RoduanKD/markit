<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use Auth;
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

    public $user;

    public function mount($country, $city)
    {
        $this->countries = Country::orderBy('name')->get();
        $this->user = Auth::user();
        if ($country) {
            $this->countryId = $country;
        }
        if ($city) {
            $this->cityId = $city;
        }

        if ($this->countryId) {
            $this->cities = City::where('country_id', $this->countryId)->get();
        } else {
            $this->cities = [];
        }

        if ($this->cityId) {
            $this->areas = Area::where('city_id', $this->cityId)->get();
        } else {
            $this->areas = [];
        }
    }

    public function updatedCountryId()
    {
        if ($this->countryId) {
            $this->cities = City::where('country_id', $this->countryId)->get();
        }
    }

    public function updatedCityId()
    {
        if ($this->cityId) {
            $this->areas = Area::where('city_id', $this->cityId)->get();
        }
    }

    public function cover($areaId, $user)
    {
        $user = Auth::user();
        $area = $user->areas()->where('id', $areaId)->get();
        if ($area->isEmpty()) {
            Auth::user()->areas()->attach($areaId);
        }
    }

    public function render()
    {
        return view('livewire.coveredareas');
    }
}
