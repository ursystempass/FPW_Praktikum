<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * Create a new component instance.
     */
    public string $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }

    public function render(): View|Closure|string
    {
        return view('components.badge');
    }
    }
