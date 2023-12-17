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
                            class="text-light relative leading-tight transition-colors transition-300">Ürünler</a>
                        <a href="" class="text-light relative leading-tight transition-colors transition-300">Ofis
                            Mobilyaları</a>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="banner_ribbon w-fit ml-auto py-4.5 relative transition-colors transition-300" data-bg="#849B86">
                        <div class="before_ribbon absolute top-0 right-full h-full transition-colors transition-300"></div>
                        <h1 class="text-xl text-light w-fit ml-auto text-right my-0 transition-colors transition-300">OFİS MOBİLYALARI</h1>
                        <div class="after_ribbon absolute top-0 left-full h-full transition-colors transition-300"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product_listing" class="pb-25">
        <div class="container">
            <div class="dynamic-form mb-10">
                <div class="form-wrapper py-2 pr-2 pl-5 rounded-md bg-light flex justify-betwen items-center">
                    <span class="text-xl text-secondary font-semibold text-dark leading-none">OFİS MOBİLYALARI</span>
                    <form action="" class="flex-1 w-full flex justify-end gap-x-10">
                        <div id="categories_wrapper" class="custom-select">
                            <select name="type" id="year_type" autocomplete="off">
                                <?php
                                $select_titles = ["Ofis", "Bahçe", "Salon", "Mutfak", "Oturma", "Genç"];
                                for ($i = 1; $i <= 6; $i++): ?>
                                    <option value="type_<?= $i ?>">
                                        <?= $select_titles[$i - 1] ?> Koltukları
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 24; $i++): ?>
                    <div class="col-lg-3">
                        <a href=""
                            class="prod_card block text-dark p-1 border border-solid border-dark rounded-md transition-colors transition-300 mb-12">
                            <!-- Ürün başlığı + görseli -->
                            <img src="<?= domain ?>assets/img/delete_prod_<?= $i % 7 + 1 ?>.webp" alt="Ürün başlığı görseli"
                                width="298" height="330" class="w-full object-cover object-center block" loading="lazy">
                            <span
                                class="block h-20 flex items-center justify-center text-xl font-semibold text-center p-3">Lorem
                                Ipsom</span>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="listing_pagination flex items-center gap-x-4">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <a href="" class="<?=$i == 1 ? 'active text-primary' : 'text-dark'?> block text-xl font-medium transition-300 transition-colors"><?=$i < 10 ? '0'.$i : $i?></a>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>