1)
@section('name')
    
@endsection

- Can be used to define a section and to yield the contents of a section.
    example:--
                // define a section called header in filename.blade.php 

                 @section('header')
                 <h1>This is the header</h1>
                 @endsection
                 

                  // we can yield this in php file 

                  <div class="header">
                  @yield('header')
                  </div>

2) @hasSection 
    
- Determine if a template section has a content.

- @hassection directive is a convenient way to  used to determine if a section has any content.

- @hassection directive takes a section name as its argument.

- @hassection directive can help you to avoid errors and to make your templates more readable.

     example:-- 
             @hasSection('navigation')
     // div element will not be rendered if there is no content in navigation.
             <div class="pull-right">
                  @yield('navigation')
             </div>
             @endif
     // render the content section if the navigation section has content
             @if(hasSection('content'))
               <div class="content">
                   @yield('content')
               </div>
             @endif

     example:--_
         @hasSection('navigation')
         // div element will not be rendered if there is no content in navigation.
             <div class="pull-right">
                  @yield('navigation')
             </div>
  
             <div class="clearfix"></div>
         @endif


3) @sectionMissing
  
    - @sectionMissing directive to determine if a section does not have content.

    - example:---
              @sectionMissing('navigation')
              // float an element to right of its container.
              <div class = "pull-right">
                @include('default-navigation')
              </div>
              @endif
    
     - example:--- 
          // @sectionMissing can be used to onditionally render content.
       
               @sectionMissing('navigation')
               <div class = "pull-right">
                @include('default-navigation')
               </div>
               @endif
            // Only render the content section if navigation section does not have content.
               @if (sectionMissing('content'))
               <div class='content'>
                @yield('content')
               </div>
                   
               @endif