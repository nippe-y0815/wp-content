<?php get_header();?>

<main>
    <!--404 section-->
    <section class="page-404">
        <div class="container">
            <h2 class="secion-title_2">Error 404: Page Not Found</h2>
            <div class="contact-mail">
                <p>お探しのページが見つかりませんでした。</p>
                <p>申し訳ありませんが、お探しのページが存在しないか、アクセスできません。<br>
                    入力されたURLが正しいかご確認ください</p>
                <a class="arrow-btn" href="<?php echo home_url(); ?>" style ="margin-top:30px; width:fit-content; margin:30px auto 0 auto;">
                    <p>TOPページに戻る</p>
                </a>
            </div>
        </div>
    </section>
    <!--/contact section-->
</main>


<?php get_footer();?>