<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
$db = Typecho_Db::get();
$sjdq=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vStore'));
$ysj = $sjdq['value'];
if(isset($_POST['type']))
{ 
	if($_POST["type"]=="备份模板数据"){
		if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vStorebf'))){
		$update = $db->update('table.options')->rows(array('value'=>$ysj))->where('name = ?', 'theme:vStorebf');
		$updateRows= $db->query($update);
		echo '<div class="tongzhi">备份已更新，请等待自动刷新！如果等不到请点击';
		?>    
		<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
		<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
		<?php
		}else{
		if($ysj){
			 $insert = $db->insert('table.options')
			->rows(array('name' => 'theme:vStorebf','user' => '0','value' => $ysj));
			 $insertId = $db->query($insert);
		echo '<div class="tongzhi">备份完成，请等待自动刷新！如果等不到请点击';
		?>    
		<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
		<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
		<?php
		}
		}
	}
	if($_POST["type"]=="还原模板数据"){
		if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vStorebf'))){
		$sjdub=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vStorebf'));
		$bsj = $sjdub['value'];
		$update = $db->update('table.options')->rows(array('value'=>$bsj))->where('name = ?', 'theme:spzac');
		$updateRows= $db->query($update);
		echo '<div class="tongzhi">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
		?>    
		<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
		<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
		<?php
		}else{
		echo '<div class="tongzhi">没有模板备份数据，恢复不了哦！</div>';
		}
	}
	if($_POST["type"]=="删除备份数据"){
		if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:vStorebf'))){
		$delete = $db->delete('table.options')->where ('name = ?', 'theme:vStorebf');
		$deletedRows = $db->query($delete);
		echo '<div class="tongzhi">删除成功，请等待自动刷新，如果等不到请点击';
		?>    
		<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
		<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
		<?php
		}else{
		echo '<div class="tongzhi">不用删了！备份不存在！！！</div>';
		}
	}
}
 
  
    /**
	 *  设置样式+面板
	 */	 
	echo '<link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Noto+Serif+SC:300&display=swap" rel="stylesheet"><script src="//cdn.staticfile.org/jquery/3.4.1/jquery.min.js"></script>';

	echo '<div class="miracles-pannel">
	<h1>vStore 设置面板</h1>
    <hr>
    
   	  <form class="protected" action="?MiraclesBackup" method="post">
        <input type="submit" name="type" class="miracles-backup-button backup" value="备份模板数据" />&nbsp;&nbsp;
	    <input type="submit" name="type" class="miracles-backup-button recover" value="还原模板数据" />&nbsp;&nbsp;
	    <input type="submit" name="type" class="miracles-backup-button delete" value="删除备份数据" />
	  </form>
      
	</div>';

     /**
	 *  留言面板
	 */	   
  
    $imghdp = new Typecho_Widget_Helper_Form_Element_Text('imghdp', NULL, NULL, _t('<hr>首页2个推荐位置'), _t(''));
    $form->addInput($imghdp);
  
	$tipa = new Typecho_Widget_Helper_Form_Element_Textarea('tipa', NULL, NULL, _t('首页公告1'), _t(''));
    $form->addInput($tipa);

	$tipb = new Typecho_Widget_Helper_Form_Element_Textarea('tipb', NULL, NULL, _t('首页公告2'), _t(''));
    $form->addInput($tipb);
	
    $qq = new Typecho_Widget_Helper_Form_Element_Text('qq', NULL, NULL, _t('联系QQ号码'), _t(''));
    $form->addInput($qq);  

    $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, NULL, _t('ICP备案号'), _t(''));
    $form->addInput($icp);
}

function themeFields($layout) {
	$thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('自定义缩略图'), _t(''));
	$thumb->input->setAttribute('class', 'w-100');
	$layout->addItem($thumb);
	$version = new Typecho_Widget_Helper_Form_Element_Text('version', NULL, NULL, _t('最近版本'), _t(''));
	$version->input->setAttribute('class', 'w-100');
	$layout->addItem($version);
	$demo = new Typecho_Widget_Helper_Form_Element_Text('demo', NULL, NULL, _t('演示地址'), _t(''));
	$demo->input->setAttribute('class', 'w-100');
	$layout->addItem($demo);
	$advice = new Typecho_Widget_Helper_Form_Element_Text('advice', NULL, NULL, _t('支持设备'), _t(''));
	$advice->input->setAttribute('class', 'w-100');
	$layout->addItem($advice);
	$env = new Typecho_Widget_Helper_Form_Element_Text('env', NULL, NULL, _t('环境要求'), _t(''));
	$env->input->setAttribute('class', 'w-100');
	$layout->addItem($env);
	$price = new Typecho_Widget_Helper_Form_Element_Text('price', NULL, NULL, _t('在线价格'), _t(''));
	$price->input->setAttribute('class', 'w-100');
	$layout->addItem($price);
	$jiaocheng = new Typecho_Widget_Helper_Form_Element_Textarea('jiaocheng', NULL, NULL, _t('操作教程'), _t(''));
	$jiaocheng->input->setAttribute('style', 'width:100%;min-height:150px;');
	$layout->addItem($jiaocheng);
}

function get_post_view($archive)
{
  $cid = $archive->cid;
  $db = Typecho_Db::get();
  $prefix = $db->getPrefix();
  if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
    $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
    echo 0;
    return;
  }
  $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
  if ($archive->is('single')) {
    $views = Typecho_Cookie::get('extend_contents_views');
    if (empty($views)) {
      $views = array();
    } else {
      $views = explode(',', $views);
    }
    if (!in_array($cid, $views)) {
      $db->query($db->update('table.contents')->rows(array('views' => (int)$row['views'] + 1))->where('cid = ?', $cid));
      array_push($views, $cid);
      $views = implode(',', $views);
      Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
    }
  }
  echo $row['views'];
}

function getCategory($widget) {
  $db = Typecho_Db::get();
  $sql = $db->select()->from('table.contents')
    ->where('table.contents.cid = ?', $widget->cid);
  $content = $db->fetchRow($sql);
  $arr = array();
  if($content){
    $content = $widget->filter($content);
    $arr['category'] = $content['categories'][0]['name'];
    $arr['url'] = $content['categories'][0]['permalink'];
    return $arr;
  }else{
    return false;
  }
}


function CommentAuthor($obj, $autoLink = NULL, $noFollow = NULL) {
	$options = Helper::options();
	$autoLink = $autoLink ? $autoLink : $options->commentsShowUrl;
	$noFollow = $noFollow ? $noFollow : $options->commentsUrlNofollow;
	if ($obj->url && $autoLink) {
		echo '<a href="'.$obj->url.'"'.($noFollow ? ' rel="external nofollow"' : NULL).(strstr($obj->url, $options->index) == $obj->url ? NULL : ' target="_blank"').'>'.$obj->author.'</a>';
	} else {
		echo $obj->author;
	}
}

function CommentAt($coid){
	$db = Typecho_Db::get();
	$prow = $db->fetchRow($db->select('parent')->from('table.comments')
		->where('coid = ? AND status = ?', $coid, 'approved'));
	$parent = $prow['parent'];
	if ($prow && $parent != '0') {
		$arow = $db->fetchRow($db->select('author')->from('table.comments')
			->where('coid = ? AND status = ?', $parent, 'approved'));
		echo '<b class="comment-at">@'.$arow['author'].'</b>';
	}
}

function hrefOpen($obj) {
	return preg_replace('/<a\b([^>]+?)\bhref="((?!'.addcslashes(Helper::options()->index, '/._-+=#?&').'|\#).*?)"([^>]*?)>/i', '<a\1href="\2"\3 target="_blank">', $obj);
}

function Whisper($sidebar = NULL) {
	$db = Typecho_Db::get();
	$options = Helper::options();
	$page = FindContents('page-whisper.php', 'commentsNum', 'd');
	$p = $sidebar ? 'li' : 'p';
	if ($page) {
		$page = $page[0];
		$title = $sidebar ? '' : '<h2 class="post-title"><a href="'.$page['permalink'].'">'.$page['title'].'<span class="more">···</span></a></h2>'."\n";
		$comment = $db->fetchAll($db->select()->from('table.comments')
			->where('cid = ? AND status = ? AND parent = ?', $page['cid'], 'approved', '0')
			->order('coid', Typecho_Db::SORT_DESC)
			->limit(1));
		if ($comment) {
			$content = hrefOpen(Markdown::convert($comment[0]['text']));
			if ($options->AttUrlReplace) {
				$content = UrlReplace($content);
			}
			echo $title.strip_tags($content, '<p><br><strong><a><img><pre><code>'.$options->commentsHTMLTagAllowed)."\n".($sidebar ? '<li class="more"><a href="'.$page['permalink'].'">查看更多...</a></li>'."\n" : '');
		} else {
			echo $title.'<'.$p.'>暂无内容</'.$p.'>'."\n";
		}
	} else {
		echo ($sidebar ? '' : '<h2 class="post-title"><a>轻语</a></h2>'."\n").'<'.$p.'>暂无内容</'.$p.'>'."\n";
	}
}
