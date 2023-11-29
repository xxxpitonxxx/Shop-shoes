<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="card1">

<h1 class="text brend">Полный список товаров</h1>



<div class="goods_store">
    <div id="users">

    </div>
</div>

   

    <script>

        let json =JSON.stringify({
            "action":"getStuff",
            "payload":{

            }
        });

        
        
        fetch("http://localhost/apishop.php", {
            method: 'POST',
            body: json,
        })

        .then(response => response.json())
        .then(data => {
            let users =document.getElementById("users");

            data.forEach(element => {
                users.innerHTML += 
                                        "<div class='text but brend'>"+element['Бренд']+"</div>"+
                                        "<div class='text but brend'>"+element['Цена']+"</div>"+
                                        "<img class='foto but brend' src='"+element['photo']+"'>"
                                        
                
                
            });
        })
        
        .catch(error => {
            console.log(error);
        })
        

    </script>
    
</body>
</html>