<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script >
        function getPageList(totalPages, page, maxLength) {
    function range(start, end) {
        return Array.from(Array(end - start + 1), (_, i) => i + start);
    }

    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;


    if (totalPages <= maxLength) {
        return range(1, totalPages);
    }


    if (page <= maxLength - sideWidth - 1 - rightWidth) {
        return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
    }


    if (page >= totalPages - sideWidth - 1 - rightWidth) {
        return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
    }


    return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));

}

$(function() {
    var numberOfItems = $(".card-content .cards").length;
    var limitPerPage = 3; //No. of cards to show per page
    var totalPages = Math.ceil(numberOfItems / limitPerPage);
    var paginationSize = 3; //pagination items to show
    var currentPage;


    function showPage(whichPage) {
        if (whichPage < 1 || whichPage > totalPages) return false;

        currentPage = whichPage;

        $(".card-content .cards").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

        $(".pagination li").slice(1, -1).remove();

        getPageList(totalPages, currentPage, paginationSize).forEach(item => {
            $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots").toggleClass("active", item === currentPage).append($("<a>").addClass("page-link").attr({ href: "javascript:void(0)" }).text(item || "...")).insertBefore(".next-page");
        });

        $(".previous-page").toggleClass("disable", currentPage === 1);
        $(".next-page").toggleClass("disable", currentPage === totalPages);
        return true;
    }


    $(".pagination").append(
        $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({ href: "javascript:void(0)" }).text("Prev")),
        $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({ href: "javascript:void(0)" }).text("Next"))
    );


    $(".card-content").show();
    showPage(1);


    $(document).on("click", ".pagination li.current-page:not(.active)", function() {
        return showPage(+$(this).text());
    });



    $(".next-page").on("click", function() {
        return showPage(currentPage + 1);
    });


    $(".previous-page").on("click", function() {
        return showPage(currentPage - 1);
    });


});
</script>
  
    <title>Food</title>
</head>


<body>
    


   
       


 <!-- Debut Pagination -->
            



 <div class="card-container">
    <div class="page  d-flex justify-content-around">
        
        <h2 class="mt-lg-5">Search by Food</h2>
        
   
    <div class="pagination mt-lg-5">
        <!--<a class="me-3 text-warning" href="{{url('/preview')}}">View all </a>-->
        <a class="me-3 text-warning"  href="{{url('/preview')}}">View all ></a>

        <li class="page-item previous-page disable">
            <a class="page-link " href="#" >Prev </a>
        </li>

        <li class="page-item next-page">
            <a class="page-link" href="#">Next</a>
        </li>
    </div>
</div>
    <div class="card-content">
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo.png" alt="">
            </div>
            <div class="card-info">
                <h3>pizza</h3>
            
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (1).png" alt="">
            </div>
            <div class="card-info">
                <h3>Burger</h3>
            
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (2).png" alt="">
            </div>
            <div class="card-info">
                <h3>Nodles</h3>
            
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (3).png" alt="">
            </div>
            <div class="card-info">
                <h3>Sandwich</h3>
            
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (4).png" alt="">
            </div>
            <div class="card-info">
                <h3>Chowmein</h3>
            
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (5).png" alt="">
            </div>
            <div class="card-info">
                <h3>Steak</h3>
            
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo.png" alt="">
            </div>
            <div class="card-info">
                <h3>pizza</h3>
                
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (1).png" alt="">
            </div>
            <div class="card-info">
                <h3>Burger</h3>
                
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (2).png" alt="">
            </div>
            <div class="card-info">
                <h3>Sandwich</h3>
               
            </div>
        </a>
        <a href="#" class="cards" title="Click me!">
            <div class="card-image">
                <img src="img/Food Photo (3).png" alt="">
            </div>
            <div class="card-info">
                <h3>Chowmein</h3>
                
            </div>
        </a>

      
       
       
    </div>


</div>


 <!--Fin Pagination -->






            <!-- <div class="row row-cols-1 row-cols-md-6 g-5 text-center pb-5">
                <div class="col">
                    <div class=" h-100">
                        <img src="img/Food Photo.png" class="card-img-top" alt="...">
                        <h5 class="my-2">pizza</h5>
                    </div>
                </div>
                <div class="col">
                    <div class=" h-100">
                        <img src="img/Food Photo (1).png" class="card-img-top" alt="...">
                        <h5 class="my-2">Burger</h5>
                    </div>
                </div>
                <div class="col">
                    <div class=" h-100">
                        <img src="img/Food Photo (2).png" class="card-img-top" alt="...">
                        <h5 class="my-2">Nodles</h5>
                    </div>
                </div>
                <div class="col">
                    <div class=" h-100">
                        <img src="img/Food Photo (3).png" class="card-img-top" alt="...">
                        <h5 class="my-2">Sub-sandwich</h5>
                    </div>
                </div>
                <div class="col">
                    <div class=" h-100">
                        <img src="img/Food Photo (4).png" class="card-img-top" alt="...">
                        <h5 class="my-2">Chowmein</h5>
                    </div>
                </div>
                <div class="col">
                    <div class=" h-100">
                        <img src="img/Food Photo (5).png" class="card-img-top" alt="...">
                        <h5 class="my-2">Steak</h5>
                    </div>
                </div>
            </div> -->


            <section class=" container-fluid p-5">
                <div class="container bg-light py-5 mt-5 shadow" style="border-radius: 25px;
                            background-color: #feefd0;">

                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-3 g-5 text-center">
                            <div class="col text-center">
                                <div class=" h-100">
                                    <img src="{{asset('img/Icon.svg')}}" class="" alt="...">
                                    <img src="{{asset('img/Text.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class=" h-100">
                                    <img src="{{asset('img/Icon (1).svg')}}" class="" alt="...">
                                    <img src="{{asset('img/Text (1).png')}}" alt="">
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class=" h-100">
                                    <img src="{{asset('img/Icon (3).png')}}" class="" alt="...">
                                    <img src="img/Text (2).png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="container mt-5 pt-5 "
                    style="background-image: url(img/Design.png) ;background-position: top; ">
                    <div class="row row-cols-1 row-cols-md-2 g-2">
                        <div class="col ">
                            <div class=" h-50">
                                <img class="phone" src="img/phone.png" alt="" width="500">
                            </div>
                        </div>
                        <div class="col ">
                            <div class="h-100 mt-5 pt-2">
                                <h1 class="text-warning">Install the app</h1>
                                <p>It's never been easier to order food. Look for the <br>
                                    fitness discounts and you will be the last in a warrid of <br>
                                    delectable food </p>
                                <div class="d-flex store">
                                   <a href="#"> <img src="img/Google Play Download.png" alt="" style="margin-left: -2.5rem;"> </a>
                                   <a href="#"> <img src="img/App Store Download Button.png" alt="" style="margin-left: -4rem;"> </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>