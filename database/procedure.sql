DELIMITER $$
CREATE PROCEDURE read_navigation(IN type VARCHAR(10), IN select_id INT)
BEGIN
	IF(type = 'all') THEN
    	PREPARE statement FROM "
        	SELECT * FROM navigation
        ";
        EXECUTE statement;
	ELSEIF(type = 'navigation') THEN
    	PREPARE statement FROM "
        	SELECT * FROM navigation WHERE id = ?
        ";
        SET @p1 = select_id;
        EXECUTE statement USING @p1;
    END IF;
END$$
