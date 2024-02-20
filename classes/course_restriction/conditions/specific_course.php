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
 * Base class for a single booking option availability condition.
 *
 * All bo condition labels must extend this class.
 *
 * @package     local_adele
 * @author      Jacob Viertel
 * @copyright  2023 Wunderbyte GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_adele\course_restriction\conditions;

use completion_info;
use local_adele\course_restriction\course_restriction;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/local/adele/lib.php');

/**
 * Class for a single learning path course condition.
 *
 * @package     local_adele
 * @author      Jacob Viertel
 * @copyright  2023 Wunderbyte GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class specific_course implements course_restriction {

    /** @var int $id Standard Conditions have hardcoded ids. */
    public $id = COURSES_COND_MANUALLY;
    /** @var string $label of the redered condition in frontend. */
    public $label = 'specific_course';
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
    public function get_description(): array {
        $description = $this->get_description_string();
        $name = $this->get_name_string();
        $label = $this->label;

        return [
            'id' => $this->id,
            'name' => $name,
            'description' => $description,
            'label' => $label,
        ];
    }

    /**
     * Helper function to return localized description strings.
     *
     * @return string
     */
    private function get_description_string() {
        $description = get_string('course_description_condition_restriction_specific_course', 'local_adele');
        return $description;
    }

    /**
     * Helper function to return localized description strings.
     *
     * @return string
     */
    private function get_name_string() {
        $description = get_string('course_name_condition_restriction_specific_course', 'local_adele');
        return $description;
    }

    /**
     * Helper function to return localized description strings.
     * TODO check if get_strategy_selectcontext suits.
     * @param array $node
     * @param int $userid
     * @return boolean
     */
    public function get_restriction_status($node, $userid) {
        $specificcourses = [];
        if (isset($node['restriction']) && isset($node['restriction']['nodes'])) {
            $restrictions = $node['restriction']['nodes'];
            foreach ($restrictions as $restriction) {
                if ( $restriction['data']['label'] == 'specific_course') {
                    $coursecompleted = false;
                    // Get grade and check if valid.
                    if ($restriction['data']['value'] && $restriction['data']['value']['courseid']) {
                        $course = get_course($restriction['data']['value']['courseid'][0]);
                        // Check if the course completion is enabled.
                        if ($course->enablecompletion) {
                            // Get the course completion instance.
                            $completion = new completion_info($course);
                            // Check if the user has completed the course.
                            $coursecompleted = $completion->is_course_complete($userid);
                            if ($coursecompleted) {
                                $coursecompleted = true;
                            }
                        }
                    }
                    $specificcourses[$restriction['id']] = $coursecompleted;
                }
            }
        }
        return $specificcourses;
    }
}
