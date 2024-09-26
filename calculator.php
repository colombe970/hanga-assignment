    <script>
        function calculate() {
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);
            const operation = document.getElementById('operation').value;

            let result;

            if (operation === 'add') {
                result = num1 + num2;
            } else if (operation === 'subtract') {
                result = num1 - num2;
            }

            document.getElementById('output').textContent = result;
        }
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .calculator {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .calculator h2 {
            margin-bottom: 20px;
        }

        .calculator input,
        .calculator select,
        .calculator button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .calculator button {
            background-color:lightgreen;
            color: white;
            cursor: pointer;
        }

        .calculator button:hover {
            background-color: green;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <input type="number" id="num1" placeholder="Enter first number">
        <input type="number" id="num2" placeholder="Enter second number">
        
        <select id="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
        </select>
        
        <button onclick="calculate()">Calculate</button>
        
        <p id="result">Result: <span id="output"></span></p>
    </div>
</body>
</html>
