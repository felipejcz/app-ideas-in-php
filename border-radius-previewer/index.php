<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Border Radius Previewer - App Ideas in PHP</title>
<!-- Style declaret !-->
<style>
    .box {
        position: absolute;
        width: 50px;
        height: 50px;
        border: 1px solid #000;
        left: 40px;
        top: 40px;

    }

    .container{
        position: absolute;
        width: 200px;
        height: 200px;
    }

    .container input{
        width: 20px;
    }

    .border-top-right{
        position: absolute;
        left: 95px;
        top: 18px;
    }

    .border-top-left{
        position: absolute;
        top: 18px;
        left: 12px;
    }

    .border-bottom-right{
        position: absolute;
        top: 93px;
        left: 95px;
    }

    .border-bottom-left{
        position: absolute;
        top: 93px;
        left: 12px;
    }

    .border-input-text{
        position: relative;
        top: 130px;
    }

</style>
</head>
<body>
    <!-- HTML declaret !-->
    <div class="container">
        <div class="border-top-left">
            <input type="text" name="top-left" id="top-left">
        </div>
        <div class="border-top-right">
            <input type="text" name="top-right" id="top-right">
        </div>
        <div class="box" id="box"></div>
        <div class="border-bottom-left">
            <input type="text" name="bottom-left" id="bottom-left">
        </div>
        <div class="border-bottom-right">
            <input type="text" name="bottom-right" id="bottom-right">
        </div>
        
    </div>
    <div class="border-input-text">
        Style.border-radius:<input type="text" name="input-text" id="input-text">
    </div>
</body>

<script>
    window.onload = function(){

        //variables declaration
        var box = document.getElementById('box');
        var topRight = document.getElementById('top-right');
        var topLeft = document.getElementById('top-left');
        var bottomRight = document.getElementById('bottom-right');
        var bottomLeft = document.getElementById('bottom-left');
        var inputText = document.getElementById('input-text');
        var regra = /^[0-9]+$/; 
        topRight.onchange = function(){
            var valor = topRight.value;
            if(!valor.match(regra)){//verify if is numeric
                alert("The field must contain only positive number");
                return;//break javascript
            }
            box.style.borderTopRightRadius = valor+"px";
            refreshInput();
        };
        topLeft.onchange = function(){
            var valor = topLeft.value;
            if(!valor.match(regra)){
                alert("The field must contain only positive number");
                return;
            }
            box.style.borderTopLeftRadius = valor+"px";
            refreshInput();
        };
        bottomRight.onchange = function(){
            var valor = bottomRight.value;
            if(!valor.match(regra)){
                alert("The field must contain only positive number");
                return;
            }
            box.style.borderBottomRightRadius = valor+"px";
            refreshInput();
        };
        bottomLeft.onchange = function(){
            var valor = bottomLeft.value;
            if(!valor.match(regra)){
                alert("The field must contain only positive number");
                return;
            }
            box.style.borderBottomLeftRadius = valor+"px";
            refreshInput();
        };
        
        function refreshInput(){
            inputText.value = box.style.borderTopLeftRadius+" "+box.style.borderTopRightRadius+" "+box.style.borderBottomRightRadius+" "+box.style.borderBottomLeftRadius;
        }
    };
        
</script>
</html>