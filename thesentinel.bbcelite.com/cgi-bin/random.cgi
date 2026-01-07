#!/usr/bin/env perl
##########################################################################
# Name               : random.cgi
# Purpose            : Script to redirect to a random article
# Perl Packages Used : CGI
# Additional Files   : None
# Date Created       : 29 November 2004
# Author             : Mark Moxon
# Copyright          : (c) Mark Moxon
##########################################################################

################## INCLUDE PACKAGES AND LIBRARY FILES ####################

use strict;
use CGI;

###################### DEFINE GLOBAL VARIABLES ###########################

use vars qw(
			@FOLDERS
			$ROOT
			$URL
		   );

####################### DEFINE LOCAL VARIABLES ###########################

my ($article,
	@articles,
	%count,
	$folder,
	$query,
	$random
   );

my @all_articles = ();

########################## IMPORT CONSTANTS ##############################

$URL = 'https://' . $ENV{'SERVER_NAME'} . '/';

$ROOT = '../../thesentinel.bbcelite.com/';

@FOLDERS = ('source/main/subroutine/');

############################ MAIN PROGRAM ################################

$query = new CGI;

foreach $folder (@FOLDERS) {
	opendir(DIR, $ROOT . $folder) || die("Cannot open folder '$folder'");
	@articles = readdir(DIR);
	closedir(DIR);

	@articles = grep( ( ($_ ne '..') && ($_ ne '.') && ($_ ne 'index.html') && ($_ ne '.DS_Store') ), @articles );
	@articles = map { $folder . $_ } @articles;
	@all_articles = (@all_articles, @articles);
}

print $query->redirect($URL . $all_articles[int(rand(@all_articles))]);

exit;
