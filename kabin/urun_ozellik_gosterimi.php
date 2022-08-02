<?php
require_once "parola.php"; 

require_once PATH."/datapath.php";
$id = @trim(htmlspecialchars(strip_tags($_POST["id"])));
if($id=="NaN"){$id=1;}
?>
                <input type="hidden" name="ozellikid[]" value="0">
                <div class="form-group">
                    <label class="col-sm-3 text-right">Özellik ve Değer Seçiniz</label>
                    <div class="col-sm-4">
                        <select class="form-control urun-ozellik" name="ozellik[]" data-sec="<?=$id?>">
                            <option value="0">Seçiniz</option>
                        <?php
                            $ozellik_sorgu = $Conn->prepare("select * from ozellikler order by sira asc");
                            $ozellik_sorgu->execute(array());
                            while($ozellk_row = $ozellik_sorgu->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?=$ozellk_row['id']?>"><?=$ozellk_row['baslik']?> <?php if($ozellk_row['notlar']!=""){ echo "(".$ozellk_row['notlar'].")";}?></option>
                        <?php
                            }
                        ?>
                        </select>                      
                    </div>
                    <div class="col-sm-4">
                        <div class="ozellikdeger_<?=$id?>">
														
					    </div>
                    </div>
                    <div class='col-sm-1'><a class='btn btn-danger btn-sm removefieldurunozellik'><i class='fa fa-times'></i></a></div>
                </div>