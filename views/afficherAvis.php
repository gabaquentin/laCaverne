<?PHP
include "AvisC.php";
include "Avis.php";
$Avis1C=new AvisC();
$listeAvis=$Avis1C->afficherAviss();

//var_dump($listeAviss->fetchAll());
?>

<?PHP
foreach($listeAvis as $row){
	?>
	
	<div class="ps-review__thumbnail"><img src="images/user/1.jpg" alt=""></div>
                <div class="ps-review__content">
                  <header>
                    <select class="ps-rating">
                      <?php
                      for($i=0;$i<$row['note'];$i++){
                        ?>
                      <option value="1">1</option>
                      <?php
                    }
                    ?>
                    </select>
                    <p>By<a href="#"> <?PHP echo $row['nom']; ?></a> - November 25, 2017</p>
                  </header>
                  <p><?PHP echo $row['commentaire']; ?></p>
				<form method="POST" action="../bready/views/supprimerAvis.php">
	<button class="ps-btn ps-btn--yellow">supprimer</button>
	<input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
	</form>
	</td>
                </div>
              </div>
	<?PHP
}
?>
