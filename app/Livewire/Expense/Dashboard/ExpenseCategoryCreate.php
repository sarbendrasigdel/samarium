<?php

namespace App\Livewire\Expense\Dashboard;

use Livewire\Component;
use Illuminate\View\View;
use App\ExpenseCategory;

class ExpenseCategoryCreate extends Component
{
    public $name;

    public function render(): View
    {
        return view('livewire.expense.dashboard.expense-category-create');
    }

    public function store(): void
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        ExpenseCategory::create($validatedData);

        $this->dispatch('expenseCategoryCreated');
        $this->dispatch('exitCategoryCreateMode');
    }
}
