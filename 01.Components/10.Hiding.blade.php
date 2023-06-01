
// To prevent some public methods or properties from being 

// exposed as variables to your component template, 

// we may add them to an $except array property on your component: 

// example:--- 

   <?php
   namespace App\View\Components;
   use Illuminate\View\Component;
   class Alert extends Component
   {
    /* 
    * The properties / methods that should not be exposed to the component template. 
    * 
    * @var array
    */
    protected $except =['type'];

    /* 
    * Create the component instance.
    */
    public function __construct 
    (
        public string $type,
    ){}
   }
   ?>