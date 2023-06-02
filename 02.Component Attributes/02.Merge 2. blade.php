
         CONDITIONALLY MERGE CLASSESS 

// Sometimes we want to mere classes if a given condition is " true" .

// We can do this via " class " method .

// This method accepts an array of classes where the array key contains the class/classes you wish to add. 

// While the value is a boolean expression.

// If the array element has a numeric key, it will always be included in the rendered class list: 

   <div {{ $attributes -> class(['p-4', 'bg-red' => $hasError])}}>
        {{ $message}}
   </div>

// If you need to merge other attributes onto your component,

// we can chain the merge methd onto the class method.

      <button {{ $attributes->class(['p-4'])->merge(['type'=>'button'])}}>
        {{ $slot }}
      </button>