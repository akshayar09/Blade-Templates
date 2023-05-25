
// Allows to define a portion of the template that will only be 

// evaluated once per rendering cycle.

// Helpful when pushing a piece of javascript into the page's header using stacks.

- example:--- 

      @once
          @push('scripts')
              <script>
                // push javascript here
              </script>
          @endpush
      @endonce

- @pushOnce 

  // Often used in conjunction with @push or @prepend 

  @pushOnce('scripts')
      <script>
        // push javascript here
      </script>
  @endPushOnce

  and

  @prependOnce('scripts')
      
  @endPrependOnce


  