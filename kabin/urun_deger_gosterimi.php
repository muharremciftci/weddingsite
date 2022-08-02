<?php
require_once "parola.php"; 
require_once PATH."/datapath.php";
$id = @trim(htmlspecialchars(strip_tags($_POST["id"])));
$datasec = @trim(htmlspecialchars(strip_tags($_POST["datasec"])));
$degerid = @trim(htmlspecialchars(strip_tags($_POST["degerid"])));
?>
                        <select class="form-control urun-deger" name="ozellik_deger[]" data-sec="<?=$datasec?>">
                            <option value="0">Seçiniz</option>
                        <?php
                            $deger_sorgu = $Conn->prepare("select * from ozellik_degerleri where ozellik_id=? order by sira asc");
                            $deger_sorgu->execute(array($id));
                            while($deger_row = $deger_sorgu->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?=$deger_row['id']?>" <?php  echo $degerid==$deger_row['id'] ? 'selected' : ''; ?>><?=$deger_row['deger']?></option>
                        <?php
                            }
                        ?>
                        </select>