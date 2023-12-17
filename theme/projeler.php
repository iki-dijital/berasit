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
    <section id="project_listing">
        <div class="container">
            <div class="row">
                <?php for ($i = 1; $i <= 12; $i++): ?>
                    <div class="col-lg-4">
                        <a href="" class="block mb-10.5 text-black transition-colors transition-300">
                            <span class="block border border-solid border-dark rounded-md mb-4">
                                <img src="<?= domain ?>assets/img/delete_project_<?= $i % 4 + 1 ?>.webp"
                                    alt="Proje adı görseli" width="416" height="306" class="block w-full" loading="lazy">
                            </span>
                            <span class="block text-xl font-semibold leading-tight">
                                Lorem Ipsom Amed
                            </span>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>