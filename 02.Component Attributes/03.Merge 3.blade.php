
             NON - CLASS ATTRIBUTE MERGING 

// When merging attributes whch are not class attributes, 

   the values to the " merge " method will be considered the ' default ' values of the atttribute. 

// Unlike " class " attribute , these attributes will not be merged with injected attribute values. 

// Instead , they will be overwritten.
   * a button component example 
        <button {{ $attributes->class(['type'=>'button'])}}>
            {{ $slot }}
        </button>

    * To render the button component with a custon " type ", it may be specified when consuming 
     
       the component.

    * If no type is specified, the " button " type will be used.
            <x-button type='submit'>
                Submit 
            </x-button> 

    * The rendered HTML of the " button " component will be like this: 
             <button tye="submit">
                Submit 
             </button>

// If it's an attribute other than " class " to have it's efault value & injected values joined together ,

    we may use the " prepends " method. 

// Example:--- 
        <div {{ $attributes->merge(['data-controller'=>$attributes->prepends('profile-controller')])}}>
             {{ $slot }}
        </div>