<div id="my-carousel1" class="carousel slide" data-ride="carousel">

    <!-- indicateur -->
    <!-- <ol class="carousel-indicators">
        <li class="active" data-target="#my-carousel1" data-slide-to="0" aria-current="location"></li>
        <li data-target="#my-carousel1" data-slide-to="1"></li>
    </ol> -->

    <div class="carousel-inner">
        <?php
        $slide = scandir("assets/images/slider");
        
        foreach ($slide as $key => $value) {
        if ($value != '.' && $value != '..') { ?>

        <div class="carousel-item <?= ($key=='2')?'active':''?>">
            <img class="d-block w-100 kArrondir " src="assets/images/slider/<?= $value ?>" alt="">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <?php 
        
        }
    } ?>
    </div>


    <a class="carousel-control-prev" href="#my-carousel1" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel1" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>