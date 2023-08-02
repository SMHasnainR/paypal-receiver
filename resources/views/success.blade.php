<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Success</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Add your CSS stylesheets and other meta tags here -->
</head>
<body>
    <header class="py-4 text-center bg-primary text-white">
        <!-- Add your header content here -->
        <h1>Payment Successful</h1>
    </header>

    <main class="container my-4">
        <div class="illustration text-center">
            <!-- Add your captivating illustration here -->
            <!-- Example: <img src="/path/to/illustration.png" alt="Payment Success Illustration" class="img-fluid"> -->
        </div>
        
        <div class="message text-center mt-4">
            <!-- Add your success message here -->
            <p class="lead">Payment is Successful.</p>
        </div>
        
        <div class="transaction-id text-center mt-4">
            <!-- Display the transaction ID here -->
            <p>Your Transaction ID is: {{ $arr['id'] }}</p>
        </div>

        <div class="confirmation-details text-center mt-4">
            <!-- Add any additional details here, e.g., date, time, amount -->
        </div>

        <div class="call-to-action text-center mt-4">
            <!-- Add a call to action button or link here -->
            Go to 
            <a href="{{route('home')}}">
                Home 
            </a>
        </div>
    </main>

    {{-- <footer class="py-3 bg-light text-center">
        <!-- Add your footer content here -->
        <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
    </footer> --}}

    <!-- Add Bootstrap JS and other JavaScript scripts here if necessary -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.3/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
</body>
</html>
