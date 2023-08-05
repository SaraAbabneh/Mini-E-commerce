<!doctype html>
<html lang="en">
<!-- category.php -->

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #container {
            width: 300px;
            height: 200px;
        }

        #container img {
            width: 100%;
            height: 100%;
            margin-bottom: 20px;
        }

        .cointanier_pag {
            /* text-align: end; */
            background-color: blue;
            width: 50%;
            margin: 20px;
            padding: 20px; 
        }
    </style>
</head>

<body>

    <div class="cointanier_pag">
        <div class="containeimg mt-5" id="container">
            <img src="" alt="">
        </div>

        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="../image/bg-1.jpg"
                    data-img-src="../image/bg-1.jpg">Previous</a></li>
            <li class="page-item"><a class="page-link" href="../image/bg-2.jpg" data-img-src="../image/bg-2.jpg">1</a>
            </li>
            <li class="page-item active"><a class="page-link" href="../image/bg-3.jpg"
                    data-img-src="../image/bg-3.jpg">2</a></li>
            <li class="page-item"><a class="page-link" href="../image/bg-4.jpg" data-img-src="../image/bg-4.jpg">3</a>
            </li>
            <li class="page-item"><a class="page-link" href="../image/bg-5.jpg"
                    data-img-src="../image/bg-5.jpg">Next</a>
            </li>
        </ul>

    </div>
    <script>
        function add() {
            let items = document.querySelectorAll('.page-item a');
            let container = document.getElementById('container');
            let img = container.querySelector('img');

            items.forEach(item => {
                item.addEventListener('click', function (event) {
                    event.preventDefault();
                    let imgSrc = item.dataset.imgSrc;
                    img.src = imgSrc;

                    // Store the selected image URL in localStorage
                    localStorage.setItem('selectedImage', imgSrc);
                });
            });

            // Retrieve the selected image URL from localStorage
            let storedImage = localStorage.getItem('selectedImage');
            if (storedImage) {
                img.src = storedImage;
            }
        }


        document.addEventListener('DOMContentLoaded', add);
    </script>


    <!-- Optional JavaScript -->
    <!-- < !--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>