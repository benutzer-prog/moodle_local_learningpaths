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


namespace local_adele\course_completion\conditions;

use local_adele\course_completion\course_completion;

/**
 * Manually checked Course.
 *
 * @package mod_booking
 * @copyright 2022 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/local/adele/lib.php');

/**
 * Base class for a single bo availability condition.
 *
 * All bo condition types must extend this class.
 *
 *
 * @package     local_adele
 * @author      Jacob Viertel
 * @copyright  2023 Wunderbyte GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class manually implements course_completion {

    /** @var int $id Standard Conditions have hardcoded ids. */
    public $id = COURSES_COND_MANUALLY;
    public $type = 'checkbox';
    /**
     * Obtains a string describing this restriction (whether or not
     * it actually applies). Used to obtain information that is displayed to
     * students if the activity is not available to them, and for staff to see
     * what conditions are.
     *
     * The $full parameter can be used to distinguish between 'staff' cases
     * (when displaying all information about the activity) and 'student' cases
     * (when displaying only conditions they don't meet).
     *
     * @return array availability and Information string (for admin) about all restrictions on
     *   this item
     */
    public function get_description():array {
        $description = $this->get_description_string();
        $name = $this->get_name_string();
        $label = $this->get_label_string();

        return [
            'id' => $this->id,
            'name' => $name,
            'description' => $description,
            'label' => $label,
            'type' => $this->type,
        ];
    }

    /**
     * Helper function to return localized description strings.
     *
     * @return string
     */
    private function get_description_string() {
        $description = get_string('course_description_condition_manually', 'local_adele');
        return $description;
    }

    /**
     * Helper function to return localized description strings.
     *
     * @return string
     */
    private function get_name_string() {
        $description = get_string('course_name_condition_manually', 'local_adele');
        return $description;
    }

    /**
     * Helper function to return localized description strings.
     *
     * @return string
     */
    private function get_label_string() {
        $label = get_string('course_label_condition_manually', 'local_adele');
        return $label;
    }
}
