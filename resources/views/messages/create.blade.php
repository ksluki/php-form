<!DOCTYPE html>
<html>
<head>
    <title>Message Form</title>
</head>
<body>
    <h1>Message Form</h1>
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <hr>

    <h2>Messages</h2>
    <ul>
        @foreach ($messages as $message)
            <li>{{ $message->name }} - {{ $message->email }} - {{ $message->message }} - {{ $message->created_at }}</li>
        @endforeach
    </ul>
</body>
</html>
