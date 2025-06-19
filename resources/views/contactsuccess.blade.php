<!DOCTYPE html>
<html>
<head>
    <title>Contact Added</title>
    <script>
        // Redirect after 20 seconds
        setTimeout(function() {
            window.location.href = "{{ url('display') }}";
        }, 2000); 
    </script>
</head>
<body>
    <h2 style="color: green;">Contact added successfully!</h2>
    <p>You will be redirected in 20 seconds...</p>
</body>
</html>
