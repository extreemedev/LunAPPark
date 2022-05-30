<div class="pt-custom title text-center"></div>

    <section id="scroll">
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5" style="filter: drop-shadow(0px 5px 70px #e6ffe6);"><img class="img-fluid rounded-circle" src="../../src/assets/img/callcenter.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="title text-start">Assistenza 24/7</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




            <?php
            // Controllo invio
            if (isset($_GET['invio'])) {
                if ($_GET['invio'] == "ok") {
            ?>
                    <div class="alert alert-success text-center ml-5 mr-5" style="display: initial;" role="alert">
                        Grazie per averci scritto. Risponderemo entro 24 ore
                    </div>
                <?php
                } else {
                ?>
                <div class="text-center mt-5 d-row">
                    <div class="alert alert-danger text-center ml-5 mr-5" style="display: initial;" role="alert">
                        Si è verificato un errore: non é possibile connettersi al server SMTP.
                    </div>
                </div>
            <?php
                }
            }
            ?>
            
            <div class="pt-5">
            <div class="title text-center">Contattaci</div>


            <form class="form-contacts subtitle" action="./send.php" method="post">


                <!--div class="subtitle text-center">Contattaci</div-->

                
                <div class="mb-1">
                    <label for="nome" class="checky pb-1">Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome">
                </div>
                <div class="mb-1">
                    <label for="email" class="checky pb-1">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email">
                </div>
                <div class="mb-1">
                    <label for="email" class="checky pb-1">Messaggio</label>
                    <textarea name="messaggio" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="mt-3">
                <input style="text-align: center;" type="submit" class="btn-grad"></input>
                <div class="mb-3">
            </form>
            </div>

        </div>
    </div>
