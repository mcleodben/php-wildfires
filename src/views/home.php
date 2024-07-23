<?php include_once __DIR__ . '/layouts/header.php'; ?>

<div>
    <div>
        <h1 class="text-3xl font-bold text-wrap">Click on a forest to see all the wild fires that have happened there.</h1>
    </div>
    <hr>

    <table>
        <thead>
            <tr>
                <th>Forest Name.</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['forests'])): ?>
                <?php foreach ($data['forests'] as $forest): ?>
                    <tr>
                        <th>
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