<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Slider', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/slider/index']],/* 
                    ['label' => 'Main Photo', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/mainphoto/index']],*/
                    [
                        'label' => 'Texts',
                        'icon' => 'circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Slider Text', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/mainphoto']],
                            /* ['label' => 'Main Photo', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/mainphoto']], */
                            ['label' => 'Company', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/company-update']],
                            ['label' => 'Values', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/values-update']],
                            ['label' => 'Mission', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/mission-update']],
                            ['label' => 'Guarantee', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-update']],
                            ['label' => 'Work With Us', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/work-with-us-update']],/*
                            ['label' => 'Services', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/services-update']], 
                            ['label' => 'Contact', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/contact-update']], */
                        ],
                    ], 
                    [
                        'label' => 'Services',
                        'icon' => 'circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Text #1', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/services-text-one']],
                            ['label' => 'Text #2', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/services-text-two']],
                            ['label' => 'Text #3', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/services-text-three']],
                            ['label' => 'Text #4', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/services-text-four']],
                            ['label' => 'Text #5', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/services-text-five']],
                            ['label' => 'Text #6', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/services-text-six']],
                        ],
                    ], 
                    [
                        'label' => 'Guarantee',
                        'icon' => 'circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Text #1', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-one']],
                            ['label' => 'Text #2', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-two']],
                            ['label' => 'Text #3', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-three']],
                            ['label' => 'Text #4', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-four']],
                            ['label' => 'Text #5', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-five']],
                            ['label' => 'Text #6', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-six']],
                            ['label' => 'Text #7', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-seven']],
                            ['label' => 'Text #8', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-eight']],
                            ['label' => 'Text #9', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/texts/guarantee-text-nine']],
                        ],
                    ],
                    ['label' => 'Newsletter Users', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/newsletter/index']],
                    ['label' => 'Admin Users', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/adminusers/index']],
                    /*
                    [
                        'label' => 'Karpathos Guide',
                        'icon' => 'circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Guide Content', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/guides/content']],
                            ['label' => 'Create Section', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/guides/create-section']],
                            ['label' => 'Guide Sections', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/guides/sections']],
                        ],
                    ],
                    ['label' => 'Photo Galleries', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/photo-gallery/create']],
                    ['label' => 'News', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/news/index']],
                    [
                        'label' => "What's Special",
                        'icon' => 'circle',
                        'url' => '#',
                        'items' => [
                            ['label' => "What's Special Photos", 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/special/photos', 'type'=>'upload']],
                            ['label' => "What's Special Content", 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/special/content']],
                        ],
                    ],
                    ['label' => 'Offers', 'icon' => 'dollar', 'url' => ['/Xhiddenimstadminurlx/offers/index']],
                    [
                        'label' => "Discover Karpathos",
                        'icon' => 'map-pin',
                        'url' => '#',
                        'items' => [ 
                            ['label' => 'Discover Karpathos Page', 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/places/content']], 
                            ['label' => "Places", 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/places/index']],
                            ['label' => "Tours", 'icon' => 'circle', 'url' => ['/Xhiddenimstadminurlx/tours/index']],
                        ],
                    ], */
                ],
            ]
        ) ?>

    </section>

</aside>
