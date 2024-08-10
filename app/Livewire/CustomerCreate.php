<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;

class CustomerCreate extends Component
{
    public CustomerForm $form;

    public $modalCustomerCreate = false;

    public function save()
    {
        $this -> validate();

        $guardar = $this -> form -> store();

        is_null($guardar)
        ? $this -> dispatch('notify', title: 'success', message: 'Guardado')
        : $this -> dispatch('notify', title: 'failed', message: 'Error');

        $this -> modalCustomerCreate = false;

        $this -> dispatch('dispatch-customer-create-save') -> to(CustomerTable::class);
    }

    public function render()
    {
        return view('livewire.customer-create');
    }
}
