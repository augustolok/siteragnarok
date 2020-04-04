<?php
/*
Ceres Control Panel

This is a control pannel program for Athena and Freya
Copyright (C) 2005 by Beowulf and Nightroad

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

To contact any of the authors about special permissions send
an e-mail to cerescp@gmail.com
*/

session_start();
include_once 'config.php'; // loads config variables
include_once 'query.php'; // imports queries
include_once 'functions.php';

$mainmenu[0][0] = "votpo point";
$mainmenu[0][1] = 0;

//$mainmenu[1][0] = $lang['MENU_MYACCOUNT'];
//$mainmenu[1][1] = 0;


//$submenu[0][0] = "vote";
//$submenu[17][1] = "";
//$submenu[17][2] = 6;


$pos = 0;
$menu = "var mainmenu = new Array(";
$sub  = "var submenu = new Array(\"\", \"\", -1";

for ($i = 0; isset($mainmenu[$i][0]); $i++) {
	if ($mainmenu[$i][1] < 0 || (isset($_SESSION[$CONFIG_name.'level']) && $_SESSION[$CONFIG_name.'level'] >= $mainmenu[$i][1])) {
		if ($pos > 0)
			$menu = $menu.", ";
		$menu = $menu."\"".$mainmenu[$i][0]."\"";
		for ($j = 0; isset($submenu[$j][0]); $j++) {
			if ($submenu[$j][2] == $i) {
				$sub = $sub.", \"".$submenu[$j][0]."\"".", \"".$submenu[$j][1]."\", ".$pos;
			}
		}
		$pos++;
	}
}

$menu = $menu.");";
$sub  = $sub.");";

echo $menu."\n";
echo $sub."\n";

?>
function main_menu() {
	var the_menu = " | ";

	for (i = 0; i < mainmenu.length; i++)
		the_menu = the_menu + `<button style=\"cursor:pointer\" onMouseOver=\"this.style.color='#FF3300'\" id="${i}"  onMouseOut="this.style.color='#000000'" onClick="menu_url(${i});">  ${mainmenu[i]} </button> | `;

	document.getElementById('main_menu').innerHTML = the_menu;
	//document.getElementById('sub_menu').innerHTML = " ";

	return false;
}

function sub_menu(index) {
	var the_menu = " | ";
	
	for (i = 0; i < submenu.length; i = i + 3) {
		if (submenu[i + 2] == index)
		the_menu = the_menu + "<span style=\"cursor:pointer\" onMouseOver=\"this.style.color='#FF3300'\" onMouseOut=\"this.style.color='#000000'\" onClick=\"return LINK_ajax('" + submenu[i + 1] + "','main_div');\">" + submenu[i] + "</span> | ";
	}

	//document.getElementById('sub_menu').innerHTML = the_menu;

	return false;
}
function menu_url(url) {
	if (url == 0) {
		window.location.href = '/vote';
	} 
	if (url == 1) {
		
	}
    
   
}
main_menu();
<?php
//fim();
?>
