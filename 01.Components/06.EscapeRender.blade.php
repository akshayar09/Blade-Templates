
// Javascript frameworks such as Alpine.js also use colon-prefixed attributes,

// we use a double colon " :: " prefix to inform BLADE that the attribute is not a PHP expresion.

example:--- 
        component:-- 
        <x-button :: class="{danger : isDeleting}">
            Submit
        </x-button>
    The following HTML will be rendered by BLADE
        <button : class="{danger : isDeleting}">
            Submit
        </x-button>