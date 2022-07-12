<html>

<head>
    <meta charset="utf-8">
    <title> Calculator </title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="base">
        <div class="calc"><a></a></div>
        <div class="result"><a></a></div>
        <table>
            <tr>
                <td><button onclick="onClickAppend(1)"><a>1</a></button></td>
                <td><button onclick="onClickAppend(2)"><a>2</a></button></td>
                <td><button onclick="onClickAppend(3)"><a>3</a></button></td>
                <td><button onclick="onClickAppend('+')"><a>+</a></button></td>
            </tr>
            <tr>
                <td><button onclick="onClickAppend(4)"><a>4</a></button></td>
                <td><button onclick="onClickAppend(5)"><a>5</a></button></td>
                <td><button onclick="onClickAppend(6)"><a>6</a></button></td>
                <td><button onclick="onClickAppend('-')"><a>-</a></button></td>
            </tr>
            <tr>
                <td><button onclick="onClickAppend(7)"><a>7</a></button></td>
                <td><button onclick="onClickAppend(8)"><a>8</a></button></td>
                <td><button onclick="onClickAppend(9)"><a>9</a></button></td>
                <td><button onclick="onClickAppend('X')"><a>X</a></button></td>
            </tr>
            <tr>
                <td><button onclick="onClickClean()"><a>C</a></button></td>
                <td><button onclick="onClickAppend(0)"><a>0</a></button></td>
                <td><button onclick="onClickEqual()"><a>=</a></button></td>
                <td><button onclick="onClickAppend('/')"><a>/</a></button></td>
            </tr>
        </table>
    </div>
</body>

</html>