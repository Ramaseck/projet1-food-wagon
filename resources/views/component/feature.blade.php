
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    


    <!-- En-tête de la page
   

    <!-- Contenu principal de la page -->
    <h1 style="text-align: center;">Featured Restaurants</h1>

    <div class="container mt-4">
        <div class="row restaurant-container">

            <!-- Première rangée de cartes -->
            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Food Photo-5.jpg')}}" alt="Foodworld">
                        <img src="{{asset('imagess/Restaruant Logo.jpg')}}" alt="" class="logo">
                        <div class="card-body">
                        <h6 class="card-title">Foodworld</h6>
                        <div class="card-star">⭐46</div> 
                        <a href="#" class="btn foodworld-btn">Opens tomorrow</a>

                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Food Photo-4.jpg')}}" alt="Pizzahub">
                        <img src="{{asset('imagess/Restaruant Logo-1.jpg')}}" alt="" class="logo">
                        <div class="card-body">
                         <h6 class="card-title">Pizzahub</h6>
                         <div class="card-star">⭐40</div> 
                        <a href="#" class="btn pizzahub-btn">Opens tomorrow</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Food Photo-1.jpg')}}" alt="Donuts hut">
                        <img src="{{asset('imagess/Restaruant Logo-2.jpg')}}" alt="" class="logo">
                        <div class="card-body">
                        <h6 class="card-title">Donuts hut</h6>
                         <div class="card-star">⭐20</div> 
                          <a href="#" class="btn donuts-hut-btn1">Open Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Image-1.jpg')}}" alt="Donuts hup">
                        <img src="{{asset('imagess/Restaruant Logo-3.jpg')}}" alt="" class="logo">
                        <div class="card-body">
                         <h6 class="card-title">Donuts Hut</h6>
                         <div class="card-star">⭐50</div> 
                          <a href="#" class="btn donuts-hut-btn2">Open Now</a>
                    </div>
                </div>
            </div>
            
                        <!-- Deuxième rangée de cartes -->
            
            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Food Photo-2.jpg')}}" alt="Ruby Tuesday">
                        <img src="{{asset('imagess/Restaruant Logo-1.jpg')}} " alt="" class="logo">
                        <div class="card-body">
                        <h6 class="card-title">Ruby Tuesday</h6>
                        <div class="card-star">⭐26</div> 
                       <a href="#" class="btn Ruby-Tuesday-btn">Open Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Food Photo-3.jpg')}}" alt="Kuakata Fried Chicken">
                        <img src="{{asset('imagess/Image-2.jpg')}}" alt="" class="logo">
                        <div class="card-body">
                        <h6 class="card-title">Kuakata Fried Chicken</h6>
                         <div class="card-star">⭐53</div> 
                        <a href="#" class="btn Kuakata-Fried-Chicken-btn">Open Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Food Photo-4.jpg')}}" alt="">
                        <img src="{{asset('imagess/Restaruant Logo-4.jpg')}}"alt="Red Square" class="logo">
                        <div class="card-body">
                        <h6 class="card-title">Red Square</h6>
                         <div class="card-star">⭐45</div> 
                         <a href="#" class="btn Red-Square-btn">Open Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="restaurant-card">
                    <img src="{{asset('imagess/Food Photo-5.jpg')}}" alt="Taco Bell">
                        <img src="{{asset('imagess/Restaruant Logo-3.jpg')}}" alt="" class="logo">
                        <div class="card-body">
                        <h6 class="card-title">Taco Bell</h6>
                         <div class="card-star">⭐35</div> 
                        <a href="#" class="btn Taco-Bell-btn">Open Now</a>
                    </div>
                </div>
            </div>

 <!-- Lien au milieu des images -->
            

        </div>
    </div>

    <!-- Bootstrap JS et scripts Popper.js via un CDN -->
    
</body>
</html>










