<?php

namespace App\Livewire;

use Livewire\Component;

class TaskActive extends Component
{
    public $search ='';
    public $priority ='';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.task-active');
    }
    public function updatingSearch()
{
    $this->reset();
}

public function updatingPriority()
{
    $this->reset();
}
}
