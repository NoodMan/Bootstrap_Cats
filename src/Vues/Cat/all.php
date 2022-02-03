<?php
include __DIR__ . "/../Heading/head.php";

if (empty($aCats)) : ?>
    <div>
        Il n'y a aucun chat ici
    </div>
<?php
endif;
?>
<div class="container">
    <!-- pour center le bloc-->
    <div class="text-center"><i class="fas fa-coffee"></i>
        BAR : <?= $bar1->getSign(); ?>
    </div>

    <table class="table table-dark table-hover">
        <!-- pour avec le-->
        <thead>
            <!-- pour mettre une barre entre -->
            <th class="text-center">Nom:</th>
           
            <span>  <th class="text-center">Description:</th> <class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
  <button class="btn btn-primary" type="button" disabled>Disabled button</button>
</span>
            <th class="text-center">N° puce:</th>
            <?php if ($_SESSION["Type"] === "manager") : ?>
                <th class="text-center"> Action </th>
        </thead>
    <?php endif;

            foreach ($aCats as $cat) : ?>
        <tr>
            <td> <?= $cat->getName() ?> </td>
            <td type="submit" class="text-center"> <?= $cat->getDescription() ?> </td>
            <td type="submit" class="text-center"> <?= $cat->getChipNumber() ?> </td>
            <?php if ($_SESSION["Type"] === "manager") : ?>
                <td>

                    <div class="row">

                        <div class="col btn btn-info me-md-2 edit" data-id="<?= $cat->getId(); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="far fa-edit"></i>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action='<?= "/cat/$id" ?>' method="POST" id="form_controller">

                                            <label for="name">NOM: </label>
                                            <input type="text" name="name" id="name" value="<?= $cat->getName(); ?>">

                                            <label for="description">DESCRIPTION: </label>
                                            <input type="text" name="description" id="description" value="<?= $cat->getDescription(); ?>">

                                            <label for="chipnumber">NUMERO DE PUCE: </label>
                                            <input type="number" name="chipnumber" min="10000000000" max="99999999999" id="chipnumber" value="<?= $cat->getChipNumber(); ?>">

                                            <label for="bar">Bar</label>
                                            <select name="bar" id="bar">
                                                <?php foreach ($aBar as $bar) : ?>
                                                    <?php if ($cat->getBar()->getId() === $bar->getId()) : ?>
                                                        <option value="<?= $bar->getId() ?>" selected="selected"><?= $bar->getSign(); ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $bar->getId() ?>"><?= $bar->getSign(); ?></option>
                                                    <?php endif; ?>

                                                <?php endforeach; ?>
                                            </select>
                                            <input type="submit" value="ENREGISTRER">
                                        </form>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col btn btn-danger me-md-2 delete" data-id="<?= $cat->getId(); ?>" data-name="<?= $cat->getName(); ?>">
                            <i class="far fa-trash-alt"></i>
                        </div>
                    </div>

                <?php endif; ?>
        </tr>
    <?php
            endforeach;
    ?>
    </table>
</div>
<script>
    $(".edit").on("click", function(e) {
        // window.location.href = "/cat/" + $(this).attr("data-id");
    });

    $(".delete").on("click", function(e) {

        if (confirm("Êtes vous sur de vouloir supprimer " + $(this).attr("data-name")) == true) {
            // window.location.href = "/removecat/" + $(this).attr("data-id");
        }
    });
</script>

<?php include __DIR__ . "/../Heading/footer.php";
