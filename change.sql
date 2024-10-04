--
-- 表 `ice_pos_payflow`  2024-10-02 
--
ALTER TABLE `ice_pos_payflow` ADD COLUMN `refund_flag` tinyint(1) UNSIGNED DEFAULT 0 COMMENT '1表示已退款，0正常' AFTER pos_flag;
ALTER TABLE `ice_pos_payflow` CHANGE `pos_id` `pos_id` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `ice_pos_payflow` CHANGE `branch_no` `branch_no` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `ice_pos_payflow` CHANGE `vip_no` `vip_no` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `ice_pos_saleflow` CHANGE `pos_id` `pos_id` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `ice_pos_saleflow` CHANGE `branch_no` `branch_no` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `ice_pos_pay` ADD `payflow_id` INT(11) UNSIGNED NULL DEFAULT '0' COMMENT 'pos_payflow表的id值' AFTER `id`, ADD INDEX (`payflow_id`);
ALTER TABLE `ice_pos_pay` ADD `coin_type` VARCHAR(20) NULL COMMENT '支付方式英文简称' AFTER `payflow_no`;
ALTER TABLE `ice_pos_pay` CHANGE `pay_status` `pay_status` CHAR(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0' COMMENT '0未支付，1已支付，2已退款';
ALTER TABLE `ice_member` CHANGE `ucode` `ucode` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户编码-微信等编码统一';
