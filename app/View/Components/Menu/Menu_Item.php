<?php

namespace App\View\Components\Menu;

use Illuminate\View\Component;

class Menu_Item extends Component
{   
    public $link, $name, $icon, $number;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link="#", $name, $icon="", $number="")
    {
        $this->link = $link;
        $this->name = $name;
        $this->number = $number;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu.menu_-item');
    }
}
