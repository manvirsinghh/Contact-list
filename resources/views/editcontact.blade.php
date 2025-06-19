<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container1">
        <h2 class="title1">Edit Contact</h2>

        <form method="POST" action="{{ url('update-contact/' . $contact->id) }}" class="edit-form">
            @csrf

            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name', $contact->name) }}" required>
            </div>

            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}" required>
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn1">Update Contact</button>
        </form>
    </div>
</body>
</html>
