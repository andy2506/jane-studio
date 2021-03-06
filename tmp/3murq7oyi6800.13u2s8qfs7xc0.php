<?php echo $this->render('includes/header.htm',NULL,get_defined_vars(),0); ?>
<div class="about-container">
    <?php echo $this->render('includes/nav.htm',NULL,get_defined_vars(),0); ?>
    <div class="container">
        <h3><?= ($title) ?></h3>
            <table width="600" cellpadding="5" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date submitted</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (($submissions?:[]) as $submission): ?>
                        <tr>
                            <td><?= (trim($submission['name'])) ?></td>
                            <td><?= (trim($submission['email'])) ?></td>
                            <td><?= (trim($submission['phone'])) ?></td>
                            <td><?= (trim($submission['created_at'])) ?></td>
                            <td><a href="<?= ($BASE . '/remove/' . $submission['id']) ?>" class="btn btn-danger">Delete</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</div>
<?php echo $this->render('includes/footer.htm',NULL,get_defined_vars(),0); ?>