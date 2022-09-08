<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LanguageSwitcher extends Component
{
    public string $current_locale;
    public array $available_locales;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->current_locale = app()->getLocale();
        $this->available_locales = config('app.available_locales');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.language-switcher');
    }
}
