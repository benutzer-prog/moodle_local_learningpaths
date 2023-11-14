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
 * Entities Class to display list of entity records.
 *
 * @package local_catquiz
 * @author Thomas Winkler
 * @copyright 2021 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_adele;

use stdClass;

/**
 * Class catquiz
 *
 * @author Georg Maißer
 * @copyright 2022 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class learning_paths {

    /**
     * Entities constructor.
     */
    public function __construct() {

    }

    /**
     * Start a new attempt for a user.
     *
     * @param int $userid
     * @param int $categoryid
     * @return array
     */
    public static function save_learning_path($params) {
        global $DB;
        $data = new stdClass;
        $data->name = $params['name'];
        $data->description = $params['description'];
        $data->timemodified = time();
        $data->json = json_encode('tbd');

        if ($params['learninggoalid'] == 0) {
            $data->timecreated = time();
            $data->createdby = $params['userid'];
            $id = $DB->insert_record('local_learning_paths', (object)$data);
        } else {
            $data->id = $params['learninggoalid'];
            $id = $DB->update_record('local_learning_paths', $data);
        }

        if ($id > 0) {
            return 1;
        }
        return 0;
    }

    /**
     * Start a new attempt for a user.
     *
     * @param int $userid
     * @param int $categoryid
     * @return array
     */
    public static function get_learning_paths() {

        global $DB;
        $sql = "SELECT id, name, description FROM {local_learning_paths}";

        $learninggoals = $DB->get_records_sql($sql);

        return array_map(fn($a) => (array)$a, $learninggoals);
    }

    /**
     * Start a new attempt for a user.
     *
     * @param int $userid
     * @param int $categoryid
     * @return array
     */
    public static function get_learning_path($params) {
        if ($params['learninggoalid'] == 0) {
            $learninggoal = array(
                'id' => 0,
                'name' => '',
                'description' => '',
                'json' => ''
            );
            return [$learninggoal];
        }
        global $DB;
        $sql = "SELECT id, name, description, json FROM {local_learning_paths} where id = :learninggoalid";
        $learninggoal = $DB->get_record_sql($sql, $params);
        return [(array) $learninggoal];
    }

    /**
     * Start a new attempt for a user.
     *
     * @param int $userid
     * @param int $categoryid
     * @return array
     */
    public static function duplicate_learning_path($params) {
        global $DB, $USER;
        $sql = "SELECT name,
        description,
        json
        FROM {local_learning_paths}
        WHERE id = :learninggoalid";

        $learningpath = $DB->get_record_sql($sql, $params);

        if (isset($learningpath)) {
            $learningpath->id = null;
            $learningpath->createdby = $USER->id;
            $learningpath->timecreated = time();
            $learningpath->timemodified = time();
            $DB->insert_record('local_learning_paths', $learningpath);
            return ['success' => true];
        }
        return ['success' => false];
    }

    /**
     * Start a new attempt for a user.
     *
     * @param int $userid
     * @param int $categoryid
     * @return array
     */
    public static function delete_learning_path($params) {
        global $DB;

        $result = $DB->delete_records('local_learning_paths', ['id' => $params['learninggoalid']]);
        if ($result) {
            return [
                'success' => true,
            ];
        } else {
            return [
                'success' => false,
            ];
        }
    }
}
