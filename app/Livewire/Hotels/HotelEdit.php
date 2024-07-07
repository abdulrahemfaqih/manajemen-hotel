<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class HotelEdit extends Component
{
    #[Title('Hotel Edit')]

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

    public $hotel;

    public function mount(string $id)
    {
        $this->hotel = Hotel::find($id);
        $this->name = $this->hotel->name;
        $this->phone = $this->hotel->phone;
        $this->address = $this->hotel->address;
        $this->email = $this->hotel->email;
        $this->stars = $this->hotel->stars;
        $this->check_in_time = $this->hotel->check_in_time;
        $this->check_out_time = $this->hotel->check_out_time;
    }

    public function render()
    {
        return view('livewire.hotels.hotel-edit');
    }

    public function update()
    {
        $validated = $this->validate();
        $this->hotel->update($validated);
        session()->flash('success', 'Hotel berhasil diupdate');
        return $this->redirect(route('hotel.index'), navigate: true);
    }
}
