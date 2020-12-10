<?php if (false) {
} else { ?>
    <?php
    include('config/db.php');

    $q = $db->prepare('SELECT * FROM formation');
    $q->execute();
    $cpt = $q->rowCount();
    while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
        $datas2[] = $d;
    }
    ?>
    <div class="">
        <div class="caro-formations d-flex">
            <?php

            if ($cpt) {
                foreach ($datas2 as $data) { ?>
                    <div>
                        <a class="text-decoration-none" href="?p=je-profite-de-la-formation&formation=<?= $data['idFormation'] ?>">
                            <p class="text-center">
                                <img src="assets/images/uploads/<?= $data['lienImage'] ?>" class="img-fluid kArrondir h-100 w-100" alt="image formation">
                            </p>
                        </a>

                        <div class="float-right shadow-sm kArrondir border bg-body pr-3 pl-3 pt-1 pb-1 mt-2">
                            <a href="?p=je-profite-de-la-formation&formation=<?= $data['idFormation'] ?>" class="text-decoration-none kColor-text">
                                Je profite
                            </a>
                        </div>

                    </div>
            <?php }
            } ?>
        </div>
    </div>

<?php } ?>