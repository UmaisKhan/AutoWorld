<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Auto World ';
?>

<style type="text/css">
body{
    background-color: #F2F2F2;
    color: #000;
}

    .box{
        width: 1000px;
        height: 300px;
        border: 0px solid #000;
        padding: 10px;
        box-shadow: 3px 3px 5px 6px #808080;
        border-radius: 20px;
        margin: 0px auto;
        background-color: #c0c0c0;
    }

    .logo{
        width: 80%;
        height: 100%;
        border: 1px solid #000;
        vertical-align: top;
        margin: 0px 50px 0px 90px;
        border-radius: 20px;
        background-color: #DCDCDC;
    }

    .box1{
        width: 1050px;
        height: 280px;
        border: 0px solid #000;
        border-radius: 20px;
        box-shadow: 3px 3px 5px 6px #808080;
        background-color: #c0c0c0;
        margin: 20px 20px 20px 20px;
        }

    .box2{
        width: 1050px;
        height: 280px;
        border: 0px solid #000;
        border-radius: 20px;
        box-shadow: 3px 3px 5px 6px #808080;
        background-color: #c0c0c0;
        margin: 20px 20px 20px 20px;
        }

    .innerBox1{
        width: 70%;
        height: 95%;
        border: 1px solid #000;
        display: inline-block;
        border-radius: 20px;
        margin: 10px;
        vertical-align: top;
        background-color: #DCDCDC;
    }

    .innerBox2{
        width: 25%;
        height: 95%;
        border: 1px solid #000;
        display: inline-block;
        border-radius: 20px;
        margin: 10px;
    }

    .wrapper{
        width: 1100px;
        height: 100%;
        border: 0px solid #000; 
        padding: 5px;
        border-radius: 20px;
        box-shadow: 3px 3px 5px 6px #808080;
        background-color: #DCDCDC;
    }

    .bottomBox1{
        width: 30%;
        height: 300px;
        border: 1px solid #000;
        border-radius: 20px;
        box-shadow: 3px 3px 5px 6px #808080;
        display: inline-block;
        padding: 10px;
        margin: 6px;
        background-color: #DCDCDC;
        vertical-align: top;
    }

    .bottomBox2{
        width: 33%;
        height: 300px;
        border: 1px solid #000;
        border-radius: 20px;
        box-shadow: 3px 3px 5px 6px #808080;
        display: inline-block;
        padding: 10px;
        margin: 6px;    
        vertical-align: top;
        background-color: #DCDCDC;
    }
    .bottomBox3{
        width: 32%;
        height: 300px;
        border: 1px solid #000;
        border-radius: 20px;
        box-shadow: 3px 3px 5px 6px #808080;
        display: inline-block;
        padding: 10px;
        margin: 6px;    
        vertical-align: top;
        background-color: #DCDCDC;
    }



</style>
<div class="site-index">

<div class="wrapper">

    <div  class="jumbotron">
    <div class="box">

        <div class="logo" align="center">
        <h1 style="font-size: 150px">Auto World </h1>

        <h2 style="font-size: 50px">Car Rental Services</h2>
        </div>
    </div>

    </div>

    <div class="box1">
        <div class="innerBox1">
            <p style="font-size: 20px; width: 700px; height: 50px; border: 0px solid #000; padding: 10px; margin: 10px;">
            <strong>    
                Now You Can Get Rent a Car Karachi Services In Self Drive
            </strong>
                <br>
            </p>    
                <p style="font-size: 16px; width: 700px; height: 120px; border: 0px solid #000; padding: 10px; margin: 10px;
                        text-align: justify;
                ">
                Karachi is famous as one of those cities of Pakistan that never sleeps. And when planning to visit the metropolis you would not want to spend your vacations without a private vehicle. would you? The traffic on the streets and a much dainty network of roads of the urban can greatly impact your mood on this little trip of yours. Apparently, if you are thinking about opting for the public transport option, that’s even bad.
            </p>
        </div>
        <div class="innerBox2">

            <!-- <img src="..\advance\car" alt="PIc"> -->

             <p style="">
            <?php echo Html::img('@web/uploads/honda1.png', ['class' => 'pull-left img-responsive']); ?>
            </p>
        </div> 
    </div>

    <div class="box2">
        <div class="innerBox1">
            <p style="font-size: 20px; width: 700px; height: 50px; border: 0px solid #000; padding: 10px; margin: 10px; ">
            <strong>
                "Car Hire Karachi has got all what you might not want to miss"
            </strong>    
                <br>
            </p>    
                <p style="font-size: 16px; width: 700px; height: 220px; border: 0px solid #000; padding: 10px; margin: 10px 0px 10px 10px; text-align: justify;">
                One of the perks of being a resident of the famous city –Karachi is. that you get to enjoy small family trips to the coast, maybe weekly or twice a week. You can put an end to all such issues by hiring the services of a reliable Rent a Car Karachi company that offers you the best car rental Karachi solutions. Travelling in cabs is doubt, a daunting task. Especially, if you are commuting for a business meeting then hiring a cab is not going to help you set a good impression of your company. While on the contrary, hiring a suitable vehicle is going to help to mark desired impression on your customers.
            </p>
        </div>
         <div class="innerBox2">
            
            <?php echo Html::img('@web/uploads/honda2.png', ['class' => 'pull-left img-responsive']); ?>

        </div>
    </div>

    <div class="bottomBox1">
        <p style="font-size: 20px; width: 100%; height: 25%; border: 0px solid #000; padding: 5px;">
        <strong>
            Why You Must Rent A Car in Karachi?
        </strong>
        </p>
        <p style="font-size: 16px; width: 100%; height: 80%; border: 0px solid #000; padding: 5px; text-align: justify;">
            However, Rent a Car can save you from all the hassles of public transportation. At Cars rentals Karachi, we are working hard to provide reliable vehicles on reasonable rental charges throughout the different cities of Pakistan.

        </p>

    </div>


    <div class="bottomBox2">
        <p style="font-size: 20px; width: 100%; height: 20%; border: 0px solid #000; padding: 5px;">
            <strong>
            
                Rent Cars 24/7 has made it easier to book vehicles....
            </strong>
        </p>

        <p style="font-size: 16px; width: 100%; height: 80%; border: 0px solid #000; padding: 5px; text-align: justify;">
            Our team completely understands that you don’t like wasting time just to book a suitable vehicle for your travelling. And being a foreigner brings in a whole lot of paperwork and documentation requirements that you would have to deal with. This is one of the main reasons as why people avoid opting for Car Rentals Karachi services. However, with Car Rentals Karachi, things are a lot easier.

        </p>

    </div>

    <div class="bottomBox3">
<p style="font-size: 20px; width: 100%; height: 20%; border: 0px solid #000; padding: 5px;">
            <strong>
            
                Our Car Hire Karachi solutions are one of the best!
            </strong>
        </p>

        <p style="font-size: 16px; width: 100%; height: 70%; border: 0px solid #000; padding: 5px; text-align: justify;">
            If you are on the hunt for a reliable car rental company, we can guarantee you Rent Cars 247 will be your best travelling partner. Our Rent Cars 247 team works hard in maintaining a large fleet of topnotch vehicles that can perfectly suit your travelling requirements.

        </p>
        

    </div>
    
    </div>

</div>
