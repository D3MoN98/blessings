@component('mail::message')
# New Contact Details

Hello,

New contact details submiited. Here's the onformation below.

@component('mail::table')
| Name | Email | Subject | Option | Package | Message |
| :-------- |:-------------:|:-------------:|:-------------:|:-------------:| --------:|
| {{$contact->name}} | {{$contact->email}} | {{$contact->subject}} | {{$contact->option}} | {{$contact->package}} | {{$contact->message}} |
@endcomponent

@component('mail::button', ['url' => route('voyager.contacts.show', $contact->id)])
View Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
