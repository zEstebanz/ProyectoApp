<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Cientifica</title>
    <link rel="stylesheet" href="style.css">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <style>
        main {
            margin: 10px;
            padding: 5px 7px 5px;
        }

        input {
            text-align: right;
            background-color: white;
            width: 330px;
            margin-bottom: 10px;
            border-radius: 10px;
            font-size: 30px;
        }

        table {
            display: inline-block;
            padding: 20px;
            margin-top: 10rem;
            background-color: grey;
            border-radius: 10px;
        }

        .displaytable {
            display: table;
        }

        .displaytable-cell {
            display: table-cell;
        }

        .button {
            width: 60px;
            height: 35px;
            font-size: 20px;
            border-radius: 5px;
        }

        .blackbutton {
            background-color: black;
            color: white;
        }

        .greenbutton {
            background-color: #91ff7d;
        }

        .greybutton {
            background-color: #cccccc;
        }

        .bluebutton {
            background-color: #6288f3;
        }

        .redbutton {
            background-color: #f76767;
        }
    </style>
</head>

<body>


    <!-- Navegacion Principal -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/usuario">AppDark</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/usuario">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cientifica">Calculadora Cientifica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/basica">Calculadora Basica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/porcentaje">Calculadora Porcentaje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/binario">Calculadora Binario/Decimal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Cerrar Session</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <table>
            <!-- Display principal -->
            <tr>
                <th colspan="5">
                    <input id="displayBox" type="text" readonly>
                </th>
            </tr>

            <!-- Memorias -->
            <tr>
                <!--  MC Elimina cualquier número almacenado en la memoria-->
                <td>
                    <div class="displaytable-cell" id="bMClear">
                        <button class="button greybutton" type="button" onclick="calculadora.clearMemory()">MC</button>
                    </div>
                </td>
                <!-- MR Recupera el numero almacenado en memoria-->
                <td>
                    <div class="displaytable-cell" id="bMRead">
                        <button class="button greybutton" type="button" onclick="calculadora.readMemory()">MR</button>
                    </div>
                </td>
                <!-- M+ Suma el número mostrado a otro número que se encuentre en memoria pero no muestra la suma de estos numero-->
                <td>
                    <div class="displaytable-cell" id="bMAdd">
                        <button class="button greybutton" type="button" onclick="calculadora.addToMemory()">M+</button>
                    </div>
                </td>
                <!-- M- Resta el número mostrado a otro número que se encuentr en memoria pero no muestra la resta de estos números-->
                <td>
                    <div class="displaytable-cell" id="bMSub">
                        <button class="button greybutton" type="button" onclick="calculadora.subtractFromMemory()">M-</button>
                    </div>
                </td>
                <!-- MS Almacena en memoria el número mostrado-->
                <td>
                    <div class="displaytable-cell" id="bMSave">
                        <button class="button greybutton" type="button" onclick="calculadora.saveToMemory()">MS</button>
                    </div>
                </td>
            </tr>
            <!-- Logaritmos -->
            <tr>
                <!-- x^2 -->
                <td>
                    <div class="displaytable-cell" id="bSquare">
                        <button class="button blackbutton" type="button" onclick="calculadora.square()">x^2</button>
                    </div>
                </td>
                <!--  10^x -->
                <td>
                    <div class="displaytable-cell" id="bNthPowerOfTenOr">
                        <button class="button blackbutton" type="button" onclick="calculadora.nthTenPower()">10^x</button>
                    </div>
                </td>
                <!-- sin -->
                <td>
                    <div class="displaytable-cell" id="bSine">
                        <button class="button blackbutton" type="button" onclick="calculadora.writeMathFunction('sin(')">sin</button>
                    </div>
                </td>
                <!-- cos -->
                <td>
                    <div class="displaytable-cell" id="bCosine">
                        <button class="button blackbutton" type="button" onclick="calculadora.writeMathFunction('cos(')">cos</button>
                    </div>
                </td>
                <!--  tan-->
                <td>
                    <div class="displaytable-cell" id="bTangent">
                        <button class="button blackbutton" type="button" onclick="calculadora.writeMathFunction('tan(')">tan</button>
                    </div>
                </td>
            </tr>
            <!-- Otros -->
            <tr>
                <!-- x 3 -->
                <td>
                    <div class="displaytable-cell" id="bCube">
                        <button class="button blackbutton" type="button" onclick="calculadora.cube()">x^3</button>
                    </div>
                </td>

                <td>
                    <div class="displaytable-cell" id="bInverseNumber">
                        <button class="button blackbutton" type="button" onclick="calculadora.inverseNumber()">x^-1</button>
                    </div>
                </td>
                <!-- sqrt -->
                <td>
                    <div class="displaytable-cell" id="bSqrt">
                        <button class="button blackbutton" type="button" onclick="calculadora.writeMathFunction('sqrt(')">sqrt</button>
                    </div>
                </td>
                <!-- Log -->
                <td>
                    <div class="displaytable-cell" id="bLogOr">
                        <button class="button blackbutton" type="button" onclick="calculadora.writeMathFunction('log(')">log</button>
                    </div>
                </td>
                <!-- Ln -->
                <td>
                    <div class="displaytable-cell" id="bNaturalLog">
                        <button class="button blackbutton" type="button" onclick="calculadora.writeMathFunction('ln(')">ln</button>
                    </div>
                </td>
            </tr>
            <!-- Limpiar display -->
            <tr>
                <!-- e -->
                <td>
                    <div class="displaytable-cell" id="bPercentage">
                        <button class="button" type="button" onclick="calculadora.writeMathFunction('e')">e</button>
                    </div>
                </td>
                <!-- CE -->
                <td>
                    <div class="displaytable-cell" id="bClearDisplayCE">
                        <button class="button redbutton" type="button" onclick="calculadora.clearDisplay()">CE</button>
                    </div>
                </td>
                <!-- C -->
                <td>
                    <div class="displaytable-cell" id="bClearDisplayC">
                        <button class="button redbutton" type="button" onclick="calculadora.clearDisplay()">C</button>
                    </div>
                </td>
                <!-- Del -->
                <td>
                    <div class="displaytable-cell" id="bDelete">
                        <button class="button redbutton" type="button" onclick="calculadora.eraseLastInput()">Del</button>
                    </div>
                </td>
                <!-- / -->
                <td>
                    <div class="displaytable-cell" id="bDivide">
                        <button class="button greenbutton" type="button" onclick="calculadora.writeOperatorToDisplay('/')">/</button>
                    </div>
                </td>
            </tr>
            <!-- Operadores y Numeros -->
            <tr>
                <!-- Pi -->
                <td>
                    <div class="displaytable-cell" id="bPi">
                        <button class="button" type="button" onclick="calculadora.writeMathFunction('PI')">π</button>
                    </div>
                </td>
                <!-- 7 -->
                <td>
                    <div class="displaytable-cell" id="bSeven">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('7')">7</button>
                    </div>
                </td>
                <!-- 8 -->
                <td>
                    <div class="displaytable-cell" id="bEight">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('8')">8</button>
                    </div>
                </td>
                <!-- 9 -->
                <td>
                    <div class="displaytable-cell" id="bNine">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('9')">9</button>
                    </div>
                </td>
                <!-- Multiplicacion -->
                <td>
                    <div class="displaytable-cell" id="bMultiply">
                        <button class="button greenbutton" type="button" onclick="calculadora.writeOperatorToDisplay('*')">x</button>
                    </div>
                </td>
            </tr>
            <!-- Operadores y Numeros -->
            <tr>
                <!-- n! -->
                <td>
                    <div class="displaytable-cell" id="bFactorial">
                        <button class="button" type="button" onclick="calculadora.calculateFactorial()">n!</button>
                    </div>
                </td>
                <!-- 4 -->
                <td>
                    <div class="displaytable-cell" id="bFour">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('4')">4</button>
                    </div>
                </td>
                <!-- 5 -->
                <td>
                    <div class="displaytable-cell" id="bFive">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('5')">5</button>
                    </div>
                </td>
                <!-- 6 -->
                <td>
                    <div class="displaytable-cell" id="bSix">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('6')">6</button>
                    </div>
                </td>
                <!-- Sustracción -->
                <td>
                    <div class="displaytable-cell" id="bSubtract">
                        <button class="button greenbutton" type="button" onclick="calculadora.writeOperatorToDisplay('-')">-</button>
                    </div>
                </td>
            </tr>
            <!-- Negativo, mas y Numeros -->
            <tr>
                <!-- Numero Negativo -->
                <td>
                    <div class="displaytable-cell" id="bToggleSign">
                        <button class="button greenbutton" type="button" onclick="calculadora.toggleSign()">(-)</button>
                    </div>
                </td>
                <!-- 1 -->
                <td>
                    <div class="displaytable-cell" id="bOne">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('1')">1</button>
                    </div>
                </td>
                <!-- 2 -->
                <td>
                    <div class="displaytable-cell" id="bTwo">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('2')">2</button>
                    </div>
                </td>
                <!-- 3 -->
                <td>
                    <div class="displaytable-cell" id="bThree">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('3')">3</button>
                    </div>
                </td>
                <!-- Adición -->
                <td>
                    <div class="displaytable-cell" id="bAdd">
                        <button class="button greenbutton" type="button" onclick="calculadora.writeOperatorToDisplay('+')">+</button>
                    </div>
                </td>
            </tr>
            <!-- Parentesis, Cero, Igual y decimal -->
            <tr>
                <!-- Abrir Parentesis -->
                <td>
                    <div class="displaytable-cell" id="bOpenParentheses">
                        <button class="button greenbutton" type="button" onclick="calculadora.writeOperatorToDisplay('(')">(</button>
                    </div>
                </td>
                <!-- Cerrar Parentesis -->
                <td>
                    <div class="displaytable-cell" id="bCloseParentheses">
                        <button class="button greenbutton" type="button" onclick="calculadora.writeOperatorToDisplay(')')">)</button>
                    </div>
                </td>
                <!-- 0 -->
                <td>
                    <div class="displaytable-cell" id="bZero">
                        <button class="button bluebutton" type="button" onclick="calculadora.writeToDisplay('0')">0</button>
                    </div>
                </td>
                <!-- Como Para Numeros Decimales -->
                <td>
                    <div class="displaytable-cell" id="bDot">
                        <button class="button greenbutton" type="button" onclick="calculadora.writeToDisplay('.')">.</button>
                    </div>
                </td>
                <!-- Igualdad -->
                <td>
                    <div class="displaytable-cell" id="bEquals">
                        <button class="button greenbutton" type="button" onclick="calculadora.solveOperation()">=</button>
                    </div>
                </td>
            </tr>
        </table>
    </main>
</body>
<script>
    class CalculadoraBasica {

        constructor() {
            this.basicOperationShape = new RegExp("(([1-9][0-9]*|[0.])(.[0-9]*[1-9])?[\-\+\*\/])(([1-9][0-9]*|[0.])(.[0-9]*[1-9])?)");
            this.memoryRegister = 0;
        }

        printMemoryContents() {
            this.clearDisplay();
            this.writeToDisplay(this.memoryRegister);
        }

        subtractFromMemory() {
            this.memoryRegister -= this.solveOperation();
        }

        addToMemory() {
            this.memoryRegister += this.solveOperation();
        }

        writeToDisplay(data) {
            let legacy = document.getElementById("displayBox").value;
            if (data == ".") {
                legacy += data;
            } else {
                legacy = legacy == "0" ? data : legacy += data;
            }
            document.getElementById("displayBox").value = legacy;
        }

        writeOperatorToDisplay(operator) {
            let legacy = document.getElementById("displayBox").value;
            if (this.basicOperationShape.test(legacy)) {
                this.solveOperation();
            }
            this.writeToDisplay(operator);
        }

        clearDisplay() {
            document.getElementById("displayBox").value = "0";
        }

        solveOperation() {
            let operation = document.getElementById("displayBox").value;
            let result = 0;
            try {
                result = eval(operation == "" ? 0 : operation);
            } catch (err) {
                alert("Syntax error");
                this.clearDisplay();
            }
            document.getElementById("displayBox").value = result;
            return result;
        }

    }

    class CalculadoraCientifica extends CalculadoraBasica {

        constructor() {
            super();
            this.inputList = new Array();
            this.operationString = "";
            this.justSolved = false;
            this.operationMap = {
                "sin(": "Math.sin(",
                "cos(": "Math.cos(",
                "tan(": "Math.tan(",
                "log(": "Math.log10(",
                "ln(": "Math.log(",
                "sqrt(": "Math.sqrt(",
                "PI": "Math.PI",
                "e": "Math.E"
            };
        }

        /**
         * Writes new user input from the calculator buttons onto the
         * display.
         * 
         * @param {String} data The data to display on the screen.
         * Given by a button click from the user. 
         */
        writeToDisplay(data) {
            if (document.getElementById("displayBox").value == "Syntax Error") {
                super.clearDisplay();
            }
            super.writeToDisplay(data);
            this.operationString += data;
            this.inputList.push(data);
        }

        /**
         * Writes the operator clicked by the user to the screen.
         * 
         * @param {String} operator An string representing the operator 
         * that has been clicked on by the user. 
         */
        writeOperatorToDisplay(operator) {
            if (document.getElementById("displayBox").value == "Syntax Error") {
                super.clearDisplay();
            }
            this.operationString += operator;
            super.writeToDisplay(operator);
            this.inputList.push(operator);
        }

        /**
         * Solves the operation currently displayed by the calculator.
         * If the syntax is not correct for a well formed arithmetic 
         * expression, the user will have an error prompted and the display
         * will be set to zero. Due to the complexity of the regular 
         * expression checking. This task of matching the whole set of 
         * possible operations would need a context-free gramar or some other
         * technique.
         * 
         * ~Taken from StackOverflow~
         * You can't find matching parentheses with regular expressions. 
         * This is a consequence of the pumping lemma for regular languages.
         * ~Taken from StackOverflow~
         */
        solveOperation() {
            let result = 0;
            try {
                result = eval(this.operationString == "" || this.operationString == "Syntax Error" ? 0 : this.operationString);
            } catch (err) {
                result = "Syntax Error";
            }
            document.getElementById("displayBox").value = result;
            this.operationString = "";
            this.operationString += result;
            this.justSolved = true;
            return result;
        }

        /**
         * Clears the display screen.
         */
        clearDisplay() {
            super.clearDisplay();
            this.operationString = "";
        }

        toggleSign() {
            var displayBox = document.getElementById("displayBox");
            var displayContents = displayBox.value;
            if (displayContents == "Syntax Error") {
                super.clearDisplay();
            }
            if (displayContents == "0") {
                displayBox.value = "-";
                this.operationString += "-";
            } else {
                displayBox.value = "-" + displayBox.value;
                this.operationString = "-" + this.operationString;
            }
        }

        clearMemory() {
            super.subtractFromMemory(this.memoryRegister);
        }

        readMemory() {
            this.clearDisplay();
            this.writeToDisplay(this.memoryRegister);
        }

        saveToMemory() {
            this.memoryRegister = this.solveOperation();
        }

        eraseLastInput() {
            this.inputList.pop();
            var recreatedOperation = "";
            for (var each in this.inputList) {
                recreatedOperation += this.inputList[each];
            }
            document.getElementById("displayBox").value = recreatedOperation;
            for (var each in this.operationMap) {
                recreatedOperation = recreatedOperation.replace(each, this.operationMap[each]);
            }
            this.operationString = recreatedOperation;
        }

        writeMathFunction(data) {
            if (document.getElementById("displayBox").value == "Syntax Error") {
                super.clearDisplay();
            }
            super.writeToDisplay(data);
            this.operationString += this.operationMap[data];
            this.inputList.push(data);
        }

        calculateFactorial() {
            var number = parseInt(this.operationString.split(new RegExp("[^0-9]")));
            var result = 0;
            try {
                result = this.calculateRecursiveFactorial(number);
            } catch (err) {
                document.getElementById("displayBox").value = "That number is too big";
            }
            this.clearDisplay();
            document.getElementById("displayBox").value = result;
        }

        calculateRecursiveFactorial(number) {
            if (number == 1 || number == 0) {
                return 1;
            }
            return number * this.calculateRecursiveFactorial(number - 1);
        }

        nthTenPower() {
            var number = parseInt(this.operationString.split(new RegExp("[^0-9]")));
            this.clearDisplay();
            document.getElementById("displayBox").value = Math.pow(10, parseInt(number));
        }

        square() {
            var number = parseInt(this.operationString.split(new RegExp("[^0-9]")));
            this.clearDisplay();
            document.getElementById("displayBox").value = Math.pow(parseInt(number), 2);
        }

        cube() {
            var number = parseInt(this.operationString.split(new RegExp("[^0-9]")));
            this.clearDisplay();
            document.getElementById("displayBox").value = Math.pow(parseInt(number), 3);
        }

        inverseNumber() {
            var number = parseInt(this.operationString.split(new RegExp("[^0-9]")));
            this.clearDisplay();
            document.getElementById("displayBox").value = Math.pow(parseInt(number), -1);
        }

    }

    const calculadora = new CalculadoraCientifica();
</script>

</html>