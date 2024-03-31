<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to WhatsApp...</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div class="alert alert-success mt-5 mb-5 ml-4 mr-4" role="alert">
    Your form has been submitted successfully.
</div>

<button class="ml-4" onclick="goBackToWebsite()">Go Back to Website</button>

<script>

    window.open("{{ $whatsappLink }}", "_blank");


    function goBackToWebsite() {
        window.location.href = "/";
    }
</script>

</body>
</html>
