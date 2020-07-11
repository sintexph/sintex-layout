
# Laravel 7 Sintex Layout Powered by Admin LTE 3

**Installation**

    composer require sintex/sintex-layout
**Publishing Layout**

    php artisan vendor:publish --provider="SintexLayout\SintexLayoutProdvider"

# Components


 - **[Top Navigation Layout](https://github.com/sintexph/sintex-layout#top-navigation-layout "Top Navigation Layout")**
 - **[Sidebar Layout](https://github.com/sintexph/sintex-layout#sidebar-layout "Sidebar Layout")**
 

`x- tag` is an implementation of **Laravel 7x**


### Top Navigation Layout 

`x-sintex-layout-top-nav`
    
**Usage**

```php
<x-sintex-layout-top-nav  
    
    title="Page Title" 
    header-text="Dashboard" 
    header-text-sm="This is the dashboard" 
    nav-bar-color="navbar-dark navbar-success"  
    brand-name="My Company">
    
</x-sintex-layout-top-nav>
```

**Parameters**

 - **title**  - The page title [*Required*]
 - **header-text** - Content Header text[*Required*]
 - **header-text-sm** - Content Header text small [*Required*]
 - **nav-bar-color** - Navigation Bar Color [*Optional*]
 - **brand-name** - Brand Name [*Required*]

Just add the parameters inside the component tag.

**Named Slots**

 - navbar - Slot for Navigation menu bar
 - breadcrumbItems  - Slot for Breadcrumb items `<li>`
 - content - Slot where the content to be inserted
 - footer  - Slot where the footer or company details or info to be inserted
 - headerImports - Slot in header where the custom css or js file to be inserted
 - footerImports - Slot in footer where the custom js file to be inserted

Insert the slots inside the component like shown usage below.
 
```php
<x-sintex-layout-top-nav  
    
    title="Page Title" 
    header-text="Dashboard" 
    header-text-sm="This is the dashboard" 
    nav-bar-color="navbar-dark navbar-success"  
    brand-name="My Company">

    <x-slot name="breadcrumbItems">

        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>

    </x-slot>
    
</x-sintex-layout-top-nav>
```
To see the full example implementation of the component, publish the views that can be found after publishing in `/views/vendor/sintex-layouts/top-nav`



### Sidebar Layout
`x-sintex-layout-sidebar`

**Usage**
```php
<x-sintex-layout-sidebar 

	title="Server Error!" 
	header-text="test" 
	nav-bar-color="navbar-dark navbar-success"
	sidebar-color="sidebar-light-warning" 
	brand-color="navbar-primary" 
	brand-name="Helpdesk 4">

</x-sintex-layout-sidebar>
```
**Parameters**

 - **title**  - The page title [*Required*]
 - **header-text** - Content Header text[*Required*]
 - **nav-bar-color** - Navigation bar color [*Optional*]
 - **sidebar-color** - Sidebar panel color [*Optional*]
 - **brand-color** - Sidebar brand color [*Optional*]
 - **brand-name** - Brand Name [*Required*]
 
**Named Slots**

 - navbar - Slot for Navigation menu bar
 - sidebarMenu - Slot for sidebar menu items `<li>`
 - breadcrumbItems  - Slot for Breadcrumb items `<li>`
 - sidebarUserPanel - Slot for sidebar user panel
 - content - Slot where the content to be inserted
 - footer  - Slot where the footer or company details or info to be inserted
 - headerImports - Slot in header where the custom css or js file to be inserted
 - footerImports - Slot in footer where the custom js file to be inserted
 
```php
<x-sintex-layout-sidebar 

	title="Server Error!" 
	header-text="test" 
	nav-bar-color="navbar-dark navbar-success"
	sidebar-color="sidebar-light-warning" 
	brand-color="navbar-primary" 
	brand-name="Helpdesk 4">

    <x-slot name="breadcrumbItems">

        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>

    </x-slot>
    
</x-sintex-layout-sidebar>
```

To see the full example implementation of the component, publish the views that can be found after publishing in `/views/vendor/sintex-layouts/sidebar`


## Credits

 [**Laravel Framework**](https://github.com/laravel/laravel) ![enter image description here](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)
[**Admin LTE 3**](https://github.com/ColorlibHQ/AdminLTE/)![enter image description here](https://camo.githubusercontent.com/27d69461ad4caeb670264814c1fb624faadc9dca/68747470733a2f2f61646d696e6c74652e696f2f41646d696e4c5445332e706e67)
