<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;

class HotelCreate extends Component
{
    #[Title('Create hotel')]

    public $name;
    public $phone;
    public $address;
    public $email;
    public $stars;
    public $check_in_time;
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create()
    {
        Hotel::create($this->all());
        session()->flash('success', 'Hotel berhasil ditambahkan');
        return $this->redirect(route('hotel.index'), navigate: true);

    }
}
