<?php
/*
 *
 * Template name: Виртуальные туры
 *
 * */
get_header();
?>
<?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
    }
    ?>
<main class="main-felix">
    <div class="main-felix__header">Виртуальный тур</div>
    <div class="main-felix__block">
        <div class="main-felix__block-header">

            Ленинский проспект, д. 99, г. Москва
        </div>
        <div class="main-felix__block-address"><svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3309_14966)">
                    <path
                        d="M14.8992 9.46311L11.1616 0.00390625L8 5.53351L4.8512 0.00390625L1.1008 9.46311H0V10.8967H5.6576V9.46311H4.8128L5.632 7.1079L8 10.9991L10.368 7.1079L11.1872 9.46311H10.3424V10.8967H16V9.46311H14.8992Z"
                        fill="#FF5C5C" />
                </g>
                <defs>
                    <clipPath id="clip0_3309_14966">
                        <rect width="16" height="10.9952" fill="white" transform="translate(0 0.00390625)" />
                    </clipPath>
                </defs>
            </svg>
            Новаторская (БКЛ, 1 мин пешком)</div>
        <div class="main-felix__block-description">
            <?php echo get_field('first__block__description');?>
        </div>
        <a href="https://ortodontcomplex.ru/kontakty/" class="main-felix__block-contacts">Контакты</a>
        <iframe src="https://yandex.ru/map-widget/v1/-/CCUFuUCjPB" frameborder="1" allowfullscreen="true"
            class="main-felix__block-tour"></iframe>
    </div>
    <div class="main-felix__block">
        <div class="main-felix__block-header">

            Ленинградский проспект, д. 66, г. Москва
        </div>
        <div class="main-felix__block-address">
            <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3309_14966)">
                    <path
                        d="M14.8992 9.46311L11.1616 0.00390625L8 5.53351L4.8512 0.00390625L1.1008 9.46311H0V10.8967H5.6576V9.46311H4.8128L5.632 7.1079L8 10.9991L10.368 7.1079L11.1872 9.46311H10.3424V10.8967H16V9.46311H14.8992Z"
                        fill="#FF5C5C" />
                </g>
                <defs>
                    <clipPath id="clip0_3309_14966">
                        <rect width="16" height="10.9952" fill="white" transform="translate(0 0.00390625)" />
                    </clipPath>
                </defs>
            </svg>
            Аэропорт (3 мин пешком)
        </div>
        <div class="main-felix__block-description">
            <?php echo get_field('second__block__description');?></div>
        <a href="https://ortodontcomplex.ru/kontakty/" class="main-felix__block-contacts">Контакты</a>
        <iframe src="https://yandex.ru/map-widget/v1/-/CCUFuUvR2C" frameborder="1" allowfullscreen="true"
            class="main-felix__block-tour"></iframe>
    </div>
</main>
<?php
get_footer();