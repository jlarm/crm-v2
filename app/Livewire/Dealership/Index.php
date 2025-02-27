<?php

namespace App\Livewire\Dealership;

use App\Livewire\Dealership\Traits\HasDealershipQuery;
use App\Livewire\Dealership\Traits\Searchable;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use HasDealershipQuery, Searchable, WithPagination;

    public $sortBy = 'name';
    public $sortDirection = 'asc';

    public Filters $filters;

    public function sort($column): void
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function clearFilters(): void
    {
        $this->filters->reset();
    }

    #[Title('Dealerships')]
    public function render(): View
    {
        $query = $this->dealerQuery()->with('users');

        $query = $this->applySearch($query);

        $query = $this->filters->apply($query);

        $dealerships = $query
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->paginate(10);

        return view('livewire.dealership.index', [
            'dealerships' => $dealerships,
        ]);
    }
}
