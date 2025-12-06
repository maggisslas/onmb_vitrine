@extends('emails.template.model')

@section('content')

    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">

        <tr>
            <td>
                <h2 style="font-size:24px; margin:0 0 20px 0;">
                    Contact
                </h2>
            </td>
        </tr>

        <tr>
            <td>
                Vous avez reçu un mail depuis votre site et voici les détails :
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li>Nom : {{ $data->fullname }}</li>
                    <li>Société : {{ $data->enterprise }}</li>
                    <li>Téléphone : {{ $data->phone }}</li>
                    <li>Email : {{ $data->email }}</li>
                    <li>Demande : {{ $data->ask }}</li>
                    <li>Message : {{ $data->message }}</li>
                </ul>
            </td>
        </tr>

    </table>


@endsection
