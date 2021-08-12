<div class="grid-full no-pd">
	<div class="content-title-wrapper">
		<h2 class="content-title">My interests</h2>
	</div>
	<?php
// 配列にあるデータの数の分だけ繰り返し出力する
$card = array(
    'title' => array(
        'Composing, Mixing',
        'Web Designing, Coding',
        'English',
        'You',
    ) ,
    'description' => array(
        'Since 2013',
        'Since 2014',
        'Since 2015',
        'visiting this website &lt;3',
    ) ,
    'image_URL' => array(
        'https://yokkin.com/wp-content/uploads/2021/01/20200507170320.jpg',
        'https://yokkin.com/wp-content/uploads/2021/01/20210128232027.png',
        '',
        'https://yokkin.com/wp-content/uploads/2021/01/kissemoji.png',
    ) ,
    'background-style' => array(
        '',
        '',
        '',
        'background-size: contain; ',
    ),
    'text-style' => array(
        'color: #ffffff; text-shadow: 2px 2px 3px #000000;',
        'background-color: #00000054; color: #ffffff; text-shadow: 2px 2px 3px #000000;',
        'background-color: #ffffff; color: #333333;',
        'background-color: #ffffffad; color: #333333;',
    ),
);
// NUMBER OF ENTITIES
$noe = count($card); ?>
	<?php $i = 0; while ($i < $noe - 1): ?>
	<div class="zxcv"<?php
	if (!empty($card['image_URL'][$i])) {
		echo 'style="' . $card['background-style'][$i];
		echo 'background-image: url(' . $card['image_URL'][$i] . ');"';
		} ?>>
		<dl class="zxcv-text" style="<?php echo $card['text-style'][$i]; ?>">
			<dt class="zxcv-text-dt"><?php echo $card['title'][$i]; ?>
			<dd class="zxcv-text-dd"><?php echo $card['description'][$i]; ?>
		</dl>
	</div>
	<?php ++$i; endwhile; ?>
</div>
