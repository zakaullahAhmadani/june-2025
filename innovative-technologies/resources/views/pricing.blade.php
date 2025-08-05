<!doctype html>
<html lang="en-US">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Innovative Technologies</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for arrows -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<style id='joinchat-button-style-inline-css'>
		.wp-block-joinchat-button {
			border: none !important;
			text-align: center
		}

		.elementor-icon-list-icon {
			width: 1em;
			height: 1em;
			display: inline-flex;
			align-items: center;
			justify-content: center;
		}

		.wp-block-joinchat-button figure {
			display: table;
			margin: 0 auto;
			padding: 0
		}

		.wp-block-joinchat-button figcaption {
			font: normal normal 400 .6em/2em var(--wp--preset--font-family--system-font, sans-serif);
			margin: 0;
			padding: 0
		}

		.wp-block-joinchat-button .joinchat-button__qr {
			background-color: #fff;
			border: 6px solid #25d366;
			border-radius: 30px;
			box-sizing: content-box;
			display: block;
			height: 200px;
			margin: auto;
			overflow: hidden;
			padding: 10px;
			width: 200px
		}

		.wp-block-joinchat-button .joinchat-button__qr canvas,
		.wp-block-joinchat-button .joinchat-button__qr img {
			display: block;
			margin: auto
		}

		.wp-block-joinchat-button .joinchat-button__link {
			align-items: center;
			background-color: #25d366;
			border: 6px solid #25d366;
			border-radius: 30px;
			display: inline-flex;
			flex-flow: row nowrap;
			justify-content: center;
			line-height: 1.25em;
			margin: 0 auto;
			text-decoration: none
		}

		.wp-block-joinchat-button .joinchat-button__link:before {
			background: transparent var(--joinchat-ico) no-repeat center;
			background-size: 100%;
			content: "";
			display: block;
			height: 1.5em;
			margin: -.75em .75em -.75em 0;
			width: 1.5em
		}

		.wp-block-joinchat-button figure+.joinchat-button__link {
			margin-top: 10px
		}

		@media (orientation:landscape)and (min-height:481px),
		(orientation:portrait)and (min-width:481px) {
			.wp-block-joinchat-button.joinchat-button--qr-only figure+.joinchat-button__link {
				display: none
			}
		}

		@media (max-width:480px),
		(orientation:landscape)and (max-height:480px) {
			.wp-block-joinchat-button figure {
				display: none
			}
		}
	</style>
	<link data-optimized="1" rel='stylesheet' id='jet-engine-frontend-css'
		href='css/1da2d3823ed90be2fe7d66f210c45bdb.css?ver=45bdb' media='all' />
	<style id='global-styles-inline-css'>
		:root {
			--wp--preset--aspect-ratio--square: 1;
			--wp--preset--aspect-ratio--4-3: 4/3;
			--wp--preset--aspect-ratio--3-4: 3/4;
			--wp--preset--aspect-ratio--3-2: 3/2;
			--wp--preset--aspect-ratio--2-3: 2/3;
			--wp--preset--aspect-ratio--16-9: 16/9;
			--wp--preset--aspect-ratio--9-16: 9/16;
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:root {
			--wp--style--global--content-size: 800px;
			--wp--style--global--wide-size: 1200px;
		}

		:where(body) {
			margin: 0;
		}

		.wp-site-blocks>.alignleft {
			float: left;
			margin-right: 2em;
		}

		.wp-site-blocks>.alignright {
			float: right;
			margin-left: 2em;
		}

		.wp-site-blocks>.aligncenter {
			justify-content: center;
			margin-left: auto;
			margin-right: auto;
		}

		:where(.wp-site-blocks)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:where(.wp-site-blocks)> :first-child {
			margin-block-start: 0;
		}

		:where(.wp-site-blocks)> :last-child {
			margin-block-end: 0;
		}

		:root {
			--wp--style--block-gap: 24px;
		}

		:root :where(.is-layout-flow)> :first-child {
			margin-block-start: 0;
		}

		:root :where(.is-layout-flow)> :last-child {
			margin-block-end: 0;
		}

		:root :where(.is-layout-flow)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:root :where(.is-layout-constrained)> :first-child {
			margin-block-start: 0;
		}

		:root :where(.is-layout-constrained)> :last-child {
			margin-block-end: 0;
		}

		:root :where(.is-layout-constrained)>* {
			margin-block-start: 24px;
			margin-block-end: 0;
		}

		:root :where(.is-layout-flex) {
			gap: 24px;
		}

		:root :where(.is-layout-grid) {
			gap: 24px;
		}

		.is-layout-flow>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-flow>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-flow>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignleft {
			float: left;
			margin-inline-start: 0;
			margin-inline-end: 2em;
		}

		.is-layout-constrained>.alignright {
			float: right;
			margin-inline-start: 2em;
			margin-inline-end: 0;
		}

		.is-layout-constrained>.aligncenter {
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
			max-width: var(--wp--style--global--content-size);
			margin-left: auto !important;
			margin-right: auto !important;
		}

		.is-layout-constrained>.alignwide {
			max-width: var(--wp--style--global--wide-size);
		}

		body .is-layout-flex {
			display: flex;
		}

		.is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		.is-layout-flex> :is(*, div) {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		.is-layout-grid> :is(*, div) {
			margin: 0;
		}

		body {
			padding-top: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-left: 0px;
		}

		a:where(:not(.wp-element-button)) {
			text-decoration: underline;
		}

		:root :where(.wp-element-button, .wp-block-button__link) {
			background-color: #32373c;
			border-width: 0;
			color: #fff;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
			padding: calc(0.667em + 2px) calc(1.333em + 2px);
			text-decoration: none;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		:root :where(.wp-block-pullquote) {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link data-optimized="1" rel='stylesheet' id='hello-elementor-css' href='css/ff603574c491ace7a1ec0531d83887a2.css'
		media='all' />
	<link data-optimized="1" rel='stylesheet' id='hello-elementor-theme-style-css'
		href='css/59d582f181d1fabf375e3b74977e22aa.css?ver=e22aa' media='all' />
	<link data-optimized="1" rel='stylesheet' id='hello-elementor-header-footer-css'
		href='css/d0a2c5c8b236f2d8cb0470fb29a87af0.css?ver=87af0' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-frontend-css'
		href='css/46c63f50ef71a35fb082ea2bbdd26cba.css?ver=26cba' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-post-6-css'
		href='css/8c443a701554ba3e1c9263398cea7392.css?ver=a7392' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-icon-list-css'
		href='css/a9217420548557dc5546ffd49876b6ec.css?ver=6b6ec' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-image-css'
		href='css/09bca8a73ffdeb220d6794b18585f2ae.css?ver=5f2ae' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-nav-menu-css'
		href='css/476fc22bbafe644098e144ebf14e5623.css?ver=e5623' media='all' />
	<link data-optimized="1" rel='stylesheet' id='e-sticky-css' href='css/68fcbba9e71b7645d75492ead3660f16.css?ver=60f16'
		media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-heading-css'
		href='css/759ccb25f1cc014ac688339188c54b0a.css?ver=54b0a' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-divider-css'
		href='css/80ee6bd97e707e1d20b11b82cbc0fd43.css?ver=0fd43' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-icon-box-css'
		href='css/0498731118d30336c9dccd14bd6806f9.css?ver=806f9' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-form-css'
		href='css/7fe79f256238c1d2562cdcbb386f2228.css?ver=f2228' media='all' />
	<link data-optimized="1" rel='stylesheet' id='e-animation-fadeInDown-css'
		href='css/4e8541ad8f6a26a650da736aba4ee70d.css?ver=ee70d' media='all' />
	<link data-optimized="1" rel='stylesheet' id='e-animation-fadeInRight-css'
		href='css/1e6fb91002fb5f74f577d5d08f6a7b45.css?ver=a7b45' media='all' />
	<link data-optimized="1" rel='stylesheet' id='swiper-css' href='css/1015239f21787addd652ca162f147f43.css?ver=47f43'
		media='all' />
	<link data-optimized="1" rel='stylesheet' id='e-swiper-css' href='css/9f4e9ed0311f8b22167cdd6b25a802b8.css?ver=802b8'
		media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-image-carousel-css'
		href='css/b01706244b3210e8f0e050bc5e2b97c2.css?ver=b97c2' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-image-box-css'
		href='css/9082d2ad189fc17b9a019710bce5a284.css?ver=5a284' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-counter-css'
		href='css/81083b35de7142f8f3983dc714247539.css?ver=47539' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-progress-css'
		href='css/2958fb0bf539077f4cbc91d4e792559d.css?ver=2559d' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-loop-common-css'
		href='css/6e4dfda1ac2e0ed2c79d61e4de5aac3c.css?ver=aac3c' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-loop-grid-css'
		href='css/afddd00b3d441d4d31ae1e231741f63e.css?ver=1f63e' media='all' />
	<link data-optimized="1" rel='stylesheet' id='widget-social-icons-css'
		href='css/eec28bd42ee5ea726de2ac2c3be1e240.css?ver=1e240' media='all' />
	<link data-optimized="1" rel='stylesheet' id='e-apple-webkit-css'
		href='css/7f4494e0726836bca208c8c440d89c77.css?ver=89c77' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-post-11-css'
		href='css/9d82226206c09b46308801d5e173af33.css?ver=3af33' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-post-13-css'
		href='css/9fe796efbc46f3df813dc48c861344b7.css?ver=344b7' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-post-2558-css'
		href='css/c6dc78b9c7ae8f0614f5d678cabc7dcd.css?ver=c7dcd' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-roboto-css'
		href='css/c662213f9de6b688992a9d453bfade27.css?ver=ade27' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-robotoslab-css'
		href='css/c22c8b68ad102f6bf7ff2557f976b8cb.css?ver=6b8cb' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-firasans-css'
		href='css/39a4edd5c8a7a574d461748047218351.css?ver=18351' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-rubik-css'
		href='css/5373399af7b8a8a4398d08d150850901.css?ver=50901' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-poppins-css'
		href='css/91117937e0da64b1cf4194f9f035d290.css?ver=5d290' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-outfit-css'
		href='css/d2461c01443a76e7e8cd0d62675a4604.css?ver=a4604' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-dmsans-css'
		href='css/d78542e9f550810f0e289fa83c7e0c43.css?ver=e0c43' media='all' />
	<link data-optimized="1" rel='stylesheet' id='elementor-gf-local-inter-css'
		href='css/c79cfb6df44f27466ab18262ec7fec5f.css?ver=fec5f' media='all' />
	<style id='joinchat-head-inline-css'>
		:root {
			--joinchat-ico: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23fff' d='M3.516 3.516c4.686-4.686 12.284-4.686 16.97 0s4.686 12.283 0 16.97a12 12 0 0 1-13.754 2.299l-5.814.735a.392.392 0 0 1-.438-.44l.748-5.788A12 12 0 0 1 3.517 3.517zm3.61 17.043.3.158a9.85 9.85 0 0 0 11.534-1.758c3.843-3.843 3.843-10.074 0-13.918s-10.075-3.843-13.918 0a9.85 9.85 0 0 0-1.747 11.554l.16.303-.51 3.942a.196.196 0 0 0 .219.22zm6.534-7.003-.933 1.164a9.84 9.84 0 0 1-3.497-3.495l1.166-.933a.79.79 0 0 0 .23-.94L9.561 6.96a.79.79 0 0 0-.924-.445l-2.023.524a.797.797 0 0 0-.588.88 11.754 11.754 0 0 0 10.005 10.005.797.797 0 0 0 .88-.587l.525-2.023a.79.79 0 0 0-.445-.923L14.6 13.327a.79.79 0 0 0-.94.23z'/%3E%3C/svg%3E")
		}

		.joinchat {
			--sep: 20px;
			--bottom: var(--sep);
			--s: 60px;
			--h: calc(var(--s)/2);
			display: block;
			transform: scale3d(1, 1, 1);
			position: fixed;
			z-index: 9000;
			right: var(--sep);
			bottom: var(--bottom)
		}

		.joinchat * {
			box-sizing: border-box
		}

		.joinchat__qr,
		.joinchat__chatbox {
			display: none
		}

		.joinchat__tooltip {
			opacity: 0
		}

		.joinchat__button {
			position: absolute;
			z-index: 2;
			bottom: 8px;
			right: 8px;
			height: var(--s);
			width: var(--s);
			background: #25d366 var(--joinchat-ico, none)center / 60% no-repeat;
			color: inherit;
			border-radius: 50%;
			box-shadow: 1px 6px 24px 0 rgba(7, 94, 84, 0.24)
		}

		.joinchat--left {
			right: auto;
			left: var(--sep)
		}

		.joinchat--left .joinchat__button {
			right: auto;
			left: 8px
		}

		.joinchat__button__ico {
			position: absolute;
			inset: 0;
			display: flex;
			border-radius: 50%;
			overflow: hidden;
			color: hsl(0deg 0% clamp(0%, var(--bw)*1000%, 100%) / clamp(70%, var(--bw)*1000%, 100%)) !important
		}

		.joinchat__button__ico svg {
			width: var(--ico-size, 100%);
			height: var(--ico-size, 100%);
			margin: calc((100% - var(--ico-size, 100%))/2)
		}

		.joinchat__button:has(.joinchat__button__ico) {
			background: hsl(var(--ch)var(--cs)var(--cl));
			box-shadow: 1px 6px 24px 0 hsl(var(--ch)var(--cs)calc(var(--cl) - 10%) / 24%)
		}

		.joinchat__button:has(.joinchat__button__ico):hover,
		.joinchat__button:has(.joinchat__button__ico):active {
			background: hsl(var(--ch)var(--cs)calc(var(--cl) + 20%))
		}

		.joinchat__button__image {
			position: absolute;
			inset: 1px;
			border-radius: 50%;
			overflow: hidden;
			opacity: 0
		}

		.joinchat__button__image img,
		.joinchat__button__image video {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
			object-position: center
		}

		.joinchat--img .joinchat__button__image {
			opacity: 1;
			animation: none
		}

		@media(orientation:portrait)and(width>=481px), (orientation:landscape)and(height>=481px) {
			.joinchat--mobile {
				display: none !important
			}
		}

		@media(width <=480px), (orientation:landscape)and(height <=480px) {
			.joinchat {
				--sep: 6px
			}
		}
	</style>
	
	<style>
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {

			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {

			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
	</style>
	<meta name="theme-color" content="#02010100">
	<link rel="icon" href="images/cropped-Innovative-Technologies-Logo-Header-1-32x32.png" sizes="32x32" />
	<link rel="icon" href="images/cropped-logo-1-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="images/cropped-logo-1-180x180.png" />
	<meta name="msapplication-TileImage" content="images/cropped-logo-1-192x192.png" />
	<style id="wp-custom-css">
		html,
		body {
			overflow-x: hidden;
			max-width: 100%;
		}
	</style>
</head>


<body data-rsssl=1
	class="home wp-singular page-template page-template-elementor_header_footer page page-id-11 wp-embed-responsive wp-theme-hello-elementor hello-elementor-default elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-11">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    @include('navbar')
	
    <!-- Custom CSS -->
    <style>
       :root {
    --primary-color: #000000;   /* Black */
    --secondary-color: #e53935; /* White */
    --accent-color: #e53935;    /* Red */
    --light-color: #ffffff;     /* White for lighter areas */
    --dark-color: #000000;      /* Black for darker areas */
    --success-color: #e53935;   /* Use red for highlights if no green is desired */
}

        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .hero-section {
            background: 
                        url('images/featured-title-bg.webp');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        
        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .breadcrumb {
            justify-content: center;
            background: transparent;
            padding: 0;
        }
        
        .breadcrumb-item a {
            color: var(--light-color);
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: var(--secondary-color);
        }
        
        .breadcrumb-item+.breadcrumb-item::before {
            color: var(--light-color);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title h2 {
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--secondary-color);
        }
        
        .pricing-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            border: none;
            position: relative;
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .pricing-header {
            background-color: var(--primary-color);
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .pricing-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .pricing-subtitle {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .pricing-price {
            padding: 20px;
            background-color: var(--light-color);
            text-align: center;
        }
        
        .price-amount {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .price-currency {
            font-size: 1.5rem;
            vertical-align: super;
        }
        
        .price-period {
            font-size: 0.9rem;
            color: #666;
        }
        
        .pricing-features {
            padding: 20px;
        }
        
        .feature-item {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: flex-start;
        }
        
        .feature-item:last-child {
            border-bottom: none;
        }
        
        .feature-icon {
            color: var(--success-color);
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .feature-text {
            flex: 1;
        }
        
        .pricing-footer {
            padding: 20px;
            text-align: center;
            background-color: var(--light-color);
        }
        
        .pricing-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        
        .pricing-btn:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        
        .ribbon {
            position: absolute;
            top: 10px;
            right: -30px;
            width: 120px;
            padding: 5px;
            text-align: center;
            background-color: var(--accent-color);
            color: white;
            font-weight: 600;
            font-size: 0.8rem;
            transform: rotate(45deg);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .popular .pricing-header {
            background-color: var(--secondary-color);
        }
        
        .popular .pricing-btn {
            background-color: var(--accent-color);
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .intro-section {
            background-color: var(--light-color);
            padding: 50px 0;
        }
        
        .intro-title {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .intro-text {
            font-size: 1.1rem;
            color: #555;
        }
        
        .divider {
            height: 3px;
            width: 60px;
            background-color: var(--secondary-color);
            margin: 20px auto;
        }
        
        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .section-padding {
                padding: 50px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">Pricing in UAE</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pricing in UAE</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="divider"></div>
                    <h2 class="intro-title">Start Business</h2>
                    <h3 class="intro-title">Choose Your Best Plan</h3>
                </div>
                <div class="col-lg-6">
                    <p class="intro-text">At Innovative Technologies, we provide flexible and competitive pricing to meet your business needs. Whether you're a startup, small business, or large enterprise, we offer customized solutions that fit your budget.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Ads & Social Media Advertising -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Google Ads & Social Media Advertising</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">500</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Platforms Covered: 1 (Google/Facebook)</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Campaign Setup: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Audience Targeting: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Ad Copywriting & Creatives: Simple</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Support: Email Support</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">800</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Platforms: All (Google, Facebook, TikTok, Instagram, YouTube)</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Campaign Setup: AI-Powered Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Audience Targeting: Hyper-Targeted</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Ad Copywriting & Creatives: High-Converting</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Support: 24/7 VIP Support</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">600</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Platforms Covered: 2 (Google + Facebook)</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Campaign Setup: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Audience Targeting: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Ad Copywriting & Creatives: Engaging</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Support: Chat & Email</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WordPress Website Designing -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>WordPress Website Designing</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">400</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Pages Included: 3 Pages</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Premium Theme & Plugins</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Mobile Responsive</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Speed Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">SEO Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Maintenance & Support</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">700</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Pages Included: 10+ Pages</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Premium Theme & Plugins: Custom Design</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Mobile Responsive</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Speed Optimization: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO Optimization: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Maintenance & Support: 3 Months</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">500</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Pages Included: 5 Pages</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Premium Theme & Plugins</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Mobile Responsive</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Speed Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO Optimization: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Maintenance & Support: 1 Month</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ecommerce Website Development -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Ecommerce Website Development</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">500</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Pages Included: 5 Pages</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Products Included: 10</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Payment Gateway Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Inventory Management System</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Speed Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">SEO & Marketing Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Maintenance & Support</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">800</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Pages Included: 10+ Pages</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Products Included: Unlimited</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Payment Gateway Setup: Multiple</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Inventory Management System: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">High Speed Performance</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO & Marketing Setup: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Maintenance & Support: 3 Months</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">600</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Pages Included: 7 Pages</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Products Included: 50</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Payment Gateway Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Inventory Management System: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Speed Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO & Marketing Setup: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Maintenance & Support: 1 Month</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shopify Store Development -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Shopify Store Development</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">500</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Store Setup & Customization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Theme Customization: Free Theme</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Products Uploaded: 10</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Payment Integration: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Conversion Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">SEO & Marketing Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Maintenance & Support</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">700</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Store Setup & Customization: High End Custom</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Fully Custom Design</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Products Uploaded: Unlimited</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Payment Integration: Multiple Gateways</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">High-Performance CRO</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO & Marketing Setup: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Maintenance & Support: 3 Months</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">600</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Store Setup & Customization: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Theme Customization: Premium Theme</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Products Uploaded: 50</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Payment Integration: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Conversion Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO & Marketing Setup: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Maintenance & Support: 1 Month</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Optimization Services -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>SEO Optimization Services</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">500</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Keyword Research & Strategy: Standard</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">On-Page SEO: Included</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Off-Page SEO & Backlinks</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Technical SEO & Site Speed Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Google My Business (GMB) Setup & Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO Reports: Monthly</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">800</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Keyword Research & Strategy: AI-Driven</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">On-Page SEO: Full Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">High-Authority Backlinks</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Technical SEO Fixes: Advanced Fixes</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Google My Business (GMB) Optimization: Advanced Ranking</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO Reports: Custom Reports</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">600</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Keyword Research & Strategy: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">On-Page SEO: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Off-Page SEO & Backlinks: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Technical SEO Fixes: Yes</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Google My Business (GMB) Optimization: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">SEO Report: Weekly</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Graphics & Branding Design -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Graphics & Branding Design</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">80</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Logo Design: Simple</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Social Media Posts: 5 Posts</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Business Card & Flyer Design</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Motion Graphics & Animation</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">250</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">High-End Custom Logo</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Social Media Posts: 50+ Posts</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Business Card & Flyer Design: Premium</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Motion Graphics & Animation: Advanced</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">120</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Logo Design: Branding Kit</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Social Media Posts: 10 Posts</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Business Card & Flyer Design: Included</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Motion Graphics & Animation: Basics</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Editing & Animation -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Video Editing & Animation</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">119</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Video Type: Short Clips/Reels</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Transitions & Effects: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">2D/3D Animation</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Sound Design & Mixing: Standard</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">9181</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Video Type: Full 3D Animation & VFX</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Transitions & Effects: Cinematic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">2D/3D Animation: Full 3D Animation</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Sound Design & Mixing: High-End</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">7345</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Video Type: YouTube Videos</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Transitions & Effects: Professional</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">2D/3D Animation: 2D Animation</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Sound Design & Mixing: Advanced</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Fiverr Freelancing & Monetization -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Fiverr Freelancing & Monetization</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">200</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Fiverr Profile Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Gig Optimization: 1 Gig</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Review & Monetization Strategy</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Freelancing Growth Strategy</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">400</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Fiverr Profile Setup: Premium</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Gig Optimization: 5+ Gigs</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Review & Monetization Strategy: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Freelancing Growth Strategy: Full Business Plan</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">300</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Fiverr Profile Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Gig Optimization: 3 Gigs</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Review & Monetization Strategy: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Freelancing Growth Strategy</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Business & Verification Services -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Google Business & Verification Services</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">500</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Google My Business (GMB) Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">GMB Optimization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Google Ads Verification</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Business Operation Verification</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">800</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Google My Business (GMB) Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">GMB Optimization: Advanced</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Google Ads Verification: Premium Fast Verification</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Business Operation Verification: Priority Verification</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">600</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Google My Business (GMB) Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">GMB Optimization: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Google Ads Verification</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Business Operation Verification</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- YouTube & Facebook Monetization -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="section-title">
                <h2>YouTube & Facebook Monetization</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">250</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">YouTube Channel Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">YouTube Monetization Eligibility</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Facebook Page Monetization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-times-circle feature-icon" style="color: var(--accent-color);"></i>
                                <span class="feature-text">Content Strategy & Growth Plan</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">450</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">YouTube Channel Setup: Premium</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">YouTube Monetization Eligibility: Fast Approval</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Facebook Page Monetization: Full Monetization</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Content Strategy & Growth Plan: High-Level Strategy</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-currency">AED</span>
                            <span class="price-amount">350</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <div class="pricing-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">YouTube Channel Setup</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">YouTube Monetization Eligibility: Basic</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Facebook Page Monetization: Standard</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle feature-icon"></i>
                                <span class="feature-text">Content Strategy & Growth Plan</span>
                            </div>
                        </div>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

<!-- footer -->
 @include('footer')
 <!-- <script src="js/main.js"></script> -->
	
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const toggle = document.getElementById("menuToggle");
			const mobileMenu = document.getElementById("mobileMenu");

			toggle.addEventListener("click", function () {
				toggle.classList.toggle("active");
				mobileMenu.classList.toggle("active");
			});

			const dropdowns = mobileMenu.querySelectorAll(".menu-item-has-children > a");
			dropdowns.forEach(link => {
				link.addEventListener("click", function (e) {
					e.preventDefault();
					this.parentElement.classList.toggle("active");
				});
			});
		});
	</script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            let currentSlide = 0;
            let slideInterval;
            const slideDuration = 5000; // 5 seconds
            
            // Initialize slider
            function initSlider() {
                // Set first slide as active
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
                
                // Start auto slide
                startSlideInterval();
            }
            
            // Change slide
            function changeSlide(n) {
                // Clear current active states
                slides[currentSlide].classList.remove('active');
                dots[currentSlide].classList.remove('active');
                
                // Update current slide
                currentSlide = (n + slides.length) % slides.length;
                
                // Set new active states
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
                
                // Reset auto slide timer
                resetSlideInterval();
            }
            
            // Next slide
            function nextSlide() {
                changeSlide(currentSlide + 1);
            }
            
            // Previous slide
            function prevSlide() {
                changeSlide(currentSlide - 1);
            }
            
            // Start auto slide interval
            function startSlideInterval() {
                slideInterval = setInterval(nextSlide, slideDuration);
            }
            
            // Reset auto slide interval
            function resetSlideInterval() {
                clearInterval(slideInterval);
                startSlideInterval();
            }
            
            // Event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
            
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const slideIndex = parseInt(this.getAttribute('data-slide'));
                    changeSlide(slideIndex);
                });
            });
            
            // Initialize slider
            initSlider();
            
            // Pause on hover
            const sliderContainer = document.querySelector('.slider-container');
            sliderContainer.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });
            
            sliderContainer.addEventListener('mouseleave', () => {
                startSlideInterval();
            });
        });
    </script>
    <script>
	document.addEventListener('DOMContentLoaded', function() {
    // Get all menu items from both desktop and mobile menus
    const menuItems = document.querySelectorAll('.menu-item');
    const homeLink = document.querySelector('.menu-item a[href="/"]')?.closest('.menu-item');
    
    // Set home as active by default
    if (homeLink) homeLink.classList.add('active');
    
    // Function to update active state
    function updateActiveState() {
        const currentPath = window.location.pathname;
        
        // Remove active class from all items
        menuItems.forEach(item => item.classList.remove('active'));
        
        // Check if we're on home page
        if (currentPath === '/' || currentPath === '/index.html') {
            if (homeLink) homeLink.classList.add('active');
            return;
        }
        
        // Check other menu items
        menuItems.forEach(item => {
            const link = item.querySelector('a');
            if (link) {
                const href = link.getAttribute('href');
                
                // Check if current path matches this link
                if (href && (currentPath === href || currentPath.startsWith(href))) {
                    item.classList.add('active');
                    
                    // If this is a submenu item, activate parent too
                    const parentMenu = item.closest('.sub-menu');
                    if (parentMenu) {
                        const parentItem = parentMenu.closest('.menu-item-has-children');
                        if (parentItem) parentItem.classList.add('active');
                    }
                }
            }
        });
    }
    
    // Set click handlers for all menu links
    document.querySelectorAll('.menu-item a').forEach(link => {
        link.addEventListener('click', function() {
            // Remove active class from all items
            menuItems.forEach(item => item.classList.remove('active'));
            
            // Add active class to clicked item or its parent
            const menuItem = this.closest('.menu-item');
            if (menuItem) {
                menuItem.classList.add('active');
                
                // If this is a submenu link, activate parent menu item
                const parentMenu = menuItem.closest('.sub-menu');
                if (parentMenu) {
                    const parentItem = parentMenu.closest('.menu-item-has-children');
                    if (parentItem) parentItem.classList.add('active');
                }
            }
        });
    });
    
    // Initial update
    updateActiveState();
    
    // Update when using browser back/forward buttons
    window.addEventListener('popstate', updateActiveState);
});
		</script>
</body>
</html>