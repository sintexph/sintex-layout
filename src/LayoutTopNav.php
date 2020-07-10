<?php

namespace SintexLayout;

use Illuminate\View\Component;

class LayoutTopNav extends Component
{

    public $title;
    public $headerText;
    public $navBarColor;
    public $brandName;
    public $brandLogo;
    public $headerTextSm;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title,
        $headerText,
        $headerTextSm,
        $brandName,
        $navBarColor='navbar-light navbar-white',
        $brandLogo=null
    )
    { 
        $this->title = $title;
        $this->headerText = $headerText;
        $this->navBarColor = $navBarColor;
        $this->headerTextSm = $headerTextSm;
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
        return view('sintex::components.sintex-layout-top-nav');
    }
}
