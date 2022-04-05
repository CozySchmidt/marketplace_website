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
                    <button class="btn btn-default" data-toggle="modal" data-target="#newItem"><i class="fa fa-photo"></i> New Item</button>
                    <a href="logout.php" class="btn btn-default pull-right"><i class="fa fa-sign-out"> </i> Logout</a>
                    <a href="#" class="btn btn-default pull-right" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in"> </i> Login</a>
                    <a href="#" class="btn btn-default pull-right" data-toggle="modal" data-target="#signup"><i class="fa fa-user"> </i> Sign Up</a>
                </div>
            </div>
            <?php
            session_start();
            $email = $_SESSION['email'];

            if (isset($_SESSION['loggedin'])) {
                echo '<div class="alert alert-success text-center">
                                Welcome ' . $_SESSION['email'] . '
                            </div>';
            }

            ?>
            <div class="row">
                <div class="col-md-3">
                    <h2 class="login-panel text-muted">
                        Recently Viewed
                    </h2>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Noodles
                            <span class="pull-right text-muted">
                                <a class="" href="" data-toggle="tooltip" title="Delete item">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>
                        </div>
                        <div class="panel-body text-center">
                            <p>
                                <a href="product.php">
                                    <img class="img-rounded img-thumbnail" src="products/f88008dc63a67983e5824dafa0935662.png" />
                                </a>
                            </p>
                            <p class="text-muted text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et accumsan mauris, non faucibus massa. Maecenas ac dolor aliquet, euismod nisl ut, congue quam.
                            </p>
                            <a class="pull-left" href="" data-toggle="tooltip" title="Downvote item">
                                <i class="fa fa-thumbs-down"></i>
                            </a>
                        </div>
                        <div class="panel-footer ">
                            <span><a href="mailto:fakeemail@example.com" data-toggle="tooltip" title="Email seller"><i class="fa fa-envelope"></i> Alex Akins</a></span>
                            <span class="pull-right">$11.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Apple
                            <span class="pull-right text-muted">
                                <a class="" href="" data-toggle="tooltip" title="Delete item">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>
                        </div>
                        <div class="panel-body text-center">
                            <p>
                                <a href="product.php">
                                    <img class="img-rounded img-thumbnail" src="products/1f3870be274f6c49b3e31a0c6728957f.png" />
                                </a>
                            </p>
                            <p class="text-muted text-justify">
                                Vivamus quam dolor, ultricies sed gravida vitae, dictum eu lectus. Cras suscipit urna leo, eget luctus nisi luctus vel. Suspendisse in pulvinar libero.
                            </p>
                            <a class="pull-left" href="" data-toggle="tooltip" title="Downvote item">
                                <i class="fa fa-thumbs-down"></i>
                            </a>
                        </div>
                        <div class="panel-footer ">
                            <span><a href="mailto:fakeemail@example.com" data-toggle="tooltip" title="Email seller"><i class="fa fa-envelope"></i> Alex Akins</a></span>
                            <span class="pull-right">$1.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Sushi
                            <span class="pull-right text-muted">
                                <a class="" href="" data-toggle="tooltip" title="Delete item">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>
                        </div>
                        <div class="panel-body text-center">
                            <p>
                                <a href="product.php">
                                    <img class="img-rounded img-thumbnail" src="products/aea6de9cbaee9d2704dcf81f4a194991.png" />
                                </a>
                            </p>
                            <p class="text-muted text-justify">
                                Donec aliquet vulputate neque nec posuere. Fusce a ex elementum, aliquam lectus vel, tincidunt sem. Sed pharetra imperdiet mauris ut semper.
                            </p>
                            <a class="pull-left" href="" data-toggle="tooltip" title="Downvote item">
                                <i class="fa fa-thumbs-down"></i>
                            </a>
                        </div>
                        <div class="panel-footer ">
                            <span><a href="mailto:fakeemail@example.com" data-toggle="tooltip" title="Email seller"><i class="fa fa-envelope"></i> Jane Smith</a></span>
                            <span class="pull-right">$10.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Cherry
                            <span class="pull-right text-muted">
                                <a class="" href="" data-toggle="tooltip" title="Delete item">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>
                        </div>
                        <div class="panel-body text-center">
                            <p>
                                <a href="product.php?id= '.$profile['id'].'">
                                    <img class="img-rounded img-thumbnail" src="products/c7a4476fc64b75ead800da9ea2b7d072.png" />
                                </a>
                            </p>
                            <p class="text-muted text-justify">
                                Pellentesque a convallis velit, et viverra odio. Phasellus maximus erat eu finibus tristique. Aliquam posuere, metus ac eleifend dignissim.
                            </p>
                            <a class="pull-left" href="" data-toggle="tooltip" title="Downvote item">
                                <i class="fa fa-thumbs-down"></i>
                            </a>
                        </div>
                        <div class="panel-footer ">
                            <span><a href="mailto:fakeemail@example.com" data-toggle="tooltip" title="Email seller"><i class="fa fa-envelope"></i> Jane Smith</a></span>
                            <span class="pull-right">$10.00</span>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-3">
                    <h2 class="login-panel text-muted">
                        Items For Sale
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

            <div class="row">
                <?php
                require 'includes/functions.php';
                $profiles = getAllProfiles();

                foreach ($profiles as $profile) {
                    echo '
                        <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ' . $profile['title'] . '';
                    if ($profile['email'] == $_SESSION['email']) {
                        echo '
                            <span class="pull-right text-muted">
                                <a class="" href="delete.php?id= ' . $profile['id'] . '" data-toggle="tooltip" title="Delete item">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>';
                    }
                    echo
                        '</div>
                        <div class="panel-body text-center">
                            <p>
                                <a href="product.php?id= ' . $profile['id'] . '">
                                    <img class="img-rounded img-thumbnail" src="products/' . $profile['picture'] . '" />
                                </a>
                            </p>
                            <p class="text-muted text-justify">
                                ' . $profile['description'] . '
                            </p>';


                if(isset($_SESSION['loggedin'])){         
                    echo     
                    
                    




                            '<a class="pull-left" href="downvote.php" data-toggle="tooltip" title="Downvote item">
                                <i class="fa fa-thumbs-down"></i>
                            </a>
     
                        
                        
                        
                        
                        
                        
                            </div>
                        <div class="panel-footer ">
                            <span><a href="" data-toggle="tooltip" title="Email seller"><i class="fa fa-envelope"></i> ' . $profile['email'] . '</a></span>
                            <span class="pull-right">$' . $profile['price'] . '</span>
                        </div>
                    </div>
                </div>

                ';}
                else{
                echo
                '</div>
                <div class="panel-footer ">
                    <span><a href="" data-toggle="tooltip" title="Email seller"><i class="fa fa-envelope"></i> ' . $profile['email'] . '</a></span>
                    <span class="pull-right">$' . $profile['price'] . '</span>
                </div>
            </div>
        </div>

        ';}

                }
                ?>
            </div>
        </div>


    </div>

    </div>

    <div id="login" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form role="form" method="post" action="redirect.php?from=login">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Login!" />
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="newItem" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form role="form" action="submititem.php" enctype="multipart/form-data" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">New Item</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" type="text" name="price">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description">
                        </div>
                        <div class="form-group">
                            <label>Picture</label>
                            <input class="form-control" type="file" name="picture">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Post Item!" />
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div id="signup" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form role="form" method="post" action="redirect.php?from=signup">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center">Sign Up</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" name="firstname">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" name="lastname">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Verify Password</label>
                            <input class="form-control" type="password" name="verifypassword">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Sign Up!" />
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</html>