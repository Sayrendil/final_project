@extends('layouts.app')

@section('content')

	<div class="container mb-5">
        <div class="row">
                <div class="col-lg-9">
                    <h1 class="contact-title">Контакты</h1>
                    <p class="text-grey">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi quas soluta ipsum reiciendis quo! Illo culpa cum ratione nam harum sequi, esse rerum eaque expedita unde qui asperiores fugiat impedit.</p>
                    <form action="" class="contact-form" method="post">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Send</button>
                    </form>
                </div>
                <div class="col-lg-3 mt-5">
                    <div class="contact-group">
                        <label>Email:</label>
                        <span>loceancosmetics@gmail.com</span>
                    </div>
                    <div class="contact-group">
                        <label>Телефон:</label>
                        <span>+7 (800)-555-35-35 </span>
                    </div>
                    <div class="contact-group">
                        <label>Адресс:</label>
                        <span>г.Алматы, ул. Розыбакиева 247, ЖК "Вавилон" корпус 5, офис 9</span>
                    </div>
                </div>
        </div>
    </div>

@endsection