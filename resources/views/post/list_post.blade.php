@extends('layout')

@section('content')


        @foreach($posts as $post)
        <!-- Post -->
             @include('post.partials.item', compact('post'))
        @endforeach

        <!-- Pagination -->
       <div class="pagination">
            <!--<a href="#" class="button previous">Previous Page</a>-->
            <div class="pages">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>&hellip;</span>
                <a href="#">20</a>
            </div>
            <a href="#" class="button next">Next Page</a>
        </div>


@endsection