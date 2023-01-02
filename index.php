<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="./jquery-3.6.1.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Management System</title>
</head>

<body>
    <!-- <header>
        <h3>School Management System</h3>
    </header> -->
    <section class="main">
        <div class="container-fluid">
            <div class="row">
                <?php
                include("./_navbar.php");
                ?>
                <div class="col-lg-10 px-3 Main-Content overflow-auto" id="Main-Content">
                    <i class="bi bi-list px-4" id="hambargar"></i>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- total students -->
                            <div class="content">
                                <h6>total students</h6>
                                <h2>520</h2>
                                <h6>500-20</h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- total teachers -->
                            <div class="content">
                                <h6>total teachers</h6>
                                <h2>520</h2>
                                <h6>500-20</h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- total staff -->
                            <div class="content">
                                <h6>total staff</h6>
                                <h2>520</h2>
                                <h6>500-20</h6>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- total staff -->
                            <div class="content">
                                <h6>total staff</h6>
                                <h2>520</h2>
                                <h6>500-20</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- main content -->
                        <div class="col-md-12">

                            welcom to school Management System
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer></footer>

</body>
<script src="./jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<script src="./app.js"></script>

</html>