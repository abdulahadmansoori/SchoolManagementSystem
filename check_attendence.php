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
                                <h6>Mark Attendance</h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <!-- check attendance -->
                                    <div class="detailsCard">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <!-- <label for="class" class="form-label">Class</label> -->
                                                <select name="class" class="form-select">
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
                                            <div class="col-sm-3">
                                                <!-- <label for="section" class="form-label">Section</label> -->
                                                <select name="section" class="form-select">
                                                    <option value="section">Section</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- <label for="section" class="form-label">Section</label> -->
                                                <select name="section" class="form-select">
                                                    <option value="section">Month</option>
                                                    <option value="A">Jan</option>
                                                    <option value="B">Feb</option>
                                                    <option value="C">Mar</option>
                                                    <option value="D">Apr</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- <label for="" class="form-label">Operation</label> -->
                                                <button class="btn btn-secondary w-100">Fatch Data</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detailsCard overflow-auto">
                                        <table class="table table-hover ">
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                                <th>6</th>
                                                <th>7</th>
                                                <th>8</th>
                                                <th>9</th>
                                                <th>10</th>
                                                <th>11</th>
                                                <th>12</th>
                                                <th>13</th>
                                                <th>14</th>
                                                <th>15</th>
                                                <th>16</th>
                                                <th>17</th>
                                                <th>18</th>
                                                <th>19</th>
                                                <th>20</th>
                                                <th>21</th>
                                                <th>22</th>
                                                <th>23</th>
                                                <th>24</th>
                                                <th>25</th>
                                                <th>26</th>
                                                <th>27</th>
                                                <th>28</th>
                                                <th>29</th>
                                                <th>30</th>
                                                <th>%</th>

                                            </tr>
                                            <tr class="text-center">
                                                
                                                <td>1</td>
                                                <td>G0034</td>
                                                <td>Faraz Yasir</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-warning bg-opacity-50">L</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-warning bg-opacity-50">L</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>95</td>

                                            </tr>
                                            <tr class="text-center">
                                                
                                                <td>2</td>
                                                <td>G0034</td>
                                                <td>Faraz Yasir</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-danger bg-opacity-50">A</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-danger bg-opacity-50">A</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-warning bg-opacity-50">L</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-danger bg-opacity-50">A</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>95</td>
                                            </tr>
                                            <tr class="text-center">
                                                
                                                <td>3</td>
                                                <td>G0034</td>
                                                <td>Faraz Yasir</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-danger bg-opacity-50">A</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td class="bg-danger bg-opacity-50">A</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>P</td>
                                                <td>95</td>
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
        </div>
    </section>

    <footer>

    </footer>

</body>
<script src="./jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<script src="./app.js" defer></script>

</html>