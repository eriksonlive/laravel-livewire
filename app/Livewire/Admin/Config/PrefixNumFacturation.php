<?php

namespace App\Livewire\Admin\Config;

use Livewire\Component;

class PrefixNumFacturation extends Component
{

    public $prefix;
    public $num_init = 100;
    public $num_end = 1000;

    public function guardar()
    {
        dd($this->prefix);
    }

    public function render()
    {
        return view('livewire.admin.config.prefix-num-facturation');
    }
}
