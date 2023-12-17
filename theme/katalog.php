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
                            class="text-light relative leading-tight transition-colors transition-300">E-Katalog</a>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="banner_ribbon w-fit ml-auto py-4.5 relative transition-colors transition-300"
                        data-bg="none">
                        <div class="before_ribbon absolute top-0 right-full h-full transition-colors transition-300">
                        </div>
                        <h1 class="text-xl text-light w-fit ml-auto text-right my-0 transition-colors transition-300">
                            E-KATALOG</h1>
                        <div class="after_ribbon absolute top-0 left-full h-full transition-colors transition-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="catalogue_list" class="pt-13 min-h-screen">
        <div class="container">
            <h2 class="text-3xl font-semibold leading-none mt-0 mb-10.5">E-Katalog</h2>
            <div class="row list_heading relative before-absolute mb-3">
                <div class="col-lg-3 py-8 px-7.5 text-white font-bold leading-none relative z-1">Başlık</div>
                <div class="col-lg-3 py-8 px-7.5 text-white font-bold leading-none relative z-1">Türü</div>
                <div class="col-lg-3 py-8 px-7.5 text-white font-bold leading-none relative z-1">Görüntüle</div>
                <div class="col-lg-3 py-8 px-7.5 text-white font-bold leading-none relative z-1">İndir</div>
            </div>
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="row list_body mb-3">
                    <div class="col-lg-3">
                        <div class="h-full bg-light flex items-center p-4 text-lg rounded">
                            Katalog 2023
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="h-full bg-light flex items-center p-4 text-lg rounded">
                            PDF
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a href="" class="block h-full py-1.5 px-2 bg-light w-full rounded" target="_blank">
                            <span
                                class="w-12 block border border-solid border-dark rounded-md flex items-center justify-center p-1 aspect-square transition-300 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.761 21.285"
                                    class="w-9 fill-dark transition-300 transition-colors">
                                    <path
                                        d="M35.761 10.643c-13.117 14.19-22.644 14.19-35.761 0 13.117-14.19 22.644-14.19 35.761 0m-17.88 7.9a7.9 7.9 0 1 0-7.9-7.9 7.9 7.9 0 0 0 7.9 7.9m0-1.9a6 6 0 0 0 5.8-7.559 2.3 2.3 0 0 1-2.769-3.624 6 6 0 1 0-3.032 11.183" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="" class="block h-full py-1.5 px-2 bg-light w-full rounded" download>
                            <span
                                class="w-12 block border border-solid border-dark rounded-md flex items-center justify-center p-3 aspect-square transition-300 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.333 26.878" class="w-full fill-dark transition-300 transition-colors">
                                    <path
                                        d="M23.21 2.761h-5.736a1.123 1.123 0 1 0 0 2.246h4.613v19.624H2.246V5.007h4.613a1.123 1.123 0 1 0 0-2.246H1.123A1.123 1.123 0 0 0 0 3.884v21.869a1.123 1.123 0 0 0 1.123 1.123H23.21a1.123 1.123 0 0 0 1.123-1.123V3.884a1.123 1.123 0 0 0-1.123-1.123"/>
                                    <path
                                        d="M7.653 13.544a1.123 1.123 0 0 0-1.588 1.588l5.308 5.307.007.006a.82.82 0 0 0 .076.068l.015.012q.031.025.064.047l.032.021.054.032.034.019a.867.867 0 0 0 .082.038q.049.02.1.036c.031.009.063.017.094.024h.013c.026.005.052.008.079.012H12.285a1.119 1.119 0 0 0 .671-.322l5.309-5.3a1.123 1.123 0 1 0-1.588-1.588l-3.39 3.39V1.123a1.123 1.123 0 0 0-2.246 0v15.811Z"
                                        />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>