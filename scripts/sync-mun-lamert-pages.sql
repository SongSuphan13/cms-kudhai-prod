-- Create/update the real WordPress Pages for the Mun Lamert templates.
-- Default table prefix: wp_
-- If production uses another prefix, replace wp_posts/wp_postmeta/wp_options first.

START TRANSACTION;

SET @siteurl := (SELECT option_value FROM wp_options WHERE option_name = 'home' LIMIT 1);
SET @now := NOW();

-- Parent page: /mun-lamert/
SET @page_id := (
	SELECT ID FROM wp_posts
	WHERE post_type = 'page' AND post_name = 'mun-lamert' AND post_parent = 0
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
	'รถชน เรียกร้องค่าเสียหายจากคู่กรณีอะไรได้บ้าง? คู่มือมูลละเมิดรถยนต์',
	'', 'publish', 'closed', 'closed', '', 'mun-lamert', '', '',
	@now, UTC_TIMESTAMP(), '', 0, '', 0, 'page', '', 0
WHERE @page_id IS NULL;
SET @mun_lamert_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts
SET post_title = 'รถชน เรียกร้องค่าเสียหายจากคู่กรณีอะไรได้บ้าง? คู่มือมูลละเมิดรถยนต์',
	post_name = 'mun-lamert',
	post_parent = 0,
	menu_order = 0,
	post_modified = @now,
	post_modified_gmt = UTC_TIMESTAMP(),
	guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid)
WHERE ID = @mun_lamert_id;
UPDATE wp_postmeta SET meta_value = 'page-mun-lamert.php' WHERE post_id = @mun_lamert_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value)
SELECT @mun_lamert_id, '_wp_page_template', 'page-mun-lamert.php'
WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @mun_lamert_id AND meta_key = '_wp_page_template');

-- Child page helper template.
SET @slug := 'what-is';
SET @title := 'มูลละเมิดคืออะไร';
SET @template := 'page-mun-lamert-what-is.php';
SET @menu_order := 1;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'car-accident';
SET @title := 'มูลละเมิดจากอุบัติเหตุรถยนต์';
SET @template := 'page-mun-lamert-car-accident.php';
SET @menu_order := 2;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'how-to-claim';
SET @title := 'วิธีเรียกร้องค่าเสียหายจากคู่กรณี';
SET @template := 'page-mun-lamert-how-to-claim.php';
SET @menu_order := 3;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'compensation';
SET @title := 'รถชนเรียกร้องค่าเสียหายอะไรได้บ้าง';
SET @template := 'page-mun-lamert-compensation.php';
SET @menu_order := 4;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'loss-of-use';
SET @title := 'ค่าขาดประโยชน์จากการใช้รถ';
SET @template := 'page-mun-lamert-loss-of-use.php';
SET @menu_order := 5;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'repair-cost';
SET @title := 'ค่าซ่อมรถจากคู่กรณี';
SET @template := 'page-mun-lamert-repair-cost.php';
SET @menu_order := 6;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'medical-expenses';
SET @title := 'ค่ารักษาพยาบาลจากอุบัติเหตุรถยนต์';
SET @template := 'page-mun-lamert-medical-expenses.php';
SET @menu_order := 7;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'lost-income';
SET @title := 'ค่าขาดรายได้จากอุบัติเหตุรถยนต์';
SET @template := 'page-mun-lamert-lost-income.php';
SET @menu_order := 8;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'depreciation';
SET @title := 'ค่าเสื่อมราคารถหลังเกิดอุบัติเหตุ';
SET @template := 'page-mun-lamert-depreciation.php';
SET @menu_order := 9;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'injury';
SET @title := 'บาดเจ็บจากอุบัติเหตุรถยนต์เรียกร้องอะไรได้';
SET @template := 'page-mun-lamert-injury.php';
SET @menu_order := 10;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'death';
SET @title := 'เสียชีวิตจากอุบัติเหตุรถยนต์ สิทธิทายาท';
SET @template := 'page-mun-lamert-death.php';
SET @menu_order := 11;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'documents';
SET @title := 'เอกสารเรียกร้องค่าเสียหายจากประกันคู่กรณี';
SET @template := 'page-mun-lamert-documents.php';
SET @menu_order := 12;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

SET @slug := 'claim-rejected';
SET @title := 'ประกันคู่กรณีไม่จ่าย';
SET @template := 'page-mun-lamert-claim-rejected.php';
SET @menu_order := 13;
SET @page_id := (SELECT ID FROM wp_posts WHERE post_type = 'page' AND post_name = @slug AND post_parent = @mun_lamert_id ORDER BY ID ASC LIMIT 1);
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
SELECT 1, @now, UTC_TIMESTAMP(), '', @title, '', 'publish', 'closed', 'closed', '', @slug, '', '', @now, UTC_TIMESTAMP(), '', @mun_lamert_id, '', @menu_order, 'page', '', 0 WHERE @page_id IS NULL;
SET @child_id := COALESCE(@page_id, LAST_INSERT_ID());
UPDATE wp_posts SET post_title = @title, post_name = @slug, post_parent = @mun_lamert_id, menu_order = @menu_order, post_modified = @now, post_modified_gmt = UTC_TIMESTAMP(), guid = IF(guid = '', CONCAT(@siteurl, '/?page_id=', ID), guid) WHERE ID = @child_id;
UPDATE wp_postmeta SET meta_value = @template WHERE post_id = @child_id AND meta_key = '_wp_page_template';
INSERT INTO wp_postmeta (post_id, meta_key, meta_value) SELECT @child_id, '_wp_page_template', @template WHERE NOT EXISTS (SELECT 1 FROM wp_postmeta WHERE post_id = @child_id AND meta_key = '_wp_page_template');

COMMIT;

SELECT ID, post_parent, post_name, post_title, menu_order
FROM wp_posts
WHERE post_type = 'page'
	AND (ID = @mun_lamert_id OR post_parent = @mun_lamert_id)
ORDER BY post_parent, menu_order, ID;
