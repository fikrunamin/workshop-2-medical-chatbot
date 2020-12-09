<?php

namespace App\Http\Livewire;

use App\Models\Disease;
use Livewire\Component;

class MainMenu extends Component
{
    public $page;
    public $search_disease;
    public $id_disease = null;

    public $locations = [];
    public $loc = [];

    protected $updatesQueryString = [
        ['search_disease' => ['except' => '']],
    ];

    protected $listeners = [
        'switch_page',
        'get_list_clinic'
    ];

    public function mount()
    {
        $this->page = session('page');
    }

    public function render()
    {
        $diseases = Disease::where('name', 'like', "%$this->search_disease%");

        $data = [
            'total_diseases' => $diseases->count(),
            'diseases' => $diseases->get(),
        ];

        return view('livewire.main-menu', $data);
    }

    public function show_disease_detail($id)
    {
        $this->id_disease = $id;
        $this->emit('show_disease_detail', $this->id_disease);
    }

    public function get_list_clinic($locations)
    {
        $this->locations = $locations;
    }

    public function show_location_detail($index)
    {
        if (empty($this->loc) || $this->loc['id'] != $this->locations[$index]['id']) {
            $this->loc = $this->locations[$index];
            $this->emit('show_location_detail', $this->loc);
        }
    }

    public function switch_page()
    {
        $this->page = session('page');
    }
}
