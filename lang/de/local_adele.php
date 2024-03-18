<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for local:adele, language de
 *
 * @package     local_adele
 * @author      Jacob Viertel
 * @copyright  2023 Wunderbyte GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['modulename'] = 'adele';
$string['modulenameplural'] = 'adeles';
$string['modulename_help'] = 'adele';
$string['pluginadministration'] = 'Adele-Verwaltung';
$string['pluginname'] = 'Adele';

// Fähigkeiten.
$string['adele:edit'] = 'Adele bearbeiten';
$string['adele:view'] = 'Adele anzeigen';
$string['adele:canmanage'] = 'Darf Adele-Plugins verwalten';

// Rolle.
$string['adeleroledescription'] = 'Adele-Manager';

// Vue-Komponentenroute nicht gefunden.
$string['route_not_found_site_name'] = 'Fehler: Seite (Route) nicht gefunden!';
$string['route_not_found'] = 'Seite wurde nicht gefunden. Bitte gehen Sie zurück und versuchen Sie es erneut.';

// Vue-Komponente Lernziel bearbeiten.
$string['learningpaths_edit_site_name'] = 'Adele Lernziele';
$string['learningpaths_edit_site_description'] = 'Sie können einen neuen Lernpfad hinzufügen oder vorhandene Pfade bearbeiten.';
$string['learningpaths_edit_site_no_learningpaths'] = 'Noch keine Lernpfade vorhanden.';
$string['learningpaths_edit_no_learningpaths'] = 'Es gibt keine Ziele zum Anzeigen.';

// Übersicht Lernziele.
$string['edit'] = 'Bearbeiten';
$string['delete'] = 'Löschen';
$string['deletepromptpre'] = 'Möchten Sie das Lernziel "';
$string['deletepromptpost'] = '" wirklich löschen?';
$string['btnconfirmdelete'] = 'Löschen bestätigen';
$string['duplicate'] = 'Duplizieren';
$string['toclipboard'] = 'In Zwischenablage kopieren';
$string['goalnameplaceholder'] = 'Lernpfadname';
$string['goalsubjectplaceholder'] = 'Lernpfadbeschreibung';
$string['toclipboarddone'] = 'In Zwischenablage kopiert';
$string['subject'] = 'Thema';

// Lernziel-Formular.
$string['learningpath'] = 'Ziel';
$string['learningpath_name'] = 'Zielname';
$string['learningpath_description'] = 'Zielbeschreibung';
$string['learningpath_form_title_add'] = 'Einen neuen Lernpfad hinzufügen';
$string['learningpath_form_title_edit'] = 'Einen Lernpfad bearbeiten';
$string['save'] = 'Speichern';
$string['cancel'] = 'Abbrechen';

// Button-Strings.
$string['btnadele'] = 'Lernpfade';
$string['btnbacktooverview'] = 'Zurück zur Übersicht';
$string['btncreatecourse'] = 'Zur Seite gehen und einen Kurs erstellen';
$string['btnsave'] = 'Speichern';
$string['btncancel'] = 'Abbrechen';
$string['btnupdate_positions'] = 'Positionen aktualisieren';
$string['btntoggle'] = 'Ansicht ändern';
$string['btnreload'] = 'Seite neu laden';

// Aus Zeichenfolgen.
$string['fromlearningtitel'] = 'Lernpfadtitel';
$string['fromlearningdescription'] = 'Beschreibung des Lernpfads';
$string['fromavailablecourses'] = 'Liste der verfügbaren Kurse';
$string['tagsearch_description'] = 'Für Tag-Suche mit # beginnen';
$string['fromlearningtitelplaceholder'] = 'Bitte geben Sie einen Titel an';
$string['fromlearningdescriptionplaceholder'] = 'Bitte geben Sie eine kurze Beschreibung an';
$string['placeholder_search'] = 'Kurse suchen';
$string['edit_course_node'] = 'Kursknoten bearbeiten';
$string['edit_node_pretest'] = 'Abschlusskriterien bearbeiten';

// Übersichtszeichenfolge.
$string['overviewlearningpaths'] = 'Übersicht aller Lernpfade';
$string['overviewaddingbtn'] = 'Neuen Lernpfad erstellen';

// Adele-Einstellungen.
$string['activefilter'] = 'Filter aktivieren';
$string['activefilter_desc'] = 'Die Filter wirken sich auf die verfügbaren Kurse für die Erstellung von Lernpfaden aus';
$string['courselevel'] = 'Kursstufe auswählen';
$string['courselevel_desc'] = 'Entscheiden Sie, welche Kursstufe innerhalb der Erstellung von Lernpfaden angezeigt wird';
$string['tagsinclude'] = 'Eingeschlossene Tags definieren';
$string['tagsinclude_desc'] = 'Definieren Sie, welche Kurse basierend auf ihren Tags gefiltert werden sollen. Kurse mit einem dieser Tags werden gefiltert';
$string['tagsexclude'] = 'Ausgeschlossene Tags definieren';
$string['tagsexclude_desc'] = 'Definieren Sie, welche Kurse basierend auf ihren Tags nicht gefiltert werden sollen. Kurse mit einem dieser Tags werden nicht gefiltert';
$string['categories'] = 'Kategorieebene definieren';
$string['categories_desc'] = 'Definieren Sie, auf welcher Kursebene Kurse enthalten sein sollen';
$string['tag_invalid'] = 'Folgende Tags wurden nicht gefunden: {$a}';
$string['warning_empty_space'] = 'Achten Sie bitte auf Leerzeichen und enden Sie nicht mit einem Komma';
$string['settings_only_subscribed'] = 'Nur Kurse, für die der Lehrer angemeldet ist.';
$string['settings_all_courses'] = 'Alle Kurse, die den anderen Kriterien entsprechen.';

// Benachrichtigungen.
$string['title_duplicate'] = 'Lernpfad dupliziert';
$string['description_duplicate'] = 'Sie haben den Lernpfad dupliziert!';
$string['title_delete'] = 'Lernpfad gelöscht';
$string['description_delete'] = 'Sie haben den Lernpfad gelöscht!';
$string['title_save'] = 'Lernpfad gespeichert/aktualisiert';
$string['description_save'] = 'Sie haben den Lernpfad gespeichert/aktualisiert!';

// Knotenzeichenfolgen.
$string['node_coursefullname'] = 'Knotenname:';
$string['node_courseshortname'] = 'Kurzbezeichnung des Kurses:';

// Bedingungsbeschreibung.
$string['course_description_condition_completion_manual'] = 'Kurs wird manuell abgeschlossen';
$string['course_name_condition_completion_manual'] = 'Kursabschluss-Checkbox';
$string['course_description_condition_parent_courses'] = 'Kurs wird zugänglich, wenn eine bestimmte Anzahl von übergeordneten Kursen abgeschlossen ist';
$string['course_name_condition_parent_courses'] = 'Gemäß übergeordneter Knoten';
$string['course_description_condition_restriction_manual'] = 'Zugriff wird manuell gewährt';
$string['course_name_condition_restriction_manual'] = 'Kursbeschränkungs-Checkbox';
$string['course_description_condition_restriction_specific_course'] = 'Nur wenn ein bestimmter Kurs dieses Lernpfads abgeschlossen ist';
$string['course_name_condition_restriction_specific_course'] = 'Bestimmter Kurs abgeschlossen';
$string['course_description_condition_timed'] = 'Kursstartdatum; Kursenddatum';
$string['course_name_condition_timed'] = 'Kursstart-/Enddatum';
$string['course_description_condition_course_completed'] = 'Ein Kurs innerhalb dieses Knotens muss vom Studenten abgeschlossen sein';
$string['course_name_condition_course_completed'] = 'Ein Kurs abgeschlossen';
$string['course_description_condition_catquiz'] = 'Gemäß catquiz Ergebnissen/Versuchen';
$string['course_name_condition_catquiz'] = 'Catquiz-Quiz';
$string['course_description_condition_modquiz'] = 'Gemäß mod-Quiz-Ergebnis';
$string['course_name_condition_modquiz'] = 'Mod-Quiz';
$string['course_description_condition_parent_node_completed'] = 'Wenn ein übergeordneter Knoten abgeschlossen ist';
$string['course_name_condition_parent_node_completed'] = 'Übergeordneter Knoten abgeschlossen';

// Ereigniszeichenfolgen.
$string['event_learnpath_deleted'] = 'Lernpfad gelöscht';
$string['event_learnpath_deleted_description'] = 'Der Lernpfad {$a} wurde gelöscht';
$string['event_learnpath_updated'] = 'Lernpfad aktualisiert';
$string['event_learnpath_updated_description'] = 'Der Lernpfad {$a} wurde aktualisiert';
$string['event_learnpath_created'] = 'Lernpfad erstellt';
$string['event_learnpath_created_description'] = 'Der Lernpfad {$a} wurde erstellt';
$string['event_completion_criteria_updated'] = 'Abschlusskriterien aktualisiert';
$string['event_completion_criteria_updated_description'] = 'Die Abschlusskriterien {$a} wurden aktualisiert';
$string['event_user_path_updated'] = 'Benutzerpfad-Beziehung wurde aktualisiert';
$string['event_user_path_updated_description'] = 'Die Benutzerpfad-Beziehung für Benutzer {$a->user} und Lernpfad {$a->path} wurde aktualisiert';
$string['event_node_finished'] = 'Knoten wurde abgeschlossen';
$string['event_node_finished_description'] = 'Der Benutzer {$a->user} hat den Knoten {$a->node} abgeschlossen';

// Farbzeichenfolgen.
$string['DARK_GREEN'] = '#063449';
$string['DEEP_SKY_BLUE'] = '#0d5575';
$string['LIGHT_SEA_GREEN'] = '#4d8da8';
$string['LIGHT_STEEL_BLUE'] = '#87b8ce';
$string['DARK_RED'] = '#750033';
$string['CRIMSON'] = '#ad0050';
$string['DARK_ORANGE'] = '#df843b';
$string['RUSTY_RED'] = '#c76413';
$string['PUMPKIN'] = '#e7a23b';
$string['LIGHT_GRAY'] = '#d1d1d1';
$string['GRAY'] = '#ababab';
$string['DIM_GRAY'] = '#737373';
$string['VERY_DARK_GRAY'] = '#373737';
$string['BLACK'] = '#0c0c0c';

// Charthelper-Strings.
$string['charthelper_child_nodes'] = 'Untergeordnete Knoten:';
$string['charthelper_no_child_nodes'] = 'Keine untergeordneten Knoten gefunden.';
$string['charthelper_parent_nodes'] = 'Übergeordnete Knoten:';
$string['charthelper_no_parent_nodes'] = 'Keine übergeordneten Knoten gefunden.';
$string['charthelper_no_name'] = 'Kein Name angegeben.';
$string['charthelper_no_description'] = 'Keine Beschreibung angegeben.';
$string['charthelper_go_to_learningpath'] = 'Zum Bearbeiten des Lernpfads gehen.';

// Bedingungszeichenfolgen.
$string['conditions_no_scales'] = 'Keine Skalen verfügbar';
$string['conditions_name'] = 'Name';
$string['conditions_scale_value'] = 'Skalenwert:';
$string['conditions_attempts'] = 'Versuche:';
$string['conditions_set_values'] = 'Werte setzen';
$string['conditions_catquiz_warning_description'] = 'Das Catquiz befindet sich im selben Kurs wie der Lernpfad';
$string['conditions_catquiz_warning_name'] = 'Catquiz im Kurs';
$string['conditions_min_grad'] = 'Min. Note:';
$string['conditions_finish_course'] = 'Kurs manuell abschließen';

// Abschlusszeichenfolgen.
$string['completion_invalid_path_title'] = 'Ungültiger Pfad';
$string['completion_invalid_path_text'] = 'Eigenständige Knoten gefunden. Jeder Knoten muss mit dem Pfad verbunden sein.';
$string['completion_go_back_learningpath'] = 'Zurück zum Lernpfad';
$string['completion_edit_completion'] = 'Abschlusskriterien des Kursknotens bearbeiten';
$string['completion_completion_for'] = 'Abschlusskriterien für:';
$string['completion_course_title'] = 'Kurstitel:';
$string['completion_course_tags'] = 'Tags:';
$string['completion_node_refused_title'] = 'Knotenabwurf abgelehnt';
$string['completion_node_refused_text'] = 'Bitte lassen Sie den Knoten in den Ablagezonen fallen, die angezeigt werden, wenn Sie einen Knoten zu einem vorhandenen Knoten ziehen.';
$string['completion_feedback_node'] = 'Rückmeldungen zum Knoten';
$string['completion_loading_completion'] = 'Abschluss wird geladen...';
$string['completion_drop_here'] = 'Hier ablegen, um zu verbinden';
$string['completion_drop_zone'] = 'Ablagezone';
$string['completion_list_of_criteria'] = 'Liste der verfügbaren ';
$string['completion_criteria'] = ' Kriterien';

// Flussdiagrammzeichenfolgen.
$string['flowchart_add_learning'] = 'Ein Lernmodul hinzufügen';
$string['flowchart_title'] = 'Titel:';
$string['flowchart_please_provide'] = 'Bitte geben Sie einen Namen an!';
$string['flowchart_color'] = 'Farbe:';
$string['flowchart_cancel'] = 'Abbrechen:';
$string['flowchart_cancel_button'] = 'Abbrechen';
$string['flowchart_add'] = 'Hinzufügen';
$string['flowchart_existing_learning_modules'] = 'Vorhandene Lernmodule';
$string['flowchart_provide_name'] = 'Bitte geben Sie einen Namen an!';
$string['flowchart_save_button'] = 'Speichern';
$string['flowchart_delete_button'] = 'Löschen';
$string['flowchart_save_notification_title'] = 'Speichern fehlgeschlagen';
$string['flowchart_save_notification_text'] = 'Geben Sie einen Titel und eine kurze Beschreibung für den Lernpfad an';
$string['flowchart_invalid_path_notification_title'] = 'Ungültiger Pfad';
$string['flowchart_save_notification_text'] = 'Eigenständige Knoten gefunden. Jeder Knoten muss mit dem Pfad verbunden sein';
$string['flowchart_cancel_confirmation'] = 'Alle nicht gespeicherten Änderungen gehen verloren';
$string['flowchart_back_button'] = 'Zurück';
$string['flowchart_course_already_inside_title'] = 'Kurs bereits enthalten';
$string['flowchart_course_already_inside_text'] = 'Der Kurs ist bereits im enthaltenen Knoten.';
$string['flowchart_drop_refused_title'] = 'Knotenabwurf abgelehnt';
$string['flowchart_drop_refused_text'] = 'Bitte lassen Sie den Knoten in den Ablagezonen fallen, die angezeigt werden, wenn Sie einen Knoten zu einem vorhandenen Knoten ziehen.';
$string['flowchart_learning_package'] = 'Lernpaket';
$string['flowchart_courses'] = 'Kurse';
$string['flowchart_hover_darg_drop'] = 'Ziehen Sie den Kurs in die Ablagezonen, um ihn in den Lernpfad aufzunehmen.';
$string['flowchart_hover_click_here'] = 'Klicken Sie hier, um zum Kurs zu gelangen';

// Modals-Strings.
$string['modals_edit_feedback'] = 'Feedback bearbeiten';
$string['modals_close'] = 'Schließen';
$string['modals_save_changes'] = 'Änderungen speichern';
$string['modals_how_to_learningpath'] = 'Wie man einen Lernpfad erstellt';
$string['modals_previous'] = 'Zurück';
$string['modals_next'] = 'Weiter';
$string['modals_edit'] = 'Bearbeiten';
$string['modals_longname'] = 'Langname:';
$string['modals_shortname'] = 'Kurzname:';

// Knoten-Strings.
$string['nodes_collection'] = 'Sammlung';
$string['nodes_edit'] = 'Bearbeiten';
$string['nodes_learning_module'] = 'Lernmodul';
$string['nodes_select_module'] = 'Modul auswählen';
$string['nodes_included_courses'] = 'Enthaltene Kurse';
$string['nodes_edit_restriction'] = 'Einschränkung bearbeiten';
$string['nodes_edit_completion'] = 'Abschluss bearbeiten';
$string['nodes_completion'] = 'Abschluss';
$string['nodes_restriction'] = 'Einschränkung';
$string['nodes_potential_start'] = 'Möglicher Startknoten';
$string['nodes_progress'] = 'Fortschritt:';
$string['nodes_courses'] = 'Kurse:';
$string['nodes_table_key'] = 'Schlüssel';
$string['nodes_table_checkmark'] = 'Kontrollkästchen';
$string['nodes_no_restriction_defined'] = 'Keine Einschränkungen definiert';
$string['nodes_no_completion_defined'] = 'Keine Abschlüsse definiert';
$string['nodes_hide_completion'] = 'Abschluss ausblenden';
$string['nodes_show_completion'] = 'Abschluss anzeigen';
$string['nodes_feedback'] = 'Feedback';
$string['nodes_no_feedback'] = 'Kein Feedback festgelegt...';

// Knoten-Elemente-Strings.
$string['nodes_items_start'] = 'Start:';
$string['nodes_items_end'] = 'Ende:';
$string['nodes_items_testname'] = 'Testname:';
$string['nodes_items_coursename'] = 'Kursname:';
$string['nodes_items_restrictions'] = 'Einschränkungen';
$string['nodes_items_no_conditions'] = 'Keine Bedingungen definiert';
$string['nodes_items_restriction'] = 'Einschränkung';
$string['nodes_items_no_restrictions'] = 'Keine Einschränkungen definiert';
$string['nodes_items_completion'] = 'Abschluss';
$string['nodes_items_no_progress'] = 'Kein Fortschritt';

// Bedingungszeichenfolgen.
$string['composables_new_node'] = 'Neuer Startknoten';
$string['composables_drop_zone_parent'] = 'Ablagezone Eltern';
$string['composables_drop_zone_child'] = 'Ablagezone Kind';
$string['composables_drop_zone_add'] = 'Und Ablagezone';
$string['composables_drop_zone_or'] = 'Oder Ablagezone';
$string['composables_feedback_node'] = 'Feedbackknoten';

// Einschränkungszeichenfolgen.
$string['restriction_select_number'] = 'Eine Zahl auswählen:';
$string['restriction_select_course'] = 'Einen Kurs auswählen:';
$string['restriction_choose_number'] = 'Eine Zahl wählen';
$string['restriction_parents_found'] = 'Folgende übergeordnete Knoten gefunden:';
$string['restriction_access_manually'] = 'Zugriff auf Kurs manuell gewähren';
$string['restriction_invalid_path_title'] = 'Ungültiger Pfad';
$string['restriction_invalid_path_text'] = 'Eigenständige Knoten gefunden. Jeder Knoten muss mit dem Pfad verbunden sein.';
$string['restriction_go_back_learningpath'] = 'Zurück zum Lernpfad';
$string['restriction_edit_restrictions'] = 'Einschränkungen bearbeiten, um Knotenkurs zu betreten';
$string['restriction_restrictions_for'] = 'Einschränkungen für:';
$string['restriction_course_title'] = 'Kurstitel:';
$string['restriction_tags'] = 'Tags:';
$string['restriction_loading_restrictions'] = 'Lade Einschränkungen...';
$string['restriction_node_drop_refused_title'] = 'Knotenabwurf abgelehnt';
$string['restriction_node_drop_refused_text'] = 'Bitte lassen Sie den Knoten in den Ablagezonen fallen, die angezeigt werden, wenn Sie einen Knoten zu einem vorhandenen Knoten ziehen.';

// Benutzeransichtzeichenfolgen.
$string['user_view_id'] = 'ID';
$string['user_view_username'] = 'Benutzername';
$string['user_view_firstname'] = 'Vorname';
$string['user_view_lastname'] = 'Nachname';
$string['user_view_email'] = 'E-Mail';
$string['user_view_mail'] = 'Fortschritt';
$string['user_view_nodes'] = 'Knoten';
$string['user_view_go_back_overview'] = 'Zurück zur Übersicht';
$string['user_view_user_path_for'] = 'Benutzerpfad für:';

// Main strings.
$string['main_intro_slider'] = 'Einführungsslider';
$string['main_description'] = 'Beschreibung:';
$string['main_duplicate'] = 'Duplizieren';
$string['main_delete'] = 'Löschen';