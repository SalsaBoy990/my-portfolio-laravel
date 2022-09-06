<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Introduction extends Component
{
    public string $greetingHeadline;
    public string $greetingDescription;
    public string $profilePhoto;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $greetingHeadline,
        string $greetingDescription,
        string $profilePhoto
    ) {
        $this->greetingHeadline = $greetingHeadline;
        $this->greetingDescription = $greetingDescription;
        $this->profilePhoto = $profilePhoto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.introduction');
    }
}
