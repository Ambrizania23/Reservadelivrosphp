<?php
require_once("views\support\assets\layout\sidebar-company.php");
?>
<div class="height-100 bg-light">

    <h4 class="m-4">Main Components</h4>
    <div class="container col-md-8 mt-4">
        <form action="saveBook" method="post" onsubmit class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Autor</label>
                <input type="text" name="author" class="form-control" id="validationCustom01" required>
            </div>
            <div class="col-md-8">
                <label for="validationCustomUsername" class="form-label">Titulo</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="tittle" class="form-control" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" required>
                </div>
            </div>
            <div class="input-group">
                <select name="category" class="form-select" aria-label="Default select example">
                    <option selected>Categoria</option>
                    <option value="Ficção histórica">Ficção histórica</option>
                    <option value="Ficção Feminina">Ficção Feminina</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Autoajuda">Autoajuda</option>
                    <option value="Humor">Humor</option>
                    <option value="Ação e aventura">Ação e aventura</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">Descrição</span>
                <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Salvar Livro</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once("views\support\assets\layout\scripts-sidebar.php");
?>