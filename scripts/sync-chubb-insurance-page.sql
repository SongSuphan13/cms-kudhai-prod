-- Create/update the real WordPress Page for the Chubb car-insurance template.
-- Default table prefix: wp_
-- If production uses another prefix, replace wp_posts/wp_options first.
-- Target URL: /car-insurance/chubb-insurance/

START TRANSACTION;

SET @siteurl := (SELECT option_value FROM wp_options WHERE option_name = 'home' LIMIT 1);
SET @now := NOW();

-- Ensure parent page exists for /car-insurance/.
SET @car_parent_id := (
	SELECT ID FROM wp_posts
	WHERE post_type = 'page' AND post_name = 'car-insurance' AND post_parent = 0
	ORDER BY ID ASC LIMIT 1
);

INSERT INTO wp_posts (
	post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt,
	post_status, comment_status, ping_status, post_password, post_name, to_ping,
	pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent,
	guid, menu_order, post_type, post_mime_type, comment_count
)
SELECT
	1, @now, UTC_TIMESTAMP(), '', 'ประกันรถยนต์', '',
	'publish', 'closed', 'closed', '', 'car-insurance', '', '',
	@now, UTC_TIMESTAMP(), '', 0, '', 0, 'page', '', 0
WHERE @car_parent_id IS NULL;

SET @car_parent_id := COALESCE(@car_parent_id, LAST_INSERT_ID());

UPDATE wp_posts
SET post_title = 'ประกันรถยนต์',
	post_name = 'car-insurance',
	post_parent = 0,
	post_status = 'publish',
	post_modified = @now,
	post_modified_gmt = UTC_TIMESTAMP(),
	guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid)
WHERE ID = @car_parent_id;

-- Child page: /car-insurance/chubb-insurance/
SET @chubb_page_id := (
	SELECT ID FROM wp_posts
	WHERE post_type = 'page' AND post_name = 'chubb-insurance' AND post_parent = @car_parent_id
	ORDER BY ID ASC LIMIT 1
);

INSERT INTO wp_posts (
	post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt,
	post_status, comment_status, ping_status, post_password, post_name, to_ping,
	pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent,
	guid, menu_order, post_type, post_mime_type, comment_count
)
SELECT
	1, @now, UTC_TIMESTAMP(), '',
	'ประกันรถยนต์ Chubb มีแบบไหนบ้าง? พร้อมรู้จักประกันประเภทอื่น',
	'', 'publish', 'closed', 'closed', '', 'chubb-insurance', '', '',
	@now, UTC_TIMESTAMP(), '', @car_parent_id, '', 30, 'page', '', 0
WHERE @chubb_page_id IS NULL;

SET @chubb_page_id := COALESCE(@chubb_page_id, LAST_INSERT_ID());

UPDATE wp_posts
SET post_title = 'ประกันรถยนต์ Chubb มีแบบไหนบ้าง? พร้อมรู้จักประกันประเภทอื่น',
	post_name = 'chubb-insurance',
	post_parent = @car_parent_id,
	post_status = 'publish',
	menu_order = 30,
	post_modified = @now,
	post_modified_gmt = UTC_TIMESTAMP(),
	guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid)
WHERE ID = @chubb_page_id;

COMMIT;

SELECT ID, post_parent, post_name, post_title, post_status, menu_order
FROM wp_posts
WHERE ID IN (@car_parent_id, @chubb_page_id)
ORDER BY post_parent, menu_order, ID;
