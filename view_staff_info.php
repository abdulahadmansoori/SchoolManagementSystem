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
            <div class="row">
                <?php
                include("./_navbar.php");
                ?>
                <div class="col-lg-10 px-3 Main-Content overflow-auto" id="Main-Content">
                    <i class="bi bi-list px-4" id="hambargar"></i>
                    <div class="row px-3">
                        <h6 class="my-1"> <a href="http://localhost/SMS/staffs.php" class="text-black"><i class="bi bi-arrow-left-square-fill"></i></a> Staff <a href="http://localhost/SMS/update_staff_info.php?id=<?php echo $_GET['id'] ?>" class="text-black"><i class="bi bi-pencil-square"></i></a> Update</h6>
                        <div>
                            <!-- <table class="table table-striped table-hover">
                                ...
                            </table> -->
                            <table class="table table-striped table-hover table-sm">
                                <tr>
                                    <th class="w-25">keys</th>
                                    <th>Values</th>
                                </tr>
                                <tr>
                                    <td>Staff ID</td>
                                    <td id="id" class="fw-bolder"><?php echo $_GET['id'] ?></td>
                                </tr>
                                <tr>
                                    <td>first_name</td>
                                    <td id="first_name" class="fw-bolder"></td>
                                </tr>
                                <tr>
                                    <td>last_name</td>
                                    <td id="last_name" class="fw-bolder"></td>
                                </tr>
                                <tr>
                                    <td>gender</td>
                                    <td id="gender"></td>
                                </tr>
                                <tr>
                                    <td>blood_group</td>
                                    <td id="blood_group"></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td id="email"></td>
                                </tr>
                                <tr>
                                    <td>date_of_birth</td>
                                    <td id="date_of_birth"></td>
                                </tr>
                                <tr>
                                    <td>birth_place</td>
                                    <td id="birth_place"></td>
                                </tr>
                                <tr>
                                    <td>religion</td>
                                    <td id="religion"></td>
                                </tr>
                                <tr>
                                    <td>nationality</td>
                                    <td id="nationality"></td>
                                </tr>
                                <tr>
                                    <td>state</td>
                                    <td id="state"></td>
                                </tr>
                                <tr>
                                    <td>city</td>
                                    <td id="city"></td>
                                </tr>
                                <tr>
                                    <td>address</td>
                                    <td id="address"></td>
                                </tr>
                                <tr>
                                    <td>father_name</td>
                                    <td id="father_name"></td>
                                </tr>
                                <tr>
                                    <td>mother_name</td>
                                    <td id="mother_name"></td>
                                </tr>
                                <tr>
                                    <td>parent_state</td>
                                    <td id="parent_state"></td>
                                </tr>
                                <tr>
                                    <td>parent_city</td>
                                    <td id="parent_city"></td>
                                </tr>
                                <tr>
                                    <td>parent_address</td>
                                    <td id="parent_address"></td>
                                </tr>
                                <tr>
                                    <td>parent_email</td>
                                    <td id="parent_email"></td>
                                </tr>
                                <tr>
                                    <td>parent_contact</td>
                                    <td id="parent_contact"></td>
                                </tr>
                                <tr>
                                    <td>education01</td>
                                    <td id="education01"></td>
                                </tr>
                                <tr>
                                    <td>education01_year</td>
                                    <td id="education01_year"></td>
                                </tr>
                                <tr>
                                    <td>education01_subject</td>
                                    <td id="education01_subject"></td>
                                </tr>
                                <tr>
                                    <td>education02</td>
                                    <td id="education02"></td>
                                </tr>
                                <tr>
                                    <td>education02_year</td>
                                    <td id="education02_year"></td>
                                </tr>
                                <tr>
                                    <td>education02_subject</td>
                                    <td id="education02_subject"></td>
                                </tr>
                                <tr>
                                    <td>education03</td>
                                    <td id="education03"></td>
                                </tr>
                                <tr>
                                    <td>education03_year</td>
                                    <td id="education03_year"></td>
                                </tr>
                                <tr>
                                    <td>education03_subject</td>
                                    <td id="education03_subject"></td>
                                </tr>
                                <tr>
                                    <td>education04</td>
                                    <td id="education04"></td>
                                </tr>
                                <tr>
                                    <td>education04_year</td>
                                    <td id="education04_year"></td>
                                </tr>
                                <tr>
                                    <td>education04_subject</td>
                                    <td id="education04_subject"></td>
                                </tr>
                            </table>
                            <a href="http://localhost/SMS/staffs.php" class="text-black"><i class="bi bi-arrow-left-square-fill"> </i>  Back</a>
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
    <script src="./script/view_staff.js"></script>
<script src="./app.js"></script>
</html>