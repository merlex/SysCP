		<table cellpadding="5" cellspacing="4" border="0" align="center" class="maintable_60">
			<tr>
				<td class="maintitle" align="center" colspan="3">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['configfiles']['serverconfiguration']}</b> 
					[<a href="$filename?page=overview&part=all&amp;s=$s">{$lng['admin']['configfiles']['overview']}</a>]
				</td>
			</tr>
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['panelsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap"></td>
				<td class="main_field_display_small" nowrap="nowrap"><a href="$filename?page=overview&part=panel&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></td>
			</tr>
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['accountsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap"></td>
				<td class="main_field_display_small" nowrap="nowrap"><a href="$filename?page=overview&part=accounts&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></td>
			</tr>
			<tr>
				<td class="maintitle_apply_left">                        
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['systemsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap"></td>
				<td class="main_field_display_small" nowrap="nowrap"><a href="$filename?page=overview&part=system&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></td>
			</tr>
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['webserversettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap"></td>
				<td class="main_field_display_small" nowrap="nowrap"><a href="$filename?page=overview&part=webserver&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></td>
			</tr>
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['statisticsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap"></td>
				<td class="main_field_display_small" nowrap="nowrap"><a href="$filename?page=overview&part=statistic&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></td>
			</tr>
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['mailserversettings']}</b>
 				</td>
				<td class="main_field_display_small" nowrap="nowrap"></td>
				<td class="main_field_display_small" nowrap="nowrap"><a href="$filename?page=overview&part=mail&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></td>
			</tr>   
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['nameserversettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap"></td>
				<td class="main_field_display_small" nowrap="nowrap"><a href="$filename?page=overview&part=nameserver&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></td>
			</tr>   
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['loggersettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap">{$lng['admin']['activated']}:&nbsp;$loggingenabled</td>
				<td class="main_field_display_small" nowrap="nowrap"><if $settings['logger']['enabled'] == '1'><a href="$filename?page=overview&part=logging&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></if></td>
			</tr>   
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['dkimsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap">{$lng['admin']['activated']}:&nbsp;$dkimenabled</td>
				<td class="main_field_display_small" nowrap="nowrap"><if $settings['dkim']['use_dkim'] == '1'><a href="$filename?page=overview&part=dkim&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></if></td>
			</tr>   
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['ticketsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap">{$lng['admin']['activated']}:&nbsp;$ticketsystemenabled</td>
				<td class="main_field_display_small" nowrap="nowrap"><if $settings['ticket']['enabled'] == '1'><a href="$filename?page=overview&part=ticket&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></if></td>
			</tr> 
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['sslsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap">{$lng['admin']['activated']}:&nbsp;$ssl_enabled</td>
				<td class="main_field_display_small" nowrap="nowrap"><if $settings['system']['use_ssl'] == '1'><a href="$filename?page=overview&part=ssl&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></if></td>
			</tr> 
			<tr>
				<td class="maintitle_apply_left">
					<b><img src="images/title.gif" alt="" />&nbsp;{$lng['admin']['billingsettings']}</b>
				</td>
				<td class="main_field_display_small" nowrap="nowrap">{$lng['admin']['activated']}:&nbsp;$billing_activate_billing</td>
				<td class="main_field_display_small" nowrap="nowrap"><if $settings['billing']['activate_billing'] == '1'><a href="$filename?page=overview&part=billing&amp;s=$s">{$lng['admin']['configfiles']['serverconfiguration']}</a></if></td>
			</tr> 
			<tr>
				<td class="maintitle_apply_right" nowrap="nowrap" colspan="3">
					<input class="bottom" type="reset" value="{$lng['panel']['reset']}" /><input class="bottom" type="submit" value="{$lng['panel']['save']}" />
				</td>
			</tr>
		</table>
