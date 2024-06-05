<?php
require_once("views\support\assets\layout\layout.php");
?>
<link rel="stylesheet" href="views\support\assets\css\user-login.css">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-10">
            <div class="card d-flex mx-auto my-5">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 c1 p-5">
                        <div class="row mb-5 m-3"></div> <img
                            src="https://cdn.pixabay.com/photo/2013/07/13/12/43/girl-160172_1280.png" width="120vw"
                            height="210vh" class="mx-auto d-flex" alt="Teacher">
                        <div class="row justify-content-center">
                            <div class="w-75 mx-md-5 mx-1 mx-sm-2 mb-5 mt-4 px-sm-5 px-md-2 px-xl-1 px-2">
                                <h1 class="wlcm">Bem-vindo à Zaunita</h1> <span class="sp1"> <span
                                        class="px-3 bg-danger rounded-pill"></span> <span
                                        class="ml-2 px-1 rounded-circle"></span> <span
                                        class="ml-2 px-1 rounded-circle"></span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 c2 px-5 pt-5">
                        <div class="row">
                            <nav class="nav font-weight-500 mb-1 mb-sm-2 mb-lg-5 px-sm-2 px-lg-5">
                                <a class="nav-link" href="login">Usuario</a>
                                <a class="nav-link ac" href="#">Admin</a>
                                <a class="nav-link" href="company-login">Editora</a>
                            </nav>
                        </div>
                        <form action="loginAdmin" method="post" name="myform" onsubmit="" class="px-5 pb-5">
                            <div class="d-flex">
                                <img src="https://cdn.pixabay.com/photo/2012/04/03/13/31/books-25160_1280.png"
                                    height="22px" width="22px" alt="" class="mr-3 mt-2">
                                <h3 class="font-weight-bold">Log in</h3>
                            </div>
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <button class="text-white text-weight-bold bt">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>