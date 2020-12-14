<?php

namespace App\Http\Livewire;

use App\Models\Disease;
use Livewire\Component;

class SecondaryMenu extends Component
{

    public $page;

    public $id_disease;
    public $disease;
    public $symptoms;
    public $treatments;

    public $location = [];

    public $show_profile_visible = false;

    public $visibility;

    protected $listeners = ['show_disease_detail', 'show_location_detail', 'show_profile', 'switch_page'];

    public function mount()
    {
        $this->page = session('page');
        $this->visibility = session('secondary_menu_visibility') ?? false;
    }

    public function render()
    {
        return view('livewire.secondary-menu');
    }

    public function show_disease_detail($id)
    {
        $this->set_visibility(true);

        $this->id_disease = $id;

        $disease = Disease::find($id);
        $this->disease = $disease;

        $this->symptoms = $disease->symptoms()->get();
        $this->treatments = $disease->treatments()->get();
    }

    public function show_location_detail($location)
    {
        $this->set_visibility(true);
        $this->location = $location;
    }

    public function show_profile()
    {
        $this->set_visibility(true);
        $this->show_profile_visible = true;
    }

    public function set_visibility($condition)
    {
        session(['secondary_menu_visibility' => $condition]);
        $this->emit('set_secondary_menu_visibility', $condition);
        $this->visibility = $condition;
    }

    public function switch_page()
    {
        $this->show_profile_visible = false;
        $this->page = session('page');
    }

    public function refresh_location()
    {
        $this->emit('show_location_detail', session('location'));
    }
}
