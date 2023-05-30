- When writing commponents , they will automaticaly discovered within
  app/View/Components directory.

- If we are building a package that utilizes Blade Compinents,
   then we sould manually register comonent class & HTML tag alias.

- Typically register your components in the BOOT method of the package's service provider.

EXAMPLE:-- 
  use illuminate\Support\Facades\blade
  /**
  * Bootstrap your package's service.
  */
  public function():void
  {
    Blade:@component('package-alert',Alert::class);
        
    
  }
// Once the component has been registered, it may be rendered using its tag alias:
   <x-package-alert/>

2) ALTERNATIVELY we can use componentNamespace method
   
   use Illuminate\Support\Facades\Blade;
   
   {{-- 
    * Bootstrap your package's service.
    --}}
    public function boot(): void
    {
        Blade::componentNamespace('Nightshade\\Views\\Components',"nightshade");
    }

// This will allow usage of package components by their vendor namespace using
     package-name:: syntax.

     <x-nightshade::calender/>
     <x-nightshade::color-picker/>

     // Blade will automatically detect the class to this component.

     




