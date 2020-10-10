<?php
/*
	*********************************************************************
	* LogAnalyzer - http://loganalyzer.adiscon.com
	* -----------------------------------------------------------------	*
	* LogStream Parser is used to split syslog messages into fields		*
	*																	*
	* All directives are explained within this file						*
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
	* 
	* Adiscon LogAnalyzer is also available under a commercial license.
	* For details, contact info@adiscon.com or visit
	* http://loganalyzer.adiscon.com/commercial
	*********************************************************************
*/

// --- Avoid directly accessing this file! 
if ( !defined('IN_PHPLOGCON') )
{
	die('Hacking attempt');
	exit;
}
// --- 

// --- Basic Includes
require_once($gl_root_path . 'classes/enums.class.php');
require_once($gl_root_path . 'include/constants_errors.php');
require_once($gl_root_path . 'include/constants_logstream.php');
// --- 


class LogStreamLineParserwinsyslog extends LogStreamLineParser {
//	protected $_arrProperties = null;

	// Constructor
	public function __construct () {
		return; // Nothing
	}
	public function LogStreamLineParserwinsyslog() {
		self::__construct();
	}

	/**
	* ParseLine
	*
	* @param arrArguments array in&out: properties of interest. There can be no guarantee the logstream can actually deliver them.
	* @return integer Error stat
	*/
	public function ParseLine($szLine, &$arrArguments)
	{
		global $content; 

		// Set IUT Property first!
		$arrArguments[SYSLOG_MESSAGETYPE] = IUT_Syslog;

		// Sample (WinSyslog/EventReporter): 2008-04-02,15:19:06,2008-04-02,15:19:06,127.0.0.1,16,5,EvntSLog: Performance counters for the RSVP (QoS RSVP) service were loaded successfully. 
		if ( preg_match("/([0-9]{4,4}-[0-9]{1,2}-[0-9]{1,2}.[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}),([0-9]{4,4}-[0-9]{1,2}-[0-9]{1,2}.[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}),(.*?),([0-9]{1,2}),([0-9]{1,2}),(.*?):(.*?)$/", $szLine, $out ) )
		{
			// Copy parsed properties!
			$arrArguments[SYSLOG_DATE] = GetEventTime($out[1]);
			$arrArguments[SYSLOG_HOST] = $out[3];
			$arrArguments[SYSLOG_FACILITY] = $out[4];
			$arrArguments[SYSLOG_SEVERITY] = $out[5];
			$arrArguments[SYSLOG_SYSLOGTAG] = $out[6];
			$arrArguments[SYSLOG_MESSAGE] = $out[7];
		}
		else if ( preg_match("/([0-9]{4,4}-[0-9]{1,2}-[0-9]{1,2}.[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}),([0-9]{4,4}-[0-9]{1,2}-[0-9]{1,2}.[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}),(.*?),([0-9]{1,2}),([0-9]{1,2}),(.*?)$/", $szLine, $out ) )
		{
			// Copy parsed properties!
			$arrArguments[SYSLOG_DATE] = GetEventTime($out[1]);
			$arrArguments[SYSLOG_HOST] = $out[3];
			$arrArguments[SYSLOG_FACILITY] = $out[4];
			$arrArguments[SYSLOG_SEVERITY] = $out[5];
			$arrArguments[SYSLOG_MESSAGE] = $out[6];
		}
		else
		{
			if ( isset($arrArguments[SYSLOG_MESSAGE]) && strlen($arrArguments[SYSLOG_MESSAGE]) > 0 ) 
				OutputDebugMessage("Unparseable Winsyslog message - '" . $arrArguments[SYSLOG_MESSAGE] . "'", DEBUG_ERROR);
		}
		
		// If SyslogTag is set, we check for MessageType!
		if ( isset($arrArguments[SYSLOG_SYSLOGTAG]) )
		{
			if ( strpos($arrArguments[SYSLOG_SYSLOGTAG], "EvntSLog" ) !== false ) 
				$arrArguments[SYSLOG_MESSAGETYPE] = IUT_NT_EventReport;
		}
		
		// Return success!
		return SUCCESS;
	}


}

?>