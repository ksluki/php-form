<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Messages</title>
</head>
<body>
    <h1>Contact Form Messages</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
    @foreach ($messages as $message)
        <div>
            <h3>Name: {{ $message->name }}</h3>
            <p>Email: {{ $message->email }}</p>
            <p>Message: {{ $message->message }}</p>
            <p>Created at: {{ $message->created_at }}</p>
        </div>
    @endforeach
</div>

</body>
</html>
