<?php
/*
 * @version $Id: software.tabs.php 7375 2008-10-06 20:54:52Z moyo $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2008 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file:
// Purpose of file:
// ----------------------------------------------------------------------

//error_log("REQUEST".print_r($_REQUEST,true));

$NEEDED_ITEMS=array("networking");

define('GLPI_ROOT', '..');
include (GLPI_ROOT . "/inc/includes.php");


if (!isset($_POST['ID'])) {
	exit();
}

if ($_POST["ID"]>0){
	switch($_POST['glpi_tab']){
		case 1: 
			showPortVLANForm($_POST["ID"]);
			break;
		default :
			displayPluginAction(NETWORKING_PORT_TYPE,$_POST["ID"],$_POST['glpi_tab'], false);
			break;
	}
}

	ajaxFooter();
?>