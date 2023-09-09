<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    #card-animation {
        display: flex;
        justify-content: center;
        align-items: center;

        min-height: 100vh;
        /* background-color: #161623; */
        /* background-color: #4e60b7; */
        background: url('img/industria-interior-menor.jpg');
        width: 100%;
        height: 100%;
    
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;

        max-width: 100%;
        max-height: 100%;
        flex-wrap: wrap;
        z-index: 1;
    }

    .container .card {
        position: relative;
        width: 280px;
        height: 400px;
        margin: 30px;
        box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.1);
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        border-top: 1px solid rgba(255, 255, 255, 0.5);
        border-left: 1px solid rgba(255, 255, 255, 0.5);
        /* caso use imagem no background */
        backdrop-filter: blur(5px);
    }

    .container .card .content {
        padding: 20px;
        text-align: center;
        transform: translateY(100px);
        opacity: 0;
        transition: 0.5s;
    }

    .container .card:hover .content {
        transform: translate(0px);
        opacity: 1;
    }

    .container .card .content h2 {
        position: absolute;
        top: -80px;
        right: 30px;
        font-size: 8em;
        color: rgba(255, 255, 255, 0.5);
        pointer-events: none;
    }

    .container .card .content h3 {
        font-size: 1.8em;
        color: #fff;
        z-index: 1;
    }

    .container .card .content p {
        font-size: 1em;
        color: #fff;
        font-weight: 300;
        /* z-index: 1; */
    }

    .container .card .content a {
        position: relative;
        display: inline-block;
        margin-top: 20px;
        padding: 8px 20px;
        color: #000;
        background-color: #fff;
        text-decoration: none;
        font-weight: 400;
        border: 1px solid #fff;
        border-radius: 20px;
        font-size: 0.8em;
        /* transition: 0.5s; */
        font-weight: 500;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
</style>

<div id="card-animation">
    <div class="container">
        <div class="card">
            <div class="content">
                <h2>01</h2>
                <h3>Card um</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit ad, quod aperiam ullam exercitationem aut officiis earum, assumenda cupiditate et
                    sed mollitia libero harum placeat possimus voluptatum nisi labore omnis!
                </p>
                <a href="#">More information</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <h2>02</h2>
                <h3>Card dois</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit ad, quod aperiam ullam exercitationem aut officiis earum, assumenda cupiditate et
                    sed mollitia libero harum placeat possimus voluptatum nisi labore omnis!
                </p>
                <a href="#">More information</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <h2>03</h2>
                <h3>Card três</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit ad, quod aperiam ullam exercitationem aut officiis earum, assumenda cupiditate et
                    sed mollitia libero harum placeat possimus voluptatum nisi labore omnis!
                </p>
                <a href="#">More information</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <h2>04</h2>
                <h3>Card três</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit ad, quod aperiam ullam exercitationem aut officiis earum, assumenda cupiditate et
                    sed mollitia libero harum placeat possimus voluptatum nisi labore omnis!
                </p>
                <a href="#">More information</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <h2>05</h2>
                <h3>Card três</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit ad, quod aperiam ullam exercitationem aut officiis earum, assumenda cupiditate et
                    sed mollitia libero harum placeat possimus voluptatum nisi labore omnis!
                </p>
                <a href="#">More information</a>
            </div>
        </div>

        <div class="card">
            <div class="content">
                <h2>06</h2>
                <h3>Card três</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Fugit ad, quod aperiam ullam exercitationem aut officiis earum, assumenda cupiditate et
                    sed mollitia libero harum placeat possimus voluptatum nisi labore omnis!
                </p>
                <a href="#">More information</a>
            </div>
        </div>
    </div>
    
</div>
<script type="text/javascript" src="js/vanilla-tilt.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 400,
        glare: true,
        "max-glare": 1,
    });
</script>