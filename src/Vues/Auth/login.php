<?php
include __DIR__ . "/../heading/head.php"; ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> -->

<style>
    #form_controller {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        align-items: center;
        flex: 1 auto;
    }
    </style>


<div class="container">

    <div class="error">
        <?php
        if (isset($error)) {
            echo $error;
            unset($error);
        }
        ?>
    </div>

    <div class="d-flex flex-column align-items-center">

        <form action="/" method="POST" id="form_controller">

            <label for="login">Mail: </label>
            <div class="input-group mb-4">
                <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-at fa-2x"></i></span>
                <input id="login" name="login" type="text" class="form-control border border-danger" placeholder="Mail..." aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <label for="password">Password </label>
            <div class="input-group mb-4">
                <span class="input-group-text border border-danger" id="basic-addon1"><i class="fas fa-key fa-2x"></i></span>
                <input id="password" name="password" type="text" class="form-control border border-danger" placeholder="Password..." aria-label="Username" aria-describedby="basic-addon1">
            </div>


            <button class="btn btn-outline-dark border border-danger" type="submit">CONNECTION...</button>


        </form>
    </div>
</div>


<?php
include __DIR__ . "/../heading/footer.php"; ?>

<script>
    $(".error").remove().fadeOut(3000)
</script>