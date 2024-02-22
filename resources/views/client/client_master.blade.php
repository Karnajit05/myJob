<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>MyJob!</title>
    <style>
    #main-wall {
        position: relative;
        width: 100%;
        height: 600px;
        background-image: url("{{asset('images/job_back.jpg')}}");
        background-size: cover;
    }
    </style>
</head>

<body>


    <div id="main-wall">
        <br>
        <div class="container mt-3 d-flex justify-content-between">
            <div class="d-flex bg-danger">
                <div class="d-flex">
                    <span class="text-white">Home</span>
                    <span class="material-symbols-outlined">
                        expand_more
                    </span>
                </div>

                <span class="text-white">Home</span>
                <span class="text-white">Home</span>
                <span class="text-white">Home</span>

            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-success me-3" style="padding:10 20px 10 20px;border-radius:25px">Sign In</button>
                <button class="btn btn-info" style="padding:10 20px 10 20px;border-radius:25px">Register</button>
            </div>

        </div>

    </div>



</body>

</html>