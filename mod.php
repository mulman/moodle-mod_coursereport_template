<?php

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');
}

if (has_capability('coursereport/newmodule:view', $context) and has_capability('moodle/role:assign', $context)) {
    echo "<p><a href=\"$CFG->wwwroot/course/report/newmodule/index.php?id=$course->id\">".
          get_string('newmodule', 'report_newmodule').
         '</a></p>';
}

?>