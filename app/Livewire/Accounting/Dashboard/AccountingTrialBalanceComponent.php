<?php

namespace App\Livewire\Accounting\Dashboard;

use Livewire\Component;
use Illuminate\View\View;
use App\AbAccount;
use App\Company;

class AccountingTrialBalanceComponent extends Component
{
    public $abAccounts;
    public $company;

    public function render(): View
    {
        $this->abAccounts = AbAccount::all();
        $this->company = Company::first();

        return view('livewire.accounting.dashboard.accounting-trial-balance-component');
    }
}
