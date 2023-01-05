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
    <title>Update Students Information</title>
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
                            <div class="m-4">
                                <h6 class="d-inline"><a href="http://localhost/SMS/students.php" class="text-black"><i class="bi bi-arrow-left-square-fill"></i></a> Update Staff Information</h6>
                                <!-- <a href="http://localhost/SMS/staffs.php" class="text-black d-flex justify-content-end"><i class="bi bi-arrow-left-square-fill"> </i>  Back</a> -->
                            </div>
                            <form action="">
                                <div class="detailsCard row g-1">
                                    <div class="col-sm-1">
                                        <!-- <button class="btn bg-warning text-white ms-2 fw-bolder w-100" id="get_std_data_for_update">Get Data</button> -->
                                        <label class="form-label" for="id">Student Id</label>
                                    </div>
                                    <div class="col-sm-11">    
                                        <input class="form-control" type="text" name="id" id="id" disabled value="<?php echo $_GET['id'] ?>">
                                    </div>
                                </div>
                            </form>
                            <form action="" method="POST" onsubmit="event.preventDefault();">
                                <!-- <div class="detailsCard">
                                    <h6>Student Admission Form</h6>
                                </div> -->
                                <!-- student details -->
                                <?php
                                include("./_stdForm.php");
                                ?>
                                <div class="mb-3 d-flex justify-content-end mx-4">
                                    <button class="btn btn-secondary ms-2" id="cancel_student_update">Cancel</button>
                                    <button class="btn bg-warning text-white ms-2 fw-bolder" id="update_student"
                                        type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="./jquery-3.6.1.min.js"></script>
    <script src="./script/update_student.js" defer></script>
    <script src="./app.js"></script>

</body>

</html>
