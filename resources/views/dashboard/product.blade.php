@extends("layouts.dashboard")

@section("content")

    <form method="post" action="{{ route('product.create') }}" style="color:white;">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="decription">
        <input type="number" name="price" placeholder="price">
        <input type="number" name="quantity" placeholder="quantity">
{{--        <input type="text" name="category_id" placeholder="categories">--}}
        <input type="text" name="ref" placeholder="reference">
        <input type="text" name="image" placeholder="img string">

        <button type="submit">Envoyer</button>
    </form>



    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul>
@endsection
