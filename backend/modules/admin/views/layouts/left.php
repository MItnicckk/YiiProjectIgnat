<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/slider/log12.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Администратор</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Поиск"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Указания для сотрудников', 'icon' => '', 'url' => ['/admin/instructions/index']],
                    ['label' => 'Заказы', 'icon' => '', 'url' => ['/admin/orders/index']],
                    ['label' => 'Продажи', 'icon' => '', 'url' => ['/admin/sales/index']],
                    ['label' => 'Клиенты', 'icon' => '', 'url' => ['/admin/klienti/index']],
                    ['label' => 'Оборудование', 'icon' => '', 'url' => ['/admin/devices/index']],
                    ['label' => 'Менеджеры', 'icon' => 'dashboard', 'url' => ['/admin/manager/index']],
                    ['label' => 'Преподаватели', 'icon' => 'dashboard', 'url' => ['/admin/professor/index']],
                    ['label' => 'Бухгалтера', 'icon' => 'dashboard', 'url' => ['/admin/accountant/index']],
                    ['label' => 'Зав. оборудованием', 'icon' => 'dashboard', 'url' => ['/admin/equipmentman/index']],
                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Редактировать страницы', 'icon' => 'file-code-o',
                            'items' => [
                                ['label' => 'Главная', 'icon' => 'file-cod-o', 'url' => ['/admin/index/index']],
                                ['label' => 'Курсы', 'icon' => 'file-cod-o', 'url' => ['/admin/kurs/index']],
                                ['label' => 'Уроки', 'icon' => 'file-cod-o', 'url' => ['/admin/lesson/index']],                  
                    ] ],
                    // [
                    //     'label' => 'Some tools',
                    //     'icon' => 'share',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                    //         ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                    //         [
                    //             'label' => 'Level One',
                    //             'icon' => 'circle-o',
                    //             'url' => '#',
                    //             'items' => [
                    //                 ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                    //                 [
                    //                     'label' => 'Level Two',
                    //                     'icon' => 'circle-o',
                    //                     'url' => '#',
                    //                     'items' => [
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                     ],
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
                ],
            ]
        ) ?>

    </section>

</aside>
