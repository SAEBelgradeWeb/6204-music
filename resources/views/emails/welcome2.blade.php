@component('mail::message')
# Welcome to our platform
## It is so good to see you here

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, atque consequatur culpa deleniti eligendi excepturi id maiores molestias neque non, omnis, porro qui quibusdam recusandae reiciendis sapiente similique. Accusamus, necessitatibus.

@component('mail::button', ['url' => 'http://google.com', 'color' => 'success'])
Login here
@endcomponent


@component('mail::button', ['url' => 'http://google.com', 'color' => 'error'])
    Do some nasty thing
@endcomponent

@component('mail::panel')
    This is the panel content.
@endcomponent

@component('mail::table')
    | Laravel       | Table         | Example  |
    | ------------- |:-------------:| --------:|
    | Col 2 is      | Centered      | $10      |
    | Col 3 is      | Right-Aligned | $20      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
