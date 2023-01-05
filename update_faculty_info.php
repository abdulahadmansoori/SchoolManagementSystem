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
    <title>Update Faculty Information</title>
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
                                <h6 class="d-inline"><a href="http://localhost/SMS/faculties.php" class="text-black"><i class="bi bi-arrow-left-square-fill"></i></a> Update Faculty Information</h6>
                                <!-- <a href="http://localhost/SMS/staffs.php" class="text-black d-flex justify-content-end"><i class="bi bi-arrow-left-square-fill"> </i>  Back</a> -->
                            </div>
                            <form action="">
                                <div class="detailsCard row g-1">
                                    <div class="col-sm-1">
                                        <!-- <button class="btn bg-warning text-white ms-2 fw-bolder w-100" id="get_std_data_for_update">Get Data</button> -->
                                        <label class="form-label" for="id">Faculty Id</label>
                                    </div>
                                    <div class="col-sm-11">    
                                        <input class="form-control" type="text" name="id" id="id" disabled value="<?php echo $_GET['id'] ?>">
                                    </div>
                                </div>
                            </form>
                            <form action="" method="POST" onsubmit="event.preventDefault();">
                                <!-- student details -->
                                <div class="detailsCard">
                                    <span>Details</span>
                                    <div class="row g-3 mb-1">
                                        <div class="col-sm-6">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="" >
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-1">
                                        <div class="col-sm-4">
                                            <label for="gender"  class="form-label">Gender</label>
                                            <select name="gender" id="gender" class="form-select">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="blood_group" class="form-label">Blood Group</label>
                                            <input type="text" name="blood_group" id="blood_group" class="form-control" placeholder="" >
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-1">
                                        <div class="col-sm-3">
                                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="birth_place" class="form-label">Place of Birth</label>
                                            <input type="text" name="birth_place" id="birth_place" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="religion" class="form-label">Religion</label>
                                            <select name="religion" id="religion" class="form-select">
                                                <option value="Muslim">Muslim</option>
                                                <option value="Non-Muslim">Non-Muslim</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-1">
                                        <div class="col-sm-3">
                                            <label for="state" class="form-label">State</label>
                                            <input type="text" name="state" id="state" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" name="city" id="city" class="form-control" placeholder=""  >
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" name="address" id="address" class="form-control" placeholder=""  >
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <!-- family details -->
                                <div class="detailsCard">
                                    <span>Family Details</span>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="father_name">Father Name</label>
                                            <input type="text" name="father_name" id="father_name" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="mother_name">Mother Name</label>
                                            <input type="text" name="mother_name" id="mother_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <label class="form-label" for="v">State</label>
                                            <input type="text" name="parent_state" id="parent_state" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="parent_city">City</label>
                                            <input type="text" name="parent_city" id="parent_city" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="parent_address">Address</label>
                                            <input type="text" name="parent_address" id="parent_address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="parent_email">Parent Email</label>
                                            <input type="email" name="parent_email" id="parent_email" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="parent_contact">Parents Contact</label>
                                            <input type="number" name="parent_contact" id="parent_contact" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <!-- Education details -->
                                <div class="detailsCard">
                                    <span>Education Details</span>
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education01">Matriculation</label>
                                            <input class="form-control" type="text" name="education01" id="education01" placeholder="Institute Name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education01_year">Year</label>
                                            <input class="form-control" type="number" name="education01_year" id="education01_year">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education01_subject">Subject</label>
                                            <input class="form-control" type="text" name="education01_subject" id="education01_subject">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education02">Intermediate</label>
                                            <input class="form-control" type="text" name="education02" id="education02" placeholder="Institute Name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education02_year">Year</label>
                                            <input class="form-control" type="number" name="education02_year" id="education02_year">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education02_subject">Subject</label>
                                            <input class="form-control" type="text" name="education02_subject" id="education02_subject">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education03">Graduation</label>
                                            <input class="form-control" type="text" name="education03" id="education03" placeholder="Institute Name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education03_year">Year</label>
                                            <input class="form-control" type="number" name="education03_year" id="education03_year">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education03_subject">Subject</label>
                                            <input class="form-control" type="text" name="education03_subject" id="education03_subject">
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education04">Master</label>
                                            <input class="form-control" type="text" name="education04" id="education04" placeholder="Institute Name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education04_year">Year</label>
                                            <input class="form-control" type="number" name="education04_year" id="education04_year">
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label" for="education04_subject">Subject</label>
                                            <input class="form-control" type="text" name="education04_subject" id="education04_subject">
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3 d-flex justify-content-end mx-4">
                                    <button class="btn btn-secondary ms-2" id="cancel_faculty_update">Cancel</button>
                                    <button class="btn bg-warning text-white ms-2 fw-bolder" id="update_faculty"
                                        type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="./jquery-3.6.1.min.js"></script>
    <!-- <script src="./script/student.js" defer></script> -->
    <script src="./script/update_faculty.js" defer></script>
    <script src="./app.js"></script>

</body>

</html>
