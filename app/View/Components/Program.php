<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Program extends Component
{
    public $color;
    public $name;
    public $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $name, $description)
    {
        $this->color = $color;
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.program');
    }
}
