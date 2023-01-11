<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Article extends Component
{
    public $slug;
    public $date;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug, $date)
    {
        $this->slug = $slug;
        $this->date = $date;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.article');
    }
}
