<?php
require_once("views\support\assets\layout\sidebar.php");
?>


<div class="height-100 bg-light">
    <h4>Main Components</h4>
    <section class="wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php foreach ($companys as $company): ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card"
                                    href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img
                                        src="https://media.istockphoto.com/id/1438199519/photo/young-people-at-the-book-shop.jpg?s=1024x1024&w=is&k=20&c=9knk1--xfANAH6rs3ljB9oXrzhLWC4Svb_uhUvb4f94=" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                            <?php echo $company['name'] ?>
                                        </a>
                                    </h4>
                                    <p class="">
                                        <?php echo $company['email'] ?>
                                    </p>
                                </div>
                                <div class="card-read-more p-4 m-4">
                                    <a href="#" class="nav_item green"> <i class='bx bx-edit'></i></a>
                                    <a href="#" class="nav_item"><i class='bx bx-trash-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
</div>



<?php
require_once("views\support\assets\layout\scripts-sidebar.php");
?>