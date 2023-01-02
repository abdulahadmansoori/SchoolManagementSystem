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
    <title>Attendance</title>
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
                                <h6>Attendance</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <form action="">
                                        <h6>Mark Attendance</h6>

                                        <!-- <div class="detailsCard row">
                                            <div class="col-sm-6">
                                                <select name="class" class="form-select">
                                                    <option value="">Select Operation</option>
                                                    <option value="mark">Mark Attendance</option>
                                                    <option value="check">Check Attendance</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn btn-secondary w-100">Next</button>
                                            </div>
                                        </div> -->
                                        <div class="detailsCard">
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <!-- <label for="class" class="form-label">Class</label> -->
                                                    <select name="class" class="form-select-sm w-100">
                                                        <option value="Class">Class</option>
                                                        <option value="I">I</option>
                                                        <option value="II">II</option>
                                                        <option value="III">III</option>
                                                        <option value="IV">IV</option>
                                                        <option value="V">V</option>
                                                        <option value="VI">VI</option>
                                                        <option value="VII">VII</option>
                                                        <option value="VIII">VIII</option>
                                                        <option value="IX">IX</option>
                                                        <option value="X">X</option>
                                                        <option value="XI">XI</option>
                                                        <option value="XII">XII</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- <label for="section" class="form-label">Section</label> -->
                                                    <select name="section" class="form-select-sm w-100">
                                                        <option value="section">Section</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- <label for="" class="form-label">Operation</label> -->
                                                    <button class="btn btn-sm btn-secondary w-100">Fatch Data</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="detailsCard ">
                                            <table class="table table-hover w-100">
                                                <tr>
                                                    <th><div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck"></div></th>
                                                    <th>ID</th>
                                                    <th>NAME</th>
                                                    <th>CLASS</th>
                                                    <th>SECTION</th>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck"></div></td>
                                                    <td>G0034</td>
                                                    <td>Faraz Yasir</td>
                                                    <td>XI</td>
                                                    <td>B</td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck"></div></td>
                                                    <td>G0034</td>
                                                    <td>Faraz Yasir</td>
                                                    <td>XI</td>
                                                    <td>B</td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-check"><input class="form-check-input" type="checkbox" id="gridCheck"></div></td>
                                                    <td>G0034</td>
                                                    <td>Faraz Yasir</td>
                                                    <td>XI</td>
                                                    <td>B</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="mb-3 d-flex justify-content-end">
                                            <button class="btn bg-secondary bg-opacity-50 text-white mx-2">Cancel</button>
                                            <button class="btn bg-warning text-white">Submit</button>
                                        </div>
                                    </form>

                                    
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
<script src="./app.js" defer></script>

</html>