/*jslint undef: true, sloppy: true, nomen: true */
/*global $, copyright, currentMenu, initialiseElitePage, lastScrollTop */

// Keep track of scroll direction
var lastScrollTop = 1;

// Initialise the page
function initialiseElitePage() {
	var page, section;

	// Make header sticky
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1 && $(this).scrollTop() > lastScrollTop) {  
			$('header').addClass('sticky');
			$('article').addClass('sticky');
		} else {
			$('header').removeClass('sticky');
			$('article').removeClass('sticky');
		}
		lastScrollTop = $(this).scrollTop();
	});

	// Set up navigation menus
	$.getScript('/javascript/20240813/jquery.mmenu.min.js', function () {
	
		// Clone navigation to burger menu
		$("#navigation").mmenu({}, { "clone": true });
				
		// Initialise burger menu
		var API = $("#mm-navigation").data("mmenu");
		$("#burger-menu").click(function() {
			API.open();
		});

		// Highlight the correct menu item using meta tags
		section = $("meta[name='description']").attr("data-section");
		page = $("meta[name='description']").attr("data-page");
		if (section !== undefined && page !== undefined) {
			currentMenu(section, page, API);		
		}

		// Delete desktop navigation now that we no longer need it
		$('#page-wrapper nav#navigation').remove();
	});
	
	// Update copyright message with current year
	copyright();

	// Set up click handler for site navigation dropdown
	$('#navDropdownLink').click(function(event) {
		event.preventDefault();
		if ($('#navDropdown').is(":visible")) {
			$('#navDropdown').hide();
			$('#navDropdownLink .triangle').html('&#x25BD;');
		} else {
			$('#navDropdown').show();
			$('#navDropdownLink .triangle').html('&#x25B3;');
		}
	});

	// Set up click handler for closing navigation dropdown when clicking outside dropdown
	$('article, footer').click(function(event) {
		if ($('#navDropdown').is(":visible")) {
			$('#navDropdown').hide();
			$('#navDropdownLink .triangle').html('&#x25BD;');
		}
	});
	$('#navDropdown').click(function(event) {
		if ($('#navDropdown').is(":visible") && (event.target.tagName.toLowerCase()) != 'a') {
			$('#navDropdown').hide();
			$('#navDropdownLink .triangle').html('&#x25BD;');
		}
	});

	// Select correct theme
	$('#siteTheme').val($('body').attr('class'));

    // Add theme handler
    $('#siteTheme').on('change', function() {
        var bodyClass = this.value;
        $('body').attr('class', bodyClass);
        var d = new Date();
        d.setTime(d.getTime() + (6 * 24 * 60 * 60 * 1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = "elite_theme=" + bodyClass + "; " + expires + "; domain=.bbcelite.com; secure; samesite=strict; path=/";
    });

    // Add theme button handler
    $('#siteTheme .themeWrapper').on('click', function() {
        var bodyClass = $(this).attr('data-theme');
        $('body').attr('class', bodyClass);
        var d = new Date();
        d.setTime(d.getTime() + (6 * 24 * 60 * 60 * 1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = "elite_theme=" + bodyClass + "; " + expires + "; domain=.bbcelite.com; secure; samesite=strict; path=/";
    });

	// Set up click handler for showing popup info
	$('.codeBlock .popup').click(function(event){
		event.preventDefault();
		$('.popupWrapper').hide();
		var name = $(this).text()
			.replace(/\//g, '-')
			.replace(/ /g, '-')
			.replace(/\(/g, '')
			.replace(/\)/g, '')
			.replace(/"/g, '')
			.replace(/'/g, '')
			.replace(/,/g, '')
			.replace(/\+/g, '-plus-')
			.replace(/%/g, '-per-cent')
			.replace(/\-\-\-/g, '-minus-')
			.toLowerCase();
		$('#popup-' + name).show();
	})
	
	// Set up click handler for closing popup info
	$('.popupWrapper .close').click(function(event){
		event.preventDefault();
		$('.popupWrapper').hide();
	});
	
	// Set up click handler for expanding comparison cells
	$('.expand .contentCell').click(function(event){
		event.preventDefault();
		var $thisCell = $(this);
		var $otherCells = $thisCell.siblings('.cell');
		var $codeRow = $thisCell.parent('.row').siblings('.row');
		if ($otherCells.length) {
		    var height = $thisCell.height();
		    $thisCell.height(height);
		    $otherCells.height(height);
            if ($($otherCells[0]).is(':visible')) {
                $otherCells.hide();
                $thisCell.addClass('expanded');
                $codeRow.find('.cell').eq($thisCell.index()).addClass('expanded');
                $codeRow.find('.cell').not(':eq(' + $thisCell.index() + ')').hide();
            } else {
                $otherCells.show();
                $thisCell.removeClass('expanded');
                $codeRow.find('.cell').show().removeClass('expanded');
            }
        }
	});

	// Set up click handler for extra routine data
	$('.extraDataLink').click(function(event){
		event.preventDefault();
		var $extraData = $(this).parent().nextAll('.extraData');
        if ($($extraData[0]).is(':visible')) {
		    $($extraData[0]).hide();
		    $(this).text('Show more');
		} else {
		    $($extraData[0]).show();
		    $(this).text('Show less');
		}
	});
}

// Open the current menu
function currentMenu(strMenuId, strMenuItem, objAPI) {
	// Highlight current page in mobile nav
	$("#mm-navigation #mm-" + strMenuId).addClass('Selected');

	// Open mobile menu
	if (strMenuId != 'home' && strMenuItem != 'home') {

        // Open the panel containing this page
	    var $thisPanel = $('#mm-submenu_' + strMenuId);
		objAPI.openPanel($thisPanel);

        // Open the parent so it slides the right way
	    var thisPanelParentId = $thisPanel.find(' .mm-navbar a.mm-prev').attr('data-target');
	    $(thisPanelParentId).addClass(' mm-opened mm-subopened');

        // Select this menu entry
		var $objMenuItem = $("#mm-navigation #mm-" + strMenuId + '_' + strMenuItem).parent();
		$objMenuItem.addClass('Selected');

        // Scroll entry into view
		//$objMenuItem[0].scrollIntoView();
	}
}

// Insert year for copyright
function copyright() {
	var strHTML, strStartYear, strThisYear, d = new Date();
	strStartYear = $('#copyrightYear').text();
	strThisYear = d.getFullYear();

	if (strStartYear.length > 0) {
	    if (strThisYear != strStartYear) {
	        strHTML = strStartYear + '-' + strThisYear;
	    } else {
	        strHTML = strThisYear;
	    }
	} else {
        strHTML = '1995-' + strThisYear;
    }
	$('#copyrightYear').html(strHTML);
}
