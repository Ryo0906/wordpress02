<?php get_header(); ?>
  <div class="hero">
    <h1>キャンプへ行こう！</h1>
    <p>自然、山、空、緑。<br>日帰りでも楽しいキャンプの魅力を紹介！</p>
  </div>
  <div class="top-feature">
    <div class="top-feature_box">
      <h2>Go! CAMPについて</h2>
      <p>
        Go! CAMPは、都心からおそよ2時間で行ける、アクセス抜群のキャンプ場です。デイキャンプからオートキャンプ、BBQなど全６種類のサイト・エリアをご用意しております。<br>
        静かな環境を楽しむ「静謐の森」サイト、ファミリーや仲間とわいわい楽しむBBQ場にも隣接したAC電源付きオートキャンプサイトなど、さまざまな目的にあわせた施設をお楽しみください。
      </p>
      <a href="#">続きを読む</a>
    </div>
    <div class="top-feature-img">
      <img src="img/photo-img01.jpg" width="530" alt="">
    </div>
  </div>
  <div class="top-feature">
    <div class="top-feature_box">
      <h2>過ごし方</h2>
      <p>静かな環境を楽しむ「静謐の森」サイトでは、満天の星空や木々のせせらぎを満喫いただけます。AC電源付きオートキャンプサイトでは、大人数でのバーベキューに最適です。キャンピングカーでのお越しの方にも人気です。<br>アクティビティ面では、釣り堀、川原での水遊び（夏季のみ）、四季を通じて楽しめるトレッキングコースなどさまざまな楽しみ方を提供しております。</p>
      <a href="#">続きを読む</a>
    </div>
    <div class="top-feature-img">
      <img src="img/photo-img02.jpg" width="530" alt="">
    </div>
  </div>
  <section>
    <h2 class="heading-title">NEWS</h2>
		<?php
		$args = array(
			'post_type' => 'post',
			'category_name' => 'news',
			'posts_per_page' => 4
		);
		$posts = get_posts( $args );
		global $post;
		if ( $posts ) : ?>
    <ul class="top-list">
			<?php foreach ( $posts as $post ) : setup_postdata( $post ) ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="top-list_img">
							<?php the_post_thumbnail(); ?>
            </div>
            <div class="top-list_info">
              <time datetime="<?php echo esc_attr( get_the_time( 'Y-m-d' ) ); ?>"><?php echo esc_attr( get_the_time( get_option( 'date_format' ) ) ); ?></time>
              <p class="top-list_title"><?php the_title(); ?></p>
            </div>
          </a>
        </li>
			<?php endforeach; ?>
			<?php endif; ?>
    </ul>
  </section>
<?php get_footer();
