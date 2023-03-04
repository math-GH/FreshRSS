<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'archiving' => array(
		'_' => 'Archivierung',
		'exception' => 'Archivierungsausnahmen',
		'help' => 'Weitere Optionen sind in den Einstellungen der individuellen Feeds verfügbar.',
		'keep_favourites' => 'Lieblingsartikel behalten',
		'keep_labels' => 'Artikel mit Label behalten',
		'keep_max' => 'Maximale Anzahl an Artikeln die behalten werden',
		'keep_min_by_feed' => 'Minimale Anzahl an Artikeln, die pro Feed behalten werden',
		'keep_period' => 'Maximales Alter der zu behaltenden Artikel',
		'keep_unreads' => 'Ungelesene Artikel behalten',
		'maintenance' => 'Wartung',
		'optimize' => 'Datenbank optimieren',
		'optimize_help' => 'Sollte gelegentlich durchgeführt werden, um die Größe der Datenbank zu reduzieren.',
		'policy' => 'Archivierungsrichtlinien',
		'policy_warning' => 'Ohne Archivierungsrichtlinien werden alle Artikel behalten',
		'purge_now' => 'Jetzt bereinigen',
		'title' => 'Archivierung',
		'ttl' => 'Aktualisiere automatisch nicht öfter als',
	),
	'display' => array(
		'_' => 'Anzeige',
		'darkMode' => 'Automatic dark mode (beta)',	// TODO
		'icon' => array(
			'bottom_line' => 'Fußzeile',
			'display_authors' => 'Autoren',
			'entry' => 'Artikel-Symbole',
			'publication_date' => 'Datum der Veröffentlichung',
			'related_tags' => 'Hashtags',
			'sharing' => 'Teilen',
			'summary' => 'Zusammenfassung',
			'top_line' => 'Kopfzeile',
		),
		'language' => 'Sprache',
		'notif_html5' => array(
			'seconds' => 'Sekunden (0 bedeutet keine Zeitüberschreitung)',
			'timeout' => 'Zeitüberschreitung für HTML5-Benachrichtigung',
		),
		'show_nav_buttons' => 'Zeige Navigations-Buttons',
		'theme' => array(
			'_' => 'Layout',
			'deprecated' => array(
				'_' => 'Veraltet',
				'description' => 'Diese Layout wird nicht mehr länger aktualisiert und wir in einer <a href="https://freshrss.github.io/FreshRSS/en/users/05_Configuration.html#theme" target="_blank">zukünftigen Version von FreshRSS</a> entfernt sein.',
			),
		),
		'theme_not_available' => 'Das Erscheinungsbild „%s“ ist nicht mehr verfügbar. Bitte ein anderes auswählen.',
		'thumbnail' => array(
			'label' => 'Vorschaubild',
			'landscape' => 'Querformat',
			'none' => 'Keins',
			'portrait' => 'Hochformat',
			'square' => 'Quadrat',
		),
		'timezone' => 'Time zone',	// TODO
		'title' => 'Anzeige',
		'website' => array(
			'full' => 'Icon and name',	// TODO
			'icon' => 'Icon only',	// TODO
			'label' => 'Website',	// TODO
			'name' => 'Name only',	// TODO
			'none' => 'None',	// TODO
		),
		'width' => array(
			'content' => 'Inhaltsbreite',
			'large' => 'Groß',
			'medium' => 'Mittel',
			'no_limit' => 'Keine Begrenzung',
			'thin' => 'Klein',
		),
	),
	'logs' => array(
		'loglist' => array(
			'level' => 'Log Stufe',
			'message' => 'Log Nachricht',
			'timestamp' => 'Zeitstempel',
		),
		'pagination' => array(
			'first' => 'Erste',
			'last' => 'Letzte',
			'next' => 'Nächste',
			'previous' => 'Vorherige',
		),
	),
	'profile' => array(
		'_' => 'Profil-Verwaltung',
		'api' => 'API-Verwaltung',
		'delete' => array(
			'_' => 'Accountlöschung',
			'warn' => 'Dieser Account und alle damit bezogenen Daten werden gelöscht.',
		),
		'email' => 'E-Mail-Adresse',
		'password_api' => 'Passwort-API<br /><small>(z.B. für mobile Anwendungen)</small>',
		'password_form' => 'Passwort<br /><small>(für die Anmeldemethode per Webformular)</small>',
		'password_format' => 'mindestens 7 Zeichen',
		'title' => 'Profil',
	),
	'query' => array(
		'_' => 'Benutzerabfragen',
		'deprecated' => 'Diese Abfrage ist nicht länger gültig. Die referenzierte Kategorie oder der Feed ist gelöscht worden.',
		'filter' => array(
			'_' => 'Angewendeter Filter:',
			'categories' => 'Nach Kategorie filtern',
			'feeds' => 'Nach Feed filtern',
			'order' => 'Nach Datum sortieren',
			'search' => 'Suchbegriff',
			'state' => 'Eigenschaft',
			'tags' => 'Nach Labels filtern',
			'type' => 'Filter-Typ',
		),
		'get_all' => 'Alle Artikel anzeigen',
		'get_category' => 'Kategorie „%s“ anzeigen',
		'get_favorite' => 'Lieblingsartikel anzeigen',
		'get_feed' => 'Feed „%s“ anzeigen',
		'name' => 'Name',	// IGNORE
		'no_filter' => 'Kein Filter',
		'number' => 'Abfrage Nr. %d',
		'order_asc' => 'Älteste Artikel zuerst anzeigen',
		'order_desc' => 'Neueste Artikel zuerst anzeigen',
		'search' => 'Suche nach „%s“',
		'state_0' => 'Alle Artikel anzeigen',
		'state_1' => 'Gelesene Artikel anzeigen',
		'state_2' => 'Ungelesene Artikel anzeigen',
		'state_3' => 'Alle Artikel anzeigen',
		'state_4' => 'Lieblingsartikel anzeigen',
		'state_5' => 'Gelesene Lieblingsartikel anzeigen',
		'state_6' => 'Ungelesene Lieblingsartikel anzeigen',
		'state_7' => 'Lieblingsartikel anzeigen',
		'state_8' => 'Keine Lieblingsartikel anzeigen',
		'state_9' => 'Gelesene ohne Lieblingsartikel anzeigen',
		'state_10' => 'Ungelesene ohne Lieblingsartikel anzeigen',
		'state_11' => 'Keine Lieblingsartikel anzeigen',
		'state_12' => 'Alle Artikel anzeigen',
		'state_13' => 'Gelesene Artikel anzeigen',
		'state_14' => 'Ungelesene Artikel anzeigen',
		'state_15' => 'Alle Artikel anzeigen',
		'title' => 'Benutzerabfragen',
	),
	'reading' => array(
		'_' => 'Lesen',
		'after_onread' => 'Nach „Alle als gelesen markieren“,',
		'always_show_favorites' => 'Favoriten immer anzeigen',
		'article' => array(
			'authors_date' => array(
				'_' => 'Autoren und Datum',
				'both' => 'In Kopf- und Fußzeile',
				'footer' => 'In Fußzeile',
				'header' => 'In Kopfzeile',
				'none' => 'Nicht anzeigen',
			),
			'feed_name' => array(
				'above_title' => 'Oberhalb der Überschrit und Hashtags',
				'none' => 'Nicht anzeigen',
				'with_authors' => 'In der Zeile mit Autoren und Datum',
			),
			'feed_title' => 'Feed Titel',
			'tags' => array(
				'_' => 'Hashtags',
				'both' => 'In Kopf- und Fußzeile',
				'footer' => 'In Fußzeile',
				'header' => 'In Kopfzeile',
				'none' => 'Nicht anzeigen',
			),
			'tags_max' => array(
				'_' => 'Max Anzahl von Hashtags',
				'help' => '0 bedeutet: Zeige alle Hashtags und fasse sie nicht zusammen',
			),
		),
		'articles_per_page' => 'Anzahl der Artikel pro Seite',
		'auto_load_more' => 'Die nächsten Artikel am Seitenende laden',
		'auto_remove_article' => 'Artikel nach dem Lesen verstecken',
		'confirm_enabled' => 'Bei der Aktion „Alle als gelesen markieren“ einen Bestätigungsdialog anzeigen',
		'display_articles_unfolded' => 'Artikel standardmäßig ausgeklappt zeigen',
		'display_categories_unfolded' => 'Ausgeklappte Kategorien',
		'headline' => array(
			'articles' => 'Artikel: Öffnen/Schließen',
			'articles_header_footer' => 'Artikel: Kopf- und Fußzeile',
			'categories' => 'Linke Navigation: Kategorien',
			'mark_as_read' => 'Artikel als gelesen markieren',
			'misc' => 'Sonstiges',
			'view' => 'Ansicht',
		),
		'hide_read_feeds' => 'Kategorien & Feeds ohne ungelesene Artikel verstecken (funktioniert nicht mit der Einstellung „Alle Artikel zeigen“)',
		'img_with_lazyload' => 'Verwende die „träges Laden“-Methode zum Laden von Bildern',
		'jump_next' => 'springe zum nächsten ungelesenen Geschwisterelement (Feed oder Kategorie)',
		'mark_updated_article_unread' => 'Markieren Sie aktualisierte Artikel als ungelesen',
		'number_divided_when_reader' => 'Geteilt durch 2 in der Lese-Ansicht.',
		'read' => array(
			'article_open_on_website' => 'wenn der Artikel auf der Original-Webseite geöffnet wird',
			'article_viewed' => 'wenn der Artikel angesehen wird',
			'keep_max_n_unread' => 'Max. Anzahl von ungelesenen Artikeln',
			'scroll' => 'beim Scrollen bzw. Überspringen',
			'upon_gone' => 'wenn der Artikel nicht mehr im Feed enthalten ist',
			'upon_reception' => 'beim Empfang des Artikels',
			'when' => 'Artikel als gelesen markieren…',
			'when_same_title' => 'falls der identische Titel bereit in den <i>n</i> neusten Artikel vorhanden ist.',
		),
		'show' => array(
			'_' => 'Artikel zum Anzeigen',
			'active_category' => 'Aktive Kategorie',
			'adaptive' => 'Anzeige anpassen',
			'all_articles' => 'Alle Artikel zeigen',
			'all_categories' => 'Alle Kategorien',
			'no_category' => 'Keine Kategorie',
			'remember_categories' => 'Geöffnete Kategorien merken',
			'unread' => 'Nur ungelesene zeigen',
		),
		'show_fav_unread_help' => 'Auch auf Labels anwenden',
		'sides_close_article' => 'Klick außerhalb des Artikel-Textes schließt den Artikel',
		'sort' => array(
			'_' => 'Sortierreihenfolge',
			'newer_first' => 'Neuere zuerst',
			'older_first' => 'Ältere zuerst',
		),
		'sticky_post' => 'Wenn geöffnet, den Artikel ganz oben anheften',
		'title' => 'Lesen',
		'view' => array(
			'default' => 'Standard-Ansicht',
			'global' => 'Globale Ansicht',
			'normal' => 'Normale Ansicht',
			'reader' => 'Lese-Ansicht',
		),
	),
	'sharing' => array(
		'_' => 'Teilen',
		'add' => 'Füge eine Teilen-Dienst hinzu',
		'blogotext' => 'Blogotext',	// IGNORE
		'deprecated' => 'Dieser Dienst ist veraltet und wir in einer <a href="https://freshrss.github.io/FreshRSS/en/users/08_sharing_services.html" title="Open documentation for more information" target="_blank">zukünftigen FreshRSS-Version</a> entfernt.',
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'E-Mail',
		'facebook' => 'Facebook',	// IGNORE
		'more_information' => 'Weitere Informationen',
		'print' => 'Drucken',
		'raindrop' => 'Raindrop.io',	// IGNORE
		'remove' => 'Entferne Teilen-Dienst',
		'shaarli' => 'Shaarli',	// IGNORE
		'share_name' => 'Anzuzeigender Teilen-Name',
		'share_url' => 'Zu verwendende Teilen-URL',
		'title' => 'Teilen',
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag',	// IGNORE
	),
	'shortcut' => array(
		'_' => 'Tastenkombination',
		'article_action' => 'Artikel',
		'auto_share' => 'Teilen',
		'auto_share_help' => 'Wenn es nur eine Option zum Teilen gibt, wird diese verwendet. Ansonsten sind die Optionen über ihre Nummer erreichbar.',
		'close_dropdown' => 'Menüs schließen',
		'collapse_article' => 'Einklappen',
		'first_article' => 'Zum ersten Artikel springen',
		'focus_search' => 'Auf das Suchfeld zugreifen',
		'global_view' => 'Wechsle zur globalen Ansicht',
		'help' => 'Dokumentation anzeigen',
		'javascript' => 'JavaScript muss aktiviert sein, um Tastaturkürzel benutzen zu können',
		'last_article' => 'Zum letzten Artikel springen',
		'load_more' => 'Weitere Artikel laden',
		'mark_favorite' => 'Als Favorit auswählen/entfernen',
		'mark_read' => 'Als (un-)gelesen markieren',
		'navigation' => 'Navigation',	// IGNORE
		'navigation_help' => 'Mit der <kbd>⇧ Umschalttaste</kbd> finden die Tastenkombination auf Feeds Anwendung.<br/>Mit der <kbd>Alt ⎇</kbd>-Taste finden die Tastenkombination auf Kategorien Anwendung.',
		'navigation_no_mod_help' => 'Die folgenden Navigationsverknüpfungen unterstützen keine Modifikatoren.',
		'next_article' => 'Zum nächsten Artikel springen',
		'next_unread_article' => 'Zum nächsten ungelesenen Artikel springen',
		'non_standard' => 'Einige Tasten (<kbd>%s</kbd>) können nicht als Shortcut verwendet werden.',
		'normal_view' => 'Wechsle zur normalen Ansicht',
		'other_action' => 'Andere Aktionen',
		'previous_article' => 'Zum vorherigen Artikel springen',
		'reading_view' => 'Wechsle zur Lese-Ansicht',
		'rss_view' => 'Öffne als RSS-Feed',
		'see_on_website' => 'Auf der Original-Webseite ansehen',
		'shift_for_all_read' => '+ <kbd>Alt ⎇</kbd> um vorherige Artikel als gelesen zu markieren<br />+ <kbd>⇧ Shift</kbd> um alle Artikel als gelesen zu markieren',
		'skip_next_article' => 'Nächsten markieren ohne zu öffnen',
		'skip_previous_article' => 'Vorherigen markieren ohne zu öffnen',
		'title' => 'Tastenkombination',
		'toggle_media' => 'Medien abspielen/anhalten',
		'user_filter' => 'Auf Benutzerfilter zugreifen',
		'user_filter_help' => 'Wenn es nur einen Benutzerfilter gibt, wird dieser verwendet. Ansonsten sind die Filter über ihre Nummer erreichbar.',
		'views' => 'Ansichten',
	),
	'user' => array(
		'articles_and_size' => '%s Artikel (%s)',
		'current' => 'Aktueller Benutzer',
		'is_admin' => 'ist Administrator',
		'users' => 'Benutzer',
	),
);
