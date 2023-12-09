<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class DonationForm extends Form
{
    #[Validate('required|string')]
    public $donor = '';
    
    #[Validate('required|string')] 
    public $item = 'money';

    #[Validate('required|boolean')]
    public $fulfilled = '0';

    #[Validate('required|numeric')]
    public $quantity = '';
}
