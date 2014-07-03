<?php

$german = array(
	'admin:administer_utilities:elggx_userpoints' => 'Elggx Userpoints',
	'item:object:userpoint' => 'Aktivitätspunkte',
	'elggx_userpoints:admin_settings' => 'Konfiguration des Elggx Userpoints-Plugins',
	'elggx_userpoints:settings' => 'Plugin-Einstellungen',
	'elggx_userpoints:actions' => 'Punkte-Konfiguration',
	'elggx_userpoints:list' => 'Liste',
	'elggx_userpoints:user' => 'Benutzer',
	'elggx_userpoints:action' => 'Aktivität',
	'elggx_userpoints:reset' => 'Zurücksetzen',
	'elggx_userpoints:restore' => 'Wiederherstellen',
	'elggx_userpoints:restore_all' => 'Aktivitätspunkte aller Benutzer wiederherstellen',
	'elggx_userpoints:restore_help' => 'Manchmal kann es durch eine kleine Störung auf dem Server dazu kommen, dass der Metadata-Eintrag, in dem die Aktivitärspunkte eines Benutzers in der Datenbank gespeichert sind, beschädigt wird (auf der Profilseite wird anstatt der Aktivitätspunkte nur "Array" angezeigt). Wenn der Metadata-Eintrag eines Benutzers einmal beschädigt ist, schlagen alle danach stattfindenden Versuche, neue Benutzerpunkte zu diesem Metadata-Eintrag zu addieren fehl (stattdessen resultieren sie in einem Internal Server Error 500). Das Wiederherstellen der im Metadata-Eintrag hinterlegten Anzahl der Aktivitätspunkte ist möglich, indem die im einzelnen erhaltenen Aktivitätspunkte dieses Benutzers neu aufsummiert werden.<br><b> Bitte gebe dazu den Benutzernamen des Benutzeraccounts ein, dessen Aktivitätspunkte Du wiederherstellen willst: </b>',
	'elggx_userpoints:restore_all_help' => 'Wenn die Metadata-Einträge vieler Benutzer beschädigt sind, kannst Du auch die Metadata-Einträge aller Benutzer Deiner Seite wiederherstellen lassen (Warnung: bei einer großen Anzahl an Benutzern kann dies eine Weile dauern): ',
	'elggx_userpoints:detail' => 'Details',
	'elggx_userpoints:awarded_for' => 'verdient für',
	'elggx_userpoints:moderate' => 'Freigeben',
	'elggx_userpoints:moderate_empty' => 'Es warten keine Aktivitätspunkte auf die Freigabe.',
	'elggx_userpoints:approved_empty' => 'Dieser Benutzer hat sich noch keine Aktivitätspunkte verdient.',
	'elggx_userpoints:add' => 'Punkte hinzufügen',
	'elggx_userpoints:userpoints' => 'Aktivitätspunkte',
	'elggx_userpoints:admin' => 'Userpoints-Administration',
	'elggx_userpoints:admin_settings' => 'Userpoints-Einstellungen bearbeiten',
	'elggx_userpoints:pending' => 'Ausstehende Freigaben',
	'elggx_userpoints:pending_message' => 'Du hast %d %s verdient (Freigabe steht noch aus).',
	'elggx_userpoints:awarded_message' => 'Du hast %d %s verdient.',
	'elggx_userpoints:total' => 'Gesamt',
	'elggx_userpoints:approved' => 'Freigeben',
	'elggx_userpoints:approved_message' => 'Die %s wurden freigegeben.',
	'elggx_userpoints:denied' => 'Verweigern',
	'elggx_userpoints:denied_message' => 'Die %s wurden verweigert.',
	'elggx_userpoints:delete' => 'Löschen',
	'elggx_userpoints:deleteconfirm' => 'Bist Du sicher, dass Du diese Aktivitätspunkte löschen willst?',
	'elggx_userpoints:delete_success' => 'Die Aktivitätspunkte wurden gelöscht.',
	'elggx_userpoints:settings:expire_after' => 'Aktivitätspunkte nach einer bestimmten Zeit verfallen lassen? ',
	'elggx_userpoints:settings:expire_after:help' => 'Voraussetzung dafür ist, dass das Expirationdate-Plugin installiert ist und die Elgg-Cronjobs konfiguriert sind.',
	'elggx_userpoints:upperplural' => 'Punkte',
	'elggx_userpoints:lowerplural' => 'Punkte',
	'elggx_userpoints:lowersingular' => 'Punkt',
	'elggx_userpoints:settings:yes' => 'Ja',
	'elggx_userpoints:settings:no' => 'Nein',
	'elggx_userpoints:settings:moderated' => 'Manuelle Freigabe notwendig',
	'elggx_userpoints:settings:approved' => 'Automatisch freigeben',
	'elggx_userpoints:settings:save:ok' => 'Die Einstellungen für das Elggx Userpoints-Plugin wurden gespeichert.',
	'elggx_userpoints:settings:transaction_status' => 'Transaktionsstatus? ',
	'elggx_userpoints:settings:transaction_status_info' => 'Lege fest, ob Aktivitätspunkte automatisch freigegeben werden sollen oder ob eine manuelle Freigabe durch einen Administrator erfolgen soll.',
	'elggx_userpoints:settings:subtract' => 'Dürfen Aktivitätspunkte abgezogen werden? ',
	'elggx_userpoints:settings:delete' => 'Dürfen Aktivitätspunkte gelöscht werden? ',
	'elggx_userpoints:settings:delete:note' => 'Anmerkung: die Punkte, die für Elgg-Annotations (z.B. Kommentare) vergeben wurden, können nicht gelöscht werden.',
	'elggx_userpoints:settings:displaymessage' => 'Soll eine Statusnachricht eingeblendet werden, wenn Punkte vergeben werden? ',
	'elggx_userpoints:settings:never' => 'Nie',
	'elggx_userpoints:settings:1_hour' => '1 Stunde',
	'elggx_userpoints:settings:1_day' => '1 Tag',
	'elggx_userpoints:settings:1_week' => '1 Woche',
	'elggx_userpoints:settings:2_weeks' => '2 Wochen',
	'elggx_userpoints:settings:4_weeks' => '4 Wochen',
	'elggx_userpoints:settings:365_days' => '365 Tage',
	'elggx_userpoints:settings:toppoints:num' => 'Anzahl der anzuzeigenden Mitglieder',
	'elggx_userpoints:settings:profile_display' => 'Aktivitätspunkte auf der Profilseite der Mitglieder anzeigen? ',
	'elggx_userpoints:toppoints' => 'Top-Punktesammler',
	'elggx_userpoints:add:user' => 'Benutzername:',
	'elggx_userpoints:add:description' => 'Beschreibung:',
	'elggx_userpoints:add:success' => '%d %s wurden dem Benutzer %s gutgeschrieben.',
	'elggx_userpoints:reset:confirm' => 'Bist Du sicher, dass Du die Aktivitätspunkte von %s auf null zurücksetzen willst?',
	'elggx_userpoints:reset:success' => '%s wurde zurückgesetzt.',
	'elggx_userpoints:restore:confirm' => 'Bist Du sicher, dass Du die Aktivitätspunkte von %s wiederherstellen willst?',
	'elggx_userpoints:restore:success' => 'Aktivitätspunkte von %s wurden wiederhergestellt.',
	'elggx_userpoints:restore:error' => '%s ist kein gültiger Benutzername.',
	'elggx_userpoints:restore_all:confirm' => 'Bist Du sicher, dass Du die Aktivitätspunkte aller Benutzer wiederherstellen willst?',
	'elggx_userpoints:restore_all:success' => 'Aktivitätspunkte aller Benutzer wurden wiederhergestellt.',
	'elggx_userpoints:reset:all' => 'Alle Aktivitätspunkte zurücksetzen',
	'elggx_userpoints:reset:all:confirm' => 'Bist Du sicher, dass Du die Aktivitätspunkte aller Benutzer auf null zurücksetzen willst?',
	'elggx_userpoints:widget:toppoints:info' => 'Dieses Widget zeigt die Benutzer mit den meisten Aktivitätspunkten an.',

	'userpoints_standard:invitesettings' => 'Einstellungen für Einladungen',
	'userpoints_standard:misc' => 'Verschiedenes',
	'userpoints_standard:loginsettings' => 'Einstellungen für die Anmeldung',
	'userpoints_standard:activities' => 'Allgemeine Aktivitäten',
	'userpoints_standard:classifieds' => 'Classifieds-Plugin',
	'userpoints_standard:add_classified' => 'Anzeige hinzufügen',
	'userpoints_standard:izap_videos' => 'Izap Videos-Plugin',
	'userpoints_standard:add_video' => 'Video hinzufügen',
	'userpoints_standard:tidypics' => 'Tidypics-Plugin',
	'userpoints_standard:fivestar' => 'Elggx Fivestar-Plugin',
	'userpoints_standard:fivestar_vote' => 'Punkte für die Stimmabgabe:',
	'userpoints_standard:recommendations' => 'Recommendations-Plugin',
	'userpoints_standard:recommendations:points' => 'Punkte für die Abgabe einer Empfehlung:',
	'userpoints_standard:recommendations:approve' => 'Manuelle Punkte-Freigabe erforderlich:',
	'userpoints_standard:friend' => 'Punkte für das Schließen von Freundschaften mit anderen Benutzern:',
	'userpoints_standard:blog' => 'Punkte für die Veröffentlichung einen Blog-Eintrags:',
	'userpoints_standard:file' => 'Punkte für das Hochladen einer Datei:',
	'userpoints_standard:bookmarks' => 'Punkte für das Hinzufügen eines Bookmarks:',
	'userpoints_standard:invited' => 'Einladen eines Freundes zum Beitritt auf der Seite',
	'userpoints_standard:verify_email' => 'Email-Adressen von eingeladenen Freunden validieren?',
	'userpoints_standard:group' => 'Punkte für das Gründen einer Gruppe:',
	'userpoints_standard:profile' => 'Punkte für das Editieren der Profilinformationen:',
	'userpoints_standard:profileicon' => 'Punkte für das Hochladen eines Profilbildes:',
	'userpoints_standard:messageboard' => 'Punkte für das Schreiben einer Nachricht auf Nachrichten-Pinnwänden:',
	'userpoints_standard:page_top' => 'Punkte für das Hinzufügen einer Coop-Seite:',
	'userpoints_standard:likes' => 'Punkte für das "Gefällt mir"-Markieren von Einträgen:',
	'userpoints_standard:create_album' => 'Punkte für das Hinzufügen eines Bilderalbums:',
	'userpoints_standard:upload_photo' => 'Punkte für das Hochladen eines Bildes:',
	'userpoints_standard:comment' => 'Punkte für das Verfassen eines Kommentars:',
	'userpoints_standard:polls' => 'Polls-Plugin',
	'userpoints_standard:poll' => 'Punkte für das Starten einer Rundfrage:',
	'userpoints_standard:pollvote' => 'Punkte für die Stimmabgabe in einer Rundfrage:',
	'userpoints_standard:login' => 'Punkte für das Anmelden:',
	'userpoints_standard:phototag' => 'Punkte für das Taggen eines Bildes:',
	'userpoints_standard:riverpost' => 'Punkte für das Schreiben eines River-Eintrages:',
	'userpoints_standard:thewire' => 'Punkte fur das Verfassen eines Eintrages im Heißen Draht:',
	'userpoints_standard:groupforumtopic' => 'Punkte für das Starten einer neuen Gruppen-Diskussion:',
	'userpoints_standard:group_topic_post' => 'Punkte für das Kommentieren in einer Gruppen-Diskussion:',
	'userpoints_standard:invite' => 'Punkte für das Einladen eines Freundes:',
	'userpoints_standard:expire_invite' => 'Punkte für ausstehende Einladungen verfallen bzw. erneute Einladung erlauben nach:',
	'userpoints_standard:require_registration' => 'Accountregistrierung von eingeladenen Freunden notwendig?',
	'userpoints_standard:login_threshold' => 'Wartezeit bevor wieder Punkte vergeben werden?',
	'userpoints_standard:login_interval' => 'Maximal erlaubte Anzahl an Tagen zwischen Anmeldungen damit Punkte vergeben werden:',
	'userpoints_standard:1hour' => '1 Stunde',
	'userpoints_standard:4hours' => '4 Stunden',
	'userpoints_standard:8hours' => '8 Stunden',
	'userpoints_standard:12hours' => '12 Stunden',
	'userpoints_standard:1day' => '1 Tag',
	'userpoints_standard:1week' => '1 Woche',
	'userpoints_standard:1month' => '1 Monat',
	'userpoints_standard:delete' => 'Aktivitätspunkte löschen, wenn die zugehörigen Inhalte von der Seite gelöscht werden?'
);

add_translation("de", $german);