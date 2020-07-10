<?php

namespace SintexLayout;

use Illuminate\View\Component;

class LayoutSidebar extends Component
{
    public $title;
    public $headerText;
    public $navBarColor;
    public $sidebarColor;
    public $brandColor;
    public $brandName;
    public $brandLogo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title,
        $headerText,
        $brandName,
        $navBarColor='navbar-light navbar-white',
        $sidebarColor='sidebar-dark-primary',
        $brandColor=null,
        $brandLogo=null
    )
    { 
        $this->title = $title;
        $this->headerText = $headerText;
        $this->navBarColor = $navBarColor;
        $this->sidebarColor = $sidebarColor;
        $this->brandColor = $brandColor;
        $this->brandName = $brandName;
        $this->brandLogo = $brandLogo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('sintex::components.sintex-layout-sidebar');
    }
}
