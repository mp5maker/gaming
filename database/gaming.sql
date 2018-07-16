START TRANSACTION;

CREATE TABLE navigation (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, name VARCHAR(255), logo VARCHAR(255), location VARCHAR(255), sub ENUM('yes', 'no'));
INSERT INTO navigation(id, name, logo, location, sub) VALUES
("", "Home", "fa-home", "#!home", 'no'),
("", "Gaming", "fa-gamepad", "#!gaming", 'no'),
("", "Contact Us", "fa-users", "#!contact", 'no');

COMMIT;