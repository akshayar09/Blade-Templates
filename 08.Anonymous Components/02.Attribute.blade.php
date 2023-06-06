

- Anonymous components do not have any associated class.

- So it will be a issue how we may differentiate which data should be passed to the component as variable

    & which attributes should be placed in the component's " attribute's bag".

- We should specify which attributes should be considered data variables using the " @props " directive at the top of the component's blade template. 

- All the other attributes of the component will be available via the component's attribute bag.

- If we want to give a data variable a default value, we should specify the variable's name as the array key and default value as athe array value: 

-     <!-- /resources/views/components/alert.blade.php -->
      @props(['type'=>'info','message'])
      <div {{ $attributes->merge(['class'=>'alert aert-'.$type])}}>
          {{ $message }}
      </div>  

      - Then we may render the component like: 

      <x-alert type="error" :message="$message"class='mb-4'/>

      