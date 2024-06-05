<?php
require_once("views\support\assets\layout\sidebar.php");
?>
<div class="height-100 bg-light">

    <h4>Main Components</h4>
    <section class="wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php foreach ($books as $book): ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card"> <img
                                        src="https://cdn.pixabay.com/photo/2017/01/13/13/11/book-1977235_1280.png" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <?php echo $book['tittle']; ?>
                                        </a>
                                    </h4>
                                    <p class="">
                                        <?php echo $book['author'] ?>
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