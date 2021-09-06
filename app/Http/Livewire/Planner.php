<?php

namespace App\Http\Livewire;

use App\Models\Week;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Planner extends Component
{
    /** @var Collection */
    public $weeks;

    public function mount()
    {
        $this->weeks = Week::all();
    }

    public function render()
    {
        return view('livewire.planner');
    }
}
