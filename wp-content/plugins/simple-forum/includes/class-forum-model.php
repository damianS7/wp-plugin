<?php

class SPF_ForumModel {
    public static function get_forums() {
        global $wpdb;
        $query = "SELECT id, name, description FROM SPF_FORUMS";
        return $wpdb->get_results($query, ARRAY_A);
    }

    public function get_forum($forum_id = 1) {
        global $wpdb;
        $query = "SELECT id, name, description 
            FROM SPF_FORUMS 
            WHERE id='{$forum_id}'";
        return $wpdb->get_row($query);
    }

    public static function get_topics($forum_id = 1) {
        global $wpdb;
        $query = "SELECT
            t_topics.id, t_topics.title, t_topics.created_at,
            t_users.username AS author, t_cats.name AS subforum, 
            (SELECT count(*) 
                FROM SPF_POSTS 
                WHERE SPF_POSTS.topic_id=t_topics.id) AS total_posts 
            FROM SPF_TOPICS AS t_topics 
            INNER JOIN SPF_ACCOUNTS AS t_users 
            ON t_topics.author_id = t_users.id 
            INNER JOIN SPF_FORUMS AS t_cats 
            ON t_topics.forum_id = t_cats.id 
            WHERE forum_id = '{$forum_id}'";
        return $wpdb->get_results($query, ARRAY_A);
    }
}
