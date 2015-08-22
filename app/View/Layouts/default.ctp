<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
	<title>
                Asobiworks
		<?php //echo $cakeDescription ?>
		<?php //echo $this->fetch('title'); ?>
	</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <?php

		echo $this->Html->css(array('style'));
                echo $this->Html->script(array('function'));

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
    
</head>
<body>
<!-- header -->
  <nav>
    <ul>
      <li>asobiworks</li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </nav>

<!-- contents -->
<?php echo $this->fetch('content'); ?>

<!-- footer -->
<footer>
    <div class="container">

      <div id="footercom02">
      <div class="row">
        <div class="col-sm-3 col-md-3 bottom20">
          <p><a href="./見たことない仕事、見に行こう。仕事旅行_files/見たことない仕事、見に行こう。仕事旅行.html">トップページ</a></p>
          <ul class="small">

            <li><a href="https://www.shigoto-ryokou.com/regist/">ユーザー登録</a></li>
            <li><a href="https://www.shigoto-ryokou.com/login?url=https%3A%2F%2Fwww.shigoto-ryokou.com%2F">ログイン</a></li>

                      </ul>
        </div>
        <div class="col-sm-3 col-md-3">
          <p><a href="https://www.shigoto-ryokou.com/about">アソビワークスとは</a></p>
          <ul class="small">
            <li><a href="https://www.shigoto-ryokou.com/profile">会社案内</a></li>
            <li><a href="https://www.shigoto-ryokou.com/flow">アソビまでの流れ</a></li>
            <li><a href="https://www.shigoto-ryokou.com/process">アソビのイメージ</a></li>
          </ul>
                    <p><a href="https://www.shigoto-ryokou.com/all">アソビ一覧</a></p>
          <ul class="small">
            <li><a href="https://www.shigoto-ryokou.com/all">新着順</a></li>
            <li><a href="https://www.shigoto-ryokou.com/all?sort=1">人気順</a></li>
            <li><a href="https://www.shigoto-ryokou.com/all?sort=2">お気に入りの多い順</a></li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-3">
          <p>ヘルプ</p>
          <ul class="small">
            <li><a href="https://www.shigoto-ryokou.com/faq">よくある質問</a></li>
            <li><a href="https://www.shigoto-ryokou.com/cancel">キャンセル料について</a></li>
            <li><a href="https://www.shigoto-ryokou.com/pay">アソビの種類とお支払のタイミング</a></li>
            <li><a href="https://www.shigoto-ryokou.com/contact/">お問い合わせ</a></li>
            <li><a href="https://www.shigoto-ryokou.com/privacy">個人情報保護方針</a></li>
            <li><a href="https://www.shigoto-ryokou.com/rule">利用規約</a></li>
            <li><a href="https://www.shigoto-ryokou.com/toks">特定商取引法に基づく表示</a></li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-3">
          <p>法人のお客様</p>
          <ul class="small">
            <li><a href="https://www.shigoto-ryokou.com/group">団体ツアー、研修、セミナーについて</a></li>
            <li><a href="https://www.shigoto-ryokou.com/event">福利厚生に仕事旅行</a></li>
          </ul>
        </div>
      </div>
      <div class="row bottom30">

        <div class="col-sm-6 col-md-5">
      <div id="CloseFooter" class="btn btn-open03 btn-block bottom20"><i class="fa fa-chevron-up"></i></div>
      </div>
      <div class="copy"><i class="fa fa-copyright"></i> Asobiworks All Right Reserved.</div>
  </footer>
</body>
</html>
