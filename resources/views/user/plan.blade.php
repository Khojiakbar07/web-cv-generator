@extends('layouts.user_type.auth')

@section('content')
<i class="background"></i>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="price-table">
                            <div class="price-head">
                                <h4>Free</h4>
                                <h2>0$<span>/month</span></h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>2 GB RAM</li>
                                    <li>40 GB Storage</li>
                                    <li>10 Email Accounts</li>
                                    <li>Limited Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-table">
                            <div class="price-head">
                                <h4>Pro</h4>
                                <h2>$14.99<span>/month</span></h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>4 GB RAM</li>
                                    <li>80 GB Storage</li>
                                    <li>30 Email Accounts</li>
                                    <li>One Year Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-table">
                            <div class="price-head">
                                <h4>Premium</h4>
                                <h2>$49.99<span>/month</span></h2>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>16 GB RAM</li>
                                    <li>320 GB Storage</li>
                                    <li>Unlimited Email Accounts</li>
                                    <li>Lifetime Support</li>
                                </ul>
                            </div>
                            <div class="price-button">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    section{
    padding: 60px 0;
}
.price-table{
    text-align: center;
    overflow: hidden;
    margin: 20px;
    background: #fff;
    box-sizing: border-box;
    box-shadow: inset 0 0 30px rgba(0,0,0,.2), 0 20px 40px rgba(0,0,0,.5);
    border-radius: 20px;
}
.col-sm-4:nth-child(2) .price-table{
    transform: scale(1.1);
}
.price-table .price-head{
    padding: 50px;
    background: #cb0c9f;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
}
.price-table .price-head h4{
    text-transform: uppercase;
    margin: 0;
    padding: 0;
    color: #fff;
    font-weight: 700;
}
.price-table .price-head h2{
    margin: 0;
    padding: 20px 0 0;
    font-size: 36px;
    color: #fff;
}
.price-content{
    position: relative;
}
.price-content ul{
    position: relative;
    margin: 0;
    padding: 20px 0;
}
.price-content ul li {
    list-style: none;
    font-weight: 500;
    font-size: 20px;
    font-family: 'Oswald', sans-serif;;
    text-transform: uppercase;
    padding: 10px 0;
    color: #000;
    cursor: pointer;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    transition: .5s;

}
.price-content ul li:hover{
    border-left: 15px solid #cb0c9f;
    border-right: 15px solid #cb0c9f;
}
.price-button{
    padding: 0 0 30px;
}
.price-button a{
    padding: 10px 40px;
    background:#cb0c9f;
    color: #fff;
    border-radius: 25px;
    font-size: 18px;
    text-transform: uppercase;
    text-decoration: none;
}
.background{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}  
</style>
@endsection
