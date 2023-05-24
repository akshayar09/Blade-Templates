

- @class directive compiles a CSS clss string.

- It accepts an array of classes where the array key contains the class / classes u have to add,

- While the value is  a boolean expression.

- example:--- 

      @php
          $isActive = false;
          $hasError = true;
      @endphp
      <span @class([
        'p-4', 
        'font-bold' => $isActive,
        'text-gray-500' => ! $isActive,
        'bg-red' => $hasError,
        ])></span>
        <span class = 'p-4 text-gray-500 bg-red'></span>


_____________________________ 
     @style directive may be used to conditionally add inline CSS styles to an HTML element.

     example:--- 

        @php
            $isActive = true;
        @endphp
        <span @style([
            'background-color: red',
            'font-weight: bold'=> $isActive,
        ])></span>

        <span style="background-color: red; font-weight: bold;"></span>


