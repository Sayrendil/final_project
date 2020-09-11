@extends('layouts.app')

@section('content')

    @if(Session::has('cart'))
        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-group">
                        @foreach($products as $product)
                            <li class="list-group-item">
                                <span class="badge">{{$product['qty']}}</span>
                                <h4>{{$product['item']['name']}}</h4>
                                <span class="label label-success">{{$product['price']}}</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Reduce By 1</a></li>
                                        <li><a href="">Reduce All</a></li>
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">

                </div>
            </div>
        </div>

    @else

    @endif

@endsection