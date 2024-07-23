<?php include_once __DIR__ . '/layouts/header.php'; ?>

<div class="flex flex-col justify-center items-center">
    <div class="w-[800px]">
        <h1 class="text-3xl font-bold text-wrap text-white">All fires that have happened in <?= $data['forest'] ?>.</h1>
    </div>
    <hr>
    <div class="w-[800px]">
        <table class="shadow-2xl border-2 border-orange-900 opacity-75">
            <thead class="bg-orange-400">
                <tr>
                    <th class="py-3">ID</th>
                    <th class="py-3">Fire Name</th>
                    <th class="py-3">Year</th>
                    <th class="py-3">Cause</th>
                </tr>
            </thead>
            <tbody class="bg-orange-300">
                <?php if (!empty($data['fires'])): ?>
                    <?php foreach ($data['fires'] as $row): ?>
                    <tr class="hover:bg-orange-100 duration-300">
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
</div>

<?php include_once __DIR__ . '/layouts/footer.php' ?>