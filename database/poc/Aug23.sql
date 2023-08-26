ALTER TABLE `project` ADD `client` INT(30) NULL DEFAULT NULL AFTER `service`;
ALTER TABLE `project` ADD INDEX(`client`);

ALTER TABLE `recent_work` ADD `client` INT(30) NULL DEFAULT NULL AFTER `name`;
ALTER TABLE `recent_work` ADD INDEX(`client`);
