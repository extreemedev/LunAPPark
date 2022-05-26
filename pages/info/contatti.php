<div class="container mt-5 pt-5 pb-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <?php
            // Controllo invio
            if (isset($_GET['invio'])) {
                if ($_GET['invio'] == "ok") {
            ?>
                    <div class="alert alert-success text-center" role="alert">
                        Grazie per averci scritto. Risponderemo entro 24 ore
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger text-center" role="alert">
                        Si è verificato un errore
                    </div>
            <?php
                }
            }
            ?>

            <div class="subtitle pt-5">
            <form  action="/functions/send.php" method="post">
                <div class="subtitle text-center">Assistenza 24/h</div>
                <div class="mb-3">
                    <label for="nome" class="checky pb-1">Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome">
                </div>
                <div class="mb-3">
                    <label for="email" class="checky pb-1">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                    <label for="email" class="checky pb-1">Messaggio</label>
                    <textarea name="messaggio" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-5">
                <input style="text-align: center;" type="submit" class="btn-grad"></input>
            </form>
            </div>

        </div>
    </div>
</div>