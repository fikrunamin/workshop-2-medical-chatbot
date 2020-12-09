<?php

namespace App\Http\Livewire;

use App\Models\Disease;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SecondaryMenu extends Component
{

    public $page;

    public $id_disease;
    public $disease;
    public $symptoms;
    public $treatments;

    public $location;

    protected $listeners = ['show_disease_detail', 'show_location_detail', 'switch_page'];

    public function mount()
    {
        $this->page = session('page');
    }

    public function render()
    {
        return view('livewire.secondary-menu');
    }

    public function show_disease_detail($id)
    {
        $this->id_disease = $id;

        $disease = Disease::find($id);
        $this->disease = $disease;

        $this->symptoms = $disease->symptoms()->get();
        $this->treatments = $disease->treatments()->get();
    }

    public function show_location_detail($location)
    {
        $this->location = $location;
    }

    public function switch_page()
    {
        $this->page = session('page');
    }
}
