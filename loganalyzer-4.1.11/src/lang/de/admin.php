<?php
/*
	*********************************************************************
	* LogAnalyzer - http://loganalyzer.adiscon.com
	* -----------------------------------------------------------------
	*
	* Copyright (C) 2008-2010 Adiscon GmbH.
	*
	* This file is part of LogAnalyzer.
	*
	* LogAnalyzer is free software: you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation, either version 3 of the License, or
	* (at your option) any later version.
	*
	* LogAnalyzer is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with LogAnalyzer. If not, see <http://www.gnu.org/licenses/>.
	*
	* A copy of the GPL can be found in the file "COPYING" in this
	* distribution.
	*********************************************************************
*/
global $content;

// Global Stuff
$content['LN_ADMINMENU_HOMEPAGE'] = "Zurück zu den Meldungen";
$content['LN_ADMINMENU_GENOPT'] = "Einstellungen";
$content['LN_ADMINMENU_SOURCEOPT'] = "Quellen";
$content['LN_ADMINMENU_VIEWSOPT'] = "Anzeigen";
$content['LN_ADMINMENU_SEARCHOPT'] = "Suchen";
$content['LN_ADMINMENU_USEROPT'] = "Benutzer";
$content['LN_ADMINMENU_GROUPOPT'] = "Gruppen";
$content['LN_ADMINMENU_CHARTOPT'] = "Charts";
$content['LN_ADMINMENU_FIELDOPT'] = "Felder";
$content['LN_ADMINMENU_DBMAPPINGOPT'] = "DBMappings";
$content['LN_ADMINMENU_MSGPARSERSOPT'] = "Meldungs Parser";
$content['LN_ADMINMENU_REEPORTSOPT'] = "Report Modules";
$content['LN_ADMIN_CENTER'] = "Administration";
$content['LN_ADMIN_UNKNOWNSTATE'] = "Unbekannter Status";
$content['LN_ADMIN_ERROR_NOTALLOWED'] = "Sie sind nicht berechtigt mit diesem Benutzer-Level diese Seite anzuzeigen.";
$content['LN_DELETEYES'] = "Ja";
$content['LN_DELETENO'] = "Nein";
$content['LN_GEN_ACTIONS'] = "Mögliche Aktionen";
$content['LN_ADMIN_SEND'] = "Änderungen speichern";
$content['LN_GEN_USERONLY'] = "Nur Benutzer";
$content['LN_GEN_USERONLYNAME'] = "Benutzer '%1'";
$content['LN_GEN_GROUPONLY'] = "Nur Gruppen";
$content['LN_GEN_GLOBAL'] = "Global";
$content['LN_GEN_USERONLY_LONG'] = "Eigene Einstellungen <br>(Nur für Ihren Benutzer)";
$content['LN_GEN_GROUPONLY_LONG'] = "Einstellungen für die Gruppe <br>(Nur für die ausgewÄhlte Gruppe)";
$content['LN_GEN_GROUPONLYNAME'] = "Gruppe '%1'";
$content['LN_ADMIN_POPUPHELP'] = "Details für diese Funktion";
$content['LN_ADMIN_DBSTATS'] = "Anzeige der Datenbankinformationen.";
$content['LN_ADMIN_CLEARDATA'] = "Wenn Sie alte DatenbankeintrÄge löschen wollen, benutzen Sie diese Funktion.";
$content['LN_UPDATE_AVAILABLE'] = "Update available";
$content['LN_UPDATE_INSTALLEDVER'] = "Installed version: ";
$content['LN_UPDATE_AVAILABLEVER'] = "Available version: ";
$content['LN_UPDATE_LINK'] = "Klicken Sie hier um das Update zu bekommen";
$content['LN_ADMIN_RESULTREDIRECT'] = "Sie werden in %2 Sekunden auf diese <A HREF='%1'>Seite</A> weitergeleitet.";
$content['LN_ADMIN_RESULTCLICK'] = "Klicken Sie <A HREF='%1'>hier</A> um fortzufahren.";
$content['LN_ADMIN_GOBACK'] = "Zurückgehen";

// General Options
$content['LN_ADMIN_GLOBFRONTEND'] = "Globale Anzeige Optionen";
$content['LN_ADMIN_USERFRONTEND'] = "Benutzer spezifische Anzeige Optionen";
$content['LN_ADMIN_MISC'] = "Verschiedene Optionen";
$content['LN_GEN_SHOWDEBUGMSG'] = "Anzeige von Debug Meldungen";
$content['LN_GEN_DEBUGGRIDCOUNTER'] = "Anzeige Debug Meldungssumme";
$content['LN_GEN_SHOWPAGERENDERSTATS'] = "Anzeige Status des Seiten-Renderers";
$content['LN_GEN_ENABLEGZIP'] = "Ermögliche GZIP komprimierte Ausgabe";
$content['LN_GEN_DEBUGUSERLOGIN'] = "Debug Benutzeranmeldung";
$content['LN_GEN_WEBSTYLE'] = "Standard-Style";
$content['LN_GEN_SELLANGUAGE'] = "Standard-Sprache";
$content['LN_GEN_PREPENDTITLE'] = "Diese Zeichenfolge im Titel mit anzeigen";
$content['LN_GEN_USETODAY'] = "Anzeige von 'Today' aund 'Yesterday' in den Zeitfeldern";
$content['LN_GEN_DETAILPOPUPS'] = "Benutze Popup-Fenster um alle Meldungsdatails anzuzeigen";
$content['LN_GEN_MSGCHARLIMIT'] = "Anzahl der Zeichen im Meldungsfenster in der Hauptanzeige";
$content['LN_GEN_STRCHARLIMIT'] = "Anzahl der Zeichen in Feldern";
$content['LN_GEN_ENTRIESPERPAGE'] = "Anzahl der Zeilen pro Seite";
$content['LN_GEN_AUTORELOADSECONDS'] = "Ermögliche automatisches neu laden der Seite nach Sekunden";
$content['LN_GEN_ADMINCHANGEWAITTIME'] = "Reloadtime in Adminpanel";
$content['LN_GEN_IPADRRESOLVE'] = "Ermitteln der IP-Adresse durch DNS-Abfragen";
$content['LN_GEN_CUSTBTNCAPT'] = "Benutzerdefinierte Such-Titel";
$content['LN_GEN_CUSTBTNSRCH'] = "Benutzerdefinierte Such-Zeichenfolge";
$content['LN_GEN_SUCCESSFULLYSAVED'] = "Die Einstellungen wurden erfolgreich gespeichert!";
$content['LN_GEN_INTERNAL'] = "Intern";
$content['LN_GEN_DISABLED'] = "Funktion deaktiviert";
$content['LN_GEN_CONFIGFILE'] = "Konfigurationsdatei";
$content['LN_GEN_ACCESSDENIED'] = "Der Zugriff auf diese Funktion wurde verweigert!";
$content['LN_GEN_DEFVIEWS'] = "Standard-Anzeige";
$content['LN_GEN_DEFSOURCE'] = "Standard-Quelle";
$content['LN_GEN_DEFFONT'] = "Standard-Schriftart";
$content['LN_GEN_DEFFONTSIZE'] = "Standard-Schriftgröße";
$content['LN_GEN_SUPPRESSDUPMSG'] = "Doppelte Meldungen nur einmal anzeigen";
$content['LN_GEN_TREATFILTERSTRUE'] = "Treat filters of not found fields as true";
$content['LN_GEN_INLINESEARCHICONS'] = "Show Onlinesearch icons within fields";
$content['LN_GEN_OPTIONNAME'] = "Option Name";
$content['LN_GEN_GLOBALVALUE'] = "Globale Werte";
$content['LN_GEN_PERSONALVALUE'] = "Persönliche (benutzerbezogene)Werte";
$content['LN_GEN_DISABLEUSEROPTIONS'] = "Hier klicken um persönche Optionen zu deaktivieren";
$content['LN_GEN_ENABLEUSEROPTIONS'] = "Hier klicken um persönliche Optionen zu aktivieren";
$content['LN_ADMIN_GLOBALONLY'] = "Nur Globale Optionen";
$content['LN_GEN_DEBUGTOSYSLOG'] = "Sende Debug zum lokalen Syslog Server";
$content['LN_GEN_POPUPMENUTIMEOUT'] = "Popupmenü Anzeige für Millisekunden";
$content['LN_ADMIN_SCRIPTTIMEOUT'] = "PHP Skript max. Lauzeit in Sekunden";
$content['LN_GEN_INJECTHTMLHEADER'] = "Voranstellen von HTML Code in &lt;head&gt; Bereich.";
$content['LN_GEN_INJECTBODYHEADER'] = "Voranstellen von HTML Code am Anfang des &lt;body&gt; Bereichs.";
$content['LN_GEN_INJECTBODYFOOTER'] = "Voranstellen von HTML Code Am Ende des &lt;body&gt; Bereichs.";
$content['LN_ADMIN_PHPLOGCON_LOGOURL'] = "Optionale LogAnalyzer-Logo-URL. Bitte für das Standard-Logo leer lassen.";
$content['LN_ADMIN_ERROR_READONLY'] = "This is a READONLY User, you are not allowed to perform any change operations.";
$content['LN_ADMIN_ERROR_NOTALLOWEDTOEDIT'] = "You are not allowed to edit this configuration item.";
$content['LN_ADMIN_USEPROXYSERVER'] = "Leave empty if you do not want to use a proxy server! If set to valid proxy server (for example '127.0.0.1:8080'), LogAnalyzer will use this server for remote queries like the update check feature.";
$content['LN_ADMIN_DEFAULTENCODING'] = "Default character encoding"; 
$content['LN_GEN_CONTEXTLINKS'] = "Enable Contextlinks (Question marks)";
$content['LN_GEN_DISABLEADMINUSERS'] = "Disable Adminpanel for normal users";

// User Center
$content['LN_USER_CENTER'] = "Benutzer Optionen";
$content['LN_USER_ID'] = "ID";
$content['LN_USER_NAME'] = "Benutzername";
$content['LN_USER_ADD'] = "Benutzer hinzufügen";
$content['LN_USER_EDIT'] = "Benutzer bearbeiten";
$content['LN_USER_DELETE'] = "Benutzer löschen";
$content['LN_USER_PASSWORD1'] = "Passwort";
$content['LN_USER_PASSWORD2'] = "Passwort BestÄtigung";
$content['LN_USER_ERROR_IDNOTFOUND'] = "Fehler, ein Benutzer mit der ID '%1', wurde nicht gefunden";
$content['LN_USER_ERROR_DONOTDELURSLF'] = "Fehler, Sie können sich NICHT SELBST LöSCHEN!";
$content['LN_USER_ERROR_DELUSER'] = "Löschen des Benutzer mit der id '%1' fehlgeschlagen!";
$content['LN_USER_ERROR_INVALIDID'] = "Fehler, ungültige ID, Benutzer nicht gefunden";
$content['LN_USER_ERROR_HASBEENDEL'] = "Der Benutzer '%1' wurde erfolgreich gelöscht!";
$content['LN_USER_ERROR_USEREMPTY'] = "Fehler, Benutzername ist leer";
$content['LN_USER_ERROR_USERNAMETAKEN'] = "Fehler, dieser Benutzername existiert bereits!";
$content['LN_USER_ERROR_PASSSHORT'] = "Fehler, Passwort ist zu kurz, oder stimmt nicht überein.";
$content['LN_USER_ERROR_HASBEENADDED'] = "Benutzer '%1' wurde erfolgreich hinzugefügt.";
$content['LN_USER_ERROR_HASBEENEDIT'] = "Benutzer '%1' wurde erfolgreich geÄndert.";
$content['LN_USER_ISADMIN'] = "Administrator?";
$content['LN_USER_ADDEDIT'] = "Hinzufügen/Bearbeiten von Benutzern";
$content['LN_USER_WARNREMOVEADMIN'] = "Sie sind im Begriff sich Ihre Administorenrechte zu nehmen. Sind Sie sicher?";
$content['LN_USER_WARNDELETEUSER'] = "Sind Sie sicher das Sie den Benutzer '%1' löschen wollen? Alle pers. Einstellungen werden ebenfalls gelöscht.";
$content['LN_USER_ERROR_INVALIDSESSIONS'] = "Ungültige Benutzer Sitzung.";
$content['LN_USER_SETISADMIN'] = "Ändern des IsAdmin Status";
$content['LN_USER_SETISREADONLY'] = "Ändern des IsReadOnly Status";

// Group center
$content['LN_GROUP_CENTER'] = "Gruppen Administration";
$content['LN_GROUP_ID'] = "ID";
$content['LN_GROUP_NAME'] = "Gruppenname";
$content['LN_GROUP_DESCRIPTION'] = "Gruppenbeschreibung";
$content['LN_GROUP_TYPE'] = "Gruppentyp";
$content['LN_GROUP_ADD'] = "Gruppe hinzufügen";
$content['LN_GROUP_EDIT'] = "Gruppe bearbeiten";
$content['LN_GROUP_DELETE'] = "Gruppe löschen";
$content['LN_GROUP_NOGROUPS'] = "Es wurde aktuell keine Gruppe angelegt.";
$content['LN_GROUP_ADDEDIT'] = "Hinzufügen/Bearbeiten Gruppe";
$content['LN_GROUP_ERROR_GROUPEMPTY'] = "Der Gruppenname darf nicht leer sein..";
$content['LN_GROUP_ERROR_GROUPNAMETAKEN'] = "Der Gruppenname existiert bereits.";
$content['LN_GROUP_HASBEENADDED'] = "Die Gruppe '%1' wurde erfolgreich hinzugefügt.";
$content['LN_GROUP_ERROR_IDNOTFOUND'] = "Die Gruppe mit der ID '%1' konnte nicht gefunden werden.";
$content['LN_GROUP_ERROR_HASBEENEDIT'] = "Die Gruppe '%1' wurde erfolgreich geÄndert.";
$content['LN_GROUP_ERROR_INVALIDGROUP'] = "Fehler, ungültige ID, Gruppe nicht gefunden.";
$content['LN_GROUP_WARNDELETEGROUP'] = "Sind Sie sicher, dass Sie diese Gruppe '%1'? löschen wollen. Alle Gruppeneinstellungen werden ebenfalls gelöscht.";
$content['LN_GROUP_ERROR_DELGROUP'] = "Löschen der Gruppe mit der id '%1' fehlgeschlagen!";
$content['LN_GROUP_ERROR_HASBEENDEL'] = "Die Gruppe '%1' wurde erfolgreich gelöscht!";
$content['LN_GROUP_MEMBERS'] = "Gruppenmitglieder: ";
$content['LN_GROUP_ADDUSER'] = "Benutzer der Gruppe hinzufügen";
$content['LN_GROUP_ERROR_USERIDMISSING'] = "Die Benutzer id fehlt.";
$content['LN_GROUP_USERHASBEENADDEDGROUP'] = "Der Benutzer '%1' wurde erfolgreich zur Gruppe '%2' hinzugefügt";
$content['LN_GROUP_ERRORNOMOREUSERS'] = "Es sind keine Benutzer mehr verfügbar, welche zur Gruppe '%1' hinzugefügt werden können.";
$content['LN_GROUP_USER_ADD'] = "Benutzer zur Gruppe hinzufügen";
$content['LN_GROUP_USERDELETE'] = "Benutzer von der Gruppe entfernen";
$content['LN_GROUP_ERRORNOUSERSINGROUP'] = "Es sind keine Benutzer mehr verfügbar, welche von der Gruppe '%1' entfernt werden können.";
$content['LN_GROUP_ERROR_REMUSERFROMGROUP'] = "Der Benutzer '%1' kann nicht aus der Gruppe '%2' entfernt werden.";
$content['LN_GROUP_USERHASBEENREMOVED'] = "Der Benutzer '%1' wurde erfolgreich aus der Gruppe '%2' entfernt";
$content['LN_GROUP_'] = "";

// Custom Searches center
$content['LN_SEARCH_CENTER'] = "Benutzerdefinierte Suchen";
$content['LN_SEARCH_ADD'] = "Hinzufügen einer benutzerdefinierten Suche";
$content['LN_SEARCH_ID'] = "ID";
$content['LN_SEARCH_NAME'] = "Name der Suche ";
$content['LN_SEARCH_QUERY'] = "Suchabfrage";
$content['LN_SEARCH_TYPE'] = "Zugewiesen zu";
$content['LN_SEARCH_EDIT'] = "Bearbeiten einer benutzerdefinierten Suche";
$content['LN_SEARCH_DELETE'] = "Löschen einer benutzerdefinierten Suche";
$content['LN_SEARCH_ADDEDIT'] = "Hinzufügen/Bearbeiten benutzerdefinerte Suche";
$content['LN_SEARCH_SELGROUPENABLE'] = ">> Gruppe auswÄhlen <<";
$content['LN_SEARCH_ERROR_DISPLAYNAMEEMPTY'] = "Der Anzeigenname kann nicht leer sein.";
$content['LN_SEARCH_ERROR_SEARCHQUERYEMPTY'] = "Die Suchabfrage kann nicht leer sein.";
$content['LN_SEARCH_HASBEENADDED'] = "Die benutzerdefinerte Suche '%1' wurde erfolgreich hinzugefügt.";
$content['LN_SEARCH_ERROR_IDNOTFOUND'] = "Es konnte keine Suche mit der ID '%1' gefunden werden.";
$content['LN_SEARCH_ERROR_INVALIDID'] = "Ungültige ID der Suche.";
$content['LN_SEARCH_HASBEENEDIT'] = "Die benutzerdefinierte Suche '%1' wurde erfolgreich geÄndert.";
$content['LN_SEARCH_WARNDELETESEARCH'] = "Sind Sie sicher, dass Sie die Suche' %1' löschen wollen? Dies kann nicht rückgÄngig gemacht werden!";
$content['LN_SEARCH_ERROR_DELSEARCH'] = "Löschen der benutzerdefinerten Suche mit der id '%1' fehlgeschlagen!";
$content['LN_SEARCH_ERROR_HASBEENDEL'] = "Die benutzerdefinierte Suche '%1' wurde erfolgreich gelöscht!";
$content['LN_SEARCH_'] = "";

// Custom Views center
$content['LN_VIEWS_CENTER'] = "Ansicht Optionen";
$content['LN_VIEWS_ID'] = "ID";
$content['LN_VIEWS_NAME'] = "Name der Ansicht";
$content['LN_VIEWS_COLUMNS'] = "Spalten";
$content['LN_VIEWS_TYPE'] = "Zugewiesen zu";
$content['LN_VIEWS_ADD'] = "Hinzufügen einer Ansicht";
$content['LN_VIEWS_EDIT'] = "Bearbeiten einer Ansicht";
$content['LN_VIEWS_ERROR_IDNOTFOUND'] = "Eine Ansicht mit der ID '%1' konnte nicht gefunden werden.";
$content['LN_VIEWS_ERROR_INVALIDID'] = "Die Ansicht mit der ID '%1' ist keine gültige Ansicht.";
$content['LN_VIEWS_WARNDELETEVIEW'] = "Sind Sie sicher, dass Sie die Ansicht '%1' löschen wollen? Dies kann nicht rückgÄngig gemacht werden!";
$content['LN_VIEWS_ERROR_DELSEARCH'] = "Löschen der Ansicht mit der id '%1' fehlgeschlagen!";
$content['LN_VIEWS_ERROR_HASBEENDEL'] = "Die Ansicht '%1' wurder erfolgreich gelöscht!";
$content['LN_VIEWS_ADDEDIT'] = "Hinzufügen/Bearbeiten einer Ansicht";
$content['LN_VIEWS_COLUMNLIST'] = "Konfigurierte Spalten";
$content['LN_VIEWS_ADDCOLUMN'] = "Eine Spalte hinzufuegen";
$content['LN_VIEWS_ERROR_DISPLAYNAMEEMPTY'] = "Der Name der Ansicht kann nicht leer sein.";
$content['LN_VIEWS_COLUMN'] = "Spalte";
$content['LN_VIEWS_COLUMN_REMOVE'] = "Spalte löschen";
$content['LN_VIEWS_HASBEENADDED'] = "Die Ansicht '%1' wurder erfolgreich hinzugefügt.";
$content['LN_VIEWS_ERROR_NOCOLUMNS'] = "Sie müssen mind. eine Spalte anegben, um eine neue Ansicht zu erstellen.";
$content['LN_VIEWS_HASBEENEDIT'] = "Die Ansicht '%1' wurde erfolgreich geÄndert.";
$content['LN_VIEWS_'] = "";

// Custom DBMappings center
$content['LN_DBMP_CENTER'] = "Database Field Mappings Options";
$content['LN_DBMP_ID'] = "ID";
$content['LN_DBMP_NAME'] = "Database Mappingname";
$content['LN_DBMP_DBMAPPINGS'] = "Database Mappings";
$content['LN_DBMP_ADD'] = "Add new Database Mapping";
$content['LN_DBMP_EDIT'] = "Edit Database Mapping";
$content['LN_DBMP_DELETE'] = "Delete Database Mapping";
$content['LN_DBMP_ERROR_IDNOTFOUND'] = "A Database Mapping with ID '%1' could not be found.";
$content['LN_DBMP_ERROR_INVALIDID'] = "The Database Mapping with ID '%1' is not a valid Database Mapping.";
$content['LN_DBMP_WARNDELETEMAPPING'] = "Are you sure that you want to delete the Database Mapping '%1'? This cannot be undone!";
$content['LN_DBMP_ERROR_DELSEARCH'] = "Deleting of the Database Mapping with id '%1' failed!";
$content['LN_DBMP_ERROR_HASBEENDEL'] = "The Database Mapping '%1' has been successfully deleted!";
$content['LN_DBMP_ADDEDIT'] = "Add / Edit Database Mapping";
$content['LN_DBMP_DBMAPPINGSLIST'] = "Configured Mappings";
$content['LN_DBMP_ADDMAPPING'] = "Add Field Mapping into list";
$content['LN_DBMP_ERROR_DISPLAYNAMEEMPTY'] = "The DisplayName cannot be empty.";
$content['LN_DBMP_MAPPING'] = "Mapping";
$content['LN_DBMP_MAPPING_REMOVE'] = "Remove Mapping";
$content['LN_DBMP_MAPPING_EDIT'] = "Edit Mapping";
$content['LN_DBMP_HASBEENADDED'] = "The Custom Database Mapping '%1' has been successfully added.";
$content['LN_DBMP_ERROR_NOCOLUMNS'] = "You need to add at least one column in order to add a new Custom Database Mapping.";
$content['LN_DBMP_HASBEENEDIT'] = "The Custom Database Mapping '%1' has been successfully edited.";
$content['LN_DBMP_HASBEENEDIT'] = "The Custom Database Mapping '%1' has been successfully edited.";
$content['LN_DBMP_ERROR_MISSINGFIELDNAME'] = "Missing mapping for the '%1' field.";

// Custom Sources center
$content['LN_SOURCES_CENTER'] = "Quellen Optionen";
$content['LN_SOURCES_EDIT'] = "Quelle bearbeiten";
$content['LN_SOURCES_DELETE'] = "Quelle löschen";
$content['LN_SOURCES_ID'] = "ID";
$content['LN_SOURCES_NAME'] = "Name der Quelle";
$content['LN_SOURCES_TYPE'] = "Typ der Quelle";
$content['LN_SOURCES_ASSIGNTO'] = "Zugewiesen zu";
$content['LN_SOURCES_DISK'] = "Festplatten Datei";
$content['LN_SOURCES_DB'] = "MySQL Datenbank";
$content['LN_SOURCES_CLICKHOUSE'] = "ClickHouse Datenbank";
$content['LN_SOURCES_PDO'] = "PDO Datenquelle";
$content['LN_SOURCES_ADD'] = "Hinzufügen einer Quelle";
$content['LN_SOURCES_ADDEDIT'] = "Hinzufügen/Bearbeiten einer Quelle";
$content['LN_SOURCES_TYPE'] = "Typ der Quelle";
$content['LN_SOURCES_DISKTYPEOPTIONS'] = "Festplatten Datei, zugewiesene Optionen";
$content['LN_SOURCES_ERROR_MISSINGPARAM'] = "Der Parameter '%1' fehlt.";
$content['LN_SOURCES_ERROR_NOTAVALIDFILE'] = "Fehler beim öffnen der Syslog Detei '%1'! Bitte überprüfen Sie die Existenz der Datei und die Rechte für LogAnalyzer.";
$content['LN_SOURCES_ERROR_UNKNOWNSOURCE'] = "Unbekannte Quelle '%1' gefunden";
$content['LN_SOURCE_HASBEENADDED'] = "Die neue Quelle '%1' wurde erfolgreich hinzugefügt.";
$content['LN_SOURCES_EDIT'] = "Quelle bearbeiten";
$content['LN_SOURCES_ERROR_INVALIDORNOTFOUNDID'] = "Die Quellen-ID ist ungültig oder konnte nicht gefunden werden.";
$content['LN_SOURCES_ERROR_IDNOTFOUND'] = "Die Quellen-ID konnte in der Datenbank nicht gefunden werden.";
$content['LN_SOURCES_HASBEENEDIT'] = "Die Quelle '%1' wurde erfolgreich geÄndert.";
$content['LN_SOURCES_WARNDELETESEARCH'] = "Sind Sie sicher, dass Sie die Quelle '%1' löschen wollen? Dies kann nicht rückgÄngig gemacht werden!";
$content['LN_SOURCES_ERROR_DELSOURCE'] = "Löschen der Quelle mit der id '%1' fehlgeschlagen!";
$content['LN_SOURCES_ERROR_HASBEENDEL'] = "Die Quelle '%1' wurde erfolgreich gelöscht!";
$content['LN_SOURCES_DESCRIPTION'] = "Beschreibung der Quelle (Optional)";
$content['LN_SOURCES_ERROR_INVALIDVALUE'] = "Ungültiger Wert für den Parameter '%1'.";
$content['LN_SOURCES_STATSNAME'] = "Name";
$content['LN_SOURCES_STATSVALUE'] = "Wert";
$content['LN_SOURCES_DETAILS'] = "Details für diese Log-Datenstrom-Quelle";
$content['LN_SOURCES_STATSDETAILS'] = "Statistische Details für diese Log-Datenstrom-Quelle";
$content['LN_SOURCES_ERROR_NOSTATSDATA'] = "Es konnten keine statistsichen Daten für diese Log-Datenstrom-Quelle gefunden werden.";
$content['LN_SOURCES_ERROR_NOCLEARSUPPORT'] = "Diese Log-Datenstrom-Quelle unterstützt nicht das löschen von Daten.";
$content['LN_SOURCES_ROWCOUNT'] = "Summe der Zeilen";
$content['LN_SOURCES_CLEAR_HELPTEXT'] = "Achtung! Vorsicht beim Löschen von Daten, eine hier durchgeführte Aktion kann nicht mehr rückgÄngig gemacht werden!";
$content['LN_SOURCES_CLEARSINCE'] = "Lösche alle Daten seit ... ";
$content['LN_SOURCES_CLEARDATE'] = "Lösche alle Daten älter als ... ";
$content['LN_SOURCES_CLEARDATA_SEND'] = "Lösche alle ausgewÄhlten Daten";
$content['LN_SOURCES_ERROR_INVALIDCLEANUP'] = "Ungültiger Lösch-Typ";
$content['LN_SOURCES_WARNDELETEDATA'] = "Sind Sie sicher, dass Sie alle Daten löschen wollen welche in der '%1' Quelle enthalten sind? Dies kann nicht mehr rückgÄngig gemacht werden!";
$content['LN_SOURCES_ERROR_DELDATA'] = "Es konnten keine Daten in der Quelle '%1' gelöscht werden";
$content['LN_SOURCES_HASBEENDELDATA'] = "Die Daten in der Quelle '%1'wurden erfolgreich gelöscht, '%2' Zeilen wurden entfern. ";
$content['LN_SOURCES_FILTERSTRING'] = "Custom Searchfilter";
$content['LN_SOURCES_FILTERSTRING_HELP'] = "Use the same syntax as in the search field. For example if you want to show only messages from 'server1', use this searchfilter: source:=server1";

// Database Upgrade
$content['LN_DBUPGRADE_TITLE'] = "LogAnalyzer Datenbank Update";
$content['LN_DBUPGRADE_DBFILENOTFOUND'] = "Die Datenbank Upgrade Datei '%1' konnte im 'include'-Ordner nicht gefunden werden! Bitte überprüfen Sie, ob Sie LogAnalyzer komplett heruntergeladen haben.";
$content['LN_DBUPGRADE_DBDEFFILESHORT'] = "Die Datenbank Upgrade Datei ist leer oder enthÄlt kein SQL-Kommando! Bitte überprüfen Sie, ob Sie LogAnalyzer komplett heruntergeladen haben.";
$content['LN_DBUPGRADE_WELCOME'] = "Willkommen zum Datenbank Upgrade";
$content['LN_DBUPGRADE_BEFORESTART'] = "Bevor Sie mit dem Upgrade der Datenbank beginnen, sollten Sie eine <b>KOMPLETTE SICHERUNG IHRER DATENBANK</b> durchführen. Alle weiteren Schritte werden automatisch duch das Upgrade-Skript durchgeführt.";
$content['LN_DBUPGRADE_CURRENTINSTALLED'] = "Aktuell installierte Datenbank Version";
$content['LN_DBUPGRADE_TOBEINSTALLED'] = "Zu installierende Datenbank Version";
$content['LN_DBUPGRADE_HASBEENDONE'] = "Das Datenbank Upgrade wurde durchgeführt, das Ergebnis der Operation sehen Sie untenstehend";
$content['LN_DBUPGRADE_SUCCESSEXEC'] = "Erfolgreich ausgeführte Anweisungen";
$content['LN_DBUPGRADE_FAILEDEXEC'] = "Nicht erfolgreich ausgeführte Anweisungen";
$content['LN_DBUPGRADE_ONESTATEMENTFAILED'] = "Es wurde mind. eine Anweisung nicht korekt ausgeführt, dies muss manuell durch Sie korrigiert werden. Bitte beachten Sie die untenstehenden Details";
$content['LN_DBUPGRADE_ERRMSG'] = "Fehler Meldung";
$content['LN_DBUPGRADE_ULTRASTATSDBVERSION'] = "LogAnalyzer Datenbank Version";

// Charts Options
$content['LN_CHARTS_CENTER'] = "Charts Optionen";
$content['LN_CHARTS_EDIT'] = "Chart bearbeiten";
$content['LN_CHARTS_DELETE'] = "Chart löschen";
$content['LN_CHARTS_ADD'] = "Neuen Chart hinzufuegen";
$content['LN_CHARTS_ADDEDIT'] = "Hinzufügen/Bearbeiten eines Charts";
$content['LN_CHARTS_NAME'] = "Name des Charts";
$content['LN_CHARTS_ENABLED'] = "Chart aktiviert";
$content['LN_CHARTS_ERROR_INVALIDORNOTFOUNDID'] = "Die Chart-ID is ungültig oder konnte nicht gefunden werden.";
$content['LN_CHARTS_ERROR_IDNOTFOUND'] = "Die Chart-ID konnte in der Datenbank nicht gefunden werden.";
$content['LN_CHARTS_WARNDELETESEARCH'] = "Sind Sie sicher, dass Sie den Chart '%1' löschen wollen? Dies kann nicht mehr rückgÄngig gemacht werden!";
$content['LN_CHARTS_ERROR_DELCHART'] = "Löschen des Chart mit der id '%1' fehlgeschlagen!";
$content['LN_CHARTS_ERROR_HASBEENDEL'] = "Der Chart '%1' wurde erfolgreich gelöscht!";
$content['LN_CHARTS_FILTERSTRING'] = "Custom Filter";
$content['LN_CHARTS_FILTERSTRING_HELP'] = "Use the same syntax as in the search field. For example if you want to generate a chart for 'server1', use this filter: source:=server1";
$content['LN_CHARTS_ERROR_CHARTIDNOTFOUND'] = "Error, ChartID with ID '%1' , was not found";
$content['LN_CHARTS_ERROR_SETTINGFLAG'] = "Error setting flag, invalid ChartID or operation.";
$content['LN_CHARTS_SETENABLEDSTATE'] = "Toggle Enabled State";

// Fields Options
$content['LN_FIELDS_CENTER'] = "Feld Options";
$content['LN_FIELDS_EDIT'] = "Feld Bearbeiten";
$content['LN_FIELDS_DELETE'] = "Feld löschen";
$content['LN_FIELDS_ADD'] = "Ein neues Feld hinzufügen";
$content['LN_FIELDS_ID'] = "Feld-ID";
$content['LN_FIELDS_NAME'] = "Anzeigename des Feldes";
$content['LN_FIELDS_DEFINE'] = "Interne Feld-ID";
$content['LN_FIELDS_DELETE_FROMDB'] = "Lösche des Feld aus der Datenbank";
$content['LN_FIELDS_ADDEDIT'] = "Hinzufügen/Bearbeiten des Feldes";
$content['LN_FIELDS_TYPE'] = "Feld-Typ";
$content['LN_FIELDS_ALIGN'] = "Ausrichtung der Liste";
$content['LN_FIELDS_SEARCHONLINE'] = "Aktiviere Online Suche";
$content['LN_FIELDS_DEFAULTWIDTH'] = "Zeilenhöhe in der Listenansicht";
$content['LN_FIELDS_ERROR_IDNOTFOUND'] = "Die Feld-ID konnte in der Datenbank oder in den Standardeinstellungen nicht gefunden werden.";
$content['LN_FIELDS_ERROR_INVALIDID'] = "Das Feld mit der ID '%1' ist kein gültiges Feld.";
$content['LN_FIELDS_SEARCHFIELD'] = "Name des Suchfilters";
$content['LN_FIELDS_WARNDELETESEARCH'] = "Sind Sie sicher, dass Sie das Feld '%1' löschen wollen? Dies kann nicht mehr rückgÄngig gemacht werden!";
$content['LN_FIELDS_ERROR_DELSEARCH'] = "Die Feld-ID konnte in der Datenbank nicht gefunden werden.";
$content['LN_FIELDS_ERROR_HASBEENDEL'] = "Das Feld '%1' wurde erfolgreich gelöscht!";
$content['LN_FIELDS_ERROR_FIELDCAPTIONEMPTY'] = "Die Inhalt des Feldes war leer. ";
$content['LN_FIELDS_ERROR_FIELDIDEMPTY'] = "Die ID des Feldes war leer. ";
$content['LN_FIELDS_ERROR_SEARCHFIELDEMPTY'] = "Der Suchfilter war leer. ";
$content['LN_FIELDS_ERROR_FIELDDEFINEEMPTY'] = "Die interne Feld-ID war leer. ";
$content['LN_FIELDS_HASBEENEDIT'] = "Die Konfiguration des Feldes %1' wurde erfolgreich geÄndert.";
$content['LN_FIELDS_HASBEENADDED'] = "Die Konfiguration des Feldes '%1' wurde erfolgreich hinzugefügt.";
$content['LN_FIELDS_'] = "";
$content['LN_ALIGN_CENTER'] = "zentriert";
$content['LN_ALIGN_LEFT'] = "links";
$content['LN_ALIGN_RIGHT'] = "rechts";
$content['LN_FILTER_TYPE_STRING'] = "Zeichenkette";
$content['LN_FILTER_TYPE_NUMBER'] = "Zahl";
$content['LN_FILTER_TYPE_DATE'] = "Datum";

// Parser Options
$content['LN_PARSERS_EDIT'] = "Bearbeiten eines Meldungs Parsers";
$content['LN_PARSERS_DELETE'] = "Löschen eines Meldungs Parsers";
$content['LN_PARSERS_ID'] = "Meldungs Parser ID";
$content['LN_PARSERS_NAME'] = "Melungs Parser Name";
$content['LN_PARSERS_DESCRIPTION'] = "Meldungs Parser Beschreibung";
$content['LN_PARSERS_ERROR_NOPARSERS'] = "Es konnte kein gültiger Meldungs Parser in Ihrer Installation gefunden werden. ";
$content['LN_PARSERS_HELP'] = "Hilfe";
$content['LN_PARSERS_HELP_CLICK'] = "Klicken Sie hier, um weitere Hilfe und Beschreibung zu erhalten";
$content['LN_PARSERS_INFO'] = "Details für diesen Meldungs Parser anzeigen.";
$content['LN_PARSERS_INIT'] = "Einstellungen für diesen Meldungs Parser.";
$content['LN_PARSERS_REMOVE'] = "Einstellungen für diesen Meldungs Parser entfernen.";
$content['LN_PARSERS_ERROR_IDNOTFOUND'] = "Es konnte kein Meldungs Parser mit der ID '%1' gefunden werden.";
$content['LN_PARSERS_ERROR_INVALIDID'] = "Ungültige Meldungs Parser id.";
$content['LN_PARSERS_DETAILS'] = "Details für diesen Meldungs Parser";
$content['LN_PARSERS_CUSTOMFIELDS'] = "Die folgenden benutzerdefinierten Felder werden von diesen Meldungs Parser benötigt.";
$content['LN_PARSERS_WARNREMOVE'] = "Sie sind dabei die benötigten Felder des Meldungs Parser '%1' zu löschen. Sie können jederzeit die Felder wieder hinzufügen, falls Sie Ihre Meinung Ändern sollten.";
$content['LN_PARSERS_ERROR_HASBEENREMOVED'] = "Alle Einstellungen ('%2' benutzerdefinierte Felder) für den Meldungs Parser '%1' wurden entfernt. ";
$content['LN_PARSERS_ERROR_HASBEENADDED'] = "Alle erforderlichen Einstellungen ('%2' benutzerdefinierte Felder) für den Meldungs Parser '%1' wurden hinzugefügt. ";
$content['LN_PARSERS_ERROR_NOFIELDS'] = "Der Meldungs Parser '%1' benötigt keine benutzerdefinierten Felder.";
$content['LN_PARSERSMENU_LIST'] = "List installed Message Parsers";
$content['LN_PARSERS_ONLINELIST'] = "All Available Parsers";
$content['LN_PARSERS_'] = "";

// Command Line stuff
$content['LN_CMD_NOOP'] = "Ein benötigter Parameter ist nicht vorhanden";
$content['LN_CMD_NOLOGSTREAM'] = "Der Logstrom-Quellen Parameter ist nicht vorhanden";
$content['LN_CMD_LOGSTREAMNOTFOUND'] = "Logstrom-Quelle mit der ID '%1' konnte in der Datenbank nicht gefunden werden!";
$content['LN_CMD_COULDNOTGETROWCOUNT'] = "Es konnte keine Zeileanzahl von der Logstrom-Quelle '%1' ermittelt werden.";
$content['LN_CMD_SUBPARAM1MISSING'] = "Unterparameter 1 ist nicht vorhanden, die Einstellung sollte 'all', 'since' or 'date' sein. Für mehr Details, sehen Sie bitte in der Dokumentation nach.";
$content['LN_CMD_WRONGSUBOPORMISSING'] = "Entweder eine Unterfunktion ist fehlerhaft, oder ein anderer Parameter fehlt";
$content['LN_CMD_FAILEDTOCLEANDATA'] = "Das löschen der Daten aus dem Logstrom '%1'. war nicht erfolgreich!";
$content['LN_CMD_CLEANINGDATAFOR'] = "Lösche Daten aus der Logstrom-Quelle '%1'.";
$content['LN_CMD_ROWSFOUND'] = "Erfolgreich Verbunden und '%1' Zeilen in der Logstom-Quelle gefunden.";
$content['LN_CMD_DELETINGOLDERTHEN'] = "Durchführen der Löschung aller EintrÄge, Älter als '%1'.";
$content['LN_CMD_DELETEDROWS'] = "'%1' erfolgreich gelöschte Zeilen aus der Logstrom-Quelle.'";
$content['LN_CMD_'] = "";

// Report Options
$content['LN_REPORTS_EDIT'] = "Edit Report";
$content['LN_REPORTS_DELETE'] = "Remove Report";
$content['LN_REPORTS_REQUIREDFIELDS'] = "Required Fields";
$content['LN_REPORTS_ERROR_NOREPORTS'] = "There were no valid reports found in your installation.";
$content['LN_REPORTS_INFO'] = "Show more Information";
$content['LN_REPORTS_INIT'] = "Initialize settings";
$content['LN_REPORTS_REMOVE'] = "Remove settings";
$content['LN_REPORTS_ERROR_IDNOTFOUND'] = "There was no report with ID '%1' found.";
$content['LN_REPORTS_ERROR_INVALIDID'] = "Invalid report id.";
$content['LN_REPORTS_DETAILS'] = "Details for this report";
$content['LN_REPORTS_WARNREMOVE'] = "You are about to remove the custom settings needed by the '%1' report. However you can add these settings again if you change your mind.";
$content['LN_REPORTS_ERROR_HASBEENREMOVED'] = "All settings for the report '%1' have been removed.";
$content['LN_REPORTS_ERROR_HASBEENADDED'] = "All required settings for the report '%1' have been added.";
$content['LN_REPORTS_ERROR_NOFIELDS'] = "The report '%1' does not have any custom settings which can be added.";
$content['LN_REPORTS_ERROR_REPORTDOESNTNEEDTOBEREMOVED'] = "The report '%1' does not need to be removed or initialized.";
$content['LN_REPORTS_REMOVESAVEDREPORT'] = "Remove Savedreport";
$content['LN_REPORTS_CUSTOMTITLE'] = "Report Title";
$content['LN_REPORTS_CUSTOMCOMMENT'] = "Comment / Description";
$content['LN_REPORTS_FILTERSTRING'] = "Filterstring";
$content['LN_REPORTS_OUTPUTFORMAT'] = "Outputformat";
$content['LN_REPORTS_OUTPUTTARGET'] = "Outputtarget";
$content['LN_REPORTS_HASBEENADDED'] = "The Savedreport '%1' has been successfully added.";
$content['LN_REPORTS_HASBEENEDIT'] = "The Savedreport '%1' has been successfully edited.";
$content['LN_REPORTS_SOURCEID'] = "Logstream source";
$content['LN_REPORTS_ERROR_SAVEDREPORTIDNOTFOUND'] = "There was no savedreport with ID '%1' found.";
$content['LN_REPORTS_ERROR_INVALIDSAVEDREPORTID'] = "Invalid savedreport id.";
$content['LN_REPORTS_WARNDELETESAVEDREPORT'] = "Are you sure that you want to delete the savedreport '%1'?";
$content['LN_REPORTS_ERROR_DELSAVEDREPORT'] = "Deleting of the savedreport with id '%1' failed!";
$content['LN_REPORTS_ERROR_HASBEENDEL'] = "The savedreport '%1' has been successfully deleted!";
$content['LN_REPORTS_FILTERLIST'] = "Filterlist";
$content['LN_REPORTS_FILTER'] = "Filter";
$content['LN_REPORTS_ADDFILTER'] = "Add filter";
$content['LN_REPORTS_FILTER_EDIT'] = "Edit filter";
$content['LN_REPORTS_FILTER_MOVEUP'] = "Move filter up";
$content['LN_REPORTS_FILTER_MOVEDOWN'] = "Move filter down";
$content['LN_REPORTS_FILTER_REMOVE'] = "Remove filter";
$content['LN_REPORTS_FILTEREDITOR'] = "Filtereditor";
$content['LN_REPORTS_FILTERSTRING_ONLYEDITIF'] = "Only edit raw filterstring if you know what you are doing! Note if you change the filterstring, any changes made in the Filtereditor will be lost!";
$content['LN_REPORTS_ADVANCEDFILTERS'] = "Advanced filters";
$content['LN_REPORTS_ADVANCEDFILTERLIST'] = "List of advanced report filters";
$content['LN_REPORTS_OUTPUTTARGET_DETAILS'] = "Outputtarget Options";
$content['LN_REPORTS_OUTPUTTARGET_FILE'] = "Output Path and Filename";
$content['LN_REPORTS_CRONCMD'] = "Local Report command";
$content['LN_REPORTS_LINKS'] = "Related Links";
$content['LN_REPORTS_INSTALLED'] = "Installed";
$content['LN_REPORTS_NOTINSTALLED'] = "Not installed";
$content['LN_REPORTS_DOWNLOAD'] = "Download Link";
$content['LN_REPORTS_SAMPLELINK'] = "Report Sample";
$content['LN_REPORTS_DETAILSFOR'] = "Details for '%1' report";
$content['LN_REPORTS_PERFORMANCE_WARNING'] = "Logstream Performance Warning";
$content['LN_REPORTS_OPTIMIZE_LOGSTREAMSOURCE'] = "Yes, optimize logstream source!";
$content['LN_REPORTS_OPTIMIZE_INDEXES'] = "The datasource '%1' is not optimized for this report. There is at least one INDEX missing. Creating INDEXES will speedup the report generation. <br><br>Do you want LogAnalyzer to create the necessary INDEXES now? This may take more then a few minutes, so please be patient!";
$content['LN_REPORTS_ERROR_FAILED_CREATE_INDEXES'] = "Failed to create INDEXES for datasource '%1' with error code '%2'";
$content['LN_REPORTS_INDEX_CREATED'] = "Logstream INDEXES created";
$content['LN_REPORTS_INDEX_CREATED_SUCCESS'] = "Successfully created all INDEXES for datasource '%1'.";
$content['LN_REPORTS_OPTIMIZE_TRIGGER'] = "The datasource '%1' does not have a TRIGGER installed to automatically generate the message checksum on INSERT. Creating the TRIGGER will speedup the report generation. <br><br>Do you want LogAnalyzer to create the TRIGGER now? ";
$content['LN_REPORTS_TRIGGER_CREATED'] = "Logstream TRIGGER created";
$content['LN_REPORTS_TRIGGER_CREATED_SUCCESS'] = "Successfully created TRIGGER for datasource '%1'.";
$content['LN_REPORTS_ERROR_FAILED_CREATE_TRIGGER'] = "Failed to create TRIGGER for datasource '%1' with error code '%2'";
$content['LN_REPORTS_CHANGE_CHECKSUM'] = "The Checksum field for datasource '%1' is not set to UNSIGNED INT. To get the report work properly, changing the CHECKSUM field to UNSIGNED INT is necessary! <br><br>Do you want LogAnalyzer to change the CHECKSUM field now? This may take more then a few minutes, so please be patient!";
$content['LN_REPORTS_ERROR_FAILED_CHANGE_CHECKSUM'] = "Failed to change the CHECKSUM field for datasource '%1' with error code '%2'";
$content['LN_REPORTS_CHECKSUM_CHANGED'] = "Checksum field changed";
$content['LN_REPORTS_CHECKSUM_CHANGED_SUCCESS'] = "Successfully changed the Checksum field for datasource '%1'.";
$content['LN_REPORTS_LOGSTREAM_WARNING'] = "Logstream Warning";
$content['LN_REPORTS_ADD_MISSINGFIELDS'] = "The datasource '%1' does not contain all necessary datafields There is at least one FIELD missing. <br><br>Do you want LogAnalyzer to create the missing datafields now?";
$content['LN_REPORTS_ERROR_FAILED_ADDING_FIELDS'] = "Failed adding missing datafields in datasource '%1' with error code '%2'";
$content['LN_REPORTS_FIELDS_CREATED'] = "Added missing datafields";
$content['LN_REPORTS_FIELDS_CREATED_SUCCESS'] = "Successfully added missing datafields for datasource '%1'.";
$content['LN_REPORTS_RECHECKLOGSTREAMSOURCE'] = "Do you want to check the current logstream source again?";
$content['LN_REPORTS_ADDSAVEDREPORT'] = "Add Savedreport and save changes";
$content['LN_REPORTS_EDITSAVEDREPORT'] = "Save changes";
$content['LN_REPORTS_ADDSAVEDREPORTANDRETURN'] = "Add Savedreport and return to reportlist";
$content['LN_REPORTS_EDITSAVEDREPORTANDRETURN'] = "Save changes and return to reportlist";
$content['LN_REPORTS_'] = "";

?>
