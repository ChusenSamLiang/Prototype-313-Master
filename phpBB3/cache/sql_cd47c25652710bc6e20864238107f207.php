<?php exit; ?>
1398230462
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM p313_moderator_cache m LEFT JOIN p313_users u ON (m.user_id = u.user_id) LEFT JOIN p313_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}