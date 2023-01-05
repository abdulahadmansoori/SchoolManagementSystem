<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="./jquery-3.6.1.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Time Table</title>
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
                                <h6>Class</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <form action="">

                                        <div class="row detailsCard">
                                            <div class="col-sm-2">
                                                <select name="class" class="form-select-sm w-100" id="class">
                                                    <option value="class">Class</option>
                                                    <!-- <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option> -->
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <select name="section" class="form-select-sm w-100" id="section">
                                                    <option value="Section">Section</option>
                                                    <!-- <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option> -->
                                                </select>
                                            </div>
                                            <!-- <div class="col-sm-6">
                                                <input type="text" placeholder="Search" class="form-control">
                                            </div> -->
                                            <div class="col-sm-2">
                                                <button id="fetch" class="btn btn-sm btn-secondary w-100"><i class="bi bi-search"></i>
                                                    fetch</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="detailsCard">
                                        <table class="table table-hover text-center w-100" id="classStudents">
                                            <tr>
                                                <th>#</th>
                                                <th>Std id</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th>Options</th>
                                            </tr>
                                            <!-- <tr>
                                                <th>01</th>
                                                <td>Subject 01</td>
                                                <td>Subject 02</td>
                                                <td>Subject 03</td>
                                                <td>Subject 04</td>
                                                <td>Subject 05</td>
                                            </tr> -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="./script/class.js"></script>
<script src="./app.js"></script>

</html>