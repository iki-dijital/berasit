<?php
include "header.php";
?>
<main>
    <section id="home_banner" class="relative">
        <div class="color_light absolute top-0 left-0 h-8/9 bg-light z-1"></div>
        <div class="color_dark absolute top-0 right-0 w-full h-8/9 bg-light z-0 transition-colors transition-300"></div>
        <div class="fade-slide-container z-2" id="home_fade">
            <div class="slide-wrapper">
                <?php

                // Denemelik renk fonksiyonu
                function rand_color()
                {
                    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                }

                for ($i = 1; $i <= 5; $i++): ?>
                    <div class="slide-item <?=$i == 1 ? 'active' : ''?>" data-bgcolor="<?= rand_color() ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="slide_content pt-14 flex flex-col items-start gap-y-3">
                                        <h2 class="text-dark font-bold leading-tight my-0">
                                            <?= $i ?> Konforun <br> Göz Alıcı Tasarımı
                                        </h2>
                                        <span class="text-primary text-xl font-medium leading-none">ROW STRAIGHT</span>
                                        <p class="text-dark leading-snug my-0">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</p>
                                        <a href="" class="btn_bordered px-8 mt-6">İncele</a>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <img src="<?= domain ?>assets/img/delete_slide_<?= $i % 4 + 1 ?>.webp"
                                        alt="Slide başlık">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <section id="home_categories" class="mb-22">
        <div class="container">
            <div class="row">
                <?php
                $category_titles = ["Ofis", "Ev", "Bahçe", "Kafe"];
                $class_list = ['green', 'cream', 'blue', 'brown'];
                for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-lg-3">
                        <a href=""
                            class="<?= $class_list[$i - 1] ?>_category flex flex-col transition-300 transition-colors">
                            <div class="img flex-1">
                                <img src="<?= domain ?>assets/img/delete_main_cat_<?= $i ?>.webp"
                                    alt="<?= $category_titles[$i - 1] ?> görsel"
                                    class="block w-full h-full object-cover object-bottom" loading="lazy">
                            </div>
                            <span
                                class="block flex-none flex items-end leading-tight font-bold text-3xl px-6 py-5.5 transition-colors transition-300">
                                <?= $category_titles[$i - 1] ?>
                                <br> Mobilyaları
                            </span>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <section id="home_selections" class="mb-19">
        <div class="container">
            <h2 class="text-center font-bold text-3xl leading-none text-dark mt-0 mb-12">
                SİZİN İÇİN SEÇTİKLERİMİZ
            </h2>
            <div class="row">

                <div class="col-lg-6 relative pt-9.5 pb-4">
                    <!-- Bu kısma dokunma, dinamik geliyor -->
                    <img src="<?= domain ?>assets/img/delete_home_prod_1.webp" alt="Ürün görseli"
                        id="home_selections_image" loading="lazy" class="relative z-1" width="660" height="546">
                    <div class="colored_bg absolute top-0 h-full z-0 transition-colors transition-300"></div>
                </div>
                <div class="col-lg-5 offset-lg-1 relative">
                    <div class="fade-slide-container relative h-full flex flex-col" id="home_selections_fade">
                        <div class="slide-wrapper flex-1">
                            <?php for ($i = 1; $i <= 13; $i++): ?>
                                <div class="slide-item" data-bgcolor="<?= rand_color() ?>"
                                    data-url="<?= domain ?>assets/img/delete_home_prod_<?= $i % 3 + 1 ?>.webp">
                                    <div class="content h-full flex flex-col justify-center items-start gap-y-6">
                                        <h3 class="text-3xl text-dark font-bold leading-tight my-0">
                                            <?= $i ?> PUZZEL
                                        </h3>
                                        <p class="text-dark leading-snug my-0">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum is simply dummy text of
                                            the printing and typesetting industry. Lorem Ipsum is simply
                                            dummy text of the printing and typesetting industry. Lorem
                                            Ipsum is simply dummy text of the printing and typesetting.
                                        </p>
                                        <a href="" class="btn_bordered px-8 mt-7">İncele</a>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="pag_nav_wrapper flex-none flex items-center justify-end gap-x-5">
                            <div class="slide-pag flex items-center justify-end"></div>
                            <div class="slide-nav items-center">
                                <div class="prev flex items-center cursor-pointer">
                                    <?= getSprite("angle_left", "w-2 fill-dark transition-colors transition-300") ?>
                                </div>
                                <div class="next flex items-center cursor-pointer">
                                    <?= getSprite("angle_left", "w-2 fill-dark transition-colors transition-300") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home_blog" class="mb-14.5">
        <div class="container">
            <h2 class="text-center font-bold text-3xl leading-none text-dark mt-0 mb-10">
                BLOG
            </h2>
            <div class="row">
                <?php
                $blog_titles = ["Ev Mobilyaları", "Bahçe Mobilyaları", "Ofis Mobilyaları"];
                for ($i = 1; $i <= 3; $i++): ?>
                    <div class="col-lg-4">
                        <a href="" class="blog_card flex flex-col gap-y-3 mb-17">
                            <img src="<?= domain ?>assets/img/delete_blog_<?= rand(1, 3) ?>.webp" alt="Blog görseli"
                                loading="lazy" width="416" height="416"
                                class="block w-full aspect-square object-cover object-center">
                            <span class="text-xl font-bold leading-tight block text-dark transition-300 transition-colors">
                                <?= $blog_titles[$i - 1] ?>
                            </span>
                            <p class="my-0 leading-snug text-dark">
                                Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum is simply
                                dummy text of the printing and typesetting.
                            </p>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>