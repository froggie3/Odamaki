<style>

div.block0 {
    padding: 1em 0;
}

div.block1 {
    margin: 1em 0;
}

.ur2m92s4{
	margin-right: 0.5em;
}

.ur2m92s5{
	margin-left: 0.8em;
}


</style>

<div class="block0 ">
	<form action="" method="get">
		<div class="block1">
			<input class="ur2m92s4" type="radio" name="fetchWithanimalName" value="1" checked="">動物を選択
				<select class="ur2m92s5" name="animalName">
					<option disabled>-- 選択してください --</option>
					<option value="1223">猫</option>
					<option value="ojirou">鳥</option>
					<option value="sharu">猿</option>
				</select>
		</div>
		
		<div class="block1">
			<input class="ur2m92s4" type="radio" name="fetchWithanimalName" value="0">逆引き検索
				<select class="ur2m92s5" name="commonName">
					<option disabled>-- 選択してください --</option>
					<option value="1223">1223</option>
					<option value="ojirou">オジロウ</option>
					<option value="sharu">sharu</option>
				</select>
		</div>
		
		<div class="block1">
			<div class="button-wrapper"><input class="button" type="submit" value="送信"></div>
			<div class="button-wrapper"><input class="button" type="reset" value="リセット"></div>
		</div>
	</form>
</div>


<?php

# 初期化
$a = 0;

$sanctunes = array(
	"1223" 		=> array("commonName1" => "1223", "animalName1" => "猫"),
	"sharu" 	=> array("commonName1" => "sharu", "animalName1" => "猿"),
	"osakana"	=> array("commonName1" => "おさかな", "animalName1" => "おさかな"),
	"ojirou"	=> array("commonName1" => "オジロウ", "animalName1" => "鳥"),
	"kre4tive"	=> array("commonName1" => "kre4tive", "animalName1" => "サークル主催")
);

if ($_GET["fetchWithanimalName"] == "1") {
	echo "<p>動物を選択しました。</p>";
	echo "<p><strong>" . $sanctunes[$_GET['animalName']]["animalName1"] . "</strong>は音楽サークル「sanctunes」に所属する、<strong>" . $sanctunes[$_GET['animalName']]["commonName1"] . "</strong>です。</p>";

} elseif ($_GET["fetchWithanimalName"] == "0") {
	echo "<p>逆引き検索を選択しました。</p>";
	echo "<p><strong>" . $sanctunes[$_GET['commonName']]["commonName1"] . "</strong>は音楽サークル「sanctunes」のメンバーで、<strong>" . $sanctunes[$_GET['commonName']]["animalName1"] . "</strong>です。</p>";

} elseif (is_null($_GET["fetchWithanimalName"]) == true) {
	echo "<p><span style=\"color: red;\">ラジオボタンをクリックしてください。</span></p>";

} else {

}