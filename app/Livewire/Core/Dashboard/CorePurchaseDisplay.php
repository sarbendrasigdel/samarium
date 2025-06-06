<?php

namespace App\Livewire\Core\Dashboard;

use Livewire\Component;
use Illuminate\View\View;
use App\Traits\ModesTrait;

class CorePurchaseDisplay extends Component
{
    use ModesTrait;

    public $purchase;

    public $display_toolbar = true;

    public $modes = [
        'showPayments' => false,
    ];

    public function render(): View
    {
        return view('livewire.core.dashboard.core-purchase-display');
    }
}
