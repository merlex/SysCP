<?php
/**
 * filename: $Source$
 * begin: Friday, Aug 06, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Florian Lippert <flo@redenswert.de>
 * @copyright (C) 2003-2004 Florian Lippert
 * @package Panel
 * @version $Id$
 */

	define('AREA', 'admin');

	/**
	 * Include our init.php, which manages Sessions, Language etc.
	 */
	require("./lib/init.php");

	if( ($page == 'settings' || $page == 'overview') && $userinfo['change_serversettings'] == '1')
	{
		if(isset($_POST['send']) && $_POST['send']=='send')
		{
			if($_POST['session_sessiontimeout']!=$settings['session']['sessiontimeout'])
			{
//				echo 'session_sessiontimeout<br />';
				$value=addslashes($_POST['session_sessiontimeout']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='session' AND `varname`='sessiontimeout'");
			}

			if($_POST['email_catachallkeyword']!=$settings['email']['catchallkeyword'])
			{
//				echo 'email_catachallkeyword<br />';
				$value=addslashes($_POST['email_catachallkeyword']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='email' AND `varname`='catchallkeyword'");
			}

			if($_POST['customer_accountprefix']!=$settings['customer']['accountprefix'])
			{
//				echo 'customer_accountprefix<br />';
				$value=addslashes($_POST['customer_accountprefix']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='customer' AND `varname`='accountprefix'");
			}

			if($_POST['customer_mysqlprefix']!=$settings['customer']['mysqlprefix'])
			{
//				echo 'customer_mysqlprefix<br />';
				$value=addslashes($_POST['customer_mysqlprefix']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='customer' AND `varname`='mysqlprefix'");
			}

			if($_POST['customer_ftpprefix']!=$settings['customer']['ftpprefix'])
			{
//				echo 'customer_ftpprefix<br />';
				$value=addslashes($_POST['customer_ftpprefix']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='customer' AND `varname`='ftpprefix'");
			}

			if($_POST['system_documentroot_prefix']!=$settings['system']['documentroot_prefix'])
			{
//				echo 'system_documentroot_prefix<br />';
				$value=addslashes($_POST['system_documentroot_prefix']);
				$value=makeCorrectDir($value);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='documentroot_prefix'");
			}

			if($_POST['system_logfiles_directory']!=$settings['system']['logfiles_directory'])
			{
//				echo 'system_logfiles_directory<br />';
				$value=addslashes($_POST['system_logfiles_directory']);
				$value=makeCorrectDir($value);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='logfiles_directory'");
			}

			if($_POST['system_ipaddress']!=$settings['system']['ipaddress'])
			{
//				echo 'system_ipaddress<br />';
				$value=addslashes($_POST['system_ipaddress']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='ipaddress'");
				inserttask('1');
			}

			if($_POST['system_hostname']!=$settings['system']['hostname'])
			{
//				echo 'system_hostname<br />';
				$value=addslashes($_POST['system_hostname']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='hostname'");
				inserttask('1');
			}

			if($_POST['system_apacheconf_directory']!=$settings['system']['apacheconf_directory'])
			{
//				echo 'system_apacheconf_directory<br />';
				$value=addslashes($_POST['system_apacheconf_directory']);
				$value=makeCorrectDir($value);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='apacheconf_directory'");
				inserttask('1');
			}

			if($_POST['system_apachereload_command']!=$settings['system']['apachereload_command'])
			{
//				echo 'system_apachereload_command<br />';
				$value=addslashes($_POST['system_apachereload_command']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='apachereload_command'");
				inserttask('1');
			}

			if($_POST['system_bindconf_directory']!=$settings['system']['bindconf_directory'])
			{
//				echo 'system_bindconf_directory<br />';
				$value=addslashes($_POST['system_bindconf_directory']);
				$value=makeCorrectDir($value);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='bindconf_directory'");
			}

			if($_POST['system_bindreload_command']!=$settings['system']['bindreload_command'])
			{
//				echo 'system_bindreload_command<br />';
				$value=addslashes($_POST['system_bindreload_command']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='bindreload_command'");
			}

			if($_POST['system_binddefaultzone']!=$settings['system']['binddefaultzone'])
			{
//				echo 'system_binddefaultzone<br />';
				$value=addslashes($_POST['system_binddefaultzone']);
				$value=htmlentities($value);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='binddefaultzone'");
			}

			if($_POST['system_vmail_uid']!=$settings['system']['vmail_uid'])
			{
//				echo 'system_vmail_uid<br />';
				$value=addslashes($_POST['system_vmail_uid']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='vmail_uid'");
			}

			if($_POST['system_vmail_gid']!=$settings['system']['vmail_gid'])
			{
//				echo 'system_vmail_gid<br />';
				$value=addslashes($_POST['system_vmail_gid']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='vmail_gid'");
			}

			if($_POST['system_vmail_homedir']!=$settings['system']['vmail_homedir'])
			{
//				echo 'system_vmail_homedir<br />';
				$value=addslashes($_POST['system_vmail_homedir']);
				$value=makeCorrectDir($value);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='system' AND `varname`='vmail_homedir'");
			}

			if($_POST['panel_adminmail']!=$settings['panel']['adminmail'])
			{
//				echo 'panel_adminmail<br />';
				$value=addslashes($_POST['panel_adminmail']);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='panel' AND `varname`='adminmail'");
			}

			if($_POST['panel_phpmyadmin_url']!=$settings['panel']['phpmyadmin_url'])
			{
//				echo 'panel_phpmyadmin_url<br />';
				$value=addslashes($_POST['panel_phpmyadmin_url']);
				if ($settings['panel']['phpmyadmin_url'] != '')
				{
					// delete or update menu
					if ($value == '')
					{
						//delete
						$query = 
							'DELETE FROM `'.TABLE_PANEL_NAVIGATION.'` ' .
							'WHERE `url`="'.$settings['panel']['phpmyadmin_url'].'"';
					}
					else
					{
						//update
						$query =
							'UPDATE `'.TABLE_PANEL_NAVIGATION.'` ' .
							'SET `url`="'.$value.'" ' .
							'WHERE `url`="'.$settings['panel']['phpmyadmin_url'].'"';
					} 
				}
				else
				{
					// insert into menu
						// get parent_id
					$query =
						'SELECT `id` ' .
						'FROM `'.TABLE_PANEL_NAVIGATION.'` ' .
						'WHERE `lang` = "menue;mysql;mysql"';
					$parent_id = $db->query_first($query);
					$parent_id = $parent_id['id'];
						// generate insert
					$query =
						'INSERT INTO `'.TABLE_PANEL_NAVIGATION.'` ' .
						'SET `lang`      = "menue;mysql;phpmyadmin", ' .
						'    `url`       = "'.$value.'", ' .
						'    `area`      = "customer", ' .
						'    `parent_id` = "'.$parent_id.'"';
				}
				$db->query($query);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='panel' AND `varname`='phpmyadmin_url'");
			}

			if($_POST['panel_webmail_url']!=$settings['panel']['webmail_url'])
			{
//				echo 'panel_webmail_url<br />';
				$value=addslashes($_POST['panel_webmail_url']);
				if ($settings['panel']['webmail_url'] != '')
				{
					// delete or update menu
					if ($value == '')
					{
						//delete
						$query = 
							'DELETE FROM `'.TABLE_PANEL_NAVIGATION.'` ' .
							'WHERE `url`="'.$settings['panel']['webmail_url'].'"';
					}
					else
					{
						//update
						$query =
							'UPDATE `'.TABLE_PANEL_NAVIGATION.'` ' .
							'SET `url`="'.$value.'" ' .
							'WHERE `url`="'.$settings['panel']['webmail_url'].'"';
					} 
				}
				else
				{
					// insert into menu
						// get parent_id
					$query =
						'SELECT `id` ' .
						'FROM `'.TABLE_PANEL_NAVIGATION.'` ' .
						'WHERE `lang` = "menue;email;email"';
					$parent_id = $db->query_first($query);
					$parent_id = $parent_id['id'];
						// generate insert
					$query =
						'INSERT INTO `'.TABLE_PANEL_NAVIGATION.'` ' .
						'SET `lang`      = "menue;email;webmail", ' .
						'    `url`       = "'.$value.'", ' .
						'    `area`      = "customer", ' .
						'    `parent_id` = "'.$parent_id.'"';
				}
				$db->query($query);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='panel' AND `varname`='webmail_url'");
			}

			if($_POST['panel_webftp_url']!=$settings['panel']['webftp_url'])
			{
//				echo 'panel_webftp_url<br />';
				$value=addslashes($_POST['panel_webftp_url']);
				if ($settings['panel']['webftp_url'] != '')
				{
					// delete or update menu
					if ($value == '')
					{
						//delete
						$query = 
							'DELETE FROM `'.TABLE_PANEL_NAVIGATION.'` ' .
							'WHERE `url`="'.$settings['panel']['webftp_url'].'"';
					}
					else
					{
						//update
						$query =
							'UPDATE `'.TABLE_PANEL_NAVIGATION.'` ' .
							'SET `url`="'.$value.'" ' .
							'WHERE `url`="'.$settings['panel']['webftp_url'].'"';
					} 
				}
				else
				{
					// insert into menu
						// get parent_id
					$query =
						'SELECT `id` ' .
						'FROM `'.TABLE_PANEL_NAVIGATION.'` ' .
						'WHERE `lang` = "menue;ftp;ftp"';
					$parent_id = $db->query_first($query);
					$parent_id = $parent_id['id'];
						// generate insert
					$query =
						'INSERT INTO `'.TABLE_PANEL_NAVIGATION.'` ' .
						'SET `lang`      = "menue;ftp;webftp", ' .
						'    `url`       = "'.$value.'", ' .
						'    `area`      = "customer", ' .
						'    `parent_id` = "'.$parent_id.'"';
				}
				$db->query($query);
				$db->query("UPDATE `".TABLE_PANEL_SETTINGS."` SET `value`='$value' WHERE `settinggroup`='panel' AND `varname`='webftp_url'");
			}

			header("Location: $filename?page=$page&s=$s");
		}
		else
		{
			eval("echo \"".getTemplate("settings/settings")."\";");
		}
	}

?>
