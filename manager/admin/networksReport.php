<?php
session_start();
include_once("../function/config.php");
include("../function/fnc.php");
include("../function/includes.php");
if(!isset($_SESSION['adminName']) || !isset($_SESSION['adminPass'])){ 
	header("Location: login.php"); 
	} 
	
	if(!isset($_POST['filterDate']) && isset($_POST['from'])&&$_POST['from']==NULL &&  isset($_POST['from'])&&$_POST['to']==NULL) {
		$query = mysql_query("SELECT SUM(points) AS pointsNwk,offerNwk FROM leads GROUP BY offerNwk") or die(mysql_error());
		$message1 .= '<span style="color: #0093E0;">All time</span>';
	} else {
		if(isset($_POST['filterDate']) && isset($_POST['from']) && isset($_POST['to']) && $_POST['from'] != NULL && $_POST['to'] != NULL) {
			$from = $_POST['from'];
			$to = $_POST['to'];
			$query = mysql_query("SELECT SUM(points) AS pointsNwk,offerNwk FROM leads WHERE (DATE(date) >= '".$from."' AND DATE(date) <='".$to."')GROUP BY offerNwk") or die(mysql_error());
			$message1 .= 'From: <span style="color: #0093E0;">'.$from.'</span>  To: <span style="color: #0093E0;">'.$to.'</span>';
		} else {
			if(isset($_POST['filterDate']) && isset($_POST['from'])&&$_POST['from'] == NULL || isset($_POST['to'])&&$_POST['to'] == NULL) {
				$query = mysql_query("SELECT SUM(points) AS pointsNwk,offerNwk FROM leads GROUP BY offerNwk") or die(mysql_error());
				$message1 .= '<span style="color: #0093E0;">All time</span>';
			}
		}
	}
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Admin cPanel : Networks Report</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="admin.css" type="text/css" />
		<link rel="stylesheet" href="../jquery/theme.black-ice.css">
		<link rel="stylesheet" href="../jquery/jquery.tablesorter.pager.css">
		<script type="text/javascript" src="../jquery/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="../jquery/jquery.tablesorter.js"></script> 
		<script type="text/javascript" src="../jquery/jquery.tablesorter.widgets.js"></script> 
		<script type="text/javascript" src="../jquery/jquery.tablesorter.pager.js"></script> 
		
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<script type="text/javascript">
	// DatePicker
	$(function() {
    $( "#from" ).datepicker({
      defaultDate: "-1w",
	  dateFormat: "yy-mm-dd",
      changeMonth: true,
	  changeYear: true,
	  showOtherMonths: true,
      selectOtherMonths: true,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "",
	  dateFormat: "yy-mm-dd",
      changeMonth: true,
	  changeYear: true,
	  showOtherMonths: true,
      selectOtherMonths: true,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
	// DatePicker
	
 $(function() {
$("table").tablesorter({

    // *** APPEARANCE ***
    // Add a theme - try 'blackice', 'blue', 'dark', 'default'
    //  'dropbox', 'green', 'grey' or 'ice'
    // to use 'bootstrap' or 'jui', you'll need to add the "uitheme"
    // widget and also set it to the same name
    // this option only adds a table class name "tablesorter-{theme}"
    theme: 'blackice',

    // fix the column widths
    widthFixed: false,

    // Show an indeterminate timer icon in the header when the table
    // is sorted or filtered
    showProcessing: false,

    // header layout template (HTML ok); {content} = innerHTML,
    // {icon} = <i/> (class from cssIcon)
    headerTemplate: '{content}',

    // return the modified template string
    onRenderTemplate: null, // function(index, template){ return template; },

    // called after each header cell is rendered, use index to target the column
    // customize header HTML
    onRenderHeader: function (index) {
        // the span wrapper is added by default
        $(this).find('div.tablesorter-header-inner').addClass('roundedCorners');
    },

    // *** FUNCTIONALITY ***
    // prevent text selection in header
    cancelSelection: true,

    // other options: "ddmmyyyy" & "yyyymmdd"
    dateFormat: "mmddyyyy",

    // The key used to select more than one column for multi-column
    // sorting.
    sortMultiSortKey: "shiftKey",

    // key used to remove sorting on a column
    sortResetKey: 'ctrlKey',

    // false for German "1.234.567,89" or French "1 234 567,89"
    usNumberFormat: true,

    // If true, parsing of all table cell data will be delayed
    // until the user initializes a sort
    delayInit: false,

    // if true, server-side sorting should be performed because
    // client-side sorting will be disabled, but the ui and events
    // will still be used.
    serverSideSorting: false,

    // *** SORT OPTIONS ***
    // These are detected by default,
    // but you can change or disable them
    // these can also be set using data-attributes or class names
    headers: {
        // set "sorter : false" (no quotes) to disable the column
        0: {
            sorter: "text"
        },
        1: {
            sorter: "digit"
        },
        2: {
            sorter: "text"
        },
        3: {
            sorter: "url"
        }
    },

    // ignore case while sorting
    ignoreCase: true,

    // forces the user to have this/these column(s) sorted first
    sortForce: null,
    // initial sort order of the columns, example sortList: [[0,0],[1,0]],
    // [[columnIndex, sortDirection], ... ]
    sortList: [
        [0, 0],
    ],
    // default sort that is added to the end of the users sort
    // selection.
    sortAppend: null,

    // starting sort direction "asc" or "desc"
    sortInitialOrder: "asc",

    // Replace equivalent character (accented characters) to allow
    // for alphanumeric sorting
    sortLocaleCompare: false,

    // third click on the header will reset column to default - unsorted
    sortReset: false,

    // restart sort to "sortInitialOrder" when clicking on previously
    // unsorted columns
    sortRestart: false,

    // sort empty cell to bottom, top, none, zero
    emptyTo: "bottom",

    // sort strings in numerical column as max, min, top, bottom, zero
    stringTo: "max",

    // extract text from the table - this is how is
    // it done by default
    textExtraction: {
        0: function (node) {
            return $(node).text();
        },
        1: function (node) {
            return $(node).text();
        }
    },

    // use custom text sorter
    // function(a,b){ return a.sort(b); } // basic sort
    textSorter: null,

    // *** WIDGETS ***

    // apply widgets on tablesorter initialization
    initWidgets: true,

    // include zebra and any other widgets, options:
    // 'columns', 'filter', 'stickyHeaders' & 'resizable'
    // 'uitheme' is another widget, but requires loading
    // a different skin and a jQuery UI theme.
    widgets: ['zebra', 'columns'],

    widgetOptions: {

        // zebra widget: adding zebra striping, using content and
        // default styles - the ui css removes the background
        // from default even and odd class names included for this
        // demo to allow switching themes
        // [ "even", "odd" ]
        zebra: [
            "ui-widget-content even",
            "ui-state-default odd"],

        // uitheme widget: * Updated! in tablesorter v2.4 **
        // Instead of the array of icon class names, this option now
        // contains the name of the theme. Currently jQuery UI ("jui")
        // and Bootstrap ("bootstrap") themes are supported. To modify
        // the class names used, extend from the themes variable
        // look for the "$.extend($.tablesorter.themes.jui" code below
        uitheme: 'jui',

        // columns widget: change the default column class names
        // primary is the 1st column sorted, secondary is the 2nd, etc
        columns: [
            "primary",
            "secondary",
            "tertiary"],

        // columns widget: If true, the class names from the columns
        // option will also be added to the table tfoot.
        columns_tfoot: true,

        // columns widget: If true, the class names from the columns
        // option will also be added to the table thead.
        columns_thead: true,

        // filter widget: If there are child rows in the table (rows with
        // class name from "cssChildRow" option) and this option is true
        // and a match is found anywhere in the child row, then it will make
        // that row visible; default is false
        filter_childRows: false,

        // filter widget: If true, a filter will be added to the top of
        // each table column.
        filter_columnFilters: true,

        // filter widget: css class applied to the table row containing the
        // filters & the inputs within that row
        filter_cssFilter: "tablesorter-filter",

        // filter widget: Customize the filter widget by adding a select
        // dropdown with content, custom options or custom filter functions
        // see http://goo.gl/HQQLW for more details
        filter_functions: null,

        // filter widget: Set this option to true to hide the filter row
        // initially. The rows is revealed by hovering over the filter
        // row or giving any filter input/select focus.
        filter_hideFilters: false,

        // filter widget: Set this option to false to keep the searches
        // case sensitive
        filter_ignoreCase: true,

        // filter widget: jQuery selector string of an element used to
        // reset the filters.
        filter_reset: null,

        // Delay in milliseconds before the filter widget starts searching;
        // This option prevents searching for every character while typing
        // and should make searching large tables faster.
        filter_searchDelay: 300,

        // Set this option to true if filtering is performed on the server-side.
        filter_serversideFiltering: false,

        // filter widget: Set this option to true to use the filter to find
        // text from the start of the column. So typing in "a" will find
        // "albert" but not "frank", both have a's; default is false
        filter_startsWith: false,

        // filter widget: If true, ALL filter searches will only use parsed
        // data. To only use parsed data in specific columns, set this option
        // to false and add class name "filter-parsed" to the header
        filter_useParsedData: false,

        // Resizable widget: If this option is set to false, resized column
        // widths will not be saved. Previous saved values will be restored
        // on page reload
        resizable: true,

        // saveSort widget: If this option is set to false, new sorts will
        // not be saved. Any previous saved sort will be restored on page
        // reload.
        saveSort: true,

        // stickyHeaders widget: css class name applied to the sticky header
        stickyHeaders: "tablesorter-stickyHeader"

    },

    // *** CALLBACKS ***
    // function called after tablesorter has completed initialization
    initialized: function (table) {},

    // *** CSS CLASS NAMES ***
    tableClass: 'tablesorter',
    cssAsc: "tablesorter-headerSortUp",
    cssDesc: "tablesorter-headerSortDown",
    cssHeader: "tablesorter-header",
    cssHeaderRow: "tablesorter-headerRow",
    cssIcon: "tablesorter-icon",
    cssChildRow: "tablesorter-childRow",
    cssInfoBlock: "tablesorter-infoOnly",
    cssProcessing: "tablesorter-processing",

    // *** SELECTORS ***
    // jQuery selectors used to find the header cells.
    selectorHeaders: '> thead th, > thead td',

    // jQuery selector of content within selectorHeaders
    // that is clickable to trigger a sort.
    selectorSort: "th, td",

    // rows with this class name will be removed automatically
    // before updating the table cache - used by "update",
    // "addRows" and "appendCache"
    selectorRemove: "tr.remove-me",

    // *** DEBUGING ***
    // send messages to console
    debug: false

}).tablesorterPager({

    // target the pager markup - see the HTML block below
    container: $(".pager"),

    // use this url format "http:/mydatabase.com?page={page}&size={size}" 
    ajaxUrl: null,

    // process ajax so that the data object is returned along with the
    // total number of rows; example:
    // {
    //   "data" : [{ "ID": 1, "Name": "Foo", "Last": "Bar" }],
    //   "total_rows" : 100 
    // } 
    ajaxProcessing: function(ajax) {
        if (ajax && ajax.hasOwnProperty('data')) {
            // return [ "data", "total_rows" ]; 
            return [ajax.data, ajax.total_rows];
        }
    },

    // output string - default is '{page}/{totalPages}';
    // possible variables:
    // {page}, {totalPages}, {startRow}, {endRow} and {totalRows}
    output: '{startRow} to {endRow} ({totalRows})',

    // apply disabled classname to the pager arrows when the rows at
    // either extreme is visible - default is true
    updateArrows: true,

    // starting page of the pager (zero based index)
    page: 0,

    // Number of visible rows - default is 10
    size: 10,

    // if true, the table will remain the same height no matter how many
    // records are displayed. The space is made up by an empty 
    // table row set to a height to compensate; default is false 
    fixedHeight: true,

    // remove rows from the table to speed up the sort of large tables.
    // setting this to false, only hides the non-visible rows; needed
    // if you plan to add/remove rows with the pager enabled.
    removeRows: false,

    // css class names of pager arrows
    // next page arrow
    cssNext: '.next',
    // previous page arrow
    cssPrev: '.prev',
    // go to first page arrow
    cssFirst: '.first',
    // go to last page arrow
    cssLast: '.last',
    // select dropdown to allow choosing a page
    cssGoto: '.gotoPage',
    // location of where the "output" is displayed
    cssPageDisplay: '.pagedisplay',
    // dropdown that sets the "size" option
    cssPageSize: '.pagesize',
    // class added to arrows when at the extremes 
    // (i.e. prev/first arrows are "disabled" when on the first page)
    // Note there is no period "." in front of this class name
    cssDisabled: 'disabled'

});

// Extend the themes to change any of the default class names ** NEW **
$.extend($.tablesorter.themes.jui, {
    // change default jQuery uitheme icons - find the full list of icons
    // here: http://jqueryui.com/themeroller/ (hover over them for their name)
    table: 'ui-widget ui-widget-content ui-corner-all', // table classes
    header: 'ui-widget-header ui-corner-all ui-state-default', // header classes
    icons: 'ui-icon', // icon class added to the <i> in the header
    sortNone: 'ui-icon-carat-2-n-s',
    sortAsc: 'ui-icon-carat-1-n',
    sortDesc: 'ui-icon-carat-1-s',
    active: 'ui-state-active', // applied when column is sorted
    hover: 'ui-state-hover', // hover class
    filterRow: '',
    even: 'ui-widget-content', // even row zebra striping
    odd: 'ui-state-default' // odd row zebra striping
});
 });
</script>
</head>

<?php include("header.php") ?>
   
    <div id="content">
		 
		 <div class="box nwkReport">
			<h2>Networks Report</h2>
			<div class="datepicker">
				<form action="#" method="POST">
				<label for="from">From</label>
				<input type="text" id="from" name="from" value="<?php if(isset($_POST['from'])) {echo $_POST['from'];}?>" />
				<label for="to">to</label>
				<input type="text" id="to" name="to" value="<?php if(isset($_POST['from'])){echo $_POST['to'];}?>"/>
				<input type="submit" name="filterDate" value="Filter" />&nbsp;<a href="networksReport.php">Reset Filter</a>
				</form>
				<?php if(isset($message1)&& $message1!=""){?>
					<p><b>- Filtered Result -</b><br>
						<?php echo $message1;?>
					</p>
				<?php } ?>
			</div>
			
			<div class="clear"></div>
			<div class="pager"> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/first.png" class="first"/> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/prev.png" class="prev"/> 
				<span class="pagedisplay"></span> <!-- this can be any element, including an input --> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/next.png" class="next"/> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/last.png" class="last"/> 
				<select class="pagesize" title="Select page size"> 
					<option selected="selected" value="10">10</option> 
					<option value="20">20</option> 
					<option value="30">30</option> 
					<option value="40">40</option> 
				</select>
				<select class="gotoPage" title="Select page number"></select>
			</div>
			<table cellspacing="0" class="tablesornet2">
				<thead>
					<tr>
						<th>Network</th>
						<th>Points</th>
					</tr>
				</thead>
				<tbody>
						<?php 
						if(isset($query))
						while($result = mysql_fetch_array($query)) {?>
						<tr>
						<td><?php echo $result['offerNwk'];?></td>
						<td><?php echo $result['pointsNwk'];?></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
			<div class="pager"> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/first.png" class="first"/> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/prev.png" class="prev"/> 
				<span class="pagedisplay"></span> <!-- this can be any element, including an input --> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/next.png" class="next"/> 
				<img src="http://mottie.github.com/tablesorter/addons/pager/icons/last.png" class="last"/> 
				<select class="pagesize" title="Select page size"> 
					<option selected="selected" value="10">10</option> 
					<option value="20">20</option> 
					<option value="30">30</option> 
					<option value="40">40</option> 
				</select>
				<select class="gotoPage" title="Select page number"></select>
			</div>
		 </div>		 
		 
		
    </div>
</div><!-- END WRAPPER -->
<?php include("../footer.php");?>