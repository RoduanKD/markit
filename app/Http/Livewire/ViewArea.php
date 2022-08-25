<?php

namespace App\Http\Livewire;

use Livewire\Component;


class ViewArea extends Component
{
    public $area;

    public function mount($area)
    {
        $this->area= $area;

    }


    public function render()
    {
        return view('livewire.view-area');
    }
}
