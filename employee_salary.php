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
    <title>Student Registration</title>
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
                        <!-- Student Admission -->
                        <div class="col-md-12">
                            <form action="" method="POST" onsubmit="event.preventDefault();">
                                <div class="detailsCard">
                                    <h6>Employee Salary</h6>
                                </div>
                                <div class="row detailsCard">
                                    <div class="col-sm-2">
                                        <select name="employee" class="form-select-sm w-100" id="employee">
                                            <option value="">Employee</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <input name="date" type="date" />
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="fetch" class="btn btn-sm btn-secondary w-100"><i class="bi bi-search"></i>
                                            fetch</button>
                                    </div>
                                </div>
                            </form>
                            <h6>Monthly Report</h6>
                            <table class="table table-hover text-center w-50" id="emp_table">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <!-- <th>Lates</th>
                                    <th>Absents</th>
                                    <th>OnTime</th> -->
                                </tr>
                                <tr>
                                    <th id='emp_id'></th>
                                    <th id='emp_name'>abdul ahad</th>
                                    <!-- <th>2</th>
                                    <th>1</th>
                                    <th>9</th> -->
                                </tr>
                            </table>
                            
                            <h6>Salary Calculation</h6>
                            <table class="table table-hover text-center w-50" id="emp_table">
                                <tr>
                                    <th>Salary</th>
                                    <th>-</th>
                                    <td id='salary'>-</td>
                                </tr>
                                <tr>
                                    <th>Present</th>
                                    <th id="prasent">-</th>
                                    <td class="">-</td>
                                </tr>
                                <tr>
                                    <th>Late</th>
                                    <th id="late">-</th>
                                    <td id="lateAmount"class="text-warning">-</td>
                                </tr>
                                <tr>
                                    <th>Absent</th>
                                    <th id='absent'>-</th>
                                    <td id='absentAmount' class="text-danger">-</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <th>-</th>
                                    <th id='totalSalary'class="text-success">-</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>

    </footer>
    <!-- SELECT status, count(status) FROM `faculty_attendance` WHERE fac_id = 8 group by status -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./jquery-3.6.1.min.js"></script>
    <script src="./script/employee_salary.js" defer></script>
    <script src="./app.js"></script>

</body>

</html>

<!-- $("label")[0].id; -->