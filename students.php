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

<body id="details">
    <!-- <header>
        <h3>School Management System</h3>
    </header> -->
    <section class="main">
        <div class="container-fluid">
            <div class="row student_info">
                <?php
                include("./_navbar.php");
                ?>
                <div class="col-lg-10 px-3 Main-Content overflow-auto" id="Main-Content">
                    <i class="bi bi-list px-4" id="hambargar"></i>
                    <div class="row px-3">
                        <h4>Students</h4>
                        <form action="">
                            <div class="row">
                                <div class="col-sm-2">
                                    <select name="sort" class="form-select">
                                        <option value="class">Name</option>
                                        <option value="class">Class</option>
                                    </select>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="Search" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-secondary w-100"><i class="bi bi-search"></i> fetch</button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-hover text-center w-100" id="std_table">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Created On</th>
                                <th>Options</th>
                            </tr>
                            <!-- <tr>
                                <th>07</th>
                                <td>Subject 01</td>
                                <td>Subject 02</td>
                                <td>Subject 03</td>
                                <td>Subject 04</td>
                                <td> <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-placement="bottom" data-bs-title="View" data-bs-target="#updateInfo"></i>
                            </td>
                            </tr> -->
                        </table>
                    </div>
                    <div class="row px-3 update_student">
                        <form action="" method="POST" onsubmit="event.preventDefault();">
                            <div class="detailsCard">
                                <h6>Update Student Information</h6>
                            </div>
                            <!-- student details -->
                            <?php
                            include("./_stdForm.php");
                            ?>
                            <div class="mb-3 d-flex justify-content-end mx-4">
                                <button class="btn btn-secondary ms-2">Cancel</button>
                                <button class="btn bg-warning text-white ms-2 fw-bolder" id="update_student" type="submit">Update</button>
                            </div>
                        </form>
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
    <script src="./script/student.js"></script>
<script src="./app.js"></script>


</html>