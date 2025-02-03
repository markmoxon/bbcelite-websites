<?php
ob_start('ob_gzhandler');

// $SERVER_NAME - Domain of current page
// $SITE_URL - Homepage URL
// $DOMAIN - Website domain
// $SITE_TITLE - Site title
// $SITE_SUBTITLE2 - Site subtitle
// $SIDEBAR_ADVERT_URL - URL of sidebar advert
// $SHOW_RANDOM_LINK - Show link to random.cgi in mobile nav

$SERVER_NAME = $_SERVER['SERVER_NAME'] ?? "";
$SITE_URL = "https://" . $SERVER_NAME;

switch ($SERVER_NAME) {

	case 'www.bbcelite.com':
	case 'dev.bbcelite.com':
		$DOMAIN = "www.bbcelite.com";
		$SITE_SUBTITLE1 = "Mark Moxon's ";
		$SITE_TITLE = "Software Archaeology";
		$SITE_SUBTITLE2 = "";
		$SITE_SUBTITLE3 = "";
		$SHOW_RANDOM_LINK = FALSE;
		$AJAX_NAVIGATION = FALSE;
		$DEFAULT_THEME = "themeElite";
		break;

	case 'elite.bbcelite.com':
	case 'dev.elite.bbcelite.com':
		$DOMAIN = "elite.bbcelite.com";
		$SITE_SUBTITLE1 = "";
		$SITE_TITLE = "Elite";
		$SITE_SUBTITLE2 = " on the 6502";
		$SITE_SUBTITLE3 = "";
		$SHOW_RANDOM_LINK = TRUE;
		$AJAX_NAVIGATION = TRUE;
		$DEFAULT_THEME = "themeElite";
		break;

	case 'aviator.bbcelite.com':
	case 'dev.aviator.bbcelite.com':
		$DOMAIN = "aviator.bbcelite.com";
		$SITE_SUBTITLE1 = "";
		$SITE_TITLE = "Aviator";
		$SITE_SUBTITLE2 = " on the BBC Micro";
		$SITE_SUBTITLE3 = "";
		$SHOW_RANDOM_LINK = TRUE;
		$AJAX_NAVIGATION = FALSE;
		$DEFAULT_THEME = "themeElite";
		break;

	case 'revs.bbcelite.com':
	case 'dev.revs.bbcelite.com':
		$DOMAIN = "revs.bbcelite.com";
		$SITE_SUBTITLE1 = "";
		$SITE_TITLE = "Revs";
		$SITE_SUBTITLE2 = " on the BBC Micro";
		$SITE_SUBTITLE3 = "";
		$SHOW_RANDOM_LINK = TRUE;
		$AJAX_NAVIGATION = FALSE;
		$DEFAULT_THEME = "themeElite";
		break;

	case 'lander.bbcelite.com':
	case 'dev.lander.bbcelite.com':
		$DOMAIN = "lander.bbcelite.com";
		$SITE_SUBTITLE1 = "";
		$SITE_TITLE = "Lander";
		$SITE_SUBTITLE2 = " on the Acorn Archimedes";
		$SITE_SUBTITLE3 = "";
		$SHOW_RANDOM_LINK = TRUE;
		$AJAX_NAVIGATION = FALSE;
		$DEFAULT_THEME = "themeElite";
		break;

	default:
		$DOMAIN = "www.bbcelite.com";
		$SITE_SUBTITLE1 = "Mark Moxon's ";
		$SITE_TITLE = "Software Archaeology";
		$SITE_SUBTITLE2 = "";
		$SITE_SUBTITLE3 = "";
		$SHOW_RANDOM_LINK = FALSE;
		$AJAX_NAVIGATION = FALSE;
		$DEFAULT_THEME = "themeElite";
		break;
}

function page_header($folder, $name, $meta_title, $title, $description, $page_type = "", $page_parameter1 = "", $page_parameter2 = "", $subtitle = "") {
	global $AJAX_NAVIGATION, $DOMAIN, $SITE_TITLE, $SITE_SUBTITLE1, $SITE_SUBTITLE2, $SITE_SUBTITLE3, $SITE_URL, $SHOW_RANDOM_LINK, $DEFAULT_THEME;

	$title_no_tags = preg_replace('/<[^>]+>/', '', $meta_title);

	if (str_ends_with($page_type, '-home')) {
		$meta_title = $title_no_tags;
	} else {
		$meta_title = $title_no_tags . ' - ' . $SITE_SUBTITLE1 . $SITE_TITLE . $SITE_SUBTITLE2 . $SITE_SUBTITLE3;
	}

	if (array_key_exists('elite_theme', $_COOKIE)) {
		$theme = ($_COOKIE['elite_theme'] != '') ? $_COOKIE['elite_theme'] : $DEFAULT_THEME;
	} else {
		$theme = $DEFAULT_THEME;
	}

	$body_class = ' class="' . $theme . '"';
	$meta_data = 'data-section="' . $page_parameter1 . '" data-page="' . $page_parameter2 . '" ';
    if ($AJAX_NAVIGATION) {
    	$initialise_page = "initialiseElitePage(true)";
    } else {
    	$initialise_page = "initialiseElitePage(false)";
    }
	$theme_div = '<div id="siteTheme"><div class="themeWrapper themeLight" data-theme="themeLight"><div class="circle"></div></div><div class="themeWrapper themeDark" data-theme="themeDark"><div class="circle"></div></div><div class="themeWrapper themeElite" data-theme="themeElite"><div class="circle"></div></div></div>';
	$theme_class = ' withTheme';

	if (str_starts_with($page_type, 'aviator')) {
		$twitter_image = 'https://aviator.bbcelite.com/images/github/github-social-preview.png';		
	} elseif (str_starts_with($page_type, 'revs')) {
		$twitter_image = 'https://revs.bbcelite.com/images/github/github-social-preview.png';		
	} elseif (str_starts_with($page_type, 'lander')) {
		$twitter_image = 'https://lander.bbcelite.com/images/github/github-social-preview.png';		
	} elseif (str_starts_with($page_type, 'archaeology')) {
		$twitter_image = 'https://www.bbcelite.com/images/github/github-social-preview.png';		
	} elseif (str_starts_with($page_parameter1, 'cassette_') || str_starts_with($page_parameter2, 'cassette_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/cassette/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'disc_') || str_starts_with($page_parameter2, 'disc_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/disc/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'electron_') || str_starts_with($page_parameter2, 'electron_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/electron/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'c64_') || str_starts_with($page_parameter2, 'c64_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/c64/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'apple_') || str_starts_with($page_parameter2, 'apple_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/apple/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'master_') || str_starts_with($page_parameter2, 'master_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/master/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'elite-a_') || str_starts_with($page_parameter2, 'elite-a_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/elite-a/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'sp_') || str_starts_with($page_parameter2, 'sp_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/6502sp/github-social-preview.png';
	} elseif (str_starts_with($page_parameter1, 'nes_') || str_starts_with($page_parameter2, 'nes_')) {
		$twitter_image = 'https://elite.bbcelite.com/images/nes/github-social-preview.png';
	} elseif (str_starts_with($page_type, 'elite')) {
		$twitter_image = 'https://elite.bbcelite.com/images/6502sp/github-social-preview.png';		
	} else {
		$twitter_image = 'https://www.bbcelite.com/images/github/github-social-preview.png';		
	}

	?>
<!DOCTYPE html>

<html lang="en-GB">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title><?php echo $meta_title ?></title>

		<meta name="author" content="Mark Moxon" />
		<meta name="description" content="<?php echo $description ?>" <?php echo $meta_data ?>/>
		<meta name="robots" content="noodp,noydir" />

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:creator" content="@markmoxon" />
		<meta name="twitter:title" content="<?php echo $meta_title ?>" />
		<meta name="twitter:image" content="<?php echo $twitter_image ?>" />

		<meta name="og:title" content="<?php echo $meta_title ?>" />
		<meta name="og:image" content="<?php echo $twitter_image ?>" />

		<link rel="stylesheet" href="/css/20250203/main.min.css" />
		<link rel="stylesheet" href="/css/20250203/print.min.css" media="print" />

		<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32" />
		<link rel="apple-touch-icon" type="image/png" href="/favicons/favicon-180x180.png" sizes="180x180" />

		<link rel="home" href="/" title="Home page" />

        <script defer="defer" src="/javascript/20250203/main.min.js" onload="<?php echo $initialise_page ?>"></script>
	</head>

	<body<?php echo $body_class ?>>
		<div id="page-wrapper">
			<p class="accessibility"><a href="#navigation">Skip to navigation</a></p>

			<a id="burger-menu" class="Fixed">
				<span class="top-bar"></span>
				<span class="middle-bar"></span>
				<span class="bottom-bar"></span>
			</a>

			<header>
				<div class="siteTitle<?php echo $theme_class ?>">
					<a href="/" class="homeButton">&#x2302;</a>
					<?php if ($SHOW_RANDOM_LINK) { ?><a href="/cgi-bin/random.cgi" title="Show me something random" class="homeButton random">&#x221E;</a>
<?php } ?>
					<a href="#" id="navDropdownLink" class="navDropdownLink"><?php if ($theme_div) { ?><span class="triangle">&#x25BD;</span> <?php } if ($SITE_SUBTITLE1 != "")  { echo '<span class="subtitle">' . $SITE_SUBTITLE1 . '</span>'; } ?><?php echo $SITE_TITLE ?><?php if ($SITE_SUBTITLE2 != "")  { echo '<span class="subtitle">' . $SITE_SUBTITLE2 . '</span>'; } if ($SITE_SUBTITLE3 != "")  { echo '<span class="subtitle2">' . $SITE_SUBTITLE3 . '</span>'; } if ($theme_div == "") { ?> <span class="triangle">&#x25BD;</span><?php } ?></a><?php echo $theme_div ?>

				</div>
			</header>

			<div class="header<?php if ($subtitle != "") { echo " subtitle"; } ?>">
				<h1 title="The title of this article"><?php echo $title ?></h1><?php if ($subtitle != "") { echo "\n\t\t\t\t<h2>" . $subtitle . "</h2>"; } ?>

			</div>

			<div id="navDropdown">
				<p class="subheading first">My software archaeology sites</p>
				<p><?php nav_link("www.bbcelite.com", "Mark Moxon's Software Archaeology"); ?></p>
				<p><?php nav_link("elite.bbcelite.com", "Elite on the 6502"); ?></p>
				<p><?php nav_link("aviator.bbcelite.com", "Aviator on the BBC Micro"); ?></p>
				<p><?php nav_link("revs.bbcelite.com", "Revs on the BBC Micro"); ?></p>
				<p><?php nav_link("lander.bbcelite.com", "Lander on the Acorn Archimedes"); ?></p>
				<p class="subheading">My writing sites</p>
				<p><?php nav_link("www.moxon.net", "Mark Moxon's Travel Writing"); ?></p>
				<p><?php nav_link("www.landsendjohnogroats.info", "Walking Land's End to John o'Groats"); ?></p>
				<p><?php nav_link("www.tubewalker.com", "Tubewalker: The Tube, on Foot"); ?></p>
				<p class="subheading">Contact details and more</p>
				<p><?php nav_link("www.markmoxon.com", "Mark Moxon's Homepage"); ?></p>
			</div>

			<article>
<?php
}

function nav_link($link, $text) {
    global $DOMAIN;
	if ($link == $DOMAIN) {
		echo '<span style="position: relative;right: -2ch;"><a href="https://' . $link . '">' . $text . '</a> *</span>';
	} else {
		echo '<a href="https://' . $link . '">' . $text . '</a>';
	}
}
?>