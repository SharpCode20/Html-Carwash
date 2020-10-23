<!DOCTYPE html>
<html>
    <head>
        <title>Sharp Car Wash</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>Welcome to Sharp Car Wash!</h1>
        <div id="buttons">   
            <h3>Detailing Services:</h3>
            <div>
                <select id="service">
                    <option value="full">Full Detail</option>
                    <option value="full">Interior Detail</option>
                    <option value="full">Exterior Detail</option>
                </select>
            </div>
            <label for="empid">Customer ID:</label>
            <input for="text" id="empID" name="empID"><br>
            <label for="pswrd">Date:</label>
            <input for="text" id="date" name="date"><br>
            <a href="C:\xampp\htdocs\CS221\thankyou.html"><button>Purchase Detail</button></a>
        </div>
        <div id="buttons">   
            <h3>Wash Packages:</h3>
            <div>
                <select id="service">
                    <option value="full">Budget Wash</option>
                    <option value="full">Deluxe Exterior</option>
                    <option value="full">Full Service</option>
                    <option value="full">Works Package</option>
                </select>
            </div>
            <label for="empid">Customer ID:</label>
            <input for="text" id="empID" name="empID"><br>
            <label for="pswrd">Date:</label>
            <input for="text" id="date" name="date"><br>
            <label for="pswrd">Time (00:00AM):</label>
            <input for="text" id="time" name="time"><br>
            <a href="C:\xampp\htdocs\CS221\thankyou.html"><button>Purchase Wash</button></a>
        </div>
    </body>
</html>