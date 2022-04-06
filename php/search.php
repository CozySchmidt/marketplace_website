<!DOCTYPE html>
<html>

<head>
    <title>COMP 3015</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <div class="container">

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="login-panel text-center text-muted">
                        COMP 3015 Final Project
                    </h1>
                    <hr />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <a href="index.php" class="btn btn-default pull-left"><i class="fa fa-arrow-circle-left"> </i> Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h2 class="login-panel text-muted">
                        Search Results
                    </h2>
                    <hr />
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <form class="form-inline" action="search.php" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                <input type="text" class="form-control" name="search" placeholder="Search" />
                            </div>
                        </div>
                        <input type="submit" class="btn btn-default" name="submit-search" value="Search" />
                        <button class="btn btn-default" data-toggle="tooltip" title="Shareable Link!"><i class="fa fa-share"></i></button>
                    </form>
                    <br />
                </div>
            </div>
            <?php
            include 'includes/functions.php';
            session_start();
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string(connect(), $_POST['search']);
                $query = "select * from profiles where title like '%$search%' or price like '%$search%' or description like '%$search%' or
                         email like '%$search%' or picture like '%$search%'";
                $result = mysqli_query(connect(), $query);
                $queryResults = mysqli_num_rows($result);
                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    ' . $row["title"] . '
                </div>
                <div class="panel-body text-center">
                    <p>
                        <a href="product.php?id=' . getID($row['email']) . '">
                            <img class="img-rounded img-thumbnail" src="products/'. getPicturewEmail($row['email']) .'" />
                        </a>
                    </p>
                    <p class="text-muted text-justify">
                        ' . $row["description"] . '
                    </p>
                    <a class="pull-left" href="" data-toggle="tooltip" title="Downvote item">
                        <i class="fa fa-thumbs-down"></i>
                    </a>
                </div>
                <div class="panel-footer ">
                    <span><a href="mailto:fakeemail@example.com" data-toggle="tooltip" title="Email seller"><i class="fa fa-envelope"></i> ' . $row["email"] . '</a></span>
                    <span class="pull-right">$'.$row["price"] . '</span>
                </div>
            </div>
        </div>';
                    }
                } else {
                    echo 'no search queries';
                }
            }
            ?>
            <br />
        </div>
    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</html>