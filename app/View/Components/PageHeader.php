<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pretitle;
    public $title;
    public function __construct($pretitle , $title)
    {
        $this->pretitle =  $pretitle;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-header');
    }
}
