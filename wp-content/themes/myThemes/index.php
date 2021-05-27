<?php get_header() ?>

  <section class="headerWrapper">
		<div class="headerText">
			<h2 class="text1">一人一人に誇れる</h2>
			<h2 class="text2"><span class="text-warning">genre</span>がある</h2>
			<div class="text3">
				<p>誰しも得意分野があるはず</p>
				<p>そう、あなただけの誇れる<span class="text-warning">ジャンル</span></p>
				<p>WEB制作の力で<span class="text-warning">ジャンル</span>をブーストさせます</p>
			</div>
		</div>
	</section>

	<section id="about" class="aboutWrapper">
		<!-- <div id="topButton" class="topButton">
			<a href="#">TOP</a>
		</div> -->
		<div class="topText">
			<h3>About</h3>
		</div>
		<div class="aboutMe">
			<div class="imgMe" id="imgMe">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ore.png" alt="自分の写真" class="img-fluid">
			</div>
			<div class="textMe">
				<h5>名前：大本泰史</h5><br>
				<p class="snsIcon"><a href="https://twitter.com/taishi_Uw_"><i class="fab fa-twitter"></i> @taishi_Uw_</a></p>
				<p>--経歴--</p>
				<p>1998年:<br>人口約500人ほどの島に生まれ、大自然に囲まれながら育つ。</p>
				<p>2017年:<br>松山大学　経済学部　経済学科 入学を機に愛媛県松山市で生活。</p>
        <p>2019年:<br>プログラミングスクールTECH.I.Sでプログラミンングを学習。<br>学習開始から約3カ月で初案件を獲得。</p>
        
				<p>現在:<br>休学し上京。 東京にてWeb制作を行っております。</p>
				<p>--Skill--</p>
				<p><i class="fab fa-html5"></i> HTML / <i class="fab fa-css3-alt"></i> CSS / <i class="fab fa-sass"></i> Sass / 
        <i class="fab fa-js-square"></i> JavaScript / <i class="fab fa-bootstrap"></i> Bootstrap / <br>
        <i class="fab fa-php"></i> PHP / 
				<i class="fas fa-database"></i> mySQL / <i class="fab fa-wordpress"></i> Wordpress / </p>
			</div>
		</div>
	</section>

	<section id="service" class="serviceWrapper">
		<div class="topText">
			<h3>Service</h3>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 subcontent">
					<div class="subBody">
						<h3>DIRECTION</h3>  
							<p>ディレクション</p>
							<p><i class="fas fa-cog fa-4x"></i></p>
							<p>クライアント様からのヒアリングをもとにWEBサイト全体の設計をさせていただきます。
								制作サイトの方向性やクオリティに直結する最重要となる部分です。
								クライアント様と共に作り上げていくことで、最高のWEBサイトの土台を目指していきます。</p>
					</div>
				</div>
				<div class="col-sm-4 subcontent">
					<div class="subBody">
						<h3>DESIGN</h3>
						<p>デザイン</p>
						<p><i class="fas fa-palette fa-4x"></i></p>
						<p>ヒアリングの内容を基にデザイン作成をさせていただきます。
						WEBサイトの印象はクライアント様の印象に直結する部分です。
						ユーザー目線を意識したデザインを心がけ、デザイン案をご提案させていただきます。</p>
					</div>
				</div>
				<div class="col-sm-4 subcontent">
					<div class="subBody">
						<h3>CODING</h3>
						<p>コーディング</p>
						<p><i class="fas fa-code fa-4x"></i></p>
						<p>デザインした内容を基にコーディングをさせていただきます。
							Wordpressを使った更新性の高いサイト、レスポンシブ対応サイト、など様々なサイトのコーディングを行っています。
							クライアント様に最もあったサイトをご提案させていただきます。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="work" class="workWrapper">
		<div class="topText">
			<h3>Work</h3>
		</div>
		<div class="workBody">
			<div class="container">
        <div class="row">
          <?php if( have_posts() ) :?>
            <?php while ( have_posts() ): the_post(); ?>
              <div class="col-md-4">
                <div class="thumBox ">
                  <a class="img-fluid" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                  </a>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
		</div>
		<div class="workButton">
			<a href="http://wp-test.com/soccer_team/%e5%88%b6%e4%bd%9c%e7%89%a9%e4%b8%80%e8%a6%a7/" class="btn btn-warning btn-lg text-white">制作一覧へ</a>
		</div>
	</section>

	<section id="contact" class="contactWrapper">
		<div class="topText">
			<h3>Contact</h3>
		</div>
		<div class="contactBody">
    <?php echo do_shortcode('[contact-form-7 id="71" title="Contact form 1"]') ?>
		</div>
	</section>
	
	<?php get_footer() ?>