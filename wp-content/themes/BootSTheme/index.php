<?php get_header(); ?>
        <div class = "collapse navbar-collapse navHeaderCollapse">

            <ul class = "nav navbar-nav navbar-right">

                <li><a href = "#">Home</a></li>
                <li class = "dropdown">

                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href = "#">Item One</a></li>
                        <li><a href = "#">Item Two</a></li>
                        <li><a href = "#">Item Three</a></li>
                        <li><a href = "#">Item Four</a></li>
                    </ul>

                </li>
                <li class = "dropdown">

                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
                    <ul class = "dropdown-menu">
                        <li><a href = "#">Twitter</a></li>
                        <li><a href = "#">Facebook</a></li>
                        <li><a href = "#">Google+</a></li>
                        <li><a href = "#">Instagram</a></li>
                    </ul>

                </li>
                <li><a href = "#">About</a></li>
                <li><a href = "#contact" data-toggle="modal">Contact</a></li>

            </ul>

        </div>

    </div>
</div>

<div class = "container">

    <div class = "jumbotron">
        <h2>Post Title</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing.</p>
    </div>

    <div class = "panel panel-default panel-body">
        <div class = "row">
            <div class = "col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href = "#">Category One</a></li>
                    <li><a href = "#">Category Two</a></li>
                    <li><a href = "#">Category Three</a></li>
                    <li><a href = "#">Category Four</a></li>
                </ul>
            </div>
            <div class = "col-md-10">
                <a href = "#"><h3>This random post is really awesome!</h3></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class = "text-muted">Posted by Ahsan on January 1st 2014</p>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>