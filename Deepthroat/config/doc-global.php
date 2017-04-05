<?php
/**
 * @author 一滴水 QQ:348681066
 * @var $tag   global array  
 * @copyright SHLCMS
 * SHLCMS 全局数组定义
 * 程序执行完后将被自动注销
 */
// 标签数组
$tag				        = array();

$tag['site.url']            = WEBURL;
$tag['site.title'] 	        = SITENAME;
$tag['site.keywords'] 	    = SITEKEYWORDS;
$tag['site.description']    = SITESUMMARY;

$tag['site.mobilephone'] 	= SITEMOBILEPHONE;
$tag['site.telephone']      = SITETELEPHONE;
$tag['site.qq'] 	        = SITEQQ;
$tag['site.fax']            = SITEFAX;
$tag['site.email'] 	        = SITEEMAIL;
$tag['site.address']        = SITEADDRESS;

$tag['channel.menuname'] 	= $pfileName;
$tag['channel.title']		= seo::getChannelTitle();
$tag['channel.keywords'] 	= seo::getChannelKeywords();
$tag['channel.description'] = seo::getChannelDescription();
$tag['channel.ico']			= '';

$tag['title']		    	= seo::getTitle();
$tag['keywords'] 	    	= seo::getKeywords();
$tag['description']     	= seo::getDescription();

//$tag['seo.title']		    = string_join($tag['title']).string_join($tag['channel.title']).string_join($tag['site.title'],'');
//$tag['seo.keywords'] 	    = trim(trim(string_join($tag['keywords']).string_join($tag['channel.keywords']).string_join($tag['site.keywords'],'')),'-');
//$tag['seo.description']     = trim(trim(string_join($tag['description']).string_join($tag['channel.description']).string_join($tag['site.description'],'')),'-');

$tag['seo.title']		    = string_join($tag['title']).string_join($tag['channel.title']).string_join($tag['site.title'],'');
$tag['seo.keywords'] 	    = !empty($tag['keywords']) ? $tag['keywords'] : (!empty($tag['channel.keywords']) ? $tag['channel.keywords'] : $tag['site.keywords']);
$tag['seo.description']     = !empty($tag['description']) ? $tag['description'] : (!empty($tag['channel.description']) ? $tag['channel.description'] : $tag['site.description']);

//....
$tag['path.root'] 	        = ROOTPATH;
$tag['path.skin'] 	        = ROOTPATH.'/'.SKINROOT.'/'.STYLENAME.'/';
$tag['path.upload']         = UPLOADPATH;

//数据数组
$tag['data.results']		= array();
$tag['data.row']			= array();
$tag['data.other']			= array();
$tag['pager.en']			= '';
$tag['pager.cn']			= '';
$tag['pager.data.up']		= array();
$tag['pager.data.down']		= array();

$tag['form.action.search']	= URLREWRITE ? '/search/' : './?m=search';