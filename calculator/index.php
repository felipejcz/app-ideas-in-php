<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator - App Ideas in PHP</title>

<style>
    a:link{
        text-decoration: none;
    } 

    .container{
        display: flex;
        align-items: flex-start;
        width: 280px;
        height: 370px;
    }

    .calculator{
        text-decoration: none;
        position: relative;
        width: 100%;
        height: 100%;
        padding: 15px;
        border: 1px solid #000;
    }

    .input-result{
        position: relative;
        width: 100%;
        height: 50px;
        margin-bottom: 10px;
        border: 1px solid #000;
        background-color: #c8c8c8;
    }

    .input-result-text{
        padding: 18px;
        float: right;
    }

    .input-buttons{
        border: 1px solid #000;
        padding: 10px;
        text-align: center;
        align-items: center;
        line-height: 50px;
    }

    .input-buttons-number{
        cursor: pointer;
        position: relative;
        border: 1px solid #000;
        width: 50px;
        height: 50px;
        background-color: #bbbbbb;
    }

    .input-buttons-row{
        cursor: pointer;
        position: relative;
        border: 1px solid #000;
        background-color: #d6d6d6;
        width: 50px;
        height: 106px;
        line-height: 100px;
    }

    .input-buttons-col{
        cursor: pointer;
        position: relative;
        border: 1px solid #000;
        background-color: #d6d6d6;
        width: 106px;
        height: 50px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="calculator">
            <div class="input-result">
                <label id="input-result" class="input-result-text" for="">0</label>
            </div>
            <div class="input-buttons">
                <table>
                    <tbody>
                        <tr>
                            <td><div id="button-backspace" class="input-buttons-number"><</div></td>
                            <td><div id="button-clear" class="input-buttons-number">CE</div></td>
                            <td><div id="button-/" class="input-buttons-number">/</div></td>
                            <td><div id="button-x" class="input-buttons-number">x</div></td>
                        </tr>
                        <tr>
                            <td><div id="button-7" class="input-buttons-number">7</div></td>
                            <td><div id="button-8" class="input-buttons-number">8</div></td>
                            <td><div id="button-9" class="input-buttons-number">9</div></td>
                            <td><div id="button-+" class="input-buttons-number">+</div></td>
                        </tr>
                        <tr>
                            <td><div id="button-4" class="input-buttons-number">4</div></td>
                            <td><div id="button-5" class="input-buttons-number">5</div></td>
                            <td><div id="button-6" class="input-buttons-number">6</div></td>
                            <td><div id="button--" class="input-buttons-number">-</div></td>
                        </tr>
                        <tr>
                            <td><div id="button-1" class="input-buttons-number">1</div></td>
                            <td><div id="button-2" class="input-buttons-number">2</div></td>
                            <td><div id="button-3" class="input-buttons-number">3</div></td>
                            <td rowspan="2"><div id="button-=" class="input-buttons-row">=</div></td>
                        </tr>
                        <tr>
                            <td colspan="2"><div id="button-0" class="input-buttons-col">0</div></td>
                            <td><div id="button-," class="input-buttons-number">,</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    

    <script>
        window.onload = function(){
            var input       = document.getElementById('input-result');
            var backspace   = document.getElementById('button-backspace');
            var clear       = document.getElementById('button-clear');
            var division    = document.getElementById('button-/');
            var multiply    = document.getElementById('button-x');
            var sum         = document.getElementById('button-+');
            var subtract    = document.getElementById('button--');
            var one         = document.getElementById('button-1');
            var two         = document.getElementById('button-2');
            var three       = document.getElementById('button-3');
            var four        = document.getElementById('button-4');
            var five        = document.getElementById('button-5');
            var six         = document.getElementById('button-6');
            var seven       = document.getElementById('button-7');
            var eight       = document.getElementById('button-8');
            var nine        = document.getElementById('button-9');
            var zero        = document.getElementById('button-0');
            var equal       = document.getElementById('button-=');
            var dot         = document.getElementById('button-,');
            var numberRule  = /^[0-9]+$/;

            backspace.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    
                }else{
                    input.innerHTML = input.innerHTML.substring(0,input.innerHTML.length-1);
                    if(input.innerHTML.length == 0){
                        input.innerHTML = "0";
                    }
                }
            };
            clear.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    
                }else{
                    input.innerHTML = "0";
                }
            };
            division.onclick = function(){
                
                if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length).match(numberRule)){                    
                    resultado();
                    input.innerHTML += "/";
                }else{
                    if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length) == "/"){

                    }else{
                        
                        input.innerHTML = input.innerHTML.substring(0,input.innerHTML.length-1);
                        input.innerHTML += "/";
                    }   
                }
            };
            multiply.onclick = function(){
                if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length).match(numberRule)){
                    resultado();                    
                    input.innerHTML += "*";
                }else{
                    if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length) == "*"){

                    }else{
                        input.innerHTML = input.innerHTML.substring(0,input.innerHTML.length-1);
                        input.innerHTML += "*";
                    }   
                }
            };
            sum.onclick = function(){
                if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length).match(numberRule)){
                    resultado();                    
                    input.innerHTML += "+";
                }else{
                    if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length) == "+"){

                    }else{
                        input.innerHTML = input.innerHTML.substring(0,input.innerHTML.length-1);
                        input.innerHTML += "+";
                    }   
                }
            };
            subtract.onclick = function(){
                if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length).match(numberRule)){
                    resultado();                    
                    input.innerHTML += "-";
                }else{
                    if(input.innerHTML.substring(input.innerHTML.length-1,input.innerHTML.length) == "-"){

                    }else{
                        input.innerHTML = input.innerHTML.substring(0,input.innerHTML.length-1);
                        input.innerHTML += "-";
                    }   
                }
            };
            nine.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "9";
                }else{
                    input.innerHTML += "9";
                }
            };
            eight.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "8";
                }else{
                    input.innerHTML += "8";
                }
            };
            seven.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "7";
                }else{
                    input.innerHTML += "7";
                }
            };
            six.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "6";
                }else{
                    input.innerHTML += "6";
                }
            };
            five.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "5";
                }else{
                    input.innerHTML += "5";
                }
            };
            four.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "4";
                }else{
                    input.innerHTML += "4";
                }
            };
            three.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "3";
                }else{
                    input.innerHTML += "3";
                }
            };
            two.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "2";
                }else{
                    input.innerHTML += "2";
                }
            };
            one.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "1";
                }else{
                    input.innerHTML += "1";
                }
            };
            zero.onclick = function(){
                if(input.innerHTML == "0" && input.innerHTML.length == 1){
                    input.innerHTML = "0";
                }else{
                    input.innerHTML += "0";
                }
            };
            dot.onclick = function(){
                if(input.innerHTML.match(numberRule)){
                    input.innerHTML += ",";
                }
                var simb;
                var aux;
                for (let i = input.innerHTML.length; i > 0; i--) {
                    
                    if(input.innerHTML.substring(i-1,i) == "/" || input.innerHTML.substring(i-1,i) == "*" || input.innerHTML.substring(i-1,i) == "+" || input.innerHTML.substring(i-1,i) == "-"){
                        simb = input.innerHTML.substring(i-1,i);
                        aux = input.innerHTML.lastIndexOf(simb,i);
                        break;
                    }
                }
                if(input.innerHTML.substring(aux+1,input.innerHTML.length).match(numberRule)){
                    input.innerHTML += ",";
                }
            };
            equal.onclick = function(){
                var ultimo = input.innerHTML.substring(input.innerHTML.length-1);
                if(ultimo == "/" || ultimo == "*" || ultimo == "+" || ultimo == "-"){

                }else{
                    resultado();
                }
            };

            function resultado(){
                if(input.innerHTML.includes("*")){
                        var index = input.innerHTML.indexOf("*");
                        var num1 = input.innerHTML.substring(0,index);
                        var num2 = input.innerHTML.substring(index+1,input.innerHTML.length);
                        num1 = num1.replace(",",".");
                        num2 = num2.replace(",",".");
                        input.innerHTML = parseFloat(num1) * parseFloat(num2);
                    }
                    if(input.innerHTML.includes("/")){
                        var index = input.innerHTML.indexOf("/");
                        var num1 = input.innerHTML.substring(0,index);
                        var num2 = input.innerHTML.substring(index+1,input.innerHTML.length);
                        num1 = num1.replace(",",".");
                        num2 = num2.replace(",",".");
                        input.innerHTML = parseFloat(num1) / parseFloat(num2);
                    }
                    if(input.innerHTML.includes("+")){
                        var index = input.innerHTML.indexOf("+");
                        var num1 = input.innerHTML.substring(0,index);
                        var num2 = input.innerHTML.substring(index+1,input.innerHTML.length);
                        num1 = num1.replace(",",".");
                        num2 = num2.replace(",",".");
                        input.innerHTML = parseFloat(num1) + parseFloat(num2);
                    }
                    if(input.innerHTML.includes("-")){
                        var index = input.innerHTML.indexOf("-");
                        var num1 = input.innerHTML.substring(0,index);
                        var num2 = input.innerHTML.substring(index+1,input.innerHTML.length);
                        num1 = num1.replace(",",".");
                        num2 = num2.replace(",",".");
                        input.innerHTML = parseFloat(num1) - parseFloat(num2);
                    }
            };
        };
    </script>
</body>
</html>