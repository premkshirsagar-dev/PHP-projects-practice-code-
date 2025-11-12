<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Style Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-800 via-gray-900 to-black h-screen flex items-center justify-center">

    <div class="bg-gray-900/80 backdrop-blur-2xl rounded-3xl p-6 shadow-2xl w-[320px] border border-gray-700 text-white">
        <h2 class="text-center text-2xl font-semibold mb-4 tracking-wide text-gray-200">🍎 Calcy</h2>

        <form method="post" class="space-y-4">
            <div class="flex flex-col space-y-2">
                <input type="number" name="num1" placeholder="Enter first number"
                    class="bg-gray-800 text-right text-2xl text-white p-3 rounded-xl outline-none focus:ring-2 focus:ring-orange-400" required>

                <input type="number" name="num2" placeholder="Enter second number"
                    class="bg-gray-800 text-right text-2xl text-white p-3 rounded-xl outline-none focus:ring-2 focus:ring-orange-400" required>
            </div>

            <div class="grid grid-cols-4 gap-3 text-lg font-semibold">
                <button type="submit" name="operator" value="add" class="bg-gray-700 hover:bg-gray-600 rounded-full py-3">+</button>
                <button type="submit" name="operator" value="sub" class="bg-gray-700 hover:bg-gray-600 rounded-full py-3">−</button>
                <button type="submit" name="operator" value="mul" class="bg-gray-700 hover:bg-gray-600 rounded-full py-3">×</button>
                <button type="submit" name="operator" value="div" class="bg-gray-700 hover:bg-gray-600 rounded-full py-3">÷</button>

                <div class="col-span-4 flex justify-center">
                    <button type="submit" name="submit" class="w-full bg-orange-500 hover:bg-orange-400 text-white py-3 rounded-full text-lg font-bold transition-all">
                        =
                    </button>
                </div>
            </div>
        </form>

        <div class="mt-6 text-center text-2xl font-bold text-orange-400">
            <?php
            if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $op = $_POST['operator'];

                echo "<div class='p-3 rounded-xl bg-gray-800 mt-3'>";
                switch($op){
                    case "add": echo "Result: " . ($num1 + $num2); break;
                    case "sub": echo "Result: " . ($num1 - $num2); break;
                    case "mul": echo "Result: " . ($num1 * $num2); break;
                    case "div": 
                        if($num2 != 0) echo "Result: " . round(($num1 / $num2), 2);
                        else echo "⚠️ Cannot divide by zero!";
                        break;
                    default: echo "Invalid Operation.";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
