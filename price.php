<?php
require 'Parts/Header.php';
$query = "SELECT * FROM price "; //строка запроса на языке SQL.
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$priceDatas = array();
$k = mysqli_num_rows($result);
while ($d < $k) {
    $priceDatas[] = mysqli_fetch_array($result);
    $d++;
}

$query = "SELECT * FROM pricelist ";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$priceListImageData = mysqli_fetch_array($result);

?>

<div class="priceContainer">

    <div class="title wow j" data-wow-delay="0.2s">
        <h1>
            <span class="x">
                Цены
            </span>
        </h1>
        <? if($ses){?>
            <a class="editing" href="Admin/adminSite/price/priceEditing.php">Редактировать данные на странице</a>
        <?}?>
    </div>

    <div class="priceList">

        <div class="priceListImg wow tada" data-wow-delay="1s">
            <img src="Image/priceList/<? echo $priceListImageData['imageLink'];?>" width="80%">

        </div>
    </div>

    <div class="priceListTelephone">

        <div class="priceContentTop">
            <? foreach ($priceDatas as $priceData){?>
            <div class="priceInfoContainer wow bounceInDown" data-wow-offset="20" data-wow-delay="1s">
                <img src="Image/priceList/<? echo $priceData['iconLink'];?>">
                <div class="packageName">
                    <p><? echo $priceData['PackageName']; ?></p>

                </div>
                <div class="openingHours">
                    <p><? echo $priceData['OpeningHours']; ?></p>
                </div>
                <div class="cost">
                    <p><? echo $priceData['Cost']; ?> руб.</p>
                </div>
            </div>
            <?}?>
        </div>
    </div>
</div>
<?php
require 'Parts/Footer.php';
?>
