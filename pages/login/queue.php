<?php
define("TITLE","Registrazione");
session_start();
$sessionmail = $_SESSION["id"];
/*if($sessionmail){
    header('location: yourarea.php');
}*/
?>


<?php
$rm = "";
$e = "";
$p = "";
$rm2="";
if (array_key_exists('rem', $_COOKIE)) {
    $rm=htmlspecialchars($_COOKIE['rem']);
    //echo($rm);
    if($rm=='true'){
        $rm2="checked";
        //echo($rm);
        $e=htmlspecialchars($_COOKIE['email']);
        $p=htmlspecialchars($_COOKIE['pas']);
    } else {
        $rm2 = "";
    }
}
?>


<?php
include("../layouts/header.php")
?>

<?php
include("../layouts/navbar.php")
?>

<div class="title pt-custom">Seleziona un turno:
	<form class="form-signup pt-5" style="max-width:1000px;">
		<label class="checky">
			<input type="radio" name="turno" value="10">
			<?php echo(((int)DATE(H)+2).":")?>10 min
		</label>
		<label class="checky">
			<input type="radio" name="turno" value="20">
			<?php echo(((int)DATE(H)+2).":")?>20 min
		</label>
		<label class="checky">
			<input type="radio" name="turno" value="30">
			<?php echo(((int)DATE(H)+2).":")?>30 min
		</label>
		<label class="checky">
			<input type="radio" name="turno" value="40">
			<?php echo(((int)DATE(H)+2).":")?>40 min
		</label>
		<label class="checky">
			<input type="radio" name="turno" value="50">
			<?php echo(((int)DATE(H)+2).":")?>50 min
		</label>
		<label class="checky">
			<input type="radio" name="turno" value="60" required>
			<?php echo(((int)DATE(H)+3).":")?>00 min
		</label>

        <div class="mt-4" ></div>
        <button class="btn-grad" type="submit">Seleziona orario</button>
		<!--input type="submit" value="Seleziona"-->
	</form>
    <?php
        // Controllo valid
        if (isset($_GET['turno'])) {
			?>
			<?php if(TITLE=="Area personale" and $_SESSION["load"]==0){echo "myLoader()"; $_SESSION["load"]=1; } elseif($_GET['valid'] == "ok"){echo "myLoader()";} elseif($_GET["buy"] == "ok"){echo "myLoader()";}?>
				<div class="title pt-5">Posti disponibili per le <?php if($_GET['turno'] == "60"){echo(((int)DATE(H)+3).":00");} else{echo(((int)DATE(H)+2).":".$_GET['turno']);}?>
					<form class="form-signup pt-5" style="max-width:1900px;">
            <?php
            session_start();
            $dbconn = pg_connect("host=database port=5432
            dbname=lunappark user=admin password=example");
            $email = $_SESSION["id"];
            $querydate = 'SELECT giorno,tipo,prezzo,codice FROM BigliettoPdf JOIN UtenteRegistrato ON (cf = bigl_utente) WHERE user_mail=$1'; 
            $resultdate = pg_query_params($dbconn, $querydate, array($email));
			while($finaldate = pg_fetch_array($resultdate,null,PGSQL_NUM)){
                ?>
						<label class="checky">
							<input type="radio" name="turno" value="00" required>
							00 min
						</label>  
				
                <?php
			}
			?>
			</div>
			</form>
			<?php
        }
        ?>
</div>
	<script>
		// Otteniamo l'ora attuale
		const now = new Date();
		const minutes = now.getMinutes();
		
		// Disabilitiamo i turni passati di 10 minuti
		const radios = document.querySelectorAll('input[name="turno"]');
		for (let i = 0; i < radios.length; i++) {
			const value = radios[i].value;
			if (value < minutes || value >= 70) {
				radios[i].disabled = true;
			}
		}
	</script>