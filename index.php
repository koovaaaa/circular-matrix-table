<html>
<head>
    <title>jobProject by Milan Kovacevic</title>
    <link rel="stylesheet" href="indexStyle.css">
</head>
<body>

<div class="container">
<div id="divLeft" class="divLeft">
    <form action="" method="get">
        <table class="table1">
            <tr>
                <td id="kolone"><label for="brKolona">Broj kolona</label></td>
                <td id="redovi"><label for="brRedova">Broj redova</label></td>
            </tr>
            <tr>
                <td id="kolone"><input type="number" id="brKolona" name="brKolona" value="1"></td>
                <td id="redovi"><input type="number" id="brRedova" name="brRedova" value="1"></td>
            </tr>  
        </table>
    </form>
</div>


<div id="divRight" class="divRight">
    <table id="table2" class="table2">
        <thead></thead>
        <tbody id="result"></tbody>
    </table>
</div>
</div>

<script src="ajaxScript.js"></script>
</body>
</html>