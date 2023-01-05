<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="./jquery-3.6.1.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Fees</title>
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
                <div class="col-lg-10 Main-Content overflow-auto">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="detailsCard">
                                <h6>Fee Status</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <form action="">

                                        <div class="row detailsCard">
                                            <div class="col-sm-2">
                                                <select name="sort" class="form-select">
                                                    <option value="name">name</option>
                                                    <option value="id">Id</option>
                                                    <option value="class">Class</option>
                                                    <option value="not_paid">Fee Defaulter</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" placeholder="Search" class="form-control">
                                            </div>
                                            <div class="col-sm-2">
                                                <button class="btn btn-secondary w-100"><i class="bi bi-search"></i>
                                                    fatch</button>
                                            </div>
                                        </div>
                                        <div class="detailsCard">
                                            <div class="row g-3 mb-1">
                                                <div class="col-sm-4">
                                                    <label for="Status">ID</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="Status">Name</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="Status">Status</label>
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-1">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" value="G0034" disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" value="Faraz Yasir"
                                                        disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="sort" class="form-select">
                                                        <option value="not_paid">Not Paid</option>
                                                        <option value="paid">Paid</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-1">
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" value="G0034" disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" value="Faraz Yasir"
                                                        disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="sort" class="form-select">
                                                        <option value="not_paid">Not Paid</option>
                                                        <option value="paid">Paid</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="col-sm-2"></div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <footer>

    </footer>

</body>
<script src="./jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<script src="./app.js"></script>

</html>