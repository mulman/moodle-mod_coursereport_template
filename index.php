<?php

/**
 * @author Marek Ulman
 * @copyright Marek Ulman
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package course-report-newmodule
 */

require_once('../../../config.php');

$id = required_param('id',PARAM_INT);       // course id

if (!$course = get_record('course', 'id', $id)) {
    error('Course id is incorrect.');
}

require_login($course);
$context = get_context_instance(CONTEXT_COURSE, $course->id);
require_capability('coursereport/newmodule:view', $context);

// Write event to log
add_to_log($course->id, "course", "report newmodule", "report/newmodule/index.php?id=$course->id", $course->id);

// Navigation
$navlinks = array();
$navlinks[] = array('name' => get_string("reports"), 'link' => "../../report.php?id=$course->id", 'type' => 'misc');
$navlinks[] = array('name' => 'newmodule', 'link' => null, 'type' => 'misc');
$navigation = build_navigation($navlinks);

print_header("$course->shortname: nm", $course->fullname, $navigation);
print_heading(format_string($course->fullname));

echo "<h4 style='text-align: center'>New Course Report module</h4>";
echo "Hello World";

print_footer($course);
?>