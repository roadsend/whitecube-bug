

## WhiteCube Flexible Layouts Attributes Bug Test

When using whitecube/nova-flexible-content blade components can not merge attributes normally.
If it is attempted the following error is generated.
> TypeError: trim(): Argument #1 ($string) must be of type string, App\Nova\Flexible\Layouts\TextWithLink given


### Set up:
### After normal composer install (with nova 3 credentials)
>> npm run dev
> 
>> php artisan cube:add

#
#### Cube Test show normal component attribute working
#### ignored test shows failing component output

### Remarked Out Component in cube.blade:
>: <x-cube-caption-link-with-attributes class='hover:text-purple-500' :section="$section" />


 ### Remarked out line item in cube-box.blade
>: {{--    <li {{ $attributes->merge(['class' => 'list-none text-blue-400']) }}> {{ $cube->name }} </li>--}}



