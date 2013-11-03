<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=oparis', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT number,address FROM velib');
while ($donnees = $reponse->fetch())
{
	if (preg_match("#75016#", $donnees['address']))
	{	
		$num = $donnees['number'];
		$req = $bdd->prepare('UPDATE velib SET district = 16 WHERE number = :number');
		$req->execute(array(
		    'number' => $num
		));
    	echo $donnees['address'] . '<br />';
	}

}
 
$reponse->closeCursor();
?>