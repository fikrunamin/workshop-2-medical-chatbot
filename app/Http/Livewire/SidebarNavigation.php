<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SidebarNavigation extends Component
{
    public $page;

    protected $listeners = [
        'set_secondary_menu_visibility' => '$refresh',
        'set_chatbot_visibility' => '$refresh',
    ];

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
        $this->page = session('page');
        session(['page' => $page]);

        $this->emit('switch_page');
        if (session('page') == 'clinic' && $this->page != "clinic") {
            $this->emit('get_clinic');
            if (session()->has('location')) {
                $this->emit('show_location_detail', session('location'));
            }
        }
    }
}
