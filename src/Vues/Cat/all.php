<?php
include __DIR__ . "/../Heading/head.php";

if (empty($aCats)) : ?>
    <div>
        Il n'y a aucun chat ici
    </div>
<?php
endif;
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> <!-- pour le popover -->

<style>
    .modal-title {
        color: black;
    }

    #text-center {
        text-align: center;
    }

    #title {
        color: black;

    }
    .center {
        text-align: center; 
    }
</style>
<div class="container">

    &nbsp;
    &nbsp;

    <!-- pour center le bloc-->
    <div class="text-center"><i class="fas fa-coffee fa-2x"></i>
        <h1> <?= $bar1->getSign(); ?></h1>
    </div>

    &nbsp;
    &nbsp;

    <table class="table table-striped table-hover ">

        <thead>
            <!-- pour mettre une barre entre -->

            <th class="p-3 mb-2 bg-secondary bg-gradient text-white" id="text-center">NAME:</th>
            <th id="text-center" class="p-3 mb-2 bg-secondary bg-gradient text-white">DESCRIPTION:</th>
            <th class="p-3 mb-2 bg-secondary bg-gradient text-white" id="text-center">CHIP NUMBER:
            </th>
            <?php if ($_SESSION["Type"] === "manager") : ?>
                <th class="p-3 mb-2 bg-secondary bg-gradient text-white" id="text-center">ACTION: </th>
        </thead>
    <?php endif;

            foreach ($aCats as $cat) : ?>
        <tr>
            <td class="text-center"> <?= $cat->getName() ?> </td>
            <span>
                <td class="text-center">
                    <!-- popover -->
                    <span tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<?= $cat->getDescription() ?>"> <!--dans la bulle-->
                        <?= substr($cat->getDescription(),0 , 20) . "..."?> <!--pas dans la bulle-->
                        <button class="btn btn-secondary" type="button" disabled>More...</button>
                    </span>
                </td>
            </span>
            <td type="submit" class="text-center"> <?= $cat->getChipNumber() ?> </td>
            <?php if ($_SESSION["Type"] === "manager") : ?>
                <td>


                    <div class="modal fade" id='<?= "cat" . $cat->getId() ?>' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" class="text-center">
                                    <!-- pour faire le point qui clignotte -->
                                    <div class="spinner-grow text-dark" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <h2 class="modal-title" id="exampleModalLabel"> <i class="fas fa-cat"></i>Modify cat...</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>


                                <!-- le modal  -->
                                <div class="modal-body">
                                    <form action='<?= "/cat/" . $cat->getId() ?>' method="POST" id="form_controller">

                                        <h2 id="title" class="outline-dark text-center"> <?= $cat->getName(); ?></h2>
                                        &nbsp;
                                        &nbsp;

                                        <label id="title" for="name">NAME: </label>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-cat"></i></span>
                                            <input value="<?= $cat->getName(); ?>" name="name" type="text" class="form-control border border-danger" placeholder="Cat's name..." aria-label="Username" aria-describedby="basic-addon1">
                                        </div>


                                        <label id="title" for="description">DESCRIPTION: </label>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-pencil-alt"></i></span>
                                            <input value="<?= $cat->getDescription(); ?>" name="description" type="text" class="form-control border border-danger" placeholder="Description..." aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                        <label id="title" for="description">CHIP NUMBER: </label>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-bug"></i></span>
                                            <input value="<?= $cat->getChipNumber(); ?>" name="chipnumber" type="text" class="form-control border border-danger" placeholder="Chip number..." aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                        <label id="title" for="bar">SHOP: </label>

                                        <div class="input-group mb-3">
                                            <label class="input-group-text border border-danger" for="inputGroupSelect01"><i class="fas fa-coffee"></i></label>
                                            <select name="bar" class="form-select border border-danger" id="inputGroupSelect01">

                                                <?php foreach ($aBar as $bar) : ?>
                                                    <?php if ($cat->getBar()->getId() === $bar->getId()) : ?>
                                                        <option value="<?= $bar->getId() ?>" selected="selected"><?= $bar->getSign(); ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $bar->getId() ?>"><?= $bar->getSign(); ?></option>
                                                    <?php endif; ?>

                                                <?php endforeach; ?>

                                            </select>

                                        </div>
                                        <button class="btn btn-outline-dark border border-danger" type="submit">RECORD...</button>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark border border-danger" data-bs-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                    <div id="title" class="col btn btn-info bg-gradient me-md-2 edit" data-id="<?= $cat->getId(); ?>" data-bs-toggle="modal" data-bs-target='<?= "#cat" . $cat->getId() ?>'><i class="far fa-edit"></i> </div>
                    <div id="title" class="col btn btn-danger me-md-2 bg-gradient delete" data-id="<?= $cat->getId(); ?>" data-name="<?= $cat->getName(); ?>">
                        <i class="far fa-trash-alt"></i>
                    </div>
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

        if (confirm("??tes vous sur de vouloir supprimer " + $(this).attr("data-name")) == true) {
            window.location.href = "/removecat/" + $(this).attr("data-id");
        }
    });
    // pour le popover
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

<?php include __DIR__ . "/../Heading/footer.php";
