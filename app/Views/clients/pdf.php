Comment créer un fichier PDF en PHP à partir de données extraites d'une base MySql ?
Au préalable j'installe la classe FPDF.
Supposons :
une base de données : mabase
qui contient une table : matable
qui contient les champs suivants : id (identifiant clé unique), titre, description
j'aimerais générer un fichier PDF qui contient tous les enregistrements de ma table, triés sur le titre qui apparaîtra en gras. Mon document aura une en-tête et un pied-de-page.
Je crée le fichier pdf.php suivant :
<?
// la classe de fonctions
require('fpdf.php');
// connexion base de données
$db_server = "localhost";
$db_user = "root";
$db_pass = "motdepasse";
$db_name = "mabase";
function connect($db_server, $db_user, $db_pass, $db) {
    if (!($link=mysql_connect($db_server,$db_user,$db_pass))) {
        exit();
    }
    if (!(mysql_select_db($db,$link))) {
        exit();
    }
    return $link;
}
$connexion=connect($db_server,$db_user,$db_pass,$db_name);

// classe étendue pour créer en-tête et pied de page
class PDF extends FPDF
{
// en-tête
function Header()
{
    //Police Arial gras 15
    $this->SetFont('Arial','B',14);
    //Décalage à droite
    $this->Cell(80);
    //Titre
    $this->Cell(30,10,'Mon joli fichier PDF',0,0,'C');
    //Saut de ligne
    $this->Ln(20);
}

// pied de page
function Footer()
{
    //Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    //Police Arial italique 8
    $this->SetFont('Arial','I',8);
    //Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// création du pdf
$pdf=new PDF();
$pdf->SetAuthor('Un grand écrivain');
$pdf->SetTitle('Mon joli fichier');
$pdf->SetSubject('Un exemple de création de fichier PDF');
$pdf->SetCreator('fpdf_cybermonde_org');
$pdf->AliasNBPages();
$pdf->AddPage();

// requête
$sql = mysql_query("SELECT * FROM matable ORDER BY titre",$connexion);

// on boucle  
    while ($row = mysql_fetch_array($sql)) {
        $id = $row["id"];
        $titre = $row["titre"];
        $description = $row["description"];
        // titre en gras
        $pdf->SetFont('Arial','B',10);
        $pdf->Write(5,$titre);
        $pdf->Ln();
        // description
        $pdf->SetFont('Arial','',10);
        $pdf->Write(3,$description);
        $pdf->Ln();
        $pdf->Ln();
    }
// sortie du fichier
$pdf->Output('monfichier.pdf', 'I');
?>
Le fichier monfichier.pdf sera proposé en téléchargement.