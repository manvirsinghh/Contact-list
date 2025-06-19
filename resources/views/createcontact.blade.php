<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List Form</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="heading">Contact List Form</h1>

        <div class="form-wrapper">
            <form action="{{ url('create-contact') }}" method="POST" class="contact-form">
                @csrf

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Enter the name of contact" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone No:</label>
                    <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Enter the contact number">
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn3">Add Contact</button>
            </form>
        </div>
    </div>
</body>
</html>
