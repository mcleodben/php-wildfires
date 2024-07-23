<?php include_once __DIR__ . '/layouts/header.php'; ?>

<div>
    <table class="shadow-2xl border-2 border-orange-900">
        <thead class="bg-orange-400">
            <tr>
                <th class="py-3">ID</th>
                <th class="py-3">Fire Name</th>
                <th class="py-3">Year</th>
                <th class="py-3">Cause</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($data['fires'])): ?>
                <?php foreach ($data['fires'] as $row): ?>
                <tr class="bg-orange-300 hover:bg-orange-100 duration-300">
                    <th class="py-3 px-6"><?= $row['FPA_ID']; ?></th>
                    <th class="py-3 px-6"><?= $row['FIRE_NAME']; ?></th>
                    <th class="py-3 px-6"><?= $row['FIRE_YEAR']; ?></th>
                    <th class="py-3 px-6"><?= $row['STAT_CAUSE_DESCR']; ?></th>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>No details for this fire</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include_once __DIR__ . '/layouts/footer.php' ?>