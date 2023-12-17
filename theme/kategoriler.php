<?php include "header.php"; ?>
<main class="pb-11">
    <section id="page_banner" class="bg-dark py-13 mb-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 flex items-center">
                    <nav id="breadcrumb_nav" class="flex items-center gap-x-5">
                        <a href="" class="text-light relative leading-tight transition-colors transition-300">Anasayfa</a>
                        <a href="" class="text-light relative leading-tight transition-colors transition-300">Ürünler</a>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="banner_ribbon w-fit ml-auto py-4.5 relative transition-colors transition-300">
                        <div class="before_ribbon absolute top-0 right-full h-full transition-colors transition-300"></div>
                        <h1 class="text-xl text-light w-fit ml-auto text-right my-0 transition-colors transition-300">ÜRÜNLER</h1>
                        <div class="after_ribbon absolute top-0 left-full h-full transition-colors transition-300"></div>
                    </div>
                </div>
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
</main>
<?php include "footer.php"; ?>