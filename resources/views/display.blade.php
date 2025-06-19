<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container2">
        <h1 class="title2">User Contact Phone List</h1>

        <table class="contact-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Contact Name</th>
                    <th>Contact Number</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact )
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->updated_at }}</td>
                    <td>
                        <a class="btn-edit" href="{{ url('edit-contact/' . $contact->id) }}">Edit</a>
                        <a class="btn-delete" href="{{ url('delete-contact/'.$contact->id) }}" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="create" class="btn-back">Go Back</a>
    </div>
</body>
</html>
