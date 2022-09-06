<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Skills extends Component
{
    public \Illuminate\Database\Eloquent\Collection $skills;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        \Illuminate\Database\Eloquent\Collection $skills,
    ) {
        $this->skills = $skills;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.skills');
    }
}
