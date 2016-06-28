
<?php include __DIR__ . '/index/header.php'; ?>


<section id="tables">
    <div class="page-header">
        <h1>Все новости</h1>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>

            <th>Одна новость</th>

        </tr>
        </thead>

        <tbody>
        <tr>
            <td><?php echo $articl->title;?></td>


            <?php if (!empty($articl->author)): ?>
                <td> Автор: <?php echo $articl->author->name; ?></td>
            <?php endif; ?>
        </tr>

        </tbody>
    </table>
</section>

<hr>




<?php include __DIR__ . '/index/footer.php'; ?>


