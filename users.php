<?php
$page_name = "Posts List";
include "partials/_header.php";
include "partials/_menu.php";
?>

<main role="main" class="container">

    <div class="row">
        <div class="col-12">

            <h2>Users</h2>

            <hr>

            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
                    <?php for ($y = 1; $y <= 5; $y++) : ?>
                        <div class="col">
                            <?php
                            include "components/userCards.php";
                            ?>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>

            <hr />

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

</main><!-- /.container -->

<?php
include "partials/_footer.php";
?>