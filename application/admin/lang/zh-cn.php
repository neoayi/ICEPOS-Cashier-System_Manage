<?php
/**
 +------------------------------------------------------------------------------
 * 项目 简体中文语言包
 +------------------------------------------------------------------------------
 * @package  Lang
 * @author   
 * @version  $Id$
 +------------------------------------------------------------------------------
 */
return array(
	//会员模板语言
	'your_position' => '您现在的位置：',
	
	//会员注册提示语
	'already_login' => '您已经处于登录状态！',
	'not_login' => '请登录！',
	'username_can_not_be_vacant' => '会员名不能为空！',
	'username_not_only' => '会员名已被注册！',
	'username_length_error' => '会员名不能少于4个字符，并且不能多于20个字符！',
	'over_error_count' => '抱歉，您登录错误超过{error}次，请{min}分钟后再尝试！',
	'email_not_exist' => '邮箱不存在或未激活！',
	'mobile_not_exist' => '手机号码不存在或未激活！',

	//用户登录
	'user_empty'=>'用户名不能为空',
	'pass_empty'=>'密码不能为空',
	'vericode_empty'=>'验证码不能为空',
	'vericode_error'=>'验证码错误',
	'login_error'=>'用户不存在或者密码错误或已禁用！',
	'login_success' => '登录成功！',
	'logout_success' => '退出成功！',	
	'password_can_not_be_vacant' => '密码不能为空！',
	'passwords_are_different' => '两次输入的密码不一致！',
	'password_error' => '密码错误！',
	'old_password_error' => '原密码错误！',
	'old_password_can_not_be_vacant' => '原密码不能为空！',
	'new_password_can_not_be_vacant' => '新密码不能为空！',
	'reset_pwd' => '重置密码成功，请用新密码登录！',
	'password_length_error' => '密码由大小写英文字母、数字组成，长度必须6-15位！',
	'not_auth'=>'权限不足限制访问',

	//修改帐号	
	'old_username_can_not_be_vacant' => '旧帐号不能为空！',
	'old_username_are_error' => '旧帐号错误！',
	'new_username_can_not_be_vacant' => '新帐号不能为空！',
	'username_are_different' => '两次输入的帐号不一致！',
	//email
	'email_can_not_be_vacant' => 'EMAIL不能为空！',
	'email_format_error' => 'EMAIL格式错误！',
	'email_not_only' => '此EMAIL已被绑定！',
	'email_not_check' => '您的邮箱未验证！',
	'mobile_can_not_be_vacant' => '手机号码不能为空！',
	'mobile_format_error' => '手机号码必须以13,14,15,17,18,19开头的11位纯数字！',
	'mobile_not_only' => '此手机号码已被绑定！',
	'mobile_binding' => '您申请了手机绑定，请在3分钟以内绑定，验证码：',
	'verify_error' => '验证码错误！',
	'verify_success' => '验证码正确！',
	
	//页面提示
	'no_article'=>'资料不存在',
	'feedback_success'=>'保存留言成功,请等待审核和回复',
	'feedback_error'=>'保存留言失败，请重试',
	'no_title'=>'请填写留言标题',
	'no_messager'=>'请填写您的姓名',
	'no_phone'=>'请填写您的电话',
	'no_content'=>'请填写您的留言内容',
		
	//购物车
	'cart_empty' => '购物车为空！',
	'order_not_existing' => '该订单不存在！',
	'can_not_cancel_order' => '不能取消该订单！',
	
	//一般操作提示
	'reg_success' => '注册成功',
	'reg_error' => '注册失败',
	'illegal_data'=>'请输入明细数据',
	'illegal_operate'=>'非法操作',
	'input_data'=>'请提交数据',
	'update_success' => '操作成功',
	'update_error' => '操作失败',
	'save_success' => '保存成功',
	'delete_success' => '删除成功',
	'delete_error' => '删除失败',
	'save_error' => '保存失败',
	'get_passwd_subject'=>'取回密码邮件',
	'get_passwd_message'=>'您只需在提交请求后的三天之内，通过点击下面的链接重置您的密码：<br /><a href="{url}" target="_blank">{url}</a><br />(如果上面不是链接形式，请将地址手工粘贴到浏览器地址栏再访问)<br />上面的页面打开后，输入新的密码后提交，之后您即可使用新的密码登录了。',
	'invalid_variable'=>'参数错误',
	'alltypes'=>'所有分类',
	'wrong_data'=>'数据匹配错误',
	'allshoplarge'=>'所有货架货位',
	'wrongTypeNo'=>'请使用两位数字或字母组合的编码',
	'empty_record'=>'记录不存在',
	'success_data'=>'成功获取数据',
	'transist_data_error'=>'数据处理异常',
	'save_data_success'=>'数据保存成功',
	'save_data_error'=>'数据保存失败',
	'total'=>'总计',
	'tot'=>'合计',
	'empty_export'=>'没有数据需要导出',
		
	//仓库库位
	'chooseStorehouse'=>'请选择仓库',
	'StoreCodeExists'=>'门店编码已存在',
	'wrongStoreCode'=>'输入库位编码错误',
	'wrongStoreName'=>'输入库位名称错误',
	'repeatStoreCode'=>"库位已存在，请重新输入，库位编码",
	'delete_storage_good'=>'请先删除仓位下的所有商品',
	'delete_storage_success'=>'库位删除成功',
	'delete_under_storage'=>'请删除下属仓位',
	'select_low_storage'=>'请选择最下级的货架',
	'select_correct_storage'=>'请选择有效的货架',
	'only_low_storage'=>'只有库位下（最低一级）才可以添加商品',
	'need_goods_data'=>'请输入商品明细数据',
	'no_goods_storage'=>'库位【place_no】下，没有【item_no】商品',
	'store_name_empty'=>'门店名称不能为空',
		
	//终端栏目管理
	'channel_top'=>'顶级栏目',
	'channel_code_empty'=>"栏目编码不能为空",
	'channel_not_exists'=>"栏目不存在",
	'channel_tag_empty'=>"请选择添加或修改操作",
	'channel_tag_error'=>"操作标志符错误",
	'channel_sort_error'=>"排序错误",
	'channel_model_empty'=>"栏目模型不能为空",
	'channel_model_not_exists'=>"栏目模型不存在",
	'channel_pid_same'=>"父类栏目不能和栏目相同",
	'channel_id_not_exists'=>"栏目【channelid】不存在",
	'channel_id_ext_not_exists'=>"栏目扩展【channelid】不存在",
	'channel_name_empty'=>"栏目名称不能为空",
	'channel_empty'=>"栏目不能为空",
	'channel_update_success'=>"更新栏目成功",
	'channel_update_error'=>"栏目【flagAry】更新失败",
	'channel_del_empty'=>"删除栏目不能为空",
	'channel_del_son'=>"请删除该栏目下的子栏目",
	'channel_del_content'=>"请先删除栏目下的内容",
	'channel_del_success'=>"栏目【channelid】删除成功",
	'channel_del_error'=>"栏目【channelid】删除失败",
	'channel_content_empty'=>'内容编码不能为空',
	'channel_title_empty'=>'标题不能为空',
	'channel_url_empty'=>'URL不能为空',
	'channel_cmodel_not_exists'=>'内容类型不存在',
	'channel_content_ext_not_exists'=>'内容详细内容记录不存在',
	'channel_last_id'=>'请选择最低一级栏目',
	'channel_one_limit'=>'该栏目只可以添加一条记录',
	'channel_content_id_empty'=>'请选择要删除的内容记录',
	'channel_content_not_exist'=>'要删除的记录不存在',
		
	//广告管理
	'spaceid_empty'=>'广告位置ID为空',
	'space_ad_exists'=>'广告位下还有广告',
	'space_not_exists'=>'广告位不存在',
	'space_delete_success'=>'广告位删除成功',
	'space_delete_error'=>'广告位删除失败',
	'space_name_empty'=>'广告位名称不能为空',
	'ad_id_empty'=>'广告ID为空',
	'ad_not_exists'=>'广告不存在',
	'ad_delete_success'=>'广告删除成功',
	'ad_delete_error'=>'广告删除失败',
	'ad_name_empty'=>'广告名称不能为空',
	'ad_space_empty'=>'请选择广告位',
	'ad_no_category'=>'请选择广告类型',
	'ad_image_empty'=>'广告图片地址不能为空',
	'ad_text_empty'=>'广告文本不能为空',
	'ad_code_empty'=>'广告代码不能为空',
	'save_ad_success'=>'保存广告成功',
	'save_ad_error'=>'保存广告失败',
		
	//留言
	'gb_categoryid_empty'=>'留言分类id为空',
	'gb_category_empty'=>'留言分类不存在',
	'gb_categoryname_empty'=>'留言分类名称不能为空',
	'gb_priority_error'=>'排序错误',
	'gb_category_delete_ok'=>'留言分类删除成功',
	'gb_category_delete_error'=>'留言分类删除失败',
	'gb_empty'=>'留言不存在',
	'gb_content_empty'=>'留言内容不能为空',
	'gb_cat_empty'=>'留言分类不能为空',
	'gb_check_empty'=>'审核状态不能为空',
	'gb_save_success'=>'留言保存成功',
	'gb_save_error'=>'留言保存失败',
	'gb_id_empty'=>'留言id为空',
	'gb_delete_ok'=>'留言删除成功',
	'gb_delete_error'=>'留言删除失败',
    'rp_save_success'=>'回复保存成功',
    'rp_save_error'=>'回复保存失败',
	
	//新闻
	'news_title_empty'=>'标题不能为空',
	'news_publisher_empty'=>'发布人不能为空',
	'news_content_empty'=>'内容不能为空',
	'news_wechat_big'=>'微信资讯需上传微信大图',
	'news_wechat_small'=>'微信资讯需上传微信小图',
	//功能节点
	'func_child_notempty'=>'子功能数大于0',
	'func_name_empty'=>'功能名称不能为空',
	'func_code_empty'=>'功能代码不能为空',
	'func_url_empty'=>'功能URL不能为空',
		
	//角色
	'role_empty'=>'角色不存在',
	'role_manager_exist'=>'角色下还有管理员账号',
	'role_name_long'=>'输入不能大于64个字符',
	'role_name_empty'=>'角色名称选项不能为空',
	'role_name_exist'=>'角色名称已存在',
		
	//用户
	'manager_loginname_empty'=>'登录名不能为空',
	'manager_loginname_exist'=>'登录名已存在',
	'manager_name_empty'=>'用户名不能为空',
	'manager_pass_empty'=>'密码不能为空',
	'manager_pass_unequal'=>'两次密码输入不一致',
	'manager_status_ok'=>'开启',
	'manager_status_off'=>'关闭',
	
	//商品
	'cls_parent_empty'=>'父级分类不存在',
	'cls_exist'=>'分类编码已存在',
	'cls_not_exist'=>'分类编码不存在',
	'cls_child_notempty'=>'含有子分类无法删除',
	'cls_item_notempty'=>'分类下含有产品无法删除',
	'item_add_success'=>'新建商品成功',
	'item_add_error'=>'新建商品失败',
	'item_barcode_exist'=>'商品条码已存在',
	'item_barcode_db_exist'=>'该条码在多条码表已存在',
	'item_update_success'=>'商品更新成功',
	'item_update_error'=>'商品更新失败',
	'item_barcode_success'=>'条码添加成功',
	'item_barcode_error'=>'条码添加失败',
	'item_barcode_not_exist'=>'商品条码不存在',
	'item_barcode_delete'=>'商品条码删除成功',
	'item_sup_not_exist'=>'供应商不存在',
	'item_sup_price_exist'=>'该商品的供应商约定价格记录已存在',
	'item_sup_success'=>'添加记录成功',
	'item_sup_fail'=>'添加记录失败',
	'item_default_img_set'=>'成功设置默认图片',
	'item_comb_model_empty'=>'商品组合记录为空',
	'item_bp_add_success'=>'添加分店价格记录成功',
	'item_bp_add_fail'=>'添加分店价格记录失败,请重试',
	'item_bp_del_success'=>'删除分店价格记录成功',
	'item_bp_del_fail'=>'删除分店价格记录失败',
		
	//基础代码
	'basecode_empty'=>'基础代码编号不能为空',
	'basecode_name_empty'=>'基础代码名称不能为空',
	'basecode_exist'=>'基础代码已存在',
	'brand_not_exist'=>'商品品牌不存在',
		
	//商品存量指标
	'probase_item_notexist'=>'[item]商品库存调整记录不存在',
	'probase_branchno_empty'=>'仓库不能为空',
	'probase_stock_del_success'=>'商品存量指标删除成功',
	'probase_stock_del_error'=>'商品存量指标删除失败',
		
	//调价单
	'pcprice_be_approve'=>'删除的单据必须是未审核的单据',
	'pcprice_sheetno_empty'=>'单据编号不能为空',
	'pcprice_sheetnocls_empty'=>'单据分类不能为空',
	'pcprice_itemno_empty'=>'单据分类不能为空',
	'pcprice_check_success'=>'调价单审核成功',
	'pcprice_master_fail'=>'更新主表失败',
	'pcprice_check_fail'=>'调价单审核成功',
	'pcprice_check_not_approve'=>'审核的单据必须是未审核的单据',
	'pcprice_md_all_in'=>'全部调入',
	'pcprice_md_part_in'=>'全部调入',
	'pcprice_md_unhandle'=>'未处理',
		
	//会员
	'member_uname_empty'=>'用户名不能为空',
	'member_phone_empty'=>'手机不能为空',
	'member_uname_occupied'=>'用户名已使用',
	'member_mobile_occupied'=>'手机号已使用',
	'member_ucode_occupied'=>'用户编码已使用',
	'member_passwd_unequal'=>'两次输入密码不相同',
	'member_levelname_empty'=>'会员等级不能为空',
		
	//供应商
	'sup_empty_no'=>'编号不能为空',
	'sup_empty_name'=>'名称不能为空',
	'sup_empty_company'=>'公司名称不能为空',
	'sup_empty_mobile'=>'联系电话不能为空',
	'sup_exists_no'=>'供应商编号已存在',
		
	//采购单
	'po_delete_fail'=>'采购单删除失败',
	'po_delete_success'=>'采购单删除成功',
	'po_check_success'=>'采购单审核成功',
	'po_check_fail'=>'采购单审核失败',
	'po_check_not_approve'=>'审核的单据必须是未审核的单据',
	'po_empty_details'=>'请输入单据明细数据',
	'po_stop_fail'=>'中止失败',
	'po_stop_success'=>'中止成功',
	'po_stop_isapprove'=>'终止的单据必须是已审核的未终止单据',
	'po_empty_sheetno'=>'单据编号不能为空',
	'po_empty_type'=>'单据类型不能为空',
	'po_empty_dbno'=>'单据数据库操作方式',
	'po_empty_branchno'=>'收货门店/仓库不能为空',
	'po_empty_sup'=>'供应商不能为空',
	'po_empty_oper'=>'采购员编号不能为空',
	'po_empty_amount'=>'单据金额不能为空',
	'po_error_amount'=>'单据金额格式不正确',
	'po_empty_vali_date'=>'交货期限不能为空',
	'po_empty_pay_date'=>'付款期限不能为空',
	'po_md_all_in'=>'全部调入',
	'po_md_part_in'=>'部分调入',
	'po_md_unhandle'=>'未处理',
	
	//采购收货
	'pi_unhandle_po'=>'采购收货中有未处理的采购单记录，请先处理',
	'pi_empty_po'=>'采购单不能为空',
	'pi_delete_success'=>'采购收货单删除成功',
	'pi_md_part_handle'=>'部分处理',
	'pi_md_all_handle'=>'全部处理',
	'pi_md_un_handle'=>'未处理',
	'pi_md_stop'=>'终止',
	'pi_md_un_submit'=>'待提交',
	'pi_md_is_approve'=>'已审核',
	'pi_md_not_approve'=>'未审核',
		
		
	//要货单
	'yh_check_success'=>'要货单审核成功',
	'yh_check_fail'=>'要货单审核失败',
	'yh_stock_unenough'=>'库存不足',
	'yh_check_not_approve'=>'审核的单据必须是未审核的单据',
	'yh_delete_success'=>'要货单删除成功',
	
	//促销方案
	'plan_empty_branch'=>'请选择门店',
	'plan_empty_detail'=>'请输入促销详细信息',
	'plan_empty_send'=>'请输入促销赠送信息',
	'plan_del_not_chk'=>'删除的单据必须是未审核的单据',
	'plan_chk_fail'=>'审核失败',
	'plan_chk_succ'=>'审核成功',
	'plan_chk_not_chk'=>'审核的单据必须是未审核的单据',
	'plan_stop_fail'=>'终止失败',
	'plan_stop_succ'=>'终止成功',
	'plan_stop_not_chk'=>'终止的单据必须是已审核的单据',
	'plan_del_fail'=>'促销方案删除失败',
	'plan_del_succ'=>'促销方案删除成功',
		
	//礼券
	'gf_not_num'=>'面额不正确',
	'gf_wrong_ticket'=>'礼券编号不能小于6位大于20位',
	'gf_can_use'=>'可用',
	'gf_cant_use'=>'不可用',
	'gf_is_used'=>'已使用',
	'gf_delete_success'=>'礼券删除成功',
	
	//账号
	'acc_name_empty'=>'账户名称不能为空',
	'acc_no_empty'=>'账户编号不能为空',
	'acc_amount_empty'=>'账户余额不能为空',
	//付款单
	'py_account_empty'=>'结算账户不能为空',
	'py_money_empty'=>'付款金额不能为空',
	'py_receiver_empty'=>'收款对象不能为空',
		
	//POS机
	'pos_normal'=>'正常',
	'pos_stop'=>'停用',
	'pos_bind'=>'已绑定',
	'pos_unbind'=>'未绑定',
	'pos_id_empty'=>'POS机编号不能为空',
	'pos_id_exists'=>'POS机编码已存在',
	'pos_empty_branch'=>'分店不存在',
	'pos_unbind_success'=>'解绑成功',
	'pos_unbind_fail'=>'解绑失败',
	'pos_unbind_pos'=>'当前POS机未绑定或已停用，不需要解绑',
	'pos_un_exists'=>'当前POS机不存在',
	'pos_delete_succ'=>'POS机删除成功',
	'pos_delete_fail'=>'POS机删除失败',
		
	//营业员
	'oper_no_empty'=>'营业员编号不能为空',
	'oper_no_exists'=>'营业员编号已存在',
	'oper_delete_succ'=>'营业员删除成功',
	'oper_delete_fail'=>'营业员删除失败',
	'oper_not_exists'=>'营业员不存在',
	'oper_empty_passwd'=>'营业员登录密码不能为空',
		
	//盘点单
	'pd_del_not_chk'=>'删除的单据必须是未审核的单据',
	'pd_no_delete_success'=>'盘点批号删除成功',
	'pd_branch_empty'=>'仓库不存在',
	'pd_sheetno_success'=>'盘点号创建成功',
	'pd_sheetno_fail'=>'盘点号创建失败',
	'pd_sheetno_notuse'=>'此盘点编号不能使用',
	'pd_sheetno_notexist'=>'此盘点批号不存在',
	'pd_master_notexist'=>'库存盘点单不存在',
	'pd_sheet_success'=>'库存盘点单保存成功',
	'pd_sheet_fail'=>'库存盘点单创建失败',
	'pd_ud_amount_fail'=>'更新盘点差异单金额失败',
	'pd_dif_notexist'=>'盘点差异单不存在',
	'pd_del_detail_fail'=>'删除盘点差异单明细失败',
	'pd_record_notexist'=>'盘点单记录不存在',
	'pd_del_fail'=>'删除数据失败',
	'pd_sheet_delete_ok'=>'盘点单删除成功',
	'pd_sheetno_nodetail'=>'盘点批号无盘点数据',
	'pd_approve_success'=>'盘点单审核成功',
	'pd_apv_data_fail'=>'更新数据失败',
	'pd_apv_stock_fail'=>'更新库存异常',
	'pd_apv_error'=>'数据审核异常',
	'pd_apv_fail'=>'审核失败',
	'pd_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'pd_sheetno_empty'=>'盘点号不能为空',
	'pd_delete_success'=>'盘点单删除成功',
	
	//库存调整单
	'st_md_empty_sheet_no'=>'单据编号不能为空',
	'st_md_empty_class'=>'单据分类不能为空',
	'st_md_empty_dno'=>'数据编号不能为空',
	'st_md_empty_itemno'=>'商品编号不能为空',
	'st_md_empty_branch'=>'发货分店编号不能为空',
	'st_md_empty_d_branch'=>'要货分店编号不能为空',
	'st_md_empty_oper_id'=>'申请人编号不能为空',
	'st_md_wrong_amt'=>'单据金额格式不正确',
	'st_md_wrong_pack'=>'箱数格式不正确',
	'st_md_wrong_price'=>'单价格式不正确',
	'st_md_wrong_order'=>'订单数量格式不正确',
	'st_md_wrong_itemprice'=>'商品金额不正确',
	'st_empty_details'=>'请输入单据明细数据',
	'st_approve_success'=>'库存调整单审核成功',
	'st_approve_fail'=>'库存调整单审核失败',
	'st_emtpy_record'=>'库存调整单记录不存在',
	'st_del_record_fail'=>'库存调整单记录删除失败',
	'st_no_stock'=>'库存不足',
	'st_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'st_del_not_apv'=>'删除的单据必须是未审核的单据',
	'st_del_success'=>'库存调整单删除成功',
		
	//报损单
	'jo_empty_details'=>'请输入单据明细数据',
	'jo_approve_success'=>'报损单审核成功',
	'jo_approve_fail'=>'报损单审核失败',
	'jo_emtpy_record'=>'报损单记录不存在',
	'jo_del_record_fail'=>'报损单记录删除失败',
	'jo_no_stock'=>'库存不足',
	'jo_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'jo_del_not_apv'=>'删除的单据必须是未审核的单据',
	'jo_del_success'=>'报损单删除成功',
		
	//直调出库单
	'mo_empty_details'=>'请输入单据明细数据',
	'mo_approve_success'=>'直调出库单审核成功',
	'mo_approve_fail'=>'直调出库单审核失败',
	'mo_emtpy_record'=>'直调出库单记录不存在',
	'mo_del_record_fail'=>'直调出库单记录删除失败',
	'mo_no_stock'=>'库存不足',
	'mo_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'mo_del_not_apv'=>'删除的单据必须是未审核的单据',
	'mo_del_success'=>'直调出库单删除成功',
		
	//直调入库单
	'mi_empty_details'=>'请输入单据明细数据',
	'mi_approve_success'=>'直调入库单审核成功',
	'mi_approve_fail'=>'直调入库单审核失败',
	'mi_emtpy_record'=>'直调入库单记录不存在',
	'mi_del_record_fail'=>'直调入库单记录删除失败',
	'mi_no_stock'=>'库存不足',
	'mi_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'mi_del_not_apv'=>'删除的单据必须是未审核的单据',
	'mi_del_success'=>'直调入库单删除成功',
	'mi_unhandle_exist'=>'当前调出单号已经存在未处理的调入记录',
	'mi_mo_success'=>'出库单验证成功',

	//客户结算单
	'rp_md_empty_no'=>'单据编号不能为空',
	'rp_md_empty_trans_no'=>'单据分类不能为空',
	'rp_md_empty_db_no'=>'操作编号不能为空',
	'rp_md_empty_branch_no'=>'发货分店编号不能为空',
	'rp_md_empty_dbranch_no'=>'发货分店编号不能为空',
	'rp_md_empty_operid'=>'制单人编号不能为空',
	'rp_md_empty_amt'=>'单据金额格式不正确',
	'rp_amount_empty'=>'实收金额不能为零',
	'rp_approve_success'=>'审核成功',
	'rp_approve_fail'=>'审核失败',
	'rp_stock_lack'=>'商品库存不足',
	'rp_empty_record'=>'记录不存在',
	'rp_delete_fail'=>'删除失败',
	'rp_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'rp_del_success'=>'客户结算单删除成功',
	'rp_del_not_chk'=>'删除的单据必须是未审核的单据',
	'rp_must_chk'=>'结算单据【sheet_no】没有审核，请先审核',
		
	//批发客户档案
	'ws_del_main_fail'=>'删除主表信息出错',
	'ws_error'=>'数据异常',
	'ws_c_del_success'=>'批发客户删除成功',
	'ws_c_del_fail'=>'批发客户删除失败',
	'ws_approve_success'=>'审核成功',
	'ws_approve_error'=>'审核失败',
	'ws_empty_details'=>'请输入明细数据',
	'ws_approve_success'=>'批发订单审核成功',
	'ws_approve_fail'=>'批发订单审核失败',
	'ws_stock_lack'=>'商品库存不足',
	'ws_empty_record'=>'记录不存在',
	'ws_delete_fail'=>'删除失败',
	'ws_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'ws_del_record_fail'=>'批发订单记录删除失败',
	'ws_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'ws_del_not_apv'=>'删除的单据必须是未审核的单据',
	'ws_del_success'=>'批发订单删除成功',
	'ws_md_wrong_amt'=>'单据金额格式不正确',
	'ws_md_wrong_pack'=>'箱数格式不正确',
	'ws_md_wrong_price'=>'单价格式不正确',
	'ws_md_wrong_order'=>'订单数量格式不正确',
	'ws_md_wrong_itemprice'=>'商品金额不正确',
	'ws_md_empty_itemno'=>'商品编号不能为空',
	'ws_md_empty_sheet_no'=>'单据编号不能为空',
		
	//批发销售单
	'wm_so_sheetno_used'=>'批发订单【sheetno】，已被批发销售单【sheet_no】占用，请先审核该销售单！！',
	'wm_so_sheet_null'=>'此订单不存在',
	'wm_empty_details'=>'请输入明细数据',
	'wm_approve_success'=>'批发销售单审核成功',
	'wm_approve_fail'=>'批发销售单审核失败',
	'wm_stock_lack'=>'商品库存不足',
	'wm_empty_record'=>'记录不存在',
	'wm_delete_fail'=>'删除失败',
	'wm_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'wm_del_record_fail'=>'批发销售单记录删除失败',
	'wm_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'wm_del_not_apv'=>'删除的单据必须是未审核的单据',
	'wm_del_success'=>'批发销售单删除成功',
	'wm_md_all_in'=>'全部调入',
	'wm_md_part_in'=>'部分调入',
	'wm_md_unhandle'=>'未处理',
		
	//批发退货单
	'ri_empty_record'=>'此订单不存在',
	'ri_empty_details'=>'请输入单据明细数据',
	'ri_approve_success'=>'批发退货单审核成功',
	'ri_approve_fail'=>'批发退货单审核失败',
	'ri_no_stock'=>'商品库存不足',
	'ri_del_record_fail'=>'批发退货单记录删除失败',
	'ri_apv_not_chk'=>'审核的单据必须是未审核的单据',
	'ri_del_not_apv'=>'删除的单据必须是未审核的单据',
	'ri_del_success'=>'批发退货单删除成功',
		
	//日结报表
	'rep_time_wrong'=>'上次日结时间不能晚于结束时间',
	'rep_empty_data'=>'没有需要日结数据',
	'rep_fail'=>'日结失败',
	'rep_success'=>'日结成功',
	'rep_repeat_timezone'=>'指定时间段内已经存在日结数据',

    //积分
    'rate_not_num'=>'积分倍率必须为数字',
    'integral_delete_success'=>'积分方案删除成功',
);
?>