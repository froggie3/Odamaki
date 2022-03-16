<?php get_header(); ?>
	<div class="jumbotron" style="background-image: url('<?php header_image(); ?>')">
		<div class="jumbotron-background container container-big">
			<?php if (!empty(headerTitle())): ?>
				<?php echo '<h1 class="jumbotron-page-title">' . headerTitle() . '</h1>'; ?>
			<?php endif; ?>

			<?php if (is_single()):  // 投稿ページの詳細は不要なので何も出力しない ?>
			<?php else: ?>
				<?php
				if (!empty(headerDescription())) {
					echo '<div class="jumbotron-page-info">' . headerDescription() . '</div>';
				}
				?>
			<?php endif; ?>
		</div>
	</div>
	<div class="container container-big">
		<h2 class="content-title margin-top">Who am I?</h2>
		<section id="whoami" class="large-section-wrapper item-border grid-test whoami-inside content-rules">
			<div class="large-section-wrapper-a item">
				
				<div class="front-introduction-passage">
					<p>こんにちは。Yokkinと申します。</p>
					<p>かねてよりいろいろな音楽が好きで、自分の好きな曲を好きなように制作しています。</p>
					<p>手に負えぬほどの多趣味で、昨今は大好きな英語と作曲とプログラミングを中心に勉強中です。最近自作erにもなりました。</p>
					<p>イラストは<a href="https://twitter.com/Tsurubaming_tee">つるばみ</a>さんからいただきました。ありがとうございます🙏</p>
				</div>
				<ul id="followmelink" class="menu">
					<li>	
						<a href="https://soundcloud.com/yokkin" title="SoundCloud">
						<svg width="100%" height="100%" viewBox="0 0 48 27" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><g><path d="M0,22.153c0,0.604 0.216,1.06 0.648,1.37c0.432,0.31 0.893,0.419 1.385,0.328c0.461,-0.09 0.785,-0.256 0.971,-0.498c0.186,-0.241 0.279,-0.642 0.279,-1.2l0,-6.569c0,-0.468 -0.16,-0.865 -0.48,-1.189c-0.32,-0.325 -0.711,-0.487 -1.172,-0.487c-0.447,0 -0.831,0.162 -1.151,0.487c-0.32,0.324 -0.48,0.721 -0.48,1.189l0,6.569Zm5.137,2.808c0,0.438 0.153,0.767 0.458,0.986c0.305,0.219 0.696,0.328 1.173,0.328c0.491,-0 0.889,-0.109 1.195,-0.328c0.305,-0.219 0.458,-0.548 0.458,-0.986l-0,-15.312c-0,-0.453 -0.16,-0.842 -0.481,-1.166c-0.32,-0.325 -0.711,-0.487 -1.172,-0.487c-0.447,-0 -0.83,0.162 -1.151,0.487c-0.32,0.324 -0.48,0.713 -0.48,1.166l-0,15.312Zm5.115,0.725c0,0.438 0.157,0.767 0.469,0.986c0.313,0.218 0.715,0.328 1.206,0.328c0.477,0 0.868,-0.11 1.173,-0.328c0.305,-0.219 0.458,-0.548 0.458,-0.986l-0,-13.975c-0,-0.469 -0.16,-0.869 -0.48,-1.201c-0.32,-0.332 -0.704,-0.498 -1.151,-0.498c-0.461,0 -0.856,0.166 -1.183,0.498c-0.328,0.332 -0.492,0.732 -0.492,1.201l0,13.975Zm5.137,0.068c0,0.831 0.551,1.246 1.653,1.246c1.102,0 1.653,-0.415 1.653,-1.246l-0,-22.651c-0,-1.268 -0.38,-1.986 -1.139,-2.152c-0.491,-0.12 -0.975,0.023 -1.452,0.431c-0.476,0.407 -0.715,0.981 -0.715,1.721l0,22.651Zm5.227,0.657l-0,-24.644c-0,-0.785 0.231,-1.254 0.693,-1.405c0.997,-0.241 1.987,-0.362 2.97,-0.362c2.278,0 4.4,0.544 6.366,1.631c1.966,1.087 3.555,2.571 4.769,4.451c1.213,1.88 1.917,3.952 2.11,6.218c0.909,-0.393 1.877,-0.589 2.904,-0.589c2.085,0 3.868,0.747 5.35,2.242c1.481,1.495 2.222,3.292 2.222,5.391c0,2.114 -0.741,3.919 -2.222,5.414c-1.482,1.495 -3.258,2.242 -5.328,2.242l-19.432,-0.023c-0.134,-0.045 -0.234,-0.128 -0.301,-0.249c-0.067,-0.121 -0.101,-0.226 -0.101,-0.317Z" style="fill:#ff4300;"/></g></g></svg>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/c/yokkin11012" title="YouTube">
						<svg width="100%" height="100%" viewBox="0 0 48 34" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><g><path d="M19.044,23.27l-0.002,-13.582l12.97,6.814l-12.968,6.768Zm28.476,-15.936c0,0 -0.469,-3.331 -1.908,-4.798c-1.826,-1.926 -3.871,-1.935 -4.809,-2.047c-6.717,-0.489 -16.792,-0.489 -16.792,-0.489l-0.021,0c0,0 -10.076,0 -16.793,0.489c-0.939,0.112 -2.983,0.121 -4.81,2.047c-1.439,1.467 -1.907,4.798 -1.907,4.798c-0,0 -0.48,3.913 -0.48,7.824l0,3.668c0,3.912 0.48,7.823 0.48,7.823c-0,0 0.468,3.331 1.907,4.798c1.827,1.926 4.225,1.866 5.293,2.067c3.84,0.371 16.32,0.486 16.32,0.486c0,0 10.086,-0.015 16.803,-0.505c0.938,-0.113 2.983,-0.122 4.809,-2.048c1.439,-1.467 1.908,-4.798 1.908,-4.798c0,0 0.48,-3.911 0.48,-7.823l0,-3.668c0,-3.911 -0.48,-7.824 -0.48,-7.824Z" style="fill:#ce1312;"/></g></g></svg>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/froggie3_" title="Twitter">
						<svg width="100%" height="100%" viewBox="0 0 48 40" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><g><path d="M48,4.735c-1.764,0.803 -3.663,1.347 -5.655,1.589c2.035,-1.248 3.595,-3.227 4.331,-5.584c-1.905,1.155 -4.009,1.996 -6.258,2.447c-1.791,-1.962 -4.352,-3.187 -7.187,-3.187c-5.435,0 -9.844,4.521 -9.844,10.098c0,0.791 0.085,1.56 0.254,2.299c-8.185,-0.422 -15.44,-4.437 -20.3,-10.554c-0.848,1.497 -1.332,3.233 -1.332,5.082c0,3.502 1.738,6.593 4.381,8.405c-1.612,-0.049 -3.133,-0.509 -4.463,-1.26l0,0.124c0,4.894 3.395,8.977 7.903,9.901c-0.826,0.237 -1.696,0.356 -2.595,0.356c-0.634,-0 -1.254,-0.061 -1.854,-0.179c1.254,4.01 4.888,6.931 9.199,7.009c-3.37,2.71 -7.618,4.325 -12.23,4.325c-0.795,-0 -1.581,-0.047 -2.35,-0.139c4.359,2.86 9.537,4.533 15.096,4.533c18.115,0 28.019,-15.385 28.019,-28.73c0,-0.439 -0.009,-0.878 -0.026,-1.308c1.925,-1.425 3.595,-3.201 4.911,-5.227" style="fill:#00aaec;"/></g></g></svg>
						</a>
					</li>
					<li>
						<a href="https://skeb.jp/@froggie3_" title="Skeb">
						<svg width="100%" height="100%" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><circle cx="35" cy="35" r="31.1" style="fill:url(#_Linear1);"/><path d="M35,3.9c17.061,0 31.1,14.039 31.1,31.1c0,17.061 -14.039,31.1 -31.1,31.1c-17.061,0 -31.1,-14.039 -31.1,-31.1c0,-17.061 14.039,-31.1 31.1,-31.1m0,-3.9c-19.2,0 -35,15.8 -35,35c0,19.2 15.8,35 35,35c19.2,0 35,-15.8 35,-35c0,-19.2 -15.8,-35 -35,-35Z" style="fill:#1c5b6e;fill-rule:nonzero;"/><g><path d="M21.931,13.091l-1.519,4.448l6.653,2.271l1.519,-4.448l-6.653,-2.271Z" style="fill:#fff;"/></g><g><path d="M17.391,26.394l-1.519,4.448l6.653,2.272l1.519,-4.448l-6.653,-2.272Z" style="fill:#fff;"/></g><g><path d="M12.85,39.701l-1.518,4.448l6.653,2.272l1.518,-4.448l-6.653,-2.272Z" style="fill:#fff;"/></g><path d="M14,57.94l1,-2.66l-4.82,-1.65c1.138,1.551 2.417,2.994 3.82,4.31Z" style="fill:#fff;fill-rule:nonzero;"/><path d="M27.13,12.41l4.43,1.51l-3,8.86l-4.46,-1.51l-1.52,4.44l4.42,1.52l-3,8.86l-4.43,-1.51l-1.57,4.42l4.43,1.51l-3,8.86l-4.43,-1.5l-1.5,4.45l4.43,1.51l-2,5.74c1.262,0.995 2.599,1.891 4,2.68l12.94,-37.67l0.1,-0.29l3.1,-9.09l0.68,-2l-8.87,-3l-0.75,2.21Z" style="fill:#fff;fill-rule:nonzero;"/><path d="M63.48,22.52l-23.34,-8l-16.82,49.3c3.718,1.512 7.695,2.29 11.709,2.29c17.05,-0 31.08,-14.03 31.08,-31.08c0,-4.307 -0.895,-8.567 -2.629,-12.51Z" style="fill:#fff;fill-rule:nonzero;"/><circle cx="35" cy="35" r="31.1" style="fill:none;"/><defs><linearGradient id="_Linear1" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(43.98,43.98,-43.98,43.98,13.01,13.01)"><stop offset="0" style="stop-color:#32aa8f;stop-opacity:1"/><stop offset="0.2" style="stop-color:#32aa8f;stop-opacity:1"/><stop offset="1" style="stop-color:#1c5b6e;stop-opacity:1"/></linearGradient></defs></svg>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/froggie3_/status/1261231825558503430" title="Discord Server">
						<svg width="100%" height="100%" viewBox="0 0 71 55" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><path d="M60.105,4.898c-4.526,-2.077 -9.379,-3.606 -14.452,-4.483c-0.093,-0.016 -0.185,0.026 -0.233,0.11c-0.624,1.11 -1.315,2.558 -1.799,3.697c-5.457,-0.817 -10.887,-0.817 -16.232,-0c-0.484,-1.164 -1.2,-2.587 -1.827,-3.697c-0.048,-0.081 -0.14,-0.124 -0.233,-0.11c-5.071,0.874 -9.923,2.404 -14.451,4.483c-0.04,0.017 -0.073,0.045 -0.096,0.082c-9.204,13.751 -11.726,27.164 -10.489,40.411c0.006,0.065 0.042,0.127 0.093,0.167c6.073,4.459 11.955,7.167 17.729,8.962c0.092,0.028 0.19,-0.006 0.249,-0.082c1.365,-1.865 2.583,-3.832 3.627,-5.9c0.061,-0.121 0.002,-0.264 -0.123,-0.312c-1.931,-0.733 -3.77,-1.626 -5.539,-2.64c-0.14,-0.082 -0.151,-0.282 -0.022,-0.378c0.372,-0.279 0.744,-0.569 1.1,-0.862c0.064,-0.053 0.154,-0.065 0.229,-0.031c11.62,5.305 24.199,5.305 35.682,0c0.075,-0.036 0.165,-0.025 0.232,0.028c0.356,0.293 0.728,0.586 1.103,0.865c0.129,0.096 0.12,0.296 -0.02,0.378c-1.768,1.034 -3.607,1.907 -5.541,2.637c-0.126,0.048 -0.182,0.194 -0.12,0.315c1.066,2.065 2.283,4.032 3.624,5.897c0.056,0.079 0.157,0.113 0.249,0.085c5.801,-1.795 11.684,-4.503 17.757,-8.962c0.053,-0.04 0.087,-0.099 0.092,-0.164c1.481,-15.315 -2.479,-28.618 -10.497,-40.412c-0.02,-0.039 -0.053,-0.067 -0.093,-0.084Zm-36.378,32.427c-3.498,0 -6.381,-3.211 -6.381,-7.156c0,-3.944 2.827,-7.156 6.381,-7.156c3.582,0 6.437,3.24 6.381,7.156c-0,3.945 -2.827,7.156 -6.381,7.156Zm23.592,0c-3.498,0 -6.381,-3.211 -6.381,-7.156c0,-3.944 2.827,-7.156 6.381,-7.156c3.582,0 6.436,3.24 6.381,7.156c-0,3.945 -2.799,7.156 -6.381,7.156Z" style="fill:#5865f2;fill-rule:nonzero;"/></g></svg>
						</a>
					</li>
					<li>
						<a href="https://github.com/froggie3" title="GitHub">
							<svg width="100%" height="100%" viewBox="0 0 72 72" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><path d="M35.997,0.889c-19.879,-0 -35.997,16.117 -35.997,36.001c0,15.905 10.314,29.397 24.62,34.16c1.801,0.329 2.457,-0.783 2.457,-1.737c0,-0.853 -0.031,-3.119 -0.049,-6.122c-10.013,2.175 -12.126,-4.827 -12.126,-4.827c-1.637,-4.157 -3.998,-5.264 -3.998,-5.264c-3.268,-2.234 0.248,-2.19 0.248,-2.19c3.613,0.256 5.514,3.711 5.514,3.711c3.211,5.5 8.427,3.911 10.477,2.992c0.327,-2.327 1.256,-3.914 2.286,-4.813c-7.994,-0.909 -16.399,-3.998 -16.399,-17.793c0,-3.93 1.404,-7.143 3.706,-9.66c-0.371,-0.911 -1.606,-4.57 0.352,-9.528c-0,0 3.023,-0.968 9.901,3.691c2.871,-0.798 5.951,-1.198 9.012,-1.211c3.057,0.013 6.137,0.413 9.013,1.211c6.873,-4.659 9.889,-3.691 9.889,-3.691c1.965,4.958 0.73,8.617 0.358,9.528c2.308,2.517 3.702,5.73 3.702,9.66c0,13.83 -8.418,16.873 -16.438,17.764c1.293,1.111 2.444,3.308 2.444,6.667c0,4.812 -0.044,8.695 -0.044,9.875c0,0.963 0.648,2.084 2.475,1.732c14.295,-4.771 24.6,-18.254 24.6,-34.155c-0,-19.884 -16.12,-36.001 -36.003,-36.001" style="fill:#181717;"/></g></svg>
						</a>
					</li>
					<li class="sanctunes">
						<a href="https://sanctunes.com/" title="sanctunes">
							<svg width="100%" height="100%" viewBox="0 0 100 16" version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><path d="M5.848,14.207c2.88,0 4.544,-1.744 4.544,-3.728c0,-1.68 -0.88,-2.672 -2.352,-3.264l-1.488,-0.592c-1.056,-0.416 -1.808,-0.672 -1.808,-1.328c0,-0.64 0.544,-0.992 1.424,-0.992c0.928,0 1.664,0.32 2.448,0.912l1.424,-1.792c-1.04,-1.04 -2.496,-1.568 -3.872,-1.568c-2.528,-0 -4.32,1.6 -4.32,3.6c0,1.728 1.168,2.768 2.416,3.264l1.52,0.64c1.024,0.432 1.68,0.656 1.68,1.344c0,0.64 -0.496,1.04 -1.552,1.04c-0.944,-0 -2.048,-0.496 -2.896,-1.216l-1.616,1.968c1.232,1.136 2.896,1.712 4.448,1.712Z" style="fill-rule:nonzero;"/></g><g><path d="M15.016,9.039l0.256,-1.008c0.304,-1.184 0.624,-2.576 0.912,-3.824l0.064,0c0.32,1.216 0.624,2.64 0.944,3.824l0.256,1.008l-2.432,0Zm3.664,4.944l3.008,0l-3.696,-11.904l-3.424,0l-3.696,11.904l2.912,0l0.688,-2.736l3.52,0l0.688,2.736Z" style="fill-rule:nonzero;"/></g><g><path d="M22.936,13.983l2.72,0l0,-3.952c0,-1.44 -0.24,-3.072 -0.368,-4.4l0.08,0l1.168,2.608l2.944,5.744l2.912,0l0,-11.904l-2.72,0l0,3.936c0,1.424 0.224,3.136 0.384,4.4l-0.08,0l-1.168,-2.64l-2.96,-5.696l-2.912,0l0,11.904Z" style="fill-rule:nonzero;"/></g><g><path d="M40.2,14.207c1.552,0 2.88,-0.592 3.888,-1.76l-1.504,-1.792c-0.56,0.608 -1.328,1.088 -2.272,1.088c-1.68,-0 -2.768,-1.376 -2.768,-3.744c-0,-2.32 1.264,-3.696 2.8,-3.696c0.848,-0 1.472,0.384 2.064,0.928l1.504,-1.824c-0.816,-0.832 -2.064,-1.552 -3.616,-1.552c-3.024,-0 -5.68,2.272 -5.68,6.24c0,4.032 2.56,6.112 5.584,6.112Z" style="fill-rule:nonzero;"/></g><g><path d="M47.928,13.983l2.864,0l-0,-9.536l3.232,0l0,-2.368l-9.312,-0l-0,2.368l3.216,0l-0,9.536Z" style="fill-rule:nonzero;"/></g><g><path d="M60.632,14.207c3.168,0 4.768,-1.808 4.768,-5.824l0,-6.304l-2.752,0l0,6.608c0,2.256 -0.72,3.056 -2.016,3.056c-1.312,-0 -1.984,-0.8 -1.984,-3.056l0,-6.608l-2.848,0l0,6.304c0,4.016 1.648,5.824 4.832,5.824Z" style="fill-rule:nonzero;"/></g><g><path d="M68.072,13.983l2.72,0l0,-3.952c0,-1.44 -0.24,-3.072 -0.368,-4.4l0.08,0l1.168,2.608l2.944,5.744l2.912,0l-0,-11.904l-2.72,0l-0,3.936c-0,1.424 0.224,3.136 0.384,4.4l-0.08,0l-1.168,-2.64l-2.96,-5.696l-2.912,0l-0,11.904Z" style="fill-rule:nonzero;"/></g><g><path d="M80.296,13.983l7.728,0l0,-2.4l-4.864,0l0,-2.528l3.984,0l0,-2.4l-3.984,0l0,-2.208l4.688,0l0,-2.368l-7.552,0l0,11.904Z" style="fill-rule:nonzero;"/></g><g><path d="M94.072,14.207c2.88,0 4.544,-1.744 4.544,-3.728c0,-1.68 -0.88,-2.672 -2.352,-3.264l-1.488,-0.592c-1.056,-0.416 -1.808,-0.672 -1.808,-1.328c0,-0.64 0.544,-0.992 1.424,-0.992c0.928,0 1.664,0.32 2.448,0.912l1.424,-1.792c-1.04,-1.04 -2.496,-1.568 -3.872,-1.568c-2.528,-0 -4.32,1.6 -4.32,3.6c0,1.728 1.168,2.768 2.416,3.264l1.52,0.64c1.024,0.432 1.68,0.656 1.68,1.344c0,0.64 -0.496,1.04 -1.552,1.04c-0.944,-0 -2.048,-0.496 -2.896,-1.216l-1.616,1.968c1.232,1.136 2.896,1.712 4.448,1.712Z" style="fill-rule:nonzero;"/></g></svg>
						</a>
					</li>
				</ul>
			</div>
			<div class="large-section-wrapper-b item">
				<img
				src="<?php echo get_template_directory_uri(); ?>/files/img/self.png?20210718"
				alt="Yokkin"
				width="500"
				height="500"
				/>
			</div>
		</section>

		<h2 class="content-title">Contact</h2>

		<section id="contact" class="large-section-wrapper item-border content-rules">
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
		<div id="works" class="grid-test grid-half-1rem-gap">
			<div class="item item-border animated-when-hovered large">
				<div class="media media-1">
					<?php embedTemplateYouTube( 'DZTexREOZC0' ); ?>
				</div>

				<h2>Passing Sight</h2>

				<p>オリジナル曲です。</p>
			</div>
			<div class="item item-border animated-when-hovered">
				<div class="media media-2">
					<iframe style="border: 0; width: 350px; height: 350px;" src="https://bandcamp.com/EmbeddedPlayer/album=459643310/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless><a href="https://yokkin.bandcamp.com/album/oriori">折々- Oriori by Yokkin</a></iframe>
				</div>

				<h2>折々 / Oriori</h2>

				<p>1st アルバムです。</p>
				<p>折々の時間や場所が織りなす、10つの風景が詰まっています。</p>
				<p>以下のリンクより無料でダウンロードできます。</p>
				<p><a href="https://yokkin.bandcamp.com/album/oriori">https://yokkin.bandcamp.com/album/oriori</a></p>
			</div>
			<div class="item item-border animated-when-hovered">
				<div class="media media-1">
					<?php embedTemplateYouTube( '7BaPT0YBz2Y' ); ?>
				</div>

				<h2>RAINY</h2>

				<p>sanctunes よりリリースされたアルバムになります。6曲目「Me with Seagulls」で参加しています。</p>
				<p>以下のリンクより無料でダウンロードできます。</p>
				<p><a href="https://sanctunes.bandcamp.com/album/rainy">https://sanctunes.bandcamp.com/album/rainy</a></p>
			</div>
			<div class="item item-border animated-when-hovered">
				<div class="media media-1">
					<?php embedTemplateYouTube( 'GzkQHLj3ZFw' ); ?>
				</div>

				<h2>TOWN</h2>

				<p>sanctunes よりリリースされたアルバムになります。3曲目「初夏の街路樹」で参加しています。</p>
				<p>以下のリンクより無料でダウンロードできます。</p>
				<p><a href="https://sanctunes.bandcamp.com/album/town">https://sanctunes.bandcamp.com/album/town</a></p>
			</div>
			<div class="item item-border animated-when-hovered">
				<div class="media media-1">
					<?php embedTemplateYouTube( 'BoqzFhXAz5w' ); ?>
				</div>

				<h2>POWER</h2>

				<p>sanctunes よりリリースされたアルバムになります。6曲目「<strong>Smoke</strong>」で参加しています。</p>
				<p>以下のリンクより無料でダウンロードできます。</p>
				<p><a href="https://sanctunes.bandcamp.com/album/power">https://sanctunes.bandcamp.com/album/power</a></p>
			</div>
			<div class="item item-border animated-when-hovered">
				<div class="media media-1">
					<svg style="width: 80%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 134 40"><defs><style>.a{fill:url(#a);}.b{fill:#1e5e71;}.c{fill:#fff;}.d{fill:none;}.e{fill:#344;}.f{fill:#30b396;}</style><linearGradient id="a" x1="7.43" y1="7.43" x2="32.57" y2="32.57" gradientUnits="userSpaceOnUse"><stop offset="0.2" stop-color="#30b396"/><stop offset="1" stop-color="#1e5e71"/></linearGradient></defs><circle class="a" cx="20" cy="20" r="17.77"/><path class="b" d="M20,2.23A17.77,17.77,0,1,1,2.23,20,17.77,17.77,0,0,1,20,2.23M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0Z"/><rect class="c" x="12.66" y="7.4" width="2.68" height="4.02" transform="translate(0.58 19.61) rotate(-71.15)"/><rect class="c" x="10.06" y="15" width="2.68" height="4.02" transform="translate(-8.37 22.3) rotate(-71.15)"/><rect class="c" x="7.47" y="22.6" width="2.68" height="4.02" transform="translate(-17.32 24.99) rotate(-71.15)"/><path class="c" d="M8,33.11l.52-1.52-2.76-.94A17.84,17.84,0,0,0,8,33.11Z"/><path class="c" d="M15.5,7.09,18,8,16.31,13l-2.53-.87-.87,2.54,2.53.87-1.73,5.06-2.53-.87-.87,2.54,2.53.87-1.73,5.06-2.53-.87L7.72,29.9l2.53.87L9.13,34a17.78,17.78,0,0,0,2.31,1.53L18.79,14l.06-.16,1.77-5.19L21,7.55,15.94,5.82Z"/><path class="c" d="M36.27,12.87,22.94,8.31,13.33,36.47a17.76,17.76,0,0,0,22.95-23.6Z"/><circle class="d" cx="20" cy="20" r="17.77"/><path class="e" d="M52.28,25.9a8.38,8.38,0,0,0,5.48,2.44,3.15,3.15,0,0,0,2.4-.82A2.14,2.14,0,0,0,60.77,26a1.87,1.87,0,0,0-.68-1.43A8.61,8.61,0,0,0,57,23.32l-1.61-.5A7.81,7.81,0,0,1,52,20.88a6,6,0,0,1-1.36-4.23,7.82,7.82,0,0,1,2.19-5.77,8.43,8.43,0,0,1,6.13-2.26,16.79,16.79,0,0,1,7.38,1.94l-2.47,4.84a6.31,6.31,0,0,0-4.09-1.61,3,3,0,0,0-2,.72,1.77,1.77,0,0,0-.61,1.29,1.6,1.6,0,0,0,.32,1.08,3.92,3.92,0,0,0,2.08,1.08l1.9.57a9.13,9.13,0,0,1,4.34,2.37,5.64,5.64,0,0,1,1.54,4.27,8.1,8.1,0,0,1-2.26,6c-2,2-4.52,2.44-7.06,2.44a12.78,12.78,0,0,1-4.7-.79,16.69,16.69,0,0,1-3.62-1.9Z"/><path class="e" d="M77.36,6.94V22.81L82.77,17h7.78L83,24.43l8.17,8.64h-8l-5.84-6.56v6.56H71.62V6.94Z"/><path class="e" d="M110,26.11H98a4,4,0,0,0,1,2.69,3.22,3.22,0,0,0,2.37.79,4.53,4.53,0,0,0,1.86-.43,2.67,2.67,0,0,0,1-1.08h5.48a7.2,7.2,0,0,1-1.94,3.3c-1.18,1.15-3,2.22-6.52,2.22a9.09,9.09,0,0,1-6.63-2.44,8.39,8.39,0,0,1-2.37-6.06,8.55,8.55,0,0,1,2.4-6.2,9,9,0,0,1,6.56-2.33,8.78,8.78,0,0,1,6.17,2.19A9,9,0,0,1,110,25.5Zm-5.27-3.3a3.84,3.84,0,0,0-.93-1.72,3.34,3.34,0,0,0-2.37-.86,3.08,3.08,0,0,0-2.33.86,3.27,3.27,0,0,0-.86,1.72Z"/><path class="e" d="M120,6.94V18.58a6.34,6.34,0,0,1,4.77-2.08,8.19,8.19,0,0,1,5.66,2.15A8.73,8.73,0,0,1,133,25a8.84,8.84,0,0,1-2.58,6.38,7.67,7.67,0,0,1-5.63,2.22A5.88,5.88,0,0,1,120,31.31v1.76h-5.73V6.94ZM126,27.65a3.62,3.62,0,0,0,1.11-2.51A3.93,3.93,0,0,0,126,22.42a3.68,3.68,0,0,0-5.16,0A4.19,4.19,0,0,0,119.78,25,3.84,3.84,0,0,0,121,27.76a3.92,3.92,0,0,0,2.47,1A3.56,3.56,0,0,0,126,27.65Z"/><polygon class="f" points="71.62 6.94 71.62 12.67 77.36 6.94 71.62 6.94"/><polygon class="f" points="114.22 6.94 114.22 12.67 119.96 6.94 114.22 6.94"/></svg>
				</div>

				<h2>Skeb</h2>

				<p>匿名のリクエストを含めた様々な曲を作曲しました。</p>
			</div>
			<div class="item item-border animated-when-hovered large-2">
				<div class="media media-freeform">
					<img width="880" height="240" src="https://yokkin.com/wp/wp-content/uploads/2021/02/20210106000542.png" alt="PseudoPhaserのスクリーンショット" />
				</div>

				<h2>PseudoPhaser</h2>
				
				<p>Kilohearts Disperser を模したものです。GNUライセンスです。</p>
				<p><a href="https://github.com/froggie3/PseudoPhaser">https://github.com/froggie3/PseudoPhaser</a></p>
			</div>
		</div>
	</div>
<?php get_footer();
