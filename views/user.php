<?php
require_once("views\support\assets\layout\sidebar.php");
?>

<div class="height-100 bg-light">

    <h4>Main Components</h4>
    <section class="wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <?php echo $user['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $user['email']; ?>
                                    </td>
                                    <td>
                                        <a href="#" class="nav_item green"> <i class='bx bx-edit'></i></a>
                                        <a href="#" class="nav_item"><i class='bx bx-trash-alt'></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
require_once("views\support\assets\layout\scripts-sidebar.php");
?>