<!DOCTYPE html>

<head>
    <title>Reply to Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

</head>

<body>
    <h1>Reply to Message</h1>
    <div class="container">
        <h1>Reply to Message</h1>
        <form action="{{ url('/messages/' . $message->id . '/reply') }}" method="POST">
            @csrf
            <div class="row">
                <label for="messageReply">Message Body</label>
                <input type="text" id="messageBody" name="messageBody" value="{{ $message->message_body }}">
            </div>

            <div class="row">
                <label for="messageReply">Message</label>
                <textarea id="messageReply" name="messageReply"></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
