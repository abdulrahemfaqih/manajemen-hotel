<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class HotelCreate extends Component
{
    #[Title('Create hotel')]

    #[Validate('required|min:3')]
    public $name;
    #[Validate('required|numeric')]
    public $phone;
    #[Validate('required')]
    public $address;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|numeric|between:1,5')]
    public $stars;
    #[Validate('required')]
    public $check_in_time;
    #[Validate('required')]
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create()
    {
        $validated = $this->validate();
        Hotel::create($validated);
        session()->flash('success', 'Hotel berhasil ditambahkan');
        return $this->redirect(route('hotel.index'), navigate: true);
    }
}
