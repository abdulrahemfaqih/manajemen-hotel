<?php

namespace App\Livewire\Hotels;

use Livewire\Attributes\Title;
use Livewire\Component;

class HotelList extends Component
{
    #[Title("Hotel List")]
    public function render()
    {
        return view('livewire.hotels.hotel-list');
    }
}
