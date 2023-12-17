<?php include "header.php"; ?>
<main class="pb-11">
    <section id="page_banner" class="bg-dark py-13 mb-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 flex items-center">
                    <nav id="breadcrumb_nav" class="flex items-center gap-x-5">
                        <a href=""
                            class="text-light relative leading-tight transition-colors transition-300">Anasayfa</a>
                        <a href=""
                            class="text-light relative leading-tight transition-colors transition-300">Projeler</a>
                            <a href=""
                            class="text-light relative leading-tight transition-colors transition-300">Lorem Ipsom Amed</a>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="banner_ribbon w-fit ml-auto py-4.5 relative transition-colors transition-300"
                        data-bg="none">
                        <div class="before_ribbon absolute top-0 right-full h-full transition-colors transition-300">
                        </div>
                        <h1 class="text-xl text-light w-fit ml-auto text-right my-0 transition-colors transition-300">
                            PROJELER</h1>
                        <div class="after_ribbon absolute top-0 left-full h-full transition-colors transition-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project_detail" class="pt-13">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-3xl font-semibold leading-none mb-11 mt-0">Lorem Ipsom Amed</h2>
                    <div class="masonry-grid relative w-full">
                        <div class="grid-sizer"></div>
                        <?php for ($i = 1; $i <= 20; $i++):
                            $x = rand(1, 6);
                            ?>
                            <a href="<?= domain ?>assets/img/delete_ref_detay_0<?= $x ?>.webp" class="glightbox grid_item block mb-6">
                                <img src="<?= domain ?>assets/img/delete_ref_detay_0<?= $x ?>.webp" alt="Görsel başlık"
                                    class="block w-full">
                            </a>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>