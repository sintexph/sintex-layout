
# Laravel 7 Sintex Layout Powered by Admin LTE 3

**Installation**

    composer require sintex/sintex-layout
**Publishing Layout**

## Top Navigation Component

    x-sintex-layout-top-nav
**Usage**

    <x-sintex-layout-top-nav  
    
    title="Page Title" 
    header-text="Dashboard" 
    header-text-sm="This is the dashboard" 
    nav-bar-color="navbar-dark navbar-success"  
    brand-name="My Company">
    
    </x-sintex-layout-top-nav>

**Parameters**

 - Title [*Required*]
 - Header Text [*Required*]
 - Header Text Small [*Required*]
 - Navigation Bar Color [*Optional*]
 - Brand Name [*Required*]

Just add the parameters inside the component tag.

**Named Slots**

 - navbar - Slot for Navigation menu bar
 - breadcrumbItems  - Slot for Breadcrumb items `<li>`
 - content - Slot where the content to be inserted
 - footer  - Slot where the footer or company details or info to be inserted
 - headerImports - Slot in header where the custom css or js file to be inserted
 - footerImports - Slot in footer where the custom js file to be inserted

Insert the slots inside the component like show usage below.
 
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
   To see the full example implementation of the component, publish the views that can be found after publishing in `/views/vendor/sintex-layouts/top-nav`