<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>みつばち | メンズエステ | 大阪 | 天神橋六丁目 | 扇町 | 南森町 | 長堀橋</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Miss Mrs" />

<meta name="description" content="みつばち | メンズエステ | 大阪 | 天神橋六丁目 | 扇町 | 南森町 | 長堀橋" />
<meta name="keywords" content="みつばち | メンズエステ | 大阪 | 天神橋六丁目 | 扇町 | 南森町 | 長堀橋" />

<!-- START:SNS meta-->
<?php include("common/sns_meta.html"); ?>
<!-- END:SNS meta-->

<!-- START:SNS meta-->
<?php include("common/css.html"); ?>
<!-- END:SNS meta-->
</head>
<body>

	<div class="fh5co-loader"></div>

	<div id="page">


		<!-- START:header -->

		<!-- START:Navigation-->
		<?php include("common/navi.html"); ?>
		<!-- END:header -->
		<!-- START:Main -->

		<div id="page-top"></div>
		<!-- START:contact -->
		<div id="fh5co-couple">
			<div class="container">
				<div class="row">
					<h1 class="type1-1">
						<span> Mitsubachi みつばち</span>
					</h1>
					<h2 class="type2-1">
						<span> 求人情報</span>
					</h2>
					<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-md-offset-1 text-center fh5co-heading animate-box">
						<a href="recruit/index.php">
							<img src="images/recruit.png" class="image-witdh100">
						</a>
					</div>

				</div>
			</div>

			<div class="container">
				<div class="row">
					<h2 class="type2-1">
						<span> ご予約・お問合せ</span>
					</h2>
					<div class="col-md-6  text-center fh5co-heading animate-box">
						<a href="tel:080-1524-6132">
							<img src="images/tel.png" class="image-witdh100">
						</a>
					</div>
					<div class="col-md-6  text-center fh5co-heading animate-box">
						<a href="mailto:honey-bee01@docomo.ne.jp">
							<img src="images/mail.png" class="image-witdh100">
						</a>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6  text-center fh5co-heading animate-box">
						<a href="sms:080-1524-6132">
							<img src="images/sms.png" class="image-witdh100">
						</a>
					</div>

					<div class="col-md-6  text-center fh5co-heading animate-box">
						<a href="http://line.me/ti/p/syj882TyuO">
							<img src="images/line.png" class="image-witdh100">
						</a>
					</div>
				</div>
			</div>

			<!-- END:contact -->

			<!-- START:blog -->

			<div class="container">
				<div class="row">
					<h2 class="type2-1">
						<span> みつばちのブログ</span>
					</h2>
					<div class="col-md-6  text-center fh5co-heading animate-box blog">
						<h3 class="index-h3">みつばちの出勤ブログ</h3>
						<div class="text-left">
							<?php
                                // モジュールを読み込む
                                require_once("./magpierss/rss_fetch.inc");

                                // キャッシュディレクトリへのパスを設定
                                // キャッシュディレクトリをchmod 777 (or 707 or 700)
                                define("MAGPIE_CACHE_DIR", "/path/2/cache/");
                                // 日本語バケないためにOUTPUT_ENCODINGをUTF-8にする
                                define("MAGPIE_OUTPUT_ENCODING","UTF-8");
                                // 取得したいRSSのurl
                                $url = "http://blog.livedoor.jp/honeybee0401/atom.xml";

                                // ブログのタイトルは$rss->channel['title']という変数、
                                // RSSは$rss->itemという変数に入る。
                                // key値、link/title/descriptionで取得できる。
                                $rss = fetch_rss( $url );
                                //var_dump ($rss);
                                $max_lines = 10;
                                $line = 0;
                                //echo "". mb_convert_encoding($rss->channel['title'],"UTF-8","auto");
                                foreach ($rss->items as $item) {
                                $link = mb_convert_encoding($item['link'],"UTF-8","auto");
                                $title = mb_convert_encoding($item['title'],"UTF-8","auto");
                                $date = date("Y.m.d H:i", strtotime($item['modified']));
                                if (preg_match("/PR$/", $title) != 0) continue;
                                if (preg_match("/^PR:.+$/", $title) != 0) continue;
                                if ($line++ == $max_lines) break;
                                //echo "<a href=$link>$title</a><br />$description";
                                echo "<dl><dt>$date</dt><dd><a href=\"$link\" target=\"_blank\">$title</a></dd></dl>";
                                }
                                 ?>
							<a href="http://blog.livedoor.jp/honeybee0401/" target="_blank" class="more">
								みつばちの出勤ブログはこちら
								<span>▲</span>
							</a>
						</div>
					</div>

					<div class="col-md-6  text-center fh5co-heading animate-box blog">
						<h3 class="index-h3">みつばちのお知らせブログ</h3>
						<div class="text-left">
							<?php
                                // モジュールを読み込む
                                require_once("./magpierss/rss_fetch.inc");

                                // キャッシュディレクトリへのパスを設定
                                // キャッシュディレクトリをchmod 777 (or 707 or 700)
                                //define("MAGPIE_CACHE_DIR", "/path/2/cache/");
                                // 日本語バケないためにOUTPUT_ENCODINGをUTF-8にする
                               // define("MAGPIE_OUTPUT_ENCODING","UTF-8");
                                // 取得したいRSSのurl
                                $url = "http://feedblog.ameba.jp/rss/ameblo/honey-bee01/rss20.xml";

                                // ブログのタイトルは$rss->channel['title']という変数、
                                // RSSは$rss->itemという変数に入る。
                                // key値、link/title/descriptionで取得できる。
                                $rss = fetch_rss( $url );
                                //var_dump ($rss);
                                $max_lines = 10;
                                $line = 0;
                                //echo "". mb_convert_encoding($rss->channel['title'],"UTF-8","auto");
                                foreach ($rss->items as $item) {
                                $link = mb_convert_encoding($item['link'],"UTF-8","auto");
                                $title = mb_convert_encoding($item['title'],"UTF-8","auto");
                                $date =  date("Y.m.d H:i", intval($item['date_timestamp']));
                                if (preg_match("/PR$/", $title) != 0) continue;
                                if (preg_match("/^PR:.+$/", $title) != 0) continue;
                                if ($line++ == $max_lines) break;
                                //echo "<a href=$link>$title</a><br />$description";
                                echo "<dl><dt>$date</dt><dd><a href=\"$link\" target=\"_blank\">$title</a></dd></dl>";
                                }
                                 ?>
							<a href="http://ameblo.jp/honey-bee01" target="_blank" class="more">
								みつばちのお知らせブログはこちら
								<span>▲</span>
							</a>
						</div>
					</div>

				</div>
			</div>

			<!-- END:blog -->



			<!-- START:About mitsubachi -->

			<div class="container">
				<div class="row">
					<h2 class="type2-1">
						<span> 4/8(土)よりプレオープン！！</span>
					</h2>
					<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-md-offset-1 text-left fh5co-heading animate-box about-missmrs">

						<p>この度、MissMrsの姉妹店として『Mitsubachi(みつばち) 』がオープンいたします。</p>

						<p>当店は大阪市北区の扇町.天六にある完全予約制のプライベートメンズエステです。</p>

						<p>営業時間は午前12:00〜翌朝2:00迄(最終受付24:30)全室駅から近く各駅から2分以内の綺麗なシャワー完備の完全個室型になっております。</p>

						<p>20代〜40代の愛嬌、品、マナーのある素敵な女性が多数在籍しており各セラピストによる貴方様に合った癒しを提供しています。</p>

						<p>セラピストの技術向上の為、当店では研修も徹底している為、お好みの箇所などお気軽にお申し付け下さい。</p>

						<p>当店は、『リピーター様を大事に』がコンセプトです。</p>

						<p>受付時には是非セラピストのタイプをお申し付け下さい。</p>

						<p>新規のお客様に置かれましても、リピーター様になって頂ける様に、お客様に合ったセラピストを御案内致します！</p>

						<p>あそこに行けば間違い無いと言われる様、これからも多数の新人セラピストの導入各セラピストの技術向上、 接客スタイルなど誠心誠意向上していく所存です。</p>

						<p>皆様に最高の癒しと安らぎを提供出来ます様、日々努力致しますので、 メンズエステMitsubachi(みつばち)をこれからもよろしくお願い致します！</p>

					</div>
				</div>
			</div>

			<!-- END:About Mitsubachi -->

			<!-- START:Refnavi -->

			<div class="container">
				<div class="row">
					<h2 class="type2-1">
						<span class="icon-heart"> 相互リンク</span>
					</h2>

					<!-- <div class="col-md-4 text-center fh5co-heading animate-box">
						<a href="http://momi-lg.com/" target="_blank">
							<img src="http://momi-lg.com/img/300_50.gif" alt="モミろぐ" border="0">
						</a>
					</div>
					<div class="col-md-4 text-center fh5co-heading animate-box">
						<a href="http://tokyo.aroma-tsushin.com/" target="_blank">
							<img src="http://tokyo.aroma-tsushin.com/banner/banner-300x060.gif" width="300" height="60" border="0"
								alt="東京のメンズエステと出張マッサージが厳選掲載！アロマパンダ通信" />
						</a>
					</div> -->
					<div class="col-md-4 text-center fh5co-heading animate-box">
						<a href="http://osaka.refle.info/">
							<img src="http://osaka.refle.info/images/area/bunner200_2.gif" alt="マッサージ店を探すならリフナビ大阪">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- END:Refnavi -->

	</div>
	<!-- END:Refnavi -->


	<!-- END:Main -->

	<!-- START:footer -->
	<?php include("common/footer.html"); ?>
	<!-- END:footer -->

	<!-- START:footer menu -->
	<?php include("common/footer_menu.html"); ?>
	<!-- END:footer menu-->

	</div>


	<!-- START: goto top -->
	<?php include("common/gototop.html"); ?>
	<!-- END: goto top -->

	<!-- START: Inclide JS -->
	<?php include("common/js.html"); ?>
	<!-- END: Inclide JS -->

</body>
</html>