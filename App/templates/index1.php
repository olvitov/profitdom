
<?php include __DIR__ . '/index/header.php'; ?>


<section id="tables">
    <div class="page-header">
        <h1>Все новости</h1>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>

            <th>Все новости</th>

        </tr>
        </thead>
        <?php foreach ($article as $articl) :?>
        <tbody>
        <tr>
            <td><?php echo $articl->title;?></td>
            <td><?php echo $articl->text;?></td>

            <?php if (!empty($articl->author)): ?>
                <td> Автор: <?php echo $articl->author->name; ?></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>

<hr>




<?php include __DIR__ . '/index/footer.php'; ?>


