 SELECT  wp_posts.ID, 
    wp_posts.post_title, 
    wp_posts.post_content, 
      wp_users.user_login 
      FROM  wp_posts
      INNER JOIN  wp_users 
     ON  wp_posts.post_author  = wp_users.ID 
    WHERE wp_posts.post_status  = 'publish';