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
 * @package     local_adele
 * @copyright  2023 Wunderbyte GmbH
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_adele;

/**
 * Class learning_path_courses
 *
 * @package     local_adele
 * @author      Jacob Viertel
 * @copyright  2023 Wunderbyte GmbH
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class asset_handler {

    /**
     * Start a new attempt for a user.
     * @param string $path
     * @return array
     */
    public static function get_image_paths($path) {
        global $CFG;
        $path = $CFG->dirroot . '/local/adele/public/' . $path . '/*';
        $filelist = glob($path);
        $filepath = [];
        foreach ($filelist as $file) {
            $filepath[] = [ 'path' => str_replace($CFG->dirroot, '', $file)];
        }
        return $filepath;
    }
}
