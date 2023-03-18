<!DOCTYPE html>
<html>
<head>
	<title>My Social Network</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }
        body {
            background-color: #202123;
            color: #bdb9b9;
            font-family: 'Roboto', sans-serif;
        }
        .navbar-brand {
            font-family: 'PT Sans', sans-serif;
            font-weight: 500;
            font-size: 1.5rem;
        }
        .dropdown-menu {
            background-color: #0f0f10 !important;
        }
        .btn {
            background-color: #0f6fec1a;
            color: #0f6fec;
            border: none;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }
        .btn:hover {
            background-color: #0f6fec !important;
        }
        .dropdown-item {
            color: #c5c6cc !important;
        }
        .dropdown-item:hover {
            color: #fff !important;
            background-color: #0f0f10;
        }
        .dropdown-divider {
            border-top: 1px solid #2596be33 !important;
        }
        .vr {
            display: inline-block;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            width: 1px;
            min-height: 1em;
            background-color: currentcolor;
            opacity: 0.25;
        }
        .hstack {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-item-align: stretch;
            align-self: stretch;
        }
        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
    </style>
</head>
<body>
	<!-- Header -->
	<header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0f0f10">
            <div class="container">
                <a class="navbar-brand" href="#">Flytter</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto" >
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Messages</a>
                        </li>
                        <li class="nav-item dropdown ms-2">
                            <div class="bg-secondary p-2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 0.5rem; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                <a class="nav-link fas fa-cog text-white"></a>
                            </div>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ms-2">
                            <div class="bg-secondary p-2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 0.5rem; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                <img class="avatar-img rounded-2" src="https://cdn.ethpays.co/v1/images/static/anto.png" alt="" width="40px" height="40px">
                            </div>
                            <ul class="dropdown-menu dropdown-menu-end pt-3 small me-md-n3" aria-labelledby="navbarDropdown">
                                <!-- Profile info -->
                                <li class="px-3" style="min-width:240px">
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle" src="https://cdn.ethpays.co/v1/images/static/anto.png" alt="avatar" height="50" width="50">
                                        </div>
                                        <div>
                                        <a class="h6 stretched-link" href="#">dsfs sdfsdf</a>
                                        <p class="small m-0">Administrator</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item btn btn-sm my-2 text-center" href="my-profile.html">View profile</a>
                                </li>
                                <!-- Links -->
                                <li><a class="dropdown-item" href="settings.html"><i class="fas fa-cog"> </i> Settings &amp; Privacy</a></li>
                                <li> 
                                    <a class="dropdown-item" href="#" target="_blank">
                                        <!-- support icon -->
                                        <i class="fa-solid fa-life-ring"> </i> Support
                                    </a> 
                                </li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item bg-danger-soft-hover" href="sign-in-advance.html"><i class="fa-solid fa-power-off"> </i> Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Main content -->
    <main class="container">
        <div class="row mt-3 g-4">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card mb-3" style="background-color: #313333;">
                    <div class="position-relative">
                        <div style="position: absolute; top: 0; left: 0; right: 0; height: 80px; background-image: url(https://social.webestica.com/assets/images/bg/01.jpg); background-position: center; background-size: cover; background-repeat: no-repeat; border-top-left-radius: 0.4rem; border-top-right-radius: 0.4rem; z-index: 0;"></div>
                            <div class="card-body" style="padding-top: 50px;">
                                <div class="card-title mt-3" style="text-align: center; position: relative; z-index: 1;">
                                    <img src="https://cdn.ethpays.co/v1/images/static/anto.png" width="75" height="75" alt="User Profile" style="border: 3px solid #202123; position: absolute; top: -37.5px; left: 50%; transform: translateX(-50%); border-radius: 0.8rem">
                                </div>
                                <div class="card-title" style="text-align: center; position: relative; z-index: 1;">
                                    <h5 style="margin-top: 70px; font-weight: 700" class="text-white">Username</h5>
                                    <h8>Administrator</h8>
                                </div>
                                <div class="card-title" style="text-align: center; position: relative; z-index: 1;">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
                                </div>
                                <hr style="margin-bottom: -10px;">
                                <div style="display: flex; justify-content: center; margin-top:25px">
                                    <div class="hstack gap-2 gap-xl-3" style="text-align: center;">
                                        <div>
                                            <h6 class="mb-0 text-white" style="font-weight: 900;">256</h6>
                                            <small>Post</small>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <h6 class="mb-0 text-white" style="font-weight: 900;">2.5K</h6>
                                            <small>Followers</small>
                                        </div>
                                        <div class="vr"></div>
                                        <div>
                                            <h6 class="mb-0 text-white" style="font-weight: 900;">365</h6>
                                            <small>Following</small>
                                        </div>
                                    </div>
                                </div>
                                <hr style="margin-bottom: -10px;">
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="background-color: #313333;"><a href="#">Following</a></li>
                                <li class="list-group-item" style="background-color: #313333;"><a href="#">Followers</a></li>
                                <li class="list-group-item" style="background-color: #313333;"><a href="#">Likes</a></li>
                            </ul>
                    </div>
                </div>
            </div>
                <!-- Middle section -->
                <div class="col-md-6">
                    <!-- Tweet section -->
                    <div class="card mb-3" style="background-color: #313333;">
                        <div class="card-header">
                            <h5 class="card-title">Flyts</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <!-- Display tweets from followed people and random people -->
                            <li class="list-group-item" style="background-color: #313333;">
                                <div class="d-flex" style="margin-top: 10px">
                                    <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="User Profile" width="50px" height="50px">
                                    <div>
                                        <h6 class="mb-0">Username</h6>
                                        <small class="text-muted">@username</small>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- News section -->
                <div class="col-md-3">
                    <div class="card mb-3" style="background-color: #313333;">
                        <div class="card-header">
                            <h5 class="card-title">News</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <!-- Display news published by you -->
                            <li class="list-group-item" style="background-color: #313333;">
                                <h6 class="mb-0">News Title</h6>
                                <small class="text-muted">Date Published</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </main>


<!-- JavaScript dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>
</html>