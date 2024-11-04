<?php 
include_once("templates/header.php");
?>
    <div id="main-banner">
        <h1>Faça seu pedido</h1>
    </div>
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Monte sua pizza</h2>
                    <form action="process/pizza.php" class="pizza-form" method="POST">
                        <div class="form-group">
                        <label for="borda">Borda:</label>
                        <select name="borda" id="borda" class="form-control">
                            <option value="">Selecione a Borda</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="massa">Massa:</label>
                        <select name="massa" id="massa" class="form-control">
                            <option value="">Selecione a Massa</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="sabores">Sabores (Máximo 3):</label>
                        <select multiple name="sabores[]" id="sabores" class="form-control">
                            <option value=""></option>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Fazer Pedido!" class="btn btn-primary" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include_once("templates/footer.php");
?>    