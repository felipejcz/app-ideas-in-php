<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cause Effect App - App Ideas in PHP</title>

<style>
* {
    padding: 0;
    margin: 0;
}
.container{
    border: 1px solid #000;
    padding: 50px;
    float: inline-start;
    width: 42%;
    margin-left: 5px;
}
.people-group {
    padding: 10px;
}

#people-list li{
    padding: 10px;
}
</style>
</head>
<body>
    <div class="container">
        <h2>People list:</h2>
        <ul id="people-list">
        </ul>
    </div>
    <div class="container">
    <h2>People details:</h2>
    <div class="people-details">
        <div class="people-group">
            <label for="people-name">Name:</label>
            <input type="text" id="people-name" disabled>
        </div>
        <div class="people-group">
            <label for="people-street">Street:</label>
            <input type="text" id="people-street" disabled>
        </div>
        <div class="people-group">
            <label for="people-city">City:</label>
            <input type="text" id="people-city" disabled>
        </div>
        <div class="people-group">
            <label for="people-state">State:</label>
            <input type="text" id="people-state" disabled>
        </div>
        <div class="people-group">
            <label for="people-country">Country:</label>
            <input type="text" id="people-country" disabled>
        </div>
        <div class="people-group">
            <label for="people-telephone">Telephone:</label>
            <input type="text" id="people-telephone" disabled>
        </div>
        <div class="people-group">
            <label for="people-birthday">Birthday:</label>
            <input type="text" id="people-birthday" disabled>
        </div>
    </div>
    </div>
<script>
window.onload = function() {
    var accounts = [{name: "Test 1", street: "...", city: "...", state: "...", country: "...", telephone: "...", birthday: "..."},
    {name: "Test 2", street: "...", city: "...", state: "...", country: "...", telephone: "...", birthday: "..."},
    {name: "Test 3", street: "...", city: "...", state: "...", country: "...", telephone: "...", birthday: "..."},
    {name: "Test 4", street: "...", city: "...", state: "...", country: "...", telephone: "...", birthday: "..."},
    {name: "Test 5", street: "...", city: "...", state: "...", country: "...", telephone: "...", birthday: "..."}];
    var list = document.getElementById('people-list');
    
    for (let i = 0; i < accounts.length; i++) {
        list.innerHTML += "<li><a href='#' id='"+i+"' class='people-info' data-id='"+i+"'>"+accounts[i]['name']+"</a></li>";
    }

    var el = document.getElementById('people-list');
    el.addEventListener('click', function(e) {
        var people = accounts[e.target.id];
        document.getElementById('people-name').value = people['name'];
        document.getElementById('people-street').value = people['street'];
        document.getElementById('people-city').value = people['city'];
        document.getElementById('people-state').value = people['state'];
        document.getElementById('people-country').value = people['country'];
        document.getElementById('people-telephone').value = people['telephone'];
        document.getElementById('people-birthday').value = people['birthday'];
    });
}
</script>
</body>
</html>