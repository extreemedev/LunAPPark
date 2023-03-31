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
	<form class="form-signup pt-4" style="max-width:1000px;">
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
		if (isset($_GET['giostra'])){
			$dbconn = pg_connect("host=database port=5432
            dbname=lunappark user=admin password=example");
			$data = date("Y-m-d");
			$nomegiostra = $_GET['giostra'];
            $email = $_SESSION["id"];
			$hour = $_SESSION["hour"];
			$querycf = pg_query_params($dbconn, 'SELECT cf FROM UtenteRegistrato WHERE user_mail=$1', array($email));
        	$cf = pg_fetch_array($querycf, null, PGSQL_NUM);
			$querygiostra = pg_query_params($dbconn, 'SELECT id FROM Attrazione WHERE nome=$1', array($nomegiostra));
        	$idgiostra = pg_fetch_array($querygiostra, null, PGSQL_NUM);
			$insert = pg_query_params($dbconn, 'INSERT INTO PrenotazioneGiostra VALUES ($1,$2,$3,$4)', array($hour, $cf[0], $data, $idgiostra[0]));
			#echo($insert);
			if ($insert) {
				?>
					<div class="text-center pt-5" style="font-size: 18px;">
						<div class="alert alert-success text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">Prenotazione effettuata con successo!</div>
					</div>
				<?php
				unset($_SESSION["hour"]);
			}
			else {
				?>
				<div class="text-center pt-5" style="font-size: 18px;">
                    <div class="alert alert-danger text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">Hai già effettuato una prenotazione per questo turno!</div>
                </div>
				<?php
			}
		}
        // Controllo valid
        if (isset($_GET['turno'])) {
			?>
			<?php if(TITLE=="Area personale" and $_SESSION["load"]==0){echo "myLoader()"; $_SESSION["load"]=1; } elseif($_GET['valid'] == "ok"){echo "myLoader()";} elseif($_GET["buy"] == "ok"){echo "myLoader()";}?>
				<div class="title pt-5">Posti disponibili per le <?php if($_GET['turno'] == "60"){$hour = (string)(((int)DATE(H)+3).":00"); echo($hour);} else{$hour = (string)(((int)DATE(H)+2).":".$_GET['turno']); echo($hour);}?>
					<form class="form-signup pt-5" style="max-width:1900px;">
            <?php
            session_start();
            $dbconn = pg_connect("host=database port=5432
            dbname=lunappark user=admin password=example");
            $email = $_SESSION["id"];
			$delview = pg_query($dbconn, "DROP VIEW IF EXISTS Postiturnoocc;");
			#$createview = pg_query_params($dbconn, "CREATE VIEW Postiturnoocc(idgio, postiocc) AS SELECT id, COUNT(*) FROM Attrazione JOIN Giostra ON (id = idgiostra) JOIN PrenotazioneGiostra ON (idgiostra = pren_idgiostra) WHERE ora_turno=$1 GROUP BY id;", array($hour));
			
			$createview = pg_query($dbconn, "CREATE VIEW Postiturnoocc(idgio, postiocc) AS SELECT id, COUNT(*) 
			FROM Attrazione JOIN Giostra ON (id = idgiostra) JOIN PrenotazioneGiostra ON (idgiostra = pren_idgiostra) 
			WHERE ora_turno='{ $hour }' GROUP BY id;");

			$_SESSION["hour"] = $hour;
			if (!$createview) {
				echo " An error occurred.\n";
				exit;
			}
			
            $querydate = 'SELECT Attrazione.nome, n_posti AS post_disponibili
			FROM Attrazione JOIN Giostra ON (id = idgiostra)
			WHERE (idgiostra = ANY (SELECT idgiostra
									FROM Giostra
									EXCEPT
									SELECT idgio
									FROM Postiturnoocc))
			UNION
			SELECT Attrazione.nome, n_posti - postiocc
			FROM Attrazione JOIN Giostra ON (id = idgiostra) JOIN Postiturnoocc ON (idgiostra = idgio)
			ORDER BY (post_disponibili);';

            $resultdate = pg_query($dbconn, $querydate);
			while($finaldate = pg_fetch_array($resultdate,null,PGSQL_NUM)){
                ?>
						<label class="checky" style="margin-left:10px; margin-right:10px; font-size: 18px;">
							<input type="radio" name="giostra" value=<?php echo($finaldate[0]);?> required>
							<?php echo($finaldate[0].": ".$finaldate[1]);?>
						</label>  
				
                <?php
			}
			?>
			</div>
			<div class="mt-5" ></div>
			<button class="btn-grad" type="submit">Prenota 1 posto</button>
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