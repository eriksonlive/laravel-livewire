<?php

namespace App\Livewire\Admin\Config;

use App\Models\PaymentMethods;
use Livewire\Component;

class FormMethodPay extends Component
{
    public $method;

    public function save()
    {
        $this->validate(['method' => 'required|string|min:5|regex:/^[a-zA-Z\s]*$/']);

        // PaymentMethods::create($this->only(['method']));

        $this->reset('method');

        $this->dispatch('methodAdded', ['message' => 'Nuevo elemento creado']);
    }

    public function render()
    {
        return view('livewire.admin.config.form-method-pay');
    }
}
