<?php include_once __DIR__ . '/layouts/header.php'; ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Fire Name</th>
            <th>Year</th>
            <th>Cause</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($data['fires'])): ?>
            <?php foreach ($data['fires'] as $row): ?>
            <tr>
                <th><?= $row['FPA_ID']; ?></th>
                <th><?= $row['FIRE_NAME']; ?></th>
                <th><?= $row['FIRE_YEAR']; ?></th>
                <th><?= $row['STAT_CAUSE_DESCR']; ?></th>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td>No details for this fire</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include_once __DIR__ . '/layouts/footer.php' ?>