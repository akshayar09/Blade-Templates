

- Alternatively we may use " componentNamespace" method to autoload component classes by convention.

- example:--- 
         a "Nightshade" package might have Calender & ColorPicker components that reside within the  " Package\Views\Components" namespace.

         use Illuminate\Support\Facades\Blade;
         /**
          * Bootstrap your package's services.
          */
          public function boot():void
          {
            Blade::componentNamespace('Nightshade\\Views\\Components','nightshade');
          } 


- This will allow the usage of package components by their vendor namespace using the " package-name:: " syntax.

        <x-nightshade::calender />
        <x-nightshade::color-picker />

