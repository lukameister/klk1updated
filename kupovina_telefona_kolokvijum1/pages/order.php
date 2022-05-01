<script>
    localStorage.removeItem("model");
</script>
<?php
date_default_timezone_set('Europe/Belgrade');


// If je ako se kuca u linku stranica=order
if (!isset($_POST['ime'])) {
    echo "<p class='try-again'>Niste popunili sva polja! "; ?><a href="./?stranica=kupovina">Pokušajte ponovo</a></p><?php
}
else {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $mobilni = $_POST['mobilni'];
    $godina = $_POST['godina'];
    $address = $_POST['address'];
    $valutaPlacanja = $_POST['valutaPlacanja'];
    $model = $_POST['model'];
    

    class Osoba {
        public $ime, $prezime, $mobilni, $godina, $address;
        public function __construct($ime, $prezime, $mobilni, $godina, $address)
        {
            $this->ime = $ime;
            $this->prezime = $prezime;
            $this->mobilni = $mobilni;
            $this->godina = $godina;
            $this->address = $address;
        }

        public function prikaz() {
            echo "<p>Podaci o osobi: " . $this->ime . " " . $this->prezime . ", " . $this->mobilni . ", " . $this->godina . ", " . $this->address . "</p><br>";
        }
    }

    //$novaOsoba = new Osoba($ime, $prezime, $mobilni, $godina, $address);

    class Porudzbina extends Osoba {
        public $model;
        public function __construct($ime, $prezime, $mobilni, $godina, $address, $valutaPlacanja, $model) {
            parent::__construct($ime, $prezime, $mobilni, $godina, $address);
            $this->valutaPlacanja = $valutaPlacanja;
            $this->model = $model;
           
        }
    }


    $np = new Porudzbina($ime, $prezime, $mobilni, $godina, $address, $valutaPlacanja, $model);

    if ($model=='IP') {
        $cenaModela = 60000;
    } else if ($model=='SA') {
        $cenaModela = 50000;
    }
    else if ($model=='HU') {
        $cenaModela = 40000;
    } else {
        $cenaModela = 0;
    }

 
    $cena = $cenaModela;
   

    if ($valutaPlacanja == 'EUR') {
        $cenaeur = $cena/118;
        $cenaeur = round($cena, 2);
    }else if($valutaPlacanja == 'USD'){
        $cenausd = $cena/111;
        $cenausd = round($cena, 2);
    }

    $polja = array("Ime", "Prezime", "Mobilni", "Godiste", "Adresa", "Model", "Cena", "Vreme transakcije");
    $uneto = array($np->ime, $np->prezime, $np->mobilni, $np->godina, $np->address, $np->model);
    

    if ($ime=='' || $prezime=='' || $mobilni=='' || $address=='' || $model=='0') {
        echo "<p class='try-again'>Niste popunili sva polja!";

        ?>
        <a href="./?stranica=kupovina">Pokušajte ponovo</a></p>
        <?php
    }

    else { ?>
        <div id="show">
            <div class="verified"><img src="./images/imagess.png" alt="poslato"> <br>
                <h1>USPEŠNO STE PORUCILI!</h1><br><br>
            </div>
            <div class="print"><?php
                $np->prikaz();
                
                ?>
                <table>
                    <tr>
                        <?php foreach ($polja as $polje) {?>
                            <th><?php echo $polje; ?></th>
                        <?php } ?>
                    </tr>
                    <tr>
                        <?php
                        foreach ($uneto as $unet) {?>

                            <td><?php echo $unet;?></td>

                        <?php }?>
                        <td><?php if ($valutaPlacanja == 'RSD') {
                                echo $cena . ' RSD';
                            } else if ($valutaPlacanja == 'EUR') {
                                echo $cenaeur . ' EUR';
                            }
                            else if($valutaPlacanja == 'USD'){
                                echo $cenausd , ' USD';
                            } ?></td>
                        <td><?php echo date('H:i, l, jS F Y') ?></td>
                        
                    </tr>
                </table>
            </div>
        </div>
        <?php
    }
}
?>