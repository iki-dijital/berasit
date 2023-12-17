<?php include "header.php"; ?>
<main class="pb-11">
    <section id="page_banner" class="bg-dark py-13 mb-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 flex items-center">
                    <nav id="breadcrumb_nav" class="flex items-center gap-x-5">
                        <a href=""
                            class="text-light relative leading-tight transition-colors transition-300">Anasayfa</a>
                        <a href="" class="text-light relative leading-tight transition-colors transition-300">Berasit Blog</a>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="banner_ribbon w-fit ml-auto py-4.5 relative transition-colors transition-300"
                        data-bg="none">
                        <div class="before_ribbon absolute top-0 right-full h-full transition-colors transition-300">
                        </div>
                        <h1 class="text-xl text-light w-fit ml-auto text-right my-0 transition-colors transition-300">
                            BERASİT BLOG</h1>
                        <div class="after_ribbon absolute top-0 left-full h-full transition-colors transition-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog_listing">
        <div class="container">
            <div class="row">
                <?php
                $blog_titles = ["Ev Mobilyaları", "Bahçe Mobilyaları", "Ofis Mobilyaları"];
                for ($i = 1; $i <= 30; $i++): ?>
                    <div class="col-lg-4">
                        <a href="" class="blog_card flex flex-col gap-y-3 mb-17">
                            <img src="<?= domain ?>assets/img/delete_blog_<?= rand(1, 3) ?>.webp" alt="Blog görseli"
                                loading="lazy" width="416" height="416"
                                class="block w-full aspect-square object-cover object-center">
                            <span class="text-xl font-bold leading-tight block text-dark transition-300 transition-colors">
                                <?= $blog_titles[rand(0,2)] ?>
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