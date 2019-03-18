@component('mail::message')
    # New Order

    User name: {{$order->name}}
    User email: {{$order->email}}
    Product id: {{$order->product_id}}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
