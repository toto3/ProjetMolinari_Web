<!DOCTYPE html>
<?php
  
   require_once 'library/config.php';
   
     require_once("manager/manager_monilari.php");
     
     require_once("classes/table_monilari.php");
       
if (isset($_GET['page']) && (int) $_GET['page'] > 0)
{
  $pageNumber = (int) $_GET['page'];
 
}
else
  {
  $pageNumber = 1;
  
 } 
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projet Monilari</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/style1.css" media="all"/>
        <link rel="stylesheet" href="styles/mystyle.css">
    </head>
    <body>
        <div id="fullpage">
	<header role="banner"> 
		<h1>Projet Monilari</h1> 
		<nav role="navigation"> 
		<ul>
		<li id="current" ><a id="current" href="#">Accueil</a></li>
                 <li><a href="http://localhost:8888/Monilari/monilari.php?rouge=11&vert=22&bleu=33">test2</a></li>
<!--		<li><a href="audio.html">Audio</a></li> 
		<li><a href="video.html">Vidéo</a></li> 
                 <li><a href="autres.html">Autres</a></li>
		<li><a href="contact.html">Contact</a></li> -->
		</nav>
	</header> 
	<article1>
            <h2>Présentation</h2>
            <p>Pascal Audet est un artiste en arts visuels interdisciplinaires. Il a terminé en 2011 un baccalauréat arts visuels et médiatiques à l'UQAM.</p> 
             <!--<img src="images/pa.jpg" alt="Photo de Pascal Audet.">-->
            <p>Cette formation lui a permis, depuis 2010, de travailler pour plusieurs artistes professionnels ainsi que pour des centres d'artistes.</p> 
            <p>Fort de son bagage professionnel de programmeur-analyste (15 ans), il n'hésite pas à utiliser dans sa pratique les technologies numériques pour produire des installations interactives dans lesquelles les éléments sonores et musicaux sont présents.</p>
            
            <p>Il s'intéresse à l'interactivité des spectateurs avec les oeuvres. Il cherche à découvrir comment améliorer ce contacte entre l'homme et le dispositif. Il a débuté en 2013 une maîtrise en arts visuels et médiatiques à l'UQAM sous la direction d'Alexandre Castonguay.</p> 
            
            <table  border="1px" >
                <tr>
                    <th>11couleur rvb</th>
                    <th>couleur bvr</th>
                    <th>r</th>
                    <th>v</th>
                    <th>b</th>
                </tr>

      <?php
  
           $lesCouleurs = getCouleurs(0, 1, 20);

         for ($index = 0; $index < count($lesCouleurs); $index++)
         {
          $Couleur = $lesCouleurs[$index];
          $id = $Couleur->get_id();
          $rouge = (string)$Couleur->get_rouge();
          $vert = (string)$Couleur->get_vert();
          $bleu = (string)$Couleur->get_bleu();
          echo "<tr>";
          
          $rouge=dechex($rouge);
           $vert=dechex($vert);
           $bleu=dechex($bleu);
          
          if (strlen($rouge)==1)
          {
              $rouge="0".$rouge; 
          }
           if (strlen($vert)==1)
          {
              $vert="0".$vert; 
          }
          if (strlen($bleu)==1)
          {
              $bleu="0".$bleu; 
          }
          

    
          $c=$rouge.$vert.$bleu;
          $c=strtoupper($c) ;
          echo "<td><span style='background:#".$c."'>&nbsp;$c&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
          
          
          
          $c=$bleu.$rouge.$vert;
          $c=strtoupper($c);
          echo "<td><span style='background:#".$c."'>&nbsp;$c&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
          
          
          echo "<td>" . "".strtoupper($rouge) . "&nbsp;</td>";
          echo "<td>" . "".strtoupper($vert) . "&nbsp;</td>";
          echo "<td>" . "".strtoupper($bleu). "</td>";
          echo "</tr>";
          }
         ?>
        </table>
       
            
            
        </article1>
	
	<footer role="contentinfo"> 
		<p>&copy; 2016 Pascal Audet</p>
	</footer> 
</div>
       

    </body>
</html>
