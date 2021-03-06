<?php global $topic_subscribe, $group_new_topic, $quoted; ?>
<table class="notification-settings" id="forum-notifier-notification-settings">
	<thead>
		<tr>
			<th class="icon"></th>
			<th class="title"><?php _e( 'Forum', 'buddypress' ) ?></th>
			<th class="yes"><?php _e( 'Yes', 'buddypress' ) ?></th>
			<th class="no"><?php _e( 'No', 'buddypress' )?></th>
		</tr>
	</thead>

	<tbody>
		<tr id="forum-notifier-notification-settings-topic-subscribe">
			<td></td>
			<td>En medlem skriver en ny kommentar i en bevakad tråd</td>
			<td class="yes"><input type="radio" name="notifications[notification_forum_topic_subscribe]" value="yes" <?php checked( $topic_subscribe, 'yes', true ) ?>/></td>
			<td class="no"><input type="radio" name="notifications[notification_forum_topic_subscribe]" value="no" <?php checked( $topic_subscribe, 'no', true ) ?>/></td>
		</tr>
		<tr id="forum-notifier-notification-settings-group-new-topic">
			<td></td>
			<td>En medlem skapar en ny tråd i någon grupp du är medlem i</td>
			<td class="yes"><input type="radio" name="notifications[notification_forum_group_new_topic]" value="yes" <?php checked( $group_new_topic, 'yes', true ) ?>/></td>
			<td class="no"><input type="radio" name="notifications[notification_forum_group_new_topic]" value="no" <?php checked( $group_new_topic, 'no', true ) ?>/></td>
		</tr>
		<tr id="forum-notifier-notification-settings-quoted">
			<td></td>
			<td>En medlem svarar eller citerar dig</td>
			<td class="yes"><input type="radio" name="notifications[notification_forum_quoted]" value="yes" <?php checked( $quoted, 'yes', true ) ?>/></td>
			<td class="no"><input type="radio" name="notifications[notification_forum_quoted]" value="no" <?php checked( $quoted, 'no', true ) ?>/></td>
		</tr>
	</tbody>
</table>


