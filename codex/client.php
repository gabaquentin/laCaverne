
</br>
<div style="clear: both" >
    <form method="get" action="../index.php">
<input type="text" class='mySearch' id="ls_query" placeholder="Entrez une recherche ..." />	
        
    </form>
    </div>
<div class="row tm-content-row tm-mt-big">
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                                <div class="form-group">
								<h2 class="tm-block-title d-inline-block">Comptes Clients</h2>
								<table class="table table-hover table-striped tm-table-s
                                       triped-even mt-3">
                                   <tr></tr>
						</table>
                                </div>
                        </div>
                    </div>
                    <ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big" >

		             <?PHP
                     if(isset($_GET['data']))
                     {
                         foreach($listeAbonnes as $row){
                             
                             if($row['email'] == $_GET['data'])
                             {
                                 $nom=$row['nom'];
                                 $prenom=$row['prenom'];
                                 $datenaiss=$row['datenaiss'];
                                 $email=$row['email'];
                                 $adresse=$row['adresse'];
                                 $pass=$row['motdepasse'];
                                 $tel=$row['telephone'];
                                 
                                 header('location : accounts.php?compte=client&amp;nom=$nom&amp;prenom=$prenom&amp;datenaiss=$datenaiss&amp;email=$email&amp;adresse=$adresse&amp;pass=$pass&amp;tel=$tel');
                             }


                         }
                     }
                     else
                     {
                         foreach($listeAbonnes as $row){
                             
                             echo "   <li class='tm-list-group-item' >";
                             
                             $nom=$row['nom'];
                             $prenom=$row['prenom'];
                             $datenaiss=$row['datenaiss'];
                             $email=$row['email'];
                             $adresse=$row['adresse'];
                             $pass=$row['motdepasse'];
                             $tel=$row['telephone'];
                             
                             if($row['etat_fid'] == 1)
                             {
                                 echo "<a href='accounts.php?compte=client&amp;nom=$nom&amp;prenom=$prenom&amp;datenaiss=$datenaiss&amp;email=$email&amp;adresse=$adresse&amp;pass=$pass&amp;tel=$tel' style='color:gold;'>$email</a>"; 
                             }
                             else
                             {
                                 echo "<a href='accounts.php?compte=client&amp;nom=$nom&amp;prenom=$prenom&amp;datenaiss=$datenaiss&amp;email=$email&amp;adresse=$adresse&amp;pass=$pass&amp;tel=$tel' style='color:green;'>$email</a>"; 
                             }

                         }
                     }
                    ?>
                            </li>
                    </ol>
                    </br>
                    <div class="tm-table-actions-col-center">
                        <span class="tm-pagination-label">Page</span>
                        <nav aria-label="Page navigation" class="d-inline-block">
                            <ul class="pagination tm-pagination">
                                <?php
                                if(isset($_SESSION['nbpage']))
                                {
                                    //echo $_SESSION['nbpage'];
                                    if(isset($_GET['p']))
                                    {
                                        if($_GET['p'] > 1)
                                        {
                                            echo
                                            "
                                <li class='page-item active'>
                                    <a class='page-link' href='accounts.php?compte=client&amp;p=1'>1</a>
                                </li>
                                        ";
                                            echo
                                            "
                                <li class='page-item active'>
                                    ...
                                </li>
                                        ";
                                        }
                                        for($i=$_GET['p']-1;$i<=$_SESSION['nbpage']+4;$i++)
                                        {
                                            if($i > 0)
                                            {
                                                echo
                                                "
                                <li class='page-item active'>
                                    <a class='page-link' href='accounts.php?compte=client&amp;p=$i'>$i</a>
                                </li>
                                        ";
                                                if(($i+1 > $_SESSION['nbpage']) || ($i+1 < 1))
                                                    break;
                                            }
                                        }
                                        if($_GET['p'] < $_SESSION['nbpage'])
                                        {
                                            echo
                                            "
                                <li class='page-item active'>
                                    ...
                                </li>
                                        ";
                                            echo
                                            "
                                <li class='page-item active'>
                                    <a class='page-link' href='accounts.php?compte=client&amp;p=".ceil($_SESSION['nbabonne']/$_SESSION['perpage'])."'>".ceil($_SESSION['nbabonne']/$_SESSION['perpage'])."</a>
                                </li>
                                        ";
                                        }
                                    }
                                    else
                                    {
                                    for($i=1;$i<=$_SESSION['nbpage'];$i++)
                                    {
                                        echo
                                        "
                                <li class='page-item active'>
                                    <a class='page-link' href='accounts.php?compte=client&amp;p=$i'>$i</a>
                                </li>
                                        ";
                                        if($i == 7)
                                            break;
                                    }
                                }
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title">Editer le compte</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form method="post" action="views/actionAbonne.php" class="tm-signup-form">
                                <div class="form-group">
                                    <label for="nom">Nom du Compte</label>
                                    <input value="<?php if(isset($_COOKIE['nom'])){echo $_COOKIE['nom'];}else{echo "";}?>" id="nom" name="nom" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="prenom">Prenom</label>
                                    <input value="<?php if(isset($_COOKIE['prenom'])){echo $_COOKIE['prenom'];}else{echo "";}?>" id="prenom" name="prenom" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="datenaiss">Date de naissance</label>
                                    <input value="<?php if(isset($_COOKIE['datenaiss'])){echo $_COOKIE['datenaiss'];}else{echo "";}?>" id="datenaiss" name="datenaiss" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input value="<?php if(isset($_COOKIE['email1'])){echo $_COOKIE['email1'];}else{echo "";}?>" id="email" name="email" type="email" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Mot de passe</label>
                                    <input value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];}else{echo "";}?>" id="pass" name="pass" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telephone</label>
                                    <input value="<?php if(isset($_COOKIE['tel'])){echo $_COOKIE['tel'];}else{echo "";}?>" id="tel" name="tel" type="tel" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="adresse">Adresse de Residence</label>
                                    <input value="<?php if(isset($_COOKIE['adresse'])){echo $_COOKIE['adresse'];}else{echo "";}?>" id="adresse" name="adresse" type="text" class="form-control validate">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" name="modifier" class="btn btn-primary">Modifier
                                        </button>
                                    </div>
                                    <div class="col-12 col-sm-8 tm-btn-right">
                                        <button type="submit" name="supprimer" class="btn btn-danger">Supprimer le compte
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>