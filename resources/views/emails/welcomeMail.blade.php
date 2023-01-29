<x-mail::message>
    # Pelcro

    Welcome To Pelcro .

    <x-mail::button :url="'https://www.pelcro.com/en'">
        Visit Our Website
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
