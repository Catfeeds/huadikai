<?php
//数据库配置字段
define('DB_HOSTNAME','localhost');
define('DB_USER','sa');
define('DB_PASSWORD','123');
define('DB_DBNAME','huadikai');
define('TB_PREFIX','doc_');
//模板配置字段
define('WEBOPEN',true);
define('WEBSIZE','500');
define('WEBSIZECOUNTS','111');
define('WEBURL','www.huadikai.com');
define('SITENAME','佛山市华迪凯陶瓷有限公司');
define('SITEKEYWORDS','佛山市华迪凯陶瓷有限公司');
define('SITESUMMARY','佛山市华迪凯陶瓷有限公司');
define('SITEMOBILEPHONE','0757-82560662');
define('SITETELEPHONE','0757-82560662');
define('SITEQQ','82560662');
define('SITEFAX','0757-82560662');
define('SITEEMAIL','82560662@qq.com');
define('SITEADDRESS','佛山市南庄镇瓷海国际C区15座22号');
define('HTMLPATH','');
define('UPLOADPATH','/upload/');
define('TIMEZONENAME','8');
define('STYLENAME','huadikai');
define('URLREWRITE',false);
define('CACHETIME','0');
//评论审核
define('COMMENTAUDITING',false);
//留言审核
define('GUESTBOOKAUDITING',true);

define('SKINROOT','skins');
//系统开始运行时间
define('doccmsbirthday','2014-02-24');//此处如无需要请不要随意更改，否则将无法正常运行
//编辑器
define('EDITORSTYLE','kindeditor');
//默认设置
define('ABSPATH',dirname(__FILE__).'/../../');
define('ROOTPATH',''); //类似于 /xmlol (注意后面不带 /)
define('VERSION','X2013 1.0.1221');
$fileIndex 	= 'index.html';
$fileCommon = 'common.html';
//水印图片
define('ISWATER',false);
define('WATERIMGS','/upload/201611/20161113155135889.png');
//缩略图背景颜色设置
define('paint_bgcolor','0xffffff');
//首页调用模板图片的默认尺寸
define('articleWidth','140');
define('articleHight','105');
define('listWidth','370');
define('listHight','246');
define('productWidth','260');
define('productHight','260');
define('pictureWidth','140');
define('pictureHight','105');
//列表模块页缩略图大小设置

define('moduleUserWidth','120');
define('moduleUserHight','120');
/*上传图片的大小设置*/
define('productMiddlePicWidth','300');
define('productMiddlePicHight','300');
define('productSmallPicWidth','191');
define('productSmallPicHight','169');
define('pictureMiddlePicWidth','560');
define('pictureMiddlePicHight','420');
define('pictureSmallPicWidth','236');
define('pictureSmallPicHight','156');
define('videoWidth','300');
define('videoHight','225');
define('userWidth','120');
define('userHight','120');
define('linkersWidth','90');
define('linkersHight','30');
//内容页列表模块单页显示默认条数
define('listCount','12');
define('pictureCount','12');
define('productCount','12');
define('videoCount','12');
define('guestbookCount','10');
define('commentCount','6');
define('jobsCount','6');
define('calllistCount','6');
define('downloadCount','10');
//后台登录绑定IP
define('LOGINIP','');
//SMTP邮箱设置
define('productISON',false);
define('orderISON',false);
define('guestbookISON',false);
define('smtpPort','');
define('smtpServer','');
define('smtpId','');
define('smtpPwd','');
define('smtpSender','');
define('smtpReceiver','');
//支付宝设置
define('PAY_ISPAY','0');
define('PAY_ISJS','1');
define('PAY_PARTNER','');
define('PAY_KEY','');
define('PAY_SELLER','');
define('PAY_SHOW_URL','');
define('PAY_MAINNAME','');
//财付通设置
define('PAY_ISPAY_TEN','0');
define('PAY_ISJS_TEN','1');
define('PAY_PARTNER_TEN','');
define('PAY_KEY_TEN','');
define('PAY_SELLER_TEN','');
define('PAY_SHOW_URL_TEN','');
define('PAY_MAINNAME_TEN','');
function get_skin_root()
{
	return ROOTPATH.'/'.SKINROOT.'/'.STYLENAME.'/';
}
function get_abs_skin_root()
{
	return ABSPATH.'/'.SKINROOT.'/'.STYLENAME.'/';
}
function get_root_path()
{
	return ROOTPATH;
}
?>