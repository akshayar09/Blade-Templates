

- When a component is made up of many blade templates,
   
     its good to group the given component's templates within a single directory.

- example:---- 
       /resources/views/components/accordion.blade.php
       /resources/views/components/accordion/item.blade.php

    - This allows us to render the accordion component and its item like:-- 
        <x-accordion>
            <x-accordion.item>
                .... 
            </x-accordion.item>
        </x-accordion>
        
    - Blade allows to place an index.blade.php file within it.

    /resources/views/components/accordion/index.blade.php
    /resources/views/components/accordion/item.blade.php

    - When an index.blade.php file exists for the component , it will be rendered as the " root " node of component. 
