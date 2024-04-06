<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aer App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">
   <style>
*, *::after, *::before {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html {
    box-sizing: inherit;
    font-size: 62.5%;
}
body {
    background-color: #f1f3f5;
    color: #343a40;
 font-size: 4rem;
    font-family: "Signika", sans-serif;
}
.navBar{
    display: flex;
    list-style: none;
    gap: 1.2rem;
    text-align: center;
    align-content: center;
    justify-content: center
}
.navList{
    background-color: #343a40;
    color: #f1f3f5;
    border-radius: 4px;
    padding: 1.2rem 2.4rem;
    font-size: 2rem;
}
.productList {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    margin: 2rem auto;
    font-size: 1.6rem;

}
.producItem {
    border-bottom: 1px solid #343a40;
    padding: 2rem;
}
.message {
    background-color: coral;
    color: #f1f3f5;
    font-size: 1.2rem;
    border: #343a40;
}

   </style>
</head>
<body >
    <ul class="navBar">
        <li class="navList">
            <a href="/">
                Home
            </a>
            </li>
        <li class="navList">
            <a href="/allproducts">
                Les Produits
                
            </a>
        </li>
    </ul>
    @yield('content')
</body>
</html>