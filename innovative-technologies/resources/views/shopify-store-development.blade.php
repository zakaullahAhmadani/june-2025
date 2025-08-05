
<!doctype html>
<html lang="en-US">


<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopify-store-development - Innovative Technologies</title>
    <!-- Bootstrap CSS -->
    
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
	
    <style>
        :root {
    --primary-color: #e53935;     /* Red */
    --secondary-color: #000000;   /* Black */
    --dark-color: #000000;        /* Black */
    --light-color: #ffffff;       /* White */
}

        
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        /* Featured Title Section */
        .featured-title {
            background:  url('images/featured-title-bg.webp');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
            position: relative;
        }
        
        .featured-title h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .breadcrumb {
            justify-content: center;
            background: transparent;
            color: rgba(255,255,255,0.8);
        }
        
        .breadcrumb a {
            color: white;
            text-decoration: none;
        }
        
        .breadcrumb-item+.breadcrumb-item::before {
            color: black;
						 font-size: 20px;
						   font-weight: 700;
						
        }
        
        /* Pricing Tables */
        .pricing-table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            position: relative;
            transition: transform 0.3s;
        }
        
        .pricing-table:hover {
            transform: translateY(-10px);
        }
        
        .pricing-header {
            background-color: var(--light-color);
            padding: 30px 20px;
            text-align: center;
        }
        
        .pricing-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .pricing-subtitle {
            color: #777;
            font-size: 14px;
        }
        
        .pricing-price {
            background-color: white;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }
        
        .price-amount {
            font-size: 48px;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .price-period {
            color: #777;
            font-size: 14px;
        }
        
        .pricing-features {
            background-color: white;
            padding: 0;
        }
        
        .pricing-features li {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            list-style: none;
        }
        
        .pricing-features li:last-child {
            border-bottom: none;
        }
        
        .pricing-footer {
            background-color: white;
            padding: 20px;
            text-align: center;
        }
        
        .pricing-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .pricing-btn:hover {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .ribbon {
            position: absolute;
            top: 10px;
            right: -30px;
            background-color: var(--primary-color);
            color: white;
            padding: 5px 30px;
            transform: rotate(45deg);
            font-size: 12px;
            font-weight: 600;
            z-index: 1;
        }
        
        /* Services List */
        .services-list .list-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        
        .services-list .list-item:last-child {
            border-bottom: none;
        }
        
        .services-list .list-item a {
            color: var(--dark-color);
            text-decoration: none;
            font-weight: 500;
            flex-grow: 1;
        }
        
        .services-list .list-item i {
            color: var(--primary-color);
            margin-left: 15px;
        }
        
        /* Icon Boxes */
        .icon-box {
            position: relative;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            overflow: hidden;
            z-index: 1;
        }
        
        .icon-box .hexagon {
            position: absolute;
            width: 60px;
            height: 70px;
            z-index: -1;
        }
        
        .icon-box .hex1 {
            top: -15px;
            right: -15px;
            fill: var(--primary-color);
            opacity: 0.2;
        }
        
        .icon-box .hex2 {
            bottom: -15px;
            left: -15px;
            fill: var(--secondary-color);
            opacity: 0.2;
        }
        
        .icon-box .icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .icon-box h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        /* Accordion */
        .custom-accordion .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .custom-accordion .accordion-button {
            background-color: white;
            color: var(--dark-color);
            font-weight: 600;
            padding: 15px 20px;
            box-shadow: none;
        }
        
        .custom-accordion .accordion-button:not(.collapsed) {
            background-color: var(--primary-color);
            color: white;
        }
        
        .custom-accordion .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .custom-accordion .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .custom-accordion .accordion-body {
            padding: 20px;
        }
        
        /* Call to Action */
        .cta-box {
            background-color: var(--primary-color);
            color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .cta-box h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        
        .cta-box .phone {
            font-size: 24px;
            font-weight: 700;
        }
        
        /* Download Box */
        .download-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .download-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-right: 20px;
        }
        
        .download-content h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .download-content p {
            color: #777;
            margin-bottom: 0;
        }
        
        /* Section Headings */
        .section-heading {
            margin-bottom: 40px;
            text-align: center;
        }
        
        .section-heading h2 {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 15px;
        }
        
        .section-heading p {
            color: #777;
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .featured-title h1 {
                font-size: 36px;
            }
            
            .section-heading h2 {
                font-size: 28px;
            }
            
            .price-amount {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <!-- Featured Title Section -->
    <section class="featured-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Shopify Store Development</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">
  <span style="font-size: 1.20rem; white-space: nowrap; color:red;">
    Shopify Store Development
  </span>
</li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-center mb-4">Shopify Store Development</h2>
                </div>
            </div>
            
            <!-- Pricing Tables -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="pricing-table">
                        <div class="ribbon">Starter Pack</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Basic</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-amount">AED 500</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <ul class="pricing-features">
                            <li>✅ Store Setup & Customization</li>
                            <li>✅ Theme Customization: Free Theme</li>
                            <li>✅ Products Uploaded: 10</li>
                            <li>✅ Payment Integration: Basic</li>
                            <li>❌ Conversion Optimization</li>
                            <li>❌ SEO & Marketing Setup</li>
                            <li>❌ Maintenance & Support</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="pricing-table">
                        <div class="ribbon">Most Popular</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-amount">AED 700</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <ul class="pricing-features">
                            <li>✅ Store Setup & Customization: High End Custom</li>
                            <li>✅ Fully Custom Design</li>
                            <li>✅ Products Uploaded: Unlimited</li>
                            <li>✅ Payment Integration: Multiple Gateways</li>
                            <li>✅ High-Performance CRO</li>
                            <li>✅ SEO & Marketing Setup: Advanced</li>
                            <li>✅ Maintenance & Support: 3 Months</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="pricing-table">
                        <div class="ribbon">Best Value</div>
                        <div class="pricing-header">
                            <h3 class="pricing-title">Standard</h3>
                            <p class="pricing-subtitle">Business Plan</p>
                        </div>
                        <div class="pricing-price">
                            <span class="price-amount">AED 600</span>
                            <span class="price-period">Monthly</span>
                        </div>
                        <ul class="pricing-features">
                            <li>✅ Store Setup & Customization: Advanced</li>
                            <li>✅ Theme Customization: Premium Theme</li>
                            <li>✅ Products Uploaded: 50</li>
                            <li>✅ Payment Integration: Advanced</li>
                            <li>✅ Conversion Optimization</li>
                            <li>✅ SEO & Marketing Setup: Basic</li>
                            <li>✅ Maintenance & Support: 1 Month</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="http://wa.me/+971508097203" class="btn pricing-btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <!-- Services List -->
                    <div class="services-list mb-4">
                        <div class="list-item">
                            <a href="/website-development">Website Development</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="list-item">
                            <a href="/graphic-designing">Graphic Designing</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="list-item">
                            <a href="/ecommerce-website-development">Ecommerce Store</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="list-item">
                            <a href="/seo-content-writing">SEO & Content Writing</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="list-item">
                            <a href="/shopify-store-development">Shopify Store Development</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="list-item">
                            <a href="/digital-marketing">Digital Marketing</a>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    
                    <!-- Call to Action Box -->
                    <div class="cta-box">
                        <h2>Looking for Top Digital service?</h2>
                        <div class="mb-2"> <span style="font-size:12px;display:inline-block;letter-spacing:0.1em;">Call anytime</span><br>
<span class="phone">
  <a href="tel:+971508097203" style="color: inherit; text-decoration: none;">+971508097203</a>
</span></div>
                    </div>
                    
                    <!-- Download Box -->
										  <a href="your-document.pdf" download class="text-decoration-none text-reset">
                    <div class="download-box">
                        <div class="download-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="download-content">
                            <h3>Download Our Document</h3>
                            <p>3.9KB</p>
                        </div>
                    </div>
										 </a>
                </div>
                
                <div class="col-lg-6">
                    <img src="images/application-development.webp" alt="Shopify Store Development" class="img-fluid rounded mb-4">
                    
                    <h2 class="mb-4">Shopify Store Development</h2>
                    <p class="mb-4">We specialize in creating high-converting, user-friendly, and fully customized Shopify stores tailored to your business needs. Whether you're a new entrepreneur or an established brand looking to expand your online presence, we provide expert Shopify store development services that will help you succeed in the competitive eCommerce landscape.</p>
                    
                    <h3 class="mb-3">Why Choose Shopify for Your Online Store?</h3>
                    <p class="mb-4">Shopify offers a comprehensive eCommerce solution with the tools you need to sell, manage, and promote your products. Some of the benefits of Shopify include Even without technical experience, Shopify's intuitive dashboard allows you to manage your store with ease. Shopify is hosted on a secure cloud infrastructure, ensuring that your store and customer data are safe.Shopify stores are optimized for mobile devices, ensuring a seamless shopping experience for your customers on any device.</p>
                    
                    <!-- Icon Boxes -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="icon-box">
                                <svg class="hexagon hex1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 111">
                                    <path fill-rule="evenodd" fill="rgb(238, 118, 60)" d="M7.516,87.778 L42.201,108.83 C46.826,110.791 52.547,110.833 57.210,108.193 L92.174,88.396 C96.837,85.756 99.944,81.306 99.981,75.958 L100.49,35.385 C100.86,30.38 97.260,25.75 92.635,22.368 L57.950,2.63 C53.325,0.644 47.603,0.686 42.941,1.954 L7.976,21.751 C3.314,24.391 0.37,30.223 0.0,35.570 L0.0,75.134 C0.37,80.482 2.891,85.70 7.516,87.778 Z"/>
                                </svg>
                                <svg class="hexagon hex2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 111">
                                    <path fill-rule="evenodd" fill="#171717" d="M7.516,87.778 L42.201,108.83 C46.826,110.791 52.547,110.833 57.210,108.193 L92.174,88.396 C96.837,85.756 99.944,81.306 99.981,75.958 L100.49,35.385 C100.86,30.38 97.260,25.75 92.635,22.368 L57.950,2.63 C53.325,0.644 47.603,0.686 42.941,1.954 L7.976,21.751 C3.314,24.391 0.37,30.223 0.0,35.570 L0.0,75.134 C0.37,80.482 2.891,85.70 7.516,87.778 Z"/>
                                </svg>
                                <div class="icon">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <h3>Custom Shopify Store Design</h3>
                                <p>Our expert designers create stunning, custom Shopify themes that reflect your brand's identity and help you stand out from the competition. We design user-centric websites that are visually appealing, easy to navigate, and optimized for conversions.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="icon-box">
                                <svg class="hexagon hex1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 111">
                                    <path fill-rule="evenodd" fill="rgb(238, 118, 60)" d="M7.516,87.778 L42.201,108.83 C46.826,110.791 52.547,110.833 57.210,108.193 L92.174,88.396 C96.837,85.756 99.944,81.306 99.981,75.958 L100.49,35.385 C100.86,30.38 97.260,25.75 92.635,22.368 L57.950,2.63 C53.325,0.644 47.603,0.686 42.941,1.954 L7.976,21.751 C3.314,24.391 0.37,30.223 0.0,35.570 L0.0,75.134 C0.37,80.482 2.891,85.70 7.516,87.778 Z"/>
                                </svg>
                                <svg class="hexagon hex2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 111">
                                    <path fill-rule="evenodd" fill="#171717" d="M7.516,87.778 L42.201,108.83 C46.826,110.791 52.547,110.833 57.210,108.193 L92.174,88.396 C96.837,85.756 99.944,81.306 99.981,75.958 L100.49,35.385 C100.86,30.38 97.260,25.75 92.635,22.368 L57.950,2.63 C53.325,0.644 47.603,0.686 42.941,1.954 L7.976,21.751 C3.314,24.391 0.37,30.223 0.0,35.570 L0.0,75.134 C0.37,80.482 2.891,85.70 7.516,87.778 Z"/>
                                </svg>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <h3>Shopify Store Setup</h3>
                                <p>We handle the entire setup process, including configuring your Shopify store, adding products, setting up payment gateways, taxes, shipping, and more. We ensure that everything is set up correctly for a smooth and hassle-free store launch.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Our Services Section -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="images/service-img1.jpg" alt="Our Services" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3">Our Shopify Services</h2>
                            <p class="text-muted">Full Shopify store design and development tailored to your brand.</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="images/service-img2.jpg" alt="Our Services" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Shopify Store Setup & Development</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Custom Shopify Theme Design</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Product & Inventory Management</li>
                                <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Shopify SEO & Digital Marketing</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- FAQ Accordion -->
               <div class="accordion custom-accordion mt-5" id="faqAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <span class="accordion-question">
                    Why should I choose Shopify for my online store?
                    <span class="accordion-icon ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash d-none" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </span>
                </span>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                <p>Shopify is a highly scalable and flexible platform that allows you to sell physical or digital products with ease. It provides:</p>
                <ul>
                    <li>Easy-to-use tools for building and managing your store</li>
                    <li>Built-in payment processing and shipping features</li>
                    <li>Mobile-friendly responsive designs</li>
                    <li>Secure hosting with 99.9% uptime</li>
                    <li>Thousands of apps to extend functionality</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span class="accordion-question">
                    How long does it take to build a Shopify store?
                    <span class="accordion-icon ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash d-none" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </span>
                </span>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                <p>The timeline for building a Shopify store depends on:</p>
                <ul>
                    <li><strong>Basic store:</strong> 2-4 weeks (standard design, up to 50 products)</li>
                    <li><strong>Mid-size store:</strong> 4-6 weeks (custom design, 50-200 products)</li>
                    <li><strong>Advanced store:</strong> 6-8+ weeks (custom features, integrations, 200+ products)</li>
                </ul>
                <p>We provide a detailed project timeline after discussing your specific requirements.</p>
            </div>
        </div>
    </div>
    
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span class="accordion-question">
                    Can I use my existing domain for my Shopify store?
                    <span class="accordion-icon ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash d-none" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </span>
                </span>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                <p>Yes! You can use an existing domain with Shopify in several ways:</p>
                <ul>
                    <li>Connect your existing domain to Shopify (we'll help with setup)</li>
                    <li>Transfer your domain to Shopify (recommended for easier management)</li>
                    <li>Purchase a new domain through Shopify or another registrar</li>
                </ul>
                <p>We provide complete domain setup and configuration as part of our service.</p>
            </div>
        </div>
    </div>
    
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <span class="accordion-question">
                    Can I add features to my Shopify store later?
                    <span class="accordion-icon ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash d-none" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </span>
                </span>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                <p>Absolutely! Shopify's modular design makes it easy to add features as your business grows:</p>
                <ul>
                    <li>New payment gateways (PayPal, Stripe, etc.)</li>
                    <li>Marketing tools (email integrations, loyalty programs)</li>
                    <li>Inventory management systems</li>
                    <li>Custom apps and functionality</li>
                    <li>Additional product types and categories</li>
                </ul>
                <p>We offer ongoing support packages to help with future enhancements.</p>
            </div>
        </div>
    </div>
</div>

<style>
.accordion-button {
    white-space: normal !important;
    text-align: left;
    padding: 1rem 1.25rem;
    word-break: break-word;
}

.accordion-question {
    display: inline-flex;
    align-items: center;
    width: 100%;
}

.accordion-body {
    padding: 1.5rem;
}

.accordion-body p, 
.accordion-body ul {
    margin-bottom: 1rem;
}

.accordion-body ul {
    padding-left: 1.5rem;
}

.accordion-body li {
    margin-bottom: 0.5rem;
}

.accordion-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-left: auto;
}

.accordion-button:not(.collapsed) .bi-plus {
    display: none;
}

.accordion-button:not(.collapsed) .bi-dash {
    display: block !important;
}

.accordion-button .bi-dash {
    display: none;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .accordion-button {
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
    }
    
    .accordion-body {
        padding: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const iconContainer = this.querySelector('.accordion-icon');
            const plusIcon = iconContainer.querySelector('.bi-plus');
            const minusIcon = iconContainer.querySelector('.bi-dash');
            
            if (this.classList.contains('collapsed')) {
                plusIcon.classList.remove('d-none');
                minusIcon.classList.add('d-none');
            } else {
                plusIcon.classList.add('d-none');
                minusIcon.classList.remove('d-none');
            }
        });
    });
});
</script>         </div>
                </div>
            </div>
        </div>
    </section>





 
<!-- footer -->
 @include('footer')
	
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
</body>
</html>