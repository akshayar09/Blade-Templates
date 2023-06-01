
// If the component requires dependencies from laravel's SERVICE CONTAINER ,

// we should list them beforre any of the component's data attributes & they will 

// automatically br injected by the container.

 example:--- 

    <?php
    use App/Service/AlertCreator;

    /*     
      Create the component instance
    */ 
    public function __construct (
        public AlertCreator $creator,
        
        public string $type,

        public string $message,
    )   {}
    ?>