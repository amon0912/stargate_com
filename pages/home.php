<div class="container-fluid" style="border-left:8px solid #FF8103">
    <div class="row">

        <!-- offre du jour  -->
        <div class="col-md-3 mt-3">
            <h3>Formation</h3>
            <?php include('inc/formation-slide.php');?>
        </div>

        <!-- slide -->
        <div class="col-md-9 mt-3">
            <?php 
            //include('inc/card-menu.php'); 
            $info = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ducimus ipsam assumenda deleniti eaque doloremque rem molestiae perspiciatis dolores quam ut fuga numquam autem hic qua laboriosam! Temporibus, dignissimosquas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ducimus ipsam assumenda deleniti eaque doloremque rem molestiae perspiciatis dolores quam ut fuga numquam autem hic qua laboriosam! Temporibus, dignissimosquas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ducimus ipsam assumenda deleniti eaque doloremque rem molestiae perspiciatis dolores quam ut fuga numquam autem hic qua laboriosam! Temporibus, dignissimosquas.';
            ?>

            <div class="d-block kArrondir kArriere-plan p-4">
                <a style="overflow:auto" class="typewrite text-decoration-none text-justify text-white"
                    data-period="1000"
                    data-type='[ "<?= $info; ?>"," It just has an economy", "that makes no sense to capitalism." ]'>

                    <span class="wrap"></span>

                </a>
            </div>

        </div>
    </div>

</div>