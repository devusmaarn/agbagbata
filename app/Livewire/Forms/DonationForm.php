<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rule;
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

    #[Validate('required|string')]
    public $quantity = '';

    // public function rules(){
    //     return [
    //         'donor' => ['required', 'string', 'max:55'],
    //         'item' => ['required', 'string'],
    //         ''
    //     ];
    // }
}
