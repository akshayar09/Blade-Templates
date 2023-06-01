// In addition to public variables being available to your component template,

// any public methods on the component may be invoked.

// -example:--- component with isSelected method 
    <?php
     public function  isSelected(string $option): bool 
     {
        return $option === $this->selected ;
     }
     ?>

   - To execute this method from ur component template by invoking the variable matching the name method :
       <option {{$isSelected ($value)? ''}}value = "{{ $value}}">
           {{ $label }}
           </option>


    