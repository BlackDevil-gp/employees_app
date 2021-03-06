<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employees' Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/custom.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <link rel="icon" href="resources/images/svg/favicon.svg" type="image/x-icon">

</head>

<body>
    <!-- Background Image -->
    <div class="bg-img">
        <img class="w-100" src="resources/images/bg_img.jpg" alt="office-image">
    </div>

    <!-- Title -->
    <div class="p-2 relative-items title-style">
        <h1 class="text-center"><a class="text-decoration-none text-white title-font-style" href="/">Employees' List</a></h1>
    </div>

    <!-- Buttons -->
    <div class="container mt-5 relative-items">
        <div class="d-flex flex-wrap justify-content-between">

        <div class="d-flex flex-wrap">
                <button id="show" class="btn btn-outline-success text-white fw-bold px-4 me-4">Show me</button>

                <select class="form select rounded-3 px-2" name="showOptions" id="showOptions">
                    <option value="5" selected>5 rows</option>
                    <option value="15">15 rows</option>
                    <option value="all">All rows</option>
                </select>

            </div>
            <button id="clear" class="btn btn-outline-danger text-white fw-bold px-4 d-none">Clear</button>

        </div>
    </div>

    <!-- Table -->
    <div class="container mt-3 mb-5 relative-items">
        <table class="table table-striped border table-hover" style="box-shadow: 0 0 6px 0px black;">

            <thead style="background: #e1e1e1;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Age</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>

            <tbody id="results" class="tbody-style">

            </tbody>
        </table>

        <button class="btn btn-info d-none" id="showMore"><span class="spinner-size"></span> Show More</button>
    </div>

</body>

<script src="resources/js/app.js"></script>

</html>