<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank you</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- favicon section  -->
        <!-- <link rel="icon" type="image/x-icon" href="assets/myfavicon/favicon.ico">
        <link rel="icon" type="image/x-icon" href="assets/myfavicon/android-chrome-192x192.png">
        <link rel="icon" type="image/x-icon" href="assets/myfavicon/android-chrome-512x512.png">
        <link rel="icon" type="image/x-icon" href="assets/myfavicon/apple-touch-icon.png">
        <link rel="icon" type="image/x-icon" href="assets/myfavicon/favicon-16x16.png">
        <link rel="icon" type="image/x-icon" href="assets/myfavicon/favicon-32x32.png">
        <link rel="manifest" href="assets/myfavicon/site.webmanifest" /> -->

    <!-- End favicon section  -->
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div>
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Thank You !</h1>
                    <p>For contacting with us, We will Get back To you soon...!!</p>
                   
                  
                    <?php include('sentMail.php'); ?>
                    
                    <a href="index">
                        <button class="btn btn-primary"><b>Go To Home Page</b></button>
                    </a>
                </div>
               
            </div>
    </body>

</html>



















