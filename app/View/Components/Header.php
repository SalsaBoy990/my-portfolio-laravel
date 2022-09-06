<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public string $fullName;
    public string $title;
    public string $subtitle;
    public string $emailAddress;
    public string $cv;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $fullName,
        string $title,
        string $subtitle,
        string $emailAddress,
        string $cv
    ) {
        $this->fullName = $fullName;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->emailAddress = $emailAddress;
        $this->cv = $cv;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.header');
    }
}
