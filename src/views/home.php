<?php include_once __DIR__ . '/layouts/header.php'; ?>

<div>
    <div>
        <h1 class="text-3xl font-bold text-wrap">Click on a forest to see all the wild fires that have happened there.</h1>
    </div>
    <hr>

    <table class="shadow-2xl border-2 border-orange-900 opacity-75">
        <thead class="bg-orange-400">
            <tr>
                <th class="py-3">Forest Name</th>
            </tr>
        </thead>

        <tbody class="bg-orange-300">
            <?php if (!empty($data['forests'])): ?>
                <?php foreach ($data['forests'] as $forest): ?>
                    <tr class="hover:bg-orange-100 duration-300">
                        <th lass="py-3 px-6">
                            <a href="/details?forest=<?= $forest['NWCG_REPORTING_UNIT_NAME'] ?>">
                                <?= $forest['NWCG_REPORTING_UNIT_NAME']; ?>
                            </a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>No forests</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include_once __DIR__ . '/layouts/footer.php' ?>