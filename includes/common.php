<?php

function begin_page($lang = 'en', $title = null) {
	echo '<!DOCTYPE html>';
	echo '<html lang="' . $lang . '">' . "\n";
	echo '<head>';
	if ($title)
		echo "<title>$title | ngIRCd: Free, portable and lightweight Internet Relay Chat server</title>";
	else
		echo '<title>ngIRCd: Free, portable and lightweight Internet Relay Chat server</title>';
	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	echo '<meta name="author" content="Alexander Barton">';
	echo '<meta name="author-email" content="alex@barton.de">';
	echo '<meta name="MSSmartTagsPreventParsing" content="TRUE">';
	echo '<link rel="stylesheet" href="common/styles.css" type="text/css" media="screen">';
	echo '<link rel="author" href="mailto:alex@barton.de" title="E-Mail an Alex">';
	echo '<script src="common/mootools.js"></script>';
	echo '<script src="common/slide.js"></script>';
	echo "</head>\n<body>";
	echo '<div id="bodyBox">';

	// Title & Slogan
	echo '<div id="metaNav">';
	switch($lang) {
		case 'de':
				echo 'Deutsch&nbsp;|&nbsp;<a href="index.php.en">English</a>';
				break;
		case 'en':
				echo '<a href="index.php.de">Deutsch</a>&nbsp;|&nbsp;English';
				break;
	}
	echo '&nbsp;|&nbsp;<a href="mirrors.php">Mirrors</a></div>';
	echo '<div id="sloganhead">';
	echo '<h1 class="titel">ng<span>IRC</span>d: Next Generation IRC Daemon</h1>';
	echo '<p style="font-family: Georgia">“… serving <em>white hat</em> 6667!”</p>';
	echo '</div>';

	// Navigation
	echo '<ul class="nav">';
	switch($lang) {
	  case 'de':
		echo '<li><a href="index.php.de">ngIRCd</a></li>';
		echo '<li><a href="news.php.de">Neuigkeiten</a></li>';
		echo '<li><a href="download.php.de">Download</a></li>';
		echo '<li><a href="documentation.php.de">Dokumentation</a></li>';
		echo '<li><a href="support.php.de">Support</a></li>';
		echo '<li><a href="bugtracker.php.de">Bug-Tracker</a></li>';
		break;
	  default:
		echo '<li><a href="index.php.en">ngIRCd</a></li>';
		echo '<li><a href="news.php.en">News</a></li>';
		echo '<li><a href="download.php.en">Download</a></li>';
		echo '<li><a href="documentation.php.en">Documentation</a></li>';
		echo '<li><a href="support.php.en">Support</a></li>';
		echo '<li><a href="bugtracker.php.en">Bug Tracker</a></li>';
	}
	echo '</ul><br style="clear:both">';

	echo '<div id="content">';
}

function end_page() {
	echo '</div>';
	echo '<p id="footer">ngIRCd &copy;2001-2024 Alexander Barton and ';
	echo '<a href="doc/AUTHORS">Contributors</a>';
	echo '</div></body></html>';
}

function download_links($rel, $server, $protocol = "https") {
	echo "<dd>";
	echo "Server: <em>$server</em> ";
	/* Download folder */
	echo "(<a href=\"$protocol://$server/pub/ngircd/\">$protocol</a>";
	if ($protocol == "https")
		echo "&thinsp;🔒";
	echo "): ";
	/* Archive files */
	$count = 1;
	foreach (array('tar.gz', 'tar.xz', 'tar.Z') as $suffix) {
		if ($count > 1)
			echo ', ';
		echo "<a href=\"$protocol://$server/pub/ngircd/ngircd-$rel.$suffix\">";
		if ($suffix == "tar.gz")
			echo "ngircd-$rel.";
		echo "$suffix</a> ";
		echo "(<a href=\"$protocol://$server/pub/ngircd/ngircd-$rel.$suffix.sig\">Sig</a>)";
		$count++;
	}
	echo "</dd>";
}

?>
