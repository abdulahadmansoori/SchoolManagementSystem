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
    <title>Class Time Table</title>
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
                                <h6>Class Time Table</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <form action="">

                                        <div class="row detailsCard">
                                            <div class="col-sm-2">
                                                <select name="class" class="form-select" id="class">
                                                    <option value="class">Class</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <select name="section" class="form-select" id="section">
                                                    <option value="section">Section</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Search" class="form-control">
                                            </div>
                                            <div class="col-sm-2">
                                                <button class="btn btn-secondary w-100" id="fetch"><i class="bi bi-search" ></i>
                                                    fetch</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="detailsCard">
                                        <table class="table table-hover text-center w-100">
                                            <tr>
                                                <th>P#</th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                            </tr>
                                            <tr>
                                                <th>01 <span class="d-block">08:00 - 08:45</span></th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr>
                                            <tr>
                                                <th>02 <span class="d-block">08:45 - 09:30</span></th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr>
                                            <tr>
                                                <th>03 <span class="d-block">09:30 - 10:15</span></th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr>
                                            <tr>
                                                <th>04 <span class="d-block">10:15 - 11:00</span></th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr>
                                            <tr>
                                                <th>05 <span class="d-block">11:00 - 11:45</span></th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr>
                                            <tr>
                                                <th>06 <span class="d-block">12:15 - 01:00</span></th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr>
                                            <tr>
                                                <th>07 <span class="d-block">01:00 - 01:45</span></th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                <!-- <div class="col-sm-2"></div> -->
                            </div>
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
<script src="./script/classTimeTable.js"></script>
<script src="./app.js"></script>

</html>