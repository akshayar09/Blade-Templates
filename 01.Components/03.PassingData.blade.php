// We can pass data to blade components using HTML attributes.

// PHP expressions and variables should be passed to the component via attributes 
    that use " : " char as prefix.

   ex:-- 
      <x-alert type="error" : message="$message"/>

// One should define all the components data attributes 
   in its class constructor.

// All public props on a component will automatically be made 
   available to the component's view.

// But not necessary to pass data to the view from the components render method.


<?php
namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
class Alert extends Component
{
/*     Create the component instance
 */
   public function __constructor
   (
    public string $type,
    public string $message,

   ){}
      /* Get the view / contents that represent the component. */ 
       public function render(): View 
       {
        return view('components.alert');
       }
    
}
?>

// When component is rendered , we may display contents of our component's public 
   variables by echoing the variables by name:---
   <div class="alert alert-{{ $type }}">
        {{ $message }}
   </div>