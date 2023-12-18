<?php include "header.php"; ?>
<main class="pb-11">
    <!-- Ürün detayda mb değeri değişiyor -->
    <section id="page_banner" class="bg-dark py-13 mb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 flex items-center">
                    <nav id="breadcrumb_nav" class="flex items-center gap-x-5">
                        <a href=""
                            class="text-light relative leading-tight transition-colors transition-300">Anasayfa</a>
                        <a href=""
                            class="text-light relative leading-tight transition-colors transition-300">Ürünler</a>
                        <a href="" class="text-light relative leading-tight transition-colors transition-300">Ofis
                            Mobilyaları</a>
                        <a href="" class="text-light relative leading-tight transition-colors transition-300">Lorem
                            Ipsom</a>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="banner_ribbon w-fit ml-auto py-4.5 relative transition-colors transition-300"
                        data-bg="#D4AE89">
                        <div class="before_ribbon absolute top-0 right-full h-full transition-colors transition-300">
                        </div>
                        <h1 class="text-xl text-light w-fit ml-auto text-right my-0 transition-colors transition-300">
                            LOREM IPSOM</h1>
                        <div class="after_ribbon absolute top-0 left-full h-full transition-colors transition-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product_detail" data-color-dark="#D4AE89" data-color-light="#F7E7D7">
        <div class="product_slide mb-2.5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="controller">
                            <div
                                class="nav_prev apply_light bg-primary p-3.5 flex items-center justify-center cursor-pointer transition-300 transition-colors select-none">
                                <?= getSprite("angle_left", "w-3 fill-light transition-colors transition-300 apply_dark") ?>
                            </div>
                            <div class="prod_thumbs my-3">
                                <div class="thumbs-swiper overflow-hidden">
                                    <div class="swiper-wrapper">
                                        <?php for ($i = 1; $i <= 10; $i++): ?>
                                            <div class="swiper-slide bg-light">
                                                <img src="<?= domain ?>assets/img/delete_thumb_<?= $i % 4 + 1 ?>.webp"
                                                    alt="Ürün görsel" width="306" height="206"
                                                    class="w-full object-cover object-center block" loading="lazy">
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="nav_next apply_light bg-primary p-3.5 flex items-center justify-center cursor-pointer transition-300 transition-colors select-none">
                                <?= getSprite("angle_left", "w-3 fill-light transition-colors transition-300 apply_dark") ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="prod_img h-full border border-light border-solid">
                            <div class="prod-swiper overflow-hidden w-full h-full">
                                <div class="swiper-wrapper">
                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                        <div class="swiper-slide">
                                            <img src="<?= domain ?>assets/img/delete_thumb_<?= $i % 4 + 1 ?>.webp"
                                                alt="Ürün görsel" width="306" height="206"
                                                class="w-full h-full object-cover object-center block" loading="lazy">
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_description apply_light pt-10">
            <div class="container">
                <h2 class="text-3xl font-bold mt-0 mb-10 leading-none">
                    LOREM IPSOM <span class="font-regular">(K001)</span>
                </h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                    dummy
                    text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                    dummy
                    text of the printing and typesetting. Lorem
                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy
                    text of
                    the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                    dummy
                    text of the printing and typesetting.
                </p>
                <ul class="nav nav-tabs" id="prod-desc-tab" role="tablist">
                    <li class="nav-item apply_dark" role="presentation">
                        <button
                            class="nav-link parent-nav-link cursor-pointer text-white text-left leading-none py-4 px-5 w-full transition-colors transition-300 active"
                            id="prod-tab-1" data-bs-toggle="tab" data-bs-target="#prod-1-pane" type="button" role="tab"
                            aria-controls="prod-1-pane" aria-selected="true">Ürün Özellikleri</button>
                    </li>
                    <li class="nav-item apply_dark" role="presentation">
                        <button
                            class="nav-link parent-nav-link cursor-pointer text-white text-left leading-none py-4 px-5 w-full transition-colors transition-300"
                            id="prod-tab-2" data-bs-toggle="tab" data-bs-target="#prod-2-pane" type="button" role="tab"
                            aria-controls="prod-2-pane" aria-selected="false">Ürün Boyutları</button>
                    </li>
                    <li class="nav-item apply_dark" role="presentation">
                        <button
                            class="nav-link parent-nav-link cursor-pointer text-white text-left leading-none py-4 px-5 w-full transition-colors transition-300"
                            id="prod-tab-3" data-bs-toggle="tab" data-bs-target="#prod-3-pane" type="button" role="tab"
                            aria-controls="prod-3-pane" aria-selected="false">Ürün Renkleri</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product_tab_content">
            <div class="container">
                <div class="tab-content mb-25" id="prod-desc-content">
                    <div class="tab-pane fade py-7.5 px-5 show active" id="prod-1-pane" role="tabpanel"
                        aria-labelledby="prod-tab-1" tabindex="0">
                        <?php for ($i = 1; $i <= 15; $i++): ?>
                            <div class="flex items-center py-1.5">
                                <span class="font-semibold flex-none w-2/12">Lorem Ipsom</span>
                                <p class="flex-1 pl-6 my-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="tab-pane fade py-4 px-3" id="prod-2-pane" role="tabpanel" aria-labelledby="prod-tab-2"
                        tabindex="0">
                        <table>
                            <tbody>
                                <tr>
                                    <td>2 Kişilik Koltuk</td>
                                    <td>H 75 cm</td>
                                    <td>W 155 cm - 90 cm</td>
                                </tr>
                                <tr>
                                    <th>Tek Kişilik Koltuk</th>
                                    <td><strong>H</strong> 75 cm</td>
                                    <td><b>W</b> 155 cm - 90 cm</td>
                                </tr>
                                <tr>
                                    <td>2 Kişilik Koltuk</td>
                                    <td>H 75 cm</td>
                                    <td>W 155 cm - 90 cm</td>
                                </tr>
                                <tr>
                                    <th>Tek Kişilik Koltuk ve Uzunca bir yazı ile burayı değiştiriyorum</th>
                                    <td><strong>H</strong> 75 cm</td>
                                    <td><b>W</b> 155 cm - 90 cm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- CSS id'ye bağlı. Değiştireceksen CSS'i de güncelle -->
                    <div class="tab-pane fade py-7.5 px-5" id="prod-3-pane" role="tabpanel" aria-labelledby="prod-tab-3"
                        tabindex="0">
                        <ul class="nav nav-tabs flex-col flex-none w-2/12" id="prod-color-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link leading-none py-1 pl-5.5 relative before-absolute cursor-pointer active"
                                    id="color-1-tab" data-bs-toggle="tab" data-bs-target="#color-1-pane" type="button"
                                    role="tab" aria-controls="color-1-pane" aria-selected="true">Minder Rengi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link leading-none py-1 pl-5.5 relative before-absolute cursor-pointer"
                                    id="color-2-tab" data-bs-toggle="tab" data-bs-target="#color-2-pane" type="button"
                                    role="tab" aria-controls="color-2-pane" aria-selected="false">Metal Rengi</button>
                            </li>
                        </ul>
                        <div class="tab-content flex-none w-7/12" id="prod-colors-content">
                            <div class="tab-pane fade flex-wrap items-start content-start gap-6 show active" id="color-1-pane" role="tabpanel"
                                aria-labelledby="color-1-tab" tabindex="0">
                                <?php for ($i = 1; $i <= 12; $i++): ?>
                                    <img src="<?= domain ?>assets/img/delete_color_<?= $i ?>.webp" alt="Renk adı" width="86"
                                        height="86" class="block aspect-square object-cover object-center" loading="lazy">
                                <?php endfor; ?>
                            </div>
                            <div class="tab-pane fade flex-wrap items-start content-start gap-6" id="color-2-pane" role="tabpanel" aria-labelledby="color-2-tab"
                                tabindex="0">
                                <?php for ($i = 1; $i <= 12; $i++): ?>
                                    <img src="<?= domain ?>assets/img/delete_color_<?= rand(1,100) % 12 + 1?>.webp" alt="Renk adı" width="86"
                                        height="86" class="block aspect-square object-cover object-center" loading="lazy">
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_architect mb-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="flex items-center gap-x-5 apply_light py-10 px-5 relative after-absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.333 26.878" class="w-6">
                                <path
                                    d="M23.21 2.761h-5.736a1.123 1.123 0 1 0 0 2.246h4.613v19.624H2.246V5.007h4.613a1.123 1.123 0 1 0 0-2.246H1.123A1.123 1.123 0 0 0 0 3.884v21.869a1.123 1.123 0 0 0 1.123 1.123H23.21a1.123 1.123 0 0 0 1.123-1.123V3.884a1.123 1.123 0 0 0-1.123-1.123" />
                                <path
                                    d="M7.653 13.544a1.123 1.123 0 0 0-1.588 1.588l5.308 5.307.007.006a.82.82 0 0 0 .076.068l.015.012q.031.025.064.047l.032.021.054.032.034.019a.867.867 0 0 0 .082.038q.049.02.1.036c.031.009.063.017.094.024h.013c.026.005.052.008.079.012H12.285a1.119 1.119 0 0 0 .671-.322l5.309-5.3a1.123 1.123 0 1 0-1.588-1.588l-3.39 3.39V1.123a1.123 1.123 0 0 0-2.246 0v15.811Z" />
                            </svg>
                            <span class="font-medium leading-tight">2D ve 3D Dosyaları indirip inceleyebilmeniz için
                                lütfen Mimar Girişi yapınız.</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a href=""
                            class="apply_dark flex items-center justify-center text-center text-white font-medium leading-none h-full transition-colors transition-300">Mimar
                            Girişi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="other_products mb-16.5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title_wrapper flex items-center justify-between mb-7 pb-4">
                            <h2 class="text-xl font-bold my-0 leading-none flex-1">Diğer Ürünler</h2>
                            <div class="other_nav flex item-center w-fit flex-none gap-x-3.5">
                                <div class="prev cursor-pointer">
                                    <?= getSprite("angle_left", "w-2 fill-dark transition-colors transition-300") ?>
                                </div>
                                <div class="next cursor-pointer">
                                    <?= getSprite("angle_left", "w-2 fill-dark transition-colors transition-300") ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="other-prods-swiper overflow-hidden">
                            <div class="swiper-wrapper">
                                <?php for ($i = 1; $i <= 24; $i++): ?>
                                    <div class="swiper-slide">
                                        <a href=""
                                            class="prod_card block text-dark p-1 border border-solid border-dark rounded-md transition-colors transition-300 mb-12">
                                            <!-- Ürün başlığı + görseli -->
                                            <img src="<?= domain ?>assets/img/delete_prod_<?= $i % 7 + 1 ?>.webp"
                                                alt="Ürün başlığı görseli" width="298" height="330"
                                                class="w-full object-cover object-center block" loading="lazy">
                                            <span
                                                class="block h-20 flex items-center justify-center text-xl font-semibold text-center p-3">
                                                Lorem Ipsom
                                            </span>
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>