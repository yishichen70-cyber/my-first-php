<?php

function calculateStats(array $numbers): ?array {
    // 过滤掉非数字值 / Filter out non-numeric values
    $filtered = array_filter($numbers, function ($value) {
        return is_numeric($value);
    });

    // 重置数组索引 / Re-index the array
    $filtered = array_values($filtered);

    // 如果数组为空，返回null / If empty, return null
    if (empty($filtered)) {
        return null;
    }

    // 计算各项统计值 / Calculate statistics
    $count = count($filtered);          // 个数 / Count
    $sum = array_sum($filtered);        // 总和 / Sum
    $average = $sum / $count;           // 平均值 / Average
    $highest = max($filtered);          // 最大值 / Highest value
    $lowest = min($filtered);           // 最小值 / Lowest value

    // 返回关联数组 / Return associative array
    return [
        'average' => $average,
        'highest' => $highest,
        'lowest'  => $lowest,
        'count'   => $count,
        'sum'     => $sum
    ];
}

// 定义数字数组 / Define an array of numbers
$numbers = [12, 45, 7, 89, 23, 56, 9, 101, 34];

// 调用函数并保存结果 / Call function and store result
$result = calculateStats($numbers);

// 检查结果是否有效 / Check if result is valid
if ($result === null) {
    echo "Error: No valid numbers found.\n";
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Number Statistics</title>
    
</head>

<body>

    <h1>📊 Array Statistics</h1>

    <!-- 显示原始数组 / Display original array -->
    <p><strong>Numbers:</strong> <?php echo implode(", ", $numbers); ?></p>

    <hr>

    <!-- 显示统计结果 / Display statistics results -->
    <p><strong>Count:</strong> <span class="highlight"><?php echo $result['count']; ?></span></p>

    <p><strong>Sum:</strong> <span class="highlight"><?php echo $result['sum']; ?></span></p>

    <!-- 格式化为两位小数 / Format to 2 decimal places -->
    <p><strong>Average:</strong> <span class="highlight"><?php echo number_format($result['average'], 2); ?></span></p>

    <p><strong>Highest:</strong> <span class="highlight"><?php echo $result['highest']; ?></span></p>

    <p><strong>Lowest:</strong> <span class="highlight"><?php echo $result['lowest']; ?></span></p>

    <hr>


</body>

</html>