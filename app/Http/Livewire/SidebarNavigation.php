<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SidebarNavigation extends Component
{
    public $page;

    public $location = '';

    protected $listeners = ['show_location_detail'];

    public function mount()
    {
        $this->page = session('page');
    }

    public function render()
    {
        return view('livewire.sidebar-navigation');
    }

    public function switch_page($page)
    {
        session(['page' => $page]);

        $this->emit('switch_page');

        if (session('page') == 'clinic' && $this->page != "clinic") {
            $this->emit('get_clinic');
        }
    }

    public function show_location_detail($location)
    {
        $this->location = $location;
    }
}
