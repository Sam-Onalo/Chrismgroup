@component('mail::message')
# {{ Str::title(Str::lower($name)) }} contacted you
Below are the contact details
<table class="main center" width="602" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td class="column">
                <table class="content" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="padded">
                                <table style="width:100%">
                                    <tr>
                                        <td><strong>Name</strong></td>
                                        <td>{{ $name }}</td>
                                    </tr>
                                    @if (isset($contact))
                                    <tr>
                                        <td><strong>Contact Medium<strong></td>
                                        <td>{{ filter_var($contact, FILTER_VALIDATE_EMAIL) ? 'Email' : 'Phone Call' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>{{ filter_var($contact, FILTER_VALIDATE_EMAIL) ? 'Email Address' : 'Phone Number' }}</strong></td>
                                        <td>{{ $contact }}</td>
                                    </tr>
                                    @else
                                    @php
                                        $contact = $email;
                                    @endphp
                                    <tr>
                                        <td><strong>Phone Number<strong></td>
                                        <td>{{ $phone }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email Address</strong></td>
                                        <td>{{ $email }}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td><strong>Message</strong></td>
                                        <td>{{ $message }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
@component('mail::button', ['url' => (filter_var($contact, FILTER_VALIDATE_EMAIL) ? 'mailto:' : 'tel:') . $contact])
    Contact {{ $name }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
