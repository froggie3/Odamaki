<?php get_header(); ?>
<main class="top-content-background">
	<div class="front-content-container">
		<div class="front-content">
			<h2 class="content-title">Who am I?</h2>
			<section id="whoami" class="front-section grid-test whoami-inside">
				<div class="front-section-a item">
					
					<div class="front-introduction-passage">
						<p>こんにちは。Yokkinと申します。</p>
						<p>かねてよりいろいろな音楽が好きで、自分の好きな曲を好きなように制作しています。</p>
						<p>手に負えぬほどの多趣味で、昨今は大好きな英語と作曲とプログラミングを中心に勉強中です。最近自作erにもなりました。</p>
						<p>イラストは<a href="https://twitter.com/Tsurubaming_tee">つるばみ</a>さんからいただきました。ありがとうございます🙏</p>
					</div>
					<div class="menu-social_links-container">
						<ul id="followmelink" class="menu">
							<li class="social-icon soundcloud">
								<a href="https://soundcloud.com/yokkin" title="SoundCloud">
								</a>
							</li>
							<li class="social-icon youtube">
								<a href="https://www.youtube.com/c/yokkin11012" title="YouTube">
								</a>
							</li>
							<li class="social-icon twitter">
								<a href="https://twitter.com/froggie3_" title="Twitter">
								</a>
							</li>
							<li class="social-icon skeb">
								<a href="https://skeb.jp/@froggie3_" title="Skeb">
								</a>
							</li>
							<li class="social-icon discord">
								<a href="https://twitter.com/froggie3_/status/1261231825558503430" title="Discord Server">
								</a>
							</li>
							<li class="social-icon github">
								<a href="https://github.com/froggie3" title="GitHub">
								</a>
							</li>
							<li class="social-icon sanctunes">
								<a href="https://sanctunes.com/" title="sanctunes">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="front-section-b item">
					<img
					src="<?php echo get_template_directory_uri(); ?>/files/img/self.png?20210718"
					alt="Yokkin"
					width="500"
					height="500"
					/>
				</div>
			</section>

			<h2 class="content-title">Contact</h2>

			<section id="contact" class="front-section">
				<p>Twitter (<a rel="noreferrer noopener" href="https://twitter.com/froggie3_" data-type="URL" data-id="https://twitter.com/froggie3_" target="_blank">@froggie3_</a>) のDM、または下記 E-mail アドレスより直接ご連絡ください。</p>
				
				<p>迷惑メール対策として、「@」を「[at]」に置き換えています。</p>
				
				<p><code>inquiry[at]yokkin.com</code></p>
			</section>

			<?php
			function embedTemplateYouTube( $videoId ) {
				echo (
					'<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/' . 
					$videoId .
					'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
				);
			}
			?>

			<h2 class="content-title">Works</h2>
			<!-- 
				CSS Grid
			-->
			<div id="works" class="grid-test">
				<div class="item item-border large">
					<div class="media media-1">
						<?php embedTemplateYouTube( 'DZTexREOZC0' ); ?>
					</div>

					<h2>Passing Sight</h2>

					<p>オリジナル曲です。</p>
				</div>
				<div class="item item-border">
					<div class="media media-2">
						<iframe style="border: 0; width: 350px; height: 350px;" src="https://bandcamp.com/EmbeddedPlayer/album=459643310/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="https://yokkin.bandcamp.com/album/oriori">折々- Oriori by Yokkin</a></iframe>
					</div>

					<h2>折々 / Oriori</h2>

					<p>1st アルバムです。</p>
					<p>折々の時間や場所が織りなす、10つの風景が詰まっています。</p>
					<p>以下のリンクより無料でダウンロードできます。</p>
					<p><a href="https://yokkin.bandcamp.com/album/oriori">https://yokkin.bandcamp.com/album/oriori</a></p>
				</div>
				<div class="item item-border">
					<div class="media media-1">
						<?php embedTemplateYouTube( '7BaPT0YBz2Y' ); ?>
					</div>

					<h2>RAINY</h2>

					<p>sanctunes よりリリースされたアルバムになります。6曲目「Me with Seagulls」で参加しています。</p>
					<p>以下のリンクより無料でダウンロードできます。</p>
					<p><a href="https://sanctunes.bandcamp.com/album/rainy">https://sanctunes.bandcamp.com/album/rainy</a></p>
				</div>
				<div class="item item-border">
					<div class="media media-1">
						<?php embedTemplateYouTube( 'GzkQHLj3ZFw' ); ?>
					</div>

					<h2>TOWN</h2>

					<p>sanctunes よりリリースされたアルバムになります。3曲目「初夏の街路樹」で参加しています。</p>
					<p>以下のリンクより無料でダウンロードできます。</p>
					<p><a href="https://sanctunes.bandcamp.com/album/town">https://sanctunes.bandcamp.com/album/town</a></p>
				</div>
				<div class="item item-border">
					<div class="media media-1">
						<?php embedTemplateYouTube( 'BoqzFhXAz5w' ); ?>
					</div>

					<h2>POWER</h2>

					<p>sanctunes よりリリースされたアルバムになります。6曲目「<strong>Smoke</strong>」で参加しています。</p>
					<p>以下のリンクより無料でダウンロードできます。</p>
					<p><a href="https://sanctunes.bandcamp.com/album/power">https://sanctunes.bandcamp.com/album/power</a></p>
				</div>
				<div class="item item-border">
					<div class="media media-1">
						<svg style="width: 80%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 134 40"><defs><style>.a{fill:url(#a);}.b{fill:#1e5e71;}.c{fill:#fff;}.d{fill:none;}.e{fill:#344;}.f{fill:#30b396;}</style><linearGradient id="a" x1="7.43" y1="7.43" x2="32.57" y2="32.57" gradientUnits="userSpaceOnUse"><stop offset="0.2" stop-color="#30b396"/><stop offset="1" stop-color="#1e5e71"/></linearGradient></defs><circle class="a" cx="20" cy="20" r="17.77"/><path class="b" d="M20,2.23A17.77,17.77,0,1,1,2.23,20,17.77,17.77,0,0,1,20,2.23M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0Z"/><rect class="c" x="12.66" y="7.4" width="2.68" height="4.02" transform="translate(0.58 19.61) rotate(-71.15)"/><rect class="c" x="10.06" y="15" width="2.68" height="4.02" transform="translate(-8.37 22.3) rotate(-71.15)"/><rect class="c" x="7.47" y="22.6" width="2.68" height="4.02" transform="translate(-17.32 24.99) rotate(-71.15)"/><path class="c" d="M8,33.11l.52-1.52-2.76-.94A17.84,17.84,0,0,0,8,33.11Z"/><path class="c" d="M15.5,7.09,18,8,16.31,13l-2.53-.87-.87,2.54,2.53.87-1.73,5.06-2.53-.87-.87,2.54,2.53.87-1.73,5.06-2.53-.87L7.72,29.9l2.53.87L9.13,34a17.78,17.78,0,0,0,2.31,1.53L18.79,14l.06-.16,1.77-5.19L21,7.55,15.94,5.82Z"/><path class="c" d="M36.27,12.87,22.94,8.31,13.33,36.47a17.76,17.76,0,0,0,22.95-23.6Z"/><circle class="d" cx="20" cy="20" r="17.77"/><path class="e" d="M52.28,25.9a8.38,8.38,0,0,0,5.48,2.44,3.15,3.15,0,0,0,2.4-.82A2.14,2.14,0,0,0,60.77,26a1.87,1.87,0,0,0-.68-1.43A8.61,8.61,0,0,0,57,23.32l-1.61-.5A7.81,7.81,0,0,1,52,20.88a6,6,0,0,1-1.36-4.23,7.82,7.82,0,0,1,2.19-5.77,8.43,8.43,0,0,1,6.13-2.26,16.79,16.79,0,0,1,7.38,1.94l-2.47,4.84a6.31,6.31,0,0,0-4.09-1.61,3,3,0,0,0-2,.72,1.77,1.77,0,0,0-.61,1.29,1.6,1.6,0,0,0,.32,1.08,3.92,3.92,0,0,0,2.08,1.08l1.9.57a9.13,9.13,0,0,1,4.34,2.37,5.64,5.64,0,0,1,1.54,4.27,8.1,8.1,0,0,1-2.26,6c-2,2-4.52,2.44-7.06,2.44a12.78,12.78,0,0,1-4.7-.79,16.69,16.69,0,0,1-3.62-1.9Z"/><path class="e" d="M77.36,6.94V22.81L82.77,17h7.78L83,24.43l8.17,8.64h-8l-5.84-6.56v6.56H71.62V6.94Z"/><path class="e" d="M110,26.11H98a4,4,0,0,0,1,2.69,3.22,3.22,0,0,0,2.37.79,4.53,4.53,0,0,0,1.86-.43,2.67,2.67,0,0,0,1-1.08h5.48a7.2,7.2,0,0,1-1.94,3.3c-1.18,1.15-3,2.22-6.52,2.22a9.09,9.09,0,0,1-6.63-2.44,8.39,8.39,0,0,1-2.37-6.06,8.55,8.55,0,0,1,2.4-6.2,9,9,0,0,1,6.56-2.33,8.78,8.78,0,0,1,6.17,2.19A9,9,0,0,1,110,25.5Zm-5.27-3.3a3.84,3.84,0,0,0-.93-1.72,3.34,3.34,0,0,0-2.37-.86,3.08,3.08,0,0,0-2.33.86,3.27,3.27,0,0,0-.86,1.72Z"/><path class="e" d="M120,6.94V18.58a6.34,6.34,0,0,1,4.77-2.08,8.19,8.19,0,0,1,5.66,2.15A8.73,8.73,0,0,1,133,25a8.84,8.84,0,0,1-2.58,6.38,7.67,7.67,0,0,1-5.63,2.22A5.88,5.88,0,0,1,120,31.31v1.76h-5.73V6.94ZM126,27.65a3.62,3.62,0,0,0,1.11-2.51A3.93,3.93,0,0,0,126,22.42a3.68,3.68,0,0,0-5.16,0A4.19,4.19,0,0,0,119.78,25,3.84,3.84,0,0,0,121,27.76a3.92,3.92,0,0,0,2.47,1A3.56,3.56,0,0,0,126,27.65Z"/><polygon class="f" points="71.62 6.94 71.62 12.67 77.36 6.94 71.62 6.94"/><polygon class="f" points="114.22 6.94 114.22 12.67 119.96 6.94 114.22 6.94"/></svg>
					</div>

					<h2>Skeb</h2>

					<p>匿名のリクエストを含めた様々な曲を作曲しました。</p>
				</div>
				<div class="item item-border large-2">
					<div class="media media-freeform">
						<img width="880" height="240" src="https://yokkin.com/wp-content/uploads/2021/02/20210106000542.png" alt="PseudoPhaserのスクリーンショット" />
					</div>

					<h2>PseudoPhaser</h2>
					
					<p>Kilohearts Disperser を模したものです。GNUライセンスです。</p>
					<p><a href="https://github.com/froggie3/PseudoPhaser">https://github.com/froggie3/PseudoPhaser</a></p>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/content/bottom'); ?>
</main>

<?php get_footer();
