
<?php include 'include/header.php';?>

<div style="background-color: #678780;">
<Section >
    <div class="container py-3 mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card border-secondary  py-3">
                    <div class="card-header text-center">
                        <h1>I am Muhammad Mainasara Bugaje<br><br>This is My Genaral Calculator with Watch</h1>
                    </div>

                    <div class="card-body">
                        <h1 class="text-center text-danger">Watch</h1>
                        <br/>
                        <strong><h1 class="text-center" id = "watch"></h1> </strong>
                    </div>

                    <div class="card-footer ">
                <h1 class="text-center">Basic Calculetor</h1>  <br>     
                <table class="text-justify" >
                    <tr>
                        <th>First Number</th>
                        <td>
                            <input type="number" id="first_number">
                        </td>
                    </tr>

                    <tr>
                        <th>Second Number</th>
                        <td>
                            <input type="number" id="second_number">
                        </td>
                    </tr>

                    <tr>
                        <th>Result</th>
                        <td>
                            <input type="text" id="result">
                        </td>
                    </tr>

                    <tr>
                        <th>Result</th>
                        <td>
                            <input type="button" id="plus_btn" onclick="my_calculator ('+')" value="+">
                            <input type="button" id="minus_btn" value="-" onclick="my_calculator ('-')">
                            <input type="button" id="multiplication_btn" value="*" onclick="my_calculator ('*')">
                            <input type="button" id="division_btn" value="/" onclick="my_calculator ('/')">
                            <input type="button" id="modulus_btn" value="%" onclick="my_calculator ('%')">
                            <input type="button" id="reset_btn" value="reset">
                        </td>
                    </tr>
                </table>  
            </div>
                </div>    
            </div>
        </div>
    </div>
</section>
</div>

    <script src="../assets/js/CalculatorJs/script.js"> </script>


    <?php include 'include/footer.php';?>

