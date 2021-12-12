<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowHideForms extends Component
{
    public $showGraduate = false;
    public $showUnder = false;

    public function render()
    {
        return view('livewire.show-hide-forms');
    }

    public function showGrad()
    {
        $this->showUnder = false;
        $this->showGraduate = !$this->showGraduate;
    }

    public function showUnder()
    {
        $this->showGraduate = false;
        $this->showUnder = !$this->showUnder;
    }
}
