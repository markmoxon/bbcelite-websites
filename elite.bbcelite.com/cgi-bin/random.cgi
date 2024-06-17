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

$ROOT = '../../elite.bbcelite.com/';

@FOLDERS =  ('6502sp/loader_1/subroutine/',
			 '6502sp/loader_2/subroutine/',
			 '6502sp/main/subroutine/',
			 '6502sp/i_o_processor/subroutine/',
			 'cassette/big_code_file/subroutine/',
			 'cassette/loader/subroutine/',
			 'cassette/main/subroutine/',
			 'disc/docked/subroutine/',
			 'disc/flight/subroutine/',
			 'disc/loader_1/subroutine/',
			 'disc/loader_2/subroutine/',
			 'disc/loader_3/subroutine/',
			 'electron/loader/subroutine/',
			 'electron/main/subroutine/',
			 'elite-a/loader/subroutine/',
			 'elite-a/docked/subroutine/',
			 'elite-a/encyclopedia/subroutine/',
			 'elite-a/flight/subroutine/',
			 'elite-a/i_o_processor/subroutine/',
			 'elite-a/parasite/subroutine/',
			 'master/loader/subroutine/',
			 'master/main/subroutine/',
			 'nes/bank_0/subroutine/',
			 'nes/bank_1/subroutine/',
			 'nes/bank_2/subroutine/',
			 'nes/bank_3/subroutine/',
			 'nes/bank_4/subroutine/',
			 'nes/bank_5/subroutine/',
			 'nes/bank_6/subroutine/',
			 'nes/bank_7/subroutine/',
			);

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
