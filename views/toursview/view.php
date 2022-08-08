<style>

    .target_blank{
        width: 100%;
        height: 100%;
        padding-top: 3rem;
        padding-bottom: 20px;
        background-color: #f3f3f3;
    }

    .target_blank img{
        width: 500px;
        padding-top: 40px;
        margin: 0 auto 2rem auto;
        display: block;
    }

    .target_blank h1{
        text-align: center;
        color: #222;
    }

    .target_blank p{
        color: #222;
        text-align: center;
    }



    .service-area-two .single-service a {
        background: transparent;
        border: 2px solid #f7ea00;
        color: #010101;
        font-weight: 600;
        float: left;
    }

    .service-area-four .single-service a {
        background: transparent;
        border: 1px solid #F24848;
        position: relative;
        z-index: 5;
    }

    .service-area-five .single-service a {
        border-color: #f7ea00;
    }

    .service-area-four .single-service a:before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: #F24848;
        z-index: -1;
        transition: all .4s ease;
    }

    .service-area-five .single-service a:before {
        background: #f7ea00;
    }

    .service-area-four .single-service a:after {
        position: absolute;
        content: "";
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        background: #F24848;
        z-index: -1;
        transition: all .4s ease;
    }

    .service-area-five .single-service a:after {
        background: #f7ea00;
    }

    .service-area-four .single-service a:hover:before,
    .service-area-five .single-service a:hover:before,
    .service-area-four .single-service a:hover:after,
    .service-area-five .single-service a:hover:after {
        width: 50%;
    }

    .service-area-four .single-service a:hover {
        color: #222;
    }

    .service-area-five .single-service a:hover {
        color: #010101;
    }

    .container .btn1{
        width: 120px;
        margin: 0 40%;
    }

    .container .sell{
        width: 220px;
        color: #222;
        background-color: white;
        /*margin: 0 auto;*/
        padding: 4px 10px;
        border: none;
        border: 1px solid #222;
        border-radius: 5px;
        outline: none;
        transition: all 0.5s ease;
    }

    .container .sell a{
        text-decoration: none;
    }

    .container .sell:hover{
        background-color: #222;
        transition: all 0.5s ease;
        color: #fff;
    }

    .container .sell i{
        transition: all 0.5s ease;
    }

    .container .sell:hover i{
        transform: translateX(5px);
        transition: all 0.5s ease;
    }



</style>

<section class="target_blank">
    <div class="container">

        <img src="<?=$image?>" alt="">

        <h1><?= $model->title_uz ?></h1>
        <p><?=$model->description_uz?></p>
        <p><?=$model->body_uz?></p>
        <div class="btn1">

            <a href="https://payme.uz/fallback/merchant/?id=62a846ae2abe8594b27f3744" class="btnn"><button class="sell">online to'lov qilish <i class="fas fa-angle-right"></i></button></a>
        </div>
    </div>
</section>