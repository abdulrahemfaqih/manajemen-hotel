<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class HotelList extends Component
{
    use WithPagination;
    #[Title("Hotel List")]

    public $search;
    public function render()
    {
        return view('livewire.hotels.hotel-list', [
            'hotels' => Hotel::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }

    public function delete($id)
    {
        Hotel::find($id)->delete();
        session()->flash('success', 'Hotel berhasil dihapus');
        return $this->redirect(route('hotel.index'), navigate: true);
    }
}
