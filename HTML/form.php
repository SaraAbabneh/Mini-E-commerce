<!-- form.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Add a New Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .left{
            width: 100%;
        }

        .h2_pro {
            text-align: left;
            margin-top: 20px;
            margin-left: 70px;
            font-size: 2em;
        }

        .form_pro {
        
            text-align: left;
            margin: 10px 50px;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form_pro .formgroup {
            margin-bottom: 20px;
         
        }

        .form_pro label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .form_pro .formcontrol {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 16px;
        }

        .form_pro textarea .formcontrol {
            resize: vertical;
        }

        .form_pro .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 44px;
            cursor: pointer;
            font-size: 1.4em;
        }

        .form_pro .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Media query for small screens */
        @media (max-width: 481px) {
            .form_pro label {
                font-size: 95%;     
            }

            .form_pro{
                padding: 13px;
                margin: 10px 21px;
            }
        }

        /* Media query for medium and larger screens */
        /* @media (min-width: 577px) {
            .form_pro {
                width: 50%;
               
            }
        } */
    </style>
</head>

<body>
    <div class="left">
        <h2 class="h2_pro">Add a New Product</h2>
        <form action="process_product.php" class="form_pro" method="post" enctype="multipart/form-data">
            <div class="formgroup">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" class="formcontrol" name="product_name" Required>
            </div>

            <div class="formgroup">
                <label for="product_image">Product Image:</label>
                <input type="file" id="product_image" class="formcontrol" name="product_image" Required>
            </div>

            <div class="formgroup">
                <label for="product_description">Product Description:</label>
                <textarea id="product_description" class="formcontrol" name="product_description" rows="4" cols="50"
                    required></textarea>
            </div>

            <div class="formgroup">
                <label for="product_price">Product Price:</label>
                <input type="number" id="product_price" class="formcontrol" name="product_price" step="0.01" Required>
            </div>

            <button type="submit" value="Add Product" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>

</html>