<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <!-- Add Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- Add your CSS stylesheets and other meta tags here -->
</head>
<body>
    <header class="py-4 text-center bg-danger text-white">
        <!-- Add your header content here -->
        <h1>Oops! Something went wrong.</h1>
    </header>

    <main class="container my-4">
        <div class="illustration text-center">
            <!-- Add your relevant illustration here -->
            <!-- Example: <img src="/path/to/error-illustration.png" alt="Error Illustration" class="img-fluid"> -->
        </div>
        
        <div class="message text-center mt-4">
            <!-- Add your error message here -->
            <p class="lead">We're sorry, but there was an error processing your payment.</p>
        </div>
        
        <div class="error-details text-center mt-4">
            <!-- Add additional error details here -->
            <!-- Example: <p>Error code: 500</p> -->
        </div>

        <div class="call-to-action text-center mt-4">
            <!-- Add a call to action button or link here -->
             <a href="{{ route('home') }}" class="btn btn-primary">Retry Payment</a> 
        </div>
    </main>


    <!-- Add Bootstrap 4 JS and other JavaScript scripts here if necessary -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
