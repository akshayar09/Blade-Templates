- @include() -- allows to include a BLADE view from another view.

- All variables that are available to the parent view will be made available to included view.

-example:--- 

<div>
    // errors.blade.php from shared 
    @include('shared.errors')
 
    <form>
        <!-- Form Contents -->
    </form>
</div>


- example:--- 
   // included view will inherit all data available.
   // but one may also pass an array of additional data that should be available.

      @include('view.name',['status'=>'complete'])

- @includeIf

     // if we attempt to @include a view which does not exist,
     
     // Laravel throws an error.

     // So if u r not sure that is existig / not 

     // use @includeIf('view.name', ['some' => 'data'])

     // where view.name is the file name


     @includeIf('view.name', ['status' => 'complete'])



- @includeWhen 

      // If we want to @include a view if a given BOOLEAN exp 

      // evaluates to true / false.

      // Here we use @includeWhen  &  @includeUnless 

      @includeWhen($boolean, 'view.name', ['some' => 'data'])

      @includeUnless($boolean, 'view.name', ['some' => 'data'])


- @includeFirst 

      // To include the first view that exists from a given array of views,

      // use @includeFirst

      @includeFirst(['view.name', 'variable'], ['some' => 'data'])

      





