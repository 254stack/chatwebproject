<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaging portal</title>
    <H2>MESSAGES PORTAL</H2>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/img/branchcover.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

        }

        h2 {
            text-align: center;
            border-bottom: 2px solid #4CAF50;
            line-height: 1.5;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #ddd;
            margin: 60px auto;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;

        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        td:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
    </style>
</head>

<body>
    @if (session('message'))
        <div style="background-color: #4CAF50; color: white; text-align: center; padding: 10px; margin: 10px;">
            {{ session('message') }}
        </div>
    @endif

    <table>
        <tr>
            <td>User_id</td>
            <td>Created_at</td>
            <td>Message_body</td>
            <td>Actions</td>
        </tr>


        @foreach ($data as $data)
            <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->message_body }}</td>
                <td>
                    <a href="{{ url('/messages/' . $data->id . '/edit') }}">Reply</a>
            </tr>
        @endforeach


    </table>

</body>

</html>
