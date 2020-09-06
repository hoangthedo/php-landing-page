<link rel="stylesheet" href="/assets/product.css"> 
<div id="body">
    <div id="left-box-body">
        <div class="menu">
            <span class="menu-content">MENU</span>
        </div>
        <div id="accordion" style="text-align: center;">
            <div class="card">
                <div class="card-header" id="headingTwo" style="background-color:lightgrey;">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <span class="label-left-box">Thức ăn</span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body" style="padding:0;">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action add-list-group">Món
                                cơm</button>
                            <button type="button" class="list-group-item list-group-item-action add-list-group">Món
                                nước</button>
                            <button type="button" class="list-group-item list-group-item-action add-list-group">Món ăn
                                vặt</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree" style="background-color:lightgrey;">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <span class="label-left-box">Thức uống</span>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body" style="padding:0;">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action add-list-group ">Trà
                                sữa</button>
                            <button type="button" class="list-group-item list-group-item-action add-list-group">Cà
                                phê</button>
                            <button type="button" class="list-group-item list-group-item-action add-list-group">Sinh
                                tố</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="right-box-body">
        <div class="box-food">
            <img src="/picture/mixao.png" style="width: 100%;">
            <div class="name-food">MÌ XÀO GIÒN</div>
            <div class="price-food">25.000 <span style="text-decoration: underline;">đ</span></div>
            <button type="button" class="btn btn-primary" style="display: inline-block; font-size: 1.5vw;">Buy</button>
            <input type="number" class="form-control amount" min=1 max=30 value=1>
        </div>


        <div class="btn-group mr-2" style="float:right; margin-top:10%;" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary" style="background-color:lightsalmon;">&lt;&lt;</button>
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary" style="background-color:lightsalmon;">&gt;&gt;</button>
        </div>
    </div>
</div>