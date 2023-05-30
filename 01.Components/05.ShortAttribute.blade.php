
// When passing attributes to components, you may also use a "short attribute" syntax.

// Its convenient since attribute names frequently match the variable names they correspond to. 

example:---> 
     
    {{-- Short attribute syntax --}}
    <x-profile : $userId : $name/>

    {{-- Is equivalent to  --}}
    <x-profile :user-id="$userId" :name="$name"/>