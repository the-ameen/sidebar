<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
</head>

<body>
    <div class="page-wrapper default-theme sidebar-bg bg1 toggled">
        <?php include __DIR__ . './sidebar.php'; ?>
        <!-- page-content  -->
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="form-group col-md-12">
                        <h2>Pro Sidebar</h2>
                        <p>This is a responsive sidebar template with dropdown menu based on bootstrap framework.</p>

                    </div>
                    <div class="form-group col-md-12">
                        <iframe
                            src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=star&count=true&size=small"
                            frameborder="0" scrolling="0" width="100px" height="30px"></iframe>
                        <iframe
                            src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=fork&count=true&size=small"
                            frameborder="0" scrolling="0" width="100px" height="30px"></iframe>
                    </div>

                    <div class="form-group col-md-12">
                        <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
                            <span>Toggle Sidebar</span>
                        </a>
                        <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
                            <span>Pin Sidebar</span>
                        </a>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-md-12">
                        <h3>Themes</h3>
                        <p>Here are more themes that you can use</p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <a href="#" data-theme="default-theme" class="theme default-theme selected"></a>
                        <a href="#" data-theme="chiller-theme" class="theme chiller-theme"></a>
                        <a href="#" data-theme="legacy-theme" class="theme legacy-theme"></a>
                        <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
                        <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
                        <a href="#" data-theme="light-theme" class="theme light-theme"></a>
                    </div>
                    <div class="form-group col-md-12">
                        <p>You can also use background image </p>
                    </div>
                    <div class="form-group col-md-12">
                        <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
                        <a href="#" data-bg="bg2" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg3" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg4" class="theme theme-bg"></a>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="toggle-bg" checked>
                            <label class="custom-control-label" for="toggle-bg">Background image</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="toggle-border-radius">
                            <label class="custom-control-label" for="toggle-border-radius">Border radius</label>
                        </div>
                    </div>

                </div>


                <hr>
                <div class="row ">
                    <div class="form-group col-md-12">
                        <small>Made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <span
                                class="text-secondary font-weight-bold">Mohamed
                                Azouaoui</span></small>
                    </div>
                    <div class="form-group col-md-12">
                        <a href="https://github.com/azouaoui-med" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-github" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/azouaoui_med" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/azouaoui_med/" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mohamed-azouaoui/" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- using online scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- using local scripts -->
    <!-- <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->


    <script src="js/main.js"></script>
</body>

</html>