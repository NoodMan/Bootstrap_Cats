<?php
include __DIR__ . "/../heading/head.php"; ?>

<div class="error">
    <?php
    if (isset($error)) {
        echo $error;
        unset($error);
    }
    ?>
</div>

<div class="container">
    <div class="d-flex flex-column align-items-center">
        <form action="/cat" method="POST" id="form_controller" style="height: 100vh;">

            <h2 id="title" class="outline-dark text-center">Add New Cat</h2>
            &nbsp;
            &nbsp;

            <label for="name">NAME: </label>
            <div class="input-group mb-4">
                <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-cat"></i></span>
                <input name="name" type="text" class="form-control border border-danger" placeholder="Cat's name..." aria-label="Username" aria-describedby="basic-addon1">
            </div>


            <label for="description">DESCRIPTION: </label>
            <div class="input-group mb-4">
                <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-pencil-alt"></i></span>
                <input name="description" type="text" class="form-control border border-danger" placeholder="Description..." aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <label for="description">CHIP NUMBER: </label>
            <div class="input-group mb-4">
                <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-bug"></i></span>
                <input name="chipnumber" type="text" class="form-control border border-danger" placeholder="Chip number..." aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <label for="bar">SHOP: </label>

            <div class="input-group mb-3">
                <label class="input-group-text border border-danger" for="inputGroupSelect01"><i class="fas fa-coffee"></i></label>
                <select name="bar" class="form-select border border-danger" id="inputGroupSelect01">
                   
                    <?php foreach ($aBar as $bar) : ?>
                        <option value="<?= $bar->getId() ?>"><?= $bar->getSign() ?></option>
                    <?php endforeach; ?>

                </select>

            </div>
            &nbsp;
            <button class="btn btn-outline-dark border border-danger" type="submit">RECORD...</button>
    </div>
</div>
</form>




<?php
include __DIR__ . "/../heading/footer.php"; ?>

<script>
    $(".error").remove().fadeOut(3000)
</script>