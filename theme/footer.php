<footer class="bg-light pt-13 pb-20.5 relative before-absolute">
    <div class="container relative z-1">
        <div class="row">
            <div class="col-lg-2">
                <a href="" class="block">
                    <img src="<?= domain ?>assets/img/logo.webp" alt="Berasit Furniture logo"
                        class="block h-12 object-contain object-center" width="146" height="50">
                </a>
            </div>
            <div class="col-lg-2 offset-lg-2">
                <ul class="pagelist -mt-1.5">
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Anasayfa</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Projeler</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Kurumsal</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Blog</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">İletişim</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="pagelist -mt-1.5">
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Ürünler</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Ofis
                            Mobilyaları</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Ev
                            Mobilyaları</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Bahçe
                            Mobilyaları</a>
                    </li>
                    <li>
                        <a href=""
                            class="relative font-medium text-light transition-colors transition-300 py-1.5 block before-absolute">Kafe
                            Mobilyaları</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 offset-lg-1 flex flex-col justify-between gap-x-3">
                <div class="flex items-center gap-x-7">
                    <a href="" class="btn_gray">E-Katalog</a>
                    <a href="" class="btn_gray">Mimar Girişi</a>
                </div>
                <div class="social flex items-center md:justify-center gap-x-10 sm:gap-x-8">
                    <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank">
                        <?= getSprite("instagram", "fill-light w-6 h-6 tranisiton-colors transition-300") ?>
                    </a>
                    <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank">
                        <?= getSprite("twitter_x", "fill-light w-6 h-6 tranisiton-colors transition-300") ?>
                    </a>
                    <a href="" class="w-7 h-7 flex items-center justify-center" target="_blank">
                        <?= getSprite("facebook", "fill-light w-6 h-6 tranisiton-colors transition-300") ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?= domain ?>assets/js/main.js<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>"></script>
</body>

</html>