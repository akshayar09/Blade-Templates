

- At some point we may need to access data from a parent component inside a child component.

- Here we use @aware(['propName']) directive.

- example:-- 
        building a complex menu component consisting of a parent <x-menu> & child <x-menu.item>;

               <x-menu color="purple">
                 <x-menu.item>...</x-menu.item>            
                 <x-menu.item>...</x-menu.item>
               </x-menu>
               
        - The <x-menu> component may have an implementation like this:- 
                
                <!-- /resources/views/components/menu/index.blade.php -->
                 @props(['color'=>'gray'])

                 <ul {{ $attributes -> merge(['class'=>'bg-'.$color.'-200'])}}>
                     {{ $slot }}
                 </ul>

        - color prop was only passed into the parent(<x-menu>),

            it wont be available inside <x-menu.item> 

                <!-- /resources/views/components/menu/item.blade.php -->
                 @aware(['color'=>'gray'])
                 <li {{ $attributes -> merge(['class'=>'text-'.$color.'-800'])}}>
                     {{ $slot }}
                 </li>
        - The @aware(['propName']) directive can't access parent data that is not explicitly passed to the parent component via HTML attributes.

        - Default @props(['propName']) vlaues that are not explicitly passed to the parent component can't be accessed by the @aware(['propName']) directive. 
        

              