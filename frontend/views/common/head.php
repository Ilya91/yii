<?
use yii\bootstrap\Nav;
?>
<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
                <?
                $menuItems = [
                    ['label' => 'Home', 'url' => ''],
                    ['label' => 'About', 'url' => 'main/main/about'],
                    ['label' => 'Agents', 'url' => 'main/main/agents'],
                    ['label' => 'Admin', 'url' => 'cabinet/advert'],
                ];
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                ?>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Starts -->





<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <a href="/main" ><img src="/images/logo.png"  alt="Realestate"></a>

        <?
        $menuItems = [
            ['label' => 'Buy', 'url' => '#'],
            ['label' => 'Sale', 'url' => '#'],
            ['label' => 'Rent', 'url' => '#'],
        ];
        echo Nav::widget([
            'options' => ['class' => 'pull-right'],
            'items' => $menuItems,
        ]);
        ?>
    </div>
    <!-- #Header Starts -->
</div>